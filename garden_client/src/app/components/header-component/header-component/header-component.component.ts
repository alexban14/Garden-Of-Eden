import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';

@Component({
  selector: 'garden-client-header-component',
  templateUrl: './header-component.component.html',
  styleUrls: ['./header-component.component.css'],
})
export class HeaderComponentComponent implements OnInit {
  showMenu = false;
  isLoggedIn = false;

  constructor(private authService: AuthService, private _router: Router) {}

  ngOnInit(): void {
      if (localStorage.getItem('oauth_access_token')) {
        this.isLoggedIn = true;
      } else {
        this.isLoggedIn = false;
      }
  }

  toggleNavbar(){
    this.showMenu = !this.showMenu;
  }

  logoutUser() {
    localStorage.removeItem('oauth_access_token');
    this._router.navigateByUrl('/', { skipLocationChange: true }).then(() => {
      this._router.navigate([this._router.url]);
    });
  }

}
