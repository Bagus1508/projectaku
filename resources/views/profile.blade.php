@extends('layouts.maindash')
@section('container')

<div class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mt-20 justify-center mb-96">
    <div class="flex flex-col items-center py-10">
        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://i.ibb.co/M84NN8d/Pngtree-profile-line-black-icon-4008155.png" alt="Profile Image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ auth()->user()->name }}</h5>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ auth()->user()->username }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ auth()->user()->prodi }}({{ auth()->user()->kelas }})</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <a href="password/change-password" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ganti Password</a>
        </div>
    </div>
</div>

@endsection