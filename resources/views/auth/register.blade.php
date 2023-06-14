@extends('admin.layouts.app')

@section('content')

    @php $title = trans('home.register') @endphp

    <!-- CONTAINER OPEN -->
    <div class="col col-login mx-auto mt-7">
        <div class="text-center">
            <img src="{{ getImage('settings', getSetting()->site_logo) }}" class="header-brand-img" alt="">
        </div>
    </div>

    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form class="login100-form validate-form" action="{{ route('register') }}" method="post">
                <span class="login100-form-title pb-5">
                    {{ $title }}
                </span>
                <div class="panel panel-primary">
                    <div class="panel-body tabs-menu-body p-0 pt-5">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab5">
                                {{ csrf_field() }}
                                <div class="wrap-input100 validate-input input-group">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="fe fe-users text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 required" name="name" type="text" value="{{ old('name') }}" placeholder="{{ trans('admin.name') }}">
                                </div>
                                <div class="wrap-input100 validate-input input-group">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="fe fe-phone text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 required" name="phone" type="text" value="{{ old('phone') }}" placeholder="{{ trans('admin.phone') }}">
                                </div>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 required" name="email" type="email" value="{{ old('email') }}" placeholder="{{ trans('admin.email') }}">
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 required" name="password" type="password" placeholder="{{ trans('admin.password') }}">
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 required" name="password_confirmation" type="password" placeholder="{{ trans('home.password_confirmation') }}">
                                </div>
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn btn-primary" type="submit">
                                        {{ $title }}
                                    </button>
                                </div>
                                <div class="wrap-input100" style="margin-top: 20px;">
                                    <span>{{ trans('home.haveAccount') }}</span>
                                    <a href="{{ route('login') }}">
                                        {{ trans('home.login') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
