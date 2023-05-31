export interface BlogPostModel {
	title: string;
	body: string;
	image: string;
}

export interface BlogPostModelReceive extends BlogPostModel {
	id: string;
	user_id: string;
	created_at: Date;
}