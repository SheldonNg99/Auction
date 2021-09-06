<!DOCTYPE html>
<html lang="en" dir="ltr">
  <br>
  <script rel="text/javascript" src="<?= BASEURL;  ?>/js/Pswd_Validation.js"></script>
  <script rel="text/javascript" src="<?= BASEURL;  ?>/js/script.js"></script>
  <br>
  <body>
    <div id="A_M_C">
      <div id="A_M_W">
        <div id="A_L_I_W">
          <img src="<?= BASEURL;  ?>/img/Logo.jpeg">
        </div>
        <div id="A_M_L_W">
          <form id="A_L_F_W" action="<?= BASEURL;  ?>/Home" >
            <input type="text" class="A_Inputs" placeholder="Email">
            <br>
            <br>
            <input type="text" class="A_Inputs" placeholder="Username">
            <br>
            <br>
            <input type="password" class="A_Inputs" id="First_Pswd" placeholder="Password">
            <div id="pswd_info">
              <h4>Password must meet the following requirements:</h4>
              <ul>
                <li id="Pswd_letter" class="invalid">At least <strong>one letter</strong></li>
                <li id="Pswd_capital" class="invalid">At least <strong>one capital letter</strong></li>
                <li id="Pswd_number" class="invalid">At least <strong>one number</strong></li>
                <li id="Pswd_length" class="invalid">Be at least <strong>8 characters</strong></li>
              </ul>
            </div>
            <br>
            <br>
            <input type="password" class="A_Inputs" id="Second_Pswd" placeholder="Re-type Password">
            <div class="Forget_Password_Link_Wrapper">
              <a href="<?= BASEURL;  ?>/Authenticate/Login" id="Forget_Password_Link">Already has an account?</a>
            </div>
            <br>
            <button type="submit" class="A_P_Buttons" name="Register">Register</button>
          </form>
        </div>
      </div>
    </div>
    <br>
  </body>
</html>
