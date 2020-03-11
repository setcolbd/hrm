@extends('master')

@section('title','Provident Info')

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
     	<form action="" method=""POST>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
            	<div class="col-md-4"></div>
                <div class="col-md-2">
                	<select class="form-control select2" id="card_no" data-live-search="true">
                    	<option>Select Card No</option>
                    	<option>All</option>
                    	<option>DT-098788</option>
                    	<option>EX-988788</option>
                    	<option>BS-980765</option>
                    	<option>GR-097234</option>
                    </select>
                </div>
                <div class="col-md-2">
		            <button type="submit" class="btn btn-sm btn-c text"><i class="fas fa-search"></i> Search</button>
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
                    <div class="col-8 offset-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Provident Funds <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Salary</th>
                                                <th>PA/PM</th> <!-- //PAPM-provident amount per month -->
                                                <th>PFA Amount</th> <!-- //PAPM-provident fund month -->
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>DT-0989</td>
                                                <td>50000 BDT</td>
                                                <td>500 BDT</td>
                                                <td>500 BDT</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success" >Matured</button>
                                                    <a href="#" class="btn btn-sm btn-danger" >Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>DT-0989</td>
                                                <td>50000 BDT</td>
                                                <td>500 BDT</td>
                                                <td>500 BDT</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success" >Pending</button>
                                                    <a href="#" class="btn btn-sm btn-danger" >Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Salary</th>
                                                <th>PA/PM</th>
                                                <th>PFA Amount</th>
                                                <th>Status</th>
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