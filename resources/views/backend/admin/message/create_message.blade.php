@extends('master')

@section('title','Create Message')

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
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                    <div class="col-md-8 offset-md-2">
                        <!-- Tabs -->
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#create_message" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="fas fa-envelope"></i> Create Message</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#send_message" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="fas fa-arrow-alt-circle-right"></i> Send Message </span><span class="badge badge-secondary btn-c text">20</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inbox" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="fas fa-arrow-alt-circle-left"></i> Inbox </span><span class="badge badge-danger text">13</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="create_message" role="tabpanel">
                                    <div class="p-20">
                                        <p>
                                        	<form class="form-horizontal">
				                                <div class="card-body">
				                                    <div class="form-group row">
				                                        <label for="from" class="col-sm-3 text-right control-label col-form-label">From</label>
				                                            <div class="col-sm-9">
				                                            <input type="text" class="form-control" id="from" value="Mr. MNOP HAQ" placeholder="Message From">
				                                         </div>
				                                    </div>
				                                    <div class="form-group row">
				                                        <label for="to_persion" class="col-sm-3 text-right control-label col-form-label">To Persion</label>
				                                        <div class="col-sm-9">
				                                            <select class="form-control select2" id="to_persion" multiple="">
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
				                                        <label for="to_group" class="col-sm-3 text-right control-label col-form-label">To Group</label>
				                                        <div class="col-sm-9">
				                                            <select class="form-control select2" id="to_group" multiple="">
				                                                <option>IT</option>
				                                                <option>Business</option>
				                                                <option>Executive</option>
				                                            </select>
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
				                                        <button type="button btn-c" class="btn btn-c text">Send Message</button>
				                                    </div>
				                                </div>
                                            </form>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="send_message" role="tabpanel">
                                    <div class="p-20">
                                        <p class="m-t-10">
                                        	<div class="card-body">
				                                <div class="table-responsive">
				                                    <table id="zero_config" class="table table-striped table-bordered">
				                                        <thead>
				                                            <tr>
				                                                <th>Message From</th>
				                                                <th>Message To</th>
				                                                <th>Create Date</th>
				                                                <th style="width:25%">Message</th>
				                                                <th style="width:25%">In Reply</th>
				                                            </tr>
				                                        </thead>
				                                        <tbody>
				                                            <tr>
				                                                <td>Mr. ABC</td>
				                                                <td>Mr. XYZ</td>
				                                                <td>09-09-2020</td>
				                                                <td>Hello Developers.What's Your Update....</td>
				                                                <td>Hello Sir We are almost done....</td>
				                                            </tr>
				                                        </tbody>
				                                        <tfoot>
				                                            <tr>
				                                                <th>From</th>
				                                                <th>To</th>
				                                                <th>Date</th>
				                                                <th style="width:25%">Message</th>
				                                                <th style="width:25%">In Reply</th>
				                                            </tr>
				                                        </tfoot>
				                                    </table>
				                                </div>

				                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane p-20" id="inbox" role="tabpanel">
                                    <div class="p-20">
                                        <p>
                                        	<div class="card-body">
				                                <div class="table-responsive">
				                                    <table id="zero_config" class="table table-striped table-bordered">
				                                        <thead>
				                                            <tr>
				                                                <th>Message From</th>
				                                                <th>Message To</th>
				                                                <th>Create Date</th>
				                                                <th style="width:25%">Message</th>
				                                                <th style="width:25%">In Reply</th>
				                                                <th>Reply</th>
				                                            </tr>
				                                        </thead>
				                                        <tbody>
				                                            <tr>
				                                                <td>Mr. ABC</td>
				                                                <td>Mr. XYZ</td>
				                                                <td>09-09-2020</td>
				                                                <td>Hello Developers.What's Your Update....</td>
				                                                <td>Hello Sir We are almost done....</td>
				                                                <td>
				                                                	<ul class="nav nav-tabs" role="tablist">
										                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#create_message" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="fas fa-envelope"></i></span></a> </li>
										                            </ul>
				                                                </td>
				                                            </tr>
				                                        </tbody>
				                                        <tfoot>
				                                            <tr>
				                                                <th>From</th>
				                                                <th>To</th>
				                                                <th>Date</th>
				                                                <th style="width:25%">Message</th>
				                                                <th style="width:25%">In Reply</th>
				                                                <th>Reply</th>
				                                            </tr>
				                                        </tfoot>
				                                    </table>
				                                </div>

				                            </div>
                                        </p>
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