@extends('master')

@section('title','Create Role')

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
                                    <h4 class="card-title text-center">Create Role</h4> 
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-3 text-right control-label col-form-label">Role Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="role" name="role" placeholder="Enter Role Name">
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

    @endpush
     
@endsection            