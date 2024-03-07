@extends('layouts.mainLogin')

@section('index')
<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="flex max-w-3xl p-5 shadow-lg bg-green rounded-2xl">
    <div class="w-1/2 mt-6">
      <img src="img/logo-tut.png" alt="Logo">
    </div>
    <div class="w-full px-16 md:w-1/2 md:px-8"> <h2 class="text-3xl font-bold text-center">Login</h2>
      <form action="" class="flex flex-col gap-4">
        <label for="username" class="mt-5">Username</label>
        <input type="text" name="username" id="username" class="p-2 border rounded-xl" placeholder="Masukkan Username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="p-2 border rounded-xl" placeholder="Masukkan Password">
        <button type="submit" class="py-2 text-black bg-yellow-400 hover:bg-yellow-500 rounded-xl">
          Login
        </button>
      </form>
      <div class="pt-12 pb-12 text-center">
        <p>Belum punya Akun? <a href="register" class="font-semibold underline">Register here.</a></p>
      </div>
    </div>
  </div>
</section>

@endsection
