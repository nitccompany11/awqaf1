@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

    <section class="contact-section py-5">
        <div class="container">
            <div class="text-center">
                <h1>
                    {{ $title }}
                </h1>
                <div class="my-4">
                    <h3 class="phone">
                        <a href="tel:{{ getSetting()->site_phone }}">{{ getSetting()->site_phone }}</a>
                    </h3>
                    <h3 class="email">
                        <a href="mailto:{{ getSetting()->site_email }}">
                            {{ getSetting()->site_email }}
                        </a>
                    </h3>
                </div>
                <div class="d-flex justify-content-center w-100">
                    <form action="{{ route('set.contact') }}" method="post" class="my-5 w-50">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="custom-input position-relative col-12 col-md-6">
                                <input class="w-100 h-100 px-3" type="text" name="name" required="">
                                <h5 class="position-absolute">
                                    {{ trans('admin.name') }}
                                </h5>
                            </div>
                            <div class="custom-input position-relative col-12 col-md-6">
                                <input class="w-100 h-100 px-3 text-start" type="tel" required="" name="phone">
                                <h5 class="position-absolute">
                                    {{ trans('admin.phone') }}
                                </h5>
                            </div>
                            <div class="custom-input position-relative col-12 col-md-12">
                                <input class="w-100 h-100 px-3" type="email" name="email" required="">
                                <h5 class="position-absolute">
                                    {{ trans('admin.email') }}
                                </h5>
                            </div>
                            <div class="custom-input message-input position-relative col-12">
                                <textarea class="w-100 h-100 p-3" name="message" cols="30" rows="10" required=""></textarea>
                                <h5 class="position-absolute">
                                    {{ trans('home.message') }}
                                </h5>
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <button type="submit" class="custom-btn">
                                {{ trans('home.send') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection