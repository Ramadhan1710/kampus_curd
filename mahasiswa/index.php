<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../header.php';

$stmt = $pdo->query('SELECT m.*, d.nama AS dosen_nama FROM mahasiswa m LEFT JOIN dosen d ON m.nidn=d.nidn');
$rows = $stmt->fetchAll();
?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="page-title mb-0">
    <i class="bi bi-people-fill"></i>
    Data Mahasiswa
  </h2>
  <a class="btn btn-primary" href="create.php">
    <i class="bi bi-plus-circle me-2"></i>Tambah Mahasiswa
  </a>
</div>

<div class="card">
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead>
          <tr>
            <th><i class="bi bi-hash me-2"></i>NIM</th>
            <th><i class="bi bi-person me-2"></i>Nama</th>
            <th><i class="bi bi-gender-ambiguous me-2"></i>Gender</th>
            <th><i class="bi bi-telephone me-2"></i>No HP</th>
            <th><i class="bi bi-person-badge me-2"></i>Dosen Pembimbing</th>
            <th class="text-center"><i class="bi bi-gear me-2"></i>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php if (empty($rows)): ?>
          <tr><td colspan="6" class="text-center py-4 text-muted">
            <i class="bi bi-inbox display-4 d-block mb-2"></i>
            Belum ada data mahasiswa
          </td></tr>
        <?php else: ?>
          <?php foreach ($rows as $r): ?>
            <tr>
              <td><span class="badge bg-primary"><?=htmlspecialchars($r['nim'])?></span></td>
              <td class="fw-semibold"><?=htmlspecialchars($r['nama'])?></td>
              <td><?=htmlspecialchars($r['gender'])?></td>
              <td><?=htmlspecialchars($r['no_hp'])?></td>
              <td><?=htmlspecialchars($r['dosen_nama'] ?? '-')?></td>
              <td class="text-center">
                <a class="btn btn-sm btn-outline-primary" href="edit.php?nim=<?=urlencode($r['nim'])?>">
                  <i class="bi bi-pencil-square"></i> Edit
                </a>
                <a class="btn btn-sm btn-outline-danger" href="delete.php?nim=<?=urlencode($r['nim'])?>" onclick="return confirm('Hapus mahasiswa ini?')">
                  <i class="bi bi-trash"></i> Hapus
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/../footer.php'; ?>
