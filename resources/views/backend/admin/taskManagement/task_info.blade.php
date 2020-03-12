@extends('master')

@section('title','Task Task')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
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
                	<select class="form-control">
                		<option readonly="">Select Status</option>
                		<option>Pending</option>
                		<option>completed</option>
                		<option>Others</option>
                	</select>
                </div>
                <div class="col-md-2">
                      <input type="date" class="form-control" id="start_date" placeholder="Start Date">
                </div>
                <div class="col-md-2">
                      <input type="date" class="form-control" id="end_date" placeholder="End Date">
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
                                <h5 class="card-title"> All Task <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Client</th>
                                                <th>Project</th>
                                                <th>Priority</th>
                                                <th> Date & Time</th>
                                                <th>Assigned Employee</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                <td>HRM</td>
                                                <td>Fedex Corporation</td>
                                                <td>HRM Software Mnagement</td>
                                                <td>medium</td>
                                                <td>4 Mar 2020 10:10am<br>10 Mar 2020 06:10pm </td>
                                                <td>Mr.A Mr.B Mr.C</td>
                                                <td>20% completed</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shop Page</td>
                                                <td>Pran RFL Group</td>
                                                <td>Ecommerce Software</td>
                                                <td>Prime</td>
                                                <td>4 Mar 2020 10:10am<br>10 Mar 2020 06:10pm </td>
                                                <td>Mr.A Mr.B Mr.C</td>
                                                <td>Completed</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Order Page</td>
                                                <td>GoBD Logistics</td>
                                                <td>Ecommerce Software</td>
                                                <td>Medium</td>
                                                <td>4 Mar 2020 10:10am<br>10 Mar 2020 06:10pm </td>
                                                <td>Mr.A Mr.B Mr.C</td>
                                                <td>Pending</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Client</th>
                                                <th>Project</th>
                                                <th>Priority</th>
                                                <th> Date & Time</th>
                                                <th>Assigned Employee</th>
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

@endpush
@endsection            