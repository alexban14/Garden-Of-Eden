import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { LoginUserModel } from 'src/app/Models/user.model';
import { AuthService } from 'src/app/services/auth/auth.service';
import { environment } from 'src/environments/environment.development';

@Component({
  selector: 'garden-client-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  loginData: FormGroup;

  constructor(public fb: FormBuilder, private authService: AuthService, private _router: Router) {
    this.loginData = this.fb.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(8)]]
    });
  }

  submitOauthLoginInfo() {
    const loginFormData = this.loginData.getRawValue();

    const oauthLogin: LoginUserModel = {
      username: loginFormData.email,
      password: loginFormData.password,
      grant_type: 'password',
      client_id: environment.CLIENT_ID,
      client_secret: environment.CLIENT_SECRET,
      scope: '*'
    }

    this.authService.login(oauthLogin).subscribe({
      next: (res: any) => {
        localStorage.setItem('oauth_access_token', res.access_token);
        console.log(res);
        this._router.navigate(['/']);
      },
      error: error => console.log(error)
    });
  }
}
