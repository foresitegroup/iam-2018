<?php
session_start();
$PageTitle = "IAM Individual Guides and Resources";
$Description = "Investment Account Manager has guides and resources to help you understand the features our software provides.";
$Keywords = "demo, guides, resources";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM INDIVIDUAL GUIDES AND RESOURCES
  </article>

  <?php include "trialbox-iam.php"; ?>
</div>

<article>
  Provided here are useful guides and resources to help you better utilize and understand the features provided by Investment Account Manager 3 Individual.<br>
  <br>

  <a href="iam-tutorials.php">IAM Individual Tutorial Videos</a><br>
  <br>

  <a href="survey-results.php">Recent IAM3 Individual User Survey Results</a><br>
  <br>

  <a href="pdf/Getting_Started_IAMv3_Individual_Demo.pdf?<?php echo filemtime("pdf/Getting_Started_IAMv3_Individual_Demo.pdf"); ?>">Getting Started with the IAM3 Individual Demo</a><br>
  <br>

  <a href="pdf/Using_Investment_Account_Manager_3_Individual.pdf?<?php echo filemtime("pdf/Using_Investment_Account_Manager_3_Individual.pdf"); ?>">Using Investment Account Manager 3 Individual</a><br>
  <br>

  <a href="pdf/IAMv3_Individual_Sample_Reports.pdf?<?php echo filemtime("pdf/IAMv3_Individual_Sample_Reports.pdf"); ?>">Sample IAM3 Individual Reports</a><br>
  <br>

  <a href="pdf/Tax_Tracking_Tools_IAM3_Individual.pdf?<?php echo filemtime("pdf/Tax_Tracking_Tools_IAM3_Individual.pdf"); ?>">Tax Tracking Tools</a><br>
  <br>

  <a href="pdf/Schwab_Import_CSV_File_Guide.pdf?<?php echo filemtime("pdf/Schwab_Import_CSV_File_Guide.pdf"); ?>">Schwab Import CSV File Guide</a><br>
  <br>

  <a href="https://www.sec.gov/investor/pubs/sec-guide-to-savings-and-investing.pdf">SEC's publication Saving and Investing: A Roadmap to your Financial Security</a><br>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR IAM <a href="iam.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>