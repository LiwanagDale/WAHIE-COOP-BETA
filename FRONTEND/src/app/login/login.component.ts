import { Component, OnInit, OnDestroy, ViewEncapsulation, Inject } from '@angular/core';
import { DOCUMENT } from '@angular/common';
import { transition, state, trigger, animate, style } from '@angular/animations';
import { formState, formState2, formState3, formState4, formState5, fade } from '../animation';

declare function clearInputField(): void;

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
  animations: [
    formState,
    formState2,
    formState3,
    formState4,
    formState5,
    fade

    /**trigger('formState', [
      state('hide', style({
        opacity: 0,
        display: 'none',
      })),
      state('show', style({
        opacity: 1,
       
      })),
      transition('show <=> hide', animate('1100ms ease-out', style({ opacity: 0, transform: 'translateX(500px)'  })))
    ]),
    trigger('formState2', [
      state('hide', style({
        opacity: 0,
        display: 'none',
      })),
      state('show', style({
        opacity: 1,
        
      })),
      transition('show <=> hide', animate('1100ms ease-in', style({ opacity: 0, transform: 'translateX(-500px)'  })))
    ]),
    trigger('formState3', [
      state('hide', style({
        opacity: 0,
        display: 'none',
      })),
      state('show', style({
        opacity: 1,
        display: 'block',
      })),
      transition('show <=> hide', animate('1100ms ease-in', style({ opacity: 0, transform: 'translateX(-500px)'  })))
    ]),**/
  ],
  encapsulation: ViewEncapsulation.None,
})
export class LoginComponent implements OnInit, OnDestroy {
  state = 'login';

  toggle() {
    this.state = this.state == 'login'?'register':'login';
  }

  get loginState() {
    return this.state == 'login'?'show':'hide';
  }

  get registerState() {
    return this.state == 'register'?'show':'hide';
  }

  isDisplayed: boolean = true;
  toggleDiv(){
    this.isDisplayed = this.isDisplayed? false:true;
  }
  
  visible:boolean = true;
  changetype:boolean = true;
  viewpass(){
    this.visible = !this.visible
    this.changetype = !this.changetype
  }
   cvisible:boolean = true;
  cchangetype:boolean = true;
  cviewpass(){
    this.cvisible = !this.cvisible
    this.cchangetype = !this.cchangetype
  }




  constructor(@Inject(DOCUMENT) private _document: any){  
}


  ngOnInit() {
    this._document.body.classList.add('body');
  }

  ngOnDestroy() {
    this._document.body.classList.add('body');
  }

}
