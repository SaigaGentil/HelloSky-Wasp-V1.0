@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/uws62020/cms/hosts">Hosts Check</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Login History</a>
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
                        <th scope="col">Date</th>
                        <th scope="col">Username</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Login Type</th>
                        <th scope="col">IP Address</th>
                        <th scope="col">Location</th>
                        <th scope="col">Browser</th>
                        <th scope="col">Screen Size</th>
                        <th scope="col">Browser Size</th>
                        <th scope="col">Language</th>
                        <th scope="col">Session</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a role="button" class="btn btn-danger" href="#">Log out</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a role="button" class="btn btn-primary" href="#">Export Table</a>
    </div>
@endsection
