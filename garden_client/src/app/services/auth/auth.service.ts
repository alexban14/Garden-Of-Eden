import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';
import { LoginUserModel, RegisterUserModel } from 'src/app/Models/user.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private registerEndpoint = '/api/v1/users';
  private loginOauthEndpoint = '/oauth/token';

  constructor(private http: HttpClient, private _router: Router) {}

  private options = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  register(user: RegisterUserModel) {
    return this.http.post(environment.serverURL + this.registerEndpoint, user, this.options);
  }

  login(oauthUser: LoginUserModel) {
    return this.http.post(environment.serverURL + this.loginOauthEndpoint, oauthUser, this.options);
  }
}