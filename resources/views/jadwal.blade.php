<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Dokter - Klinik KDKMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><i class="fa-solid fa-house-medical me-2"></i>Klinik KDKMP</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="/">Beranda</a>
                <a class="nav-link text-white active fw-bold" href="/jadwal">Jadwal Dokter</a>
                <a class="nav-link text-white" href="/pendaftaran">Pendaftaran</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">Jadwal Praktik Dokter Utama</h2>
        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover table-striped align-middle mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th class="py-3">Nama Dokter</th>
                        <th class="py-3">Spesialisasi</th>
                        <th class="py-3">Hari Praktik</th>
                        <th class="py-3">Jam Kerja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><strong>dr. Andi Wijaya</strong></td><td>Dokter Umum</td><td>Senin - Jumat</td><td>08:00 - 12:00 WIB</td></tr>
                    <tr><td><strong>dr. Sinta Permata, Sp.A</strong></td><td>Spesialis Anak</td><td>Senin, Rabu, Jumat</td><td>13:00 - 16:00 WIB</td></tr>
                    <tr><td><strong>dr. Budi Setiawan</strong></td><td>Gigi & Mulut</td><td>Selasa & Kamis</td><td>09:00 - 14:00 WIB</td></tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="/" class="btn btn-outline-primary"><i class="fa-solid fa-arrow-left me-2"></i>Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>