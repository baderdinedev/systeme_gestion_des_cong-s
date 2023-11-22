<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leave Management system</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form>
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
    <style>
    .form-container.sign-in img {
        width: 420px;
    height: 471px;
    margin-top: 20px;
    }
</style>
    <div class="form-container sign-in">
    <img src="https://kissflow.com/hs-fs/hubfs/leave-management-system.png?width=897&height=476&name=leave-management-system.png alt="Custom Image">
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Welcome to Leave Management System!</h1>
          <p>Apply for leave or view your leaves with ease. Manage your time off efficiently.</p>
          @if (Route::has('login'))
                @auth
                    <button class="hidden" id="dashboard" onclick="window.location.href='{{ url('/home') }}'">Dashboard</button>
                @else 
                    <button class="hidden" id="login" onclick="window.location.href='{{ url('/login') }}'">Login</button>
                    @if (Route::has('register'))
                        <button class="hidden"  onclick="window.location.href='{{ route('register') }}'">Sign Up</button>
                    @endif
                @endif
            @endif
        </div>
      </div>
    </div>
  </div>
</body>
<script src="{{asset('js/main.js')}}"></script>
</html>
