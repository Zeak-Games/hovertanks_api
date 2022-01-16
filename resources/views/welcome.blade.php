@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HoverTanks - Zeak Games') }}</div>

                <div class="card-body">
                    <h4 class="card-title">Hi! Welcome to HoverTanks web dashboard</h4>

                    @guest
                        <a class="btn btn-sm btn-primary mt-4" href="{{ route('report.create') }}">Send feedback report</a>
                    @endguest
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
