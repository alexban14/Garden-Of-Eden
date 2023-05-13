import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth/auth.service';

@Component({
  selector: 'garden-client-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css'],
})
export class AuthComponent implements OnInit {
  currentAuth = 'login';

  constructor(private authService: AuthService, private _router: Router) {}

  toggleLogin() {
    this.currentAuth = 'login';
  }

  toggleRegister() {
    this.currentAuth = 'register';
  }

  ngOnInit(): void {
    const isAuthenticated: boolean = this.authService.isAuthenticated();
    if (isAuthenticated) { 
      this._router.navigate(['/']);
    }
      if (this._router.url === '/auth/login') {
        this.currentAuth = 'login';
      } else if (this._router.url === '/auth/register') {
        this.currentAuth = 'register';
      }
  }
}
