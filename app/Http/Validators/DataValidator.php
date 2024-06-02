<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\Validator;


class DataValidator{

    public static function addEmployee($request){
        return Validator::make($request->all(),[

            'name'=> ['required','min:2', 'max:20','regex:/^[а-яА-ЯёЁa-zA-Z]+$/ui'],
            'surname'=> ['required','min:2', 'max:20','regex:/^[а-яА-ЯёЁa-zA-Z]+$/ui'],
            'patronymic'=> ['nullable','min:2', 'max:20','regex:/^[а-яА-ЯёЁa-zA-Z]+$/ui'],
            'email'=>'email:rfc,dns',
            'age'=> 'integer',
            'experience'=> 'integer',
            'avarage_salary'=> 'integer',
            'photo'=> 'mimes:jpg,bmp,png',
        ]); 
        }
    }
