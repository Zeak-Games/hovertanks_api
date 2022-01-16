@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Report') }}</div>

                <div class="card-body">

                    <h1 class="card-title">{{ $feedbackReport->title }}</h1>
                    <p class="card-text"> {{ $feedbackReport->content }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
