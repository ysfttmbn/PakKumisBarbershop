@extends('theme.main')

@section('content')
<!-- START LOGIN SECTION -->
<div style="margin: 50px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Tambah Produk</h3>
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="nama_produk" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <input type="number" required="" class="form-control" name="jumlah_produk" placeholder="Jumlah Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="number" name="harga" placeholder="Harga Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="kategori_produk" placeholder="Kategori Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="berat_produk" placeholder="Berat Produk">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="warna_produk" placeholder="Warna Produk">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" required="" name="deskripsi" placeholder="Deskripsi"></textarea>
                            </div>

                            <div class="form-group">
                                <input class="form-control" required type="file" name="warna_produk" placeholder="Warna Produk">
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
<br>
<br>
<br>
<!-- END LOGIN SECTION -->
@endsection