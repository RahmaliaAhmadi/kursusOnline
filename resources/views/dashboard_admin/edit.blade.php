@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	 <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Profile Admin</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Admin</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Admin
                                </li>
                            </ol>
                        </div>			
			  	    </div>			
                </div>
            </div>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <!-- <div class="form-group">
                    <button type="submit" class="btn-edit" style="margin-left:auto;">
                        Edit
                    </button>
                </div> -->
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Foto :</label>
                        <img width="200px" height="200px" src="/tema/images/bimbel.jpg" style="display:block;margin-left:auto;margin-right:auto">
                    </div>
					<!-- <label for="nama">Foto :</label>
					<div> <a href="#" target="_blank">
						<img width="150px" height="200px" src="/tema/images/bimbel.jpg" style="display:block;margin-left:auto;margin-right:auto">
						</a>
					</div> -->

					<div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="Pania Paramita Andika">
					</div>

					<div class="form-group">
						<label for="">No Telepon :</label>
						<input type="text" class="form-control" id="no" name="no" value="081218099939">
					</div>

					<div class="form-group">
						<label for="">Email :</label>
						<input type="text" class="form-control" id="email" name="email" value="vania.paramita23@gmail.com">
					</div>

					<div class="form-group">
						<label for="">Kata Sandi :</label>
						<input type="password" class="form-control" id="password" name="password" value="vania.p.a15"> 
					</div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        <a href="/profileAdmin" class="btn btn-md btn-danger">Batal</a>
                </div>
				</form>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>
</div>
    <!-- /.content-header -->
@endsection
