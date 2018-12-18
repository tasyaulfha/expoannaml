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
  @include('menuBpbd')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Lihat Laporan</a>
        </li>
        <li class="breadcrumb-item active">Lihat Laporan</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-forms"></i>Lihat Laporan
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelapor</th>
                  <th>Nama Infrastruktur</th>
                  <th>Jenis Kerusakan</th>
                  <th>Tingkat Kerusakan</th>
                  <th>Deskripsi</th>
                  <th>Lokasi</th>
                  <th>Dokumentasi</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0;?>
                @foreach($LaporanMasuk as $key => $datas)
                <?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$datas -> user -> nama}}</td>
                  <td>{{$datas->nama_infrastruktur}}</td>
                  <td>{{$datas->jenis_kerusakan}}</td>
                  <td>{{$datas->tingkat_kerusakan}}</td>
                  <td>{{$datas->deskripsi}}</td>
                  <td>{{$datas->lokasi}}</td>
                  <td>{{$datas->file}}</td>
                  <td>{{$datas->status}}</td>
                  <td><form align="center" action="{{route('laporanmasuk.destroy',$datas->id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                      <a href="{{url('editDataLaporan/'.$datas->id)}}" class="btn-sm btn-primary">Verifikasi</a>
                      <button class="btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></form>
                            </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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
