<!DOCTYPE html>
<html lang="en">
<head>
 <title>Login Sistem Arsip Digital</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 <div class="container">
  <!-- Form Login -->
  <form method="post" action="<?=base_url('/login')?>">
  <div class="row">
   <div class="form-group col-md-4">
    <div class="mb-3">
     <!-- email -->
     <label for="email" class="form-label">Alamat Email</label>
     <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <!-- Sandi -->
    <div class="mb-3">
     <label for="sandi" class="form-label">Sandi Sistem</label>
     <input type="password" name="sandi" class="form-control" id="sandi">
    </div>
    <!-- tombol login -->
    <button type="submit" class="btn btn-primary mb-3">login</button>
   </div>
  </div>
 </form>
 </div>
 
</body>
</html>