
<?php
$PageTitle = "Using Investment Account Manager 3";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    Using Investment Account Manager 3
  </article>

  <?php include "trialbox-iam.php"; ?>
</div>

<article>
  <h1><a href="https://www.aaii.com/journal/article/using-investment-account-manager-3">Article Published by AAII</a></h1>
  <h2>by Matthew K. Willms</h2>

  <em>The co-founder of Quant IX Software details the features of his Investment Account Manager 3 Individual.</em><br>
  <br>

  Investment Account Manager 3 Individual (IAM3) is a Windows desktop-based investment software program that provides investment tracking and portfolio management tools. Designed by professional money managers and used by investors worldwide since 1985, IAM3 will also run on Mac systems using Windows-emulating software. The software activation key price for Investment Account Manager 3 Individual is $129 and includes the QuoteMedia data feed for common stock fundamental and exchange-traded/mutual fund composition details.<br>
  <br>

  Investment Account Manager 3 Individual allows users to manage single or multiple investment portfolios to provide unified account management. These can include personal taxable and non-taxable accounts, spousal accounts, joint accounts, children accounts (such as trusts and educational) and other investment accounts you may own. A portfolio is the list of the investment securities owned in a specific investment account, with each portfolio including one or more of multiple asset types: money market funds, cash equivalents, stocks, mutual funds, exchange-traded funds (ETFs), bonds, options and other investment types. Transactions (purchases, sales, reinvestments, income, mergers, spin-offs, etc.) are tracked and maintained separately for each portfolio. At any time, portfolio investment transactions can be reviewed to inform you of current market values, asset positions, useful tax information, etc., on a stand-alone account basis; accounts can also be grouped together for aggregate totals.<br>
  <br>

  This article covers features for creating a new portfolio, reviewing portfolio holdings, defining portfolio allocation targets to identify rebalancing needs, and measuring performance with IAM3. For more information on how Investment Account Manager compares to other portfolio tracking software, check out <a href="http://www.aaii.com/computerized-investing/article/the-top-portfolio-management-software-2016">this</a> CI article.<br>
  <br>

  <h3>Creating a New Portfolio</h3>
  Users of Investment Account Manager have a number of ways to create their investment portfolios (Figure 1). These include the use of a guided "Portfolio Setup Wizard" to:<br>
  <br>

  <ul>
    <li>Download current holdings from their online brokerage account,</li>
    <li>Import a Microsoft Excel or CSV file of current tax lot holdings, or</li>
    <li>Use a quick setup form to manually enter positions.</li>
  </ul>
  <br>

  Further, IAM3 allows users to create portfolios by importing data from outside applications such as Quicken or Captools. For investors who want a complete accounting of all past investment activity, Investment Account Manager 3 Individual includes the capability for manually entering all historical activity.<br>
  <br>

  <strong style="font-size: 80%;">Figure 1</strong><br>
  <img src="images/aaii-article-figure-1.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Located on the IAM3 Tool Bar, users select the Portfolio Setup Wizard, enter a portfolio name, and then select the radio button to "download current holdings from your online brokerage account." Users are prompted to select their online broker from a lengthy list of available financial institutions provided by Investment Account Manager. (Note: If your financial institution is not listed, the developers of Investment Account Manager will work directly with you to add your financial institution if possible.) After entering the associated login name and password, users select the matching account number (if more than one account with the broker), and then select the option to "download positions." IAM3 downloads all current holdings for the matching investment account and lists these positions for review. Since online brokers do not provide the actual cost basis of existing holdings in OFX (Open Financial Exchange) download functions, IAM3 enables users to select each position to edit the cost basis details by each unique lot to reflect accurate tax basis acquisition date and cost basis. This is a necessary step for efficient portfolio management.<br>
  <br>

  For example, in Figure 2, after downloading current holdings from the online broker, IAM3 shows 100 shares of Salesforce.com (<a href="http://app.quotemedia.com/quotetools/clientForward?targetURL=http://www.aaii.com/quote/symbol/CRM">CRM</a>) downloaded from the financial institution. Using the Edit Basis feature, users can identify the two unique lots of Salesforce.com stock for accurate tax lot accounting. Investors can refer to their most recent brokerage statement for these tax lot details.<br>
  <br>

  <strong style="font-size: 80%;">Figure 2</strong><br>
  <img src="images/aaii-article-figure-2.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Users would repeat this process for each position downloaded from their financial institution, and once complete, users will have a tax-accurate portfolio reflecting their current holdings.<br>
  <br>

  The final step in using the Portfolio Setup Wizard is to establish a cash/money market fund if you have this in your investment account; this cash/money market fund is used for offsetting other investment activity such as purchases, sales and income activity. You can easily create this cash/money market fund to reflect your current balance, using the symbol as provided by your broker or creating a symbol for this purpose. For example, in the case of The Vanguard Funds, the symbol 'VMMXX' is commonly used for the brokerage cash/money fund. Or, users can create any symbol they like, 'CASH', 'CASH$1', etc. Once you've completed this step, you will have completed the wizard setup process. Investment Account Manager 3 populates the IAM3 Home Page reflecting data from the Portfolio Setup Wizard.<br>
  <br>

  Going forward, users can utilize the broker download features to download subsequent activity from their online broker for new purchases, sales, income and other activity to keep their portfolio up-to-date with ongoing activity reflecting accurate tax basis and filing requirements.<br>
  <br>

  <h3>Reviewing Portfolio Holdings</h3>
  Once a portfolio has been created, Investment Account Manager 3 Individual provides a comprehensive set of features for reviewing portfolio data. One such feature is the IAM3 "Home Page" display that provides a wealth of information for the currently open portfolio as selected under the portfolios list, and also as shown in the upper left-hand corner of the main title bar (Figure 3).<br>
  <br>

  <strong style="font-size: 80%;">Figure 3</strong><br>
  <img src="images/aaii-article-figure-3.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Under the left-hand column, the IAM3 Home Page lists all the portfolios currently being managed and tracked within Investment Account Manager. By selecting any portfolio listed in this left-hand column, users can easily switch between portfolios; the home page repopulates all tab views with the appropriate portfolio data. There are 10 tab views available for reviewing the current portfolio data:<br>
  <br>

  <ul>
    <li><strong>Portfolio Summary:</strong> This summary tab is divided into four areas. The Portfolio Snapshot area gives a useful summary of essential information, such as current portfolio market value, unrealized gains/losses of your holdings, year-to-date activity, holdings listed by percentage of portfolio, and listing of recent transaction activity.</li>
    <li><strong>Positions:</strong> This tab accumulates holdings, segregated by asset type, and values a portfolio based on current market prices.</li>
    <li><strong>Transactions:</strong> This tab organizes and lists the past investment transactions activity entered into the current portfolio.</li>
    <li>
      <strong>Allocations:</strong> The Allocations tab provides a summary allocation view for the portfolio, identifying allocation by asset class, sector, size and investment objective. This view is segregated to list allocation rebalancing by either Level 1 or Level 2.
      <ul>
        <li>Level 1: This allocation level does not use fund compositions by percent of class, sector and size when deriving current allocations.</li>
        <li>Level 2: This allocation level will use the portfolio compositions of any funds (mutual funds and exchange-traded funds) held in your portfolio when Investment Account Manager derives asset allocation percentages. This means each fund's proportional impact (amount invested in cash, bonds and stocks, by sector, by size) will be included along with any individual holdings of each asset type held outside of your funds, providing a total allocation analysis of your portfolio.</li>
      </ul>
    </li>
    <li><strong>Income Received:</strong> This tab lists the investment income and capital gain distributions received by securities in the current portfolio, for a date range selected (for example, current month, current quarter, year to date, last year, etc.).</li>
    <li><strong>Realized G/L:</strong> This tab compiles the gain and loss information regarding the sales of securities for a given portfolio, separated based on short-term activity (holding period of one year or less) or long-term activity (holding period longer than one year). As with the Income Received tab, the information displayed can be filtered for a date range selected (for example, current month, current quarter, year to date, last year, etc.).</li>
    <li><strong>Performance:</strong> The Portfolio Performance tab provides a comparison report illustrating and comparing the growth of $100 for the selected portfolio and benchmark indexes. Investment Account Manager 3 includes three common benchmarks: the Dow Jones industrial average, the S&P 500 index and the NASDAQ Composite. Users can select those provided or any user-defined benchmark, up to six total. Benchmarks can be indexes, mutual funds, or exchange-traded funds. Users can filter this tab using stored performance returns for year to date, last year, last 12 months, last 12 quarters or last 12 years.</li>
    <li><strong>Est. Income:</strong> This tab provides an estimate of cash flow for investments held in the selected portfolio, providing a listing of the investment income and unrealized gains and losses for the portfolio holdings.</li>
    <li><strong>Fundamentals:</strong> This tab lists insightful valuation ratios for the currently active portfolio, including ratios for dividend rate, earnings per share, book value per share, cash flow per share, and others.</li>
    <li><strong>All Portfolios:</strong> This final tab summarizes important details for all portfolios being monitored in Investment Account Manager, showing each portfolio's costs and market values.</li>
  </ul>
  <br>

  IAM3 provides more than 50 detailed reports that users can easily select and choose from for reporting on current holdings, unrealized gains/losses, sold positions & realized gains/losses (tax filing), income received (tax filing), capital gain distributions, commissions paid, security allocation, portfolio diversification, portfolio cash flow projections, tax basis, performance measurements, asset maturity schedule, transactions ledger, and more (Figure 4). Furthermore, since IAM3 allows for multiple portfolio management, all reports can be created to collectively report on any combination of investment accounts for viewing aggregated totals.<br>
  <br>

  <strong style="font-size: 80%;">Figure 4</strong><br>
  <img src="images/aaii-article-figure-4.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  <h3>Defining Portfolio Allocation Targets to Identify Rebalancing Needs</h3>
  Two of the most important decisions an investor must make when constructing portfolios are the allocation of the portfolio assets between stocks, bonds, cash and other investments and the diversification of securities within those assets. These decisions will not only determine the risk characteristics of the portfolio, but they often provide the major explanation for the portfolio's return.<br>
  <br>

  All too often, individuals become overweighted in a specific asset class and unknowingly add excessive risk to their portfolio. Investors who understand the importance of asset allocation are able to identify rebalancing changes needed for a healthy and successful portfolio. Portfolio rebalancing refers to the shifting of portfolio funds between the portfolio assets, due to the relative performance between the portfolio assets. Investment funds may be reallocated from overperforming assets into underperforming assets to better align the long-term goals of the portfolio. Investment Account Manager 3 Individual includes tools that allow investors to define portfolio allocation targets and then see current allocations in relation to their targeted goals, identifying any rebalancing needs.<br>
  <br>

  As shown in Figure 5, IAM3 allows users to define the allocation targets for their portfolio by major asset classes, such as cash, fixed income, U.S. stock, international stock and other. Further, for the allocation to U.S. stock, investors assign additional breakdowns by large-cap, mid-cap, and, small-cap stocks. Likewise, the category for "other" can be assigned a further breakdown by: balanced/hybrid, sector/specialty, real estate and undefined.<br>
  <br>

  <strong style="font-size: 80%;">Figure 5</strong><br>
  <img src="images/aaii-article-figure-5.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Once the allocation and diversification targets are set, investors need to monitor their portfolio to gauge how current market valuations are impacting goals and to identify if rebalancing is required.<br>
  <br>

  For example, after updating their investment portfolios with a one-click step using free internet pricing, and then viewing the Allocation Tab on the IAM3 Home Page, users can graphically see their defined allocation target by asset class, their current allocation in the asset class based on current portfolio market values, and then the rebalancing allocation percentage required to better align current allocations with targeted goals (Figure 6). If rebalancing is required, investors should rebalance as possible in non-taxable accounts to avoid tax consequences.<br>
  <br>

  <strong style="font-size: 80%;">Figure 6</strong><br>
  <img src="images/aaii-article-figure-6.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Reviewing the Rebalancing Allocation % column, investors can make necessary rebalancing decisions. For example, based on the degree of under/overweight of the current allocation percentage in relation to the target allocation percentage, investors may decide to rebalance. A common threshold is 5%--that is, when a specific class is under-/over-allocated by 5%, this might signal that rebalancing is required.<br>
  <br>

  Users of Investment Account Manager 3 Individual can further assign allocation targets by stock sector and stock size capitalization. These additional allocation features allow users to not only measure the individual stock holdings that contribute to sector and size, but also to include the proportional impact that each individual mutual fund and exchange-traded fund has invested in a particular stock sector and size. Much like Morningstar's X-Ray analysis, this feature of IAM3 provides a drill-down view of total stock sector and size analysis of your portfolio.<br>
  <br>

  In summary, just as you spread fertilizer over your entire lawn to make it green and growing, proper asset allocation leads to the spreading of your investment dollars so that your portfolio is more evenly balanced and poised to achieve more successful investing results.<br>
  <br>

  <h3>Measuring Performance</h3>
  Investment Account Manager 3 Individual utilizes the internal rate of return (IRR) iterative model for reporting the performance of individual holdings, individual portfolios, combination of securities or combination of portfolios that are being tracked within IAM3. The internal rate of return calculates return for user-defined periods, taking into effect the timing of each cash flow. The model properly weights the timing of cash flows (all additions/withdrawals: buys, sales, income, expenses, return of capital, other fees, etc., for any and all transaction activity within the period) for a portfolio or an individual asset, for a selected date range. Internal rate of return can be equated to the compounded effective interest rate that a savings account would have had to earn in order to reach the portfolios' current present value including all investment flows (purchases, sales, income, interest, reinvestment, etc.), while adjusted for timing of the specific flows.<br>
  <br>

  <strong style="font-size: 80%;">Figure 7</strong><br>
  <img src="images/aaii-article-figure-7.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Further, Investment Account Manager 3 Individual allows users to store performance results for individual portfolios.<br>
  <br>

  These results can be derived and stored for monthly, quarterly or yearly periods (Figure 7). After deriving and storing the 3rd, 6th, 9th, or 12th month of a calendar year, users are asked if they would like to derive the coinciding return for 1st, 2nd, 3rd, or 4th quarter using geometric linking (described below). Likewise, when the 12th month of a calendar year has been derived, users are asked if they would like to derive the coinciding yearly return using geometric linking. Geometrically linking provides a means of smoothing individual period returns and improves the measure of the time-weighted rate of return by geometrically linking interim (subperiod) IRRs:<br>
  <br>

  <ul>
    <li>quarterly geometric linking results:<br>return = [((1+rmo1) * (1+rmo2) * (1+rmo3)) -1] * 100</li>
    <li>yearly geometric linking results:<br>return = [((1+rqt1) * (1+rqt2) * (1+rqt3) * (1+rqt4))- 1] * 100</li>
  </ul>
  <br>

  Further, users can define up to six benchmark indexes for performance comparison purposes (Figure 8). These benchmarks can be defined for actual market indexes (such as the DJIA, S&P 500, NASDAQ), as well as for any exchange-traded fund or mutual fund.<br>
  <br>

  <strong style="font-size: 80%;">Figure 8</strong><br>
  <img src="images/aaii-article-figure-8.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  Once users have stored their portfolio and benchmark index returns, these performance results can be used for deriving comparison returns on the Portfolio Performance Comparison Report. This report illustrates and compares the growth of $100 for the selected portfolio and benchmark indexes (Figure 9). Up to 12 sequential performance period data points can be plotted on this report, that is, any 12 sequential data points (monthly, quarterly or annual periods). Users can also use predefined or custom periods for year-to-date, monthly, quarterly or annual period comparisons.<br>
  <br>

  <strong style="font-size: 80%;">Figure 9</strong><br>
  <img src="images/aaii-article-figure-9.jpg" alt="" style="max-width: 100%; height: auto;"><br>
  <br>

  <h3>Summary</h3>
  Investment Account Manager 3 Individual includes a comprehensive set of tools and features that can help investors make more educated portfolio management decisions. In this article, we've reviewed just a few of these tools and features: creating portfolios, reviewing portfolio holdings, allocation analysis and rebalancing, and measuring performance results with comparison to benchmark indexes. Investment Account Manager does have some limitations that may limit its appeal to certain investors. These include: not offering multi-currency, the inability for automatic free pricing for bond investments (note: bond pricing is available through broker downloading if provided by your financial institution), not designed for network installations, does not keep track of banking credit cards or banking checking accounts, and does not provide technical analysis charts.<br>
  <br>

  Even still, with a large array of the features described in this article, and widespread additional tools, IAM3 Individual provides a centralized desktop-based portfolio management solution for individual investors that can improve the management of their investments, leading to better long-term investing results.<br>
  <br>

  <h3>Demo, Support and Pricing</h3>
  A free, fully functional 90-day demo version of Investment Account Manager 3 Individual is available at <a href="download-iam.php">www.investmentaccountmanager.com</a>. Free technical support is provided to answers any questions you may have during the demo period. There are <a href="iam-tutorials.php">video tutorials</a> for those who want to learn more about how to use the software. Also, any data entered into the demo version will be saved and available if the software activation key is purchased to convert the demo version to the full version of IAM3.<br>
  <br>

  The software activation key price for Investment Account Manager 3 Individual is $129 and includes the QuoteMedia Data feed for common stock fundamental and exchange-traded/mutual fund composition details.  AAII members and Computerized Investing subscribers receive a $20 discount.
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR IAM <a href="download-iam.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>