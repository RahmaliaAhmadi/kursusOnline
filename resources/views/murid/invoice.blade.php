@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Konfirmasi</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>#190930001</td>
                        <td>Pania Paramita</td>
                        <td>6 SD</td>
                        <td>1</td>
                        <td>Sendowo</td>
                        <td>
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span>Belum Konfirmasi</span>
                          </a>
                        </td>
                        <td>
                          <a class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-envelope"></span>
                          </a>
                        </td>
                        <td>
                          <a href="/invoicenya" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>
                    </tr>
                </tbody>
            </table>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  @endsection
  @section('dataTables')
  <script>
         $(document).ready( function () {
           $('#jadwal').DataTable();
           });
      </script>
  @endsection