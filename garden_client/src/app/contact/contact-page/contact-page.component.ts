import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-contact-page',
  templateUrl: './contact-page.component.html',
  styleUrls: ['./contact-page.component.css']
})
export class ContactPageComponent {
  contactForm: FormGroup;
  reqSuccess = false;
  reqError = false;
  isLoading = false

  constructor(public fb: FormBuilder, private _router: Router, private userManagementService: UserManagementService) {
    this.contactForm = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(4)]],
      email: ['', [Validators.required, Validators.email]],
      message: ['', [Validators.required, Validators.minLength(100), Validators.maxLength(10000)]]
    });
  }

  sendContactMessage() {
    this.isLoading = true;
    this.userManagementService.sentContactUsMessage(this.contactForm.value).subscribe({
      next: (res: any) => {
        this.contactForm.reset();
        this.isLoading = false;
        this._router.navigate(['/']);
      },
      error: err => {
        console.log(err);
        this.isLoading = false;
        this.reqSuccess = true;
      }
    })
  }
}
