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
<?php
include '../config.php';
$sql = "SELECT * FROM doctor";
$result = $mysqli->query($sql); ?>
<section id="main-content">
    <section class="wrapper">
        <h3>Add New Doctor Schedule</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> New Doctor Details</h4>
                    <form action="Api.php">
                        <input type="hidden" id="Page" name="Page" value="1">
                        <select name="Dr" id="Dr">
                            <option value="">Choose an Doctor</option>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                                <option value="<?php print($row["ID"]); ?>"><?php print($row["Name"]); ?></option>
                            <?php
                        }
                        $mysqli->close();
                        ?>

                        </select>
                        <label for="name">Date</label>
                        <input type="date" id="date" name="date" required>
                        <label for="name">Starting Time</label>
                        <input type="time" id="stime" name="stime" required>
                        <label for="name">End Time</label>
                        <input type="time" id="etime" name="etime" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<?php //include 'footer.php'; ?>