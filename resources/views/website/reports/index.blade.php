@extends('website.layouts.app')

@section('content')

    @include('website.layouts.crumb')

    <section class="cards-with-title py-5">
        <div class="container">
            <div class="title-group w-100 mb-5">
                <h1 class="text-start">
                    التقارير السنوية
                </h1>
            </div>
            <div class="row reports justify-content-between">
                @foreach($reports as $report)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <a href="{{ $report->file }}" class="report d-flex justify-content-start align-items-center">
                        <img src="{{ $report->image }}" alt="report" class="w-25 me-3">
                        <div>
                            <h4 class="mb-3">
                                {{ $report['name_' . getLang()] }}
                            </h4>
                            <h5>
                                {{ trans('home.by') }}
                                <span class="name">
                                    {{ @$report->user->name }}
                                </span>
                                |
                                <span class="date">
                                    {{ $report->date_project }}
                                </span>
                            </h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
    </section>

@endsection