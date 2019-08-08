<?php
include "login.php";

$PageTitle = "Downloads";
include "header.php";
?>

<article>
  <div style="text-align: center; padding-bottom: 2em;">
    <strong>Export CSV</strong><br>
    <form action="downloads-export.php" method="POST">
      <input type="text" name="start_date" id="startdate" placeholder="Start Date" autocomplete="off"> &nbsp; 
      <input type="text" name="end_date" id="enddate" placeholder="End Date" autocomplete="off"> &nbsp; 
      <input type="hidden" name="database" value="downloads">
      <input type="submit" name="export" value="EXPORT">
    </form>
    To export all, leave fields blank.
  </div>

  <?php
  // Default sorting links
  $nlink = "downloads.php?na";
  $elink = "downloads.php?ea";
  $dlink = "downloads.php?da";

  $narrow = "";
  $earrow = "";
  $darrow = "";
  
  // Sort based on the query string
  switch ($_SERVER['QUERY_STRING']) {
    case "na":
      $query = "SELECT * FROM downloads ORDER BY lastname ASC";
      $narrow = '<i class="fa fa-caret-up"></i>';
      $nlink = "downloads.php?nd";
      break;
    case "nd":
      $query = "SELECT * FROM downloads ORDER BY lastname DESC";
      $narrow = '<i class="fa fa-caret-down"></i>';
      $nlink = "downloads.php?na";
      break;
    case "ea":
      $query = "SELECT * FROM downloads ORDER BY email ASC";
      $earrow = '<i class="fa fa-caret-up"></i>';
      $elink = "downloads.php?ed";
      break;
    case "ed":
      $query = "SELECT * FROM downloads ORDER BY email DESC";
      $earrow = '<i class="fa fa-caret-down"></i>';
      $elink = "downloads.php?ea";
      break;
    case "da":
      $query = "SELECT * FROM downloads ORDER BY download_date ASC";
      $darrow = '<i class="fa fa-caret-up"></i>';
      $dlink = "downloads.php?dd";
      break;
    case "dd":
      $query = "SELECT * FROM downloads ORDER BY download_date DESC";
      $darrow = '<i class="fa fa-caret-down"></i>';
      $dlink = "downloads.php?da";
      break;
    default:
      $query = "SELECT * FROM downloads ORDER BY download_date DESC";
      $darrow = '<i class="fa fa-caret-down"></i>';
      $dlink = "downloads.php?da";
  }
  
  $result = $mysqli->query($query);
  
  // Get number of records and reset to beginning
  $num_rows = $result->num_rows;
  ?>

  <div style="text-align: center; font-weight: bold; padding-bottom: 2em;">Number of downloads: <?php echo $num_rows; ?></div>

  <form action="downloads-db.php" method="POST">
    <table cellspacing="0" style="width: 100%;">
      <tr class="sort">
        <td><input type="submit" name="submit" value="DELETE"></td>
        <td><a href="<?php echo $nlink; ?>">Name <?php echo $narrow; ?></a></td>
        <td>Phone</td>
        <td><a href="<?php echo $elink; ?>">Email <?php echo $earrow; ?></a></td>
        <td><a href="<?php echo $dlink; ?>">Download Date <?php echo $darrow; ?></a></td>
        <td style="text-align: center;">Wants<br>Email</td>
      </tr>
      <?php
      while($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr>
          <td style="text-align: center;"><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><label for="<?php echo $row['id']; ?>"><span></span></label></td>
          <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo date("n/j/y", $row['download_date']); ?></td>
          <td style="text-align: center;"><?php if ($row['uptodate'] != "") echo "Yes"; ?></td>
        </tr>
        <?php
      }

      $result->free();
      ?>
      <tr class="sort" style="background-color: transparent;">
        <td><input type="submit" name="submit" value="DELETE"></td>
        <td colspan="5">&nbsp;</td>
      </tr>
    </table>
  </form>
<article>

<?php include "footer.php"; ?>