import { Component, OnInit, OnDestroy, ViewEncapsulation, Inject } from '@angular/core';
import { DOCUMENT } from '@angular/common';

@Component({
  selector: 'app-pass-done',
  templateUrl: './pass-done.component.html',
  styleUrls: ['./pass-done.component.css'],
  encapsulation: ViewEncapsulation.None,
})
export class PassDoneComponent implements OnInit, OnDestroy {
  constructor(@Inject(DOCUMENT) private _document: any){}

  ngOnInit() {
    this._document.body.classList.add('body');
  }

  ngOnDestroy() {
    this._document.body.classList.add('body');
  }

}