
    <div id="footer-wrap">
      <footer>
        <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="" id="footer-logo">

        <div>
          <!-- <div class="three-col">
            <h2><a href="<?php //echo $TopDir; ?>forum">IAM FORUM: POSTS</a></h2> -->

            <?php
            // include_once "inc/dbconfig.php";

            // $result = $mysqli->query("SELECT * FROM smf_messages ORDER BY poster_time DESC LIMIT 3");

            // $counter = 0;

            // while($row = $result->fetch_array(MYSQLI_BOTH)) {
            //   echo "
            //   <span class=\"ldate\">" . date("F j, Y", $row['poster_time']) . "</span><br>
            //   <span class=\"ltitle\"><a href=\"" . $TopDir . "forum/index.php?topic=" . $row['id_topic'] . ".msg" . $row['id_msg'] . "#msg" . $row['id_msg'] . "\">" . $row['subject'] . "</a></span>";

            //   if (++$counter < 3) echo "<br><br>\n";
            // }

            // mysqli_free_result($result);
            // $mysqli->close();
            ?>
          <!-- </div> -->

          <div class="three-col">
            <h2><a href="<?php echo $TopDir; ?>awards-and-reviews.php">AWARDS &amp; REVIEWS</a></h2>

            <img src="<?php echo $TopDir; ?>images/taa-softpedia.webp" alt="Softpedia 100% Clean" width="470" height="29" loading="lazy" style="max-width: 100%; height: auto; filter: brightness(0) invert(1);"><br>
            <br>
            <br>

            <img src="<?php echo $TopDir; ?>images/taa-aaii.webp" alt="" width="468" height="66" loading="lazy" style="max-width: 100%; height: auto;"><br>
            <br>
            <br>

            <strong><a href="<?php echo $TopDir; ?>awards-and-reviews.php">SEE MORE AWARDS &amp; REVIEWS</a></strong>
          </div>

          <div class="three-col" style="width: 9.4%;"></div>

          <div class="three-col">
            <h2><a href="<?php echo $TopDir; ?>contact.php">CONTACT</a></h2>

            <strong>QUANT IX SOFTWARE</strong><br>
            11518 N. Port Washington Rd, Suite 102<br>
            Mequon, WI 53092<br>
            (262) 241-3990<br>
            <strong><a href="<?php echo $TopDir; ?>contact.php">Send us a message</a></strong><br>
            <br>

            <a href="https://www.facebook.com/Investment-Account-Manager-266848243474575/" class="social facebook" aria-label="Facebook"></a>
            <a href="<?php echo $TopDir; ?>products/blog" class="social wordpress" aria-label="Blog"></a>
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

    <script>
      // Open external links and PDFs in new tab
      [...document.links].forEach(link => {
        if (
          link.hostname != window.location.hostname
          || link.href.split(/[#?]/)[0].split('.').pop().trim() == "pdf"
          || link.href.split('.').pop() == "jpg"
          || link.href.split('.').pop() == "png"
          || link.href.split('.').pop() == "gif"
          || link.href.split('.').pop() == "webp"
        ) {
          link.target = '_blank';
          if (link.rel == "") link.rel = 'noopener';
        }
      });
    </script>

  </body>
</html>