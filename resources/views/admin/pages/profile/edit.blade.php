@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>
                    <div class="card-body">
                            <div class="lg-8">
                            <input type="hidden" name='id' value="{{  auth()->user()->id }}">
                                 <form action="/admin/profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
                                 @method('put')
                                 @csrf
                                    <div class="form-group">
                                         <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus value="{{ old('name', auth()->user()->name) }}">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="email">Email </label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus value="{{ old('email', auth()->user()->email) }}">
                                        <div class="invalid-feedback">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>     
                                     <input type="hidden" name='password' value="{{  auth()->user()->password }}">
                                                  <button type="submit" class="btn btn-primary">Edit Profile</button>
                                                  <a href="/admin/profile" class="btn btn-success">Back</a>
                                            </form>
                            </div>
                        </div>
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>  Copyright &copy; 2023 Pantau Lingkungan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>

@endsection