
<?php
$PageTitle = "IAM Individual Reports";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM INDIVIDUAL REPORTS
  </article>

  <?php include "trialbox-iam.php"; ?>
</div>

<article class="iam-features">
  <div class="testimonial">
    "Investment Account Manager's reporting capabilities are a quantum leap from what you'll get with free internet services and brokerage accounts."<br>
    <br>

    "Investment Account Manager provides not only a great way to track portfolios, but the reports provide excellent snapshots of performance and asset allocation which are invaluable in managing investments."
  </div>
  <br>

  Investment Account Manager 3 Individual provides more than 50 informative and detailed reports summarizing your investments to help you make better investment decisions. Reports can be created for user defined date ranges, for single investment accounts, or combinations of accounts, to view aggregate totals.<br>
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

  <div class="header-bar red">REPORTING FEATURE HIGHLIGHTS</div>

  <div class="iam-two-col">
    <ul>
      <li>Current Account Values with Unrealized Gain/Loss</li>
      <li>Security Tax Basis Lot-by-Lot; Short-Term v. Long-Term Holding Periods</li>
      <li>Tax Filing for Realized Gain/Loss; Short-Term v. Long-Term Holding Periods</li>
      <li>Tax Filing for Investment Income Received</li>
      <li>Investment Trasaction Activity </li>
      <li>Portfolio / Individual Security Performance / Comparison</li>
      <li>Performance vs Benchmarks: Monthly, Quarterly, Annually</li>
      <li>Asset Allocation and Rebalancing, Level 1 / Level 2 Analysis</li>
      <li>Model Allocation by Asset Class</li>
      <li>Estimated Income: Unrealized Gains/Losses and Income</li>
      <li>Multiple Portfolio / Collective Assets Under Management</li>
      <li>Fundamental Ratio Analysis</li>
      <li>Fund Composition Analysis by Asset Type, Stock Sector and Size</li>
      <li>Fund Performance Comparison</li>
      <li>Portfolio Search by Security</li>
      <li>Batch Reporting</li>
      <li>Fees and Expenses</li>
      <li>Wash Sales Check List</li>
      <li>Portfolio Transfers / Qualified Dividends</li>
      <li>Exchanges, Mergers and Spinoff Reporting</li>
      <li>and more....</li>
    </ul>

    <div>
      <a href="pdf/IAMv3_Individual_Sample_Reports.pdf">View sample IAM3 Individual reports</a><br>
      <br>
      <br>

      <a href="images/iam-ind-reports.jpg" class="swipebox"><img src="images/iam-ind-reports.jpg" alt=""></a>

      <div class="vid">
        <a href="https://www.youtube.com/watch?v=qy_SDpFtQJg&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="qy_SDpFtQJg"></a>

        <div class="video-text">
          <h4>Reports</h4>
          8:13
        </div>
      </div>
    </div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR IAM <a href="download-iam.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>