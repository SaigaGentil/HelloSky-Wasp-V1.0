@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/uws62020/cms/hosts">Hosts Check</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Home IoT Devices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/login-history">Login History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/users">Users</a>
            </li>
        </ul>
        <div class="form-group px-3 pt-3 row">
            <select class="custom-select">
                <option value="global" selected>Lower Living Room</option>
                <option value="own">Upper Living Room</option>
                <option value="own">Master Bedroom</option>
                <option value="own">Axel's Room</option>
                <option value="own">Arlette's Room</option>
            </select>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Temperature Sensor</a>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Sensor Type</th>
                        <th scope="col">Sensor</th>
                        <th scope="col">Microcontroller IP</th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Humidity</th>
                        <th scope="col">Sensor Status</th>
                        <th scope="col">A/C</th>
                        <th scope="col">Heater</th>
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
                        <td>
                            <a role="button" class="btn btn-success" data-toggle="tooltip" title="Turn off" href="#">ON</a>
                        </td>
                        <td>
                            <a role="button" class="btn btn-danger" data-toggle="tooltip" title="Turn on" href="#">OFF</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Lights</a>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Light Type</th>
                        <th scope="col">Light</th>
                        <th scope="col">Microcontroller IP</th>
                        <th scope="col">Light Intensity</th>
                        <th scope="col">Light Status</th>
                        <th scope="col">Turn Light ON/OFF</th>
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
                        <td>
                            <a role="button" class="btn btn-success" data-toggle="tooltip" title="Turn off" href="#">ON</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Sockets</a>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Socket Type</th>
                        <th scope="col">Socket</th>
                        <th scope="col">Microcontroller IP</th>
                        <th scope="col">Socket Power Usage</th>
                        <th scope="col">Socket Status</th>
                        <th scope="col">Turn Socket ON/OFF</th>
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
                        <td>
                            <a role="button" class="btn btn-success" data-toggle="tooltip" title="Turn off" href="#">ON</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Motion Sensor</a>
        </nav>
    </div>
@endsection
