@extends('administrator.master')
@section('title', __('Dashboard'))

@section('main_content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{ __('Dashboard') }}
      
      <small>{{ __('HRMS') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>{{ __(' Home') }}</a></li>
      <li class="active">{{ __('Dashboard') }}</li>
    </ol>
  </section>
  @php($user = Auth::user())
  @if($user->access_label == 1)
  <!-- Main content -->
	  <section class="content hide">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><i class="fa fa-users"></i> 3</h3>

          <center><b>Employees</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="http://localhost/human/people/clients" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
         <h3><i class="fa fa-envelope"></i> 1</h3>

          <center><b>References</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="http://localhost/human/people/references" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><i class="fa fa-file"></i> 1</h3>

            <center><b>Clients</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="http://localhost/human/people/employees" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><i class="fa fa-image"></i> 1</h3>

          <center> <b>Files</b></center> 
        </div>
        <div class="icon">
          
        </div>
        <a href="http://localhost/human/folders" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->








<!-- =================Statistics start ========================-->
<script src="http://localhost/human/public/backend/Chart.bundle.js"></script>
<div class="row">
    <div class="col-lg-6">
        <canvas id="myChart2"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="myChart"></canvas>
    </div>
</div>

<div class="row myrow">
    <div class="col-lg-6">
      <h2 class="myh2">Holiday</h2>
      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Holiday Name</th>
                                <th>Dated</th>
                                <th>Description</th> 
                            </tr>
                        </thead>
                        <tbody>
                                                     
                                                        <tr>
                                <td>1</td>
                                <td>asoraa</td>
                                <td>2019-09-25</td>
                                <td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
                            </tr>
                                                    </tbody>
                    </table>
    </div>
    <div class="col-lg-6">
      <h2 class="myh2-1">Notice</h2>
       <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th> 
                            </tr>
                        </thead>
                        <tbody>
                                                     
                                                        <tr>
                                <td>1</td>
                                <td>Office Party</td>
                                <td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
                            </tr>
                                                        <tr>
                                <td>2</td>
                                <td>Office Holidays</td>
                                <td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
                            </tr>
                                                    </tbody>
                    </table>
    </div>
</div>

<script type="text/javascript">
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ['Employees', 'Notices', 'Holidays', 'Files'],
datasets: [{
label: 'Evaluation report by pie chart',
data: [3, 2, 1 , 1 ],
backgroundColor: [
'#17B6A4',
'#2184DA',
'#c16275',
'#3C454D',
],
borderColor: [
'#c16275',
'#2184DA',
'#17B6A4',
'#3C454D'
],
borderWidth: 0
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>
<script type="text/javascript">
var ctx = document.getElementById('myChart2');
var myChart2 = new Chart(ctx, {
type: 'bar',
data: {
labels: ['Employees', 'Notices', 'Holidays', 'Files'],
datasets: [{
label: 'Evaluation Report By Bar Chart',
data: [3, 2, 1 , 1 ],
backgroundColor: [
'#17B6A4',
'#2184DA',
'#c16275',
'#3C454D',
'#8A8F94'
],
borderColor: [
'#c16275',
'#2184DA',
'#17B6A4',
'#3C454D',
'#8A8F94'
],
borderWidth: 0
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>




<!-- =================Statistics end ========================-->














  </div>

    
  </section>
  <!-- /.content -->
  @endif
</div>
@endsection