@extends('master')

@section('title','Create User Group')

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
                            <h4 class="card-title text-center">Create User Group</h4> 
                            <div class="form-group row">
			                    <label for="group_member" class="col-sm-3 text-right control-label col-form-label">Group Member</label>
			                    <div class="col-sm-9">
			                        <select class="form-control select2" name="group_member" id="group_member" multiple="">
			                            <option>Ami</option>
			                            <option>Tumi</option>
			                            <option>Tara</option>
			                            <option>Amra</option>
			                        </select>
			                    </div>
			                </div>
                        </div>
                        <div class="border-top text-center">
                            <div class="card-body">
                                <button type="button btn-c" class="btn btn-c text">Submit</button>
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

    @endpush
     
@endsection   
