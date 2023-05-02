import { Component } from '@angular/core';

@Component({
  selector: 'garden-client-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css'],
})
export class AuthComponent {
  currentAuth = 'login';

  toggleLogin() {
    this.currentAuth = 'login';
  }

  toggleRegister() {
    this.currentAuth = 'register';
  }
}
