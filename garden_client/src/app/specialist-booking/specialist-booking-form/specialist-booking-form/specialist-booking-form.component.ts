import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth/auth.service';
import { SpecialistBookingService } from 'src/app/services/specialist-booking/specialist-booking.service';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';

@Component({
  selector: 'garden-client-specialist-booking-form',
  templateUrl: './specialist-booking-form.component.html',
  styleUrls: ['./specialist-booking-form.component.css'],
})
export class SpecialistBookingFormComponent implements OnInit {
  specialistBookForm: FormGroup;

  // states
  loading = false;
  reqSuccess = false;
  reqError = false;
  isSpecialistBooked = false;

  constructor(
    public fb: FormBuilder,
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

  ngOnInit(): void {
      this.loading = true;
      this.userManagementService.getAuthUser().subscribe({
        next: (res:any) => {
          this.loading = false;
          this.specialistBookForm.addControl('name', new FormControl(res.data.username));
          this.specialistBookForm.addControl('email', new FormControl(res.data.email));
        }
      });
  }

  submitBooking() {
    this.loading = true;
    this.specialistBookingService.createBooking(this.specialistBookForm.value).subscribe({
      next: (res:any) => {
        console.log(res);
        this.specialistBookForm.reset();
        this.loading = false;
        const bookedError = res.error.message;
        if (bookedError) {
          this.isSpecialistBooked = true;
        } else {
          this.reqSuccess = true;
        }
      },
      error: err => {
        console.log(err);
        this.loading = false;
        this.reqError = true
      }
    });
  }

}
