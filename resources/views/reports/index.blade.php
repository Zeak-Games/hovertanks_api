@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feedback Reports') }}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Map</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->type }}</td>
                                <td><a href="{{ route('report.show', $report) }}">{{ $report->title }}</a></td>
                                <td>{{ $report->content }}</td>
                                <td>{{ $report->map }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
