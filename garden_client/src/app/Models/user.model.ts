export interface LoginUserModel {
	email: string,
	password: string,
}

export interface RegisterUserModel extends LoginUserModel {
	name: string,
	password_confirmation: string
}
