@extends('auth.layouts')

@section('content')

<div class="h-screen flex">
    <div class="flex w-1/2 bg-slate-50 justify-around items-center relative">
        
        <div class="absolute inset-0 bg-white opacity-30 z-0">
            <img src="https://i0.wp.com/lsptop.co.id/wp-content/uploads/2022/01/SMKN-4-TASIKMALAYA.jpg?fit=1920%2C1080" class="w-full h-full object-cover">
        </div>
        <div class="flex z-10 justify-center items-center">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="" class="w-20 mr-5 ">
            <h1 class="text-5xl font-bold text-blue-500 text-center justify-center z-20">E-POINT</h1>
        </div>
        
    </div>
    <div class="flex w-1/2 justify-center items-center bg-indigo-50">
      <form class="bg-indigo-50 mx-10" action="{{ route('store') }}" method="POST">
        @csrf
        <h1 class="text-blue-600 font-bold text-4xl mb-1">Selamat Datang Di Aplikasi E-Point</h1>
        <p class="text-md mt-2 font-normal text-gray-600 mb-7">Silahkan daftar untuk melanjutkan</p>
        <div class="flex items-center border-2 py-2 px-3 rounded-md border-slate-300 mb-4">
          <input class="pl-2 outline-none border-none bg-indigo-50" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required />
          @if ($errors->first('name'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('name')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-2 px-3 rounded-md mb-4">
          <input class="pl-2 outline-none border-none bg-indigo-50" type="email" name="email" id="email" placeholder="Email Address" />
          @if ($errors->first('email'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('email')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-2 px-3 rounded-md mb-4">
          <input class="pl-2 outline-none border-none bg-indigo-50" type="password" name="password" id="password" placeholder="Password" />
          @if ($errors->first('password'))
            <p class="text-sm text-red-600 mt-1">{{$errors->first('password')}}</p>
          @endif
        </div>
        <div class="flex items-center border-2 border-slate-300 py-2 px-3 rounded-md">
          <input class="pl-2 outline-none border-none bg-indigo-50" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
        </div>
        <input type="submit" value="Register" class="block w-full bg-indigo-600 mt-4 py-2 rounded-lg text-white font-semibold mb-2" required></input>
        <span class="text-sm ml-2 cursor-pointer">Sudah punya akun?  <a href="{{ route('login') }}" class="text-blue-600">Login disini</a></span>
      </form>
    </div>
</div>

@endsection
