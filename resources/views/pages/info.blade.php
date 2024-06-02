@extends('layouts.default')
@section('content')

    <div class = "container">

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @if(empty($employee->photo))
                    <img src="/img/default.jpg"class="img-fluid rounded-start" alt="...">
                    @endif
                    @if(!empty($employee->photo))
                    <img src="/{{$employee->photo}}"class="img-fluid rounded-start" alt="...">
                    @endif
                    
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5>{{$employee->surname}}{{$employee->name}} {{$employee->patronymic}}</h5>
                        <p class="card-text">Почта: {{$employee->email}}</p>
                        <p class="card-text">Возраст: {{$employee->age}}</p>
                        <p class="card-text">Стаж работы: {{$employee->experience}}</p>
                        <p class="card-text">Средняя зп: {{$employee->avarage_salary}}</p>
                    </div>
                </div>
            </div>
        </div>
            <a href="{{route('index')}}" class="btn btn-primary">На главную</a>
            <a href="{{route('list_employee')}}" class="btn btn-secondary">К списку</a>
    </div>


@endsection


<!-- -->