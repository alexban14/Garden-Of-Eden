import { Component, OnInit } from '@angular/core';
import { AuthService } from './services/auth/auth.service';

@Component({
  selector: 'garden-client-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent implements OnInit {
  title = 'garden-client';

  constructor(public authService: AuthService) {}

  ngOnInit(): void {
    const oauth_access_token = localStorage.getItem('oauth_access_token')
    if (oauth_access_token) {
      this.removeToken(oauth_access_token);
    }
  }
  removeToken(token: string) {
    const isTokenExpired = this.authService.isTokenExpired(token);
    console.log('Is token expired? ', isTokenExpired);
    isTokenExpired ? localStorage.removeItem('oauth_access_token') : null;
  }
}
