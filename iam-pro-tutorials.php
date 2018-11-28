
<?php
$PageTitle = "IAM Professional Tutorial Videos";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM PROFESSIONAL TUTORIAL VIDEOS
  </article>

  <?php include "trialbox-pro.php"; ?>
</div>

<article class="iam-tutorials">
  <div class="testimonial">
    <!-- "This is where the testimonial goes." -->
  </div>
  <br>

  <!-- This is where the video tutorials introduction text goes.<br> -->
  <br>

  <link rel="stylesheet" href="inc/swipebox/swipebox.css">
  <script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".swipebox-video").swipebox({autoplayVideos: true});

      $(".swipebox-video").each(function() {
        var YouTubeID = $(this).attr("rel");
        $('.swipebox-video[rel="'+YouTubeID+'"]').css({"background-image": "url(https://img.youtube.com/vi/"+YouTubeID+"/maxresdefault.jpg)"});
      });
    });
  </script>

  <!-- <h2 class="blue">Tutorial category goes here</h2> -->
  <div class="vid-wrap">
    <div class="vid">
      <a href="https://www.youtube.com/watch?v=kobOm8S28YE&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="kobOm8S28YE"></a>

      <div class="video-text">
        <h4>IAM Professional Introductory Tour</h4>
        5:06
      </div>
    </div>

    <div class="vid-desc">
      An introductory tour of Investment Account Manager 3 Professional to help you get started with using the program.
    </div>
  </div>

  <div class="vid-wrap">
    <div class="vid">
      <a href="https://www.youtube.com/watch?v=KipZsbu9IjE&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="KipZsbu9IjE"></a>

      <div class="video-text">
        <h4>IAM Professional Home Page</h4>
        4:57
      </div>
    </div>

    <div class="vid-desc">
      A brief review of the Investment Account Manager 3 Professional Home Page features.
    </div>
  </div>

  <div class="vid-wrap">
    <div class="vid">
      <a href="https://www.youtube.com/watch?v=UjRh162lPbo&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="UjRh162lPbo"></a>

      <div class="video-text">
        <h4>IAM Professional Reporting</h4>
        6:25
      </div>
    </div>

    <div class="vid-desc">
      This video tutorial reviews the Investment Account Manager 3 Professional reports and graphs that help you make better investment decisions.
    </div>
  </div>

  <div class="vid-wrap">
    <div class="vid">
      <a href="https://www.youtube.com/watch?v=H8hPrTEF2bk&rel=0&showinfo=0&vq=hd720" class="swipebox-video" rel="H8hPrTEF2bk"></a>

      <div class="video-text">
        <h4>IAM Professional Allocations</h4>
        8:31
      </div>
    </div>

    <div class="vid-desc">
      A review of the Asset Allocation features provided by Investment Account Manager 3 Professional.
    </div>
  </div>
</article>

<div class="darkgray whitetext footer">
  <article>
    <h2>START YOUR <span class="bluetext">IAM PRO</span> <a href="download-iam-pro.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>