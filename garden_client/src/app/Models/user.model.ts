export interface LoginUserModel {
	username: string,
	password: string,
	grant_type: string,
	client_id: number,
	client_secret: string,
	scope: string
}

export interface RegisterUserModel extends LoginUserModel {
	name: string,
	password_confirmation: string
}

export interface OAuthLoginResponse {
	token_type: string,
	expires_in: number,
	access_token: string,
	refresh_token: string
}

export interface User {
	id: string,
	username: string,
	email:string
}