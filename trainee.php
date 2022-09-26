<?php
include 'Admin/koneksi.php';
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION['id'])) {
  echo "<script type='text/javascript'>
  alert('Anda harus login terlebih dahulu!');
  window.location = 'login.php'
</script>";
} else {
  date_default_timezone_set('Asia/Jakarta');
  $hari_ini = date('Y-m-d');
  $waktu_sekarang = date('H:i:s');
  $id = $_SESSION['id'];
  $get_data = mysqli_query($conn, "SELECT * FROM traines WHERE nip='$id'");
  $data = mysqli_fetch_array($get_data);
  $ambil = $data['nip'];
  $get_presensi = mysqli_query($conn, "SELECT * FROM presensi WHERE nip='$ambil' and presensi_date='$hari_ini'");
  $data_presensi = mysqli_fetch_array($get_presensi);
}
function activity($activity)
{
  global $conn;
  $sqly = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM activity WHERE id_activity='$activity'"));
  return $sqly['items'];
}
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="card m-5">
    <h5 class="card-header bg-success text-light"><?= $data['name']; ?> - <?= $data['angkatan']; ?>

    </h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-
        in to additional content.</p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      <p></p>
      <div class="card w-50">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <table class="table table-bordered ">
          <thead class=" danger">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Activity</th>
              <th scope="col">Time Presensi</th>
              <th scope="col">Start Time </th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $j = 1; ?>
            <?php foreach ($get_presensi  as $data_absent) :
            ?>
              <tr>
                <th scope="row"><?= $j; ?></th>
                <td><?= activity($data_absent['id_activity']) ?></td>
                <td>Pukul <?= $data_absent['presensi_time'] ?></td>
                <td>@mdo</td>
              </tr>
              <?php $j++; ?>
            <?php endforeach;

            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-
        in to additional content.</p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      <p></p>
      <div class="card w-50">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <table class="table table-bordered ">
          <thead class=" danger">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Activity</th>
              <th scope="col">Time Presensi</th>
              <th scope="col">Start Time </th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $j = 1; ?>
            <?php foreach ($get_presensi  as $data_absent) :
            ?>
              <tr>
                <th scope="row"><?= $j; ?></th>
                <td><?= activity($data_absent['id_activity']) ?></td>
                <td>Pukul <?= $data_absent['presensi_time'] ?></td>
                <td>@mdo</td>
              </tr>
              <?php $j++; ?>
            <?php endforeach;

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>