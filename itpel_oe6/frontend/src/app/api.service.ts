import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
headers: HttpHeaders;

  constructor(
    public http: HttpClient
  ) { 
    this.headers = new HttpHeaders();
    this.headers.append('Accept', 'appplication/json');
    this.headers.append('Content-Type', 'appplication/json');
    this.headers.append('Access-Control-Allow-Origin', '*');
    
  }
  addStudent(data){
    return this.http.post('http://localhost/itpel_oe6/backend/create.php', data);
  }

  getStudents(){
    return this.http.get('http://localhost/itpel_oe6/backend/getStudents.php');
  }
  deleteStudent(id){
    return this.http.delete('http://localhost/itpel_oe6/backend/delete.php?id='+id);
  }
}
