@extends('master')

@section('title','Attendance Info')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
    /*.select2-container .select2-selection--single {
        height: 28px;
        height: 35px;
    }*/
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
            <div class="col-8 offset-md-2 d-flex no-block align-items-center">
                <div class="col-md-3">
                	<select class="form-control select2" style="line-height: 40px">
                		<option readonly="">Select Card No</option>
                		<option>All</option>
                		<option>DT-9689</option>
                		<option>TT-8907</option>
                		<option>AT-8907</option>
                		<option>UT-8907</option>
                	</select>
                </div>
                <div class="col-md-3">
                      <input type="text" class="form-control" id="start_date" placeholder="Start Date">
                </div>
                <div class="col-md-3">
                      <input type="text" class="form-control" id="end_date" placeholder="End Date">
                </div>
                <div class="col-md-3">
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
                    <div class="col-8 offset-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> All Employee <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Date</th>
                                                <th>Attendence</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>04-03-2020</td>
                                                <td>
                                                    <span class="btn btn-sm btn-success"  data-toggle="tooltip" data-placement="top" title="" data-original-title="present"><i class="fas fa-check"></i></span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>04-03-2020</td>
                                                <td>
                                                    <span class="btn btn-sm btn-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="absent"><i class="fas fa-times"></i></span>
                                                </td>
                                                <td class="text-center">
                                                	<a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                	<a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                	<a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>04-03-2020</td>
                                                <td>In leave</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Name</th>
                                                <th>Card No</th>
                                                <th>Date</th>
                                                <th>Attendence</th>
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
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script>
   $(".select2").select2();
</script>
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