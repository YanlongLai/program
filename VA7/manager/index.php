<?php
/*

CircleStar Version: 0.2.2
By Alex Weissman
Copyright (c) 2014

Based on the UserCake user management system, v2.0.2.
Copyright (c) 2009-2012

CircleStar, like UserCake, is 100% free and open-source.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the 'Software'), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

require_once("models/config.php");

// Public page

setReferralPage(getAbsoluteDocumentPath(__FILE__));

//Forward the user to their default page if he/she is already logged in
if(isUserLoggedIn()) {
	addAlert("warning", "您已經登入了!");
    header("Location: account");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php
	echo renderTemplate("head.html", array("#SITE_ROOT#" => SITE_ROOT, "#SITE_TITLE#" => SITE_TITLE, "#PAGE_TITLE#" => "歡迎來到CircleStar"));
  ?>

  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills navbar pull-right">
        </ul>
        <!--<h3 class="text-muted">CircleStar</h3>-->
        <img src="./images/CircleStar/CircleStar.png" style="height:50px;">
      </div>
      <div class="jumbotron">
        <h1>歡迎來到</h1>
        <img src="./images/CircleStar/CircleStar.png" style="height:80px;display:block;margin-left: auto;margin-right: auto;">
        <h1>活動圈</h1>
        <img src="./images/CircleStar/LOGO.png" style="height:120px;display:block;margin-left: auto;margin-right: auto;">
        <p class="lead">一個安全的使用者管理平台</p>
		<div class="row">
			<div class="col-sm-12">
			  <a href="login.php" class="btn btn-success" role="button" value='Login'>登入</a>
			</div>
        </div>
        <div class="jumbotron-links">
        </div>
      </div>	
      <?php echo renderTemplate("footer.html"); ?>

    </div> <!-- /container -->

  </body>
</html>

<script>
	$(document).ready(function() {
		alertWidget('display-alerts');
        // Load navigation bar
        $(".navbar").load("header-loggedout.php", function() {
            $(".navbar .navitem-home").addClass('active');
        });
        // Load jumbotron links
        //$(".jumbotron-links").load("jumbotron_links.php");     
	});
</script>
