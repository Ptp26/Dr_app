<?php //include 'header.php'; ?>

<section id="main-content">
    <section class="wrapper">
        <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                text-align: center;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }


            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                text-align: center;
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #4CAF50;
                color: white;
            }
            .page_pro {
                border-top-width: 1px;
                border-top-style:
                    solid;
                border-bottom-width: 1px;
                border-bottom-style: solid;
                border-left-width: 1px;
                border-left-style: solid;
                border-right-width: 1px;
                border-right-style: solid;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                margin-right: 10px;
                color: white;
                background: #4caf50;
            }

            .pselect {
                background: #4ecdc4;
            }
        </style>
        <h3>Doctor Information</h3>
        <div class="top-menu" style="margin-bottom: 50px;">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="Create.php">Add Doctor</a></li>
            </ul>
        </div>

        <?php
        include '../config.php';
        $perPage = 20;
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        $startAt = $perPage * ($page - 1);
        $query = "SELECT COUNT(*) as total FROM dr_schedule";
        $r = $mysqli->query($query)->fetch_assoc();
        $totalPages = ceil($r['total'] / $perPage);
        $links = "";
        for ($i = 1; $i <= $totalPages; $i++) {
            $links .= ($i != $page) ? "<a class='page_pro' href='View.php?page=$i'>| $i |</a>" : "<a class='page_pro pselect'>| $page |</a>";
        }
        $sql = "SELECT * FROM dr_schedule  LIMIT $startAt, $perPage";
        $result = $mysqli->query($sql);
        $no = $startAt + 1;?>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <table id="customers">
                        <tr>
                            <th>NO.</th>
                            <th>DR_Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <?php  $id=$row["dr_id"];
                                 $sql2 = "SELECT * FROM doctor where ID= '$id'";
                                $result2 = $mysqli->query($sql2);
                                $row2 = $result2->fetch_assoc(); ?>
                                <td><?php print($row2["ID"]); ?></td>
                                <td><?php print($row2["Name"]); ?></td>
                                <td><?php print($row["Start_date"]); ?></td>
                                <td><?php print($row["Start_time"]);echo "-";print($row["End_time"]); ?></td>
                                <td><a href='Api.php?id="<?php print $row["id"]; ?>"&Page="3"' title='delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'>Delete</span></a>
                                    <a href='update.php?id="<?php print $row["id"]; ?>"' title='update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'>Edit</span></a></td>
                            </tr>


                        <?php
                            $no++;
                        }
                        $mysqli->close();
                        ?>
                    </table>
                    <div style="margin-bottom: 20px;margin-top: 20px;font-size: 17px;">
                        <center><?php print $links; ?></center>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
<?php//include 'footer.php'; ?>