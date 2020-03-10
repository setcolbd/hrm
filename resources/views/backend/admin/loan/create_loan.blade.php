@extends('master')

@section('title','Create Loan')

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
                                    <h4 class="card-title text-center">Create Loan</h4>
                                    <div class="form-group row">
                                        <label for="e_card_no" class="col-sm-3 text-right control-label col-form-label">Employee Id</label>
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
                                        <label for="e_name" class="col-sm-3 text-right control-label col-form-label"> Employee Name</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="e_name" placeholder="Employee Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="available_loan" class="col-sm-3 text-right control-label col-form-label">Available Loan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="available_loan" data-live-search="true">
                                            	<option>6 Month</option>
                                            	<option>12 Month</option>
                                            	<option>18 Month</option>
                                            	<option>24 Month</option>
                                            	<option>30 Month</option>
                                            	<option>36 Month</option>
                                            	<option>42 Month</option>
                                            	<option>48 Month</option>
                                            	<option>54 Month</option>
                                            	<option>60 Month</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="loan_amount" class="col-sm-3 text-right control-label col-form-label">Loan Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="loan_amount" placeholder="Loan Amount" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="interest" class="col-sm-3 text-right control-label col-form-label">Interest(%)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="interest" placeholder="Interest(%)" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total_payable_amount" class="col-sm-3 text-right control-label col-form-label">Tatal Payable Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total_payable_amount" placeholder="Tatal Payable Amount" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repaid_per_month" class="col-sm-3 text-right control-label col-form-label">Repaid P/M</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="repaid_per_month" placeholder="Repaid Per Month" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="create_date" class="col-sm-3 text-right control-label col-form-label">Create Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="create_date" value="<?php echo date('Y-m-d')?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="maturity_date" class="col-sm-3 text-right control-label col-form-label">Maturity Date</label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" class="form-control" id="maturity_date" value="" placeholder="mm/dd/yyy">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
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