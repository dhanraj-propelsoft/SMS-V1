<?php include('header.php'); ?>
<?php include 'config.php'; ?>

<?php $apartmentDatas = mysqli_query($db, "SELECT * FROM apartment_details");
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
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"> </span>ADD OWNER
                        </h4>
                        <!-- <div class="mb-4 col-md-2 ">
                            <label for="SHOW" class="form-label">SELECT THE FLOOR</label>
                            <select name="floor_no" id="SHOW" class="select2 form-select">
                                <option value="">SELECT</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            
                        </div> -->
                        <div class="card">
                            <!-- <h5 class="card-header">Table Basic</h5> -->
                            <div class="table-responsive text-nowrap">
                                <!-- <a href="addowner1.php" class="menu-link"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>BLOCK</th>                                           
                                            <th>FLOOR NO.</th>
                                            <th>UNIT NO. </th>
                                            <th>UNIT TYPE</th>
                                            <th>DESCRIPTION</th>
                                        </tr>

                                    </thead>
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
                                               
                                                <a href="addowner1.php?unit=<?php echo $row['unit']; ?>&type=<?php echo $row['type']; ?>" class="menu-link">

                                                    <?php echo $row['unit']; ?>
                                            </td>                                     

                                            <td>
                                           
                                            <a href="addowner1.php?unit=<?php echo $row['unit']; ?>&type=<?php echo $row['type']; ?>" class="menu-link">
                                                <?php echo $row['type']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['description']; ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>
                                  



                                    <!-- <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>1</strong>
                                                </td>
                                                <td>A</td>
                                                <td>1</td>
                                                <td><span class="badge bg-label-primary me-1">A01</span></td>
                                                <td>##</td>
                                                <td>##</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>2</strong>
                                                </td>
                                                <td>A</td>
                                                <td> 1</td>
                                                <td><span class="badge bg-label-success me-1">A02</span></td>
                                                <td>##</td>
                                                <td>##</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                                    <strong>3</strong>
                                                </td>
                                                <td>A</td>
                                                <td> 1</td>
                                                <td><span class="badge bg-label-info me-1">A03</span></td>
                                                <td>##</td>
                                                <td>##</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                    <strong>4</strong>
                                                </td>
                                                <td>A</td>
                                                <td>1 </td>
                                                <td><span class="badge bg-label-warning me-1">A04</span></td>
                                                <td>##</td>
                                                <td>##</td>
                                            </tr>
                                        </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
            $(".master").addClass("active open");
        </script>


<!-- Footer -->