import { Injectable } from '@angular/core';
import {
  HttpRequest,
  HttpHandler,
  HttpEvent,
  HttpInterceptor
} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()
export class SanctumInterceptor implements HttpInterceptor {

  intercept(request: HttpRequest<unknown>, next: HttpHandler): Observable<HttpEvent<unknown>> {
    const csrfCookie = this.getCookie('XSRF-TOKEN');
    const csrfToken = csrfCookie ? csrfCookie.split(":")[1] : null;
    if (csrfToken) {
      document.cookie = "XSRF-TOKEN=" + csrfToken;
    }
    console.log("CSRF token: " + csrfToken);
    return next.handle(request);
  }

  private getCookie(name: string): string|null {
    const cookies = document.cookie.split(';');
    for(let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      if(cookie.startsWith(name)) {
        return cookie;
      }
    }
    return null;
  }
}
