import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-contact-form',
  templateUrl: './contact-form.component.html',
  styleUrls: ['./contact-form.component.css'],
})
export class ContactFormComponent {
  subscriberForm: FormGroup;

  // states
  loading = true;
  reqSuccess = false;
  reqError = false;

  constructor(public fb: FormBuilder, private userManagementService: UserManagementService) {
    this.subscriberForm = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(4)]],
      email: ['', [Validators.required, Validators.email]]
    });
  }

  subscribeToArticles() {
    this.loading = true;
    this.userManagementService.subscribeUser(this.subscriberForm.value).subscribe({
      next: (res: any) => {
        this.loading = false;
        this.reqSuccess = true;
        console.log(res);
        this.subscriberForm.reset();
      },
      error: err => {
        console.log(err);
        this.loading = false;
        this.reqError = true;
      }
    });
  }

}
