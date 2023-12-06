<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>UKBI</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand nav-link text-white" href="#" ><?php echo "Selamat Datang di Web UKBI " ; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5> 
          <i class="fas fa-envelope-square mr-3"></i>
          <i class="fas fa-bell-slash mr-3"></i>
          <i class="fas fa-sign-out-alt mr-3"></i>
        </h5>
        </div>
  </div>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-user-graduate mr-2"></i>Data Admin</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i>Data Pengguna</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" ><i class="fas fa-users mr-2"></i>Kelola Peserta Tes</a><hr class="bg-secondary">
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="#" ><i class="far fa-calendar-alt mr-2"></i>Hasil Ujian</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>

  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-graduate mr-2"></i> Data Admin</h3><hr>
        <a href ="#" clas="btn-primary mb-2" data-toggle="modal" data-target="#tambahadmin">
        <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA ADMIN</a>

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">USERNAME</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">EMAIL</th>
              <th colspan="3" scope="col">AKSI</th>
            </tr>
          </thead>
          <?php
              include 'koneksi.php';

                  $query = mysqli_query($koneksi, "SELECT * FROM admin");
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($query)) {
                  }
          ?>
            <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $data['username'];?></td>
              <td><?php echo $data['password'];?></td>
              <td><?php echo $data['email'];?></td>
              <td>
                <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                <a href="#" data-toggle="modal" data-target="#editeadmin<?php echo $data['username'];?>">Edit</a>|
                
                
                <i class="fas fa-trash-alt bg-danger p-2 text-while rounded"></i>
                <a href="#" data-toggle="modal" data-target="#deleteadmin<?php echo $data['username'];?>">Delete</a>
                
                <td>
              </tr>

              <!-- update modal -->
              <div class="example-modal">
               <div class="modal fade" id="editadmin<?php echo $data['username'];?>" role="dialog">
               <div class="modal-dialog">
               <div class="modal-content">
               <div class="modal-header">
               <h3 class="modal-title">Edit Data Admin</h3>
               </div>
               <div class="modal-body">
               <form action="update_admin.php" method="post" role="form">
               <?php
               $username = $data['username'];
               $query1 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
               while ($data1 = mysqli_fetch_assoc($query1)) {
               ?>
               <div class="form-group">
               <div class="row">
               <label class="col-sm-3 control-label text-right">Username </label>
               <div class="col-sm-8"><input type="text" class="form-control" name="username" value="<?php echo
              $data1['username']; ?>"></div>
               </div>
               </div>
               <div class="form-group">
               <div class="row">
               <label class="col-sm-3 control-label text-right">Password</label>
               <div class="col-sm-8"><input type="text" class="form-control" name="password" value="<?php echo
              $data1['password']; ?>"></div>
               </div>
               </div>
               <div class="form-group">
               <div class="row">
               <label class="col-sm-3 control-label text-right">Email </label>
               <div class="col-sm-8"><input type="text" class="form-control" name="email" value="<?php echo
              $data1['email']; ?>">
               <?php
               }
               ?>
               </form> </div> </div> </div> </div></div>
              
              <!-- modal delete -->
              <div class="example-modal">
               <div id="deleteadmin<?php echo $data['username']; ?>" class="modal fade" role="dialog" style="display:none;">
               <div class="modal-dialog">
               <div class="modal-content">
               <div class="modal-header">

               <h3 class="modal-title">Konfirmasi Hapus Data</h3>
               </div>
               <div class="modal-body">
               <h5 align="center" >Apakah anda yakin ingin menghapus USERNAME <?php echo
              $data['username'];?><strong><span class="grt"></span></strong> ?</h5>
               </div>
               <div class="modal-footer">
                <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
               <a href="hapus_admin.php?nim=<?php echo $data['username']; ?>" class="btn btn-primary">Delete</a>
               </div>
               </div>
               </div>
               </div>
               </div>
              <?php
            ?>
        </table>        
        </tbody>
      </table>
  </div>

  <!-- Simpan Modal  -->

  <div class="example-modal">
  <div id="tambahmhs" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog"> 
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Tambah Data Baru</h3>
        </div>
        <div class="modal-body">
          <form action="simpan_admin.php" method="post" role="form">
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Username</label>         
              <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nama Mahasiswa</label>
              <div class="col-sm-8"><input type="text" class="form-control" name="password" placeholder="Password" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Email</label>
              <div class="col-sm-8"><input type="text" class="form-control" name="email" placeholder="Email" id="email" value="">
            </div>
              </div>
            </div>
            <div class="modal-footer">
              <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

        </table>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
            