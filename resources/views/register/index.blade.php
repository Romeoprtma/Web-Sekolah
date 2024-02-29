@extends('layouts.mainLogin')

@section('index')
  <div class="w-full flex flex-wrap mt-[95px]">

   <div class="w-1/2 hidden md:block bg-[#006633] d-flex justify-center items-center">
      <img src="" alt="Logo">
    </div>

    <div class="w-full md:w-1/2 flex flex-col">

      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <p class="text-center text-3xl">Join Us.</p>

        <form action="/register" method="POST" class="flex flex-col pt-3 md:pt-8">
          @csrf
          <div class="flex flex-col pt-4">
            <label for="name" class="text-lg">Username</label>
            <input type="text" id="username" placeholder="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
          </div>

          <div class="flex flex-col pt-4">
            <label for="password" class="text-lg">Password</label>
            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
          </div>

          <div class="flex flex-col pt-4">
            <label for="confirm-password" class="text-lg">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
          </div>

          <input type="submit" value="Register" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
        </form>
        <div class="text-center pt-12 pb-12">
          <p>Sudah Punya Akun? <a href="login" class="underline font-semibold">Log in Disini</a></p>
        </div>
      </div>

    </div>

  </div>

@endsection
