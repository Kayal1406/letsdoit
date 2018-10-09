@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>List of topics</strong></div>

                <div class="list">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($discussiontopic as $topic) 
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('discussion-detail', $topic->id) }}"><li class="list-group-item">{{$topic->title}}</a> <p id="description">{{$topic->description}}</p></li>
                    </ul>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
@endsection