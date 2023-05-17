import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { BlogPostModelReceive } from 'src/app/Models/blog-post.model';
import { AuthService } from 'src/app/services/auth/auth.service';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-post-edit',
  templateUrl: './post-edit.component.html',
  styleUrls: ['./post-edit.component.css'],
})
export class PostEditComponent implements OnInit {
  blogPostToEdit: FormGroup;
  blogPostId = this.route.snapshot.paramMap.get('id');

  constructor(public fb: FormBuilder, public route: ActivatedRoute, public _router: Router, private authService: AuthService, private blogPostsService: BlogPostsService) {
    this.blogPostToEdit = this.fb.group({
      title: ['', [Validators.required, Validators.minLength(4)]],
      image: ['', [Validators.required]],
      body: ['', [Validators.required, Validators.minLength(100), Validators.maxLength(10000)]]
    });
  }

  ngOnInit(): void {
    if (this.blogPostId) {
      this.blogPostsService.getBlogPost(this.blogPostId).subscribe({
        next: (res: any) => {
          console.log(res);
          this.blogPostToEdit.setValue({
            title: res.data.title,
            image: res.data.image,
            body: res.data.body
          });
        },
        error: err => console.log(err)
      });
    }
  }

  submitEdit() {
    if(this.blogPostId) {
      this.blogPostsService.editBlogPost(this.blogPostId, this.blogPostToEdit.value).subscribe({
        next: res => {
          console.log(res);
          this._router.navigate([`/blog/post/${this.blogPostId}`]);
        },
        error: err => console.log(err)
      });
    }
  }

}
