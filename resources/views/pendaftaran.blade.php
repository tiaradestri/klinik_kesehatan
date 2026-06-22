<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien - Klinik KDKMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-house-medical me-2"></i>Klinik KDKMP</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="/">Beranda</a>
                <a class="nav-link text-white" href="/jadwal">Jadwal Dokter</a>
                <a class="nav-link text-white active fw-bold" href="/pendaftaran">Pendaftaran</a>
            </div>
        </div>
    </nav>

    <div class="container py-5" style="max-width: 600px;">
        <div class="card border-0 shadow-lg p-4 rounded-3">
            <h3 class="text-center fw-bold mb-2 text-primary">Form Perjanjian Pasien</h3>
            <p class="text-center text-muted small mb-4">Silakan isi data diri untuk menjadwalkan kunjungan.</p>
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi Pendaftaran Berhasil!');">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap Pasien</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama sesuai KTP" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Pilih Layanan Medis</label>
                    <select class="form-select" required>
                        <option value="">-- Pilih Layanan --</option>
                        <option>Pemeriksaan Umum</option>
                        <option>Konsultasi Spesialis Anak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Tanggal Rencana Kunjungan</label>
                    <input type="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold text-uppercase shadow-sm">Kirim Pendaftaran</button>
            </form>
        </div>
    </div>
</body>
</html>