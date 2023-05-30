import { Component } from '@angular/core';
import { AbstractControl, FormBuilder, FormGroup, ValidatorFn, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';

@Component({
  selector: 'garden-client-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  registerData: FormGroup;

  //states
  loading = false;
  reqError = false;

  constructor(public fb: FormBuilder, private authService: AuthService, private _router: Router) {
    this.registerData = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(4)]],
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]],
      password_confirmation: ['', [Validators.required, Validators.minLength(6), this.matchPasswordValidator()]]
    });
  }

  matchPasswordValidator(): ValidatorFn {
    return (control: AbstractControl): { [key: string]: any } | null => {
      const password = control.parent?.get('password');
      const confirmPassword = control;

      if (password && confirmPassword && password.value !== confirmPassword.value) {
        return { passwordMismatch: true };
      }
      return null;
    };
  }

  submitRegisterForm() {
    this.loading = true;
    const registerFormValue = this.registerData.value;
    this.authService.register(registerFormValue).subscribe({
      next: res => {
        this.loading = false;
        this._router.navigate(['/auth/login']).then( () => {
          window.location.reload();
        });
      },
      error: (err: any) => {
        this.loading = false;
        this.reqError = true;
        console.log(err);
        this._router.navigate([this._router.url]);
      }
    });
  }
}
