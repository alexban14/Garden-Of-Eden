import { ComponentFixture, TestBed } from '@angular/core/testing';
import { SpecialistBookingComponent } from './specialist-booking.component';

describe('SpecialistBookingComponent', () => {
  let component: SpecialistBookingComponent;
  let fixture: ComponentFixture<SpecialistBookingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [SpecialistBookingComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(SpecialistBookingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
