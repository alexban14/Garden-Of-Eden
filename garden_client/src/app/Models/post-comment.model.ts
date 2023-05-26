export interface PostCommentModel {
	body: string,
	article_id: string
	user_id: string,
}

export interface PostCommentModelReceive extends PostCommentModel {
	username: string,
	id: string,
	created_at: Date
}
