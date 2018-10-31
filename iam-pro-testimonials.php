<?php
$PageTitle = "Testimonials";
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

<div class="sub-header tb-header" style="background: url(images/sub-header-testimonials.jpg);">
  <article class="vert-center">
    WHAT OTHERS ARE SAYING
  </article>

  <?php include "trialbox-pro.php"; ?>
</div>

<div class="gray mb">
  <article class="testihead">
    <div class="two-third">
      <h3>Providing Essential Tools to a Variety of Professional Investors.</h3>
      Our professional users include family offices, independent investment advisors, sophisticated investors, small accounting and law firms, foundations and more. Provided here is a sampling of testimonies we have received.  We're confident you'll be impressed!
    </div>

    <div class="one-third last">
      <ul>
        <li><a href="#family-office">Family Office</a></li>
        <li><a href="#advisors">Advisors</a></li>
        <li><a href="#accounting-firms">Accounting Firms</a></li>
        <li><a href="#privately-held-companies">Privately Held Companies</a></li>
        <li><a href="#non-profits">Non-Profits</a></li>
      </ul>
    </div>

    <div style="clear: both;"></div>
  </article>
</div>

<article class="testi">
  <a name="family-office"></a>
  <h3><strong style="color: #2E65B0;">Family Office</strong></h3>

  <div class="testicolumns">
    <div>"We have been using IAM for many years to manage our family office portfolios.  It's the most fully-featured package available; no add-ons or work arounds are needed to create reliable reporting.   Our accountants love it and support is very responsive.  We are also impressed with the regular enhancements.  Quality control is evident; we've never had a problem with a new release." &mdash; Edgar</div>

    <div>"I am the Director of Tax and Accounting at a family office which manages over 15 brokerage accounts.  We switched to Investment Account Manager Pro at the beginning of 2015 and have been very pleased with the product.  We transitioned from a much more expensive program to find the IAM is not only a better value but it's an overall a superior product across the board.  It may not be applicable to a large financial institution, but it meets everything we were looking for in terms of financial management software." &mdash; Orrin</div>

    <div>"I use IAM3 Professional to track stock and bond accounts for a Family Office. I find the product to be a very cost-effective solution for reporting and monitoring our various holdings.  I would highly recommend this solution to institutions that need a basic but robust portfolio management solution for a nice value." &mdash; Andy</div>

    <div>"I have been using the Investment Account Manager since its beginning. The displays are perfect, concise and provide exactly the information I needed to run my firm.  Now that I am retired I still use Investment Account Manager Professional for my portfolios, my children's and my grandchildren's portfolios.  I am very comfortable with the program and especially enjoy its straight forward design." &mdash; Frank</div>

    <div>"We're running fairly small equity portfolios for a group of family owned insurance companies and found the tracking and reporting tools to be very efficient and cost effective compared to other solutions." &mdash; Roger</div>

    <div>"IAM3 Professional is really great at keeping track of return of capital and stock split activities.  We used Quicken before IAM Pro and it was never good at ROCs.  The IAM3 Professional report capability is also better than Quicken.  We get professional looking reports." &mdash; Debbie</div>

    <a href="images/iam-pro-testimonials1.jpg" class="swipebox"><img src="images/iam-pro-testimonials1.jpg" alt=""></a>
  </div>

  <hr>

  <a name="advisors"></a>
  <h3><strong style="color: #2E65B0;">Advisors</strong></h3>

  <div class="testicolumns">
    <div>"This is a great tool at a reasonable cost for a 1 man Trading Company such as myself.  4 Stars. Tech Support is awesome and I suggest anyone starting their own firm to consider IAM3 Pro.  You won't be disappointed." &mdash; James</div>

    <div>"IAM Pro generates many clear, concise easy to read reports that clients truly appreciate." &mdash; Janet</div>

    <div>"I've been pleased with Investment Account Manager Professional, first for my own portfolio, and now for my clients'.  I can get accurate ROR stats at the asset, account and portfolio level, and can add mutual fund composition data to see exactly the portfolio composition. I especially like that I can download from custodians for held away accounts on which I advise. The best, most cost effective, solution for an independent RIA that I've come across." &mdash; Randy</div>

    <div>"I was a Senior Portfolio Manager for a large bank for almost 18 years.  During this time we used several professional software applications. Since then I have started my own independent Registered Investment Advisory, focused on customized portfolio management for private clients.  We have been shopping for portfolio management software which would interface with our custodian and give us the ability to analyze portfolios.  I have been extremely impressed with Investment Account Manager Professional.  It has all the capabilities I had while working for a multi-billion dollar bank!  It is easy to use and has clearly been designed by people who understand basic portfolio management needs.  My client presentations are crisp and concise, very professional looking.  After reviewing several similar offerings in the marketplace, all significantly more expensive and complex, we have decided IAM Professional offers all the functionality we need, for a significantly lower cost!" &mdash; Mike</div>

    <div>"Best software available! And I tried a handful of them. User friendly and the support staff is outstanding. Gets the job done with ease of effort..."  &mdash; Ernie</div>

    <div>"I have been using Investment Account Manager (first Individual version, and now the professional version) for over 20 years.  I have watched it evolve and change through the years always satisfactorily.  When technical assistance is needed they are both friendly and knowledgeable and extremely helpful.   I cannot recommend them highly enough for it is truly a valuable program for my business, and I will continue to use them well into the future. " &mdash; Bill</div>

    <div>"I've used the IAM investment software since the late 1990s. First use was with my personal portfolios; then started with my investment clients. Since that initial use of IAM, I've never felt the need to seriously look for a substitute.  The software has grown with my business. Besides being very intuitive, there are updates which truly improve its use . . . not simply look better. Perhaps that's because the software designers are also investment professionals.  Any submitted questions or comments have always received a timely response. Thank you IAM." &mdash; Dale</div>

    <div>"IAM3 Professional is an amazing tool to customize portfolio allocations. I can create new models with ease to fit each of my client's unique financial needs." &mdash; Kristian</div>

    <div>"IAM3 is a great program providing excellent history as well as attractive, informative portfolio reports." &mdash; Kathy</div>

    <div>"IAM Professional offers a huge set of institutional-grade portfolio management capabilities at very reasonable cost.  The software allows advisors to look professional, and save time, money, and effort all at once.  As a former institutional investment manager on large mutual funds, I can attest that software approaching this level of sophistication and flexibility costs several times more than the price of IAM.  The report-generating power of the software is a significant driver of the total value proposition.  Dozens of pre-set reports cover practically every conceivable need, and the ability to customize output makes the software even more flexible - and valuable.  IAM eliminates the need for most additional excel number crunching.  This saves time, effort, helps eliminate errors, and lets an advisor actually focus on core investing functions. On their own, these reporting functions are very useful. In aggregate, however, I believe that they are "best in class". In particular, the benchmarking, indexing, allocation/rebalancing, and ability to analyze mutual fund holdings, all provide portfolio-level insights that are valuable and hard to duplicate.  In fact, I haven't found anything like this combination available in one product.  As a desktop application, implementation is simple and inexpensive.  More importantly, client data is as a secure as I care to make it.  I have no worries that a cloud-based provider has been hacked and client account data compromised -- always a risk in these days of sophisticated cyber-attacks.  For all its complexity and benefits, the software is quite easy to use.  Customer support is remarkably responsive and highly attuned to the needs of advisors as sophisticated investors.  Anyone managing client accounts of any size or number would be well advised to use IAM Professional." &mdash; Adam</div>

    <div>"I've used IAM for several years now, first as an individual and now as a registered investment advisor (Pro version).  Foremost, I've appreciated the personal technical support whenever I've had an issue. They have been extremely responsive and very considerate , especially since the issue is usually my lack of technical knowledge.  From the program-side, the Pro version has maintained client account information very accurately. The wide variety of reports allow me to present clients with helpful views into their portfolios/tax situations.  Brokerage downloads are excellent with expansive compatibility across a multitude of financial institutions.  Coupled with the data feed from QuoteMedia, IAM Pro has been excellent and an invaluable part of my business. " &mdash; Andrew</div>

    <div>"Investment Account Manager Professional is user friendly and easy to manage.  Ability to handle numerous client accounts with relative ease. Software allows you to have total control from downloading account activity, to maintaining accounts and generating reports." &mdash;  Laura</div>

    <div>"Investment Account Manager Pro (IAM) is a great software package...especially for the price. If your custodian does not have the ability to download directly to the software, the data entry / program is very user friendly. The reporting capabilities are impressive with a lot flexibility. The best part about IAM is not the program, as good as it is, but the customer service. Our questions are always answered in a timely manner, and there is always follow-up on the part of the IAM Team to make sure everything is running the way it should for us. They go above and beyond to make sure you are completely satisfied. If you are looking at a performance reporting package, and are unsure which one to choose, we highly recommend giving IAM a try. Not only will you be impressed with the program, but you will be blown way with the customer service and how hard they try to make your life easier with IAM. We are now in our third year with using this software and have no intention of using anything different." &mdash; John</div>

    <div>"I have a small Investment Advisory Business with 100+ accounts. I wanted a program that downloaded my daily transactions, produced batch quarterly reports and was easy to use. I like the straight forward method offered by Investment Account Manager Professional that allows me to navigate between clients and reports with little, if any, training. Nearly all the functions of IAM Professional are intuitive and the onboard help screens are one of the best I seen. I am very happy with IAM Professional." &mdash; Frank</div>

    <div>"I am very pleased with my experience with 'Investment Account Manager Pro'. I am owner of a small RIA firm and cost is a major factor in everything we do. However, IAM Pro gives me everything I need and more to service my clients with accurate reporting, clean and crisp reports, easy navigation, and excellent customer support. In fact, I believe this program outperforms programs costing thousands of dollars more.  Report flexibility and variety of reports is outstanding. The reports are easy to read and understand and are a valuable tool when meeting with clients. There are also many reporting features to help the advisor not only manage clients' accounts but also assist in managing your business. Whether you are a small firm as I am or a larger firm, you owe it to your clients to check this software out." &mdash; Bob</div>

    <a href="images/iam-pro-testimonials2.jpg" class="swipebox"><img src="images/iam-pro-testimonials2.jpg" alt=""></a>
  </div>

  <hr>

  <a name="accounting-firms"></a>
  <h3><strong style="color: #2E65B0;">Accounting Firms</strong></h3>

  <div class="testicolumns">
    <div>"Prior to using IAM3 Professional to manage our investments, we were paying $6,000 per year for a program that was not being updated.  For a substantially less annual fee, we get a more modern program with many features that our old program did not have and we are provided with updates several times each year.  We are very thankful to have found this alternative. Transitioning from our old program to IAM3 Professional was very easy.  I was able to download all historical transactions with a touch of a button.  IAM3 Professional was intuitive making it easy to learn.  I find IAM3 Pro to be very accurate. The number of reports they offer is adequate for our use.  I plan to renew annually for many years to come." &mdash; Candace</div>

    <div>"I have a small office that monitors brokerage statements for 30+ accounts.  I've been using this program for a few years now and I find it very easy to use and it accomplishes everything I need.  On the off chance customer service is needed they are very quick to respond and always find the solution.  The few times that I did have questions, the support team was the best. They answered questions right away, whether it was by phone or email. I have never had customer service support like that before.  Having multiple accounts, with many varying investments, I needed a program that would be accommodating to all my needs and I have found the IAM Professional to be all that I could have asked for." &mdash; Liane</div>

    <a href="images/iam-pro-testimonials3.jpg" class="swipebox"><img src="images/iam-pro-testimonials3.jpg" alt=""></a>
  </div>

  <hr>

  <a name="privately-held-companies"></a>
  <h3><strong style="color: #2E65B0;">Privately Held Companies</strong></h3>

  <div class="testicolumns testitwo">
    <div>"IAM3 Pro has been a great tool to help us manage our various investment portfolios. It's very user friendly. For those few times I've run into difficulty, technical support has been great. The reports are invaluable to our finance committee. We've been a customer for many years and will be for many more." &mdash; Susie</div>

    <div>"I have been using Investment Account Manager Professional for several years and couldn't be more satisfied with the experience.  The product is very stable, intuitive and offers everything needed to track, analyze and maintain investment portfolios.  Reports are concise, information is easily accessible and no situation seems to have been overlooked.  On those infrequent times when I encounter a problem or have a question, the support staff has been wonderful in providing very timely follow ups and very concise diagnostic assistance.   I couldn't be more pleased with the product." &mdash; Steve</div>
  </div>

  <hr>

  <a name="non-profits"></a>
  <h3><strong style="color: #2E65B0;">Non-Profits</strong></h3>

  <div class="testicolumns testitwo">
    <div>"We have the capacity to verify our portfolio manager's performance numbers against indices of our choosing allowing us to monitor fund performance and give us greater confidence in our Portfolio Managers." &mdash; Joan</div>

    <div>"This was the only software that we found that allowed us to short sale and buy and also provide all the reports that we need on a daily basis." &mdash; Cathy</div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR <span class="bluetext">IAM PRO</span> <a href="download-iam-pro.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>