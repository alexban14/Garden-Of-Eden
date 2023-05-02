import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';

@Component({
  selector: 'garden-client-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  registerData: FormGroup;

  constructor(public fb: FormBuilder, private authService: AuthService, private _router: Router) {
    this.registerData = this.fb.group({
      username: ['', [Validators.required, Validators.minLength(4)]],
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(4)]],
      password_confirmation: ['', [Validators.required, Validators.minLength(4)]]
    })
  }

  submitRegisterForm() {
    return;
  }
}
