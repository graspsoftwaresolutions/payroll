@extends('administrator.master')
@section('title', __('Income Tax List'))

@section('main_content')
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/buttons.dataTables.min.css') }}">
<style type="text/css">
    @media print{
        .action{
            display: none;
        }
    }
    .dt-button.buttons-print{
        background-color: #3c8dbc;
        border-color: #367fa9;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          {{ __('Income Tax List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Income Tax ') }}</a></li>
            <li class="active">{{ __('Manage Income Tax') }}</li>
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
                    <a href="{{ route('payroll.add_income_tax') }}" class="btn btn-primary btn-flat pull-right"><i class="fa fa-edit"></i> {{ __('Add Income Tax') }}</a>
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
                            <th>{{ __('Employee No') }}</th>
                            <th>{{ __('Income Tax No') }}</th>
                            <th>{{ __('New Ic No') }}</th>
                            <th>{{ __('DOJ') }}</th>
                            <th>{{ __('DOB') }}</th>
                            <th>{{ __('Gross Salary') }}</th>
                            <th class="text-center action">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                    
                        @foreach($data['incometaxList'] as $values)
                        <tr>
                            <td>{{ strtoupper($values->name) }}</td>
                            <td>{{$values->employee_no}}</td>
                            <td>{{$values->income_tax_no}}</td>
                            <td>{{$values->new_ic_no}}</td>
                            <td>{{ $values->doj=='' || $values->doj=='0000-00-00' ? '' : date('d/m/Y',strtotime($values->doj)) }}</td>
                            <td>{{ $values->dob=='' || $values->dob=='0000-00-00' ? '' : date('d/m/Y',strtotime($values->dob)) }}</td>
                            <td>{{$values->gross_salary }}</td>
                            
                            <td class="text-center action">
                                <a style="font-size:19px" target="_blank" class="btn btn-sm red waves-effect waves-circle waves-light" href="{{ route('income.print',Crypt::encrypt($values->incometaxid)) }}"><i class="icon fa fa-print"></i> Print</a>
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
