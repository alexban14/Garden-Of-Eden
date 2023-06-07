import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';
import { SpecialistBookingService } from 'src/app/services/specialist-booking/specialist-booking.service';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-specialist-booking-form',
  templateUrl: './specialist-booking-form.component.html',
  styleUrls: ['./specialist-booking-form.component.css'],
})
export class SpecialistBookingFormComponent {
  specialistBookForm: FormGroup;

  // states
  loading = false;
  reqSuccess = false;
  reqError = false;

  constructor(
    public fb: FormBuilder,
    private authService: AuthService,
    private userManagementService: UserManagementService,
    private specialistBookingService: SpecialistBookingService,
    private _router: Router
  ) {
    this.specialistBookForm = this.fb.group({
      specialist: ['', [Validators.required]],
      date: ['', [Validators.required]],
      time: ['', [Validators.required]]
    });
  }

  submitBooking() {
    //
  }

}
