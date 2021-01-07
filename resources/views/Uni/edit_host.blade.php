@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/uws62020/cms/hosts/{{ $check->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Check</h1>
                    </div>

                    <div class="form-group row">
                        <label for="check-id">Check ID</label>
                        <input type="text" class="form-control" id="check-name" placeholder="1" name="check-id"
                            value="{{ $check->id }}" readonly>
                    </div>

                    <div class="form-group row">
                        <label for="check_name">Check Name</label>
                        <input type="text" class="form-control @error('check_name') is-invalid @enderror" id="check_name"
                            placeholder="e.g: MSSQL Database" name="check_name"
                            value="{{ old('check_name') ?? $check->check_name }}" autocomplete="check_name" autofocus>

                        @error('check_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="address">Host / Website</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            placeholder="e.g: www.google.com or google.com" name="address"
                            value="{{ old('address') ?? $check->address }}" autocomplete="url" autofocus>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="port">Port</label>
                        <input type="text" class="form-control @error('port') is-invalid @enderror" id="port"
                            placeholder="e.g: 80 or 443" name="port" value="{{ old('port') ?? $check->port }}"
                            autocomplete="port" autofocus>

                        @error('port')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="check-id">User</label>
                        <input type="text" class="form-control" id="check-name" placeholder="1" name="check-id"
                            value="{{ $check->user->username }}" readonly>
                    </div>

                    <div class="form-group row">
                        <label for="check-visibility">Visibility</label>
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
