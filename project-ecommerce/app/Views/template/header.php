<!DOCTYPE html>
<html lang="en">
<head>
 <title><?= esc($title) ?></title>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <!-- Costume : -->
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <!-- --------- -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js"></script>
  <!-- ---------- -->
<!-- button -->
  <form method="post" action="<?=base_url('logout')?>">
      <input name="_method" value="delete" type="hidden" />
      <button class='float-end btn btn-danger' id="logout" name="logout"> Log Out </button>
    </form>
    <form method="get" action="<?=base_url('pages/alamatpelanggan')?>">
      <button class='float btn btn-danger' id="alamatpelanggan" name="alamatpelanggan"> Alamat Pelanggan </button>
    </form>
    <form method="get" action="<?=base_url('pages/alamatpelanggan')?>">
      <button class='float btn btn-danger' id="alamatpelanggan" name="alamatpelanggan"> Alamat Pelanggan </button>
    </form>
<!-- akhir button -->