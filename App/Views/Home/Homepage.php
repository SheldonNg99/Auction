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

      <!--Desktop product tittle section-->
      <div class="D_Product_Title">
          <span class="D_P_Title_Name">Recommend</span>
          <a class="D_P_Title_Arrow" href="#">
            <i class="fa fa-chevron-right"></i>
          </a>
      </div>

      <!--Products section-->
      <!--Mobile view of product section limited to 6 products-->
      <div class="M_Products_Container noSelect Hide_In_Tablet Hide_In_Desktop">
          <a class="Basic_Anchor" href="<?= BASEURL;  ?>/Product/Productpage">
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
                  <i class="fa fa-dollar"></i> RM18.04
                </div>
                <div class="D_Product_Detail_Bid_Number">
                  <i class="fa fa-eye"></i> 40421a2 bids
                </div>
              </div>
            </div>
          </a>

        </div>

      <!--Desktop product tittle section-->
      <div class="D_Product_Title ">
        <span class="D_P_Title_Name">Products</span>
          <a class="D_P_Title_Arrow" href="#">
            <i class="fa fa-chevron-right"></i>
          </a>
      </div>
      <!--Product section -->
      <!--Mobile view of table product section limited to 5 products-->
      <div class="M_Products_Table_Container noSelect Hide_In_Tablet Hide_In_Desktop">
          <div class="M_Product_Table_Header">
            <div class="M_Product_Table_Header_Name">
              NAME
            </div>
            <div class="M_Product_Table_Header_Price">
              PRICE
            </div>
          </div>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Table_Row">
              <div class="M_Product_Table_Row_Name_Wrapper">
                <span class="M_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="M_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Table_Row">
              <div class="M_Product_Table_Row_Name_Wrapper">
                <span class="M_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="M_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Table_Row">
              <div class="M_Product_Table_Row_Name_Wrapper">
                <span class="M_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="M_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Table_Row">
              <div class="M_Product_Table_Row_Name_Wrapper">
                <span class="M_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="M_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_Product_Table_Row">
              <div class="M_Product_Table_Row_Name_Wrapper">
                <span class="M_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="M_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>


        </div>

      <!--Tablet & Desktop view of product section limited to 5 products-->
      <div class="D_Products_Table_Container noSelect Hide_In_Mobile">
          <div class="D_Product_Table_Header">
            <div class="D_Product_Table_Header_Name">
              NAME
            </div>
            <div class="D_Product_Table_Header_Quantity">
              QUANTITY
            </div>
            <div class="D_Product_Table_Header_Price">
              PRICE
            </div>
          </div>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Table_Row">
              <div class="D_Product_Table_Row_Name_Wrapper">
                <span class="D_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="D_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="D_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="D_Product_Table_Row_Quantity_Wrapper">
                <span>288,553</span>
              </div>
              <div class="D_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Table_Row">
              <div class="D_Product_Table_Row_Name_Wrapper">
                <span class="D_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="D_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="D_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="D_Product_Table_Row_Quantity_Wrapper">
                <span>288,553</span>
              </div>
              <div class="D_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Table_Row">
              <div class="D_Product_Table_Row_Name_Wrapper">
                <span class="D_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="D_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="D_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="D_Product_Table_Row_Quantity_Wrapper">
                <span>288,553</span>
              </div>
              <div class="D_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Table_Row">
              <div class="D_Product_Table_Row_Name_Wrapper">
                <span class="D_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="D_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="D_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="D_Product_Table_Row_Quantity_Wrapper">
                <span>288,553</span>
              </div>
              <div class="D_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="D_Product_Table_Row">
              <div class="D_Product_Table_Row_Name_Wrapper">
                <span class="D_Product_Table_Row_Picture_Icon_Wrapper">
                  <img class="D_Product_Table_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="D_Product_Table_Row_Name_Detail_Wrapper">
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="D_Product_Table_Row_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="D_Product_Table_Row_Quantity_Wrapper">
                <span>288,553</span>
              </div>
              <div class="D_Product_Table_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <div class="D_Product_Table_Footer">
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
            </div>
          </div>

        </div>

      <!--Desktop product tittle section-->
      <!--<div class="D_Product_Title Hide_In_Mobile Hide_In_Tablet">
        <span class="D_P_Title_Name">Categories</span>
          <a class="D_P_Title_Arrow" href="#">
            <i class="fa fa-chevron-right"></i>
          </a>
      </div>-->

      <!--Mobile Home footer-->
      <footer class="M_Homepage_Footer_Container noSelect Hide_In_Tablet Hide_In_Desktop">
        <div class="M_Homepage_Footer_Wrapper">
          <span class="M_Homepage_Footer_Link"><a href="<?= BASEURL;  ?>/Home/Homepage" class="Basic_Anchor">Home</a></span>
          <span class="M_Homepage_Footer_Link"><a href="<?= BASEURL;  ?>/Home/Homepage" class="Basic_Anchor">Sign in / Register</a></span>
          <span class="M_Homepage_Footer_Link"><a href="<?= BASEURL;  ?>/Home/Homepage" class="Basic_Anchor">Sell an item</a></span>
          <span class="M_Homepage_Footer_Link"><a href="<?= BASEURL;  ?>/Home/Homepage" class="Basic_Anchor">Help / Contact</a></span>
        </div>
        <div class="M_Homepage_Footer_Copyright_Wrapper">
          Copyright © 1995-2021 Dash Inc. All Rights Reserved.
        </div>
      </footer>

      <!--Tablet & Desktop footer-->
      <footer class="D_Homepage_Footer_Container noSelect Hide_In_Mobile">
        <div class="D_Homepage_Footer_Wrapper">
          <ul class="D_Hompage_Footer_Wrapper_UL">
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_HL">Buy</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Registration</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Bidding & buying help</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Stores</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Charity Shop</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Seller</li></a>
          </ul>
        </div>

        <div class="D_Homepage_Footer_Wrapper">
          <ul class="D_Hompage_Footer_Wrapper_UL">
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_HL">Seller</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">How to Sell</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Start selling</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Business sellers</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Affiliates</li></a>
          </ul>
        </div>

        <div class="D_Homepage_Footer_Wrapper">
          <ul class="D_Hompage_Footer_Wrapper_UL">
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_HL">Say Connected</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Facebook</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Twitter</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Instagram</li></a>
          </ul>
        </div>

        <div class="D_Homepage_Footer_Wrapper">
          <ul class="D_Hompage_Footer_Wrapper_UL">
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_HL">About Dash</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Company Info</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">News</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Policies</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Careers</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Annoucements</li></a>
          </ul>
        </div>

        <div class="D_Homepage_Footer_Wrapper">
          <ul class="D_Hompage_Footer_Wrapper_UL">
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_HL">Help & Contact</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Resolution Center</a></li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Seller Center</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Buyer Center</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Contact Us</li></a>
            <a href="#" class="Basic_Anchor"><li class="D_Hompage_Footer_Wrapper_L">Dash Returns</li></a>
          </ul>
        </div>

        <div class="D_Homepage_Footer_Copyright_Wrapper">
          Copyright © 1995-2021 Dash Inc. All Rights Reserved.
        </div>
      </footer>
    </main>
  </body>

  <script rel="text/javascript" src="<?= BASEURL;  ?>/js/Home_Slide.js"></script>
</html>
