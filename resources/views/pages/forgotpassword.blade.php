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
                                <h1 class="h4 text-gray-900 mb-4">Forgot Password</h1>
                                 @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ $message }} 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                                @if($message = Session::get('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                            </div>
                            <form class="user" action="/forgotpasswordlink" method="post">
                            @csrf
                              
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" 
                                        placeholder="Email" required value="{{ old('email') }}">
                                          @error('email')
                                        <div class="invalid-feedback">
                                         {{ $message }}
                                         </div>
                                        @enderror
                                </div>
                            
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">BacK To login</a>
                            </div>                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection