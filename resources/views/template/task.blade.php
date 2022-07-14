
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/')}}/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <span>I</span>
        </div>
        <div class="pull-left info">
          <p>{{ $name }}</p>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="">
          <a href="{{ url('peserta') }}">
            <i class="fa fa-users"></i> <span>Peserta</span>
          </a>
        </li>
        
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>INI ADALAH ADMIN PANEL</h1>
    </section>

    <section class="content">

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover" style="background-color: #94B49F;">
                <thead>
                <tr>
                  <th>Nama Task</th>
                  <th>Waktu Mulai</th>
                  <th>Waktu Selesai</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($task as $value)
                    <tr>
                        <td>{{ $value->task_name }}</td>
                        <td>{{ $value->start_time }}</td>
                        <td>{{ $value->end_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
              </table>
            </div>

    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2022 </strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset('assets/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets/')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('assets/')}}/bower_components/fastclick/lib/fastclick.js"></script>
<script src="{{asset('assets/')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('assets/')}}/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
