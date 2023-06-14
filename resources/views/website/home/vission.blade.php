@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

	<section class="visionMissionObjectives">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="{{ url('public') }}/front/images/vision.png" alt="الرؤية">
                        <h1 class="m-auto">{{ $vision['name_' . getLang()] }}</h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        {{ $vision['content_' . getLang()] }}
                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="{{ url('public') }}/front/images/mission.png" alt="الرسالة">
                        <h1 class="m-auto">{{ $mission['name_' . getLang()] }}</h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        {{ $mission['content_' . getLang()] }}
                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="{{ url('public') }}/front/images/objectives.png" alt="الأهداف">
                        <h1 class="m-auto">{{ $message['name_' . getLang()] }}</h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        {{ $message['content_' . getLang()] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection