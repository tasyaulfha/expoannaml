<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LACAK - Lapor Cari Perbaiki</title>
  <link rel="icon" type="image/png" href="/img/maps2.png">
  <!-- Bootstrap core CSS-->
  <link href="/vendor/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/vendor/font-awesome2/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">


   <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="/css/main2.css" rel="stylesheet" media="all">
 
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  @include('menuPelapor')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Laporkan</a>
        </li>
        <li class="breadcrumb-item active">Formulir Pelaporan</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-forms"></i>Formulir Pelaporan</div>
        <div class="card-body">
            <div class="card-body">
            <form action="{{route('laporan.store')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}
               <div class="form-group">
                <label>Nama Infrastruktur:</label>
                <input type="text" name="nama_infrastruktur" class="form-control" placeholder="Nama Infrastruktur">
              </div>
               <div class="form-group">
                <label>Jenis Kerusakan:</label>
                <input type="text" name="jenis_kerusakan" class="form-control" placeholder="Jenis Kerusakan">
              </div>
               <div class="form-group">
                <label>Tingkat Kerusakan:</label>
                <select class="form-control" name="tingkat_kerusakan">
                  <option value="">Select</option>
                    @foreach($data as $d)
                    <option value="{{$d->level}}">
                      {{$d->level}}
                    </option>
                    @endforeach
                </select>
              </div>
               <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
              </div>
              <div class="form-group">
                <label>Unggah File</label>
                <input type="file" name="file" id="file" class="">
              </div>
              <hr>
              <br>
              <form class="form-group">
                <button class="btn btn--radius-2 btn--blue-2">Kirim</button>
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
    @include('logout')


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
