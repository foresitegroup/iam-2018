
<?php
$PageTitle = "IAM Professional Features";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM PROFESSIONAL FEATURES
  </article>

  <?php include "trialbox-pro.php"; ?>
</div>

<article>
  <div class="testimonial">
    "I have been using Investment Account Manager Professional for several years and couldn't be more satisfied with the experience.  The product is very stable, intuitive and offers everything needed to track, analyze and maintain investment portfolios.  Reports are concise, information is easily accessible and no situation seems to have been overlooked.  On those infrequent times when I encounter a problem or have a question, the support staff has been wonderful in providing very timely follow ups and very concise diagnostic assistance. I couldn't be more pleased with the product." &mdash; Steve
  </div>
  <br>

  Investment Account Manager Professional has been developed with a professional audience in mind, including family offices, independent investment advisors, sophisticated investors, accounting firms, law firms, and foundations to provide a comprehensive, desktop-based portfolio management software solution.<br>
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

  <div class="header-bar blue">PRODUCT FEATURE HIGHLIGHTS</div>

  <div class="iam-two-col">
    <ul>
      <li>$295, Unlimited Full Version, 2 Personal Computers, 1 Year Technical Support</li>
      <li>Centralized, Secure, Desk-Top Based Portfolio Management</li>
      <li>Comprehensive Transaction Accounting</li>
      <li><a href="iam-pro-reports.php">Detailed, Informative and Customizable Reporting</a></li>
      <li>Accurate Tax Tracking Tools with Security Lot Assignment</li>
      <li>Multiple Portfolio Management / Account Aggregation / Reporting / Unified Account Management</li>
      <li>Portfolio Allocation and Rebalancing Analysis with Absolute and Relative Divergence</li>
      <li>Custom Model Portfolio Objectives and Allocations</li>
      <li>Target Allocations on Individual Asset Level within Portfolio Models</li>
      <li>Automatically Create Client Portfolios to Model Allocations</li>
      <li>Additional Asset Class / Asset Class Breakdowns</li>
      <li>Blended Benchmark Portfolios by Percentages</li>
      <li>Performance Reports vs Custom / Blended / Multiple Benchmarks: Monthly, Quarterly, Annually</li>
      <li>Custodial Imports (TD Ameritrade Institutional), Financial Institution Downloads</li>
      <li>Fundamental Ratio Analysis</li>
      <li>Fund Composition Analysis by Asset Type, Stock Sector and Size</li>
      <li>Security Cross-Referencing</li>
      <li>Automatic Security Price Updating</li>
      <li>Create / Save / Customizable Batch Reporting</li>
      <li>All Features Included with IAM3 Individual</li>
      <li>Free 60 Day Demo Including Free Technical Support</li>
      <li><a href="features.php">Features Comparison Chart: Individual v. Professional</a></li>
    </ul>

    <div>
      <a href="images/iam-pro-features1.jpg" class="swipebox"><img src="images/iam-pro-features1.jpg" alt=""></a><br>
      <br>
      
      <a href="images/iam-pro-features2.jpg" class="swipebox"><img src="images/iam-pro-features2.jpg" alt=""></a>

      <div class="vid">
        <a href="https://www.youtube.com/watch?v=0gwCDF4nbsI&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="0gwCDF4nbsI"></a>

        <div class="video-text">
          <h4>IAM Professional Introductory Tour</h4>
          5:06
        </div>
      </div>
    </div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR <span class="bluetext">IAM PRO</span> <a href="download-iam-pro.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>