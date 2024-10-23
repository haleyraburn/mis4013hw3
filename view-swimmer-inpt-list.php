<select class="form-select" id="sid" name="sid">
<?php
while ($swimmerItem = $swimmerList->fetch_assoc()) {
  ?>
  <option value="<?php echo $swimmerItem['swimmer_id']; ?>"><?php echo $swimmerItem['swimmer_name']; ?></option>
  <?php
}
?>
</select>
