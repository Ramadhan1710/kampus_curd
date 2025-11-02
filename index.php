<?php
// Modern landing page
require_once __DIR__ . '/header.php';
?>
<h1 class="page-title">
  <i class="bi bi-house-door-fill"></i>
  Selamat Datang
</h1>

<div class="row g-4">
  <div class="col-md-6 col-lg-3">
    <div class="card text-center">
      <div class="card-body p-4">
        <i class="bi bi-person-badge display-3 mb-3" style="color: #667eea;"></i>
        <h5 class="card-title fw-bold">Dosen</h5>
        <p class="text-muted mb-3">Kelola data dosen</p>
        <a href="dosen/index.php" class="btn btn-primary"><i class="bi bi-arrow-right-circle me-2"></i>Lihat Data</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-6 col-lg-3">
    <div class="card text-center">
      <div class="card-body p-4">
        <i class="bi bi-people display-3 mb-3" style="color: #764ba2;"></i>
        <h5 class="card-title fw-bold">Mahasiswa</h5>
        <p class="text-muted mb-3">Kelola data mahasiswa</p>
        <a href="mahasiswa/index.php" class="btn btn-primary"><i class="bi bi-arrow-right-circle me-2"></i>Lihat Data</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-6 col-lg-3">
    <div class="card text-center">
      <div class="card-body p-4">
        <i class="bi bi-book display-3 mb-3" style="color: #667eea;"></i>
        <h5 class="card-title fw-bold">Mata Kuliah</h5>
        <p class="text-muted mb-3">Kelola mata kuliah</p>
        <a href="matkul/index.php" class="btn btn-primary"><i class="bi bi-arrow-right-circle me-2"></i>Lihat Data</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-6 col-lg-3">
    <div class="card text-center">
      <div class="card-body p-4">
        <i class="bi bi-card-list display-3 mb-3" style="color: #764ba2;"></i>
        <h5 class="card-title fw-bold">KRS</h5>
        <p class="text-muted mb-3">Kelola KRS mahasiswa</p>
        <a href="krs/index.php" class="btn btn-primary"><i class="bi bi-arrow-right-circle me-2"></i>Lihat Data</a>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4">
  <div class="card-body p-4">
    <h5 class="fw-bold mb-3"><i class="bi bi-info-circle me-2"></i>Tentang Sistem</h5>
    <p class="mb-0">Sistem Informasi Kampus adalah platform manajemen data akademik yang memudahkan pengelolaan data dosen, mahasiswa, mata kuliah, dan KRS secara terpadu dan efisien.</p>
  </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
