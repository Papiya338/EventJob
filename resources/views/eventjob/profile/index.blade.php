@extends('layouts.backend.app')
@section('content')
    <div class="content-body">
        <div class="content-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Information
                                Update your account's profile information and email address.</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{ route('profile.update') }}">
                                    @csrf
                                    @method('patch')

                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control input-default"name="name" :value="old('name', $user->name)" required autofocus autocomplete="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control input-rounded" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username">
                                    </div>
                             {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !              $user->hasVerifiedEmail())
                                    <div>
                                    <p class="text-sm mt-2 text-gray-800">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif --}}
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </form>
                            </div>
                           </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Password
                            Ensure your account is using a long, random password to stay secure.</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="text" class="form-control input-default" name="current_password" type="password" autocomplete="current-password" />
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="text" class="form-control input-rounded" name="password" type="password" autocomplete="new-password" />
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="text" class="form-control input-rounded" name="password_confirmation" type="password" autocomplete="new-password" />
                                </div>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </form>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
@endsection
