@extends('master')

@section('title','Create Task')

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
                                    <h4 class="card-title text-center">Create Task</h4>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" placeholder="Task Title">
                                         </div>
                                    </div>  
                                    <div class="form-group row">
                                        <label for="client" class="col-sm-3 text-right control-label col-form-label">Client</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="client" placeholder="Client Name">
                                         </div>
                                    </div>  
                                     <div class="form-group row">
                                        <label for="project" class="col-sm-3 text-right control-label col-form-label">Project</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="project" placeholder="Project Name">
                                         </div>
                                    </div>                                  
                                    <div class="form-group row">
                                        <label for="priority" class="col-sm-3 text-right control-label col-form-label">Priority</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="priority">
                                            	<option>Medium</option>
                                            	<option>Prime</option>
                                            	<option>Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="assign_to" class="col-sm-3 text-right control-label col-form-label">Assign Persion</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="assign_persion" multiple="">
                                            	<option>Ami</option>
                                            	<option>Tumi</option>
                                            	<option>Apni</option>
                                            	<option>Amra</option>
                                            	<option>Tahara</option>
                                            	<option>Ora</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="assign_to" class="col-sm-3 text-right control-label col-form-label">Assign Group</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" id="assign_group" multiple="">
                                                <option>IT</option>
                                                <option>Business</option>
                                                <option>Executive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="start_date" class="col-sm-3 text-right control-label col-form-label">Start Date</label>
                                            <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="start_date" placeholder="mm/dd/yyy">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
                                         </div>
                                         <label for="start_time" class="col-sm-3 text-right control-label col-form-label">Start Time</label>
                                            <div class="col-sm-3">
                                            <input type="time" class="form-control" id="start_time" placeholder="Start Time">
                                           </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="end_date" class="col-sm-3 text-right control-label col-form-label">End Date</label>
                                            <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="end_date" placeholder="mm/dd/yyy">
                                            <div class="input-group-append">
                                              <span class="form-control"><i class="fa fa-calendar"></i></span>
                                            </div>
                                         </div>
                                         <label for="end_time" class="col-sm-3 text-right control-label col-form-label">End Time</label>
                                            <div class="col-sm-3">
                                            <input type="time" class="form-control" id="end_time" placeholder="End Time">
                                           </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="message" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                            <div class="col-sm-9">
                                            <textarea class="form-control" name="message" id="message"></textarea>
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