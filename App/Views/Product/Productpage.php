<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product Name</title>
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

      <div class="M_Products_Product_Container">
        <div class="M_Products_Product_Wrapper">
          <span class="M_Products_Product_Title">NEW Earthwise 1816-16EW Composite Wheels Alloy Frame 16-Inch Reel Push Mower</span>
          <span class="M_Products_Product_Current_Price">Current Price: RM 111.99</span>
          <span class="M_Products_Product_Shipping_Price">+ Rm 107.99 shipping</span>
          <span class="M_Products_Product_Starting_Price">Starting Price: RM 99.99</span>
          <span class="M_Products_Product_Delivery_Date">Est. Delivery Tue, Oct 5 - Tue, Oct 12</span>
        </div>
        <div class="M_Products_Product_Buttons_Wrapper">
          <button class="A_P_Buttons" type="button" name="button">Make Offer</button>
          <br>
          <br>
          <button class="A_S_Buttons" type="button" name="button">Bookmark</button>
        </div>
      </div>

      <!--Desktop product tittle section-->
      <div class="D_Product_Title Hide_In_Mobile">
        <span class="D_P_Title_Name">Listing</span>
          <a class="D_P_Title_Arrow" href="#">
            <i class="fa fa-chevron-right"></i>
          </a>
      </div>

      <!--Desktop product tittle section-->
      <div class="M_Product_Title Hide_In_Tablet Hide_In_Desktop">
        <span class="M_P_Title_Name">Listing</span>
          <!--<a class="D_P_Title_Arrow" href="#">
            <i class="fa fa-chevron-right"></i>
          </a>-->
      </div>

      <div class="M_Products_Lists_Container">
        <div class="M_Products_Lists_Wrapper">
          <!--Loop listing up to 10-->
          <div class="M_Products_Lists_Details_Wrapper">
            <span class="M_Product_Lists_Details_User_Picture_Icon_Wrapper">
              <img class="M_Product_Lists_Details_User_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
            </span>
            <span class="M_Product_Lists_Details_Wrapper">
              <span class="M_Product_Lists_Price_Raised">Katherine raised price to RM 1400</span>
              <span class="M_Product_Lists_Date_Raised">01/01 15:23 pm</span>
            </span>
          </div>

          <div class="M_Products_Lists_Details_Wrapper">
            <span class="M_Product_Lists_Details_User_Picture_Icon_Wrapper">
              <img class="M_Product_Lists_Details_User_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
            </span>
            <span class="M_Product_Lists_Details_Wrapper">
              <span class="M_Product_Lists_Price_Raised">Melisa raised price to RM 1300</span>
              <span class="M_Product_Lists_Date_Raised">01/01 13:13 pm</span>
            </span>
          </div>

          <div class="M_Products_Lists_Details_Wrapper">
            <span class="M_Product_Lists_Details_User_Picture_Icon_Wrapper">
              <img class="M_Product_Lists_Details_User_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
            </span>
            <span class="M_Product_Lists_Details_Wrapper">
              <span class="M_Product_Lists_Price_Raised">John raised price to RM 1200</span>
              <span class="M_Product_Lists_Date_Raised">01/01 13:03 pm</span>
            </span>
          </div>

          <div class="M_Products_Lists_Details_Wrapper">
            <span class="M_Product_Lists_Details_User_Picture_Icon_Wrapper">
              <img class="M_Product_Lists_Details_User_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
            </span>
            <span class="M_Product_Lists_Details_Wrapper">
              <span class="M_Product_Lists_Price_Raised">Katherine raised price to RM 1000</span>
              <span class="M_Product_Lists_Date_Raised">01/01 12:03 pm</span>
            </span>
          </div>
        </div>
      </div>

      <!--Mobile Product About Container-->
      <div class="M_ProductPage_Product_Card_Detail_Container">
        <div class="M_ProductPage_Product_Card_Detail_Wrapper">
          <div class="M_ProductPage_Product_Card_Title_Header">
            About this item
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Condition</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Used</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Time Left</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">3 Days 4 Hours</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Quantity</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">1 available</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Authenticity</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Verify by Dash</span>
          </div>
          <div class="M_ProductPage_Product_Card_View_More_Row">
            <span><i class="fa fa-chevron-down"></i></span>
          </div>
      </div>

      <!--Mobile Shipping, Return and Payment Container-->
      <div class="M_ProductPage_Product_Card_Detail_Container">
        <div class="M_ProductPage_Product_Card_Detail_Wrapper">
          <div class="M_ProductPage_Product_Card_Title_Header">
            Shipping & Return
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Ships From</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">ROORKEE, UTTARAKHAND</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Deliver to Malaysia</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Est. Tue, Oct 26 - Tue, Nov 9</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Condition</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Used</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">International delivery</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">International shipment of items may be subject to customs processing and additional charges.</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Returns</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Accepted within 30 Days (Free Return)</span>
          </div>
          <div class="M_ProductPage_Product_Card_View_More_Row">
            <span><i class="fa fa-chevron-down"></i></span>
          </div>

        </div>
      </div>
      <!--Mobile Seller Details Container-->
      <div class="M_ProductPage_Product_Card_Detail_Container">
        <div class="M_ProductPage_Product_Card_Detail_Wrapper">
          <div class="M_ProductPage_Product_Card_Title_Header">
            About this Seller
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">
              <span class="M_ProductPage_Product_Card_Detail_Row_Picture_Icon_Wrapper">
                <img class="M_ProductPage_Product_Card_Detail_Row_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
              </span>
            </span>
            <span class="M_ProductPage_Product_Card_Detail_Row_Info">Adam Authentic Store</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Date Joined</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">13 Spet 2018</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Location</span><span class="M_ProductPage_Product_Card_Detail_Row_Info">Russia</span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Communication</span>
            <span class="M_ProductPage_Product_Card_Detail_Row_Info">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"> (135)</span>
            </span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Shipping Time</span>
            <span class="M_ProductPage_Product_Card_Detail_Row_Info">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"> (219)</span>
            </span>
          </div>
          <div class="M_ProductPage_Product_Card_Detail_Row">
            <span class="M_ProductPage_Product_Card_Detail_Row_Description">Shipping charges</span>
            <span class="M_ProductPage_Product_Card_Detail_Row_Info">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"> (532)</span>
            </span>
          </div>
          <div class="M_ProductPage_Product_Card_View_More_Row">
            <span><i class="fa fa-chevron-down"></i></span>
          </div>
        </div>
      </div>

      <!--Mobile Related Products Container-->
      <div class="M_ProductPage_Product_Card_Detail_Container">
        <div class="M_ProductPage_Product_Card_Detail_Wrapper noSelect">
          <div class="M_ProductPage_Product_Card_Title_Header">
            You may also like
          </div>
          <a class="Basic_Anchor" href="#">
            <div class="M_ProductPage_More_Product_Card_Detail_Row">
              <div class="M_ProductPage_More_Product_Card_Name_Wrapper">
                <span class="M_ProductPage_More_Product_Card_Picture_Icon_Wrapper">
                  <img class="M_ProductPage_More_Product_Card_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper">
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_ProductPage_More_Product_Card_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_ProductPage_More_Product_Card_Detail_Row">
              <div class="M_ProductPage_More_Product_Card_Name_Wrapper">
                <span class="M_ProductPage_More_Product_Card_Picture_Icon_Wrapper">
                  <img class="M_ProductPage_More_Product_Card_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper">
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_ProductPage_More_Product_Card_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_ProductPage_More_Product_Card_Detail_Row">
              <div class="M_ProductPage_More_Product_Card_Name_Wrapper">
                <span class="M_ProductPage_More_Product_Card_Picture_Icon_Wrapper">
                  <img class="M_ProductPage_More_Product_Card_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper">
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_ProductPage_More_Product_Card_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_ProductPage_More_Product_Card_Detail_Row">
              <div class="M_ProductPage_More_Product_Card_Name_Wrapper">
                <span class="M_ProductPage_More_Product_Card_Picture_Icon_Wrapper">
                  <img class="M_ProductPage_More_Product_Card_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper">
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_ProductPage_More_Product_Card_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>

          <a class="Basic_Anchor" href="#">
            <div class="M_ProductPage_More_Product_Card_Detail_Row">
              <div class="M_ProductPage_More_Product_Card_Name_Wrapper">
                <span class="M_ProductPage_More_Product_Card_Picture_Icon_Wrapper">
                  <img class="M_ProductPage_More_Product_Card_Picture_Icon" src="<?= BASEURL;  ?>/img/download1.jpg">
                </span>
                <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper">
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Product_Name">Product Names Alfreds Futterkiste</span>
                  <span class="M_ProductPage_More_Product_Card_Name_Detail_Wrapper_Seller_Name">Seller: Maria Anders</span>
                </span>
              </div>
              <div class="M_ProductPage_More_Product_Card_Row_Price_Wrapper">
                <span>RM 67,920.00 </span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!--Mobile Home footer-->
      <footer class="M_Homepage_Footer_Container noSelect Hide_In_Tablet Hide_In_Desktop">
        <div class="M_Homepage_Footer_Wrapper">
          <span class="M_Homepage_Footer_Link"><a href="<?= BASEURL;  ?>/Home/Homepage" class="Basic_Anchor">Home</a></span>
          <span class="M_Homepage_Footer_Link"><a href="#" class="Basic_Anchor">Sign in / Register</a></span>
          <span class="M_Homepage_Footer_Link"><a href="#" class="Basic_Anchor">Sell an item</a></span>
          <span class="M_Homepage_Footer_Link"><a href="#" class="Basic_Anchor">Help / Contact</a></span>
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
