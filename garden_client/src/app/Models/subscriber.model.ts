export interface SubscriberModel {
	user_id: string;
}

export interface SubscriberModelReceive extends SubscriberModel {
	id: string;
	created_at: string;
}