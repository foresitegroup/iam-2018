<?php
include "login.php";

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$PageTitle = "Registration";
include "header.php";
?>

<article>
  <div style="text-align: center; padding-bottom: 2em;">
    <a href="registration-add.php">Add Registered User</a> |
    <a href="registration-export.php">Export as CSV</a>
  </div>

  <?php
  // Default sorting links
  $nlink = "registration.php?na";
  $elink = "registration.php?ea";
  $slink = "registration.php?sa";
  $plink = "registration.php?pa";
  $rlink = "registration.php?ra";
  $clink = "registration.php?ca";
  $qlink = "registration.php?qa";

  $narrow = "";
  $earrow = "";
  $sarrow = "";
  $parrow = "";
  $rarrow = "";
  $carrow = "";
  $qarrow = "";
  
  // Sort based on the query string
  switch ($_SERVER['QUERY_STRING']) {
    case "na":
      $query = "SELECT * FROM registration ORDER BY lastname ASC";
      $narrow = '<i class="fa fa-caret-up"></i>';
      $nlink = "registration.php?nd";
      break;
    case "nd":
      $query = "SELECT * FROM registration ORDER BY lastname DESC";
      $narrow = '<i class="fa fa-caret-down"></i>';
      $nlink = "registration.php?na";
      break;
    case "ea":
      $query = "SELECT * FROM registration ORDER BY email ASC";
      $earrow = '<i class="fa fa-caret-up"></i>';
      $elink = "registration.php?ed";
      break;
    case "ed":
      $query = "SELECT * FROM registration ORDER BY email DESC";
      $earrow = '<i class="fa fa-caret-down"></i>';
      $elink = "registration.php?ea";
      break;
    case "sa":
      $query = "SELECT * FROM registration ORDER BY serial_number ASC";
      $sarrow = '<i class="fa fa-caret-up"></i>';
      $slink = "registration.php?sd";
      break;
    case "sd":
      $query = "SELECT * FROM registration ORDER BY serial_number DESC";
      $sarrow = '<i class="fa fa-caret-down"></i>';
      $slink = "registration.php?sa";
      break;
    case "pa":
      $query = "SELECT * FROM registration ORDER BY purch_date ASC";
      $parrow = '<i class="fa fa-caret-up"></i>';
      $plink = "registration.php?pd";
      break;
    case "pd":
      $query = "SELECT * FROM registration ORDER BY purch_date DESC";
      $parrow = '<i class="fa fa-caret-down"></i>';
      $plink = "registration.php?pa";
      break;
    case "ra":
      $query = "SELECT * FROM registration ORDER BY support_renewal_date ASC";
      $rarrow = '<i class="fa fa-caret-up"></i>';
      $rlink = "registration.php?rd";
      break;
    case "rd":
      $query = "SELECT * FROM registration ORDER BY support_renewal_date DESC";
      $rarrow = '<i class="fa fa-caret-down"></i>';
      $rlink = "registration.php?ra";
      break;
    case "ca":
      $query = "SELECT * FROM registration ORDER BY renewal_code ASC";
      $carrow = '<i class="fa fa-caret-up"></i>';
      $clink = "registration.php?cd";
      break;
    case "cd":
      $query = "SELECT * FROM registration ORDER BY renewal_code DESC";
      $carrow = '<i class="fa fa-caret-down"></i>';
      $clink = "registration.php?ca";
      break;
    case "qa":
      $query = "SELECT * FROM registration ORDER BY qm_code ASC";
      $qarrow = '<i class="fa fa-caret-up"></i>';
      $qlink = "registration.php?qd";
      break;
    case "qd":
      $query = "SELECT * FROM registration ORDER BY qm_code DESC";
      $qarrow = '<i class="fa fa-caret-down"></i>';
      $qlink = "registration.php?qa";
      break;
    default:
      $query = "SELECT * FROM registration ORDER BY lastname ASC";
      $narrow = '<i class="fa fa-caret-up"></i>';
      $nlink = "registration.php?nd";
  }
  
  $result = $mysqli->query($query);
  
  // Get number of records and reset to beginning
  $num_rows = $result->num_rows;
  ?>

  <div style="text-align: center; font-weight: bold; padding-bottom: 2em;">Number of registered users: <?php echo $num_rows; ?></div>

  <form action="registration-db.php?a=deletemany" method="POST">
    <table cellspacing="0" style="width: 100%;" id="reg-table">
      <tr class="sort">
        <td><input type="submit" name="submit" value="DELETE"></td>
        <td>&nbsp;</td>
        <td><a href="<?php echo $nlink; ?>">Name <?php echo $narrow; ?></a></td>
        <td><a href="<?php echo $elink; ?>">Email <?php echo $earrow; ?></a></td>
        <td><a href="<?php echo $slink; ?>">Serial<br>Number <?php echo $sarrow; ?></a></td>
        <td><a href="<?php echo $plink; ?>">Purchase<br>Date <?php echo $parrow; ?></a></td>
        <td><a href="<?php echo $rlink; ?>">Renewal<br>Date <?php echo $rarrow; ?></a></td>
        <td><a href="<?php echo $clink; ?>">Renewal<br>Code <?php echo $carrow; ?></a></td>
        <td><a href="<?php echo $qlink; ?>">QuoteMedia<br>Code <?php echo $qarrow; ?></a></td>
      </tr>
      <?php
      while($row = $result->fetch_array(MYSQLI_BOTH)) {
        $pdate = ($row['purch_date'] != "") ? date("n/j/y", $row['purch_date']) : "";
        $sdate = ($row['support_renewal_date'] != "") ? date("n/j/y", $row['support_renewal_date']) : "";
        ?>
        <tr>
          <td style="text-align: center;"><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><label for="<?php echo $row['id']; ?>"><span></span></label></td>
          <td style="white-space: nowrap;">
            <a href="registration-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><i class="fa fa-trash"></i></a>
            <a href="registration-edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
          </td>
          <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['serial_number']; ?></td>
          <td><?php echo $pdate; ?></td>
          <td><?php echo $sdate; ?></td>
          <td><?php echo $row['renewal_code']; ?></td>
          <td><?php echo $row['qm_code']; ?></td>
        </tr>
        <?php
      }

      $result->free();
      ?>
      <tr class="sort" style="background-color: transparent;">
        <td><input type="submit" name="submit" value="DELETE"></td>
        <td colspan="8">&nbsp;</td>
      </tr>
    </table>
  </form>
<article>

<?php include "footer.php"; ?>