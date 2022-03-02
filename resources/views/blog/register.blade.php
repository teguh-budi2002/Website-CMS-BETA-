
<section class="bg-gray-100">
    @include('layouts.nav')
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
                            <form action="{{ url('/register/process') }}" method="POST">
                                {{ @csrf_field() }} {{ method_field('POST') }}
                                @include('sweetalert::alert')

                                @error('username')
                                <div class="">
                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                </div>
                                @enderror
                                <div class="row">
                                    <div class="input-field col s6">
                                      <i class="material-icons prefix">account_circle</i>
                                      <input id="icon_prefix" name="username" type="text" class="validate @error('username') is-invalid @enderror ">
                                      <label for="icon_prefix">Username:</label>
                                    </div>
                            </div>

                                @error('email')
                                <div class="">
                                    <span class="text-danger" role="alert">{{ $message }}</span>
                                </div>
                                @enderror
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email_prefix" name="email" type="email" class="validate @error('email') is-invalid @enderror " name="email">
                                        <label for="email_prefix">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="bi bi-key-fill prefix"></i>
                                        <input id="pass_prefix" name='password' type="email" class="validate @error('email') is-invalid @enderror " name="email">
                                        <label for="pass_prefix">Password</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    {!! NoCaptcha::display() !!}
                                    {!! NoCaptcha::renderJs() !!}
                                    @error('g-recaptcha-response')
                                    <span class="text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                    @enderror
                                </div>
                                <div class="text-center mb-4">
                                    <button type="submit"
                                        class="mx-auto px-20 bg-inherit outline outline-offset-2 outline-blue-500 hover:bg-blue-500 rounded-lg transform transition hover:scale-110 duration-300 ease-in-out">Register</button>
                                </div>
                            </form>
                            <hr class="">
                            <div class="text-center">
                                <small>Already have an account?<a class="font-semibold no-underline" href="{{ url('/login') }}">Login!</a></small>
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
