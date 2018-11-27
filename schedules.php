<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Schedules</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include($_SERVER['DOCUMENT_ROOT']."/hotelmanagement/includes/header.php");?>
    <?php
      if($_SESSION["role"] == 1)
      {
        header('Location: SchedViewMan.php');
      }
      else
      {
        header('Location: ScheduleViewEmployee.php');
      }
      ?>
  </body>
</html>
