@extends('layouts.mainLogin')

@section('index')
<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="flex max-w-3xl p-5 shadow-lg bg-green rounded-2xl">
    <div class="w-1/2 mt-6">
      <img src="img/logo-tut.png" alt="Logo">
    </div>
    <div class="w-full px-16 md:w-1/2 md:px-8"> <h2 class="text-3xl font-bold text-center">Register</h2>
      <form action="register" class="flex flex-col gap-4" method="post">
        @csrf
        <label for="username" class="mt-8">Username</label>
        <input type="text" name="username" id="username" class="p-2 border rounded-xl" placeholder="Masukkan Username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="p-2 border rounded-xl" placeholder="Masukkan Password">

        <label for="password2">Ulang Password</label>
        <input type="password" name="password2" id="password2" class="p-2 border rounded-xl" placeholder="Masukkan Ulang Password">

        <button type="submit" class="py-2 text-black bg-yellow-400 hover:bg-yellow-500 rounded-xl">
          Register
        </button>
      </form>
      <div class="pt-12 pb-12 text-center">
        <p>Sudah punya Akun? <a href="login" class="font-semibold underline">Login here.</a></p>
      </div>
    </div>
  </div>
</section>

@endsection
