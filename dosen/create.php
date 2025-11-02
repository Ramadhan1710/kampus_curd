<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nidn = $_POST['nidn'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $no_hp = $_POST['no_hp'] ?? '';

    $stmt = $pdo->prepare('INSERT INTO dosen (nidn, nama, gender, no_hp) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nidn, $nama, $gender, $no_hp]);
    header('Location: index.php');
    exit;
}
?>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="d-flex align-items-center mb-4">
      <a href="index.php" class="btn btn-outline-secondary me-3">
        <i class="bi bi-arrow-left"></i>
      </a>
      <h2 class="page-title mb-0">
        <i class="bi bi-person-plus-fill"></i>
        Tambah Dosen
      </h2>
    </div>
    
    <div class="card">
      <div class="card-body p-4">
        <form method="post">
          <div class="mb-3">
            <label class="form-label"><i class="bi bi-hash me-2"></i>NIDN</label>
            <input class="form-control" name="nidn" placeholder="Masukkan NIDN" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label"><i class="bi bi-person me-2"></i>Nama Lengkap</label>
            <input class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label"><i class="bi bi-gender-ambiguous me-2"></i>Gender</label>
            <select class="form-select" name="gender" required>
              <option value="">-- Pilih Gender --</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          
          <div class="mb-4">
            <label class="form-label"><i class="bi bi-telephone me-2"></i>No HP</label>
            <input class="form-control" name="no_hp" placeholder="Contoh: 081234567890">
          </div>
          
          <div class="d-flex gap-2">
            <button class="btn btn-primary px-4">
              <i class="bi bi-save me-2"></i>Simpan
            </button>
            <a class="btn btn-outline-secondary px-4" href="index.php">
              <i class="bi bi-x-circle me-2"></i>Batal
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/../footer.php'; ?>
