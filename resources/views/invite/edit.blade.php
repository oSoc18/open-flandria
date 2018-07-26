@extends('layouts.app')

@section('content')
<div class="card">
    <form action="{{ route('invite.update') }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="user_token" value="{{ $user->invite }}">

        <div class="form-group">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label for="password">Password: </label>
            <input id="password" class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password confirmation: </label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation">
        </div>

        <input type="submit" value="Update password">
    </form>
</div>
@endsection
