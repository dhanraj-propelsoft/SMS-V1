<?php include('header.php'); ?>
<?php include 'config.php'; ?>

<?php

$units = "SELECT * FROM addowner_details";
$units_qry = mysqli_query($db, $units);
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
                        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light"></span> <b>TRANSFER OWNER</b>
                        </h4>
                        <!-- <form action="transferownerDetails.php" method="POST"> -->
                        <div class="row">
                            <div class="mb-4 col-md-2">

                                <label for="SHOW" class="form-label">BLOCK</label>
                                <select name="block" id="SHOW" class="select2 form-select">
                                    <option value="">SELECT</option>
                                    <option value="A">A</option>

                                </select>
                                
                            </div>
                            <div class="mb-1 col-md-2">

                                <label for="SHOW" class="form-label">UNIT NUMBER</label>
                                <select name="unitnumber" id="unitnumber" class="select2 form-select"
                                    autocomplete="off">
                                    <option value="">SELECT</option>
                                    <?php

                                    while (
                                        $row = mysqli_fetch_array(
                                            $units_qry,
                                            MYSQLI_ASSOC
                                        )
                                    ):
                                        ;

                                        ?>

                                        <option value="<?php echo $row['id'];

                                        ?>">
                                            <?php echo $row["units"];

                                            ?>
                                        </option>
                                        <?php
                                    endwhile;

                                    ?>

                                </select>
                               
                            </div>

                            <div class="row">
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0"><b>FROM</b></h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="row">
                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">First
                                                        Name</label>
                                                    <input name="firstname" type="text" class="form-control"
                                                        id="firstname" placeholder="Name" />
                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">Last
                                                        Name</label>
                                                    <input name="lastname" type="text" class="form-control"
                                                        id="lastname" placeholder="Name" />
                                                </div>


                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">E-mail</label>
                                                    <input name="email" type="text" class="form-control" id="email"
                                                        placeholder="ABC@gmail.com" />
                                                </div>


                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">Contact
                                                        Number</label>
                                                    <input name="contact" type="text" class="form-control" id="contact"
                                                        placeholder="1234567890" />
                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">Date of
                                                        Birth</label>
                                                    <input name="dateofbirth" type="text" class="form-control"
                                                        id="dateofbirth" placeholder="dd/mm/yyyy" />
                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">Nationality</label>
                                                    <input name="nationality" type="text" class="form-control"
                                                        id="nationality" placeholder="" />
                                                </div>
                                                <div class="col-md-6 mb-4 ">
                                                    <label class="form-label">Date of
                                                        Purchase</label>
                                                    <input name="dateofpurchase" type="text" class="form-control"
                                                        id="dateofpurchase" placeholder="dd/mm/yyyy" />
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="SHOW" class="form-label">PURPOSE</label>
                                                    <input name="purpose" type="text" class="form-control" id="purpose"
                                                        placeholder="" />

                                                </div>
                                            </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- </form> -->                        


                                    <div class="col-xxl">
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0"><b>TO</b></h5>
                                            </div>


                                            <div class="card-body">
                                                <form action="transferownerDetails.php" method="POST">
                                                    <div class="row">
                                                        <!-- <form> -->
                                                        <div class="col-md-6 mb-4">
                                                            <label class="form-label">First
                                                                Name</label>
                                                            <input name="firstname1" type="text" class="form-control"
                                                                id="firstname" placeholder="Name" />
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <label class="form-label">Last
                                                                Name</label>
                                                            <input name="lastname1" type="text" class="form-control"
                                                                id="lastname" placeholder="Name" />
                                                        </div>


                                                        <div class="col-md-6 mb-4">
                                                            <label class="form-label">E-mail</label>
                                                            <input name="email1" type="text" class="form-control"
                                                                id="email" placeholder="ABC@gmail.com" />
                                                        </div>


                                                        <div class="col-md-6 mb-4 mb-3">
                                                            <label class="form-label">Contact
                                                                Number</label>
                                                            <input name="contact1" type="text" class="form-control"
                                                                id="contact" placeholder="1234567890" />
                                                        </div>
                                                        <div class="col-md-6 mb-4 ">
                                                            <label class="form-label">Date of
                                                                Birth</label>
                                                            <input name="dateofbirth1" type="text" class="form-control"
                                                                id="dateofbirth" placeholder="dd/mm/yyyy" />
                                                        </div>
                                                        <div class="col-md-6 mb-4 ">
                                                            <label class="form-label">Nationality</label>
                                                            <input name="nationality1" type="text" class="form-control"
                                                                id="nationality" placeholder="" />
                                                        </div>
                                                        <div class="col-md-6 mb-4 ">
                                                            <label class="form-label">Date of
                                                                Purchase</label>
                                                            <input name="dateofpurchase1" type="text"
                                                                class="form-control" id="dateofpurchase"
                                                                placeholder="dd/mm/yyyy" />
                                                        </div>
                                                        <div class="col-md-6 mb-4 ">
                                                            <label for="SHOW" class="form-label">Resident
                                                                Type</label>
                                                            <select name="purpose1" id="SHOW"
                                                                class="select2 form-select">
                                                                <option value="">SELECT</option>
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
                                                            <button type="reset"
                                                                class="btn btn-primary deactivate-account">Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include('footer.php'); ?>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>
                $('#unitnumber').on('change', function () {
                    var unitnumber_id = this.value;

                    $.ajax({
                        url: 'res.php',
                        type: "POST",
                        data: {
                            unit_data: unitnumber_id,
                        },
                        success: function (result) {

                            const resultArray = JSON.parse(result);
                            const firstName = resultArray[0].first_name;
                            const lastname = resultArray[0].last_name;
                            const use = resultArray[0].use;
                            const mail = resultArray[0].email;
                            const birth = resultArray[0].date_of_birth;
                            const country = resultArray[0].nationality;
                            const purchase = resultArray[0].date_of_purchase;
                            const phone = resultArray[0].contact;


                            $('#purpose').val(use);
                            $('#firstname').val(firstName);
                            $('#lastname').val(lastname);
                            $('#email').val(mail);
                            $('#dateofbirth').val(birth);
                            $('#nationality').val(country);
                            $('#dateofpurchase').val(purchase);
                            $('#contact').val(phone);



                        }
                    })
                });
            </script>