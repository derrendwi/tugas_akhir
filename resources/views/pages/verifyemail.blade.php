@extends('layouts.main_form')
@section('container')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                       
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">  
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ $message }} 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif     
                                        <p> You Must Verify Your Email</p>   
                                        <a href="/email/verify/send" class="btn btn-primary btn-user btn-block">
                                            Verify Your Email
                                        </a>

                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection