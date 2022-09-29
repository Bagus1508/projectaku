@extends('layouts.main')
@section('container')
<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="px-8 py-6 text-left bg-white shadow-lg">
        <div class="flex justify-center">
            <img src="https://i.postimg.cc/QM3SxMKd/logo.png" class="w-48 mb-4">
        </div>
        <div class="">
            <h3 class="text-2xl font-bold text-center text-blue-600 mb-2">Ganti Password</h3>
            <div class="card">
                @if(session()->has('error'))
                    <span class="alert alert-danger">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @if(session()->has('success'))
                    <span class="alert alert-success">
                        <strong>{{ session()->get('success') }}</strong>
                    </span>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="">Password Sebelumnya</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password">
                                @error('current_password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="password" class="">Password Baru</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 @error('password') is-invalid @enderror" name="password" autocomplete="password">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="password" class="">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation">
                                @error('password_confirmation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                            <div class="flex items-baseline justify-end">
                                <button type="submit" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">
                                    Ganti Password
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
