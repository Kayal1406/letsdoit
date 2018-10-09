@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add an awesome topic to discuss</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add-topic') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <div class="form-group row">
                            <label for="topic" class="col-sm-4 col-form-label text-md-right">{{ __('Topic') }}</label>

                            <div class="col-md-8">
                                <input id="topic" type="text" class="form-control{{ $errors->has('topic') ? ' is-invalid' : '' }} topics typeahead tt-query" name="topic" value="{{ old('topic') }}" required autofocus data-provide="typeahead" autocomplete="off">

                                @if ($errors->has('topic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('topic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-8">
                                <textarea id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <a href="{{route('home')}}"> <- Back to Dashboard</a>

        </div>
    </div>
</div>
@endsection