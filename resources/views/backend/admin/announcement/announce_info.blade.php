@extends('master')

@section('title','Announcement Info')

@push('css')
<style type="text/css">
    .btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                                <h4 class="card-title m-b-0">Announcement</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="{{asset('hrm/assets/images/users/1.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{asset('hrm/assets/images/users/4.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">May 10, 2016</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{asset('hrm/assets/images/users/5.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">August 1, 2016</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{asset('hrm/assets/images/users/4.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">August 1, 2016</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
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