<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Validators\DataValidator;




use Illuminate\Support\Facades\Http;





class IndexController extends Controller
{  
    public function indexAction(){
        return view('pages.index');
    }

    public function addEmployeeAction(Request $request){

        $validator = DataValidator::addEmployee($request);
        if($validator->fails())
            return redirect()->route('index', ["msg"=>"bad request", "code" => "400"]);

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
        return redirect()->route('index', ["msg"=>"success", "code" => "200"]);
    }

    public function infoEmployeeAction(Employee $employee){
        return view('pages.info', compact('employee'));
    }

    public function employeeListAction(){
        $employees= Employee::get();
        return view('pages.employee', compact('employees'));
    }
    
}
