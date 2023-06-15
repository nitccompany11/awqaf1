@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="py-5">
        <div class="container">
            <div class="title-group w-100 text-center my-4">
                <h1>
                    {{ $title }}
                </h1>
            </div>
            <div class="row company-list">
                @foreach($companies as $company)
                <div class="col-12 col-md-4 item">
                    <a href="{{ route('get.company', [$company->id, $company->getUrlTitle()]) }}">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <div class="company-img w-50 h-50 d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ $company->image }}" alt="{{ $company['name_' . getLang()] }}" alt="company 3" class="img-fluid" style="width: 100%;height: 125px;">
                            </div>
                            <div class="title-group w-100 text-center py-4">
                                <h5>
                                    {{ trans('home.company') }}
                                </h5>
                                <h1>
                                    {{ $company['name_' . getLang()] }}
                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection