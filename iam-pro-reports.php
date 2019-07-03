
<?php
$PageTitle = "IAM Professional Reports";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM PROFESSIONAL REPORTS
  </article>

  <?php include "trialbox-pro.php"; ?>
</div>

<article class="iam-features">
  <div class="testimonial">
    "The report-generating power of the software is a significant driver of the total value proposition.  Dozens of pre-set reports cover practically every conceivable need and the ability to customize output makes the software even more flexible - and valuable." &mdash; Adam
  </div>
  <br>

  Investment Account Manager 3 Professional provides many informative reports and graphs to help you make better investment decisions.  Reports can be created for user defined date ranges, for single investment accounts, or combinations of accounts, to view aggregate totals.  IAM3 Professional includes a plethora of accurate, comprehensive reports, including:<br>
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

  <div class="header-bar blue">REPORTING FEATURE HIGHLIGHTS</div>

  <div class="iam-two-col">
    <ul>
      <li>Current Account Values with Unrealized Gain/Loss</li>
      <li>Security Tax Basis Lot-by-Lot; Short-Term v. Long-Term Holding Periods</li>
      <li>Tax Filing for Realized Gain/Loss; Short-Term v. Long-Term Holding Periods</li>
      <li>Tax Filing for Investment Income Received</li>
      <li>Portfolio / Individual Security Performance / Comparison</li>
      <li>Performance vs Custom / Blended / Multiple Benchmarks: Monthly, Quarterly, Annually</li>
      <li>Asset Allocation and Rebalancing, Level 1 / Level 2 Analysis with Absolute and Relative Divergence</li>
      <li>Model Allocation by Asset Class / Individual Security</li>
      <li>Estimated Income: Unrealized Gains/Losses and Income</li>
      <li>Mutliple Portfolio / Collective Assets Under Management</li>
      <li>Executive Summary: Values, Gains/Losses, Income, Advisory Fees, Performance</li>
      <li>Contributions and Withdrawals</li>
      <li>Fees and Expenses</li>
      <li>Client Billing with Multi-Tier Fee Schedule</li>
      <li>Fundamental Ratio Analysis</li>
      <li>Fund Composition Analysis by Asset Type, Stock Sector and Size</li>
      <li>Fund Performance Comparison</li>
      <li>Portfolio Search by Objectives, Security</li>
      <li>Create / Save / Customizable Batch Reporting</li>
      <li>All Reporting Features Included with IAM3 Individual</li>
      <li>Free 60 Day Demo Including Free Technical Support</li>
    </ul>

    <div>
      <a href="pdf/IAMv3_Professional_Sample_Reports.pdf?<?php echo filemtime("pdf/IAMv3_Professional_Sample_Reports.pdf"); ?>">View sample IAM3 Professional reports</a><br>
      <br>
      <br>

      <a href="images/iam-pro-reports1.jpg" class="swipebox"><img src="images/iam-pro-reports1.jpg" alt=""></a><br>
      <br>

      <a href="images/iam-pro-reports2.jpg" class="swipebox"><img src="images/iam-pro-reports2.jpg" alt=""></a>

      <div class="vid">
        <a href="https://www.youtube.com/watch?v=QnC82LMwO7k&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="QnC82LMwO7k"></a>

        <div class="video-text">
          <h4>IAM Professional Reporting</h4>
          6:25
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