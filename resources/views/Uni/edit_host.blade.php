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
                        <input type="text" class="form-control" id="check-name" placeholder="1" name="check-id"
                            value="{{ $check->id }}" readonly>
                    </div>

                    <div class="form-group row">
                        <label>Check Name</label>
                        <input type="text" class="form-control" id="check-name" placeholder="e.g: MSSQL Database"
                            name="check-name" value="{{ old('check-name') ?? $check->check_name }}">
                    </div>

                    <div class="form-group row">
                        <label>Host / Website</label>
                        <input type="text" class="form-control" id="check-address"
                            placeholder="e.g: www.google.com or google.com" name="check-address"
                            value="{{ old('check-address') ?? $check->address }}">
                    </div>

                    <div class=" form-group row">
                        <label>Port</label>
                        <input type="text" class="form-control" id="check-port" placeholder="e.g: 80 or 443"
                            name="check-port" value="{{ old('check-address') ?? $check->port }}">
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
