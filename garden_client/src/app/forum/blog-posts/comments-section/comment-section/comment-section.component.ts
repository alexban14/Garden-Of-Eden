import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { PostCommentModel, PostCommentModelReceive } from 'src/app/Models/post-comment.model';
import { User } from 'src/app/Models/user.model';
import { PostCommentsService } from 'src/app/services/blog_posts/post-comments.service';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-comment-section',
  templateUrl: './comment-section.component.html',
  styleUrls: ['./comment-section.component.css'],
})
export class CommentSectionComponent implements OnInit {
  articleId!: string;
  articleComments!: PostCommentModelReceive[];
  commentForm: FormGroup;
  commentDataToSend!: PostCommentModel;
  commentsCount!: number;
  authUser: User | null = null;

  //states
  loading = false;

  constructor(private fb: FormBuilder, private route: ActivatedRoute, private postCommentsService: PostCommentsService, private userManagementService: UserManagementService) {
    this.commentForm = this.fb.group({
      body: ['', [Validators.required, Validators.minLength(20), Validators.maxLength(1000)]]
    })
  }

  ngOnInit(): void {
    this.loading = true;
    const idFromRoute = this.route.snapshot.paramMap.get('id');
    if(idFromRoute) {
      this.articleId = idFromRoute;
    }
    
    this.postCommentsService.getAllPostComments(this.articleId).subscribe({
      next: (res:any) => {
        this.loading = false;
        this.articleComments = res.data;
        this.commentsCount = res.meta.total;
        this.userManagementService.getAuthUser().subscribe({
          next: (res:any) => {
            console.log(res.data);
            this.authUser = res.data;
          },
          error: err => console.log(err),
        });
      },
      error: err => {
        console.log(err);
        this.loading = false;
      }
    });
  }

  submitComment() {
    this.loading = true;
    const commentData = {
      body: this.commentForm.controls['body'].value,
      article_id: this.articleId,
      user_id: this.authUser?.id
    }

    this.postCommentsService.createComment(commentData).subscribe({
      next: (res:any) => {
        this.loading = false;
        console.log(res);
        window.location.reload();
      },
      error: err => {
        this.loading = false;
        console.log(err);
        window.location.reload();
      }
    });
  }

  deleteComment(commentId: string) {
    this.loading = true;
    this.postCommentsService.deleteComment(commentId).subscribe({
      next: (res:any) => {
        this.loading = false;
        console.log(res),
        window.location.reload();
      },
      error: err => {
        this.loading = false;
        console.log(err);
        window.location.reload();
      }
    });
  }

}
