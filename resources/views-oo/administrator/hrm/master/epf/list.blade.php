@extends('administrator.master')
@section('title', __('Manage EPF'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          {{ __(' Manage EPF') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('EPF ') }}</a></li>
            <li class="active">{{ __('Manage EPF') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">{{ __('Manage EPF ') }}</h3> -->

                <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div> -->
            </div>
            <div class="box-body">
                <div  class="col-md-3">
                <a href="{{ route('master.epf_add') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> {{ __('add new EPF') }}</a>
            </div>
                <div  class="col-md-3">
                <!-- <button type="button" class="tip btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"> {{ __('Print') }}</span>
                </button> -->
            </div>
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
                </div>
                    <br> <br> <br> <br>
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
                <table  class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Wage Limit ') }}</th>
                                <th>{{ __('From Amount') }}</th>
                                <th>{{ __('To Amount') }}</th>
                                <th>{{ __('Employee Contribution') }}</th>
                                <th>{{ __('Employer Contribution') }}</th>
                                <th>{{ __('Total Contribution') }}</th>
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                    <tbody id="myTable">
                    @php ($sl = 1)
                        @foreach($data['epf_list'] as $values)
                        <tr>
                            <td>{{ $sl ++ }}</td>
                            <td>{{$values->wage_limit}}</td>
                            <td>{{$values->from_amount}}</td>
                            <td>{{$values->to_amount}}</td>
                            <td>{{$values->employee_contribution}}</td>
                            <td>{{$values->employer_contribution    }}</td>
                            <td>{{$values->total_contribution}}</td>
                            <td class="text-center">
                                    <a style="font-size:19px" class="btn btn-sm red waves-effect waves-circle waves-light" href="{{ route('master.EpfEdit',Crypt::encrypt($values->id)) }}"><i class="icon fa fa-edit"></i></a>
                                  
                                       
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
<script>
  function ConfirmDeletion() {
        if (confirm("{{ __('Are you sure you want to delete?') }}")) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection
