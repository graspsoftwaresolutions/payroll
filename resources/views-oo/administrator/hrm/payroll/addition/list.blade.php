@extends('administrator.master')
@section('title', __('Addition List'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __('Addition') }} 
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Addition') }}</a></li>
            <li class="active">{{ __('Addition List') }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">{{ __('Addition List') }}</h3> -->

                <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div> -->
            </div>
            <div class="box-body">
                <div  class="col-md-6">
                    <a href="{{ route('addition_new') }}" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> {{ __('Add Addition') }}</a>
                </div>
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
                </div>
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
                <div class="col-md-12 table-responsive">
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('SL#') }}</th>
                                <th>{{ __('Name') }}</th>
                                <!-- <th>{{ __('Category Name') }}</th>
                                <th>{{ __('Assigned To') }}</th> -->
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                        @php ($sl = 1)
                                @foreach($data['addition_list'] as $values)
                                <tr>
                                    <td>{{ $sl ++ }}</td>
                                    <td>{{$values->name}}</td>
                                    <!-- <td>{{$values->cat_name}}</td>
                                    @if($values->assigned_to == 1 )
                                    <td>All Employees</td>
                                    @else
                                    <td>Individual</td>
                                    @endif -->
                                    <td class="text-center">
                                            <a href="{{ route('master.addtionEdit',Crypt::encrypt($values->additionid)) }}"><i class="icon fa fa-edit"></i> {{ __('Edit') }}</a>&nbsp;&nbsp;
                                            
                                            <a style="color:red" onclick='return ConfirmDeletion()' href="{{ route('payroll.addtionDelete',Crypt::encrypt($values->additionid)) }}"><i class="icon fa fa-trash"></i> {{ __('Delete') }}</a>
                                           
                                            <a>
                                        </a>
                                        </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
@endsection
<script>
 function ConfirmDeletion() {
        if (confirm("{{ __('Are you sure you want to delete?') }}")) {
            return true;
        } else {
            return false;
        }
    }
</script>