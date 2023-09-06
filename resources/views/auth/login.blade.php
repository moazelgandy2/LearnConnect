<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/student/css-login/sytyle.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img class="wave" src="{{ asset('assets/student/img/wave.png') }}" />
    <div class="container">
        <div class="img">
            <img src="{{ asset('assets/student/img/bg.svg') }}" />
        </div>
        <div class="login-content email-error-alert password_wrong">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ 'assets/student/img/avatar.svg' }}" />
                <h2 class="title">Welcome</h2>
                @error('email')
                    <div
                        style="padding:1px; color: #721c24; background-color:#f8d7da; border-color:#f5c6cb; border-radius:.25rem;">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
                @error('password')
                    <div
                        style="padding:1px; color: #721c24; background-color:#f8d7da; border-color:#f5c6cb; border-radius:.25rem;">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">
                    </div>
                </div>
                <a href="register">SignUp</a>
                <button type="submit" class="btn ">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/student/js-login/main.js') }}"></script>
</body>

</html>
