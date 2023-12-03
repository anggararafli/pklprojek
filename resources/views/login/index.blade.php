@extends('layout.masuk')

@section('content')
<div class="row">
        <div class="text-primary p-4">
            <h5 class="text-primary">Welcome Back !</h5>
            <p>Sign in to continue to Skote.</p>
        </div>
</div>
<div class="card-body pt-0"> 
<div class="auth-logo">
    <a href="index.html" class="auth-logo-light">
        <div class="avatar-md profile-user-wid mb-4">
            <span class="avatar-title rounded-circle bg-light">
                <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
            </span>
        </div>
    </a>

    <a href="index.html" class="auth-logo-dark">
        <div class="avatar-md profile-user-wid mb-4">
            <span class="avatar-title rounded-circle bg-light">
                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
            </span>
        </div>
    </a>
</div>
<div class="p-2">
    <form class="form-horizontal" action="{{ route('postlogin') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>
        
        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>
</div>

</div>
</div>
<div class="mt-5 text-center">

<div>
<p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
</div>
</div>
@endsection
