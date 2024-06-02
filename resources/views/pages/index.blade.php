@extends('layouts.default')
@section('content')
    <div class="container">
        <form action="{{route('addEmployee')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="email" class="form-control" name ="email" value="" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputSername" class="form-label">Фамилия</label>
                <input type="text" name ="surname" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputPatronymic" class="form-label">Отчество</label>
                <input type="text" name="patronymic" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Возраст</label>
                <input type="number" name="age" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputExperience" class="form-label">Стаж работы</label>
                <input type="number" name="experience" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputSalary" class="form-label">Средняя зп</label>
                <input type="number" name="avarage_salary" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Фото</label>
                <input class="form-control"  type="file" name="photo" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            <a href= "{{route('list_employee')}}" class="btn btn-secondary">Список сотрудников</a>
        </form>
        @if(!empty($_GET))
            <p>{{$_GET['code']}} {{$_GET['msg']}}</p>
        @endif

    </div>
@endsection