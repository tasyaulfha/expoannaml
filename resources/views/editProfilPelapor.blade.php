<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LACAK - Lapor Cari Perbaiki</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome2/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


   <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
 
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  @include('menuPelapor')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Profil</a>
        </li>
        <li class="breadcrumb-item active">Atur profil</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-forms"></i>Atur Profil</div>
        <div class="card-body">
            <div class="card-body">
            <form action="#" method="POST">
              {{ csrf_field()}}
               <div class="form-group">
                <label>ID:</label>
                <input type="text" name="id" class="form-control" value="{{$data->user_id}}" readonly="">
              <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}">
              </div>
              <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" value="{{$data->password}}">
              </div>
              <!--  <div class="form-group">
                <label>Ganti Password:</label>
                <input type="password" name="change" class="form-control">
              </div>     -->                          
              <form class="form-group">
                <button class="btn btn--radius-2 btn--blue-2">Simpan</button>
              </form>
            </form>
          </div>
        </div>
      </div>
    </div>
 
  </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   @include('footerDashboard')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/index">Logout</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery3/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery2/jquery.min.js"></script>
    <script src="vendor/bootstrap3/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
