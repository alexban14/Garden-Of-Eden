import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';
import { LoginUserModel, RegisterUserModel } from 'src/app/Models/user.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private registerEndpoint = '/api/register';
  private loginEndpoint = '/api/login';
  private logoutEndpoint = '/api/logout';
  private forgotPasswordEmail = '/api/forgot-password';
  private resetPassword = '/api/reset-password';
  private changePassword = '/api/user/password';
  private editProfileInfo = '/api/user/profile-information';
  private confirmPassword = '/api/user/confirm-password';
  private confirmedPasswordStatus = '/api/user/confirm-password-status';
  private verifyEmailNotification = '/api/email/verification-notification';
  private sanctumCsrfCookie = '/sanctum/csrf-cookie';

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

  login(user: LoginUserModel) {
    return this.http.post(environment.serverURL + this.loginEndpoint, user, this.options);
  }

  logout() {
    return this.http.post(environment.serverURL + this.logoutEndpoint, this.options);
  }

  getSanctumCookie() {
    return this.http.get(environment.serverURL + this.sanctumCsrfCookie);
  }
}