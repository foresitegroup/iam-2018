
<?php
$PageTitle = "Maintenance Releases";
include "header.php";
?>

<div class="darkgray whitetext mb">
  <article>
    <h1>MAINTENANCE RELEASES</h1>
  </article>
</div>

<article>
  <strong>Investment Account Manager 3 Individual: release 3.3.2</strong>
  <ul>
    <li>corrected display in the ledger to show the correct unit price for spin-off records.</li>
    <li>corrected benchmarks program to show the 7Twelve index after it is updated.</li>
    <li>modified QuoteMedia Data for proper pricing, dividends when incomplete, incorrect data included in price/data update file.</li>
    <li>modified broker OFX import for bonds not defined correctly in OFX data file.</li>
    <li>modified broker OFX import file so records are properly labeled as "Exercised" instead of "Exercise" for broker file error.</li>
    <li>modified OFX import to verify maturity date and the interest rate are added to the current asset library for bonds.</li>
    <li>modified database records so "A" tags were removed from transactions that had been sold so spin-offs are identified easier.</li>
    <li>modified csv transactions import to account for changes by Schwab for file format and missing header to automatically identify.</li>
    <li>added add'l option activity to the Quicken QIF import function.</li>
    <li>added default import choice for StockMarketEye transaction file imports.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.3.1</strong>
  <ul>
    <li>changed the performance report and the summary report to allow for more than 10 indices to be listed on the reports.</li>
    <li>changed Quotemedia data feed for new delivery method of S&P sector for common stocks.</li>
    <li>changed csv import program to create add'l internal record when importing a 'transfer-in' record.</li>
    <li>changed import of creating new portfolio using ofx/qfx files to allow user to add current cash/money market balance as part of portfolio setup.</li>
    <li>improved Quicken .qif import for creating a new portfolio / importing of subsequent .qif file activity.</li>
    <li>corrected Transfers Audit Report to include user transactions notes.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.3.0</strong>
  <ul>
    <li>changed mutual fund and exchange traded fund data updates to use new QuoteMedia data delivery service.</li>
    <li>changed historic import when creating a new portfolio with CSV files to ignore cash offsets, allowing user to add cash balance at the end of import process.</li>
    <li>corrected batch reporting to show adjusted values for benchmark prices on the performance reports.</li>
    <li>corrected error to update automatically benchmark returns when month-end historic prices are added.</li>
    <li>corrected error on IAM home page when returns are automatically updated when month-end historical prices are added.</li>
    <li>corrected CSV import of assigned and exercised options.</li>
    <li>corrected Appraisal Report to always show the second heading on the home page if the report is for an "as-of-date".</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.9</strong>
  <ul>
    <li>corrected error in the price import which caused a duplicate symbol error.</li>
    <li>corrected QuoteMedia update of all securities to update the PE values that were missed if the user has more than 100 securities.</li>
    <li>corrected error that occurred when selecting Schwab in the CSV import of transactions.</li>
    <li>corrected error with column headers when switching between Schwab Institutional and Schwab Individual in the CSV import of transactions.</li>
    <li>corrected as-of-date reporting error for 'Buy to Cover' activity to properly show if an opening sale exists after the as-of-date.</li>
    <li>corrected benchmark indices form so that it automatically updates the benchmark returns when downloading new/prior history.</li>
    <li>corrected benchmark indices form so that it updates all previous adjusted prices automatically when updating returns.</li>
    <li>corrected performance report to recall user default to 'show subtotals'.</li>
    <li>corrected transactions ledger to properly filter security transactions if there is a parenthesis in the security name.</li>
    <li>updated program forms to reflect copyright 2023.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.8</strong>
  <ul>
    <li>added to the import prices program so that it will allow the option code to be used as the symbol instead of the symbol created by IAM.</li>
    <li>added option fields when creating historic prices in all programs that create historic prices.</li>
    <li>added report option for 'current only' to Transactions Activity report.</li>
    <li>added Schwab Institutional import based on the headers to the CSV import program.</li>
    <li>modified Schwab Institutional import to not include "Auto Bank Sweep" transactions.</li>
    <li>modified historic asset library export to use the full 21 character option symbol instead of the short symbol.</li>
    <li>modified .csv import so if a user finds the correct preferred symbol, the program will change all of those symbols in the import.</li>
    <li>modified .csv import program to recognize a MoneyLink transfer as an ACH withdrawal.</li>
    <li>corrected IAM home page to properly graph last 12 quarters for Summary Tab | Performance Graph.</li>
    <li>corrected transactions entry ledger for missing variable when selecting from the IAM home page.</li>
    <li>corrected delete of a return of capital transaction to properly restore original lots without rounding errors.</li>
    <li>corrected .csv import file for proper date order when handling both opening sale and closing buy on same day.</li>
    <li>corrected .csv import file to handle assigned puts with multiple opening sales records.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.7</strong><br>
  <ul>
    <li>added to home page | portfolio summary tab the option to show a line graph depicting the portfolio performance for user defined date ranges: year to date, last year, last 12 months, last 12 quarters, last 12 years.</li>
    <li>expanded available thresholds for defining Small Capitalization Parameter to 2000 ($2 billion).</li>
    <li>corrected security ledger when filtered by individual security and inability to properly select another from drop-down list.</li>
    <li>corrected price updating for index pricing due to recent change by data provider.</li>
    <li>corrected import of a csv file to properly process 'foreign tax paid'.</li>
    <li>corrected portfolio performance report for displayed values when a spinoff occurs within the report range.</li>
    <li>updated copyright to reflect 2022.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.6</strong><br>
  <ul>
    <li>added reporting option for Level 1 Allocation by Stock Sector, included additional user option to print Stock / Fund Sector Analysis report (cost / gain_loss).</li>
    <li>added memory variable to recall last directory location when importing transactional csv files.</li>
    <li>added symbol to name dropdown in transactions ledger when selecting to filter by individual security.</li>
    <li>changed naming of Stock and Fund Allocation by Sector report to Stock / Fund Sector Analysis report,  moved this report to group with portfolio allocation and fund objective reports.</li>
    <li>changed Transactions Activity Report | Transfers to show transfer value in place of original cost basis.</li>
    <li>corrected Appraisal Report 'Cost Yield' calculation for cash equivalents (C), cash money market fund types (M).</li>
    <li>corrected Home Page | Positions tab | % Gain/Loss calculation for options (O) when both long and short held.</li>
    <li>corrected portfolio performance returns table to properly re-derive prior month returns when deleted and re-adding.</li>
    <li>corrected T Rowe Price account download access for changes made by TRP.</li>
    <li>corrected error for historical price library and user defined choice for pricing source.</li>
    <li>corrected pricing issues for changes implemented by Yahoo! Finance.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.5</strong>
  <ul>
    <li>added reporting option to Portfolio Summary Report to report by Symbol.</li>
    <li>added reporting option to Home Page | Portfolio Summary Tab to filter/sort by Symbol.</li>
    <li>added 'Day Value Change' reporting option to Home Page | Positions Tab.</li>
    <li>added 'Manual Entry' option when creating historical price dates.</li>
    <li>corrected error in creating historic price library dates.</li>
    <li>corrected reporting function to show historic as-of-date Level 1 Allocation Rebalancing for fund investment objectives.</li>
    <li>corrected reporting function to show historic as-of-date Fund Investment Objectives.</li>
    <li>corrected reporting function to show historic as-of-date Stock and Fund Allocation by Sector.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.4</strong>
  <ul>
    <li>added daily and historical QuoteMedia pricing for Bitcoin / Cryptocurrency.</li>
    <li>modified Schwab transactional OFX downloads so users can once again automatically download account data.</li>
    <li>modified Allocation Rebalancing Level 1 Report to allow, when multiple portfolios selected, the ability to show security details by asset class.</li>
    <li>corrected error in creating a new historic price library, when entering and then cancelling the historic date entry.</li>
    <li>corrected error in restore function and recreating user defined preferences table.</li>
    <li>corrected csv price file import.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.3</strong>
  <ul>
    <li>modified Schwab transaction csv import file to properly handle margin interest with offsetting deduction.</li>
    <li>modified Schwab transaction csv import file to properly handle fund gain distributions.</li>
    <li>modified Vanguard download for additional changes made by Vanguard for permitted user access.</li>
    <li>modified historic price download functions for recent file formatting change of received QuoteMedia data.</li>
    <li>corrected batch reporting | holdings summary report error.</li>
    <li>corrected portfolio performance report for [ ] include sub-totals for tender/exchange activity and resulting portfolio return.</li>
    <li>corrected level 2 | sector allocation report for missing mutual funds and exchange traded funds.</li>
    <li>corrected 'find next' function on IAM home page after a user transaction edit/save.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.2</strong>
  <ul>
    <li>added functionality to Benchmark Indices Return tab to allow for export of stored monthly data results.</li>
    <li>added functionality to Portfolio Performance Return tab to allow for export of stored monthly data results.</li>
    <li>added sort ability to Portfolio Holdings Report to allow sort by either 'Percent Portfolio' or by 'Security Name'.</li>
    <li>added to Historic Prices | Edit Tab a 'lookup link' to QuoteMedia Historical prices website page.</li>
    <li>added to Tools Menu | Calendar a new print function to show date alerts/notes for user defined date range.</li>
    <li>added / Modified Common Stock Allocation Report by Sector to now include 'sector specific' mutual funds and exchange traded funds.  Renamed report to Stock and Fund Allocation by Sector.</li>
    <li>modified transaction csv import file to include new default format for Charles Schwab brokerage accounts.</li>
    <li>modified broker download to correct for recent change by Vanguard.</li>
    <li>corrected QuoteMedia import for recent change in XML name format when updating mutual funds and exchange traded funds.</li>
    <li>corrected QuoteMedia import for recent change in XML investment objective format when updating mutual funds and exchange traded funds.</li>
    <li>corrected QuoteMedia import for recent change in XML for Canadian mutual funds.</li>
    <li>corrected broker OFX download for accessing duplicate portfolio name.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.1</strong>
  <ul>
    <li>modified OFX broker download from Vanguard for recent changes initiated on the Vanguard site so users can once again automatically download investment activity.</li>
    <li>modified the program which imports OFX files as well as the one that imports transactions so the money market account deposits and withdrawals are not duplicated when the file is received from Vanguard.</li>
    <li>modified bank transactions that show as OTHER in the Vanguard OFX file. Changed them so they are not automatically added to the records to post.</li>
    <li>modified the number of fields in the "Import Transactions CSV" download screen to have more fields on the screen.</li>
    <li>modified the benchmark indices form so the last date updated is also checked when updating benchmark values.</li>
    <li>modified the update for the 7Twelve values to the historic asset library if the 7Twelve index is one of the benchmarks indices.</li>
    <li>modified the bond preference screen to the Import Positions CSV program if a bond is being imported.</li>
    <li>corrected the program that gets historic asset prices so that any securities that are flagged to not get online prices will just bring over the price from the current asset library instead writing over the price.</li>
    <li>corrected the error that caused the program to give an error rather than open when the user entered their password and pressed the "Log In" button.</li>
    <li>corrected the error that caused the post button to not always work on the import transactions form.</li>
    <li>corrected transactions in any OFX file that has been downloaded or is being imported to make sure that options that are showing they are being assigned when they should really should be exercised to exercised.</li>
    <li>corrected the performance report where subtotals were causing a numeric overflow.</li>
    <li>corrected the problem when importing a transactions csv file and opening the home page after adding securities to the current asset library.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 Individual: release 3.2.0</strong>
  <ul>
    <li>added new user option to show the symbol on the Portfolio Performance Report.</li>
    <li>added to the Portfolio Performance Report IRR by asset type sub totals.</li>
    <li>added new user option to show fund category subtotals on the Fund Investment Objectives Report.</li>
    <li>added code to prevent users from saving the Copy/Combine portfolios if no new portfolio name is entered.</li>
    <li>modified historical pricing due to changes made by Yahoo! Finance and historical index pricing.</li>
    <li>modified all of the URL's to start with HTTPS that are sent to Quote Media.</li>
    <li>corrected "as of date" reports to not show transactions that were transferred into the portfolio after the "as of date".</li>
    <li>corrected programs that create records in the historical asset library to also include securities that do not get prices online.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager (IAM) 3 for Individuals - release 3.1.9</strong>
  <ul>
    <li>modified icons to a larger size on the toolbar, added new icon for 'tutorials'.</li>
    <li>corrected error that does FIFO sales in the background to handle opening sales and closing buys.</li>
    <li>corrected error that allows transactions to be sold to be selected if the quantity is negative.</li>
    <li>corrected error for expired options that had multiple opening sales to create the correct records.</li>
    <li>corrected forms that download historic dates to make sure that they ignore securities that have the "no online" price flag set to true.</li>
    <li>corrected "Update Prices" from the toolbar so it doesn't try to update mutual fund prices from Yahoo after updating from QuoteMedia.</li>
    <li>corrected error in program to not open other forms if the portfolios form is open.</li>
    <li>corrected the performance report when the income record is on the same date as the ending sale date and there are transfers in the portfolio.</li>
    <li>corrected renewal program to not subtract a day from the year when renewing the program.</li>
    <li>corrected activity ledger to not give the error "Record out or range" when changing from looking for money market funds in only the current portfolio to looking at all securities.</li>
    <li>corrected broker download for assigned option activity.</li>
    <li>correct broker audit report to allow memo/notes to show full content.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
    <li>updated copyright to reflect 2020.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager (IAM) 3 for Individuals - release 3.1.8</strong>
  <ul>
    <li>added Raymond James to the brokerages that can be used for downloading OFX data.</li>
    <li>modified forms used to download all current positions.</li>
    <li>modified user name and password to always be saved when the account number is saved when downloading all current positions.</li>
    <li>modified all programs that use the QuoteMedia data feed for populating mutual fund and exchange traded fund composition details, no longer providing the fund sector/size level 2 allocations and no longer providing past 1,3,5 and 10 year fund comparison performance due to QuoteMedia-Morningstar pricing/lack of user demand for these details.</li>
    <li>corrected all programs which get historic month-end pricing data when month end date is on a weekend.</li>
    <li>corrected all programs which show those prices not downloaded so they do not show prices downloaded from QuoteMedia.</li>
    <li>corrected the allocation tab for the home page to show the correct columns.</li>
    <li>corrected problem with money market symbol being changed to another symbol in the Quicken import.</li>
    <li>corrected the program which verifies original cost basis of transfers to not combine costs from multiple transfers made on the same day for proper 'as of date' periods.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager (IAM) 3 for Individuals - release 3.1.7</strong>
  <ul>
    <li>added historical prices from QuoteMedia to all screens which download history.</li>
    <li>added function to retrieve matching transfer date historical price for securities when transferred into a new portfolio.</li>
    <li>added a dropdown for "TranfersIn" to the import transactions screen so they can be changed to a different transaction type.</li>
    <li>added function to populate as available tax basis lots when downloading current positions to a new portfolio.</li>
    <li>added function to populate as available the year end history when downloading current positions to a new portfolio.</li>
    <li>added a new form for importing transactions when downloading all transactions from financial institutions.</li>
    <li>added function to the edit transaction screen so historical lots with proper cost basis can be more easily added for a security.</li>
    <li>added new preference setting to include/exclude from the home page display the tabs for Level 2 Allocations and Fundamentals.</li>
    <li>modified sort order of transactions that are transferred into the portfolio.</li>
    <li>modified the refresh button on the positions tab of the home page to show all activity if the dropdown shows "Include All Dates".</li>
    <li>modified the add benchmark index screen to get Canadian symbols from QuoteMedia.</li>
    <li>modified the account information box for a new portfolio and the edit screen of a portfolio.</li>
    <li>modified home page preferences to: never bypass price alerts on startup, always use available broker files for price updating as part of transactional downloads, and to omit the display of the current asset library after price updating.</li>
    <li>modified home page | allocations tab | to default open view to 'breakdown'.</li>
    <li>corrected forms that downloaded current prices to get prices for Canadian symbols.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.6</strong>
  <ul>
    <li>added export/import function for Yahoo! Finance Portfolio.</li>
    <li>added use of 7Twelve Portfolio as a comparison benchmark index.</li>
    <li>changed the programs that get updates from Quote Media to look for :CA instead of .TO at the end of the security symbol.</li>
    <li>changed the performance report to handle dividends and expenses after all shares have been sold.</li>
    <li>changed the ledger to not show "False" as a choice in the securities dropdown if all securities have been sold.</li>
    <li>corrected the ledger to add the offsetting deposit if a withdrawal is made from another MMF.</li>
    <li>corrected the ledger to add the underlying symbol to the name dropdown if an option is added.</li>
    <li>corrected the option code created when a new option is added to the current asset library if the strike price is eight digits instead of seven digits.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.5</strong>
  <ul>
    <li>added for QuoteMedia subscribers a 'Daily Price Change' report to IAM3 Home Page | Portfolio Summary Tab | Snapshot.</li>
    <li>added to IAM Home Page | Positions tab subtotals by asset type with % gain/loss.</li>
    <li>added to IAM File Menu | Preferences | Home Page tab user preferences choice to show as default either the IAM Summary Tab or the IAM Positions Tab.</li>
    <li>added to IAM File Menu | Preferences | Home Page tab user preferences for including recalculate/refresh of Allocations and All Portfolios Tabs when updating market pricing and new portfolio activity.</li>
    <li>removed Google Finance from pricing sources due to errors/changes implemented by Google limiting quote requests.</li>
    <li>corrected Level 2 Sector Allocation reports to list Communication Services in alphabetic order.</li>
    <li>corrected pricing update features to exclude those symbols including invalid # character.</li>
    <li>corrected OFX import to accept transactions without a valid name, allowing user to designate properly prior to import.</li>
    <li>corrected portfolio performance and portfolio summary report for short options with closing activity within selected date range.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.4</strong>
  <ul>
    <li>added new import of transaction file in csv format when creating a new portfolio, or for appending newer activity to an existing portfolio.</li>
    <li>modified sector allocation category/reports/graphs for S&P 500 naming change: Telecommunications Services to Communication Services.</li>
    <li>modified OFX import files to treat a CREDIT as a withdrawal for cash equivalents that are maturing.</li>
    <li>modified password entry field length for up to 30 characters for broker investment account login.</li>
    <li>corrected transaction ledger to save the notes to the portfolio as part of the program that sells all of the transactions as part of a sale.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.3</strong>
  <ul>
    <li>resolved market pricing issues due to changes implemented by QuoteMedia on July 31st, 2018.</li>
    <li>corrected error in fund investment objectives report and fund performance comparison report if only a single investment objective was selected.</li>
    <li>corrected estimated income report/tab display to list estimated income for cash/money market funds.</li>
    <li>corrected combined appraisal report for missing %gain/loss, page two, first security detail line.</li>
    <li>corrected transactions activity ledger, security drop down list, to not show cash/money market funds that have no current balance, if preference is set to 'open only'.</li>
    <li>corrected money market offset issues when using multiple 'closing' transactions for multiple open option positions.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.2</strong>
  <ul>
    <li>modified broker download for Wells Fargo Advisors and Ameriprise Financial Services to accept new required Client User Identification number.</li>
    <li>corrected Portfolio Transfers Report to list all transfers within user defined date ranges.</li>
    <li>corrected formatting issues with the Appraisal Report.</li>
    <li>corrected error in historical price downloads for invalid dates.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.1</strong>
  <ul>
    <li>added more timely prior day mutual fund pricing from QuoteMedia data subscription.</li>
    <li>added price alerts function to QuoteMedia price updating.</li>
    <li>modified broker download for recent changes at Edward Jones.</li>
    <li>modified broker download for recent changes at TIAA-CREF Retirement Services.</li>
    <li>corrected issue with 'closing buys' in transaction activity ledger.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.1.0</strong>
  <ul>
    <li>added to the Asset Library Menu | Update Data | Market Prices from Internet | Pricing Source | the ability to use QuoteMedia (if currently subscribed to this optional data source).  The pricing source selected here will be used as the default for the IAM3 Home Page | Tool Bar Menu | Update Prices choice.</li>
    <li>added prior day mutual fund pricing to QuoteMedia data subscription.</li>
    <li>added Canadian pricing to QuoteMedia data subscription.</li>
    <li>corrected additional issues for using free market pricing from Yahoo! Finance, while still available.</li>
    <li>corrected market pricing for symbols that include a [space].</li>
    <li>corrected an error in Benchmarks Menu | Portfolio Performance Returns.</li>
    <li>corrected user preference for including market pricing as part of home page | refresh command.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.9</strong>
  <ul>
    <li>added functionality to use Google Finance for market pricing.</li>
    <li>corrected additional program errors/error logs as reported by users</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.8</strong>
  <ul>
    <li>added new Help Menu choice 'Learn ... Tutorials'.</li>
    <li>changed broker download access for recent changes implemented by Charles Schwab.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected error in Portfolio Performance Comparison Report/Graph when selecting 'by quarterly' periods.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.7</strong>
  <ul>
    <li>based on user requests, added to Portfolio Performance Report the ability to derive returns for 'Current Only' held securities as available in the prior IAMv2.</li>
    <li>based on user requests, added to Portfolio Reports | Additional Reports the Common Stock Allocation by Sector Report as available in the prior IAMv2.</li>
    <li>changed user preference for settlement date to use 'trade date + 2' for transaction offset activity for recent SEC amendment to shorten by one business day the standard settlement cycle for most broker-dealer securities transactions, effective September 5, 2017.  Previously, the standard settlement cycle for these transactions was three business days, known as T+3.  The amended rule shortens the settlement cycle to two business days, T+2.</li>
    <li>changed QuoteMedia Data Feed for changes in delivery method of data items.</li>
    <li>changed asset type label Corporate Bonds to 'Taxable Bonds'.</li>
    <li>changed Fees and Expenses report to list as 'Tax Withheld' in column header.</li>
    <li>changed File Menu | Preferences | Home Page to allow selection of a user defined benchmark index for Home Page | Portfolio Summary Tab performance comparison.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected error in form when entering exercised put with short sale.</li>
    <li>corrected error in Portfolio Performance Comparison Report to reflect deleted and re-derived returns.</li>
    <li>corrected current asset library to properly display exchange traded fund objectives.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.6</strong>
  <ul>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected additional historical pricing issues due to changes made by Yahoo! Finance.</li>
    <li>corrected Income Received Report for report title issue.</li>
    <li>corrected broker import for duplicate money market offsets popup note message.</li>
    <li>corrected benchmark performance table for manual entry/deriving monthly returns.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.5b</strong>
  <ul>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected edit functions in new ledger entry system.</li>
    <li>corrected ^dji index and option pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected historical pricing due to changes made by Yahoo! Finance.</li>
    <li>corrected Security Basis Report to print user preference | report title.</li>
    <li>changed broker access to T. Rowe Price for new required broker credentials.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.4</strong>
  <ul>
    <li>corrected Microsoft csv file import for missing variable.</li>
    <li>corrected backup feature for change drive location selection.</li>
    <li>corrected historical pricing feature due to changes made by Yahoo! Finance.</li>
    <li>changed broker access to Janney Montgomery Scott for new required broker credentials.</li>
    <li>changed QuoteMedia data feed for changes in delivery of data items.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.3</strong>
  <ul>
    <li>corrected Microsoft csv file import for missing variable.</li>
    <li>corrected delete function for Benchmark Indices Returns Tab.</li>
    <li>corrected activity ledger for showing the cancel/save buttons prior to entering new activity.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.2</strong>
  <ul>
    <li>added to 'download positions' form ability to hide/show user name and password.</li>
    <li>added user preference to 'recall' use of security symbol when entering activity in the new transactions entry ledger.</li>
    <li>added user preference to 'classic ledger' a check box variable to use trade date = settle date.</li>
    <li>added user preference under the file menu | preferences | home page tab to [ ] show current asset library as part of price updating process.</li>
    <li>corrected functionality for posting return of capital activity as part of broker downloads.</li>
    <li>corrected numeric overflow error in Benchmarks / Portfolio returns feature.</li>
    <li>corrected error in Portfolio Allocation Level 1 as of date report for money market funds.</li>
    <li>corrected error in Portfolio Summary as of date allocation graph for money market funds.</li>
    <li>corrected error on Portfolio Performance Report for partially closed option contracts prior to the exercise/assign of any remaining balance.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul><br>
  <br>

  <strong>Investment Account Manager 3 for Individuals - release 3.0.1</strong><br>
  <ul>
    <li>added to QuoteMedia Data Feed the ability to auto-populate mutual fund and exchange traded fund composition details for: asset type, sector and size; investment objective; year to date, 1 year, 3 year, 5 year, 10 year performance; turnover and expense ratio.</li>
    <li>added a 'calc balances' check box to new transactions entry ledger.</li>
    <li>added beta variable to the Appraisal Report when including diversification graphing option.</li>
    <li>added 'strike-out' to broker download forms to identify duplicate activity.</li>
    <li>added to Maturity Schedule red font color for negative values.</li>
    <li>added to Fund Diversifications Report new sector category for Real Estate.</li>
    <li>added to income/reinvestment transaction the ability to also deposit any cash-in-lieu for fractional shares not received.</li>
    <li>added future settlement date activity to show on home page | transactions views.</li>
    <li>corrected broker downloads for recent changes implemented by Wells Fargo Advisors.</li>
    <li>corrected broker downloads for recent changes implemented by First Clearing.</li>
    <li>corrected error when importing Quicken qif files.</li>
    <li>corrected error for open sale option activity to show proper MMF deposit offset in new transactions entry ledger.</li>
    <li>corrected All Portfolios tab for grouping issue.</li>
    <li>corrected All Portfolios tab for auto-refresh after broker downloads.</li>
    <li>corrected Appraisal Report for estimated yield percentage and cost on yield percentage.</li>
    <li>corrected Allocation Summary Level 1 tab report to display properly for target allocations.</li>
    <li>corrected running balance totals in activity ledger for open sale/closing buy transactions.</li>
    <li>corrected additional program errors/error logs as reported by users.</li>
  </ul>
</article>

<div class="gray footer bt">
  <article>
    <h2 class="small">VISIT OUR <a href="video-tutorials.php">TUTORIAL</a> PAGE FOR ADDED SUPPORT</h2>
  </article>
</div>

<?php include "footer.php"; ?>