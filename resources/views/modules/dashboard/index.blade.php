@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-summary">
        <div class="dashboard-card">
            <span class="dashboard-card-icon dashboard-card-icon--blue">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.106A9.375 9.375 0 0 1 21 12M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a9.375 9.375 0 0 1 8.626-9.375M15 19.128a9.38 9.38 0 0 1-6.375 1.872M15 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm6 3a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </span>
            <div class="dashboard-card-body">
                <span class="dashboard-card-label">Total User</span>
                <span class="dashboard-card-value">{{ $summary['total_users'] }}</span>
            </div>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-icon dashboard-card-icon--purple">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m-6-13.5h1.5m-1.5 3h1.5m-1.5 3h1.5m6-6h1.5m-1.5 3h1.5m-1.5 3h1.5M6 21V6.75A2.25 2.25 0 0 1 8.25 4.5h7.5A2.25 2.25 0 0 1 18 6.75V21" />
                </svg>
            </span>
            <div class="dashboard-card-body">
                <span class="dashboard-card-label">Total Team</span>
                <span class="dashboard-card-value">{{ $summary['total_teams'] }}</span>
            </div>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-icon dashboard-card-icon--green">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </span>
            <div class="dashboard-card-body">
                <span class="dashboard-card-label">Total Account</span>
                <span class="dashboard-card-value">{{ $summary['total_accounts'] }}</span>
            </div>
        </div>

        <div class="dashboard-card">
            <span class="dashboard-card-icon dashboard-card-icon--amber">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3M3.75 19.5h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Z" />
                </svg>
            </span>
            <div class="dashboard-card-body">
                <span class="dashboard-card-label">Total Transaksi</span>
                <span class="dashboard-card-value">{{ $summary['total_transactions'] }}</span>
            </div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-section">
            <h2 class="dashboard-section-title">Team Terbaru</h2>
            <div class="dashboard-table-wrap">
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
                                <td colspan="3" class="dashboard-table-empty">Belum ada data team.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dashboard-section">
            <h2 class="dashboard-section-title">User Terbaru</h2>
            <div class="dashboard-table-wrap">
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
                                <td colspan="3" class="dashboard-table-empty">Belum ada data user.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection