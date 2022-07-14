
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
                  <th>Nama Peserta</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Posisi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->address }}</td>
                        <td>{{ $value->position }}</td>
                        <td><a href="{{ url('gettask/'.$value->id) }}" class="btn btn-success">Detail</a>
                        <a href="{{ url('deletePeserta/'.$value->id) }}" class="btn btn-danger">Hapus</a>
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
      <form action="/tambahPeserta" method="post" class="mb-5">
      @csrf
      <div class="modal-body">  
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="url_abstrak" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="url_abstrak" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="url_abstrak" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="position" name="position" required>
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
      <form action="/updatePeserta" method="post" class="mb-5">
      @csrf
      <div class="modal-body">  
          <div class="mb-3">
            <input type="hidden" class="form-control" id="peserta_id" name="peserta_id" value="{{ $value->id }}">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $value->name }}" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $value->email }}" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $value->address }}" required>
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $value->position }}" required>
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
