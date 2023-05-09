import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'garden-client-header-component',
  templateUrl: './header-component.component.html',
  styleUrls: ['./header-component.component.css'],
})
export class HeaderComponentComponent implements OnInit {
  showMenu = false;
  isLoggedIn = false;

  constructor(private _router: Router) {}

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
    window.location.reload();
  }

}
