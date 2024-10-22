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
function get_db_connection(){
    $conn = new mysqli('138.197.17.168', 'misoucr3_hw3user', 'pXcbd0ZC)8kK', 'misoucr3_mis4013hw3');
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
$query = "SELECT swimmer_id, swimmer_name, swimmer_age, swimmer_gender FROM swimmers";
$swimmers = $conn->query($query);
while ($swimmer = $swimmers->fetch_assoc()) {
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
