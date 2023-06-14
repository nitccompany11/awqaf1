@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

    <!-- Start Projects -->
    <section class="cards-with-title py-5">
        <div class="container">
            <div class="title-group w-100 mb-5">
                <h1 class="text-start">
                    {{ $title }}
                </h1>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-12 col-md-4 px-md-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('get.project', [$project->id, $project->getUrlTitle()]) }}">
                        <img src="{{ $project->image }}" alt="" class="w-100">
                        <div class="project-info mt-4 mb-5">
                            <h6>
                                {{ trans('admin.date') }}
                                <span>
                                    {{ $project->date_project }}
                                </span>
                            </h6>
                            <h4>
                                {{ $project['name_' . getLang()] }}
                            </h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Projects -->

@endsection