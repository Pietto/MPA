<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/animations.css">
    <title>Train Shop - login</title>
</head>
<body>

    <div id='header_wrapper'>
        <div id='head_wrapper_left'>
            <a href='/jaar%202/Laravel/project_A/MPA/public/'>home</a>
            <a>about</a>
            <a href='{{Route("product.all")}}'>products</a>
            <a href='{{Route("category.all")}}'>categories</a>
        </div>
        <div id='head_wrapper_center'>
            <img id='header_logo' alt='company logo' src='../images/logo/logo_plain.png'/>
        </div>
        <div id='head_wrapper_right'>
            <a onclick='switchTheme()' class="btn2 btn-animation-four" id='themeSwitchButton' data-sm-link-text="Lightmode" target="_blank"><span>Mode</span></a>
            <a href='{{Route("product.shoppingCart")}}'>cart</a>
        </div>
    </div>    

    <div class='form_wrapper'>
        <form id='login_form' class='account_forms' method="POST" action="{{ route('login') }}">
            @csrf

            <img src='../images/testLogo.png' alt='logo'/>
            
            <div class="form_row">
                <i class="far fa-user"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder='emailadres'>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form_row">
                <i class="fas fa-fingerprint"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder='wachtwoord'>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form_row center no_border">
                <button id='submit_login_button' class='form_submit_buttons' type="submit">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                    </svg>
                    <span>{{ __('Login') }}</span>
                </button>
            </div>
            <div class="form_row no_border">

                @if (Route::has('password.request'))
                    <a class="btn btn-link" id='password_forgot_btn' href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <div class="form_row no_border">
                <p> nog geen account? <a href="{{ route('register') }}">registreren</a></p>
            </div>


            <!-- <i class="far fa-user"></i>
            <i class="fas fa-fingerprint"></i> -->






        </form>
    </div>
</body>
</html>