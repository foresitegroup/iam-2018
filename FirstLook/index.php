<?php
$TopDir = "../";
$PageTitle = "First Look – Sample IAMv4 Dashboard Views";
include $TopDir . "header.php";
?>

<style>
  .swipebox IMG { max-width: 100%; height: auto; }
</style>

<div class="darkgray whitetext mb">
  <article>
    <h1 style="line-height: 1.1;">FIRST LOOK<br>Sample IAMv4 Dashboard Views</h1>
  </article>
</div>

<article>
  <h2>IAM Portfolio Holdings Dashboard</h2>
  <a href="images/portfolio-holdings-dashboard.webp" class="swipebox"><img src="images/portfolio-holdings-dashboard.webp" alt="IAM Portfolio Holdings Dashboard" width="1916" height="996"></a>

  <br><br><br>

  <h2>IAM Asset Allocations Dashboard</h2>
  <a href="images/asset-allocations-dashboard.webp" class="swipebox"><img src="images/asset-allocations-dashboard.webp" alt="IAM Asset Allocations Dashboard" width="1913" height="993"></a>

  <br><br><br>

  <h2>IAM Performance Comparison Report</h2>
  <a href="images/performance-comparison-report.webp" class="swipebox"><img src="images/performance-comparison-report.webp" alt="IAM Performance Comparison Report" width="1918" height="996"></a>
</article>

<link rel="stylesheet" href="<?php echo $TopDir; ?>/inc/swipebox/swipebox.css">
<script type="text/javascript" src="<?php echo $TopDir; ?>/inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() { $(".swipebox").swipebox(); });
</script>

<div class="gray footer bt">
  <article>
    <h2>YOUR TRUSTED PARTNER SINCE 1985</h2>
  </article>
</div>

<?php include $TopDir . "footer.php"; ?>