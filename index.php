<?php
// Start the session
session_start();

// Database connection
include('koneksi.php');

// Check connection and set session variable for success message
if ($connection) {
    $_SESSION['connection_success'] = "Koneksi Berhasil!";
} else {
    $_SESSION['connection_error'] = "Koneksi Gagal: " . mysqli_connect_error();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">DATA SISWA</div>
            <div class="card-body">
              <!-- Show success or error message once and then hide it after page refresh -->
              <?php if (isset($_SESSION['connection_success'])): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $_SESSION['connection_success']; ?>
                </div>
                <?php unset($_SESSION['connection_success']); ?> <!-- Remove the success message after showing -->
              <?php elseif (isset($_SESSION['connection_error'])): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_SESSION['connection_error']; ?>
                </div>
                <?php unset($_SESSION['connection_error']); ?> <!-- Remove the error message after showing -->
              <?php endif; ?>
              
              <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection, "SELECT * FROM tb_siswa");
                      while($row = mysqli_fetch_assoc($query)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo htmlspecialchars($row['nisn']) ?></td>
                      <td><?php echo htmlspecialchars($row['nama_lengkap']) ?></td>
                      <td><?php echo htmlspecialchars($row['alamat']) ?></td>
                      <td class="text-center">
                        <a href="edit-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
          $('#myTable').DataTable();
      });
    </script>
  </body>
</html>
