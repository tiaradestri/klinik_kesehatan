<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Klinik Kesehatan KDKMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        :root {
            --ungu-tua: #5b21b6;      /* Ungu gelap untuk navbar & teks utama */
            --ungu-terang: #7e22ce;   /* Ungu kontras untuk tombol & elemen aktif */
            --ungu-muda: #f3e8ff;     /* Latar belakang komponen yang soft */
            --putih-murni: #ffffff;
        }
        body {
            background-color: #faf5ff; /* Latar belakang web ungu sangat soft */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Style Navbar Custom */
        .navbar-ungu {
            background-color: var(--ungu-tua);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .navbar-ungu .navbar-brand, .navbar-ungu .nav-link {
            color: var(--putih-murni) !important;
            transition: all 0.3s;
        }
        .navbar-ungu .nav-link:hover {
            color: #e9d5ff !important;
        }
        .navbar-ungu .nav-link.aktif-menu {
            font-weight: bold;
            border-bottom: 3px solid #c084fc;
        }
        /* Button Custom */
        .btn-ungu-kontras {
            background-color: var(--ungu-terang);
            color: var(--putih-murni);
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-ungu-kontras:hover {
            background-color: #6b21a8;
            color: var(--putih-murni);
            transform: translateY(-2px);
        }
        /* Card Custom */
        .card-layanan {
            border: none;
            border-top: 5px solid var(--ungu-terang);
            border-radius: 10px;
            background: var(--putih-murni);
            transition: all 0.3s;
        }
        .card-layanan:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(126, 34, 206, 0.15);
        }
        .text-ungu-utama {
            color: var(--ungu-tua);
        }
        .bg-tabel-ungu {
            background-color: var(--ungu-tua) !important;
            color: var(--putih-murni) !important;
        }
        footer {
            background-color: #3b0764; /* Ultra deep purple */
        }
    </style>
</head>
<body x-data="{ menuAktif: 'beranda' }">

    <nav class="navbar navbar-expand-lg navbar-dark navbar-ungu sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" @click.prevent="menuAktif = 'beranda'">
                <i class="fa-solid fa-house-medical me-2"></i>Klinik KDKMP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" :class="menuAktif === 'beranda' ? 'aktif-menu' : ''" href="#" @click.prevent="menuAktif = 'beranda'">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="menuAktif === 'layanan' ? 'aktif-menu' : ''" href="#" @click.prevent="menuAktif = 'layanan'">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="menuAktif === 'jadwal' ? 'aktif-menu' : ''" href="#" @click.prevent="menuAktif = 'jadwal'">Jadwal Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="menuAktif === 'pendaftaran' ? 'aktif-menu' : ''" href="#" @click.prevent="menuAktif = 'pendaftaran'">Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div x-show="menuAktif === 'beranda'">
        <section class="py-5 bg-white shadow-sm mb-4">
            <div class="container">
                <div class="row align-items-center py-4">
                    <div class="col-md-6">
                        <span class="badge mb-3 px-3 py-2 rounded-pill style" style="background-color: var(--ungu-muda); color: var(--ungu-tua);">Pilihan Keluarga Baturaja</span>
                        <h1 class="display-5 fw-bold text-dark mb-3">Solusi Kesehatan Terpercaya di <span class="text-ungu-utama">Klinik KDKMP</span></h1>
                        <p class="lead text-muted mb-4">Kami siap memberikan pelayanan medis terbaik, cepat, ramah, dan profesional demi kenyamanan kesehatan Anda dan seluruh keluarga tercinta.</p>
                        <a href="#" @click.prevent="menuAktif = 'pendaftaran'" class="btn btn-ungu-kontras btn-lg px-4 py-2.5 shadow-sm">Daftar Online Sekarang <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="col-md-6 text-center mt-4 mt-md-0">
                        <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=600" alt="Klinik Kesehatan" class="img-fluid rounded-4 shadow-sm border border-3 border-light">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div x-show="menuAktif === 'layanan'" x-transition>
        <section class="container py-5">
            <h2 class="text-center fw-bold text-ungu-utama mb-2">Layanan Medis Unggulan</h2>
            <p class="text-center text-muted mb-5">Fasilitas kesehatan modern yang terintegrasi untuk melayani kebutuhan Anda.</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-layanan h-100 text-center shadow-sm p-4">
                        <div style="color: var(--ungu-terang);" class="mb-3"><i class="fa-solid fa-user-doctor fa-3x"></i></div>
                        <h5 class="fw-bold text-dark">Pemeriksaan Umum</h5>
                        <p class="text-muted mb-0">Konsultasi medis intensif dan penanganan keluhan harian bersama jajaran dokter umum terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-layanan h-100 text-center shadow-sm p-4">
                        <div style="color: var(--ungu-terang);" class="mb-3"><i class="fa-solid fa-briefcase-medical fa-3x"></i></div>
                        <h5 class="fw-bold text-dark">Apotek & Farmasi</h5>
                        <p class="text-muted mb-0">Penyediaan obat-obatan komprehensif, aman, berkualitas tinggi, serta bersertifikasi resmi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-layanan h-100 text-center shadow-sm p-4">
                        <div style="color: var(--ungu-terang);" class="mb-3"><i class="fa-solid fa-droplet fa-3x"></i></div>
                        <h5 class="fw-bold text-dark">Laboratorium Klinis</h5>
                        <p class="text-muted mb-0">Cek berkala untuk kadar gula darah, kolesterol, dan asam urat demi pencegahan dini penyakit.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div x-show="menuAktif === 'jadwal'" x-transition>
        <section class="container py-5">
            <h2 class="text-center fw-bold text-ungu-utama mb-4">Jadwal Praktik Dokter Utama</h2>
            <div class="table-responsive shadow rounded-3 bg-white">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="bg-tabel-ungu">
                        <tr>
                            <th class="py-3 px-4">Nama Lengkap Dokter</th>
                            <th class="py-3">Bidang Spesialisasi</th>
                            <th class="py-3">Hari Kerja</th>
                            <th class="py-3">Jam Operasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="px-4"><strong>dr. Andi Wijaya</strong></td><td>Dokter Umum Umum</td><td>Senin s/d Jumat</td><td>08:00 - 12:00 WIB</td></tr>
                        <tr><td class="px-4"><strong>dr. Sinta Permata, Sp.A</strong></td><td>Spesialis Anak</td><td>Senin, Rabu, Jumat</td><td>13:00 - 16:00 WIB</td></tr>
                        <tr><td class="px-4"><strong>dr. Budi Setiawan</strong></td><td>Spesialis Gigi & Mulut</td><td>Selasa & Kamis</td><td>09:00 - 14:00 WIB</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <div x-show="menuAktif === 'pendaftaran'" x-transition>
        <section class="container py-5" style="max-width: 650px;">
            <div class="card shadow-lg p-4 rounded-4 bg-white border-0" style="border-top: 6px solid var(--ungu-tua) !important;">
                <h3 class="text-center fw-bold text-ungu-utama mb-2">Form Perjanjian Pasien</h3>
                <p class="text-center text-muted small mb-4">Lengkapi formulir online berikut untuk mendapatkan nomor antrean klinik.</p>
                
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Sukses! Antrean Anda Berhasil Dijadwalkan.');">
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Nama Lengkap Pasien</label>
                        <input type="text" class="form-control py-2.5 border-secondary-subtle" placeholder="Ketik nama sesuai KTP" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Pilih Jenis Layanan Kunjungan</label>
                        <select class="form-select py-2.5 border-secondary-subtle" required>
                            <option value="">-- Silakan Pilih Layanan --</option>
                            <option>Pemeriksaan Umum Dokter</option>
                            <option>Konsultasi Spesialis Anak</option>
                            <option>Pemeriksaan Medis Gigi</option>
                            <option>Pemeriksaan Lab Klinis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Pilih Tanggal Kedatangan</label>
                        <input type="date" class="form-control py-2.5 border-secondary-subtle" required>
                    </div>
                    <button type="submit" class="btn btn-ungu-kontras w-100 py-2.5 mt-2 text-uppercase tracking-wide shadow-sm">Kirim & Ambil Nomor Antrean</button>
                </form>
            </div>
        </section>
    </div>

    <footer class="text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1 text-light">&copy; 2026 Kedai Klinik Kesehatan KDKMP. Universitas Baturaja.</p>
            <small style="color: #c084fc;">UAS Pemrograman Web Lanjut - Fakultas Teknik dan Komputer</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>