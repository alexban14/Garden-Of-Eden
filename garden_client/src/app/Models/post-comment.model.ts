export interface PostCommentModel {
	body: string,
	article_id: string
}

export interface PostCommentModelReceive extends PostCommentModel {
	id: string,
	user_id: string,
	created_at: Date
}
