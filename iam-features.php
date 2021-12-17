
<?php
$PageTitle = "IAM Individual Features";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM INDIVIDUAL FEATURES
  </article>

  <?php include "trialbox-iam.php"; ?>
</div>

<article>
  <div class="testimonial">
    "IAM has been extremely helpful to me in personally managing stock and fund portfolios over the past 10-15 years. It has made tax preparation easy and helped with asset allocation. I've found it valuable enough to purchase copies for my son and son-in-law."
  </div>
  <br>

  IAM provides extensive investment tracking and portfolio management tools.  If you have the responsibility of overseeing and managing one or several portfolios, you'll discover many comprehensive features that save time, help you to avoid mistakes, while leading to better portfolio management decisions.<br>
  <br>

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

  <div class="header-bar red">PRODUCT FEATURE HIGHLIGHTS</div>

  <div class="iam-two-col">
    <ul>
      <li>$99, Unlimited Full Version, 3 Personal Computers, 1 Year Technical Support</li>
      <li>Centralized, Secure, Desk-Top Based Portfolio Management</li>
      <li>Comprehensive Transaction Accounting</li>
      <li><a href="iam-reports.php">Detailed, Informative and Customizable Reporting</a></li>
      <li>Accurate Tax Tracking Tools with Security Lot Assignment</li>
      <li>Multiple Portfolio Management and Reporting / Batch Reporting</li>
      <li>Portfolio Allocation and Rebalancing Analysis</li>
      <li>Performance Reports vs Custom / Multiple Benchmarks: Monthly, Quarterly, Annually</li>
      <li>Fund Composition Analysis by Asset Type, Stock Sector and Size</li>
      <li>Fundamental Ratio Analysis</li>
      <li>Automatic Financial Institution Downloads</li>
      <li>Automatic Security Price Updating</li>
      <li>Price Alerts to Monitor Holdings</li>
      <li>Security Cross-Referencing</li>
      <li>Import from Quicken, Captools, Excel</li>
      <li>Create Historical Pricing Databases</li>
      <li>Backup / Restore</li>
      <li>Comprehensive Help System</li>
      <li>Free <?php echo $GLOBALS['demodays']; ?> Day Demo Including Free Technical Support</li>
      <li>30 Day Money Back Guarantee: if you decide to purchase the software activation key any time during or after the trial period, rest assured you'll have an additional <strong>full 30 day money back guarantee</strong> within 30 days of software activation. To receive your refund, simply use the 'Request Refund' choice under the IAM Help Menu | Product Support form.  Once approved, all refunds will be <u><em><strong>immediately processed</strong></em></u> to the credit card used when purchasing the software activation key. Truly a no-risk, 30 day money back guarantee policy!</li>
      <li><a href="features.php">Features Comparison Chart: Individual v. Professional</a></li>
    </ul>

    <div>
      <a href="images/iam-ind-features.jpg" class="swipebox"><img src="images/iam-ind-features.jpg" alt=""></a>

      <div class="vid">
        <a href="https://www.youtube.com/watch?v=h9YDTDif6Fw&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="h9YDTDif6Fw"></a>

        <div class="video-text">
          <h4>Get to Know IAM</h4>
          1:20
        </div>
      </div>

      <div class="vid">
        <a href="https://www.youtube.com/watch?v=_3K4ZTRIGp8&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="_3K4ZTRIGp8"></a>

        <div class="video-text">
          <h4>Getting Started</h4>
          3:36
        </div>
      </div><br>
      <br>

      <img src="images/30-day-mbg.png" alt="30 day money back guarantee" id="mbg">
    </div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR IAM <a href="download-iam.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>