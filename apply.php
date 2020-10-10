<?php require_once('inc/header.php'); ?>

<main class="apply">

	<div class="wrapper">

		<h1>Apply</h1>

		<p>Please fill out the form below if you would like to apply, or if you would like to print this application then please <a href="application.pdf">click here for download</a>.</p>

		<p id="thank-you">Thank you for applying<br> We will get back to you shortly.</p>

		<form id="apply">

			<fieldset>

				<legend>Personal Information</legend>

				<div class="c45 right">
					<label>First Name</label>
					<input type="text" name="firstName">
				</div>

				<div class="c10 left right">
					<label>Middle</label>
					<input type="text" name="middleName">
				</div>

				<div class="c45 left">
					<label>Last Name</label>
					<input type="text" name="lastName">
				</div>

				<div class="c45 right">
					<label>Street Address</label>
					<input type="text" name="personalAddress">
				</div>

				<div class="c30 left right">
					<label>City</label>
					<input type="text" name="personalCity">
				</div>

				<div class="c10 left right">
					<label>State</label>
					<input type="text" name="personalState">
				</div>

				<div class="c15 left">
					<label>ZIP Code</label>
					<input type="text" name="zip">
				</div>

				<div class="c25 right">
					<label>Phone</label>
					<input type="text" name="personalPhone">
				</div>

				<div class="c25 left right">
					<label>Email</label>
					<input type="text" name="personalEmail">
				</div>

				<div class="c25 left right">
					<label>Date of Birth</label>
					<input type="text" name="dob">
				</div>

				<div class="c25 left">
					<label>Social Security Number</label>
					<input type="text" name="ssn">
				</div>

				<label>Are you authorized to work in the United States?</label>
				<select name="authorizedToWork">
					<option value="">&mdash;</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>

			</fieldset>

			<fieldset>

				<legend>Driving History</legend>

				<div class="c70 right">
					<label>CDL License #</label>
					<input type="text" name="cdlLicense">
				</div>

				<div class="c10 left right">
					<label>State</label>
					<input type="text" name="drivingState">
				</div>

				<div class="c20 left">
					<label>Expiration Date</label>
					<input type="text" name="expDate">
				</div>

				<h2>Experience</h2>

				<table id="experience">
					<thead>
						<tr>
							<th>Class of Equipment</th>
							<th>Type of Equipment</th>
							<th>From Date</th>
							<th>To Date</th>
							<th>Approx. # of Miles</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Straight Truck</td>
							<td><input type="text" name="typeEquipment1"></td>
							<td><input type="text" name="fromDate1"></td>
							<td><input type="text" name="toDate1"></td>
							<td><input type="text" name="approxMiles1"></td>
						</tr>
						<tr>
							<td>Tractor and Semi-Trailer</td>
							<td><input type="text" name="typeEquipment2"></td>
							<td><input type="text" name="fromDate2"></td>
							<td><input type="text" name="toDate2"></td>
							<td><input type="text" name="approxMiles2"></td>
						</tr>
						<tr>
							<td>Tractor-Two Trailers</td>
							<td><input type="text" name="typeEquipment3"></td>
							<td><input type="text" name="fromDate3"></td>
							<td><input type="text" name="toDate3"></td>
							<td><input type="text" name="approxMiles3"></td>
						</tr>
						<tr>
							<td>Other</td>
							<td><input type="text" name="typeEquipment4"></td>
							<td><input type="text" name="fromDate4"></td>
							<td><input type="text" name="toDate4"></td>
							<td><input type="text" name="approxMiles4"></td>
						</tr>
					</tbody>
				</table>

				<h2>Citation Record for past 3 years</h2>

				<table id="citations">
					<thead>
						<tr>
							<th>Date of Citation</th>
							<th>Violation</th>
							<th>State</th>
							<th>Penalty</th>
							<th>Injury Occured</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="citationDate1"></td>
							<td><input type="text" name="violation1"></td>
							<td><input type="text" name="stateIssued1"></td>
							<td><input type="text" name="penalty1"></td>
							<td><input type="text" name="injuryOccured1"></td>
						</tr>
						<tr>
							<td><input type="text" name="citationDate2"></td>
							<td><input type="text" name="violation2"></td>
							<td><input type="text" name="stateIssued2"></td>
							<td><input type="text" name="penalty2"></td>
							<td><input type="text" name="injuryOccured2"></td>
						</tr>
						<tr>
							<td><input type="text" name="citationDate3"></td>
							<td><input type="text" name="violation3"></td>
							<td><input type="text" name="stateIssued3"></td>
							<td><input type="text" name="penalty3"></td>
							<td><input type="text" name="injuryOccured3"></td>
						</tr>
						<tr>
							<td><input type="text" name="citationDate4"></td>
							<td><input type="text" name="violation4"></td>
							<td><input type="text" name="stateIssued4"></td>
							<td><input type="text" name="penalty4"></td>
							<td><input type="text" name="injuryOccured4"></td>
						</tr>
					</tbody>
				</table>

				<label>Have you ever been denied a license, permit, or privilege to operate a motor vehicle?</label>
				<select name="deniedPrivs">
					<option>&mdash;</option>
					<option>No</option>
					<option>Yes</option>
				</select>
				<textarea name="deniedPrivsReason" placeholder="If yes above, then please explain here."></textarea>

				<label>Have you ever had any license, permit, or privilege ever been suspended or revoked?</label>
				<select name="revokedPrivs">
					<option>&mdash;</option>
					<option>No</option>
					<option>Yes</option>
				</select>
				<textarea name="revokedPrivsReason" placeholder="If yes above, then please explain here."></textarea>

			</fieldset>

			<fieldset>

				<legend>Employment History</legend>

				<p>Please list last 4 places of employment and explain any gaps in employment:</p>

				<table id="employers">
					<thead>
						<tr>
							<th>Employer</th>
							<th>Address</th>
							<th>Position</th>
							<th>From</th>
							<th>To</th>
							<th>Supervisor Name</th>
							<th>Phone</th>
							<th>Reason for Leaving</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="employerName1"></td>
							<td><input type="text" name="employerAddress1"></td>
							<td><input type="text" name="employerPosition1"></td>
							<td><input type="text" name="employerFromDate1"></td>
							<td><input type="text" name="employerToDate1"></td>
							<td><input type="text" name="employerSupervisor1"></td>
							<td><input type="text" name="employerPhone1"></td>
							<td><input type="text" name="employerReasonLeaving1"></td>
						</tr>
						<tr>
							<td><input type="text" name="employerName2"></td>
							<td><input type="text" name="employerAddress2"></td>
							<td><input type="text" name="employerPosition2"></td>
							<td><input type="text" name="employerFromDate2"></td>
							<td><input type="text" name="employerToDate2"></td>
							<td><input type="text" name="employerSupervisor2"></td>
							<td><input type="text" name="employerPhone2"></td>
							<td><input type="text" name="employerReasonLeaving2"></td>
						</tr>
						<tr>
							<td><input type="text" name="employerName3"></td>
							<td><input type="text" name="employerAddress3"></td>
							<td><input type="text" name="employerPosition3"></td>
							<td><input type="text" name="employerFromDate3"></td>
							<td><input type="text" name="employerToDate3"></td>
							<td><input type="text" name="employerSupervisor3"></td>
							<td><input type="text" name="employerPhone3"></td>
							<td><input type="text" name="employerReasonLeaving3"></td>
						</tr>
						<tr>
							<td><input type="text" name="employerName4"></td>
							<td><input type="text" name="employerAddress4"></td>
							<td><input type="text" name="employerPosition4"></td>
							<td><input type="text" name="employerFromDate4"></td>
							<td><input type="text" name="employerToDate4"></td>
							<td><input type="text" name="employerSupervisor4"></td>
							<td><input type="text" name="employerPhone4"></td>
							<td><input type="text" name="employerReasonLeaving4"></td>
						</tr>
					</tbody>																		
				</table>

				<label>Please indicate any dates for the gaps in employment and use this space to explain:</label>
				<textarea name="gapsInEmployment"></textarea>

				<label>Have you ever been convincted of a felony?</label>
				<select name="convinctedFelon">
					<option value="">&mdash;</option>
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
				<textarea name="convinctedFelonReason" placeholder="If yes above, then please explain here."></textarea>

			</fieldset>

			<fieldset>

				<legend>Job References</legend>

				<p>Please provide (3) persons for reference other than family members who have knowledge of your work history or safety habits.</p>

				<table id="jobs">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Relationship</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="refName1"></td>
							<td><input type="text" name="refEmail1"></td>
							<td><input type="text" name="refPhone1"></td>
							<td><input type="text" name="refRelationship1"></td>
						</tr>
						<tr>
							<td><input type="text" name="refName2"></td>
							<td><input type="text" name="refEmail2"></td>
							<td><input type="text" name="refPhone2"></td>
							<td><input type="text" name="refRelationship2"></td>
						</tr>
						<tr>
							<td><input type="text" name="refName3"></td>
							<td><input type="text" name="refEmail3"></td>
							<td><input type="text" name="refPhone3"></td>
							<td><input type="text" name="refRelationship3"></td>
						</tr>
					</tbody>
				</table>

				<label>How did you hear about this position?</label>
				<textarea name="hearAboutUs"></textarea>

				<button type="button">Submit Application</button>										

		</form>

	</div>

</main>

<?php require_once('inc/footer.php'); ?>