import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { SubscriberModelReceive, SubscriberModel } from 'src/app/Models/subscriber.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class SubscribersService {
  private subscribersEndpoint = '/api/v1/subscribers';

  constructor(private http: HttpClient) { }

  private headers = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllSubscribers(pageSize?: string, page?: string) {
    return this.http.get<SubscriberModelReceive>(environment.serverURL + this.subscribersEndpoint, {
      headers: new HttpHeaders()
                    .append('page_size', pageSize ? pageSize : '20')
                    .append('page', page ? page : '1')
    });
  }

  createSubscriber(Subscriber: SubscriberModel) {
    return this.http.post<SubscriberModelReceive>(environment.serverURL + this.subscribersEndpoint, Subscriber, this.headers);
  }

  deleteSubscriber(id: string) {
    return this.http.delete<SubscriberModelReceive>(environment.serverURL + this.subscribersEndpoint + `/${id}`, this.headers);
  }
}
