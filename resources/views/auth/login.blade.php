<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
<--  ================================================== -->
    <meta charset="utf-8">
    <title>HiVet! | Expediting Healthy Care for Your Pets</title>

    <!-- Mobile Specific Metas
<--  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

    <section class="user-login section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block">
                        <!-- Image -->
                        <div class="image align-self-center"><img class="img-fluid"
                                src="images/Login/front-desk-sign-in.jpg" alt="desk-image"></div>
                        <!-- Content -->
                        <div class="content text-center">
                            <div class="title-text">
                                <h3>Sign In To Your Account</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Username -->
                                <input class="form-control main" name="email" type="email" placeholder="Email" required
                                    autofocus value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!-- Password -->
                                <input class="form-control main" type="password" name="password" placeholder="Password"
                                    required autocomplete="current-password">
                                <!-- Submit Button -->
                                <button class="btn btn-main-sm">sign in</button>
                            </form>
                            <div class="new-acount">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forget your password?</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
</body>

</html>