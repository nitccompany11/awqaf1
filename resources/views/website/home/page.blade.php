@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="py-5">
        <div class="container">
            <div class="row h-100 d-flex justify-content-center align-items-center @if($page->image_place == 1) flex-column @endif">
                @if($page->image_place == 1)
                <div>
                    <h1 class="text-black title fs-2 fs-md-1">
                        {{ $title }}
                    </h1>
                </div>
                <p class="text-black-50 mt-5 text-center w-100 w-md-75">
                    {!! $page['content_' . getLang()] !!}    
                </p>
                @if(!is_null($page->image))
                <img class="my-5 w-75" src="{{ $page->image }}" alt="{{ $title }}">
                @endif
                @elseif($page->image_place == 2)
                <div class="col-12 col-md-6 ps-md-5">
                        <div class="title-group w-100 mb-3 text-center text-md-start">
                            {{-- <h5 class="mb-2">
                                دور أوقاف
                            </h5> --}}
                            <h1>
                                {{ $title }}
                            </h1>
                        </div>
                        <p class="text-center text-md-start">
                            {!! $page['content_' . getLang()] !!}    
                        </p>
                    </div>
                    @if(!is_null($page->image))
                    <div class="col-12 col-md-6" style="padding: 20px;">
                        <img src="{{ $page->image }}" alt="{{ $title }}" class="w-100">
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </section>

@endsection