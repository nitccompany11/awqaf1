@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="content-with-title">
        <div class="container">
            <div class="title-group w-100 text-center mb-3 mb-md-5">
                <h1>
                    {{ $title }}
                </h1>
            </div>
            <div class="row board">
                @foreach($teamworks as $teamwork)
                <div class="col-12 col-md-6 col-lg-3 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ $teamwork->image }}" alt="{{ $teamwork->name }}" class="w-100">
                    <h5 class="text-center p-3">{{ $teamwork->name }}</h5>
                    <h6 class="text-black-50 text-center mb-3">{{ $teamwork->job }}</h6>
                    <p class="text-center">
                        {!! $teamwork['content_' . getLang()] !!}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection