export interface SpecialistBookingModel {
	specialist: string,
	date: string,
	time: string,
	name: string,
	email: string,
}

export interface SpecialistBookingModelReceive extends SpecialistBookingModel {
	id: string,
	user_id: string,
	created_at: string	
}