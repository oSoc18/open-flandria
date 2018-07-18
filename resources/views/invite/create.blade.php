@extends('layouts.app')

@section('content')
<div class="card">
    <form action="{{ route('invite') }}" method="POST">
        @csrf

        <div class="form-group">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label for="name">Name: </label>
            <input class="form-control" id="name" type="text" name="name">
        </div>

        <div class="form-group">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label for="email">E-mail: </label>
            <input class="form-control" id="email" type="email" name="email">
        </div>

        <div class="form-group">
            @if ($errors->has('role'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label for="role">Role: </label>
            <select class="form-control" id="role" name="role">
                <option value="user">User</option>
                <option value="contributor">Contributor</option>
                <option value="reviewer">Reviewer</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <input type="submit" value="Send invite" class="btn btn-primary">
    </form>
</div>
@endsection
