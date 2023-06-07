import { TestBed } from '@angular/core/testing';

import { SpecialistBookingService } from './specialist-booking.service';

describe('SpecialistBookingService', () => {
  let service: SpecialistBookingService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(SpecialistBookingService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
