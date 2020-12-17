@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Hosts Check</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Users</a>
                </li>
            </ul>
            <table class="table table-bordered table-responsive">
                <thead>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $user->hosts->id }}</th>
                        <td>{{ $user->hosts->updated_at }}</td>
                        <td>{{ $user->hosts->check_name }}</td>
                        <td>{{ $user->hosts->address }}</td>
                        <td>{{ $user->hosts->port }}</td>
                        <td>{{ $user->hosts->check_status }}</td>
                        <td>Not Set</td>
                        <td>{{ $user->hosts->total_downtime }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->hosts->total_checks }}</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary">Add Check</button>
            <button type="button" class="btn btn-primary">Edit Check</button>
        </div>
    </div>
@endsection
