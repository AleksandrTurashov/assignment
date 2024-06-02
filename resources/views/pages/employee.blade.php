@extends('layouts.default')
@section('content')

    <div class="container">

        @if(empty($employees))
            <h3> Сотрудники не добавлены в базу </h3>
        @endif
        <ul class="list-group list-group-flush">

            @foreach($employees as $employee)

            <li class="list-group-item"> <a href="{{route('info_employee', $employee->id)}}">{{$employee->surname}} {{$employee->name}} {{$employee->patronymic}}</a> </li>

            @endforeach
        </ul>  
        <a href="{{route('index')}}" class="btn btn-primary">На главную</a>
    </div>

@endsection      