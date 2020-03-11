@extends('master')

@section('title','Attendance Info')

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
     	<form action="" method=""POST>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
            	<div class="col-md-2"></div>
                <div class="col-md-2">
                	<select class="form-control select2" id="status" data-live-search="true">
                		<option readonly="">Select Status</option>
                		<option>All</option>
                		<option>Pending</option>
                		<option>Approved</option>
                		<option>Cancelled</option>
                	</select>
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control" id="start_date" placeholder="Start Date">
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control" id="end_date" placeholder="End Date">
                </div>
                <div class="col-md-2">
		            <button type="submit" class="btn btn-c text"><i class="fas fa-search"></i> Search</button>
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
                                <h5 class="card-title"> All Employee <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>From Date</th>
                                                <th>To Date</th>
                                                <th>No_of_Days</th>
                                                <th>Reason</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>04-03-2020</td>
                                                <td>07-03-2020</td>
                                                <td>4</td>
                                                <td>Because of illness.......</td>
                                                <td>Pending</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="a / c"><i class="fas fa-sort"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mr.TRYPO</td>
                                                <td>20-03-2020</td>
                                                <td>25-03-2020</td>
                                                <td>6</td>
                                                <td>Because of illness.......</td>
                                                <td>Approved</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="a / c"><i class="fas fa-sort"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>04-03-2020</td>
                                                <td>07-03-2020</td>
                                                <td>4</td>
                                                <td>Because of illness.......</td>
                                                <td>Cancelled</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="a / c"><i class="fas fa-sort"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>From Date</th>
                                                <th>To Date</th>
                                                <th>No_of_Days</th>
                                                <th>Reason</th>
                                                <th>Status</th>
                                                <th>Action</th>
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
    /*datwpicker*/
    <script src="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery('#start_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        jQuery('#end_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
@endsection            