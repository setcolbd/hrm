@extends('master')

@section('title','Create Candidate')

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
                            <h4 class="card-title text-center">Create Candidate</h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Candidate Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" placeholder="Candidate Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" placeholder="Candidate Phone">
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
                                <label for="skill" class="col-sm-3 text-right control-label col-form-label">Skill</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="skill" placeholder="Candidate Skill">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="project" class="col-sm-3 text-right control-label col-form-label">Project</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="project" placeholder="Candidate Project">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pre_company" class="col-sm-3 text-right control-label col-form-label">Previous Company</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pre_company" placeholder="Previous Company">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="national_id" class="col-sm-3 text-right control-label col-form-label">National ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="national_id" placeholder="National ID">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="present_address" id="present_address"></textarea>
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