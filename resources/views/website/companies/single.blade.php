@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="nouraForDriving">
        <div class="container">
            <div class="row company-description">
                <div class="col-12 col-md-4 company-logo">
                    <img src="{{ $company->image }}" alt="{{ $title }}" class="img-fluid w-100">
                </div>
                <div class="col-12 col-md-8 company-detail pe-4">
                    <h1 class="mb-3">{{ $title }}</h1>
                    <p class="mb-4">
                        {!! $company['content_' . getLang()] !!}
                    </p>
                    <a href="{{ $company->url }}" class="custom-btn">
                        {{ trans('home.website') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection