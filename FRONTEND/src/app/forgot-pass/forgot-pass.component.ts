import { Component, OnInit, OnDestroy, ViewEncapsulation, Inject } from '@angular/core';
import { DOCUMENT } from '@angular/common';
import { formState, formState5, formState6} from '../animation';


@Component({
  selector: 'app-forgot-pass',
  templateUrl: './forgot-pass.component.html',
  styleUrls: ['./forgot-pass.component.css'],
  animations:[
    formState, formState5, formState6
  ],
  encapsulation: ViewEncapsulation.None,
})
export class ForgotPassComponent  implements OnInit, OnDestroy {

  state = 'forgot-pass';

  toggle() {
    this.state = this.state == 'forgot-pass'?'check-email':'new-pass';
  }


  get forgotpassState() {
    return this.state == 'forgot-pass'?'show':'hide';
  }

  get checkemailState() {
    return this.state == 'check-email'?'show':'hide';
  }


  constructor(@Inject(DOCUMENT) private _document: any){}

  ngOnInit() {
    this._document.body.classList.add('body');
  }

  ngOnDestroy() {
    this._document.body.classList.add('body');
  }

}