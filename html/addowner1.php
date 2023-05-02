<?php include('header.php'); ?>
<?php include 'config.php'; ?>

<?php $apartmentDatas = mysqli_query($db, "SELECT * FROM apartment_details"); ?>


  
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
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></span><b>ADD OWNER</br>
                        </h4>
                        <form action="addownerDetails.php" method="POST">


                            <div class="row">
                                <!-- <form action="apartmentStore.php" method="POST"> -->

                                <div class="mb-1 col-md-2">
                                    <label for="SHOW" class="form-label">UNIT NUMBER -</label>
                                    <input type="hidden" name="unit" value="<?php echo $_GET['unit']; ?>">
                                    <?php if ($row = mysqli_fetch_array($apartmentDatas)) {
                                        ?>
                                        <?php
                                        echo $_GET['unit'];
                                        ?>
                                        <?php
                                    } ?>
                                </div>

                                <div class="mb-1 col-md-2" style="display:none">
                                    <label for="SHOW" class="form-label">UNIT TYPE - </label>
                                    <input name="type" value="<?php echo $_GET['type']; ?>" type="hidden" >
                                    <?php if ($row = mysqli_fetch_array($apartmentDatas)) {
                                        ?>
                                        <?php
                                        echo $_GET['type'];
                                        ?>
                                        <?php
                                    } ?>
                                </div>

                                <div class="mb-1 col-md-2" style="display:none">
                                    <input name="block" value="<?php echo $row['blocks']; ?>" type="hidden">
                                    <label for="SHOW" class="form-label">BLOCK -</label>
                                    <?php if ($row = mysqli_fetch_array($apartmentDatas)) {
                                        ?>
                                        <?php
                                        echo $row['blocks'];
                                        ?>
                                        <?php
                                    } ?>
                                </div>


                                <!-- Basic Layout -->
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                            </div>
                                            <div class="card-body">

                                                <div class="container-xxl flex-grow-1 ">

                                                    <!-- <label for="SHOW" class="form-label">UNIT NUMBER</label> -->
                                                    <!-- <input type="text" class="form-control" id="lastname" name="lastname"> -->

                                                    <!-- <div class="row"> -->
                                                    <!-- <div class="col-md-12"> -->

                                                    <form id="formAccountSettings" method="POST"
                                                        onsubmit="return false">
                                                        <div class="row">

                                                            <div class="mb-1 col-md-6">
                                                                <label for="firstName" class="form-label">First
                                                                    Name</label>
                                                                <input class="form-control" type="text" id="firstName"
                                                                    name="firstName" placeholder="Name"
                                                                    autocomplete="off" required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="lastname" class="form-label">Last
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="lastname"
                                                                    name="lastname" placeholder="Name"
                                                                    autocomplete="off" required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="text" class="form-control" id="email"
                                                                    name="email" placeholder="ABC@gmail.com"
                                                                    autocomplete="off" required />
                                                            </div>


                                                            <div class="mb-3 col-md-6">
                                                                <label for="contact" class="form-label">CONTACT
                                                                    NUMBER</label>
                                                                <input class="form-control" type="text" id="contact"
                                                                    name="contact" placeholder="1234567890"
                                                                    autocomplete="off" required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="dateofbirth" class="form-label">DATE
                                                                    OF
                                                                    BIRTH</label>
                                                                <input class="form-control" type="date" id="dateofbirth"
                                                                    name="dateofbirth" placeholder="dd/mm/yyyy"
                                                                    autocomplete="off" required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="nationality" class="form-label">
                                                                    Nationality</label>
                                                                <input class="form-control" type="text" id="nationality"
                                                                    name="nationality" placeholder="" autocomplete="off"
                                                                    required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="dateofpurchase" class="form-label">DATE
                                                                    OF
                                                                    PURCHASE</label>
                                                                <input class="form-control" type="date"
                                                                    id="dateofpurchase" name="dateofpurchase"
                                                                    placeholder="dd/mm/yyyy" autocomplete="off"
                                                                    required />
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="SHOW" class="form-label">SELECT</label>
                                                                <select name="use" id="SHOW" class="select2 form-select"
                                                                    autocomplete="off" required>
                                                                    <option value=""></option>
                                                                    <option value="SELF">SELF</option>
                                                                    <option value="TENANT">TENANT</option>
                                                                </select>

                                                            </div>


                                                            <div class="mt-2">
                                                                <button type="submit"
                                                                    class="btn btn-success deactivate-account">Save
                                                                </button>
                                                                <button type="reset"
                                                                    class="btn btn-danger deactivate-account">Reset
                                                                </button>
                                                                <!-- <button type="reset"
                                                                    class="btn btn-primary deactivate-account">Cancel
                                                                </button> -->
                                                            </div>
                                                        </div>
                                                        
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
<script>
            $(".master").addClass("active open");
        </script>
<!-- / Content -->
<!-- Footer -->


<?php include('footer.php'); ?>
