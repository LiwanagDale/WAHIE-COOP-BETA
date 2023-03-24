import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { AppRoutingModule } from './app-routing.module';
import { RegisterComponent } from './register/register.component';
import { ForgotPassComponent } from './forgot-pass/forgot-pass.component';
import { CheckEmailComponent } from './check-email/check-email.component';
import { NewPassComponent } from './new-pass/new-pass.component';
import { PassDoneComponent } from './pass-done/pass-done.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { VerifyAccountComponent } from './verify-account/verify-account.component';
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { StrengthMeterModule } from "ngx-strength-meter";



@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegisterComponent,
    ForgotPassComponent,
    CheckEmailComponent,
    NewPassComponent,
    PassDoneComponent,
    VerifyAccountComponent,

  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    FormsModule,
    ReactiveFormsModule,
    StrengthMeterModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

