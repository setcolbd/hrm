@extends('master')

@section('title','Create Group')

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
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <button type="button" class="btn btn-c btn-sm margin-5 text-white" data-toggle="modal" data-target="#AddGroupModal"><i class="fas fa-plus"></i>Add New Group</button>
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

<!-- // Add Group Modal -->
<div class="modal fade" id="AddGroupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                <div class="modal-body">
                <div class="form-group row">
                    <label for="group" class="col-sm-3 text-right control-label col-form-label">Group</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="group" name="group" placeholder="Enter Group Name">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="assign_to" class="col-sm-3 text-right control-label col-form-label">Group Member</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" multiple="">
                            <option>Ami</option>
                            <option>Tumi</option>
                        </select>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="assign_to" class="col-sm-3 text-right control-label col-form-label">Group Member</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            <option>Ami</option>
                            <option>Tumi</option>
                        </select>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-c text">Submit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@push('js')
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script>
   $(".select2").select2();
</script>
@endpush
@endsection            