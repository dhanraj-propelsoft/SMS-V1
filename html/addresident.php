<?php include('header.php'); ?>
<?php include 'config.php'; ?>

<?php

$units = "SELECT * FROM addowner_details WHERE current_status=1";
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
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></span><b>ADD RESIDENT</br>
                        </h4>
                        <form action="addresidentDetails.php" method="POST">
                            <div class="row">
                                <div class="mb-2 col-md-2" >
                                    <label for="SHOW" class="form-label">BLOCK</label>
                                    <select name="block" id="SHOW" class="select2 form-select" autocomplete="off"
                                        required>
                                        <option value="">SELECT</option>
                                        <option value="A">A</option>
                                    </select>

                                </div>
                                <div class="mb-3 col-md-2">

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

                                            <option unitId="<?php echo $row['id'] ?>" value="<?php echo $row['units'];

                                               ?>">
                                                <?php echo $row["units"];

                                                ?>
                                            </option>
                                            <?php
                                        endwhile;

                                        ?>

                                    </select>   

                                </div>
                                <div class="mb-1 col-md-2" >

                                    <label for="SHOW" class="form-label">ID</label>
                                    <input class="form-control" id="id" name="id" autocomplete="off" required
                                        readonly />

                                </div>
                                <div class="mb-3 col-md-2">

                                    <label for="SHOW" class="form-label">OWNER NAME</label>
                                    <input class="form-control" type="text" id="ownername" name="ownername"
                                        autocomplete="off" placeholder="NUll" readonly />

                                </div>
                                <div class="mb-3 col-md-2"  >

                                    <label for="SHOW" class="form-label">TYPE</label>
                                    <input class="form-control" type="text" id="type" name="type" autocomplete="off"
                                        placeholder="NUll" readonly />

                                </div>
                                <div class="mb-3 col-md-2"  >

                                    <label for="SHOW" class="form-label" >PURPOSE</label>
                                    <input name="use" id="use" class="form-control" autocomplete="off"
                                        placeholder="NULL" readonly />
                                    <!-- <select name="use" id="use" class="select2 form-select" autocomplete="off" required readonly> -->
                                    <!-- <option value="">SELECT</option>
                                        <option value="1">SELF</option>
                                        <option value="2">TENANT</option> -->
                                    <!-- </select> -->

                                </div>

                                <!-- Basic Layout -->
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">


                                            </div>
                                            <div class="card-body">


                                                <!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
                                                <div class="container-xxl flex-grow-1 ">

                                                    <!-- <label for="SHOW" class="form-label">UNIT NUMBER</label> -->
                                                    <!-- <input type="text" class="form-control" id="lastname" name="lastname"> -->

                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <form id="formAccountSettings" method="POST"
                                                                onsubmit="return false">
                                                                <div class="row">
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="firstName" class="form-label">First
                                                                            Name</label>
                                                                        <input class="form-control" type="text"
                                                                            id="firstName" name="firstName"
                                                                            placeholder="Name" autocomplete="off"
                                                                            required />
                                                                    </div>

                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="lastname" class="form-label">Last
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lastname" name="lastname"
                                                                            placeholder="Name" autocomplete="off"
                                                                            required />
                                                                    </div>
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="email"
                                                                            class="form-label">Email</label>
                                                                        <input type="text" class="form-control"
                                                                            id="email" name="email"
                                                                            placeholder="ABC@gmail.com"
                                                                            autocomplete="off" required />
                                                                    </div>


                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="contact" class="form-label">CONTACT
                                                                            NUMBER</label>
                                                                        <input class="form-control" type="text"
                                                                            id="contact" name="contact"
                                                                            placeholder="1234567890" autocomplete="off"
                                                                            required />
                                                                    </div>
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="dateofbirth" class="form-label">DATE
                                                                            OF
                                                                            BIRTH</label>
                                                                        <input class="form-control" type="text"
                                                                            id="dateofbirth" name="dateofbirth"
                                                                            placeholder="dd/mm/yyyy" autocomplete="off"
                                                                            required />
                                                                    </div>
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="nationality" class="form-label">
                                                                            Nationality</label>
                                                                        <input class="form-control" type="text"
                                                                            id="nationality" name="nationality"
                                                                            placeholder="" autocomplete="off"
                                                                            required />
                                                                    </div>
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="dateofresidency"
                                                                            class="form-label">DATE
                                                                            OF
                                                                            RESIDENCY</label>
                                                                        <input class="form-control" type="text"
                                                                            id="dateofresidency" name="dateofresidency"
                                                                            placeholder="dd/mm/yyyy" autocomplete="off"
                                                                            required />
                                                                    </div>

                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="yearofagreement"
                                                                            class="form-label">YEAR
                                                                            OF
                                                                            AGREEMENT</label>
                                                                        <input class="form-control" type="text"
                                                                            id="yearofagreement" name="yearofagreement"
                                                                            placeholder="dd/mm/yyyy" autocomplete="off"
                                                                            required />
                                                                    </div>

                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="numberofelders"
                                                                            class="form-label">NUMBER OF
                                                                            ELDERS</label>
                                                                        <input class="form-control" type="text"
                                                                            id="numberofelders" name="numberofelders"
                                                                            placeholder="" autocomplete="off"
                                                                            required />
                                                                    </div>
                                                                    <div class="mb-3 col-md-6">
                                                                        <label for="numberofchildrens"
                                                                            class="form-label">NUMBER OF
                                                                            CHILDRENS</label>
                                                                        <input class="form-control" type="text"
                                                                            id="numberofchildrens"
                                                                            name="numberofchildrens" placeholder=""
                                                                            autocomplete="off" required />
                                                                    </div>

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
                                                            </form>
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
    <!-- Footer -->
    <?php include('footer.php'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $('#unitnumber').on('change', function () {
            var unitnumber_id = $('#unitnumber  :selected').val();
            // var unitnumber = $('#unitnumber  :selected').text();
            

            $.ajax({
                url: 'res.php',
                type: "POST",
                data: {
                    unit_data: unitnumber_id,
                    // unitnumber:unitnumber
                },
                success: function (result) {
// console.log(result);
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
                    const purchase = resultArray[0].date_of_purchase;
                    const phone = resultArray[0].contact;

                    if (use == 'SELF') {
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
                        $('#dateofresidency').val(purchase);
                        $('#contact').val(phone);

                    }
                    else {
                        $('#id').val(id);
                        $('#ownername').val(firstName);
                        $('#use').val(use);
                        $('#type').val(type);
                        $('#firstName').val(resultArray[0].fname);
                        $('#lastname').val(resultArray[0].lname);
                        $('#email').val(resultArray[0].fmail);
                        $('#dateofbirth').val(resultArray[0].birth);
                        $('#nationality').val(resultArray[0].contry);
                        $('#dateofresidency').val(resultArray[0].resident);
                        $('#contact').val(resultArray[0].con);
                        $('#yearofagreement').val(resultArray[0].agreement);
                        $('#numberofelders').val(resultArray[0].elders);
                        $('#numberofchildrens').val(resultArray[0].childrens);
                        

                    }
                }
            })
        });
    </script>


    
    <!-- <script>
        $('#unitnumber').on('change', function () {
            var unitnumber_id = this.value;

            $.ajax({
                url: 'nw.php',
                type: "POST",
                data: {
                    unit_data: unitnumber_id,
                },
                success: function (result) {
                    var firstname = result;
                    $('#ownername').val(firstname);              
                                   
                }
            })
        });
    </script> -->