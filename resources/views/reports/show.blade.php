@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Report $report->id") }}</div>

                <div class="card-body">

                    <h1 class="card-title">{{ $report->title }}</h1>
                    <h5 class="card-text">Type: {{ $report->type }}</h5>
                    <p class="card-text">Map: {{$report->map}}  </p>
                    <p class="card-text"> {{ $report->content }} </p>
                    <p class="card-text">Game seconds: {{$report->gameseconds}}  </p>
                    <p class="card-text">Bundle Id: {{$report->bundleid}}  </p>
                    <p class="card-text">Created at: {{$report->created_at}}  </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
