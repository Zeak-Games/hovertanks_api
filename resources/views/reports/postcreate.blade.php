@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Feedback saved") }}</div>

                <div class="card-body">

                    <h1 class="card-title">Thank you!</h1>

                    <p class="card-text">Your feedback has been saved. Now you can close this window :)</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
