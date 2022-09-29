@extends('layouts.main')
@section('container')
<main class="form-registration">
<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="px-8 py-6 text-left bg-white shadow-lg">
        <div class="flex justify-center">
            <img src="https://i.postimg.cc/QM3SxMKd/logo.png" class="w-48 mb-4">
        </div>
        <h3 class="text-2xl font-bold text-center text-blue-600">Registrasi Peserta</h3>
        <form action="/register" method="POST">
            @csrf
            <div class="mt-4">
                <div class="mb-4">
                    <label class="block" for="name">Nama<label>
                            <input type="text" placeholder="Nama" name="name" id="name"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 @error('name')invalid:border-red-500 @enderror" required>
                </div>
                <div class="mb-4">
                    <label class="block" for="username">Username<label>
                            <input type="text" placeholder="Username" name="username" id="username"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="mb-4">
                    <label class="block" for="prodi">Program Studi<label>
                            <input type="text" placeholder="Program Studi" name="prodi" id="prodi"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div>
                    <label class="block" for="kelas">Kelas<label>
                            <input type="text" placeholder="Kelas" name="kelas" id="kelas"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password" id="password"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="flex items-baseline justify-between">
                    <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit">Daftar</button>
                </div>
        </form>
    </div>
</div>
</main>

@endsection