<?php include('header.php'); ?>
<?php include 'config.php'; ?>
<?php
    $result = $db->query("SELECT COUNT(*) as total FROM apartment_details");
    $row = $result->fetch_assoc();
    $total_units = $row['total'];
    
    $result1 = $db->query("SELECT COUNT(*) as total1 FROM addowner_details WHERE current_status=1");
    $row1 = $result1->fetch_assoc();
    $total_units1 = $row1['total1'];
    
    $total_units_with_owners = $total_units1;
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
                    <div class="container-xxl flex-grow-1">
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></span><b>DASHBOARD</b>
                        </h4>
                        <div class="row">
                            <!-- Basic Layout -->
                            <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->

                            <!-- <h5 class="pb-1 mb-4">Text alignment</h5> -->
                            <div class="row mb-5">
                                <div class="col-md-2 col-lg-4">
                                    <!-- <div class="card mb-3"> -->
                                    <div class="card text-center mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">TOTAL UNITS</h5>
                                            <input class="form-control" id="total" name="total" autocomplete="off" style="text-align:center"
                                            required 
                                            readonly value="<?php echo $total_units; ?>" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">TOTAL FILLED UNITS</h5>

                                            <input class="form-control" id="filled" name="filled" autocomplete="off" style="text-align:center"
                                            required 
                                            readonly value="<?php echo $total_units1; ?>" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <!-- <div class="card text-end mb-3"> -->
                                    <div class="card text-center mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">TOTAL UNFILLED UNITS</h5>
                                            <input class="form-control" id="unfilled" name="unfilled" autocomplete="off" style="text-align:center"
                                            required 
                                            readonly value="<?php echo $total_units-  $total_units1 ?>" />


                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   

    <script>
        $(".dashboard").addClass("active open");
    </script>
    <?php include('footer.php'); ?>