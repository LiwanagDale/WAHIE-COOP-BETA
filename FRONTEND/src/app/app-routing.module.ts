import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { RegisterComponent } from './register/register.component';
import { LoginComponent } from './login/login.component';
import { ForgotPassComponent } from './forgot-pass/forgot-pass.component';
import { CheckEmailComponent } from './check-email/check-email.component';
import { NewPassComponent } from './new-pass/new-pass.component';
import { PassDoneComponent } from './pass-done/pass-done.component';


const routes: Routes = [
  {
    path: 'login', 
    component: LoginComponent
  },
  {
    path: 'register', 
    component: RegisterComponent
  },
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full'
  },
  {
    path: 'forgot-pass', 
    component: ForgotPassComponent
  },
  {
    path: 'check-email', 
    component: CheckEmailComponent
  },
  {
    path: 'new-pass', 
    component: NewPassComponent 
  },
  {
    path: 'pass-done', 
    component: PassDoneComponent 
  }
];

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule { }
