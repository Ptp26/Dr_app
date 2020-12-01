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
          <form action="Api.php">
            <?php
            include 'config.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM `dr_schedule` WHERE ID = $id";
            $result = $mysqli->query($sql);
            $row = $result->fetch_assoc() ?>
            <input type="hidden" id="Page" name="Page" value="2">
            <input type="hidden" id="id" name="id" value="<?php print($row["ID"]); ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php print($row["Name"]); ?>">

            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </section>
</section>
<?php //include 'footer.php'; ?>