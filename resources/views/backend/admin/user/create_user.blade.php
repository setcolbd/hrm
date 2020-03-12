@extends('master')

@section('title','Create User')

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
                                    <h4 class="card-title text-center">Create User</h4>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" placeholder="Full Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 text-right control-label col-form-label">Image </label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="image" required="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sallary" class="col-sm-3 text-right control-label col-form-label">Sallary</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="sallary" placeholder="Sallary Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phone" placeholder="Phone No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="national_id" class="col-sm-3 text-right control-label col-form-label">National ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="national_id" placeholder="National ID Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="card_no" class="col-sm-3 text-right control-label col-form-label">Card No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="card_no" placeholder="Card No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Present Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="present_address" id="present_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Permanent Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="present_address" id="permanent_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="about" class="col-sm-3 text-right control-label col-form-label">About</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="about" id="about"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Join Date</label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" class="form-control" id="join_date" placeholder="Join Date Here">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="role">
                                                <option>Admin</option>
                                                <option>Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 text-right control-label col-form-label">CV </label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="cv" required="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" placeholder="Password Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="confirm_password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password Here">
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

    /*datwpicker*/
    <script src="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery('#join_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
    @endpush
@endsection            