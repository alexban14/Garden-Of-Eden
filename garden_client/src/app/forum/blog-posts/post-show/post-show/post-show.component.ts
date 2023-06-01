import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { BlogPostModel, BlogPostModelReceive } from 'src/app/Models/blog-post.model';
import { User } from 'src/app/Models/user.model';
import { AuthService } from 'src/app/services/auth/auth.service';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-post-show',
  templateUrl: './post-show.component.html',
  styleUrls: ['./post-show.component.css'],
})
export class PostShowComponent implements OnInit {
  blogPost!: BlogPostModelReceive;
  blogPostId = this.route.snapshot.paramMap.get('id');
  postUserId!: string;
  blogUser!: User;
  authUser!: User;
  isArticleOwner = false;

  loading = false;

  constructor(public _router: Router, public route: ActivatedRoute, private authService: AuthService, private blogPostsService: BlogPostsService, private userManagementService: UserManagementService) {}

  ngOnInit(): void {
    this.loading = true;
    if(this.authService.isAuthenticated()) {
      this.userManagementService.getAuthUser().subscribe({
        next: (res: any) => {
          this.loading = false;
          this.authUser = res.data;
        },
        error: err => {
          console.log(err);
          this.loading = false;
        }
      });
    }
    if (this.blogPostId) {
      this.blogPostsService.getBlogPost(this.blogPostId).subscribe({
        next: (res:any) => {
          this.loading = false;
          this.blogPost = res.data;
          this.postUserId = this.blogPost.user_id;
          this.userManagementService.getUser(this.postUserId).subscribe({
            next: (res: any) => {
              this.loading = false;
              this.blogUser = res.data;
               if (this.blogUser.id === this.authUser.id) {
                this.isArticleOwner = true;
               }
            },
            error: err => {
              console.log(err);
              this.loading = false;
            }
          });
        },
        error: err => {
          console.log(err)
          this.loading = false;
        }
      });
    }
  }

  editArticle(id: string) {
    this._router.navigate([`/blog/post/${id}/edit`]);
  }

  deleteArticle() {
    this.loading = true;
    const image = {
      image: this.blogPost.image
    }
    this.blogPostsService.deleteImage(image).subscribe({
      next: res => {
        console.log('image deleted');
        this.blogPostsService.deleteBlogPost(this.blogPost.id).subscribe({
          next: res => {
            this.loading = false;
            this._router.navigate(['/blog/posts']);
          },
          error: err => console.log(err)
        });
      },
      error: err => {
        console.log(err);
        this.loading = false;
      }
    });
  }
}
