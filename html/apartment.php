<?php include('header.php'); ?>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		crossorigin="anonymous"> -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

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
						<h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></span><b>APARTMENT
								DETAILS
						</h4>
						<!-- <div class="row"> -->
						<!-- Basic Layout -->
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<!-- <div class="card-header d-flex justify-content-between align-items-center">
										</div> -->
									<div class="card-body">
										<form action="apartmentStore.php" method="POST">
											<!-- <div class="container-xxl flex-grow-1 container-p-y"> -->
											<!-- <label for="SHOW" class="form-label">UNIT NUMBER</label> -->
											<!-- <input type="text" class="form-control" id="lastname" name="lastname"> -->
											<div class="row">
												<div class="col-md-12">
													<form id="formAccountSettings" method="POST"
														onsubmit="return false">
														<div class="row">
															<div class="mb-3 col-md-4">
																<label for="apartmentname" class="form-label">APARTMENT
																	NAME</label>
																<input class="form-control" type="text"
																	id="apartmentname" name="apartmentname"
																	placeholder="Name" />
															</div>

															<div class="mb-3 col-md-4">
																<label for="address" class="form-label">ADDRESS</label>
																<input type="text" class="form-control" id="address"
																	name="address" placeholder="" />
															</div>
															<div class="mb-3 col-md-4">
																<label for="landmark"
																	class="form-label">LANDMARK</label>
																<input type="text" class="form-control" id="landmark"
																	name="landmark" placeholder="" />
															</div>

														</div>

														<div class="row">
															<div class="mb-3 col-md-3">
																<label for="blocks" class="form-label">BLOCKS</label>
																<input class="form-control" type="text" id="blocks"
																	name="blocks" placeholder="A-E" />
															</div>

															<div class="mb-3 col-md-3">
																<label for="no.offloors" class="form-label">NO.of
																	FLOORS</label>
																<input class="form-control" type="number" id="floors"
																	name="floors" placeholder="01-10" />
															</div>

															<div class="mb-3 col-md-3">
																<label for="unitvalue" class="form-label">NO.OF
																	UNITS</label>
																<input class="form-control unitvalue" type="number"
																	id="unitvalue1" name="unitvalue"
																	placeholder="01-05" required/>
															</div>

															<div class="mb-3 col-md-3">
																<label for="SHOW" class="form-label">PARKING</label>
																<select name="parking" id="SHOW"
																	class="select2 form-select">
																	<option value="">PARKING AVAILABILITY
																	</option>
																	<option value="1">YES</option>
																	<option value="2">NO</option>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="mb-3 col-md-8">
																<table id="table" class="table unittable"
																	style="display:none">
																	<thead>
																		<tr name="table">
																			<th>SNO</th>
																			<th>BLOCK
																			</th>
																			<th>UNIT
																			</th>
																			<th>TYPE
																			</th>
																			<th>FLOOR
																			</th>
																			<th>DESCRIPTION
																			</th>
																		</tr>
																	</thead>
																	<tbody id="tableBody">
																	</tbody>
																</table>
															</div>
														</div>

														<div class="mt-2">
															<button type="submit"
																class="btn btn-success deactivate-account"
																name="submit">Save
															</button>
															<button type="reset"
																class="btn btn-danger deactivate-account  ">Reset
															</button>
															<button type="reset"
																class="btn btn-primary deactivate-account  ">Cancel
															</button>
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
		</div>
	</div>
</body>
<!-- / Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('.unitvalue').on('input', function () {
		$('.unittable').css('display', 'none');

		var unitvalue = $(this).val();
		$('#tableBody').empty();
		if (unitvalue > 0) {
			$('.unittable').css('display', 'block');
			for (var i = 1; i <= unitvalue; i++) {
				var newRow = '<tr> <td><input class="form-control" type="text" name="sno[]" value="' + (i) + '"></td><td><input class = "form-control" type="text" name="block[]"></td>  <td><input class = "form-control" type="text" name="unit[]"></td>  <td><input class = "form-control" type="text" name="type[]"></td>  <td><input class = "form-control" type="text" name="floor[]"></td>  <td><input class = "form-control" type="text" name="description[]"></td>  </tr>';
				$('#tableBody').append(newRow); // Append the new row to the table body
			}
			if (unitvalue > 1) {
				$('.unittable').css('overflow-y', 'scroll');
				$('.unittable').css('max-height', '300px');
			} else {
				$('.unittable').css('overflow-y', 'auto');
				$('.unittable').css('max-height', 'none');
			}
		}
	});	
</script>
<?php include('footer.php'); ?>
<!-- Footer -->