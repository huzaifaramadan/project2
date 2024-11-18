<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-indigo-50 h-screen">
    <div class="navbar bg-indigo-50 shadow-md p-3 px-5">
        <div class="flex-1">
            <div class="flex justify-center items-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="" class="w-10 mr-2 ">
                <h1 class="text-xl font-bold text-blue-500 text-center justify-center z-20">E-POINT</h1>
            </div>
        </div>
        <div class="flex-none gap-2 mr-5">
            <a class="font-sans font-semibold text-blue-600 " href="{{route('siswa.index')}}">Data Siswa</a>
             <button class="btn bg-red-500 text-slate-50 font-sans hover:text-slate-950 px-5 py-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</button>
        </div>
      </div>
    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
        @csrf
    </form>
    <h1 class="ml-[100px] text-3xl font-sans font-bold mt-[30px] mb-[50px] text-blue-600">DASHBOARD</h1>
    <div class="flex justify-center rounded-s-md">
        <div class="card bg-white w-1/2  shadow-xl">
            <div class="card-body">
                <div class="card-title ">
                    <div class="flex justify-center items-center mt-5">
                        <img src="https://img.icons8.com/?size=100&id=20749&format=png&color=000000" class="w-30 mr-4">
                        <h2 class="text-3xl text-blue-600 font-sans font-bold">SELAMAT DATANG , ADMIN</h2>
                    </div>
                    </div>
                </div>
          </div>   
    </div>
    <div class="w-full mt-20 flex justify-center">
             <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
              <h2 class="card-title">Card title!</h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
            </div>
          </div>
          <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
              <h2 class="card-title">Card title!</h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
            </div>
          </div>
          <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
              <h2 class="card-title">Card title!</h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
          </div>
        </div>
      </div>
</body>
</html>