import { ComponentFixture, TestBed } from '@angular/core/testing';
import { SpecialistBookingFormComponent } from './specialist-booking-form.component';

describe('SpecialistBookingFormComponent', () => {
  let component: SpecialistBookingFormComponent;
  let fixture: ComponentFixture<SpecialistBookingFormComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [SpecialistBookingFormComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(SpecialistBookingFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
