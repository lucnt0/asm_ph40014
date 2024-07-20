@extends('layouts.master')

@section('content')
@foreach ($posts as $post)

<div class="post-slider">
    <img src="{{ $post->image }}" class="card-img-top" alt="post-thumb">
</div>
<div class="card-body">
    <h3 class="mb-3"><a class="post-title" href="{{ route('layouts.postShow', ['id' => $post->id])}}">{{ $post->title }}</a></h3>
    <ul class="card-meta list-inline">
        <li class="list-inline-item">
            <i class="ti-calendar"></i>15 jan, 2020
        </li>
        <li class="list-inline-item">
            <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{ route('layouts.postcate', $post->category->id) }}">{{ $post->category->name }}</a></li>
            </ul>
        </li>
    </ul>
    <p>{{ $post->description }}</p>
    <a href="{{ route('layouts.postShow', ['id' => $post->id])}}" class="btn btn-outline-primary">Read More</a>
</div>


@endforeach

@endsection
@section('sidebar')
    <article class="widget-card">
        @foreach ($posts as $post)
            <div class="d-flex">
                <img class="card-img-sm" src="{{ $post->image }}">
                <div class="ml-3">
                    <h5><a class="post-title" href="#">{{ $post->title }}</a></h5>
                    <ul class="card-meta list-inline mb-0">
                        <li class="list-inline-item mb-0">
                            <i class="ti-calendar"></i>15 jan, 2020
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </article>
@endsection

