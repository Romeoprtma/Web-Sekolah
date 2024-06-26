@extends('layouts.mainLogin')

@section('index')
<section class="flex items-center justify-center bg-gray-100 min-h-screen">
  @if(session()->has('success'))
  <div class="alert bg-green-500 border border-green-400 text-black px-4 py-3 rounded-md cursor-pointer hover:bg-green-700 transition duration-300 fade show w-full max-w-lg" role="alert">
    {{ session('success') }}
    <button type="button" class="ml-4 text-white focus:outline-none hover:bg-yellow-700" data-dismiss="alert" aria-label="Close">
      <svg aria-hidden="true" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 111.414 1.414L11.414 10l4.293 4.293a1 1 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert mt-4 bg-red-500 border border-red-400 text-black px-4 py-3 rounded-md cursor-pointer hover:bg-red-700 transition duration-300 fade show w-full max-w-lg" role="alert">
    {{ session('loginError') }}
    <button type="button" class="ml-[80%] mt-1 text-white focus:outline-none hover:bg-yellow-700" data-dismiss="alert" aria-label="Close">
      <svg aria-hidden="true" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 111.414 1.414L11.414 10l4.293 4.293a1 1 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
  @endif
</section>

<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="flex flex-col md:flex-row max-w-3xl p-5 shadow-lg bg-white rounded-2xl w-full md:w-auto">
    <div class="flex w-full md:w-1/2 justify-center md:justify-start mb-4 md:mb-0">
      <img src="{{ asset('img/logo-tut.png') }}" alt="Logo" class="w-1/2 md:w-auto">
    </div>
    <div class="w-full px-4 md:px-16 md:w-1/2">
      <h2 class="text-3xl font-bold text-center">Login</h2>
      <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4 mt-4">
        @csrf
        <label for="username" class="mt-2">Username</label>
        <input type="text" name="username" id="username" class="p-2 border rounded-xl @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Masukkan Username" autofocus required>
        @error('username')
        <div class="text-red-500 text-sm mt-1">
            {{ $message }}
        </div>
        @enderror

        <label for="password" class="mt-2">Password</label>
        <input type="password" name="password" id="password" class="p-2 border rounded-xl @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
        @error('password')
        <div class="text-red-500 text-sm mt-1">
            {{ $message }}
        </div>
        @enderror

        <button type="submit" class="py-2 text-black bg-yellow-400 hover:bg-yellow-500 rounded-xl mt-4">
          Login
        </button>
      </form>
    </div>
  </div>
</section>
@endsection
