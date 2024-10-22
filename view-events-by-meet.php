<h1>Events by Meet</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
<tbody>
  <?php
if (isset($sections) && $sections) {
  while ($section = $sections->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $event['event_id']; ?></td>
    <td><?php echo $event['event_name']; ?></td>
  </tr>
<?php
}
} else {
  echo "<tr><td colspan='6'>No events found.</td></tr>";
}
?>
    </tbody>
  </table>
</div>
