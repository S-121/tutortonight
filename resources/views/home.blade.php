@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-left">
        @foreach ($posts as $post)
        <div class="col pt-2 pb-2">
            <div class="card shadow h-100">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <span class="card-text fw-normal">
                            <i class="bi-tags-fill fs-5"></i>
                            @foreach ($post->flag as $item)
                                {{ $item }}
                            @endforeach
                        </span>
                        <div class="ms-3">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text overflow-hidden">{{ strip_tags($post->content) }}</p>
                            <a href="{{ route('post.detail', $post->id) }}" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
