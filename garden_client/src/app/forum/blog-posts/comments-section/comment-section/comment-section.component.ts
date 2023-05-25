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

  constructor(private fb: FormBuilder, private route: ActivatedRoute, private postCommentsService: PostCommentsService, private userManagementService: UserManagementService) {
    this.commentForm = this.fb.group({
      body: ['', [Validators.required, Validators.minLength(20), Validators.maxLength(1000)]]
    })
  }

  ngOnInit(): void {
    const idFromRoute = this.route.snapshot.paramMap.get('id');
    if(idFromRoute) {
      this.articleId = idFromRoute;
    }
    
    this.postCommentsService.getAllPostComments(this.articleId).subscribe({
      next: (res:any) => {
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
      error: err => console.log(err),
    });
  }

  submitComment() {
    //
  }

  getUserNameFromId = (userId: string) => {
    let commentOwnerName = '';
    this.userManagementService.getUser(userId).subscribe({
      next: (res:any) => {
        commentOwnerName = res.data.name
      },
      error: err => console.log(err)
    });
    return commentOwnerName;
  }

  isCommentOwner = (commentUserId: string) => {
    if (this.authUser) {
      if (this.authUser.id === commentUserId) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
