<div class="container">
    <!-- Card Summary -->
    <div class="row mb-4">
       
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Pendaftar</h5>
                    <p class="card-text fs-3"><i class="bi bi-people-fill me-2"></i><?php echo e($totalPendaftar); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar Bulan Ini</h5>
                    <p class="card-text fs-3"><i class="bi bi-calendar-event me-2"></i><?php echo e($pendaftarBulanIni); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar Hari Ini</h5>
                    <p class="card-text fs-3"><i class="bi bi-calendar-date me-2"></i><?php echo e($pendaftarHariIni); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="row">
        <!-- Line Chart: Pendaftar per Bulan -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar per Bulan (Setahun Terakhir)</h5>
                    <canvas id="pendaftarPerBulanChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <!-- Pie Chart: Distribusi Status -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Distribusi Status Pendaftar</h5>
                    <canvas id="statusPendaftarChart" height="100"></canvas>
                </div>
            </div>
        </div>

        <!-- Bar Chart: Pendaftar per Hari -->
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar per Hari (Mei 2025)</h5>
                    <canvas id="pendaftarPerHariChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Line Chart: Pendaftar per Bulan
    const pendaftarPerBulanCtx = document.getElementById('pendaftarPerBulanChart').getContext('2d');
    new Chart(pendaftarPerBulanCtx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode(array_keys($pendaftarPerBulan->toArray()), 15, 512) ?>,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: <?php echo json_encode(array_values($pendaftarPerBulan->toArray()), 15, 512) ?>,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart: Distribusi Status
    const statusPendaftarCtx = document.getElementById('statusPendaftarChart').getContext('2d');
    new Chart(statusPendaftarCtx, {
        type: 'pie',
        data: {
            labels: ['Aktif', 'Tidak Aktif'],
            datasets: [{
                label: 'Status Pendaftar',
                data: <?php echo json_encode(array_values($statusPendaftar), 15, 512) ?>,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 99, 132, 0.7)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Bar Chart: Pendaftar per Hari
    const pendaftarPerHariCtx = document.getElementById('pendaftarPerHariChart').getContext('2d');
    const daysInMonth = Array.from({ length: <?php echo e(Carbon\Carbon::now()->daysInMonth); ?> }, (_, i) => i + 1); // 1 sampai 31
    new Chart(pendaftarPerHariCtx, {
        type: 'bar',
        data: {
            labels: daysInMonth,
            datasets: [{
                label: 'Jumlah Pendaftar per Hari',
                data: <?php echo json_encode(array_values($pendaftarPerHari->toArray()), 15, 512) ?>,
                backgroundColor: 'rgba(153, 102, 255, 0.7)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<style>
    .card {
        border-radius: 10px;
    }
    .card-title {
        font-size: 1.2rem;
        font-weight: 500;
    }
    #statusPendaftarChart {
        max-width: 278px;
        margin: 0 auto;
    }
    
</style>
</div>

<!-- Chart.js -->
<?php /**PATH C:\laragon\www\form-rosa\resources\views/livewire/dashboard.blade.php ENDPATH**/ ?>