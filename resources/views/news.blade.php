@extends('main')

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($news as $new)
            <div class="card shadow-sm">
                <div class="card-body">
                    <a href="">
                        <h5 >{{$new->name}}</h5>
                    </a>
                    <a href="">
                        <p class="card-text">{{$new->description}}</p>
                    </a>
                    <div class="theme">
                        <span class="similar-theme">тематика: </span>
                        <a href="" class="similar">{{$new->subject_theme}}</a>
                    </div>
                    <input type="hidden" value="{{$new->id}}">
                </div>
            </div>
        @endforeach
    </div>
@endsection
