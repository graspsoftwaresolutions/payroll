@extends('administrator.master')
@section('title', __('Manage Addition'))

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
      <li class="active">{{ __('Manage Edit Addition') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Manage Edit Addition') }}</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
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
        <div class="col-md-12">

            @php $row = $data['addition_data'][0]; @endphp
          <form class="form-horizontal" action="{{ route('addition.update') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="addition_id" id="addition_id" value="{{$row->id}}">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-sm-3 control-label">{{ __('Additon name') }}<span style="color:red"> *</span></label>
              <div class="col-sm-6">
               <input type="text" name="name" class="form-control" value="{{$row->name}}"  placeholder="{{ __('Additon name') }}">
               @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

            <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
              <label for="cat_id" class="col-sm-3 control-label">{{ __('category') }} <span style="color:red"> *</span></label>
              <div class="col-sm-6">
                <select name="cat_id" id="cat_id" class="form-control">
                  <option value="0" disabled selected="true">{{ __('Select One') }}</option>
                  @foreach($data['cat_list'] as $values)
                  <option value="{{ $values->id }}" @if($row->cat_id==$values->id) selected @endif><strong>{{ $values->cat_name }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('cat_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('cat_id') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <!-- /.end group -->
              <div class="form-group{{ $errors->has('assigned_to') ? ' has-error' : '' }}">
              <label for="assigned_to" class="col-sm-3 control-label">{{ __('Assingee') }} <span style="color:red"> *</span></label>
              <div class="col-sm-6">
                    <input type="radio"  name="assigned_to" value="1"  @if($row->assigned_to==1) checked @endif>All Employees
                    <input type="radio" name="assigned_to" value="2"  @if($row->assigned_to==2) checked @endif>individual
                    @if ($errors->has('assigned_to'))
                    <span class="help-block">
                        <strong>{{ $errors->first('assigned_to') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <!-- /.end group -->
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i>{{ __('Update Addition') }} </button>
                </div>
              </div>
              <!-- /.end group -->
            </form>
            <!-- /. end form -->
          </div>
          <!-- /. end col -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix"></div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  @endsection