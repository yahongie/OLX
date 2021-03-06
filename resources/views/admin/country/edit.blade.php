@extends('layouts.adminlayout')

@section('PageHeader')
{{__("general.updateCountry")}}
@endsection

@section('PageLocation')
@parent

<li>
    <a href="{{url('/admin/countries')}}">
        {{__("general.Countries")}}
    </a>
</li>
<li>
    <a href="#">
        {{__("general.updateCountry")}}
    </a>
</li>
@endsection
@section('content')
@parent
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <form action="{{url('/admin/countries/' . $country->id)}}" enctype="multipart/form-data"  method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-flag mr-10"></i>{{__("general.CountryInformation")}}</h6>
                                <hr class="light-grey-hr"/>
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <input type="hidden" value="{{$country->id}}" name="country_id">
                                <div class="form-body overflow-hide">
                                    <div class="checkbox checkbox-primary pr-10 pull-left">
                                        <input id="languageAvailability" value="1" name="is_active" type="checkbox" @if(old('is_active')) checked @elseif($country->is_active == COUNTRY_ACTIVE) checked @endif>
                                        <label for="languageAvailability"> {{__("general.available")}} </label>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="form-group {{ $errors->has('country_name') ? ' has-error' : '' }}">
                                        <label class="control-label mb-10" for="exampleInputuname_01" >{{__("general.country_name")}}</label>

                                            <input type="text" maxlength="20" class="form-control " id="exampleInputuname_01" name="country_name" value=@if(old('country_name')) "{{old('country_name')}}" @else "{{$country->name}}" @endif required />

                                        @if ($errors->has('country_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                                        <label class="control-label mb-10" for="exampleInputuname_01">{{__("general.code")}}</label>


                                            <input type="text" maxlength="5" class="form-control allownumericwithoutdecimal" id="exampleInputuname_01" name="code" value=@if(old('code')) "{{old('code')}}" @else "{{$country->code}}" @endif required />

                                        @if ($errors->has('code'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('code') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('flag') ? ' has-error' : '' }}">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="mt-40">
                                                    <input type="file"
                                                           name="flag"
                                                           id="flag"
                                                           class="dropify"
                                                           data-default-file="{{asset(\Storage::url('Flag/'.$country->flag))}}"
                                                           accept=".jpg,.jpeg,.png" />
                                                </div>
                                                @if ($errors->has('flag'))
                                                    <span class="help-block"
                                                          style="color : red">
                                                <strong>{{ $errors->first('flag') }}</strong>
                                            </span>
                                                @endif

                                                <label class="control-label mb-10" for="exampleInputuname_01">{{__("general.Service")}}</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-mx-auto">
                                <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-translate mr-10"></i>{{__("general.Localization")}}</h6>
                                <hr class="light-grey-hr"/>
                                <div class="panel panel-default card-view">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-heading">
                                            {{__("general.Localization")}}
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-body overflow-hide">
                                                        <div id="english-link" class="form-group {{ $errors->has('en_name') ? ' has-error' : '' }}">
                                                            <label class="control-label mb-10" for="exampleInputuname_01" >{{__("general.name_en")}}</label>
                                                            <div class="input-group">

                                                                <input type="text" maxlength="20" class="form-control " id="exampleInputuname_01" name="en_name" value=@if(old('en_name')) "{{old('en_name')}}" @else "{{$country->translate('en')->name }}" @endif required   />
                                                            </div>
                                                            @if ($errors->has('en_name'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('en_name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div id="arabic-link" class="form-group {{ $errors->has('ar_name') ? ' has-error' : '' }}">
                                                            <label class="control-label mb-10" for="exampleInputuname_01" >{{__("general.name_ar")}}</label>
                                                            <div class="input-group">
                                                                <input type="text" maxlength="20" class="form-control " id="exampleInputuname_01" name="ar_name" value=@if(old('ar_name')) "{{old('ar_name')}}" @else "{{$country->translate('ar')->name }}" @endif required   />
                                                            </div>
                                                            @if ($errors->has('name.'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('ar_name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success mr-10 mb-30">{{__('general.Save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

</div>

@endsection

<!-- /Row -->
@section('footer')
@parent
<script>
    $(document).ready(function(){
        "use strict";
        /* Select2 Init*/
        $(".select2").select2();
        $('.dropify').dropify();

    });
</script>
@endsection