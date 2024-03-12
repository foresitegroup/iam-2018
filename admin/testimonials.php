<?php
include "login.php";

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$PageTitle = "Testimonials";
include "header.php";

$result = $mysqli->query("SELECT * FROM testimonials ORDER BY submitdate DESC");
?>

<style type="text/css">
  TABLE { width: 100%; font-size: 90%; border-collapse: collapse; }
  TD { vertical-align: top; line-height: 1.3; }
</style>

<article>
  <table>
    <tr class="sort">
      <td style="width: 4%;">&nbsp;</td>
      <td style="width: 63%;">Testimonial</td>
      <td style="width: 9%;">Order #</td>
      <td style="width: 15%;">Customer Name</td>
      <td style="width: 6%;">Date</td>
    </tr>
    <?php while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
      <tr>
        <td style="padding: 0.5em 10px;">
          <a href="testimonials-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><i class="fa fa-trash"></i></a>
        </td>
        <td style="padding-right: 3%;"><?php echo nl2br($row['testimonial']); ?></td>
        <td><?php echo $row['order_id']; ?></td>
        <td><?php echo $row['order_name']; ?></td>
        <td><?php echo date("n/j/y", $row['submitdate']); ?></td>
      </tr>
    <?php } ?>
  </table>
</article>

<?php include "footer.php"; ?>