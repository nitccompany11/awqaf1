@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

    <section class="py-5 details-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4  image m-auto m-lg-0">
                    <img src="{{ $project->image }}" class="w-100" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="d-flex justify-content-between align-items-center my-4">
                        <div class="project-info">
                            {{-- <h6>
                                اسم المشروع
                                <span>
                                    اسم المشروع
                                </span>
                            </h6> --}}
                            <h4>
                                {{ $title }}
                            </h4>
                        </div>
                        <h5 class="custom-date">
                            {{ $project->date_project }}
                        </h5>
                    </div>
                    <p>
                        {!! $project['content_' . getLang()] !!}
                    </p>
                    <div class="cards-with-title py-4">
                        <div class="title w-100 mb-3">
                            <h1 class="text-start">
                                {{ trans('home.importnantPoints') }}
                            </h1>
                        </div>
                        <div class="row">
                            @foreach($project->points as $point)
                            <div class="col-12 col-md-4 px-md-2 mb-md-0 mb-3">
                                <div class="project-point px-3 py-2">
                                    <h5>{{ $point['name_' . getLang()] }}</h5>
                                    <p>
                                        {{ $project['description_' . getLang()] }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="p-lg-5 related-items">
                    <div class="title-group w-100 mb-5">
                        <h1 class="text-start">
                            {{ trans('home.relatedProjects') }}
                        </h1>
                    </div>
                    <div class="row">
                        @foreach($relateds as $related)
                        <div class="col-12 col-md-4 px-md-4 aos-init" data-aos="fade-up" data-aos-delay="300">
                            <div class="item">
                                <a href="{{ route('get.project', [$related->id, $related->getUrlTitle()]) }}">
                                    <img src="{{ $related->image }}" alt="" class="w-100">
                                    <div class="project-info mt-4 mb-5">
                                        <h6>
                                            {{ trans('admin.date') }}
                                            <span>
                                                {{ $related->date_project }}
                                            </span>
                                        </h6>
                                        <h4>
                                            {{ $related['name_' . getLang()] }}
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection