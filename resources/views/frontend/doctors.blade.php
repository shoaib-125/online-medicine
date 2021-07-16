@extends('layouts.frontend.app')

@section('content')

        <div class="container">
        <div class="row">
            @if(!empty($doctors))
                @foreach($doctors as $doctor)
                    <div class="col-sm">
                        <img src="{{$doctor->image}}" alt="Doctor" width="200px" height="300" />
                        <h3>Name: {{$doctor->first_name}} {{$doctor->last_name}}</h3>
                        <h3>Email: {{$doctor->email}}</h3>
                        <h3>Phone No: {{$doctor->phone_no}}</h3>
                        <h3>Specialization: {{$doctor->city}}</h3>
                        <h3>Address: {{$doctor->address}}</h3>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
