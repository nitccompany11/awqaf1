@extends('admin.layouts.app')

@section('content')


  <!-- ROW OPEN -->
  <div class="row">

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font">{{ $countPages }}</h2>
              <p class="text-white mb-0">{{ trans('admin.countPages') }}</p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font">{{ $countCompanies }}</h2>
              <p class="text-white mb-0">{{ trans('admin.countCompanies') }}</p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font">{{ $countProjects }}</h2>
              <p class="text-white mb-0">{{ trans('admin.countProjects') }}</p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font">{{ $countBlogs }}</h2>
              <p class="text-white mb-0">{{ trans('admin.countBlogs') }}</p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

  </div>
  <!-- ROW CLOSED -->

  <!-- ROW-1 -->
  {{-- <div class="row">

    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <div class="card-body row fixedHieghtChart">
          <div id="chart-orders" class="chartsh"></div>
        </div>
      </div>
    </div>

  </div> --}}
    <!-- ROW-1 CLOSED -->

  <!-- ROW OPEN -->
    <div class="row">

      <div class="col-md-6 col-xl-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ trans('admin.latestBlogs') }}</h3>
            <a href="{{ url('admin/blogs') }}" class="moreHeadTxt">
              {{ trans('home.more') }}
            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th>{{ trans('admin.ID') }}</th>
                        <th>{{ trans('admin.title') }}</th>
                        <th>{{ trans('admin.addedDate') }}</th>
                        <th>{{ trans('admin.options') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($latestProjects) > 0)
                      @foreach($latestProjects as $s)
                      <tr>
                          <td>{{ $s->id }}</td>
                          <td>{{ $s['name_' . getLang()] }}</td>
                          <td>{{ $s->created_at->format('Y-m-d') }}</td>
                          <td>
                            <a href="{{ url('admin/blogs') . '/' . $s->id . '/show' }}" class="btn btn-warning">
                              <i class="fa fa-eye"></i> {{ trans('admin.show') }} 
                            </a>
                          </td>
                      </tr>
                      @endforeach
                      @else 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} {{ trans('admin.willAdd') }} <a href="{{ url('admin/blogs/add') }}"> {{ trans('admin.addBlog') }} </a> </p>
                      @endif  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ trans('admin.latestCompanies') }}</h3>
            <a href="{{ url('admin/companies') }}" class="moreHeadTxt">
              {{ trans('home.more') }}
            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th>{{ trans('admin.ID') }}</th>
                        <th>{{ trans('admin.title') }}</th>
                        <th>{{ trans('admin.addedDate') }}</th>
                        <th>{{ trans('admin.options') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($latestCompanies) > 0)
                      @foreach($latestCompanies as $s)
                      <tr>
                          <td>{{ $s->id }}</td>
                          <td>{{ $s['name_' . getLang()] }}</td>
                          <td>{{ $s->created_at->format('Y-m-d') }}</td>
                          <td>
                            <a href="{{ url('admin/companies') . '/' . $s->id . '/show' }}" class="btn btn-warning">
                              <i class="fa fa-eye"></i> {{ trans('admin.show') }} 
                            </a>
                          </td>
                      </tr>
                      @endforeach
                      @else 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} {{ trans('admin.willAdd') }} <a href="{{ url('admin/companies/add') }}"> {{ trans('admin.addCompany') }} </a> </p>
                      @endif  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-xl-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ trans('admin.latestProjects') }}</h3>
            <a href="{{ url('admin/projects') }}" class="moreHeadTxt">
              {{ trans('home.more') }}
            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th>{{ trans('admin.ID') }}</th>
                        <th>{{ trans('admin.title') }}</th>
                        <th>{{ trans('admin.addedDate') }}</th>
                        <th>{{ trans('admin.options') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($latestProjects) > 0)
                      @foreach($latestProjects as $s)
                      <tr>
                          <td>{{ $s->id }}</td>
                          <td>{{ $s['name_' . getLang()] }}</td>
                          <td>{{ $s->created_at->format('Y-m-d') }}</td>
                          <td>
                            <a href="{{ url('admin/projects') . '/' . $s->id . '/show' }}" class="btn btn-warning"><i class="fa fa-eye"></i> {{ trans('admin.show') }} </a>

                            <a href="{{ url('admin/projects') . '/' . $s->id . '/point' }}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ trans('admin.addPoint') }} </a>

                            <a href="{{ url('admin/projects') . '/' . $s->id . '/edit' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>
                            
                            <a href="{{ url('admin/projects') . '/' . $s->id . '/delete' }}" class="btn btn-danger delete"><i class="fa fa-close"></i> {{ trans('admin.delete') }} </a>

                            @if($s->status == 1)
                              <a href="{{ url('admin/projects') . '/' . $s->id . '/status' }}" class="btn btn-danger">
                                <i class="fa fa-close"></i>
                              </a>
                            @else
                              <a href="{{ url('admin/projects') . '/' . $s->id . '/status' }}" class="btn btn-success">
                                <i class="fa fa-check"></i>
                              </a>
                            @endif
                          </td>
                      </tr>
                      @endforeach
                      @else 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} {{ trans('admin.willAdd') }} <a href="{{ url('admin/projects/add') }}"> {{ trans('admin.addProject') }} </a> </p>
                      @endif  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

    </div>
    <!-- ROW CLOSED -->

@endsection

@section('script')

  <script type="text/javascript">
    
    $(document).ready(function() {

      

    });

  </script>

@endsection