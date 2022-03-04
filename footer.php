
    <div id="footer-wrap">
      <footer>
        <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="" id="footer-logo">

        <div>
          <div class="three-col">
            <h2><a href="<?php echo $TopDir; ?>forum">IAM FORUM: POSTS</a></h2>

            <?php
            include_once "inc/dbconfig.php";

            $result = $mysqli->query("SELECT * FROM smf_messages ORDER BY poster_time DESC LIMIT 3");

            $counter = 0;

            while($row = $result->fetch_array(MYSQLI_BOTH)) {
              echo "
              <span class=\"ldate\">" . date("F j, Y", $row['poster_time']) . "</span><br>
              <span class=\"ltitle\"><a href=\"" . $TopDir . "forum/index.php?topic=" . $row['id_topic'] . ".msg" . $row['id_msg'] . "#msg" . $row['id_msg'] . "\">" . $row['subject'] . "</a></span>";

              if (++$counter < 3) echo "<br><br>\n";
            }

            mysqli_free_result($result);
            $mysqli->close();
            ?>
          </div>

          <div class="three-col">
            <h2><a href="<?php echo $TopDir; ?>awards-and-reviews.php">AWARDS &amp; REVIEWS</a></h2>

            <img src="<?php echo $TopDir; ?>images/taa-softpedia.png" alt="" style="max-width: 100%; filter: brightness(0) invert(1);"><br>
            <br>
            <br>

            <img src="<?php echo $TopDir; ?>images/taa-aaii.png" alt="" style="max-width: 100%;"><br>
            <br>
            <br>

            <strong><a href="<?php echo $TopDir; ?>awards-and-reviews.php">SEE MORE AWARDS &amp; REVIEWS</a></strong>
          </div>

          <div class="three-col">
            <h2><a href="<?php echo $TopDir; ?>contact-us.php">CONTACT</a></h2>

            <strong>QUANT IX SOFTWARE</strong><br>
            11518 N. Port Washington Rd, Suite 102<br>
            Mequon, WI 53092<br>
            (262) 241-3990<br>
            <strong><a href="<?php echo $TopDir; ?>contact-us.php">Send us a message</a></strong><br>
            <br>

            <a href="https://www.facebook.com/Investment-Account-Manager-266848243474575/" class="social"><i class="fa fa-facebook"></i></a>
            <!-- <a href="#" class="social"><i class="fa fa-linkedin"></i></a> -->
            <a href="<?php echo $TopDir; ?>products/blog" class="social"><i class="fa fa-wordpress"></i></a>
          </div>

          <div style="clear: both;"></div>
        </div>

        <div style="clear: both; border-top: 1px solid #295A9D; margin-bottom: 2em;"></div>

        <nav id="footermenu">
          <?php include "menu-footer.php"; ?>
        </nav>

        <div id="copyright">
          &copy; <?php echo date("Y"); ?> QUANT IX SOFTWARE, All rights reserved.
          <a href="https://foresitegrp.com" style="color: #FFFFFF; float: right; text-decoration: none;">WEBSITE BY FORESITE</a>
        </div>
      </footer>
    </div>
<script type="text/javascript">var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel-a.basis.net/iap/09608d06a64ea3d9';new Image().src = ssaUrl; (function(d) { var syncUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel-a.basis.net/dmp/asyncPixelSync'; var iframe = d.createElement('iframe'); (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0;"; iframe.src = "javascript:false"; d.body.appendChild(iframe); var doc = iframe.contentWindow.document; doc.open().write('<body onload="window.location.href=\''+syncUrl+'\'">'); doc.close(); })(document); </script>
  </body>
</html>