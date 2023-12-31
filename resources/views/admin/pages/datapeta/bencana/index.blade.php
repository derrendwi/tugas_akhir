@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Bencana</h1>
                          @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                    <a href="/admin/datapeta/bencana/create" class="btn btn-primary">Tambah Data Bencana </a>
                             <div class="card-body">
                            <div class="table-responsive col-8">
                                <table class="table table-bordered"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Wilayah</th>
                                            <th>Bencana</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ( $bencana as $b )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $b->wilayah }}</td>
                                            <td>{{  $b->bencana }}</td>
                                            <td>
                                           <a href="/admin/datapeta/bencana/{{ $b->id }}/edit" class="btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="/admin/datapeta/bencana/{{ $b->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin ? ')" ><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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

