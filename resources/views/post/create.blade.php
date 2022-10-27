@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pt-2 pb-2">
            <div class="card shadow">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form method="POST" action="{{ route('post.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-2">
                                    <div class="form-group">
                                        <strong><h5>Title:</h5></strong>
                                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Post Title">
                                        @error('title')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-2">
                                    <div class="form-group">
                                        <strong><h5>Flag:</h5></strong>                                        
                                        <select class="select2-multiple form-control form-control-lg" name="flag[]" multiple="multiple" id="select2Multiple">
                                            <option value="English">English</option>
                                            <option value="GRE">GRE</option>
                                        </select>
                                        @error('flag')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-2">
                                    <div class="form-group">
                                        <strong><h5>Content:</h5></strong>
                                        <textarea id="summernote" name="content"></textarea>
                                        @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-2">
                                    <button type="submit" class="btn btn-primary ml-3 float-end">Create</button>
                                    <a href="{{ route('home') }}" class="btn btn-secondary ml-3 me-2 float-end">Back</a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
