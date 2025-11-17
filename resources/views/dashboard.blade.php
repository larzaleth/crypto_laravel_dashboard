@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0">
        <div class="header-bar">
            <div>
                <h1 class="welcome-text">Welcome, {{ $user_name ?? 'User' }}</h1>
                <p class="text-secondary">How are you today....</p>
            </div>
            <div class="filter-group d-flex align-items-center">
                <label for="filter-month" class="form-label mb-0">Filter By:</label>
                <select id="filter-month" class="form-select-dark me-2">
                    <option selected>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                </select>
                <select id="filter-year" class="form-select-dark">
                    <option>2024</option>
                    <option selected>2023</option>
                    <option>2022</option>
                </select>
            </div>
        </div>
        <!-- /Header Bar -->

        <div class="row">

            <!-- Chart -->
            <div class="col-lg-7 mb-4">
                <div class="chart-card h-100">
                    <h5 class="text-light mb-4">Bar Chart</h5>
                    <div style="height: 262px;">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Cards -->
            <div class="col-lg-5">
                <div class="row g-4">
                    
                    <!-- Total Deposit -->
                    <div class="col-md-6">
                        <div class="stats-card">
                            <h5 class="card-title mb-1"><i class="fa-solid fa-microchip"></i> Total Deposit</h5>
                            <h3>{{ $total_deposit ?? 'IDR 0' }}</h3>
                            <p class="text-secondary mb-0">{{ $deposit_count ?? 0 }} Deposit(s)</p>
                        </div>
                    </div>

                    <!-- Total Withdraw -->
                    <div class="col-md-6">
                        <div class="stats-card">
                            <h5 class="card-title mb-1"><i class="fa-solid fa-microchip"></i> Total Withdraw</h5>
                            <h3>IDR 0</h3>
                            <p class="text-secondary mb-0">0 Withdraw(s)</p>
                        </div>
                    </div>

                    <!-- Total Verified KYC -->
                    <div class="col-md-6">
                        <div class="stats-card">
                            <h5 class="card-title mb-1"><i class="fa-solid fa-microchip"></i> Total Verified KYC</h5>
                            <h3>0</h3>
                            <p class="text-secondary mb-0">0 Verified</p>
                        </div>
                    </div>

                    <!-- Total Registration -->
                    <div class="col-md-6">
                        <div class="stats-card">
                            <h5 class="card-title mb-1"><i class="fa-solid fa-microchip"></i> Total Registration</h5>
                            <h3>0</h3>
                            <p class="text-secondary mb-0">0 Registered</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
<script>
    window.onload = function() {
        const ctx = document.getElementById('myBarChart').getContext('2d');
        const myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['10', '20', '30', '40', '50', '60', '70', '80', '90', '100', '110', '120'],
                datasets: [{
                    label: 'Aktivitas',
                    data: [70, 0, 75, 25, 45, 80, 50, 40, 10, 30, 15, 20],
                    backgroundColor: '#00cc66',
                    borderColor: '#00cc66',
                    borderWidth: 1,
                    borderRadius: 4,
                    barPercentage: 0.7,
                    categoryPercentage: 0.8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                            color: '#2c2c2c'
                        },
                        ticks: {
                            color: '#999'
                        },
                        border: {
                            color: '#444'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        max: 100,
                        grid: {
                            color: '#2c2c2c'
                        },
                        ticks: {
                            color: '#999'
                        },
                        border: {
                            color: '#444'
                        }
                    }
                }
            }
        });
    };
</script>
@endpush