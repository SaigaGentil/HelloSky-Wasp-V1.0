@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Hosts Check</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/iot/index">Home IoT Devices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/login-history">Login History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/users">Users</a>
            </li>
        </ul>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Check Time</th>
                        <th scope="col">Check Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Port</th>
                        <th scope="col">Status</th>
                        <th scope="col">Last Uptime</th>
                        <th scope="col">Total Downtime</th>
                        <th scope="col">User</th>
                        <th scope="col">Total Checks</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $attempts = 0;
                    @endphp
                    @foreach ($hosts as $host)
                        @php
                        $hostPing = @fsockopen($host->address, $host->port, $errno, $errstr, 30);
                        if ($hostPing) {
                        $status = "UP";
                        }
                        else{
                        $status = "DOWN";
                        }

                        @endphp
                        <tr>
                            <th scope="row">{{ $host->id }}</th>
                            <td>{{ $host['updated_at'] }}</td>
                            <td>{{ $host['check_name'] }}</td>
                            <td>{{ $host['address'] }}</td>
                            <td>{{ $host['port'] }}</td>
                            <td>{{ $status }}</td>
                            <td>Not Set</td>
                            <td>{{ $host['total_downtime'] }}</td>
                            <td>{{ $host->user->name }}</td>
                            <td>{{ $host['total_checks'] }}</td>
                            <td><a role="button" class="btn btn-primary" href="hosts/{{ $host->id }}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a role="button" class="btn btn-primary" href="hosts/{{ Auth::user()->id }}/add">Add Check</a>
        <button type="button" class="btn btn-primary">Export Table</button>
        {{-- @if (session('status'))
            {{ session('status') }}
        @endif --}}
    </div>
@endsection
