<div class="row">
  <div class="col-md-6">
    <form method="get" action="">
      <div class="form-group">
        <label for="countryID">Pays</label>
          <select name="countryID" class="form-control" id="countryID">
            <?php foreach ($countries as $country) { ?>
              <option selected="selected" value="<?php echo $country['id']; ?>">
                <?php echo $country['name']; ?>
              </option>
            <?php } ?>
          </select>
      </div>
    </form>
    <div class="row">


    </div>
  </div>

</div>
