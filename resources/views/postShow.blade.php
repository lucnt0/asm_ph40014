@extends('layouts.master')


@section('content')
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-lg-9   mb-5 mb-lg-0">
                        <article>
                            <div class="post-slider mb-4">
                                <img src="{{ $posts->image }}" class="card-img" alt="post-thumb">
                            </div>

                            <h1 class="h2">{{ $posts->title }}</h1>
                            <ul class="card-meta my-3 list-inline">
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">{{ $posts->category->name }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="content">
                                <p>{{ $posts->description }}</p>
                                <p>{{ $posts->content }}</p>
                                <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                    brands,
                                    companies
                                    are reaching out to digital agencies, responding to the new possibilities available.
                                    However, the industryis fast becoming overcrowded, heaving with agencies offering
                                    similar
                                    services — on the surface, at least.
                                    Producing creative, fresh projects is the key to standing out. Unique side projects are
                                    the
                                    best place toinnovate, but balancing commercially and creatively lucrative work is
                                    tricky.
                                    So, this article looks at</p>
                                <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                    brands,
                                    companies
                                    are reaching out to digital agencies, responding to the new possibilities available.
                                    However, the industryis fast becoming overcrowded, heaving with agencies offering
                                    similar
                                    services — on the surface, at least.
                                    Producing creative, fresh projects is the key to standing out. Unique side projects are
                                    the
                                    best place toinnovate, but balancing commercially and creatively lucrative work is
                                    tricky.
                                    So, this article looks at</p>
                            </div>
                        </article>

                    </div>

                </div>
            </div>
        </section>
@endsection
@section('sidebar')
    <article class="widget-card">
            <div class="d-flex">
                <img class="card-img-sm" src="{{ $posts->image }}">
                <div class="ml-3">
                    <h5><a class="post-title" href="#">{{ $posts->title }}</a></h5>
                    <ul class="card-meta list-inline mb-0">
                        <li class="list-inline-item mb-0">
                            <i class="ti-calendar"></i>15 jan, 2020
                        </li>
                    </ul>
                </div>
            </div>
    </article>
@endsection

