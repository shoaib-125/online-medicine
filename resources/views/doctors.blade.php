@extends('layouts.app')

@section('content')

        <div class="container">
        <div class="row">
            @if(!empty($doctors))
                @foreach($doctors as $doctor)
                    <div class="col-sm">
                        <h3>Name: {{$doctor->first_name}} {{$doctor->last_name}}</h3>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
