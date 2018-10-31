
<?php
$PageTitle = "TD Ameritrade Institutional";
include "header.php";
?>

<link rel="stylesheet" href="inc/swipebox/swipebox.css">
<script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox").swipebox();

    $(".swipebox-video").swipebox({autoplayVideos: true});

    $(".swipebox-video").each(function() {
      var YouTubeID = $(this).attr("rel");
      $('.swipebox-video[rel="'+YouTubeID+'"]').css({"background-image": "url(https://img.youtube.com/vi/"+YouTubeID+"/maxresdefault.jpg)"});
    });
  });
</script>

<div class="green mb tb-header">
  <article class="vert-center">
    Investment Account Manager Professional integrates with <span style="display: inline-block;">TD Ameritrade</span> Institutional's Veo<sup>&reg;</sup> platform client files.
  </article>

  <?php include "trialbox-pro.php"; ?>
</div>

<article>
  <div class="testimonial" style="padding-bottom: 2em;">
    "I have a small Investment Advisory Business with 100+ accounts. I wanted a program that downloaded my daily transactions, produced batch quarterly reports and was easy to use. I like the straight forward method offered by Investment Account Manager Professional that allows me to navigate between clients and reports with little, if any, training. Nearly all the functions of IAM Professional are intuitive and the onboard help screens are one of the best I seen. I am very happy with IAM Professional." &mdash; Frank
  </div>
</article>

<article>
  <div class="two-col ameritrade-left">
    This integration allows advisors who custody assets with <span style="display: inline-block;">TD Ameritrade</span> Institutional to easily import client portfolio positions that utilize the <span style="display: inline-block;">TD Ameritrade</span> Institutional Generic Files format.  Investment Account Manager 3 Professional allows the advisor to import the following client portfolio information as of the date of the <span style="display: inline-block;">TD Ameritrade</span> Institutional files:<br>
    <br>

    <ul>
      <li>Security: all securities or new securities.</li>
      <li>Price: all closing prices</li>
      <li>Position: all client positions, not including cost basis details.</li>
      <li>Demographic: all account demographics for existing accounts.</li>
      <li>Transaction: all transactions that occurred or have cleared.</li>
      <li>Reconciliation: all positions, including cost basis details</li>
    </ul>
  </div>

  <div class="two-col ameritrade-right">
    <img src="images/ameritrade.png" alt="TD Ameritrade Institutional"><br>
    <br>

    <a href="images/tda-screenshot.jpg" class="swipebox"><img src="images/tda-screenshot.jpg" alt=""></a>
  </div>

  <div style="clear: both;"></div>

  <hr><br>
  <br>

  <span style="display: inline-block;">TD Ameritrade</span>, Inc. and QUANT IX SOFTWARE, Inc. are separate, unaffiliated companies and they are not responsible for each other's services and products. Veo Integrated is an indication of programming compatibility. It does not imply any <span style="display: inline-block;">TD Ameritrade</span>, Inc. recommendation of, endorsement of, warranty of, or fitness for use of QUANT IX SOFTWARE's products or services. <span style="display: inline-block;">TD Ameritrade</span> is not responsible for information, opinions or services provided by QUANT IX SOFTWARE, Inc. Brokerage services provided exclusively by <span style="display: inline-block;">TD Ameritrade</span>, Inc., member FINRA/SIPC. Veo is a trademark of <span style="display: inline-block;">TD Ameritrade</span>, Inc. <span style="display: inline-block;">TD Ameritrade</span> is a trademark jointly owned by <span style="display: inline-block;">TD Ameritrade</span> IP Company, Inc. and The Toronto-Dominion Bank. Used with permission. All rights reserved.
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR <span class="bluetext">IAM PRO</span> <a href="download-iam-pro.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>