import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class UserManagementService {
  private getUserEndpoint = '/api/v1/users';
  private getAuthUserEndpoint = '/api/v1/users/auth-user';
  private subscribeUserEndpoint = '/api/v1/subscribers';
  private contactUEndpoint = '/api/v1/contact-us-infos';

  constructor(private http: HttpClient) {}
  
  private options = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getUser(id: string) {
    return this.http.get(environment.serverURL + this.getUserEndpoint + `/${id}`);
  }

  getAuthUser() {
    return this.http.get(environment.serverURL + this.getAuthUserEndpoint);
  }

  subscribeUser(user: { name: string, email: string}) {
    return this.http.post(environment.serverURL + this.subscribeUserEndpoint, user, this.options);
  }

  getContactUsInfos() {
    return this.http.get(environment.serverURL + this.contactUEndpoint);
  }

  sentContactUsMessage(contactMessage: { name: string, email: string, message: string}) {
    return this.http.post(environment.serverURL + this.contactUEndpoint, contactMessage, this.options);
  }

  deleteContactUsMessage(id: string) {
    return this.http.delete(environment.serverURL + this.contactUEndpoint + `/${id}`, this.options);
  }
}
