import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
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

  oldImage!: string;
  image!: File;
  newImageToUploadForm = new FormData();

    //states
    loading = false

  constructor(public fb: FormBuilder, public route: ActivatedRoute, public _router: Router, private authService: AuthService, private blogPostsService: BlogPostsService) {
    this.blogPostToEdit = this.fb.group({
      title: ['', [Validators.required, Validators.minLength(4)]],
      body: ['', [Validators.required, Validators.minLength(100), Validators.maxLength(10000)]]
    });
  }

  ngOnInit(): void {
    this.loading = true;
    if (this.blogPostId) {
      this.blogPostsService.getBlogPost(this.blogPostId).subscribe({
        next: (res: any) => {
          this.loading = false;
          console.log(res);
          this.blogPostToEdit.setValue({
            title: res.data.title,
            body: res.data.body
          });
          this.oldImage = res.data.image;
        },
        error: err => {
          this.loading = false;
          console.log(err);
        }
      });
    }
  }

  onFileSelected(event: any) {
    this.image = event.target.files[0];
    if (this.image) {
      this.newImageToUploadForm.append('image', this.image);
    }
    console.log(this.newImageToUploadForm.get('image'));
  }


  submitEdit() {
    this.loading = true;
    const imageToDelete = {
      image: this.oldImage
    }
    if (this.newImageToUploadForm.has('image')) {
      this.editArticleWithNewImage(imageToDelete);
    } else {
      this.editArticleContents();
    }

  }

  editArticleWithNewImage(imageToDelete: { image: string}) {
    const updatedArticle = {
      title: this.blogPostToEdit.controls['title'].value,
      image: '',
      body: this.blogPostToEdit.controls['body'].value
    }

    this.blogPostsService.deleteImage(imageToDelete).subscribe({
      next: res => {

        this.blogPostsService.storeImage(this.newImageToUploadForm).subscribe({
          next: (res:any) => {
            updatedArticle.image = res.data.image;

            if(this.blogPostId) {
              this.blogPostsService.editBlogPost(this.blogPostId, updatedArticle).subscribe({
                next: res => {
                  this.loading = false;
                  this._router.navigate([`/blog/post/${this.blogPostId}`]);
                },
                error: err => console.log(err)
              });
            }

          },
          error: err => {
            this.loading = false;
            console.log(err);
          }
        });

      },
      error: err => {
        this.loading = false;
      }
    });
  }

  editArticleContents() {
    const updatedArticle = {
      title: this.blogPostToEdit.controls['title'].value,
      image: this.oldImage,
      body: this.blogPostToEdit.controls['body'].value
    }
    if(this.blogPostId) {
      this.blogPostsService.editBlogPost(this.blogPostId, updatedArticle).subscribe({
        next: res => {
          this.loading = false;
          console.log(res);
          this._router.navigate([`/blog/post/${this.blogPostId}`]);
        },
        error: err => console.log(err)
      });
    }
  }

}
