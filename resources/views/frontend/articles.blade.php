@extends('layouts.frontend.app')

@section('content')

    <div class="container">
        <div class="row">
            @if(!empty($articles))
                @foreach($articles as $article)
                    <div class="col-sm">
                        <h3>Name: {{$article->name}} </h3>
                        <p>Details: {{$article->details}} </p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
