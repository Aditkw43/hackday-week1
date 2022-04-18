<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GOOGLE API -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="assets/js/google-api.js"></script>

    <!-- FB API -->
    <!-- <script src="assets/js/facebook-api.js"></script> -->

    <!-- MY CSS -->
    <link rel="stylesheet" href="assets/css/login-style.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/57f711f365.js" crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body>
    <div class="card flex-center">
        <div id="content" class="flex-center">
            <h2 id="title-login">Email Services</h2>
            <p style="font-size: 15px;">Which one do you want to login?</p>
            <div class="social-icons">
                <button class="social-icon" id="google"><span class="fa fa-google"></span></button>
                <!-- <button class="social-icon" id="facebook" onclick="fb_login()"><span class="fa fa-facebook"></span></button> -->
                <button class="social-icon" id="github" onclick="github_login()"><span class="fa fa-github"></span></button>
            </div>
        </div>
    </div>

    <!-- <script>
        startApp();
    </script> -->

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Load the JS SDK asynchronously FB -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

    <!-- GITHUB JS -->
    <script>
        function github_login() {
            let nama = "Aditya";
            let email = "aditkw43@gmail.com";
            let img = "assets/img/contoh.png";
            let logout = "github_logout()";
            $.ajax({
                url: "homepage.php",
                type: "POST",
                data: {
                    nama: nama,
                    email: email,
                    img: img,
                    logout: logout,
                },
                success: function(data) {
                    $("#content").html(data);
                }
            })
        };

        function github_logout() {
            window.location.href = "https://hackday.adit.id/";
        }
    </script>

    <script async defer src="https://apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad()" onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
</body>

</html>