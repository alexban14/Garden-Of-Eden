export interface PrizeModel {
	name: string,
	description: string,
	expiration_date: string
}

export interface PrizeModelReceive extends PrizeModel {
	id: string,
	user_id: string,
	created_at: Date
}
