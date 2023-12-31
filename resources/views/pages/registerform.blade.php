@extends('layouts.main_form')

@section('container')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                             <img src="{{  asset('images/logo/WALHI.png')}}" alt="">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
                            <form class="user" action="{{ route('register') }}" method="post">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name"
                                        required value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                         </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" 
                                        placeholder="Email Address" required value="{{ old('email') }}">
                                          @error('email')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" 
                                        placeholder="Password" required> 
                                          @error('password')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" 
                                        placeholder="Password_confirmation" required> 
                                          @error('password_confirmation')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                                <hr>
                                <a href="{{ url('auth/redirect') }}" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
