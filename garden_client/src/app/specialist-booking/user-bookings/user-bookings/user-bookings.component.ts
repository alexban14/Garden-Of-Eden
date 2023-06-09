import { Component, OnInit } from '@angular/core';
import { SpecialistBookingModelReceive } from '../../../Models/specialist-booking,model';
import { UserManagementService } from 'src/app/services/user-management/user-management.service';
import { SpecialistBookingService } from 'src/app/services/specialist-booking/specialist-booking.service';
import { User } from 'src/app/Models/user.model';

@Component({
  selector: 'garden-client-user-bookings',
  templateUrl: './user-bookings.component.html',
  styleUrls: ['./user-bookings.component.css'],
})
export class UserBookingsComponent implements OnInit {
  userBookings!: SpecialistBookingModelReceive[];
  user!: User

  // states
  loading = false;

  constructor(private userManagementService: UserManagementService, private specialistBookingService: SpecialistBookingService) {}

  ngOnInit(): void {
    this.getBookingsForUser();
  }

  private getBookingsForUser() {
    this.loading = true;
    this.userManagementService.getAuthUser().subscribe({
      next: (res: any) => {
        this.user = res.data;
        this.specialistBookingService.getUserBookings(this.user.id).subscribe({
          next: (res: any) => {
            this.loading = false;
            this.userBookings = res.data;
            console.log(this.userBookings);
          },
          error: err => {
            this.loading = false;
            console.log(err);
          }
        });
      },
      error: err => {
        this.loading = false;
        console.log(err);
      }
    });
  }

  deleteBooking(book_id: string) {
    this.loading = true;
    this.specialistBookingService.deleteBooking(book_id).subscribe({
      next: res => {
        this.loading = false;
        window.location.reload();
      },
      error: err => {
        console.log(err)
      }
    });
  }
}
