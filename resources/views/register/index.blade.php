@extends('layouts.mainLogin')

@section('index')
<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="flex max-w-3xl p-5 shadow-lg rounded-2xl">
    <div class="w-1/2 mt-6">
      <img src="img/logo-tut.png" alt="Logo">
    </div>
    <div class="w-full px-16 md:w-1/2 md:px-8"> <h2 class="text-3xl font-bold text-center">Register</h2>
      <form action="/register" method="POST" class="flex flex-col gap-4">
        @csrf
        <label for="username" class="mt-8">Username</label>
        <input type="text" name="username" id="username" class="p-2 border rounded-xl @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="Masukkan Username" autofocus required>
        @error('username')
        <div class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="p-2 border rounded-xl @error('password') is-invalid @enderror" value="{{old('username')}}" placeholder="Masukkan Password" required>
        @error('password')
        <div class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror

        <label for="password_confirmation">Ulang Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 border rounded-xl @error('password') is-invalid @enderror" value="{{old('username')}}" placeholder="Masukkan Ulang Password" required>
        @error('password')
        <div class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror

        <button type="submit" class="py-2 text-black bg-yellow-400 hover:bg-yellow-500 rounded-xl">
          Register
        </button>
      </form>
      {{-- <div class="pt-12 pb-12 text-center">
        <p>Sudah punya Akun? <a href="login" class="font-semibold underline">Login here.</a></p>
      </div> --}}
    </div>
  </div>
</section>

@endsection
