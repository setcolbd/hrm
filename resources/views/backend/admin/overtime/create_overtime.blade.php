@extends('master')

@section('title','Create Overtime')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/select2/dist/css/select2.min.css')}}">
@endpush
@section('content')
<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-8 offset-md-2 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Create Overtime</h4>
                                    <div class="form-group row">
                                        <label for="e_card_no" class="col-sm-3 text-right control-label col-form-label">Select Card No</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="e_card_no" data-live-search="true">
                                            	<option>IT-54645</option>
                                            	<option>MS-33543</option>
                                            	<option>Ad-89586</option>
                                            	<option>IT-54645</option>
                                            	<option>MS-33543</option>
                                            	<option>Ad-89586</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label"> Employee Name</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" placeholder="Employee Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="works_hour" class="col-sm-3 text-right control-label col-form-label">Works Hour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="works_hour" placeholder="Works Hour">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="regular_time" class="col-sm-3 text-right control-label col-form-label">Regular Time</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="regular_time" placeholder="Regular Time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rate_ph" class="col-sm-3 text-right control-label col-form-label">Rate P/H</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rate_ph" placeholder="Rate Per Hour">
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top text-center">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-c text">Submit</button>
                                    </div>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

    @push('js')
    <script src="{{asset('hrm/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('hrm/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script>
        $(".select2").select2();
    </script>
    @endpush
     
@endsection            