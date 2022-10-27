@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-7 pt-2 pb-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="ms-3">
                    <p class="card-text d-block">{!! $detail->content !!}</p>
                    <!-- <span class="card-text fw-normal">
                        <i class="bi-tags-fill fs-5"></i> 
                            @foreach ($detail->flag as $item)
                                {{ $item }}
                            @endforeach
                    </span>
                    <h5 class="card-title">{{ $detail->title }}</h5> -->
                </div>
        </div>
    </div>
</div>
@endsection
