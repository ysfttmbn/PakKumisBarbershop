@extends('theme.main')

@section('content')
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Registration Form</h3>
                        </div>
                        <form method="post" action="{{route('auth.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="name" placeholder="Name">
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login_footer form-group">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Register</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <div class="form-note text-center">Don't Have an Account? <a href="login.html">Sign up now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
