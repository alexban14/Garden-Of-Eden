import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-post-new',
  templateUrl: './post-new.component.html',
  styleUrls: ['./post-new.component.css'],
})
export class PostNewComponent {
  newBlogPostForm: FormGroup;

  constructor(public fb: FormBuilder, private blogPostsService: BlogPostsService, public _router: Router) {
    this.newBlogPostForm = this.fb.group({
      title: ['', [Validators.required, Validators.minLength(4)]],
      image: ['', [Validators.required]],
      body: ['', [Validators.required, Validators.minLength(100), Validators.maxLength(10000)]]
    });
  }

  submitNewBlogPost() {
    const newBlogPost = this.newBlogPostForm.value;
    console.log(newBlogPost);
    this.blogPostsService.creatBlogPost(newBlogPost).subscribe({
      next: res => {
        this._router.navigate(['/auth/login']).then( () => {
          window.location.reload();
        });
      },
      error: err => console.log(err)
    });
  }
}
