import { Component } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  student_num: any;
  student_name: any;
  student_course: any;
  student_year: any;
  address: any;
  students: any = [];

  constructor(
    public _apiService: ApiService
  ) {

  }


    addStudent(){
      console.log(this.student_num, this.student_name, this.address, this.student_course, this.student_year)
      let data = {
        student_num: this.student_num,
        student_name: this.student_name,
        student_course: this.student_course,
        student_year: this.student_year,
        address: this.address,
      }
      this._apiService.addStudent(data).subscribe((res:any) => {
        console.log("Success")
      },(error: any) => {
        console.log("ERROR ==" , error);
      })

    }
}

