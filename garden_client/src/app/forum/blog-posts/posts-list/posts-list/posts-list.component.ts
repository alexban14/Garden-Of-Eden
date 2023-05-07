import { Component, OnInit } from '@angular/core';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-posts-list',
  templateUrl: './posts-list.component.html',
  styleUrls: ['./posts-list.component.css'],
})
export class PostsListComponent implements OnInit{
  constructor(private postsService: BlogPostsService) {}

  ngOnInit(): void {
      this.postsService.getAllBlogPosts().subscribe({
        next: res => console.log(res),
        error: err => console.log(err)
      });
  }
}
