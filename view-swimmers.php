<h1>Swimmers</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php
while ($instructor = $instructors->fetch_assoc()) {
  ?>
    <tr>
      <td><?php echo $swimmer['swimmer_id']; ?></td>
      <td><?php echo $swimmer['swimmer_name']; ?></td>
      <td><?php echo $swimmer['swimmer_age']; ?></td>
      <td><?php echo $swimmer['swimmer_gender']; ?></td>
      <td><a href="meets-by-swimmer.php?id=<?php echo $swimmer['swimmer_id']; ?>">Meets</a></td>
    </tr>
  <?php
}
?>
  </tbody>
  </table>
</div>
