<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= BASEURL;  ?>/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <!-- Mobile section -->
    <div class="M_Top_Nav Hide_In_Tablet Hide_In_Desktop">
      <div class="M_Top_wrapper" onclick="w3_open()">
        <img class="M_Top_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
      </div>
      <div class="M_Top_Title">
        Mobile Home
      </div>
    </div>

    <div class="M_Side_Nav Hide_In_Tablet Hide_In_Desktop" id="M_Side_Nav">
      <div class="M_Side_Top_wrapper" onclick="w3_close()">
        <i class="M_Side_Top_Close fa fa-times-circle"></i>
      </div>
      <div class="M_Side_wrapper">
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-users fa-fw"></i>
          <span class="">
            Home
          </span>
        </a>
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-bookmark fa-fw"></i>
          <span class="">
            Bookmark
          </span>
        </a>
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-fire fa-fw"></i>
          <span class="">
            Trending
          </span>
        </a>
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-money fa-fw"></i>
          <span class="">
            Payment
          </span>
        </a>
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-user fa-fw"></i>
          <span class="">
            Profile
          </span>
        </a>
      </div>
    </div>
    <!-- Mobile section -->

    <!-- Tablet section -->
    <div class="T_Top_Nav Hide_In_Mobile Hide_In_Desktop">
      <div class="T_Top_wrapper">
        <img class="T_Top_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
      </div>
      <div class="T_Top_Title">
        Tablet Home
      </div>
    </div>

    <div class="T_Side_Nav Hide_In_Mobile Hide_In_Desktop">
      <a class="T_Side_Anchor Basic_Anchor" href="#">
        <i class="fa fa-users fa-fw"></i>
      </a>
      <a class="T_Side_Anchor Basic_Anchor" href="#">
        <i class="fa fa-bookmark fa-fw"></i>
      </a>
      <a class="T_Side_Anchor Basic_Anchor" href="#">
        <i class="fa fa-fire fa-fw"></i>
      </a>
      <a class="T_Side_Anchor Basic_Anchor" href="#">
        <i class="fa fa-money fa-fw"></i>
      </a>
      <a class="T_Side_Anchor Basic_Anchor" href="#">
        <i class="fa fa-user fa-fw"></i>
      </a>
    </div>
    <!-- Tablet section -->

    <!-- Desktop section -->
    <div class="D_Top_Nav Hide_In_Mobile Hide_In_Tablet">
      <div class="D_Top_wrapper" onclick="w3_open()">
        <img class="D_Top_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
      </div>
      <div class="D_Top_Title">
        Desktop Home
      </div>
    </div>

    <div class="D_Side_Nav Hide_In_Mobile Hide_In_Tablet">
        <a class="D_S_W_A" href="#">
          <i class="D_S_W_A_I fa fa-users fa-fw"></i>
          <span class="D_S_W_T">
            Home
          </span>
        </a>
        <a class="D_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-bookmark fa-fw"></i>
          <span class="D_S_W_T">
            Bookmark
          </span>
        </a>
        <a class="D_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-fire fa-fw"></i>
          <span class="D_S_W_T">
            Trending
          </span>
        </a>
        <a class="D_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-money fa-fw"></i>
          <span class="D_S_W_T">
            Payment
          </span>
        </a>
        <a class="D_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-user fa-fw"></i>
          <span class="D_S_W_T">
            Profile
          </span>
        </a>
    </div>
    <!-- Desktop section -->



</html>

<script>
function w3_open() {
  document.getElementById("M_Side_Nav").style.width = "375px";
}

function w3_close() {
  document.getElementById("M_Side_Nav").style.width = "0";
  document.body.style.backgroundColor = "rgba(255,255,255,1)";
}
</script>
