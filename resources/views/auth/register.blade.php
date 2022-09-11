<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/main.css" />
    <link rel="stylesheet" href="./assets/signup.css" />
  </head>
  <body>
    <div class="container-fluid signup">
      <div class="row">
        <div class="col-md-6 pics">
          <div>
            <img src="./assets/imgs/logo/suplogo.png" alt="" />
            <h2>track jobs easy way!</h2>
          </div>
          <img src="./assets/imgs/signup.png" alt="" />
        </div>
        <div class="col-md-6 form">
          <img
            src="./assets/imgs/logo/mobilelogo.png"
            class="mobilelogo"
            alt=""
          />
          <div>
            <h3 class="mb-4">Sign up</h3>
            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                @csrf
              <div class="mb-1">
                <label for="inputEmail" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  id="inputEmail"
                  placeholder="input your name in here"
                  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                />
                
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
              </div>
              <div class="mb-1">
                <label for="inputEmail" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  id="inputEmail"
                  placeholder="input your email in here"
                  name="email" value="{{ old('email') }}" required autocomplete="email"
                />
                
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                                @enderror
              </div>
              <div class="mb-1">
                <label for="inputEmail" class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control @error('password') is-invalid @enderror"
                  id="inputEmail"
                  placeholder="input your email in here"
                name="password" required autocomplete="new-password"
                />
                
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                
            @enderror
              </div>
              <div class="mb-2">
                <label for="inputPassword" class="form-label"
                  >Confirm password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="inputPassword"
                  placeholder="input your password in here"
                  name="password_confirmation" required autocomplete="new-password"
                />
                <div class="invalid-feedback">Password do not match</div>
              </div>
              <div class="mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    I have read and agree to the
                    <a href="#">Terms of Service</a>
                  </label>
                </div>
              </div>
              <div class="btns">
                <button type="submit" class="btn col-12 btn-primary mb-2 mt-2">
                  Sign up
                </button>
                <span>or</span>
                <button type="button" class="btn col-12 btn-primary mb-2 mt-2">
                  Sign in with google
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/main.js"></script>
  </body>
</html>
