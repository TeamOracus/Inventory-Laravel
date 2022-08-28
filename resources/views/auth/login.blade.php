<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/main.css" />
    <link rel="stylesheet" href="./assets/signup.css" />
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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail"
                                placeholder="input your email in here" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="inputPassword" class="form-label">Email</label>
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="input your password in here" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
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
                            Doesn't have an account? <a href="#">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
</body>

</html>
