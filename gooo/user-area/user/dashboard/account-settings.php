<?php

include("includes/header.php");

?>


<div class="content-w">   
  <div class="content-i">
    <div class="content-box"> 
      
      <div class="element-wrapper">
        <div class="element-box">
          <h6 class="element-header">Authentication</h6>
             
          <!--<div class="form-group mb-0">-->
          <!--  <p>Two-factor authentication is a two way secured method for protecting your account. When it is activated you need to enter not only your password, but also a special code. You can receive this code by email. Even if third person will find your password, then can't access with that code.</p>-->
          <!--  <label class="toggle">-->
          <!--    <input id="two-factor" name="two_factor" value="1" class="toggle-checkbox" type="checkbox"  >-->
          <!--    <div class="toggle-switch"></div>-->
          <!--    <span class="toggle-label"> Enable Two Factor</span>-->
          <!--  </label>-->
          <!--  <br>-->
           
          <!--</div>-->
          
        </div>
      </div>
      <div class="element-wrapper">
        <div class="element-box">
          <h6 class="element-header">Notifications</h6>
               
          <div class="form-group mb-0">
            <label class="toggle">
              <input value="1" class="toggle-checkbox" type="checkbox" id="trans-notice" checked>
              <div class="toggle-switch"></div>
              <span class="toggle-label">I send or receive
              money</span>
            </label>
            <br>
            <label class="toggle">
              <input value="1" class="toggle-checkbox" type="checkbox" id="logins-notice" checked>
              <div class="toggle-switch"></div>
              <span class="toggle-label">Login activities</span>
            </label>
            <br>
            <label class="toggle">
              <input value="1" class="toggle-checkbox" type="checkbox" id="email-notice" checked>
              <div class="toggle-switch"></div>
              <span class="toggle-label">There are recommendation for my account</span>
            </label>
            
          </div>
          <!-- <div class="form-group">
            <button class="btn btn-primary pl-5 pr-5 waves-effect">Save</button>
          </div> -->
         
        </div>
      </div>

    </div>
  </div>
</div>

  
      
      
      </div>
     <?php
         include("includes/footer.php");
     ?>