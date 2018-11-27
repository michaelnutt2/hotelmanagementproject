<?php
  if($_SESSION['role'] == 1){
    echo '<ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="SchedViewMan.php">View All Schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="ScheduleSetMan.php">Set Schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="SchedulePendingMan.php">Pending Time Off Requests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="TimeOffRequestM.php">Time Off Request</a>
      </li>
    </ul>';
  } else {
    echo '<ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="ScheduleViewEmployee.php">View Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="TimeOffRequestE.php">Request Off</a>
      </li>
    </ul>';
  }

?>
