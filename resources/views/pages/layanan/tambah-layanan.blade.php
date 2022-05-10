@extends('theme.main')

@section('content')
<!-- START Form SECTION -->
<div style="margin: 50px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Tambah Layanan</h3>
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="nama_produk" placeholder="Nama Layanan">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="file" name="gambar_layanan" placeholder="Gambar Layanan">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required="" name="deskripsi" placeholder="Deskripsi Layanan"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <a href="index.html" class="btn btn-fill-out btn-block" name="login">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END form SECTION -->
@endsection