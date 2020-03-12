@extends('master')

@section('title','Create Salary')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/select2/dist/css/select2.min.css')}}">
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
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
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
                                    <h4 class="card-title text-center">Create Salary</h4>
                                    <div class="form-group row">
                                        <label for="month" class="col-sm-3 text-right control-label col-form-label">Select Month</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="month" data-live-search="true">
                                            	<option>January</option>
                                            	<option>February</option>
                                            	<option>March</option>
                                            	<option>April</option>
                                            	<option>May</option>
                                            	<option>June</option>
                                            	<option>July</option>
                                            	<option>August</option>
                                            	<option>September</option>
                                            	<option>October</option>
                                            	<option>November</option>
                                            	<option>December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="year" class="col-sm-3 text-right control-label col-form-label">Select Year</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="year" data-live-search="true">
                                            	<option>2020</option>
                                            	<option>2021</option>
                                            	<option>2022</option>
                                            	<option>2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="card_no" class="col-sm-3 text-right control-label col-form-label">Select Card No</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="card_no" data-live-search="true">
                                            	<option>DT-098709</option>
                                            	<option>BU-670909</option>
                                            	<option>EX-980348</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="e_name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="e_name" placeholder="Employee Name" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="salary" class="col-sm-3 text-right control-label col-form-label">Salary</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="salary" placeholder="Employee Salary" readonly="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="total_leave" class="col-sm-3 text-right control-label col-form-label">Total Leave</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total_leave" placeholder="Total Leave" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="approve_leave" class="col-sm-3 text-right control-label col-form-label">Approve Leave</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="approve_leave" placeholder="Approve Leave" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="leave_deduction" class="col-sm-3 text-right control-label col-form-label">Leave Deduction</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="leave_deduction" placeholder="Leave Deduction" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="travel_allowence" class="col-sm-3 text-right control-label col-form-label">Travel Allowence</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="travel_allowence" placeholder="Travel Allowence" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medical_allowence" class="col-sm-3 text-right control-label col-form-label">Medical Allowence</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="medical_allowence" placeholder="Medical Allowence" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lunch_allowence" class="col-sm-3 text-right control-label col-form-label">Lunch Allowence</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lunch_allowence" placeholder="lunch Allowence" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="net_amount" class="col-sm-3 text-right control-label col-form-label">Net Amount</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="net_amount" placeholder="lunch Allowence" readonly="">
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
    <script src="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    /*datwpicker*/
    <script>
        jQuery('#maturity_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
        
    @endpush
     
@endsection            