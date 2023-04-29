import { Component } from '@angular/core';

@Component({
  selector: 'garden-client-footer-component',
  templateUrl: './footer-component.component.html',
  styleUrls: ['./footer-component.component.css'],
})
export class FooterComponentComponent {
  date = new Date().getFullYear();

}
