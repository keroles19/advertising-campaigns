@extends('layouts.layouts')
@section('content')

    <div class="content-body">
        <!-- Input Mask start -->
        <section id="input-mask-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">@lang('Create Campaign')</h4>
                        </div>
                        <div class="card-body">
                            @include('partials.errors')
                            <form action="{{route('campaign.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <label class="form-label" >@lang('name')</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}"
                                               placeholder="Enter Name"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" >@lang('from')</label>
                                        <input type="date" name="from" class="form-control" value="{{old('from')}}"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" >@lang('to')</label>
                                        <input type="date" name="to" class="form-control" value="{{old('to')}}"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" >@lang('total')</label>
                                        <input type="text" name="total" class="form-control" value="{{old('total')}}"/>
                                    </div>
                                      <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" >@lang('daily_budget')</label>
                                        <input type="text" name="daily_budget" value="{{old('daily_budget')}}" class="form-control"/>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label for="document">Images</label>
                                            <div class="needsclick dropzone" id="document-dropzone">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-grid gap-6" style="margin-top: 10px;">
                                        <button class="btn btn-icon btn-primary btn-block" type="submit">
                                            @lang('Submit')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Mask End -->

    </div>
@endsection

@section('js_section')
    @include('partials.dropzone')
@stop
