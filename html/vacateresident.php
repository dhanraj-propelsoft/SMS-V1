<?php include('header.php'); ?>
<?php include 'config.php'; ?>
<?php

$units = "SELECT * FROM resident_details WHERE current_status=1";
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
                    <div class="container-xxl flex-grow-1">
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></span><b>VACATE RESIDENT</b>
                        </h4>

                        <form action="vacateDetails.php" method="POST" name="vacate">
                            <div class="row">
                                <div class=" mb-4 col-md-2" style="display:none">
                                    <label for="SHOW" class="form-label">BLOCK</label>
                                    <select name="block" id="SHOW" class="select2 form-select" autocomplete="off"
                                        required readonly>
                                        <option value="">SELECT</option>
                                        <option value="A">A</option>

                                    </select>

                                </div>
                                <div class="mb-4 col-md-2">

                                    <label for="SHOW" class="form-label">UNIT NO.</label>
                                    <select name="unitnumber" id="unitnumber" class="select2 form-select"
                                        autocomplete="off" required readonly>
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
                                                <?php echo $row["unit"];

                                                ?>
                                            </option>
                                            <?php
                                        endwhile;

                                        ?>

                                    </select>

                                </div>

                                <div class="mb-4 col-md-2">

                                    <label for="SHOW" class="form-label">OWNER NAME</label>
                                    <input class="form-control" id="ownername" name="ownername" autocomplete="off"
                                        required readonly />

                                </div>

                                <div class="mb-4 col-md-2" style="display:none">

                                    <label for="SHOW" class="form-label">ID</label>
                                    <input class="form-control" id="id" name="id" autocomplete="off" required
                                        readonly />

                                </div>


                                <!-- Basic Layout -->
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
                                                    <div class="container-xxl flex-grow-1">

                                                        <!-- <label for="SHOW" class="form-label">UNIT NUMBER</label> -->
                                                        <!-- <input type="text" class="form-control" id="lastname" name="lastname"> -->

                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <form id="formAccountSettings" method="POST"
                                                                    onsubmit="return false">
                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="firstName"
                                                                                class="form-label">First
                                                                                Name</label>
                                                                            <input class="form-control" type="text"
                                                                                id="firstName" name="firstName"
                                                                                placeholder="Name" autocomplete="off"
                                                                                required readonly />
                                                                        </div>

                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="lastname"
                                                                                class="form-label">Last
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="lastname" name="lastname"
                                                                                placeholder="Name" autocomplete="off"
                                                                                required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="email"
                                                                                class="form-label">Email</label>
                                                                            <input type="text" class="form-control"
                                                                                id="email" name="email"
                                                                                placeholder="ABC@gmail.com"
                                                                                autocomplete="off" required readonly />
                                                                        </div>


                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="contact"
                                                                                class="form-label">CONTACT
                                                                                NUMBER</label>
                                                                            <input class="form-control" type="text"
                                                                                id="contact" name="contact"
                                                                                placeholder="1234567890"
                                                                                autocomplete="off" required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="dateofbirth"
                                                                                class="form-label">DATE
                                                                                OF
                                                                                BIRTH</label>
                                                                            <input class="form-control" type="text"
                                                                                id="dateofbirth" name="dateofbirth"
                                                                                placeholder="dd/mm/yyyy"
                                                                                autocomplete="off" required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="nationality" class="form-label">
                                                                                Nationality</label>
                                                                            <input class="form-control" type="text"
                                                                                id="nationality" name="nationality"
                                                                                placeholder="" autocomplete="off"
                                                                                required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="dateofresidency"
                                                                                class="form-label">DATE
                                                                                OF
                                                                                RESIDENCY</label>
                                                                            <input class="form-control" type="text"
                                                                                id="dateofresidency"
                                                                                name="dateofresidency"
                                                                                placeholder="dd/mm/yyyy"
                                                                                autocomplete="off" required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="yearofagreement"
                                                                                class="form-label">YEAR
                                                                                OF
                                                                                AGREEMENT</label>
                                                                            <input class="form-control" type="text"
                                                                                id="yearofagreement"
                                                                                name="yearofagreement"
                                                                                placeholder="dd/mm/yyyy"
                                                                                autocomplete="off" required readonly />
                                                                        </div>

                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="numberofelders"
                                                                                class="form-label">NUMBER OF
                                                                                ELDERS</label>
                                                                            <input class="form-control" type="text"
                                                                                id="numberofelders"
                                                                                name="numberofelders" placeholder=""
                                                                                autocomplete="off" required readonly />
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="numberofchildrens"
                                                                                class="form-label">NUMBER OF
                                                                                CHILDREN</label>
                                                                            <input class="form-control" type="text"
                                                                                id="numberofchildrens"
                                                                                name="numberofchildrens" placeholder=""
                                                                                autocomplete="off" required readonly />
                                                                        </div>
                                                                    </div>


                                                                </form>
                                                                <div class="mt-2">

                                                                    <button type="submit"
                                                                        class="btn btn-success deactivate-account"
                                                                        id='vacate' name='vacate'
                                                                        onclick=" showMessage()">Vacate
                                                                    </button>

                                                                    <button type="cancel"
                                                                        class="btn btn-danger deactivate-account">Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

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
    <script>
            $(".master").addClass("active open");
        </script>

    <?php include('footer.php');

    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        function vacatefrom() {
            $('vacate').submit();
        }
        $('#unitnumber').on('change', function () {
            var unitnumber_id = this.value;

            $.ajax({
                url: 'vac.php',
                type: "POST",
                data: {
                    unit_data: unitnumber_id,
                },
                success: function (result) {

                    const resultArray = JSON.parse(result);
                    const id = resultArray[0].id;
                    const firstName = resultArray[0].first_name;
                    const lastname = resultArray[0].last_name;
                    const use = resultArray[0].use;
                    const type = resultArray[0].type;
                    const lastName = resultArray[0].last_name;
                    const mail = resultArray[0].email;
                    const birth = resultArray[0].date_of_birth;
                    const country = resultArray[0].nationality;
                    const residency = resultArray[0].date_of_residency;
                    const phone = resultArray[0].contact;
                    const agreement = resultArray[0].year_of_agreement;
                    const elders = resultArray[0].total_elders;
                    const childrens = resultArray[0].total_childrens;

                    // if (use == 'SELF') {
                    // alert('self');
                    $('#id').val(id);
                    $('#ownername').val(firstName);
                    $('#use').val(use);
                    $('#type').val(type);
                    $('#firstName').val(firstName);
                    $('#lastname').val(lastname);
                    $('#email').val(mail);
                    $('#dateofbirth').val(birth);
                    $('#nationality').val(country);
                    $('#dateofresidency').val(residency);
                    $('#contact').val(phone);
                    $('#yearofagreement').val(agreement);
                    $('#numberofelders').val(elders);
                    $('#numberofchildrens').val(childrens);

                }
            })
        });
    </script>