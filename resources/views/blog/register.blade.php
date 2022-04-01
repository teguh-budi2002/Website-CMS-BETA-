@extends('blog.index')
@section('container')

<section class="bg-gray-100">
    <div class="container rounded-md shadow-2xl shadow-black mt-5 py-5 mb-5 blue lighten-2">
        <div class="card o-hidden border-rounded rounded-lg shadow-lg  col-lg-7 mx-auto ">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-state-900 font-bold font-sans mb-4">Silahkan buat akun!</h1>
                            </div>
                            <form action="{{ url('/register/gae-post/process') }}" method="post">
                                {{ @csrf_field() }} {{ method_field('POST') }}
                                @include('sweetalert::alert')

                                @error('username')
                                <div class="">
                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                </div>
                                @enderror
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username_id"> Username
                                                <input name="username" id="username_id" type="text"
                                                    class="validate form-control @error('username') is-invalid @enderror">
                                            </label>
                                        </div>


                                        @error('email')
                                        <div class="">
                                            <span class="text-danger" role="alert">{{ $message }}</span>
                                        </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="email_id"> Email
                                                <input name="email" id="email_id" type="email"
                                                    class="validate form-control @error('email') is-invalid @enderror ">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_id"> Password
                                                <input name='password' type="password" id="password_id"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mb-4 mt-4">
                                    <button type="submit"
                                        class="mx-auto px-20 bg-inherit outline outline-offset-2 outline-blue-500 hover:bg-blue-500 rounded-lg transform transition hover:scale-110 duration-300 ease-in-out">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="form-group row mb-5">
                <div class="col-md-4"></div>
                {!! NoCaptcha::display() !!}
                {!! NoCaptcha::renderJs() !!}
                @error('g-recaptcha-response')
                <span class="text-danger" role="alert">
                    <h6>{{ $message }}</h6>
                </span>
                @enderror
            </div> --}}
            <hr class="">
            <div class="text-center">
                <small>Already have an account?<a class="font-semibold no-underline"
                        href="{{ url('/login') }}">Login!</a></small>
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