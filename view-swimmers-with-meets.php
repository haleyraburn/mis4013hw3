<h1>Swimmers with Meets</h1>
<div class="card-group">
<?php
while ($swimmer = $swimmers->fetch_assoc()) {
  ?>
    <div class="card">
        <div class="card-body"
          <h5 class="card-title"><?php echo $swimmer['swimmer_name']; ?></h5>
          <p class="card-text">
          <ul class="list-group">
<?php
  $courses = selectMeetsBySwimmer($swimmer['swimmer_id']);
  while ($meet = $meets->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $meet['meet_name']; ?> - <?php echo $meet['meet_location']; ?> - <?php echo $meet['meet_daytime']; ?></li>
<?php
  }
?>
          </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Age: <?php echo $swimmer['swimmer_age']; ?></small></p>
        </div>
    </div>
  <?php
}
?>
</div>
