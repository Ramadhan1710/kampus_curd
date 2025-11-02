<?php
// Modern header with improved navigation
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #b5268dff 0%, #ede7f3ff 100%);
            --card-shadow: 0 4px 6px rgba(0,0,0,0.07);
            --hover-shadow: 0 8px 16px rgba(0,0,0,0.12);
        }
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: var(--primary-gradient) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            color: white !important;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .navbar-brand i {
            margin-right: 8px;
        }
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s;
            padding: 0.5rem 1rem !important;
            border-radius: 6px;
        }
        .nav-link:hover {
            color: white !important;
            background: rgba(255,255,255,0.15);
        }
        .container {
            max-width: 1200px;
            margin-top: 2rem;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s;
        }
        .card:hover {
            box-shadow: var(--hover-shadow);
        }
        .card-header {
            background: var(--primary-gradient);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            padding: 1.25rem;
            font-weight: 600;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
        }
        .table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        .table thead {
            background: #f8f9fa;
        }
        .table thead th {
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #495057;
            padding: 1rem;
        }
        .table tbody tr {
            transition: all 0.2s;
        }
        .table tbody tr:hover {
            background: #f8f9fa;
        }
        .table td {
            padding: 0.875rem 1rem;
            vertical-align: middle;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 0.625rem 0.875rem;
            transition: all 0.3s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }
        .badge {
            padding: 0.4rem 0.75rem;
            border-radius: 6px;
            font-weight: 500;
        }
        .page-title {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .page-title i {
            font-size: 2rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mb-4">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="/"><i class="bi bi-mortarboard-fill"></i>Sistem Informasi Kampus</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/dosen/index.php"><i class="bi bi-person-badge me-1"></i>Dosen</a></li>
        <li class="nav-item"><a class="nav-link" href="/mahasiswa/index.php"><i class="bi bi-people me-1"></i>Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link" href="/matkul/index.php"><i class="bi bi-book me-1"></i>Matkul</a></li>
        <li class="nav-item"><a class="nav-link" href="/krs/index.php"><i class="bi bi-card-list me-1"></i>KRS</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
