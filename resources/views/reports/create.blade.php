@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Create report") }}</div>

                <div class="card-body">

                    <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Type*</label>
                            <select class="form-control" name="type" id="">
                                <option value="bug">Bug</option>
                                <option value="feature">Feature</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Content*</label>
                            <textarea name="content" rows="6" class="form-control" required></textarea>
                        </div>
                        <input type="hidden" name="map" value="web">
                        <input type="hidden" name="gameseconds" value="0">
                        <input type="hidden" name="bundleid" value="web">
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
