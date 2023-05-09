import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'garden-client-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css'],
})
export class AuthComponent implements OnInit {
  currentAuth = 'login';

  constructor(private _router: Router) {}

  toggleLogin() {
    this.currentAuth = 'login';
  }

  toggleRegister() {
    this.currentAuth = 'register';
  }

  ngOnInit(): void {
      if (this._router.url === '/auth/login') {
        this.currentAuth = 'login';
      } else if (this._router.url === '/auth/register') {
        this.currentAuth = 'register';
      }
  }
}
