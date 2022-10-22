@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-700 w-full h-full">
    <div class="wrapper">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-white/100 shadow-md">
                    <label class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                        Login
                    </label>
                    <form method="post" action="{{ url('/login/gae-post/process')}}" class="mt-10">
                        @csrf
                        <div>
                            <input type="text" name="username" placeholder="Username...."
                                class="mt-1 p-2 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7">
                            <input type="password" name="password" placeholder="Password...."
                                class="mt-1 p-2 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                        </div>

                        <div class="mt-7">
                            <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                                <input id="remember_me" name="remember" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">
                                    Ingat saya?
                                </span>
                            </label>
                        </div>

                        <div class="mt-7">
                            <button type="submit"
                                class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @if ($mess = Session::get('notAdmin'))
            <div class="w-3/4 mt-8 bg-red-300 p-2 text-red-600 rounded-md text-center">
                <p>{{ $mess }}</p>
            </div>
            @elseif ($mess = Session::get('error'))
            <div class="w-3/4 mt-8 bg-red-300 p-2 text-red-600 rounded-md text-center">
                <p>{{ $mess }}</p>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
