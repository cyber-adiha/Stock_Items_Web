<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title;?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?= base_url('assets2/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

<style type="text/css">
	
	.divScroll {
overflow-y: auto;
height:450px;
}

	.divScroll thead th {
        position: sticky;
        top: 0;
        z-index: 1;
	}

	th,
      td {
        padding: 8px 16px;
        border: 1px solid #ccc;
      }

    th {
        background: #3498DB;
        color:  white;
      }

      table{
        border-collapse: collapse;
        width: 100%;
      }

</style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $title;?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('data_barang/'.$title); ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('auth/logout'); ?>">
                   <i class="far fa-arrow-alt-circle-left"></i></i>
                    <span>Keluar</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form 
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" autocomplete="off" action="<?= base_url('cari/'.$title); ?>">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword" id="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="tombolCari">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Abid Tondi Nugraha</span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('auth/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


<div class="container-fluid">
	<!-- <button class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button> -->
	<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang" <?php if ($type == '2') {?> hidden <?php } ?>>
        <i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <button class="btn btn-primary mb-3" onclick="window.location.href='<?= base_url('data_barang/'.$title); ?>'"><i class="fas fa-sync-alt"></i> Refresh</button><br><br>

	<div class="divScroll">
	<table class="table table-bordered">
		<thead>
		<tr>
			<th style="text-align: center">No</th>
            <th>ID Barang</th>
			<th>Nama Perusahaan</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="2" style="text-align: center"<?php if ($type == '2') {?> hidden <?php } ?> >Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		foreach ($barang as $brg): ?>

			<tr>
				<td  style="text-align: center"><?= $no++ ?></td>
                <td  style="text-align: center"><?= $brg->id ?></td>
				<td><?= $brg->nama_perusahaan ?></td>
				<td><?= $brg->nama_barang ?></td>
				<td><?= 'Rp '.number_format($brg->harga, 0, '', '.') ?></td>
				<td><?= $brg->stok ?></td>
                <td <?php if ($type == '2') {?> hidden <?php } ?>><button class="btn btn-primary btn-sm" onclick="window.location.href='<?= base_url('data_barang/edit/') .$brg->id ?>'" ><i class="fa fa-edit"></i></button></td>
                <td <?php if ($type == '2') {?> hidden <?php } ?>><button class="btn btn-danger btn-sm" onclick="window.location.href='<?= base_url('data_barang/hapus/') .$brg->id ?>'"><i class="fa fa-trash"></i></button></td>

			</tr>

		<?php endforeach; ?>
	</tbody>
		
	</table>
	</div>

</div>
<!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleeModalLabel">Apakah anda ingin keluar?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
                <div class="modal-body">Pilih "Logout" jika kamu ingin keluar</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Log Out</a>
                </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Form Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                	<form action="<?= base_url(). 'data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >
                		<div class="form-group">
	                        <label>Nama Perusahaan</label>
	                        <input type="text" name="nama_perusahaan" class="form-control">
	                    </div>
	                	<div class="form-group">
	                        <label>Nama Barang</label>
	                        <input type="text" name="nama_barang" class="form-control">
	                    </div>
	                    <div class="form-group">
	                        <label>Harga</label>
	                        <input type="text" name="harga" class="form-control">
	                    </div>
	                    <div class="form-group">
	                        <label>Stok</label>
	                        <input type="text" name="stok" class="form-control">
	                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
        </div>
    </div>
</div>

</div>
 <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets2/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets2/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets2/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets2/'); ?>js/demo/chart-pie-demo.js"></script>
    <script src="<?= base_url('assets2/'); ?>js/uang.js"></script>

</script>

</script>
</body>



</html>