<?php //include 'header.php'; ?>
<style>
  input[type=text],
  input[type=number],
  input[type=password],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }
</style>
<section id="main-content">
  <section class="wrapper">
    <h3>Update Admin</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> Update Admin Details</h4>
            <?php
            include '../config.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM `dr_schedule` WHERE id = $id";
            $result = $mysqli->query($sql);
            $row = $result->fetch_assoc();
            $sql2 = "SELECT * FROM doctor";
            $result2 = $mysqli->query($sql2);?>
            <form action="Api.php">
                <input type="hidden" id="Page" name="Page" value="2">
                <input type="hidden" id="id_dr" name="id_dr" value=<?php echo $id; ?>>
                <select name="Dr" id="Dr">
                    <option value="">Choose an Doctor</option>
                    <?php while ($row2 = $result2->fetch_assoc()) { ?>
                        <option value="<?php print($row2["ID"]); ?>"<?php if($row2["ID"]==$row["dr_id"]){?>selected <?php }?> ><?php print($row2["Name"]); ?></option>
                        <?php
                    }
                    $mysqli->close();
                    ?>

                </select>
                <label for="name">Date</label>
                <input type="date" id="date" name="date" value="<?php echo $row["Start_date"]; ?>" required>
                <label for="name">Starting Time</label>
                <input type="time" id="stime" name="stime" value="<?php echo $row["Start_time"]; ?>" required>
                <label for="name">End Time</label>
                <input type="time" id="etime" name="etime" value="<?php echo $row["End_time"]; ?>" required>

                <input type="submit" value="Submit">
            </form>
        </div>
      </div>
    </div>
  </section>
</section>
<?php //include 'footer.php'; ?>