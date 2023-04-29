import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { PrizeModelReceive, PrizeModel } from 'src/app/Models/prize.model';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class PrizesService {
  private prizesEndpoint = '/api/v1/prizes'

  constructor(private http: HttpClient) { }

  private headers = {
    withCredentials: true,
    headers: new HttpHeaders()
                  .append('Content-Type', 'application/json')
                  .append('Accept', 'application/json')
  }

  getAllPrizes(pageSize?: string, page?: string) {
    return this.http.get<PrizeModelReceive[]>(environment.serverURL + this.prizesEndpoint, {
      headers: new HttpHeaders()
                    .append('page_size', pageSize ? pageSize : '20' )
                    .append('page', page ? page : '1')
    });
  }

  getPrize(id: number) {
    return this.http.get<PrizeModelReceive>(environment.serverURL + this.prizesEndpoint + `/${id}`);
  }

  createPrize(Prize: PrizeModel) {
    return this.http.post<PrizeModelReceive>(environment.serverURL + this.prizesEndpoint, Prize, this.headers);
  }

  editPrize(id: string, Prize: PrizeModel) {
    return this.http.patch<PrizeModelReceive>(environment.serverURL + this.prizesEndpoint + `/${id}`, Prize, this.headers);
  }

  deletePrize(id: string) {
    return this.http.delete<PrizeModelReceive>(environment.serverURL + this.prizesEndpoint + `/${id}`, this.headers);
  }
}
