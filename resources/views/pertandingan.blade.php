<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pertandingan Sepak Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-red: #8E1616;
            --secondary-red: #D84040;
            --dark-bg: #1D1616;
            --light-gray: #EEEEEE;
            --text-dark: #1D1616;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--secondary-red) 100%);
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
        }
        .card {
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .card-header {
            background: var(--primary-red) !important;
            border-radius: 15px 15px 0 0 !important;
        }
        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .stat-card {
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        .btn-primary {
            background: var(--primary-red);
            border-color: var(--primary-red);
        }
        .btn-primary:hover {
            background: var(--secondary-red);
            border-color: var(--secondary-red);
        }
        .table-dark {
            background-color: var(--dark-bg) !important;
        }
        .badge.bg-secondary {
            background-color: var(--dark-bg) !important;
        }
        .badge.bg-success {
            background-color: var(--primary-red) !important;
        }
        .text-primary {
            color: var(--primary-red) !important;
        }
        .border-primary {
            border-color: var(--primary-red) !important;
        }
        .border-success {
            border-color: var(--secondary-red) !important;
        }
        .border-warning {
            border-color: #d4af37 !important;
        }
        .border-info {
            border-color: #004494 !important;
        }
        .text-success {
            color: var(--secondary-red) !important;
        }
        .alert-warning {
            background-color: rgba(212, 175, 55, 0.1);
            border-color: #d4af37;
            color: var(--dark-bg);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <!-- Header -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold text-white mb-3">
                <i class="fas fa-futbol me-3"></i>
                Jadwal Pertandingan Sepak Bola
            </h1>
        </div>
    </div>

    <!-- SOAL 3 & 5: Filter dan Pencarian -->
    <div class="card mb-4">
        <div class="card-header text-white">
            <h5 class="mb-0"><i class="fas fa-filter me-2"></i>Filter & Pencarian</h5>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('pertandingan.index') }}" class="row g-3">
                
                <!-- SOAL 3: Filter Liga (disesuaikan dari "Penulis" ke "Liga") -->
                <div class="col-md-4">
                    <label for="liga" class="form-label fw-semibold">
                        <i class="fas fa-trophy me-1" style="color: #d4af37;"></i>
                        Filter Liga
                    </label>
                    <select name="liga" id="liga" class="form-select">
                        <option value="all" {{ $selectedLiga === 'all' ? 'selected' : '' }}>
                            Semua Liga
                        </option>
                        @foreach($daftarLiga as $l)
                            <option value="{{ $l }}" {{ $selectedLiga === $l ? 'selected' : '' }}>
                                {{ $l }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- SOAL 5: Pencarian Tim/Kode (disesuaikan dari "Judul Buku" ke "Tim/Kode") -->
                <div class="col-md-6">
                    <label for="q" class="form-label fw-semibold">
                        <i class="fas fa-search me-1" style="color: #004494;"></i>
                        Cari Tim / Kode Pertandingan
                    </label>
                    <div class="input-group">
                        <input type="text" name="q" id="q" class="form-control"
                               placeholder="Masukkan nama tim atau kode pertandingan..." 
                               value="{{ $q }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search me-1"></i>Cari
                        </button>
                    </div>
                    @if(!empty($q))
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Hasil pencarian untuk: "<strong>{{ $q }}</strong>"
                        </small>
                    @endif
                </div>

                <div class="col-md-2">
                    <label class="form-label">&nbsp;</label>
                    <div>
                        <a href="{{ route('pertandingan.index') }}" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-refresh me-1"></i>Reset
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- SOAL 5: Pesan jika tidak ditemukan -->
    @if($data->isEmpty())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Data tidak ditemukan!</strong> 
            Tidak ada pertandingan yang sesuai dengan kriteria pencarian Anda.
            @if(!empty($q))
                Coba kata kunci lain atau 
            @endif
            @if($selectedLiga !== 'all')
                pilih liga yang berbeda.
            @else
                ubah filter pencarian.
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Tabel Pertandingan -->
    @if(!$data->isEmpty())
    <div class="table-container mb-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 60px" class="text-center">#</th>
                        <th>Kode</th>
                        <th>Tanggal & Waktu</th>
                        <th>Pertandingan</th>
                        <th>Stadion</th>
                        <th>Liga</th>
                        <th>Musim</th>
                        <th class="text-end">Harga Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $m)
                        <tr>
                            <td class="text-center fw-bold text-primary">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <span class="badge bg-secondary fs-6">
                                    {{ $m->kode_pertandingan }}
                                </span>
                            </td>
                            <td>
                                <div>
                                    <i class="fas fa-calendar text-primary me-1"></i>
                                    <strong>{{ \Carbon\Carbon::parse($m->tanggal)->format('d/m/Y') }}</strong>
                                </div>
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>
                                    {{ \Carbon\Carbon::parse($m->tanggal)->format('H:i') }} WIB
                                </small>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fw-bold" style="color: var(--primary-red);">{{ $m->home_team }}</span>
                                    <span class="mx-2 text-muted fw-bold">VS</span>
                                    <span class="fw-bold" style="color: var(--secondary-red);">{{ $m->away_team }}</span>
                                </div>
                            </td>
                            <td>
                                <i class="fas fa-map-marker-alt me-1" style="color: var(--secondary-red);"></i>
                                {{ $m->stadion }}
                            </td>
                            <td>
                                <span class="badge bg-success fs-6">{{ $m->liga }}</span>
                            </td>
                            <td class="text-muted">{{ $m->musim }}</td>
                            <td class="text-end">
                                <span class="fw-bold fs-6" style="color: var(--secondary-red);">
                                    Rp {{ number_format($m->harga_tiket, 0, ',', '.') }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    <!-- SOAL 4: Statistik Pertandingan (disesuaikan dari "Buku" ke "Pertandingan") -->
    <div class="row g-4">
        <div class="col-12">
            <h3 class="text-white mb-3">
                <i class="fas fa-chart-bar me-2"></i>
                Statistik Pertandingan
            </h3>
        </div>
        
        <!-- Total Pertandingan -->
        <div class="col-lg-3 col-md-6">
            <div class="card stat-card border-primary">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-futbol fa-3x" style="color: var(--primary-red);"></i>
                    </div>
                    <h2 class="fw-bold mb-1" style="color: var(--primary-red);">{{ $totalPertandingan }}</h2>
                    <p class="text-muted mb-0">Total Pertandingan</p>
                </div>
            </div>
        </div>

        <!-- Total Harga Semua Tiket -->
        <div class="col-lg-3 col-md-6">
            <div class="card stat-card border-success">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-money-bill-wave fa-3x" style="color: var(--secondary-red);"></i>
                    </div>
                    <h6 class="fw-bold mb-1" style="color: var(--secondary-red);">
                        Rp {{ number_format($totalHargaSemua, 0, ',', '.') }}
                    </h6>
                    <p class="text-muted mb-0">Total Harga Semua Tiket</p>
                </div>
            </div>
        </div>

        <!-- Harga Tertinggi -->
        <div class="col-lg-3 col-md-6">
            <div class="card stat-card border-warning">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-arrow-up fa-3x" style="color: #d4af37;"></i>
                    </div>
                    <h6 class="fw-bold mb-1" style="color: #d4af37;">
                        Rp {{ number_format($hargaTertinggi ?? 0, 0, ',', '.') }}
                    </h6>
                    <p class="text-muted mb-0">Harga Tertinggi</p>
                </div>
            </div>
        </div>

        <!-- Harga Terendah -->
        <div class="col-lg-3 col-md-6">
            <div class="card stat-card border-info">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-arrow-down fa-3x" style="color: #004494;"></i>
                    </div>
                    <h6 class="fw-bold mb-1" style="color: #004494;">
                        Rp {{ number_format($hargaTerendah ?? 0, 0, ',', '.') }}
                    </h6>
                    <p class="text-muted mb-0">Harga Terendah</p>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
