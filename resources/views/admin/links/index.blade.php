@extends('admin.layouts.app')

@section('content')
    
    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="row content-t">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <center>
                                <span class="statistic">{{ count($links = ConsoleTVs\Links\Models\Link::all()) }}</span><br>
                                <span class="statistic-text">{{ trans('admin.TotalLinks') }}</span>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <center>
                                <span class="statistic">{{ count($views = ConsoleTVs\Links\Models\View::all()) }}</span><br>
                                <span class="statistic-text">{{ trans('admin.TotalViews') }}</span>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <center>
                                <?php
                                    $unique_views = [];
                                    foreach ($links as $link) {
                                        $unique_views = array_merge($unique_views, $link->uniqueViews()->toArray());
                                    }
                                ?>
                                <span class="statistic">{{ count($unique_views) }}</span><br>
                                <span class="statistic-text">{{ trans('admin.TotalUniqueViews') }}</span>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <br>

            <div class="row content-t">
                <div class="column col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('admin.Views') }}</th>
                                            <th>{{ trans('admin.URL') }}</th>
                                            <!--<th>{{ trans('admin.Statistics') }}</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($links = ConsoleTVs\Links\Models\Link::paginate(10) as $link)
                                        <tr>
                                            <td>{{ $link->id }}</td>
                                            <td>{{ $link->totalViews() }}</td>
                                            <td>
                                                <a href="{{ $link->url }}" class="btn btn-secondary btn-sm btn-block" data-toggle="tooltip" data-placement="bottom" title="{{ $link->url }}">{{ trans('admin.showLink') }}</a>
                                            </td>
                                            <!--<td>
                                                <a href="{{ route('links::link', ['slug' => $link->slug]) }}" class="btn btn-primary btn-sm btn-block">{{ trans('admin.Statistics') }}</a>
                                            </td>-->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $links->links('links::pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection