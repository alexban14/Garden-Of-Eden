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
      this.authService.getSanctumCookie().subscribe({
        next: res => console.log(res),
        error: err => console.log(err)
      });
  }
}
