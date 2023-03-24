import { Component, OnInit, OnDestroy, ViewEncapsulation, Inject} from '@angular/core';
import { DOCUMENT } from '@angular/common';
import { slideleft2, slideright2 } from '../animation';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
  animations: [slideleft2, slideright2],
  encapsulation: ViewEncapsulation.None,
})

export class RegisterComponent implements OnInit, OnDestroy {
 
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

  checkvisible:boolean = true;
  checkBox(){
    this.checkvisible = !this.checkvisible
  }

  constructor(@Inject(DOCUMENT) private _document: any){}

  ngOnInit() {
    this._document.body.classList.add('body');
  }

  ngOnDestroy() {
    this._document.body.classList.add('body');
  }

}
