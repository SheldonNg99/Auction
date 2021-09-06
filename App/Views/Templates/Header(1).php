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

    <div class="M_Top_Nav Hide_In_Tablet Hide_In_Desktop">
      <div class="M_Top_wrapper" onclick="w3_open()">
        <img class="M_Top_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
      </div>
      <div class="M_Top_Title">
        Home
      </div>
    </div>

    <div class="T_Top_Nav Hide_In_Mobile Hide_In_Desktop">
      <div class="T_Top_Title">
        Home / Tablet
      </div>
    </div>

    <div class="T_Left_Side_Nav Hide_In_Mobile Hide_In_Desktop">
      <div class="T_Left_Top_wrapper">
        <img class="T_Left_Top_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
      </div>
      <div class="T_Left_wrapper">
        <a href="#">
          <i class="fa fa-users fa-fw"></i>
        </a>
        <a href="#">
          <i class="fa fa fa-bookmark fa-fw"></i>
        </a>
        <a href="#">
          <i class="fa fa fa-fire fa-fw"></i>
        </a>
        <a href="#">
          <i class="fa fa fa-money fa-fw"></i>
        </a>
        <a href="#">
          <i class="fa fa fa-user fa-fw"></i>
        </a>
      </div>
    </div>

    <div class="T_Right_Side_Nav Hide_In_Mobile Hide_In_Desktop">

    </div>

    <div class="M_Side_Nav Hide_In_Tablet Hide_In_Desktop" id="M_Side_Nav">
      <div class="M_Side_Top_wrapper" onclick="w3_close()">
        <i class="M_Side_Top_Close fa fa-times-circle"></i>
      </div>
      <div class="M_Side_Profile">
        <div class="M_Side_Profile_Wrapper">
          <img class="M_Side_Profile_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
        </div>
        <div class="M_Side_Follower_Following_Wrapper">
          <div class="M_Side_Username">
            @XenonOfficial
          </div>
          <div class="M_Side_Followers">
            125k follower
          </div>
          <div class="M_Side_Following">
            1.5 following
          </div>
        </div>
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
      <div class="M_Side_Logout_Wrapper">
        <a class="M_S_W_A" href="#">
          <i class="M_S_W_A_I fa fa-sign-out fa-fw"></i>
          <span class="">
            Logout
          </span>
        </a>
      </div>
    </div>

    <div class="D_Left_Nav Hide_In_Mobile Hide_In_Tablet">
      <div class="D_Left_Wrapper">
        <div class="D_Left_top_wrapper">
          <img class="D_Left_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
        </div>
        <div class="D_L_N_L_C">
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-users fa-fw"></i>
            <span class="">
              Home
            </span>
          </a>
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-bookmark fa-fw"></i>
            <span class="">
              Bookmarks
            </span>
          </a>
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-hashtag fa-fw"></i>
            <span class="">
              Explore
            </span>
          </a>
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-envelope fa-fw"></i>
            <span class="">
              Notifications
            </span>
          </a>
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-credit-card fa-fw"></i>
            <span class="">
              Payment
            </span>
          </a>
          <a class="D_L_N_L_A" href="#">
            <i class="fa fa-user fa-fw"></i>
            <span class="">
              Profile
            </span>
          </a>
        </div>
        <div class="D_Left_bottom_wrapper">
          <div class="D_Left_Detail_wrapper">
            <img class="D_Left_Picture" src="<?= BASEURL;  ?>/img/logo.jpg">
              <span>
                <p class="D_Left_Detail-one">Username</p>
                <p class="D_Left_Detail-two">#123456</p>
              </span>
          </div>
        </div>
      </div>
    </div>

    <div class="D_Right_Nav Hide_In_Mobile Hide_In_Tablet">
      <div class="D_Right_Wrapper no-scroll">
        <div class="D_Right_Top_Search_Wrapper">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
          </div>
        </div>
        <!--<div class="D_Right_Search_Modal">
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">aragaki yui</a>
          </div>
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">aragaki yui</a>
          </div>
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">aragaki yui</a>
          </div>
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">aragaki yui</a>
          </div>
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">aragaki yui</a>
          </div>
          <div class="D_Right_Search_Result">
            <a href="#" class="Basic_Anchor D_Right_Search_Result_Anchor">More Result</a>
          </div>
        </div>-->
        <div class="D_Right_Top_Trends_Wrapper">
          <div class="Trends">
            <div class="Trends_Title_Wrapper">
              <div class="Trend_Title">
                Trends for you
              </div>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-cog"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Technology #23
                  </div>
                  <div class="Trend_Ti">
                    AI
                  </div>
                  <div class="Trend_Num">
                    10.9k tweets
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-ellipsis-h"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Entertaiment #1
                  </div>
                  <div class="Trend_Ti">
                    Aragaki Yui
                  </div>
                  <div class="Trend_Num">
                    49.9k tweets
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-ellipsis-h"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Politics #1
                  </div>
                  <div class="Trend_Ti">
                    Malaysia
                  </div>
                  <div class="Trend_Num">
                    49.9k tweets
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-ellipsis-h"></i></a>
              </div>
              </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Finance #79
                  </div>
                  <div class="Trend_Ti">
                    Japan
                  </div>
                  <div class="Trend_Num">
                    149.9k tweets
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-ellipsis-h"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Sport #1
                  </div>
                  <div class="Trend_Ti">
                    FIBA 3X3
                  </div>
                  <div class="Trend_Num">
                    349.9k tweets
                  </div>
                </a>
              </div>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-ellipsis-h"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="D_Right_Middle_Trends_Wrapper">
          <div class="Trends">
            <div class="Trends_Title_Wrapper">
              <div class="Trend_Title">
                Recommend Writers
              </div>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-cog"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Hacking
                  </div>
                  <div class="Trend_Ti">
                    Dr Lee
                  </div>
                  <div class="Trend_Num">
                    101 Posts
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-plus"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Travel
                  </div>
                  <div class="Trend_Ti">
                    シェルドン
                  </div>
                  <div class="Trend_Num">
                    41 Posts
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-plus"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Fraud
                  </div>
                  <div class="Trend_Ti">
                    X men
                  </div>
                  <div class="Trend_Num">
                    199 Posts
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-plus"></i></a>
              </div>
            </div>
            <div class="Trends_Wrapper">
              <a class="Basic_Anchor" href="#">
                <div class="Trend_Detail">
                  <div class="Trend_Cat_Rank">
                    Fraud
                  </div>
                  <div class="Trend_Ti">
                    X men
                  </div>
                  <div class="Trend_Num">
                    199 Posts
                  </div>
                </div>
              </a>
              <div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="D_Right_Bottom_Trends_Wrapper">
          <div class="Trends">
            <div class="Trends_Title_Wrapper">
              <div class="Trend_Title">
                About Us
              </div>
              <!--<div class="Trend_Icon">
                <a class="Basic_Anchor" href="#"><i class="fa fa-cog"></i></a>
              </div>-->
            </div>
            <div class="About_Us_Wrapper">
              <a class="Basic_Anchor About_Us_link" href="#">Term and Service</a>
              <a class="Basic_Anchor About_Us_link" href="#">Policy</a>
              <a class="Basic_Anchor About_Us_link" href="#">Cookie</a>
              <a class="Basic_Anchor About_Us_link" href="#">Contact Us</a>
              <a class="Basic_Anchor About_Us_link" href="#">© 2021 Bijo, Inc.</a>
            </div>
          </div>
        </div>

    </div>
    </div>

    <div class="M_Bottom_Nav Hide_In_Tablet Hide_In_Desktop">
      <div class="M_Bottom_Wrapper">
        <a class="M_B_N_A"href="#">
          <i class="fa fa-users fa-fw"></i>
        </a>
      </div>
      <div class="M_Bottom_Wrapper">
        <a class="M_B_N_A"href="#">
          <i class="fa fa-search fa-fw"></i>
        </a>
      </div>
      <div class="M_Bottom_Wrapper">
        <a class="M_B_N_A"href="#">
          <i class="fa fa-bell fa-fw"></i>
        </a>
      </div>
      <div class="M_Bottom_Wrapper">
        <a class="M_B_N_A"href="#">
          <i class="fa fa-envelope fa-fw"></i>
        </a>
      </div>
    </div>


</html>

<script>
function w3_open() {
  document.getElementById("M_Side_Nav").style.width = "75vw";
  document.body.style.backgroundColor = "rgba(179,179,179,0.5)";
}

function w3_close() {
  document.getElementById("M_Side_Nav").style.width = "0";
  document.body.style.backgroundColor = "rgba(255,255,255,1)";
}
</script>
