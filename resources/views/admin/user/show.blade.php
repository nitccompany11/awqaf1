@extends('admin.layouts.app')

@section('content')

    <style>
        @media screen and (max-width: 768px) {
            .pswp--touch .pswp__button--arrow--left,
            .pswp--touch .pswp__button--arrow--right {
              visibility: visible !important;
            }
            
            .lb-nav a.lb-next,
            .lb-nav a.lb-prev{
                    background-size: contain;
            }
        }
    </style>

    @php

        if(session()->get('userType') == 'monshaa') {

            $title2 = trans('admin.monshaa');
            $url2 = url('admin/user/monshaa');

        } elseif (session()->get('userType') == 'jehetTamoil') {

            $title2 = trans('admin.jehetTamoil');
            $url2 = url('admin/user/jehetTamoil');

        } elseif (session()->get('userType') == 'admin') {

            $title2 = trans('admin.adminT');
            $url2 = url('admin/user/admin');

        } elseif (session()->get('userType') == 'financeApplicantEdu') {

            $title2 = trans('admin.financeApplicantEdu');
            $url2 = url('admin/user/financeApplicantEdu');

        } elseif (session()->get('userType') == 'financeApplicantMed') {

            $title2 = trans('admin.financeApplicantMed');
            $url2 = url('admin/user/financeApplicantMed');

        } elseif (session()->get('userType') == 'accountant') {

            $title2 = trans('admin.accountant');
            $url2 = url('admin/user/accountant');

        } elseif (session()->get('userType') == 'monshaaMedical') {

            $title2 = trans('admin.monshaaMedical');
            $url2 = url('admin/user/monshaaMedical');

        }

    @endphp

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), $title2, $url2) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/user/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> 
				
                @php

                if(session()->get('userType') == 'monshaa') {

                    echo trans('admin.addMonshaa');

                } elseif (session()->get('userType') == 'jehetTamoil') {
                        
                    echo trans('admin.addJehetTamoil');

                } elseif (session()->get('userType') == 'admin') {
                        
                    echo trans('admin.addAdmin');

                } elseif (session()->get('userType') == 'financeApplicantEdu' || session()->get('userType') == 'financeApplicantMed') {
                        
                    echo trans('admin.addWalyAmr');

                } elseif (session()->get('userType') == 'accountant') {
                        
                    echo trans('admin.addAccountant');

                } elseif (session()->get('userType') == 'monshaaMedical') {
                        
                    echo trans('admin.addMonshaaMedical');

                }

                @endphp

			</a>
			<a href="{{ url('admin/user/'. $user->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>

            @if($user->status == 0)
                <a href="{{ url('admin/user') . '/' . $user->id . '/active' }}" class="btn btn-success"><i class="fa fa-check"></i> {{ trans('admin.approve') }} </a>
            @else
                <a href="{{ url('admin/user') . '/' . $user->id . '/unactive' }}" class="btn btn-danger"><i class="fa fa-check"></i> {{ trans('admin.unactive') }} </a>    
            @endif

            @if($user->signup_status == 1)
                <a href="{{ url('admin/user') . '/' . $user->id . '/activeSignUp' }}" class="btn btn-success"><i class="fa fa-check"></i> </a>
            @else
                <a href="{{ url('admin/user') . '/' . $user->id . '/activeSignUp' }}" class="btn btn-danger"><i class="fa fa-close"></i> </a>  
            @endif

		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $user->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $user->name }}</td>
                	</tr>
                    <tr>
                        <td>{{ trans('admin.email') }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.phone') }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.userType') }}</td>
                        <td>
                            @foreach(userType() as $key => $type)
                                @if($user->admin == $key)
                                    {{ $type }}
                                @endif
                            @endforeach
                        </td>
                    </tr>

                    @if($user->admin == 4)
                    <tr>
                        <td>{{ trans('admin.id_number') }}</td>
                        <td>
                            {{ $user->id_number }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.bank_account') }}</td>
                        <td>
                            {{ $user->bank_account }}
                        </td>
                    </tr>

                    <tr>
                        <td>{{ trans('admin.financeFor') }}</td>
                        <td>
                            @foreach(financeFor() as $key => $type)
                                @if($user->financeFor == $key)
                                    {{ $type }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.typeFinance') }}</td>
                        <td>
                            @foreach(typeFinance() as $key => $type)
                                @if(in_array($key, $typeFinanceArray))
                                    <span class="badge badge-success">{{ $type }}</span>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    @endif

                    @if($user->admin == 1)
                    <tr>
                        <td>{{ trans('admin.merchant_id') }}</td>
                        <td>
                            {{ $user->merchant_id }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.gove') }}</td>
                        <td>
                            {{ @$user->gove['name_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.city') }}</td>
                        <td>
                            {{ @$user->city['name_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.typeBuilding') }}</td>
                        <td>
                            {{ @$user->typeBuilding['name_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.studyPhase') }}</td>
                        <td>
                            @foreach($user->monshaaStudyPhase as $phase)
                                {{ @$phase->phase['name_' . getLang()] }} -
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.building_number') }}</td>
                        <td>
                            {{ $user->building_number }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_admin') }}</td>
                        <td>
                            {{ $user->person_admin }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_email') }}</td>
                        <td>
                            {{ $user->person_email }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_phone') }}</td>
                        <td>
                            {{ $user->person_phone }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>{{ trans('admin.bank_account') }}</td>
                        <td>
                            {{ $user->bank_account }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.bank_name') }}</td>
                        <td>
                            {{ $user->bank_name }}
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <td>{{ trans('admin.bank_image') }}</td>
                        <td>
                            <a href="{{ getImage('users', $user->bank_image) }}" data-lightbox="image">
                                <img src="{{ getImage('users', $user->bank_image) }}" width="80" height="80">
                            </a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td>{{ trans('admin.percentage') }}</td>
                        <td>
                            {{ $user->percentage }}
                        </td>
                    </tr>
                    @endif

                    @if($user->admin == 6)
                    <tr>
                        <td>{{ trans('admin.merchant_id') }}</td>
                        <td>
                            {{ $user->merchant_id }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.gove') }}</td>
                        <td>
                            {{ @$user->gove['name_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.city') }}</td>
                        <td>
                            {{ @$user->city['name_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.building_number') }}</td>
                        <td>
                            {{ $user->building_number }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_admin') }}</td>
                        <td>
                            {{ $user->person_admin }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_email') }}</td>
                        <td>
                            {{ $user->person_email }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_phone') }}</td>
                        <td>
                            {{ $user->person_phone }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>{{ trans('admin.bank_account') }}</td>
                        <td>
                            {{ $user->bank_account }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.bank_name') }}</td>
                        <td>
                            {{ $user->bank_name }}
                        </td>
                    </tr> --}}
                    <{{-- tr>
                        <td>{{ trans('admin.bank_image') }}</td>
                        <td>
                            <a href="{{ getImage('users', $user->bank_image) }}" data-lightbox="image">
                                <img src="{{ getImage('users', $user->bank_image) }}" width="80" height="80">
                            </a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td>{{ trans('admin.percentage') }}</td>
                        <td>
                            {{ $user->percentage }}
                        </td>
                    </tr>
                    @endif

                    @if($user->admin == 2)
                    <tr>
                        <td>{{ trans('admin.merchant_id') }}</td>
                        <td>
                            {{ $user->merchant_id }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.person_admin') }}</td>
                        <td>
                            {{ $user->person_admin }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.official_email') }}</td>
                        <td>
                            {{ $user->person_email }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.official_phone') }}</td>
                        <td>
                            {{ $user->person_phone }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.percentage') }}</td>
                        <td>
                            {{ $user->percentage }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.image') }}</td>
                        <td>
                            <img src="{{ getImage('users', $user->image) }}" width="125">
                        </td>
                    </tr>

                    @endif

                    @if($user->admin == 3)
                    <tr>
                        <td>{{ trans('admin.permissionGroup') }}</td>
                        <td>
                            {{ $user->group['name_' . getLang()] }}
                        </td>
                    </tr>
                    @endif

                </tbody>
             </table>

            @if($user->admin == 4)
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>{{ trans('admin.name') }}</th>
                        <th>{{ trans('admin.current_year') }}</th>
                        <th>{{ trans('admin.typePhase') }}</th>
                        <th>{{ trans('admin.studyPhase') }}</th>
                        <th>{{ trans('admin.class') }}</th>
                        <th>{{ trans('admin.options') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->sons as $son)
                    <tr>
                        <td>{{ $son->name }}</td>
                        <td>{{ @$son->year->name }}</td>
                        <td>{{ @$son->typeBuilding['name_' . getLang()] }}</td>
                        <td>{{ @$son->phase['name_' . getLang()] }}</td>
                        <td>{{ @$son->class['name_' . getLang()] }}</td>
                        <td>
                            <a href="{{ url('admin/user/sons' .'/' . $son->id . '/edit') }}" class="btn btn-warning">
								<i class="fa fa-edit"></i>
								{{ trans('admin.edit') }}
							</a>
                            <a href="{{ url('admin/user/sons' .'/' . $son->id . '/delete') }}" class="btn btn-danger delete">
                                <i class="fa fa-close"></i>
                                {{ trans('admin.delete') }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

            @if($user->admin == 2)
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>{{ trans('admin.phone') }}</th>
                        <th>{{ trans('admin.options') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->jehatTamoilPhones as $phone)
                    <tr>
                        <td>{{ $phone->phone }}</td>
                        <td>
                            <a href="{{ url('admin/user/phones' .'/' . $phone->id . '/delete') }}" class="btn btn-danger delete">
                                <i class="fa fa-close"></i>
                                {{ trans('admin.delete') }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

            @if($user->admin == 1 || $user->admin == 6)
            <h4>{{ trans('home.banks') }}</h4>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>{{ trans('admin.name') }}</th>
                        <th>{{ trans('admin.bank_account') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->banks as $bank)
                    <tr>
                        <td>{{ $bank->bank['name_' . getLang()] }}</td>
                        <td>{{ $bank->iban }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
			
		</div> <!-- End Content -->
	</div>

@endsection


@section('script')

    <script type="text/javascript" src="{{ url('public/admin/js/changeRotate.js') }}"></script>

@endsection