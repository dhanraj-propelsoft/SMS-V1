<?php include('header.php'); ?>
<?php include 'config.php'; ?>

<?php
$apartmentDatas = mysqli_query($db, "SELECT * FROM apartment_details");
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include('menu.php'); ?>
            <!-- Layout container -->
            <div class="layout-page">
                <?php include('nav.php'); ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
                    <div class="container-xxl flex-grow-1 ">

                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"> </span>UNIT LIST
                        </h4>
                        <!-- <div class="mb-4 col-md-2">
                            <label for="SHOW" class="form-label">SHOW</label>
                            <select id="SHOW" class="select2 form-select" name="unitvalue">
                                <option value="">SELECT</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>

                        </div> -->
                        <div class="card">
                            <div class="table-responsive text-nowrap" style="overflow-y: scroll;">
                                <table id="table" class="table unittable" style="table-layout:fixed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>BLOCK NAME</th>
                                            <th>FLOOR NO.</th>
                                            <th>UNIT NO.</th>
                                            <th>UNIT TYPE</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-responsive text-nowrap" style="height: 350px; overflow-y: scroll;">
                                <table id="table" class="table unittable" style="table-layout:fixed">
                                    <?php while ($row = mysqli_fetch_array($apartmentDatas)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['blocks']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['floor']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['unit']; ?>
                                            </td>

                                            <td>
                                                <?php echo $row['type']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['description']; ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>

                                    <!-- <tbody class="table-border">
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            $(".report").addClass("active open");
        </script>
    <!-- Footer -->
    <?php include('footer.php'); ?>
    