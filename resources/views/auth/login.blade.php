<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/main.css" />
    <link rel="stylesheet" href="./assets/signin.css" />
</head>

<body>
    <div class="container-fluid signup">
        <div class="row">
            <div class="col-md-7 pics">
                <div>
                    <img src="./assets/imgs/logo/suplogo.png" alt="" />
                    <h2>track jobs easy way!</h2>
                </div>
                <img src="./assets/imgs/signin.png" alt="" />
            </div>
            <div class="col-md-5 form">
                <img src="./assets/imgs/logo/mobilelogo.png" class="mobilelogo" alt="" />
                <div>
                    <h3>Sign in</h3>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                placeholder="input your email in here"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-2">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                placeholder="input your password in here"  name="password" required autocomplete="current-password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a id="forgotpsd" class="mb-4" href="{{ route('password.request') }}">forgot
                                    password?</a>
                            @endif
                        </div>
                        <div class="btns">
                            <button type="submit" class="btn col-12 btn-primary mb-2 mt-2">
                                Sign in
                            </button>
                            <span>or</span>
                            <button type="button" class="btn col-12 btn-primary mb-2 mt-2">
                                Sign in with google
                            </button>
                        </div>
                        <p class="mt-2">
                            Doesn't have an account? <a href="{{ route('register') }}">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/main.js"></script>
</body>

</html>
