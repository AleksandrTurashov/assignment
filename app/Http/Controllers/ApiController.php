<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Validators\DataValidator;

class ApiController extends Controller
{
    public function sendListAction(){
        $employees = Employee::select('id','name', 'patronymic', 'surname')->get();
        return $employees->toArray();
    }

    public function infoEmployeeAction(Request $request){
        $employee = Employee::where('id', $request->id)->get();
        if(empty($employee->toArray())){
            $result = ["msg"=>"not found", "code" => "404"];
            return $result;
        }
        return $employee->toArray();
    }

    public function addEmployeeAction(Request $request){
        $validator = DataValidator::addEmployee($request);
        if($validator->fails()){
            $result = ["msg"=>"bad request", "code" => "400"];
            return $result;
        }
        $employee = new Employee;

        if(!empty($request->file('photo'))){
            $path = str_replace('public', 'storage', $request->file('photo')->store('/public/images'));
            $employee->photo = $path;
        }
        $employee->email = $request->email;
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->patronymic = $request->patronymic;
        $employee->age = $request->age;
        $employee->experience = $request->experience;
        $employee->avarage_salary = $request->avarage_salary;

        $employee->save();

        $result = ["msg"=>"success", "code" => "200"];
        return  $result;
    }
}
