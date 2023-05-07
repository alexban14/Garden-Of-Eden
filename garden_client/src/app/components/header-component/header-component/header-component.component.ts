import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';

@Component({
  selector: 'garden-client-header-component',
  templateUrl: './header-component.component.html',
  styleUrls: ['./header-component.component.css'],
})
export class HeaderComponentComponent {
  showMenu = false;

  constructor(private authService: AuthService, private _router: Router) {}

  toggleNavbar(){
    this.showMenu = !this.showMenu;
  }

  logoutUser() {
    this.authService.logout().subscribe({
      next: res => {
        console.log(res);
        this._router.navigate(['/']);
      },
      error: err => console.log(err)
    });
  }

}
