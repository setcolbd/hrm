@extends('master')

@section('title','Attendance Info')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endpush

@section('content')
<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
     	<form action="" method=""POST>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
            	<div class="col-md-2"></div>
                <div class="col-md-2">
                	<select class="form-control select2" id="month" data-live-search="true">
                    	<option>Select Month</option>
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
                <div class="col-md-2">
                      <select class="form-control select2" id="year" data-live-search="true">
                    	<option>Select Year</option>
                    	<option>2020</option>
                    	<option>2021</option>
                    	<option>2022</option>
                    	<option>2023</option>
                      </select>
                </div>
                <div class="col-md-2">
                	<select class="form-control select2" id="card_no" data-live-search="true">
                    	<option>Select Card No</option>
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
                <div class="col-md-2">
		            <button type="submit" class="btn btn-sm btn-c"><i class="fas fa-search"></i> Search</button>
		        </div>
            </div>
        </div>
        
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Salary <span class="badge badge-secondary">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Salary</th>
                                                <th>Deduction</th>
                                                <th>Allowence</th>
                                                <th>Net Amount</th>
                                                <th>Receipt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>DT-0989</td>
                                                <td>March</td>
                                                <td>2020</td>
                                                <td>30000</td>
                                                <td>350</td>
                                                <td>5000</td>
                                                <td>34650</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-secondary" >Receipt</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Salary</th>
                                                <th>Deduction</th>
                                                <th>Allowence</th>
                                                <th>Net Amount</th>
                                                <th>Receipt</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
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