<!DOCTYPE html>
<html>

<head>
    <title>Animated login Form</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/student/css-login/sytyle.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('assets/student/js/data.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img class="wave" src="{{ asset('assets/student/img/wave.png') }}" />
    <div class="container">
        <div class="img">
            <img src="{{ asset('assets/student/img/bg.svg') }}" />
        </div>

        <div class="login-content password_macth email_exist signup_sucessed">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <img src="{{ asset('assets/student/img/avatar.svg') }}" />
                <h2 class="title">Welcome</h2>
                <div class="errors" style="margin-bottom: 10px">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Full Name</h5>
                        <input id="name" type="text" name="name"
                            class="input @error('name') is-invalid @enderror" value="{{ old('name') }}" required
                            autocomplete="name" required />
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" id="email"
                            class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                            autocomplete="email" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" id="password" name="password"
                            class="@error('password') is-invalid @enderror input" name="password" required
                            autocomplete="new-password" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confrim Password</h5>
                        <input id="password-confirm" type="password" name="password_confirmation" class="input"
                            required autocomplete="new-password" />
                    </div>
                </div>
                <a href="index.html">Login</a>
                <button type="submit" class="btn">SignUp</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/student/js-login/main.js') }}"></script>
</body>

</html>
