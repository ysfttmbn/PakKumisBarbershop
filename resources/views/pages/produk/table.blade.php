@extends('theme.main')

@section('content')
<!-- START MAIN CONTENT -->
<div class="main_content">

    <div style="margin: 50px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-md-10">
                    <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <div class="row justify-content-center">
                                    <a class="btn btn-outline-danger mx-1" href="#">Edit</a>
                                    <a class="btn btn-outline-danger mx-1" href="#">Hapus</a>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END MAIN SECTION -->
@endsection