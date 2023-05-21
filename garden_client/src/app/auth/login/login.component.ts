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

  // states
  loading = false;
  reqSuccess = false;
  reqError = false;

  constructor(public fb: FormBuilder, private authService: AuthService, private _router: Router) {
    this.loginData = this.fb.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]]
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

    this.loading = true;

    this.authService.login(oauthLogin).subscribe({
      next: (res: any) => {
        this.loading = false;
        localStorage.setItem('oauth_access_token', res.access_token);
        console.log(res);
        this._router.navigate(['/']).then( () => {
          window.location.reload();
        });
      },
      error: error => {
        console.log(error)
        this.loading = false;
        this.reqError = true;
      }
    });
  }
}
