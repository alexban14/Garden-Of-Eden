import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';
import { LoginUserModel, RegisterUserModel } from 'src/app/Models/user.model';
import { environment } from 'src/environments/environment';
import { JwtHelperService } from '@auth0/angular-jwt';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private registerEndpoint = '/api/v1/users';
  private loginOauthEndpoint = '/oauth/token';

  private jwtHelperLib = new JwtHelperService();

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

  isAuthenticated(): boolean {
    const token = localStorage.getItem('oauth_access_token');
    if (token) {
      if (this.jwtHelperLib.isTokenExpired(token) === false) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  isTokenExpired(token: string) {
    return this.jwtHelperLib.isTokenExpired(token);
  }
}