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
  address: any;
  students: any = [];

  constructor(
    public _apiService: ApiService
  ) {
    
  }


    addStudent(){
      let data = {
        student_num: this.student_num,
        student_name: this.student_name,
        address: this.address,
      }
      this._apiService.addStudent(data).subscribe((res:any) => {
        console.log("Success", res);
        this.student_num = '';
        this.student_name = '';
        this.address = '';
        alert('SUCCESS');
        this.getStudents();
      },(error: any) => {
        alert('ERROR');
        console.log("ERROR ==" , error);
      })
    }

      getStudents(){
        this._apiService.getStudents().subscribe((res:any) => {
          console.log("Success", res);
          this.students = res;
        },(error: any) => {
          console.log("ERROR ==" , error);
        })
      } 
      deleteStudent(id){
        this._apiService.deleteStudent(id).subscribe((res:any) => {
          console.log("SUCCESS");
          this.getStudents();
        },(error:any) =>{
          console.log("ERROR");
        })
      }
    }


