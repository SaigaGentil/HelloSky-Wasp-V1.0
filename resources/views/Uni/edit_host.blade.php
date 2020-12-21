@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Check</h1>
                    </div>

                    <div class="form-group row">
                        <label>Check ID</label>
                        <input type="text" class="form-control" id="check-name" placeholder="1" readonly>
                    </div>

                    <div class="form-group row">
                        <label>Check Name</label>
                        <input type="text" class="form-control" id="check-name" placeholder="e.g: MSSQL Database">
                    </div>

                    <div class="form-group row">
                        <label>Host / Website</label>
                        <input type="text" class="form-control" id="check-address"
                            placeholder="e.g: www.google.com or google.com">
                    </div>

                    <div class="form-group row">
                        <label>Port</label>
                        <input type="text" class="form-control" id="check-port" placeholder="e.g: 80 or 443">
                    </div>

                    <div class="form-group row">
                        <label>Visibility</label>
                        <select class="custom-select">
                            <option value="global" selected>Everyone</option>
                            <option value="own">Only me</option>
                        </select>
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Configuration</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
