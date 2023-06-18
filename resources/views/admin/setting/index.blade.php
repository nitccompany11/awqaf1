@extends('admin.layouts.app')

@section('content')

		@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection
  	
  	<style>
  	    .pac-target-input:not(:-webkit-autofill) {
          animation-name: endBrowserAutofill;
            width: 50%;
            height: 25px;
            border: 1px solid #ccc;
            margin-top: 5px;
            position: relative;
            top: 10px;
            left: 30% !important;
        } 
  	</style>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">
				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $settings->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_name_ar" class="form-control" placeholder="{{ trans('admin.site_name_ar') }}" value="{{ $settings->site_name_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_name_en" class="form-control" placeholder="{{ trans('admin.site_name_en') }}" value="{{ $settings->site_name_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_copy_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_copy_ar" class="form-control" placeholder="{{ trans('admin.site_copy_ar') }}" value="{{ $settings->site_copy_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_copy_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_copy_en" class="form-control" placeholder="{{ trans('admin.site_copy_en') }}" value="{{ $settings->site_copy_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_description_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="site_description_ar" placeholder="{{ trans('admin.site_description_ar') }}">{{ $settings->site_description_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_description_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="site_description_en" placeholder="{{ trans('admin.site_description_en') }}">{{ $settings->site_description_en }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_keyword_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_keyword_ar" class="form-control" placeholder="{{ trans('admin.site_keyword_ar') }}" value="{{ $settings->site_keyword_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_keyword_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_keyword_en" class="form-control" placeholder="{{ trans('admin.site_keyword_en') }}" value="{{ $settings->site_keyword_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_email') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_email" class="form-control" placeholder="{{ trans('admin.site_email') }}" value="{{ $settings->site_email }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_phone') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_phone" class="form-control" placeholder="{{ trans('admin.site_phone') }}" value="{{ $settings->site_phone }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.whatsapp') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_phone2" class="form-control" placeholder="{{ trans('admin.whatsapp') }}" value="{{ $settings->site_phone2 }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_address_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_address_ar" class="form-control" placeholder="{{ trans('admin.site_address_ar') }}" value="{{ $settings->site_address_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_address_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="site_address_en" class="form-control" placeholder="{{ trans('admin.site_address_en') }}" value="{{ $settings->site_address_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.facebook') }} </label>
					<div class="col-md-9">
						<input type="text" name="facebook" class="form-control" placeholder="{{ trans('admin.facebook') }}" value="{{ $settings->facebook }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.linkedin') }} </label>
					<div class="col-md-9">
						<input type="text" name="linkedin" class="form-control" placeholder="{{ trans('admin.linkedin') }}" value="{{ $settings->linkedin }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.youtube') }} </label>
					<div class="col-md-9">
						<input type="text" name="youtube" class="form-control" placeholder="{{ trans('admin.youtube') }}" value="{{ $settings->youtube }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.instagram') }} </label>
					<div class="col-md-9">
						<input type="text" name="instagram" class="form-control" placeholder="{{ trans('admin.instagram') }}" value="{{ $settings->instagram }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.twitter') }} </label>
					<div class="col-md-9">
						<input type="text" name="twitter" class="form-control" placeholder="{{ trans('admin.twitter') }}" value="{{ $settings->twitter }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.map') }} </label>
					<div class="col-md-9">
						<input id="pac-input" class="controls" type="text" placeholder="Search">
						<input id="pac-close" class="controls" type="button" value="x" style="position: relative;top: 28px;z-index: 99999;border: none;background: transparent;color: #888787;font-weight: bold;font-size: 16px;left: -18%;">
						<div id="map_canvas" style="overflow: visible; width: 100%; height: 400px;"></div>
						<input type="hidden" name="lat" id="latbox" value="{{ $settings->lat }}">
            <input type="hidden" name="lng" id="lngbox" value="{{ $settings->lng }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.save') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection

@section('script')

	<script>
    
	    function init() {

	    	var myLatlng = new google.maps.LatLng({{ $settings->lat }}, {{ $settings->lng }});
	    	
	    	var lat1 = {{ $settings->lat }};

	    	var lng1 = {{ $settings->lng }};

	        var map = new google.maps.Map(document.getElementById('map_canvas'), {
	            center: {
	                lat: {{ $settings->lat }},
	                lng: {{ $settings->lng }}
	            },
	            zoom: 12
	       });

	        var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));

	        var marker = new google.maps.Marker({
				draggable: true,
				position: myLatlng, 
				map: map,
				title: "Your location"
			});

			google.maps.event.addListener(marker, 'dragend', function (event) {
				document.getElementById("latbox").value = this.getPosition().lat();
				document.getElementById("lngbox").value = this.getPosition().lng();

			});

	        map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));

	        google.maps.event.addListener(searchBox, 'places_changed', function() {

	            searchBox.set('map', null);

	            var places = searchBox.getPlaces();

	            var bounds = new google.maps.LatLngBounds();

	            var i, place;

	            for (i = 0; place = places[i]; i++) {

	                (function(place) {

	                    var marker = new google.maps.Marker({
	                    	draggable: true,
	                        position: place.geometry.location
	                    });

	                    marker.bindTo('map', searchBox, 'map');

	                    google.maps.event.addListener(marker, 'map_changed', function() {

	                        if (!this.getMap()) {
	                            this.unbindAll();
	                        }

	                        document.getElementById("latbox").value = this.getPosition().lat();

	                        document.getElementById("lngbox").value = this.getPosition().lng();
	                    });

	                    bounds.extend(place.geometry.location);

	                }(place));
	            }

	            map.fitBounds(bounds);

	            searchBox.set('map', map);

	            map.setZoom(Math.min(map.getZoom(),12));

	        });
	        

	        $('#pac-close').on('click', function() {

	    		searchBox.set('map', null);
	    		
	    		document.getElementById('pac-input').value = '';

				map.setCenter(myLatlng);

				document.getElementById("latbox").value = lat1;

				document.getElementById("lngbox").value = lng1;

	    	});
	    }

	    google.maps.event.addDomListener(window, 'load', init);

	</script>

@endsection