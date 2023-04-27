<?php include('header.php'); ?>

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
                                    <div class="col-md-6 col-lg-4">
                                        <!-- <div class="card mb-3"> -->
                                        <div class="card text-center mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">TOTAL UNITS</h5>
                                                <a href="javascript:void(0)" class="btn btn-primary">CLICK TO CHECK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card text-center mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">TOTAL FILLED UNITS</h5>

                                                <a href="javascript:void(0)" class="btn btn-primary">CLICK TO CHECK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <!-- <div class="card text-end mb-3"> -->
                                        <div class="card text-center mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">TOTAL UNFILLED UNITS</h5>

                                                <a href="javascript:void(0)" class="btn btn-primary">CLICK TO CHECK</a>
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
   