import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class UserManagementService {
  private getUserEndpoint = '/api/v1/users'

  constructor(private http: HttpClient) {}

  getUser(id: string) {
    return this.http.get(environment.serverURL + this.getUserEndpoint + `/${id}`);
  }
}
