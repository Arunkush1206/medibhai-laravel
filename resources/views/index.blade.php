@extends('layouts/custom-front')

@section('page')
    <!-- main-signin-wrapper -->
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="{{asset('assets/img/brand/logo-white.png')}}" class=" m-0 mb-4" alt="logo">
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="index.html" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="sign-up-body wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Welcome back!</h2>
                        <h4>Please sign in to continue</h4>
                        <form action="{{route('login.custom')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email</label><input name="email" class="form-control" required placeholder="Enter your email" type="text">
                                @error('email')
                                     <span class="text-danger">{{ $errors->first('email') }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label> <input name="password" id="password" class="form-control" required placeholder="Enter your password" type="password">
                                @error('password')
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @enderror
                            </div>
                            <button type="submit" onclick="return encrypt()" class="btn btn-primary btn-block">Sign In</button>
                        </form>
                    </div>
                    @if ($errors->has('message'))
                        <div class="main-signin-footer mt-3 mg-t-5">
                        <p><b class="text-danger">{{ $errors->first('message') }}</b></p>
                        </div>
                    @endif
                    <div class="main-signin-footer mt-3 mg-t-5">
                        <p><a href="#">Forgot password?</a></p>
{{--                        <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
    <script>
        function encrypt()
        {
            var pass=document.getElementById('password').value;
            var hide=document.getElementById('hide').value;
            if(pass=="")
            {
                document.getElementById('err').innerHTML='Error:Password is missing';
                return false;
            }
            else
            {
                document.getElementById("hide").value = document.getElementById("password").value;
                var hash = CryptoJS.MD5(pass);
                document.getElementById('password').value=hash;
                return true;
            }
        }
    </script>
@endsection
