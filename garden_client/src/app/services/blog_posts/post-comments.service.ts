import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { PostCommentModelReceive, PostCommentModel } from 'src/app/Models/post-comment.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class PostCommentsService {
  private PostCommentsEndpoint = '/api/v1/comments';

  constructor(private http: HttpClient) { }

  private headers = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllPostComments(article_id: string, pageSize?: string, page?: string) {
    return this.http.get<PostCommentModelReceive[]>(environment.serverURL + this.PostCommentsEndpoint + `/${article_id}`, {
      headers: new HttpHeaders()
                      .append('page_size', pageSize ? pageSize : '20')
                      .append('page', page ? page : '1')
    });
  }

  createComment(PostComment: any) {
    return this.http.post<PostCommentModelReceive>(environment.serverURL + this.PostCommentsEndpoint, PostComment, this.headers);
  }

  editComment(id: number, PostComment: PostCommentModel) {
    return this.http.patch<PostCommentModelReceive>(environment.serverURL + this.PostCommentsEndpoint + `/${id}`, PostComment, this.headers);
  }

  deleteComment(id: number) {
    return this.http.delete<PostCommentModelReceive>(environment.serverURL + this.PostCommentsEndpoint + `/${id}`, this.headers);
  }
}
