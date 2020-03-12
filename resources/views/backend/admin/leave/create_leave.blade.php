@extends('master')

@section('title','Create Leave')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
	.form-control{border:1px solid #a7a1a1;}
	.text{color:#fff;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
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
                                    <h4 class="card-title text-center">Create Leave</h4>
                                    <div class="form-group row">
                                        <label for="from_date" class="col-sm-3 text-right control-label col-form-label">From Date</label>
                                         <div class="col-sm-9 input-group">
                                            <input type="text" class="form-control" id="from_date" placeholder="From Date">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
                                         </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="to_date" class="col-sm-3 text-right control-label col-form-label">To Date</label>
                                            <div class="col-sm-9 input-group">
                                            <input type="text" class="form-control" id="to_date" placeholder="To Date">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
                                         </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="no_of_day" class="col-sm-3 text-right control-label col-form-label">No Of Days</label>
                                            <div class="col-sm-9">
                                            <input type="number" class="form-control" id="no_of_day" placeholder="No Of Days">
                                         </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="reason" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                            <div class="col-sm-9">
                                            <textarea class="form-control" name="reason" id="reason"></textarea>
                                         </div>
                                    </div> 
                                </div>
                                <div class="border-top text-center">
                                    <div class="card-body">
                                        <button type="button btn-c" class="btn btn-c text">Submit</button>
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
    /*datwpicker*/
    <script src="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery('#from_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        jQuery('#to_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
    @endpush
     
@endsection            