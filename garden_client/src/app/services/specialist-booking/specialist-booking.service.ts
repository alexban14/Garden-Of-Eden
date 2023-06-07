import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { SpecialistBookingModelReceive, SpecialistBookingModel } from 'src/app/Models/specialist-booking,model';
import { environment } from 'src/environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class SpecialistBookingService {
  private specialistBookingApiEndpoint = '/api/v1/bookings';

  constructor(private http: HttpClient) { }

  private options = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllBookings() {
    return this.http.get<{ data: SpecialistBookingModelReceive }[]>(environment.serverURL + this.specialistBookingApiEndpoint);
  }

  createBooking(booking: SpecialistBookingModel) {
    return this.http.post<{ data: SpecialistBookingModelReceive }>(environment.serverURL + this.specialistBookingApiEndpoint, booking, this.options);
  }

  getUserBookings(user_id: string) {
    return this.http.get<{ data: SpecialistBookingModelReceive }[]>(environment.serverURL + this.specialistBookingApiEndpoint + `/${user_id}`);
  }

  deleteBooking(booking_id: string) {
    return this.http.delete<{ data: SpecialistBookingModelReceive }>(environment.serverURL + this.specialistBookingApiEndpoint + `/${booking_id}`);
  }
}
