<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <main class="Main_Section_Container">
      <div class="Main_Home_Slider">
        <img class="Main_Home_Slides" src="<?= BASEURL;  ?>/img/download1.jpg">
        <img class="Main_Home_Slides" src="<?= BASEURL;  ?>/img/download2.jpg">
        <img class="Main_Home_Slides" src="<?= BASEURL;  ?>/img/download3.jpg">
        <div class="Main_Home_Slides_Dot_Wrapper">
          <span class="Main_Home_Slider_Dot Dots dot_hover_white" onclick="currentDiv(1)"></span>
          <span class="Main_Home_Slider_Dot Dots dot_hover_white" onclick="currentDiv(2)"></span>
          <span class="Main_Home_Slider_Dot Dots dot_hover_white" onclick="currentDiv(3)"></span>
        </div>
      </div>

      <!--Product title section-->
      <!--Mobile product tittle section-->
      <a class="Basic_Anchor" href="#">
        <div class="M_Product_Title">
          <span class="M_P_Title_Name">Product</span>
          <span class="M_P_Title_Arrow"><i class="fa fa-chevron-right"></i></span>
        </div>
      </a>

      <!--Products section-->
        <!--Mobile view of product section limited to 6 products-->
        <div class="M_Products_Container noSelect Hide_In_Tablet Hide_In_Desktop">
          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download3.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Clutch Case
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM 0.89
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 74920 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download1.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Dress of the Scorching Princess
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM 0.03
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 199247 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Dress of the Scorching Princess
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM 0.03
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 199247 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Wrapper">
              <div class="M_Product_Image_Wrapper">
                <img class="M_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="M_Product_Details">
                <div class="M_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="M_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="M_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>
        </div>

        <!--Tablet view of product section limited to 12 products-->
        <div class="T_Products_Container noSelect Hide_In_Mobile Hide_In_Desktop">
          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="T_Product_Wrapper">
              <div class="T_Product_Image_Wrapper">
                <img class="T_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="T_Product_Details">
                <div class="T_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="T_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="T_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

        </div>

        <!--Desktop view of product section limited to 12 products-->
        <div class="D_Products_Container noSelect Hide_In_Mobile Hide_In_Tablet">
          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Wrapper">
              <div class="D_Product_Image_Wrapper">
                <img class="D_Product_Image" src="<?= BASEURL;  ?>/img/download2.jpg">
              </div>
              <div class="D_Product_Details">
                <div class="D_Product_Detail_Title">
                  Operation Breakout Weapon Case
                </div>
                <div class="D_Product_Detail_Price">
                  <i class="fa fa-dollar"></i> RM11.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 404212 bids
                </div>
              </div>
            </div>
          </a>

        </div>

      <!---->
    </main>
  </body>
  <script rel="text/javascript" src="<?= BASEURL;  ?>/js/Home_Slide.js"></script>
</html>
