   window.fbAsyncInit = function () {
       FB.init({
           appId: '568762511041595',
           cookie: true,
           xfbml: true,
           version: 'v13.0'
       });

       FB.getLoginStatus(function (response) {
           statusChangeCallback(response);
       });
   };

   function fb_login() {
       FB.login(function (response) {
           FB.getLoginStatus(function (response) {
               statusChangeCallback(response);
           });
       });
   }

   function fb_logout() {
       FB.logout(function (response) {
           window.location.href = "https://hackday.adit.id/";
       });
   }

   function statusChangeCallback(response) {
       if (response.status === "connected") {
           console.log("logged in and authenthicated");
           testAPI();
       } else {
           console.log("Not authenthicated");
       }
   }

   function testAPI() {
       FB.api('/me?fields=name,email,picture{url}', function (response) {
           if (response && !response.error) {
               buildProfile(response);
           }
       })
   }

   function checkLoginState() {
       FB.getLoginStatus(function (response) {
           statusChangeCallback(response);
       });
   }

   function buildProfile(profile) {
       let nama = profile.name;
       let email = profile.email;
       let img = profile.picture.data.url;
       let logout = "fb_logout()";
       console.log("nama: " + nama);
       console.log("email: " + email);
       console.log("img: " + img);

       $.ajax({
           url: "homepage.php",
           type: "post",
           data: {
               nama: nama,
               email: email,
               img: img,
               logout: logout,
           },
           success: function (data) {
               $("#content").html(data);
           }
       })
   }