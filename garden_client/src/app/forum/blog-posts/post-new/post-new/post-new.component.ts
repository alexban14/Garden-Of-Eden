import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { BlogPostModel } from 'src/app/Models/blog-post.model';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-post-new',
  templateUrl: './post-new.component.html',
  styleUrls: ['./post-new.component.css'],
})
export class PostNewComponent {
  newBlogPostForm: FormGroup;

  image!: File;
  imageToUploadForm = new FormData();
  imageFileName!: string;

  //states
  loading = false

  constructor(public fb: FormBuilder, private blogPostsService: BlogPostsService, public _router: Router) {
    this.newBlogPostForm = this.fb.group({
      title: ['', [Validators.required, Validators.minLength(4)]],
      body: ['', [Validators.required, Validators.minLength(100), Validators.maxLength(10000)]]
    });
  }

  onFileSelected(event: any) {
    this.image = event.target.files[0];
    if (this.image) {
      this.imageToUploadForm.append('image', this.image);
    }
    console.log(this.imageToUploadForm.get('image'));
  }

  submitNewBlogPost() {
    this.loading = true;
    this.blogPostsService.storeImage(this.imageToUploadForm).subscribe({
      next: (res:any) => {
        this.loading = false;
        console.log(res);
        this.sendBlogPostData(res.data.image)
      },
      error: err => {
        this.loading = false;
        console.log(err);
      }
    });
  }

  sendBlogPostData(imageFileName: string) {
    const newBlogPost: BlogPostModel = {
      title: this.newBlogPostForm.controls['title'].value,
      image: imageFileName,
      body: this.newBlogPostForm.controls['body'].value,
    }
    this.blogPostsService.creatBlogPost(newBlogPost).subscribe({
      next: res => {
        this._router.navigate([`/blog/post/${res.data.id}`]).then( () => {
          window.location.reload();
        });
      },
      error: err => console.log(err)
    });
  }
}
