<h1>Meets by Swimmer</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Day/Time</th>
      </tr>
    </thead>
<tbody>
  <?php
while ($meet = $meets->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $meet['meet_id']; ?></td>
    <td><?php echo $meet['meet_name']; ?></td>
    <td><?php echo $meet['meet_location']; ?></td>
    <td><?php echo $meet['day_time']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
