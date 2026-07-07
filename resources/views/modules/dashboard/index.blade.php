@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-summary">
        <div class="dashboard-card">
            <span class="dashboard-card-label">Total User</span>
            <span class="dashboard-card-value">{{ $summary['total_users'] }}</span>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-label">Total Team</span>
            <span class="dashboard-card-value">{{ $summary['total_teams'] }}</span>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-label">Total Account</span>
            <span class="dashboard-card-value">{{ $summary['total_accounts'] }}</span>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-label">Total Transaksi</span>
            <span class="dashboard-card-value">{{ $summary['total_transactions'] }}</span>
        </div>
    </div>

    <div class="dashboard-section">
        <h2 class="dashboard-section-title">Team Terbaru</h2>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Nama Team</th>
                    <th>Jumlah Anggota</th>
                    <th>Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($summary['latest_teams'] as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->members_count }}</td>
                        <td>{{ $team->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Belum ada data team.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="dashboard-section">
        <h2 class="dashboard-section-title">User Terbaru</h2>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Terdaftar</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($summary['latest_users'] as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Belum ada data user.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection