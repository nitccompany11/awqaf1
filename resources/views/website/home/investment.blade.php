@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="py-5">
        <div class="container h-100 d-flex justify-content-center flex-column">
            <div>
                <h1 class="text-black title fs-2 fs-md-1">
                    {{ $title }}
                </h1>
            </div>
            <p class="text-black-50 mt-5 text-center w-100 w-md-75">
                {!! $investment['content_' . getLang()] !!}
            </p>
        </div>
    </section>

@endsection