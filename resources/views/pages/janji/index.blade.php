@extends('theme.main')

@section('content')
<div class="main_content">
    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Janji Temu</h3>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="number" name="no_hp" placeholder="No Telepon">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="datetime-local" name="tanggal">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" required name="no_hp" placeholder="Deskripsi"></textarea>
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
    <!-- END LOGIN SECTION -->
</div>
@endsection