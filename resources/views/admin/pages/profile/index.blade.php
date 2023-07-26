@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
                      @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                                        <div class="card mb-3" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/undraw_profile.svg') }}" alt="Profile">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name :  {{ auth()->user()->name }}</h5>
        <p class="card-text">Email :  {{ auth()->user()->email }}</p>
        <p class="card-text"><small class="text-muted"><a href="/admin/profile/{{ auth()->user()->id }}/edit">Edit Profile</a></small></p>
      </div>
    </div>
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