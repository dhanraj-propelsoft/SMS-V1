function myFunction(){

		$(document).ready(function() {
			// Bind submit event to the form
			$('#inputValue').keyup(function(event) {
				event.preventDefault(); // Prevent form from submitting
				var inputValue = $('#inputValue').val(); // Get the input value
				if (inputValue > 0) { // Check if the input value is greater than zero
					// Clear the table body
					$('#tableBody').empty();
					// Loop through the input value and add rows to the table
					for (var i = 1; i <= inputValue; i++) {
						var newRow = '<tr><td>Column 1 - Row ' + i + '</td><td>Column 2 - Row ' + i + '</td><td>Column 3 - Row ' + i + '</td><td>Column 4 - Row ' + i + '</td><td>Column 5 - Row ' + i + '</td></tr>';
						$('#tableBody').append(newRow); // Append the new row to the table body
					}
				}
			});
		});
	
}
<table id="table">

<div class="container">
	<div class="row mt-4">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>


						
						<th>SNO</th>
						<th>UNIT
						</th>
						<th>TYPE
						</th>
						<th>FLOOR
						</th>
						<th>DISCRIPTION
						</th>
					</tr>
				</thead>
				<tbody
					id="tableBody">
				</tbody>
			</table>
		</div>
	</div>
</div>
