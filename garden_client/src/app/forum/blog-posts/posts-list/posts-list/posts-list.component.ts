import { Component, OnInit } from '@angular/core';
import { BlogPostModelReceive } from 'src/app/Models/blog-post.model';
import { AuthService } from 'src/app/services/auth/auth.service';
import { BlogPostsService } from 'src/app/services/blog_posts/blog-posts.service';

@Component({
  selector: 'garden-client-posts-list',
  templateUrl: './posts-list.component.html',
  styleUrls: ['./posts-list.component.css'],
})
export class PostsListComponent implements OnInit{
  blogPosts!: BlogPostModelReceive[];
  isAuthenticated: boolean;
  paginationInfo = {
    per_page: 1,
    current_page: 1,
    last_page: 1
  }

  constructor(private postsService: BlogPostsService, private authService: AuthService) {
    this.isAuthenticated = this.authService.isAuthenticated();
  }

  ngOnInit(): void {
    this.fetchInitialBlogPosts();
  }

  fetchInitialBlogPosts() {
    this.postsService.getAllBlogPosts('1', '10').subscribe({
      next: (res: any) => {
        this.setBlogPostData(res);
      },
      error: err => console.log(err)
    });
  }

  setBlogPostData(res: any) {
    this.blogPosts = res.data;
    this.paginationInfo = {
      per_page: res.meta.per_page,
      current_page: res.meta.current_page,
      last_page: res.meta.last_page
    }
  }

  arrayPagination(numPages: number): string[] {
    return Array(numPages);
  }

  changePage(page: number) {
    const stringPage = page.toString()
    console.log(stringPage);
    this.postsService.getAllBlogPosts(stringPage, '10').subscribe({
        next: (res: any) => {
            this.setBlogPostData(res);
        },
        error: (err) => console.log(err)
    });
    console.log(page);
  }

}
