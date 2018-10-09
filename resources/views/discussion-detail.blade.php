@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>{{ $discussiontopic['title'] }}</strong>
                    <p class="float-md-right">Posted by: <strong>{{ $discussiontopic['name'] }}</strong></p>
                </div>

                <div class="card-body">
                    {{ $discussiontopic['description'] }}   
                </div>
            </div>

            <div class="card comments">
                <div class="card-header"><strong>Discussions</strong></div>

                <div class="card-body">
                    @comments(['model' => $discussiontopic])
                    @endcomments
                </div>
            </div> 

            <a href="{{route('home')}}"> <- Back to Dashboard</a>
            
        </div>

    </div>
</div>
@endsection