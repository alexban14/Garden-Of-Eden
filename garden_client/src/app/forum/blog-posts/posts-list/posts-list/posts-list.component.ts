import { Component, OnInit } from '@angular/core';
import { BlogPostModel } from 'src/app/Models/blog-post.model';
import { AuthService } from 'src/app/services/auth/auth.service';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-posts-list',
  templateUrl: './posts-list.component.html',
  styleUrls: ['./posts-list.component.css'],
})
export class PostsListComponent implements OnInit{
  blogPosts!: BlogPostModel[];
  isAuthenticated: boolean;

  constructor(private postsService: BlogPostsService, private authService: AuthService) {
    this.isAuthenticated = this.authService.isAuthenticated();
    console.log('is authenticated list articles: ', this.isAuthenticated);
  }

  ngOnInit(): void {
      this.postsService.getAllBlogPosts().subscribe({
        next: (res: any) => {
          this.blogPosts = res.data;
          console.log(this.blogPosts);
        },
        error: err => console.log(err)
      });
  }
}
