import { Component, OnInit, OnDestroy, ViewEncapsulation, Inject} from '@angular/core';
import { DOCUMENT } from '@angular/common';
import { transition, state, trigger, animate, style } from '@angular/animations';


@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
  animations: [
    trigger('slideleft', [
      transition(':enter', [
        style({Transform: 'translateX(-100%)'}),
        animate('1s')
      ]),
      transition(':leave', [
        animate('1s', style({transform: 'translateX(100%)'}))
      ])
    ]),

    trigger('slideright', [
      transition(':enter', [
        style({Transform: 'translateX(100%)'}),
        animate('1s')
      ]),
      transition(':leave', [
        animate('1s', style({transform: 'translateX(-100%)'}))
      ])
    ]),
  ],
  encapsulation: ViewEncapsulation.None,

})
export class RegisterComponent implements OnInit, OnDestroy  {
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

  constructor(@Inject(DOCUMENT) private _document: any){}

  ngOnInit() {
    this._document.body.classList.add('body');
  }

  ngOnDestroy() {
    this._document.body.classList.add('body');
  }

}
