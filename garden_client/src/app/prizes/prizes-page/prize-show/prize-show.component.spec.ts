import { ComponentFixture, TestBed } from '@angular/core/testing';
import { PrizeShowComponent } from './prize-show.component';

describe('PrizeShowComponent', () => {
  let component: PrizeShowComponent;
  let fixture: ComponentFixture<PrizeShowComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PrizeShowComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(PrizeShowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
