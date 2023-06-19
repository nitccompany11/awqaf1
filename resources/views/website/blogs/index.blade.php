@extends('website.layouts.app')

@section('content')

    <style type="text/css">

        img.w-100 {
            width: 100%;
            height: 200px;
        }

        .custom-date {
            bottom: -20px;
        }

    </style>

    @include('website.layouts.crumb')

    <section class="latestNews py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-group">
                    <h1>
                        {{ $title }}
                    </h1>
                </div>
            </div>
            <div class="row my-5">
                @foreach($blogs as $blog)
                <div class="col-12 col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="item">
                        <a href="{{ route('get.blog', [$blog->id, $blog->getUrlTitle()]) }}">
                            <div class="position-relative">
                                <img class="w-100" src="{{ $blog->image }}" alt="news">
                                <h5 class="custom-date position-absolute">
                                    {{ $blog->created_at->format('Y-m-d') }}
                                </h5>
                            </div>
                            <div class="item-info mt-4">
                                <h4>
                                    {{ $blog['name_' . getLang()] }}
                                </h4>
                                <p class="text-black-50 mt-3">
                                    {{ \Illuminate\Support\Str::limit($blog['description_' . getLang()], 150, $end='...') }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection