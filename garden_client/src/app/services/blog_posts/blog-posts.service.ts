import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { BlogPostModelReceive, BlogPostModel } from '../../Models/blog-post.model';

@Injectable({
  providedIn: 'root'
})
export class BlogPostsService {
  private BlogPostsEndpoint = '/api/v1/articles';
  private imageStoreEndpoint = '/api/v1/articles/image-store';
  private imageDeleteEndpoint = '/api/v1/articles/delete-image';

  constructor(private http: HttpClient) { }

  private headers = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllBlogPosts(page?: string, pageSize?: string) {
    return this.http.get<BlogPostModelReceive[]>(environment.serverURL + this.BlogPostsEndpoint, {
      params: new HttpParams()
                    .append('page_size', pageSize ? pageSize : '20')
                    .append('page', page ? page : '1')
    });
  }

  getBlogPost(id: string) {
    return this.http.get<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`);
  }

  creatBlogPost(BlogPost: BlogPostModel) {
    return this.http.post<{ data: BlogPostModelReceive }>(environment.serverURL + this.BlogPostsEndpoint, BlogPost, this.headers);
  }

  editBlogPost(id: string, BlogPost: BlogPostModel) {
    return this.http.patch<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`, BlogPost, this.headers);
  }

  deleteBlogPost(id: string) {
    return this.http.delete<BlogPostModelReceive>(environment.serverURL + this.BlogPostsEndpoint + `/${id}`, this.headers);
  }

  storeImage(image: FormData) {
    return this.http.post(environment.serverURL + this.imageStoreEndpoint, image, {
      observe: 'body',
      withCredentials: true
    });
  }

  deleteImage( image: { image: string } ) {
    return this.http.post(environment.serverURL + this.imageDeleteEndpoint, image, this.headers);
  }
}
