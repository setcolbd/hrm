@extends('master')

@section('title','User Group Info')

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
                    <div class="col-8 offset-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> All User Group <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Group</th>
                                                <th>Group Members</th>
                                                <th>created_At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                <td>01</td>
                                                <td>Developer</td>
                                                <td>Mr.XYZ <br>Mr.ABC <br>Mr.MNO</td>
                                                <td>09-08-2020</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Executive</td>
                                                <td>Mr.JKL <br>Mr.VCV <br>Mr.MNO</td>
                                                <td>09-08-2020</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>User Group</th>
                                                <th>Group Members</th>
                                                <th>created_At</th>
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