
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
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
      </button>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover" style="background-color: #94B49F;">
                <thead>
                <tr>
                  <th>Nama Task</th>
                  <th>Waktu Mulai</th>
                  <th>Waktu Selesai</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($task as $value)
                    <tr>
                        <td>{{ $value->task_name }}</td>
                        <td>{{ $value->start_time }}</td>
                        <td>{{ $value->end_time }}</td>
                        <td><a href="{{ url('deleteTask/'.$value->id) }}" class="btn btn-danger">Hapus</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                          Edit
                        </button></td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/tambahTask" method="post" class="mb-5">
      @csrf
      <div class="modal-body">  
          <div class="mb-3">
            <input type="hidden" class="form-control" id="peserta_id" name="peserta_id" value="{{ $peserta_id }}">
            <label for="name" class="form-label">Nama Task</label>
            <input type="text" class="form-control" id="task_name" name="task_name" required>
          </div>
          <div class="mb-3">
            <label for="start_time" class="form-label">Waktu Mulai</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
          </div>
          <div class="mb-3">
            <label for="end_time" class="form-label">Waktu Selesai</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Form Tambah Data Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/updateTask" method="post" class="mb-5">
      @csrf
      <div class="modal-body">  
          <div class="mb-3">
            <input type="hidden" class="form-control" id="task_id" name="task_id" value="{{ $value->id }}">
            <label for="name" class="form-label">Nama Task</label>
            <input type="text" class="form-control" id="task_name" name="task_name" value="{{ $value->task_name }}" required>
          </div>
          <div class="mb-3">
            <label for="start_time" class="form-label">Waktu Mulai</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ $value->start_time }}" required>
          </div>
          <div class="mb-3">
            <label for="end_time" class="form-label">Waktu Selesai</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ $value->end_time }}" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
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
