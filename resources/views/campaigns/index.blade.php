@extends('layouts.layouts')

@section('content')
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card p-1">
                    <div class="card-header">
                        <a class="dt-button d-flex justify-content-center btn btn-primary"
                           href="{{route('campaign.create')}}"> Crate Campaign
                        </a>
                    </div>
                    {{$dataTable->table()}}
                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->

@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
