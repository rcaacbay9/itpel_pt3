import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { LoginPageRoutingModule } from './login-routing.module';
import { ProfileComponent } from './profile/profile.component';
import { LoginPage } from './login.page';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [{
  path: '',
  component: LoginPage
},
{
  path: 'details',
  component: ProfileComponent
}
]



@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    LoginPageRoutingModule,
    RouterModule.forChild(routes)
  ],
  declarations: [LoginPage, ProfileComponent]
})
export class LoginPageModule {}
