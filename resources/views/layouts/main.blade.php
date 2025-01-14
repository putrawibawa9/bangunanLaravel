<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-body">

<div class="container bg-white">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand " href="../public/index.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link menu-home" aria-current="page" href="../admins/index.php">Home</a>
        <a class="nav-link menu-category" href="/proyek">Proyek</a>
        <a class="nav-link menu-binatang" href="/testimoni">Testimonial</a>
        <a class="nav-link menu-binatang" href="/gambarProyek">Gambar Proyek</a>
        <a class="nav-link" href="../admin/logout.php">logout</a>
      </div>
    </div>
  </div>
</nav>
        </div>

        {{-- Main Start --}}
        @yield('content')
        {{-- Main End --}}

<div class="col-12">
          <div class="footer text-center p-3">
            Copyright &copy;2024 Nyoman Ayu
          </div>
        </div>
    </div>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>