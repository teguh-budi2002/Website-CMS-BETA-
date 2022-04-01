@extends('blog.index')
@section('container')
<section class="bg-gray-100">
    <div class="container shadow-2xl shadow-black mt-5 py-5 mb-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        {{-- <p class="text-2xl">Hello, Selamat Datang!</p> --}}
                                        <p class="text-2xl font-md">Silahkan Login!</p>
                                    </div>
                                    <form action="{{ url('/login/gae-post/process')}}">
                                        {{ @csrf_field() }} {{ method_field('POST') }}
                                        @include('sweetalert::alert')

                                        <label class="font-semibold font-serif text-lg text-gray-800"
                                            for="email">Email</label>
                                        @error('email')
                                        <div class="">
                                            <span class="text-danger" role="alert">{{ $message }}</span>
                                        </div>
                                        @enderror
                                        <div class="form-group rounded-md hover:shadow-lg">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror  placeholder:text-slate-400"
                                                id="exampleInputEmail" placeholder="Enter Email Address...">
                                        </div>

                                        @error('password')
                                        <div class="">
                                            <span class="text-danger" role="alert">{{ $message }}</span>
                                        </div>
                                        @enderror
                                        <label class="font-semibold font-serif text-lg text-gray-800"
                                            for="password">Password</label>
                                        <div class="form-group rounded-md hover:shadow-lg">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror placeholder:text-slate-400"
                                                id="exampleInputPassword" placeholder="Masukkan Password....">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <label for="customCheck">
                                                <input type="checkbox" name="remember"
                                                    id="customCheck" />
                                                    <span class="text-gray-800" >Remember
                                                        Me!</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4 mb-4">
                                            <button type="submit"
                                                class="mx-auto px-20 bg-inherit outline outline-offset-2 outline-blue-500 hover:bg-blue-500 rounded-lg transform transition hover:scale-110 duration-300 ease-in-out">Login</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small no-underline" href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection