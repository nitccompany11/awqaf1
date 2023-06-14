<div class="col-md-12 text-center">
              @if(session()->has('success'))
              <div class="alert alert-success">
                {{session()->get('success')}}
              </div>
              @endif

              @if(session()->has('error'))
              <div class="alert alert-danger">
                {{session()->get('error')}}
              </div>
              @endif

              @if (count($errors) > 0)
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li class="alert alert-danger">{{ $error }}</li>
                      @endforeach
                  </ul>
              @endif
            </div>