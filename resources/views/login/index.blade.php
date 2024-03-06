@extends('layouts.mainLogin')

@section('index')

    {{-- <div class="w-full md:w-1/2 flex flex-col">
      <div class="w-1/2 hidden md:block bg-[#006633] d-flex justify-center items-center">
            <img src="img/1.jpg" alt="Logo">
      </div>
      <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <p class="text-center text-3xl">Join Us.</p>
        <form class="flex flex-col pt-3 md:pt-8">
          <div class="flex flex-col pt-4">
            <label for="name" class="text-lg">Name</label>
            <input type="text" id="name" placeholder="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
          </div>

          <div class="flex flex-col pt-4">
            <label for="password" class="text-lg">Password</label>
            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
          </div>

          <input type="submit" value="Register" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
        </form>
        <div class="text-center pt-12 pb-12">
          <p>Belum punya Akun? <a href="register" class="underline font-semibold">Register here.</a></p>
        </div>
      </div>

    </div> --}}

    <section class="bg-gray-100 min-h-screen flex items-center justify-center">

      <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
        <div class="w-1/2 ">
            <img src="img/1.jpg" alt="logo">
        </div>

        <div class="w-1/2 px-16">
            <h2 class="text-2xl font-bold">Login</h2>

            <form action="" class="flex flex-col gap-4">
              <label for="">Username</label>
              <input class="p-2 mt-8 rounded-xl border" type="text" name="username" id="" placeholder="Maukkan Username">

              <label for="">Passowrd</label>
              <input class="p-2 rounded-xl border"  type="password" name="password" id="" placeholder="Masukkan Password">
              <button class="leading-[20px] font-bold hover:text-white text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] gap-[10px] pt-[10px] pr-[24px] pb-[10px] pl-[24px] hover:b">
                  Login
              </button>x
            </form>
        </div>
      </div>
    </section>

@endsection
