import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { BlogPostModelReceive, BlogPostModel } from '../../Models/blog-post.model';

@Injectable({
  providedIn: 'root'
})
export class BlogPostsService {
  private BlogPostsEndpoint = '/api/v1/articles';

  constructor(private http: HttpClient) { }

  private headers = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllBlogPosts(pageSize?: string, page?: string) {
    return this.http.get<BlogPostModelReceive[]>(environment.serverURL + this.BlogPostsEndpoint, {
      headers: new HttpHeaders()
                    .append('page_size', pageSize ? pageSize : '20')
                    .append('page', page ? page : '1')
    });
  }

  getBlogPost(id: number) {
    return this.http.get<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`);
  }

  creatBlogPost(BlogPost: BlogPostModel) {
    return this.http.post<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint, BlogPost, this.headers);
  }

  editBlogPost(id: number, BlogPost: BlogPostModel) {
    return this.http.patch<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`, BlogPost, this.headers);
  }

  deleteBlogPost(id: number) {
    return this.http.delete<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`, this.headers);
  }
}
