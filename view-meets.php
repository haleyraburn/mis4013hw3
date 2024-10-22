<h1>Meets</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th></th>
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
    <td>
      <form method="post" action="events-by-meet.php">
        <input type="hidden" name="mid" value="<?php echo $meet['meet_id']; ?>">
        <button type="submit" class="btn btn-primary">Events</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
