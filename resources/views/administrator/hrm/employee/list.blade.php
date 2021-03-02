@extends('administrator.master')
@section('title', __('Employee List'))

@section('main_content')
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/buttons.dataTables.min.css') }}">
<style type="text/css">
    @page { margin: 3px 12px 7px 12px !important; }
    @media print{
        .action{
            display: none;
        }
        #example3.dataTable {
            margin-top: 0px!important;
        }
    }
    .dt-button.buttons-print{
        background-color: #3c8dbc;
        border-color: #367fa9;
    }
    #example3.dataTable {
        margin-top: 0px!important;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          {{ __('Employee List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Employees ') }}</a></li>
            <li class="active">{{ __('Manage Employees') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">{{ __('Manage Sosco ') }}</h3> -->

                <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div> -->
            </div>
            <div class="box-body">
              
                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
                <!-- /.Notification Box -->
                <div id="printable_area" class="col-md-12 table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Category') }}</th>
                            
                            <th>{{ __('New Ic No') }}</th>
                            <th width="15%">{{ __('DOJ') }}</th>
                            <th width="15%">{{ __('DOB') }}</th>
                            <th>{{ __('Age') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th class="text-center action hide">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                    
                        @foreach($data['employee_list'] as $values)
                        <tr>
                            <td>{{ strtoupper($values->name) }}</td>
                            <td>{{$values->category}}</td>
                            
                            <td>{{$values->new_ic_no}}</td>
                            <td>{{ date('d-m-Y',strtotime($values->doj)) }}</td>
                            <td>{{ $values->dob!='' && $values->dob!='1970-01-01' ? date('d-m-Y',strtotime($values->dob)) : ''  }}</td>
                            @php
                                $age = '';
                                if($values->dob!='0000-00-00'){
                                    $age = CommonHelper::calculate_age($values->dob);
                                }
                            @endphp
                            <td>{{$age}}</td>
                            <td>
                                @php
                                    if($values->status==1){
                                        $statusname = 'Active';
                                    }else if($values->status==2){
                                        $statusname = 'InActive';
                                    }else{
                                        $statusname = 'Resigned';
                                    }
                                @endphp
                                {{ $statusname }}
                            </td>
                            <td class="text-center action hide">
                                
                            </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>

  


            </div><!--printable-->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
 
@endsection
 @section('footerSection')
 <script src="{{ asset('public/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/buttons.flash.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('public/js/buttons.print.min.js') }}" type="text/javascript"></script>
 <script type="text/javascript">
     $('#example3').DataTable({
        'paging': true,
        'lengthChange': true,
         dom: 'lBfrtip', 
         buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                },
                title : 'Employee List',
                text:   '<i class="fa fa-print"></i> Print',
                titleAttr: 'print'
           }  
        ],
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': false,
    });
 </script>
 @endsection
