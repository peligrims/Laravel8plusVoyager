<h1 class="text-center">Business Purpose/Commercial Loan Application</h1>
<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('palaadd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	{!! Form::hidden('user_id',$user->id) !!}
	<div class="one">
		<a>1. CREDIT REQUESTED</a>
		

		<!-- Loan Type Radios  -->
		<div class="form-group">
			<label class="col-xs-2 control-label" for="Loan Type">Loan Type</label>
			<div class="col-md-4">
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type"  value="Purchase" checked="checked">
					Purchase
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type" value="Ground-Up Construction">
					Ground-Up Construction
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type"  value="No/Limitted Cash-Out Refinance">
					No/Limitted Cash-Out Refinance
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type"  value="Cash-Out Refinance">
					Cash-Out Refinance
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type" value="Business Expansion">
					Business Expansion
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type"  value="Rehab">
					Rehab
				</label><br>
				<label class="radio-inline" for="Loan Type">
					<input type="radio" name="loan_type"  value="Other(exlain)">
					Other(exlain)
				</label>
			</div>
		</div>
		<!-- Amount Requested Input  -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Amount Requested</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="amount_requested" type="text" placeholder="Amount Requested" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Interest rate Input  -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="interest rate">Interest rate</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="interest rate" name="interest_rate" type="text" placeholder="Interest rate (%)" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<label class="radio-inline" for="interest_rate">
					<input type="radio" name="value_interest_rate"  value="Fixed" checked="checked">
					Fixed
				</label>
				<label class="radio-inline" for="interest_rate">
					<input type="radio" name="value_interest_rate" value="Variable">
					Variable
				</label>
			</div>
		</div>
		<!-- Amortization type Radio  -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="Amortization_type">Amortization type</label>

			<div class="col-md-4">
				<label class="radio-inline" for="Amortization_type-0">
					<input type="radio" name="amortization_type" value="Fixed Rate" checked="checked">
					Fixed Rate
				</label>
				<label class="radio-inline" for="Amortization_type-1">
					<input type="radio" name="amortization_type" value="Variable">
					Variable
				</label>

			</div>
		</div>
		<!-- Proposed Exit Strategy for Requested Loan Radio  -->
		<div class="form-group">
			<label class="col-md-2 control-label" for="Proposed Exit Strategy for Requested Loa">Proposed Exit Strategy for Requested Loan</label>
			<div class="col-md-4">
				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="pes_requested_loan"  value="Refinance" checked="checked">
					Refinance
				</label>
				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="pes_requested_loan"  value="Resale">
					Resale
				</label>
				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="pes_requested_loan"  value="Principal Pay down">
					Principal Pay down
				</label>
				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="pes_requested_loan"  value="Other">
					Other
				</label>
			</div>
		</div>
		<div>
			<p>
				<b>Intended loan purpose and use of loan proceeds shall be set forth on a separate "Loan Purpose and Real Property Loan Security Declaration."<b>

			</p>
		</div>
		<!-- Vesting (Manner in which title will be held)  -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="vesting">Vesting (Manner in which title will be held):</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="vesting" type="text" placeholder="Name" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Will additional property  -->
		<div class="form-group">
			{!! Form::label('additional_property', 'Will additional property be given as collateral by a guarantor, or any person who will not
			be a Borrower or Co-Borrower?',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">

				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="additional_property" value="Yes" checked="checked">
					Yes (provide guarantos business purpose loanapplicationand property information)
				</label>
				<label class="radio-inline" for="pes_requested_loan">
					<input type="radio" name="additional_property"  value="No">
					No
				</label>

			</div>
		</div>
	</div>
	<div class="two">
		<a>2. PROPERTY INFORMATION</a>

		<!-- Subject Property Address -->
		<div class="form-group">
			<label class="col-md-2 control-label col-xs-12" for="Subject Property Address">Subject Property Address</label>
			<div class="col-md-2  col-xs-4">
				<input  name="spa_street" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="spa_city" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="spa_state" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-1 col-xs-4">
				<input  name="spa_zip" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
			<div class="col-md-1 col-xs-4">
				<input name="Nof" type="text" placeholder="No of Units" class="form-control input-md ">
			</div>

		</div>
		<!-- Current occupancy -->
		<div class="form-group">
			{!! Form::label('current_occupancy', 'Current occupancy',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				<label class="radio-inline" for="current_occupancy">
					<input type="radio" name="current_occupancy" id="current_occupancy" value="Owner" checked="checked">
					Owner
				</label>
				<label class="radio-inline" for="current_occupancy">
					<input type="radio" name="current_occupancy" id="current_occupancy" value="Tenant">
					Tenant
				</label>
				<label class="radio-inline" for="current_occupancy">
					<input type="radio" name="current_occupancy" id="current_occupancy" value="Vacant">
					Vacant
				</label>
				<label class="radio-inline" for="current_occupancy">
					<input type="radio" name="current_occupancy" id="current_occupancy" value="Other">
					Other
				</label>
			</div>
		</div>
		<!-- Proposed Occupancy -->
		<div class="form-group">
			{!! Form::label('proposed_occupancy', 'Proposed Occupancy (if occupancy is to change post close)',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				<label class="radio-inline" for="proposed_occupancy">
					<input type="radio" name="proposed_occupancy" id="proposed_occupancy" value="Owner" checked="checked">
					Owner
				</label>
				<label class="radio-inline" for="proposed_occupancy">
					<input type="radio" name="proposed_occupancy" id="proposed_occupancy" value="Tenant">
					Tenant
				</label>
				<label class="radio-inline" for="proposed_occupancy">
					<input type="radio" name="proposed_occupancy" id="proposed_occupancy" value="Vacant">
					Vacant
				</label>
				<label class="radio-inline" for="proposed_occupancy">
					<input type="radio" name="proposed_occupancy" id="proposed_occupancy" value="Other">
					Other
				</label>
			</div>

		</div>
		<!-- Year build -->
		<div class="form-group">
			{!! Form::label('year_b', 'Year build',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-md-2">
				<input name="year_b" type="text" placeholder="Year Build" class="form-control input-md ">
			</div>
		</div>
		<!-- Type of Property -->
		<div class="form-group">
			<label class="col-xs-2 control-label" for="Type of Property">Type of Property</label>
			<div class="col-md-4">
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property"  value="SFR-1 unit" checked="checked">
					SFR-1 unit
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property" value="Unimproved Land">
					Unimproved Land
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property" value="Duplex-2 units">
					Duplex-2 units
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property" value="Improved Land">
					Improved Land
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property"  value="Triplex/Quadruplex -3 to 4 units">
					Triplex/Quadruplex -3 to 4 units
				</label><br>

				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property"  value="Other(specify)">
					Other(specify)
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property"  value="Commercial Residental">
					Commercial Residental
				</label><br>
				<label class="radio-inline" for="Type of Property">
					<input type="radio" name="type_of_property" value="Commercial no-Residental">
					Commercial no-Residental
				</label>
			</div>
		</div>
		<!-- Beneficiary -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="Beneficiary">Beneficiary</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_beneficiary" type="text" placeholder="Beneficiary" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Lien Position -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_lien_position">Lien Position</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_lien_position" type="text" placeholder="Beneficiary" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Lien Position -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_interest_rate">Interest rate</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_interest_rate" type="text" placeholder="Interest rate" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Lien Position -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_amortization_type">Amortization type</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_amortization_type" type="text" placeholder="Amortization type: Fixed or any" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Monthly payment -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_monthly_payment">Monthly payment</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_monthly_payment" type="text" placeholder="Monthly payment" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Balloon payment (Date)-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_balloon_payment_d">Balloon payment (date)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_balloon_payment_d" type="date" placeholder="Balloon payment (date)" class="form-control input-md">

				</div>
			</div>
		</div>
		<!-- Balloon Payment (Amount)-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="lcp_balloon_payment_a">Balloon Payment (Amount)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="lcp_balloon_payment_a" type="text" placeholder="Balloon Payment (Amount)" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Lien Will Remain on Title-->
		<div class="form-group">
			{!! Form::label('lcp_lwr_on_title', 'Lien Will Remain on Title',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				<label class="radio-inline" for="lcp_lwr_on_title">
					<input type="radio" name="lcp_lwr_on_title"  value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="lcp_lwr_on_title">
					<input type="radio" name="lcp_lwr_on_title"  value="No">
					No
				</label>
			</div>
		</div>
		<!-- Lien Will Subordinate-->
		<div class="form-group">
			{!! Form::label('lcp_lws', 'Lien Will Subordinate',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">

				<label class="radio-inline" for="lcp_lws">
					<input type="radio" name="lcp_lws" id="lcp_lws" value="Yes (if yes what position)" checked="checked">
					Yes (if yes what position)
				</label>
				<label class="radio-inline" for="lcp_lws">
					<input type="radio" name="lcp_lws" id="lcp_lws" value="No">
					No
				</label>

			</div>
		</div>
		<!-- Lien Will be Paid-off from Loan Proceeds-->
		<div class="form-group">
			{!! Form::label('lcp_lwpo_from_lp', 'Lien Will be Paid-off from Loan Proceeds',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">

				<label class="radio-inline" for="lcp_lwpo_from_lp">
					<input type="radio" name="lcp_lwpo_from_lp" id="lcp_lwpo_from_lp" value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="lcp_lwpo_from_lp">
					<input type="radio" name="lcp_lwpo_from_lp" id="lcp_lwpo_from_lp" value="No">
					No
				</label>

			</div>
		</div>
		<!-- Additional Lien Information on an Addendum-->
		<div class="form-group">
			{!! Form::label('lcp_add_lia', 'Additional Lien Information on an Addendum',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">

				<label class="radio-inline" for="lcp_add_lia">
					<input type="radio" name="lcp_add_lia" id="lcp_add_lia" value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="lcp_add_lia">
					<input type="radio" name="lcp_add_lia" id="lcp_add_lia" value="No">
					No
				</label>

			</div>
		</div>
		<!-- Table for construction loan -->
		<p>Complete this line if this is a construction loan.</p>
		<table class="table" border="1" width="400">
			<tbody>
				<tr>
					<td>Year Lot Acquired</td>
					<td>Original Cost of Lot</td>
					<td>Amount Existing Liens</td>
					<td>(a)Present Value of Lot</td>
					<td>(b)Proposed Rehab Budget</td>
					<td>Estimated After Repair Value</td>
				</tr>
				<tr>
					<td><input class="col-md-6" type="text" name="yla"></td>
					<td><input class="col-md-6" type="text" name="ocl"></td></td>
					<td><input class="col-md-6" type="text" name="ael"></td>
					<td><input class="col-md-6" type="text" name="pvl"></td>
					<td><input class="col-md-6" type="text" name="prb"></td>
					<td><input class="col-md-6" type="text" name="ear" ></td>
				</tr>
			</tbody>
		</table>
		<!--Table for refinance loan-->
		<p>Complete this line if this is a refinance loan.</p>
		<table class="table" border="1" width="400">
			<tbody>
				<tr>
					<td>Year Lot Acquired</td>
					<td>Original Cost</td>
					<td>Amount Existing Liens</td>
					<td>Cost Improvements Made</td>
					<td>Cost Improvements to be Made</td>
				</tr>
				<tr>
					<td><input class="col-md-6" type="text" name="yla1"></td>
					<td><input class="col-md-6" type="text" name="oc"></td>
					<td><input class="col-md-6" type="text" name="ael1"></td>
					<td><input class="col-md-6" type="text" name="cim"></td>
					<td><input class="col-md-6" type="text" name="cit"></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="three">
		<a>3. CO-BORROWER INFORMATION </a>
		
		<!-- Name Co-Borrower Input  -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Name Co-Borrower</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="co_borrower" type="text" placeholder="Name (include Jr. or Sr. if applicable)" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Co-Borrower SSN -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Co-Borrower Social Security Number</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="ssn2" type="text" placeholder="XX-XXXXXXX" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Co-Borrower Home Phone -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Home Phone</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="phone2" type="text" placeholder="incl. area code" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Co-Borrower DOB -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">DOB (mm/dd/yyyy)</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="date_of_birth2" type="text" placeholder="mm/dd/yyyy" class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Co-Borrower Yrs. School -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Yrs. School</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="yrsschool2" type="text" placeholder="Yrs. School" class="form-control input-md">
				</div>
			</div>
		</div>
		
		<!-- Co-Borrower marital status -->
		<div class="form-group">
			<label class="col-md-2 control-label" for="radios">Marital Status:</label>
			<div class="col-md-2">
				<label class="radio-inline" for="radios-0">
			<input type="radio" name="maritalstatus2" value="Married (includes registered domestic partners)" checked="checked">
					Married (includes registered domestic partners)
				</label><br>
				<label class="radio-inline" for="radios-1">
			<input type="radio" name="maritalstatus2"  value="Unmarried <br>(includes, divorces, widowed)">
					Unmarried (includes, divorces, widowed)
				</label><br>
				<label class="radio-inline" for="radios-1">
			<input type="radio" name="maritalstatus2" value="Single (never been married)">
					Single (never been married)
				</label><br>
				<label class="radio-inline" for="radios-1">
			<input type="radio" name="maritalstatus2" value="Separated">
					Separated
				</label><br>
			</div>
		</div>
		<!-- Co-Borrower Dependents NUM -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Dependents
				(not listed by Borrower)</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="no2" type="text" placeholder="No." class="form-control input-md">
				</div>
			</div>
		</div>
		<!-- Co-Borrower Dependents Ages -->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="amount_requested">Ages</label>
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="ages2" type="text" placeholder="No." class="form-control input-md">
				</div>
			</div>
		</div>
		
		<!-- Co-Borrower Present Address -->
		<div class="form-group">
			<label class="col-md-4 control-label col-xs-12" for="Present Address">Present Address</label>
			<div class="col-md-2  col-xs-4">
				<input id="pstreet" name="pstreet2" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input id="pcity" name="pcity2" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input id="pstate" name="pstate2" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input id="pzip" name="pzip2" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
		</div>
		<!-- Co-Borrower Mailing Address -->
		<div class="form-group">
			<label class="col-md-4 control-label col-xs-12" for="Mailing Address">Mailing Address</label>
			<div class="col-md-2  col-xs-4">
				<input  name="mstreet2" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="mcity2" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="mstate2" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="mzip2" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
		</div>
		<!-- Co-Borrower Former Address -->
		<div class="form-group">
			<label class="col-md-4 control-label col-xs-12" for="Former Address">Former Address</label>
			<div class="col-md-2  col-xs-4">
				<input  name="fstreet2" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="fcity2" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="fstate2" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="fzip2" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
		</div>
		
		
		
	
	</div>
	
	
	
	<div class="forth">
		<a>4. ENTITY INFORMATION</a>

		<!--Entity is a/an-->
		<div class="form-group">
			<label class="col-xs-2 control-label" for="Entity is a/an">Entity is a/an:</label>
			<div class="col-md-4">
				<label class="radio-inline" for="corporation">
					<input type="radio" name="entity"  value="Corporation" checked="checked">
					Corporation
				</label><br>
				<label class="radio-inline" for="llc">
					<input type="radio" name="entity"  value="LLC">
					LLC
				</label><br>
				<label class="radio-inline" for="partnership">
					<input type="radio" name="entity" value="Partnership">
					Partnership
				</label><br>
				<label class="radio-inline" for="limited_partnership">
					<input type="radio" name="entity"  value="Limited Partnership">
					Limited Partnership
				</label><br>
				<label class="radio-inline" for="nonprofit_entity">
					<input type="radio" name="entity" value="Nonprofit entity">
					Nonprofit entity
				</label><br>
				<label class="radio-inline" for="government_entity">
					<input type="radio" name="entity"  value="Government Entity">
					Government Entity
				</label><br>
				<label class="radio-inline" for="trust">
					<input type="radio" name="entity" value="Trust">
					Trust
				</label><br>
				<label class="radio-inline" for="Other(specifi)">
					<input type="radio" name="entity" value="Other(specifi)">
					Other(specifi)
				</label>
			</div>
		</div>
		<!--Entity Name-->
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<!--en-->
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="en" type="text" placeholder="Entity Name" class="form-control input-md">
				</div>
			</div>
			<!--so-->
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="so" type="text" placeholder="State of Organization" class="form-control input-md">
				</div>
			</div>
			<!--tin-->
			<div class="col-md-2">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="tin" type="text" placeholder="XX-XXXXXXX" class="form-control input-md">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<!--spbe-->
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="spbe" type="text" placeholder="Signing Party on Behault of Entity" class="form-control input-md">
				</div>
			</div>
			<!--title-->
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="title" type="text" placeholder="Title" class="form-control input-md">
				</div>
			</div>
		</div>
		<!--list_members-->
		<div class="form-group">
			{!! Form::label('list_members', 'List Members Under the Entity and ther Title',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('list_members', old('list_members'), ['class' => 'form-control','placeholder'=>'Enter the list of participants under the object and their title separated by commas']) !!}
			</div>
		</div>
		<!--dfo fl-->
		<div class="form-group">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="dfo" type="date" placeholder="Date of Filing to Organize" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="fl" type="text" placeholder="Filing Locations" class="form-control input-md">
				</div>
			</div>
		</div>
		<!--Principal Place of Business Address-->
		<div class="form-group">
			<label class="col-md-2 control-label col-xs-12" for="Principal_Address">Principal Place of Business Address (not a P.O. Box) </label>
			<div class="col-md-2  col-xs-4">
				<input name="p_street" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="p_city" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="p_state" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="p_zip" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
		</div>
		<!--Mailing Address-->
		<div class="form-group">
			<label class="col-md-2 control-label col-xs-12" for="Mailing Address">Mailing Address (if different from the above) </label>
			<div class="col-md-2  col-xs-4">
				<input name="m_street" type="text" placeholder="Street" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="m_city" type="text" placeholder="City" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input name="m_state" type="text" placeholder="State" class="form-control input-md ">
			</div>
			<div class="col-md-2 col-xs-4">
				<input  name="m_zip" type="text" placeholder="Zip" class="form-control input-md ">
			</div>
		</div>
		<!--bsar-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="bsar">Balance Sheet Available for Rewiew</label>
			<div class="col-md-4">
				<label class="radio-inline" for="bsar-0">
					<input type="radio" name="bsar"  value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="bsar-1">
					<input type="radio" name="bsar"  value="No">
					No
				</label>
			</div>
			<!--fscpapa-->
			<label class="col-md-2 control-label"  for="fscpapa">Financial Statements have been audited by CPA or PA</label>
			<div class="col-md-4">
				<label class="radio-inline" for="fscpapa-0">
					<input type="radio" name="fscpapa"  value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="fscpapa-1">
					<input type="radio" name="fscpapa"  value="No">
					No
				</label>
			</div>
		</div>
		<!--ami-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="ami">Additional Member Information on an Addendum</label>
			<div class="col-md-4">
				<label class="radio-inline" for="ami-0">
					<input type="radio" name="ami" value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="ami-1">
					<input type="radio" name="ami" value="No">
					No
				</label>
			</div>
		</div>
	</div>
	<div class="five">
		<a>5. EMPLOYMENT INFORMATION</a>

		<p>Borrower</p>
		<div class="form-group">
			<!--nae-->
			<label class="col-md-2 control-label"  for="name&address of employer">Name & Address of Employer</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="nae" type="text" placeholder="Name&Address of Employer" class="form-control input-md">
				</div>

			</div>
			<!--self_employed-->
			<div class="col-md-4">
				<div class="form-check">
					<label class="form-check-label" for="self_employed">Self Employed</label>
					<input class="form-check-input"  name="self_employed" type="checkbox" value="Yes">
				</div>
			</div>
		</div>
		<!--ytj-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="ytj">Yrs.on this job</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="ytj" type="date" placeholder="Yrs.on this job" class="form-control input-md">
				</div>

			</div>
		</div>
		<!--yelwp-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="yelwp">Yrs.employed in this line of work/profession</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="yelwp" name="yelwp" type="text" placeholder="Yrs.employed in this line of work/profession" class="form-control input-md">
				</div>
			</div>
		</div>
		<!--pttb-->
		<div class="form-group">
			<div class = "col-xs-2">

			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="pttb" name="pttb" type="text" placeholder="Position/Title/Type of Business" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="bp" name="bp" type="text" placeholder="Business Phone (incl. area code)" class="form-control input-md">
				</div>
			</div>
		</div>
		<p>If employed in current position for less than two years or if currently employed in more than one position, complete the following: </p>
		<!--nae1-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="name&address of employer">Name & Address of Employer</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="nae1" name="nae1" type="text" placeholder="Name&Address of Employer" class="form-control input-md">
				</div>

			</div>
			<!--self_employed1-->
			<div class="col-md-4">
				<div class="form-check">
					<label class="form-check-label" for="self_employed">Self Employed</label>
					<input class="form-check-input"  name="self_employed1" type="checkbox" value="self_employed" >
				</div>
			</div>
		</div>
		<!--ytj1-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="ytj">Date (from - to)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="ytj1" type="date" placeholder="Yrs.on this job" class="form-control input-md">
				</div>

			</div>
		</div>
		<!--yelwp1-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="yelwp1">Monthly Income</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="yelwp1" type="text" placeholder="Yrs.employed in this line of work/profession" class="form-control input-md">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<!--pttb1-->
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="pttb1" name="pttb1" type="text" placeholder="Position/Title/Type of Business" class="form-control input-md">
				</div>
			</div>
			<!--bp1-->
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="bp1" name="bp1" type="text" placeholder="Business Phone (incl. area code)" class="form-control input-md">
				</div>
			</div>
		</div>
	</div>
	<div class="six">
		<!--Table for MONTHLY INCOME-->
		<div class="table-responsive-md-2">
			<a>6. MONTHLY INCOME AND COMBINED HOUSING EXPENSE INFORMATION</a>
			<table class="table" border="1" width="400">
				<thead>
					<tr>
						<th>Gross Monthly Income</th>
						<th>Borrower</th>
						<th>Co-Borrower</th>

						<th>Monthly Housing Expense</th>
						<th>Current Housing Expenses</th>
						<th>Requested Loan Housing Expenses</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="mat_count">Base Empl. Income*</td>
						<td class="mat_count"><input id="1_mat_1" class="col-md-6" type="text"  name="bei" ></td>
						<td class="mat_count"><input id="1_mat_2" class="col-md-6" type="text"  name="bei1"></td>

						<td class="mat_count">Rent</td>
						<td class="mat_count"><input id="1_mat_5"class="col-md-6"	type="text"  name="ren" ></td>
						<td class="mat_count"><input id="1_mat_6"class="col-md-6"	type="text" ></td>
					</tr>
					<tr>
						<td class="mat_count">Overtime</td>
						<td class="mat_count"><input id="2_mat_1" class="col-md-6" type="text" name="ov" ></td>
						<td class="mat_count"><input id="2_mat_2"class="col-md-6" type="text" name="ov1" ></td>

						<td class="mat_count">First Mortgage (P&I)</td>
						<td class="mat_count"><input id="2_mat_5"class="col-md-6" type="text" name="fm" ></td>
						<td class="mat_count"><input id="2_mat_6"class="col-md-6" type="text" name="fm1" ></td>
					</tr>
					<tr>
						<td>Bonuses</td>
						<td class="mat_count" ><input id="3_mat_1" class="col-md-6" type="text" name="bo" ></td>
						<td class="mat_count" ><input id="3_mat_2" class="col-md-6" type="text" name="bo1" ></td>

						<td class="mat_count" >Second Mortgage (P&I)</td>
						<td class="mat_count" ><input id="3_mat_5" class="col-md-6" type="text" name="sm" ></td>
						<td class="mat_count" ><input id="3_mat_1" class="col-md-6" type="text" name="sm1" ></td>
					</tr>
					<tr>
						<td class="mat_count" >Commissions</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="co" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="co1" ></td>

						<td class="mat_count" >Other Financing (P&I)</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="of" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="of1" ></td>
					</tr>
					<tr>
						<td class="mat_count" >Dividends/Interest</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="di" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="di1" ></td>

						<td class="mat_count" >Hazard Insurance</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="hi" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="hi1" ></td>
					</tr>
					<tr>
						<td class="mat_count" >Net Rental Income</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="nr" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="nr1" ></td>

						<td class="mat_count" >Real Estate Taxes</td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="re" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text" name="re1" ></td>
					</tr>
					<tr>
						<td class="mat_count" >Other(before completing, see the notice in "describe other income," below)</td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="ot" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="ot1" ></td>

						<td class="mat_count" >Mortgage Insurance</td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="mi" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="mi1" ></td>
					</tr>
					<tr>
						<td class="mat_count" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="" ></td>

						<td class="mat_count" >Homeowner Assn. Dues</td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="ho" ></td>
						<td class="mat_count" ><input class="col-md-6" type="text"  name="ho1" ></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><input type="text" id="count_1" name="column_1"></td>
						<td><input type="text" id="count_2" name="column_2"></td>

						<td>Total</td>
						<td><input type="text" id="count_4" name="column_4"></td>
						<td><input type="text" id="count_5" name="column_5"></td>
					</tr>

				</tbody>
			</table>
		</div>
		<div class="form-group">
			<!--Describe other income-->
			{!! Form::label('doi', 'Describe other income',['class'=>'col-md-2 control-label']) !!}
			<div class="col-md-6">
				{!! Form::textarea('doi', old('doi'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Enter describe other income']) !!}
			</div>
			<!--Monthly_amount-->
			<div class="col-md-2">
				<input name="monthly_amount" type="text" placeholder="Monthly Amount $" class="form-control input-md ">
			</div>
		</div>
	</div>
	<div class="seven">
		<a> 7. MONTHLY INCOME AND COMBINED HOUSING EXPENSE INFORMATION</a>

		<p>This Statement and any applicable supporting schedules may be completed jointly by both married and unmarried Co-borrowers if their assets and liabilities are sufficiently joined so that the Statement can be meaningfully and fairly presented on a combined basis; otherwise, separate Statements and Schedules are required. If the Co-Borrower section
			was completed about a non-applicant spouse or other person, this Statement and supporting schedules must be completed by that spouse or other person also.</p>
		<p>NOTE: If completed jointly, please note the responsible party for the asset or liability.</p>
		<!--Monthly_amount jointly-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="completed">Completed</label>
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="jointly" value="Jointly" checked="checked">
					Jointly
				</label>
				<label class="radio-inline" for="amortization-1">
					<input type="radio" name="jointly" value="Not Jointly">
					Not Jointly
				</label>
			</div>
		</div>
		<div class="form-group container">
			<div class = "col-xs-2">
			</div>
			<!--Table for ASSETS-->
			<div class="table-responsive-md-2">
				<table class="table" border="1" width="200">
					<tbody>
						<tr>
							<td>ASSETS</td>
							<td>Cash or Market Value</td>
						</tr>
						<tr>
							<td>
								<label class="col-md-8 control-label"  for="list">Cash deposit toward purchase held by:</label>
							</td>
							<!--row2-->
							<td ><input class="col-md-6 mat-cou" id="1_mathem" type="text" placeholder="$" name="row2" ></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<p>
			<b>List checking and savings accounts below</b>
		</p>
		<!--First savings accounts-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="savings_accounts">
					<input type="radio" name="savings_accounts" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="savings_accounts">
					<input type="radio" name="savings_accounts" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name of Bank-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="list">Name and address of Bank, S&L, or Credit Union</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="nameofbank" type="text" placeholder="Name and address of Bank, S&L, or Credit Union" class="form-control input-md">
				</div>
			</div>
		</div>
		<!--acctno&acctsum-->
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="acctno" type="text" placeholder="Acct. no." class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="acctsum" id="2_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Second savings accounts-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="savings_accounts1">
					<input type="radio" name="savings_accounts1" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="savings_accounts1">
					<input type="radio" name="savings_accounts1" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name of Bank1-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="list">Name and address of Bank, S&L, or Credit Union</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="nameofbank1" type="text" placeholder="Name and address of Bank, S&L, or Credit Union" class="form-control input-md">
				</div>
			</div>
		</div>
		<!--acctno&acctsum1-->
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="acctno1" type="text" placeholder="Acct. no." class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="acctsum1" id="3_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Third savings accounts1-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts2" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization-1">
					<input type="radio" name="savings_accounts2" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name of Bank2-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="list5">Name and address of Bank, S&L, or Credit Union</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="nameofbank2" type="text" placeholder="Name and address of Bank, S&L, or Credit Union" class="form-control input-md">
				</div>

			</div>
		</div>
		<!--acctno&acctsum2-->
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="acctno2" type="text" placeholder="Acct. no." class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="acctsum2" id="4_mathem" name="acct5" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Fourth savings accounts3-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts3" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts3" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Stocks & Bonds3&stocksbondssum-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="list5">Stocks & Bonds
				(Company name/number description)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="stocksbonds" type="text" placeholder="(Company name/number description)" class="form-control input-md">
				</div>

			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="stocksbondssum" id="5_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Fifth row-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts4" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts4" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name of insurance-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="insurance">Life insurance net cash value</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="nameinsurance" type="text" placeholder="Life insurance net cash value" class="form-control input-md">
				</div>

			</div>
		</div>
		<!--Face amount insurance-->
		<div class="form-group">
			<div class = "col-xs-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="faceamount" type="text" placeholder="Face amount" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mat-cou">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="insurancesum" id="6_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Real estate owned-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="real_estate">Real estate owned (enter market value from schedule of real estate owned)</label>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="input-group mat-cou">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="realestateownedsum" id="7_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Sixth row-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts5" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts5" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name retirementfund-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="insurance">Vested interest in retirement fund</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="retirementfund" type="text" placeholder="Vested interest in retirement fund" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mat-cou">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="retirementfundsum" id="8_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Seventh row-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts6" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts6" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name business-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="insurance">Net worth of business(es) owned
				(attach financial statement)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="business" type="text" placeholder="Net worth of business(es) owned" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mat-cou">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="businesssum" id="9_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Eighth row-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts7" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts7" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		<!--Name auto-->
		<div class="form-group">
			<label class="col-md-2 control-label"  for="insurance">Automobiles owned (make and year)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="auto" type="text" placeholder="Automobiles owned" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group mat-cou">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="autosum" id="10_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Ninth row-->
		<div class="form-group">
			<div class="col-md-4">
				<label class="radio-inline" for="Completed">
					<input type="radio" name="savings_accounts8" value="Borrower" checked="checked">
					Borrower
				</label>
				<label class="radio-inline" for="amortization">
					<input type="radio" name="savings_accounts8" value="Co-borrower">
					Co-borrower
				</label>
			</div>
		</div>
		Other Assets (itemize)
		<div class="form-group">
			<label class="col-md-2 control-label"  for="insurance">Other Assets (itemize)</label>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input  name="assets" type="text" placeholder="Other Assets" class="form-control input-md">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input name="assetssum" id="11_mathem" type="text" placeholder="$" class="form-control input-md mat-cou">
				</div>
			</div>
		</div>
		<!--Total Assets a.-->
		<label class="radio-inline" for="Completed">Total Assets
			<b>a.</b></label>
		<div class="form-group">

			<div class="col-md-4">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-female" style="font-size: 20px;"></i>
					</div>
					<input id="totala1" onchange="calc()" name="totala" type="text" placeholder="$" class="form-control input-md totala">
				</div>
			</div>
		</div>
		<p>
			<b>Liabilities and Pledged Assets. List the creditor's name, address and account number for all outstanding
				debts, including automobile loans, revolving charge accounts, real estate loans, alimony, child support,
				stock pledges, etc. Use continuation sheet, if necessary. Indicate by (*) those liabilities which will be
				satisfied upon sale of real estate owned or upon refinancing of the subject property.</b>
		</p>
		<table class="table" border="1" width="400">
			<tbody>
				<tr>
					<td>LIABILITIES</td>
					<td>Monthly Payment & Months Left to Pay</td>
					<td>Unpaid Balance</td>
				</tr>
				<tr>
					<td>
						<!--First NAME LIABILITIES-->
						<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities1"  value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="liabilities1" value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
						<!--First Nameliabilities-->
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="list" name="nameliabilities1" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
							<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="acctliabilities1" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
						<div class="form-group">
						<!--First acctliabilities-->
						<div class = "col-xs-2">
						</div>
						</div>
					</td>
						<!--First $Payment/Months-->
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="payment1" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<!--First Unpaid Balance-->
					<td>
						<input name="unpaidbalance1" type="text" placeholder="$" class="form-control input-md liabilities">
					</td>
				</tr>
				<tr>
					<td>
						<!--Second NAME LIABILITIES-->
						<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities2" id="list" value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities2"  value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="nameliabilities2" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>

							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="acctliabilities2" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class = "col-xs-2">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="payment2" name="payment" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>

							</div>
						</div>
					</td>
					<td>
						<input  name="unpaidbalance2" type="text" placeholder="$" class="form-control input-md liabilities">

					</td>
				</tr>
				<tr>
					<td>
						<!--Tree NAME LIABILITIES-->
						<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities3"  value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="liabilities3" value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="nameliabilities3" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="acctliabilities3" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="payment1" name="payment1" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<td>
						<input id="unpaidbalance1" name="unpaidbalance1" type="text" placeholder="$" class="form-control input-md liabilities"></td>
					
				</tr>
				<tr>
					<td>
						<!--4 NAME LIABILITIES-->
						<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities4"  value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="liabilities4" value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
						<!--First Nameliabilities-->
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="list" name="nameliabilities4" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="acctliabilities4" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
						<div class="form-group">
							<!--First acctliabilities-->
							<div class = "col-xs-2">
							</div>
						</div>
					</td>
					<!--First $Payment/Months-->
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="payment4" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<!--First Unpaid Balance-->
					<td>
						<input name="unpaidbalance4" type="text" placeholder="$" class="form-control input-md liabilities">
					</td>
				</tr>
				<tr>
					<td>
						<!--First NAME LIABILITIES-->
						<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities5"  value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="liabilities5" value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
						<!--First Nameliabilities-->
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="list" name="nameliabilities5" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="acctliabilities5" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
						<div class="form-group">
							<!--First acctliabilities-->
							<div class = "col-xs-2">
							</div>
						</div>
					</td>
					<!--First $Payment/Months-->
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="payment5" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<!--First Unpaid Balance-->
					<td>
						<input name="unpaidbalance5" type="text" placeholder="$" class="form-control input-md liabilities">
					</td>
				</tr>
				<tr>
					<td>
					<!--First NAME LIABILITIES-->
					<div class="form-group">
							<div class="col-md-4">
								<label class="radio-inline" for="Completed">
									<input type="radio" name="liabilities6"  value="Borrower" checked="checked">
									Borrower
								</label><br>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="liabilities6" value="Co-borrower">
									Co-borrower
								</label>
							</div>
						</div>
					<!--First Nameliabilities-->
					<div class="form-group">
							<label class="col-md-4 control-label"  for="list">Name and address of Company</label>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input id="list" name="nameliabilities6" type="text" placeholder="Name and address of Company" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="acctliabilities6" type="text" placeholder="Acct. no." class="form-control input-md">
								</div>
							</div>
						</div>
					<div class="form-group">
							<!--First acctliabilities-->
							<div class = "col-xs-2">
							</div>
						</div>
					</td>
					<!--First $Payment/Months-->
					<td>
						<div class="form-group">
							<label class="col-md-4 control-label"  for="list">$Payment/Months</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="payment6" type="text" placeholder="Payment/Months" class="form-control input-md">
								</div>
							</div>
						</div>
					</td>
					<!--First Unpaid Balance-->
					<td>
						<input name="unpaidbalance6" type="text" placeholder="$" class="form-control input-md liabilities">
					</td>
				</tr>
				<tr>
					<td>
					Total Monthly Payments
					</td>
					<td>Net Worth => (a minus b)<input id="difference" name="difference" type="text" placeholder="$" class="form-control input-md">
						
					</td>
					<td>Total Liabilities
						<b>b.</b>
						<input id="totalb1" onchange="calc()" name="totalb" type="text" placeholder="$" class="form-control input-md totalb">

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="eight">
		<a> 8. SCHEDULE OF REAL ESTATE</a>


		<table border="1">
			<tr >
				<td width="400">
					<div  class="col-md-12">Property Address</div></td>
				<td>
					<div class="col-md-12">Type of Property</div></td>
				<td>
					<div class="col-md-12">Present Market Value</div></td>
				<td>
					<div class="col-md-12">Amount of Mortgages & Liens</div></td>
				<td>
					<div class="col-md-12">Gross Rental Income</div></td>
				<td>
					<div class="col-md-12">Mortgage Payments</div></td>
				<td>
					<div class="col-md-12">Maintenance,Taxes & Misc.</div></td>
				<td>
					<div class="col-md-12">NetRental Income</div></td>
			</tr>
			<tr>
				<td class="pl-0 pr-0 no-padding">
					<div class="col-md-3 pl-0 pr-0">
						<input id="Subject Property Address" name="spa_street1" type="text" placeholder="Street" class="form-control input-md pl-0 pr-0">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_city1" type="text" placeholder="City" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_state1" type="text" placeholder="State" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_zip1" type="text" placeholder="Zip" class="form-control input-md ">
					</div>
				</td>
				<td><input class="col-md-12" type="text"  name="a1"></td>
				<td><input class="expenses col-md-12" type="text"  name="b1"></td>
				<td><input class="expenses col-md-12" type="text"  name="c1"></td>
				<td><input class="expenses col-md-12" type="text"  name="d1"></td>
				<td><input class="expenses col-md-12" type="text"  name="e1"></td>
				<td><input class="expenses col-md-12" type="text"  name="f1"></td>
				<td><input class="expenses col-md-12" type="text"  name="g1"></td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3  ">
						<input id="Subject Property Address" name="spa_street2" type="text" placeholder="Street" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_city2" type="text" placeholder="City" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_state2" type="text" placeholder="State" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_zip2" type="text" placeholder="Zip" class="form-control input-md ">
					</div>
				</td>
				<td><input class="col-md-12" type="text"  name="a2"></td>
				<td><input class="expenses col-md-12" type="text"  name="b2"></td>
				<td><input class="expenses col-md-12" type="text"  name="c2"></td>
				<td><input class="expenses col-md-12" type="text"  name="d2"></td>
				<td><input class="expenses col-md-12" type="text"  name="e2"></td>
				<td><input class="expenses col-md-12" type="text"  name="f2"></td>
				<td><input class="expenses col-md-12" type="text"  name="g2"></td>

			</tr>
			<tr>
				<td>
					<div class="col-md-3  ">
						<input id="Subject Property Address" name="spa_street3" type="text" placeholder="Street" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_city3" type="text" placeholder="City" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_state3" type="text" placeholder="State" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_zip3" type="text" placeholder="Zip" class="form-control input-md ">
					</div>
				</td>
				<td><input class="col-md-12" type="text"  name="a3" ></td>
				<td><input class="expenses col-md-12" type="text"  name="b3"></td>
				<td><input class="expenses col-md-12" type="text"  name="c3"></td>
				<td><input class="expenses col-md-12" type="text"  name="d3"></td>
				<td><input class="expenses col-md-12" type="text"  name="e3"></td>
				<td><input class="expenses col-md-12" type="text"  name="f3"></td>
				<td><input class="expenses col-md-12" type="text"  name="g3"></td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3  ">
						<input id="Subject Property Address" name="spa_street4" type="text" placeholder="Street" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_city4" type="text" placeholder="City" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_state4" type="text" placeholder="State" class="form-control input-md ">
					</div>
					<div class="col-md-3 col-xs-4">
						<input id="Subject Property Address" name="spa_zip4" type="text" placeholder="Zip" class="form-control input-md ">
					</div>
				</td>
				<td><input class="col-md-12" type="text" name="a4"></td>
				<td><input class="expenses col-md-12" type="text" name="b4"></td>
				<td><input class="expenses col-md-12" type="text"  name="c4"></td>
				<td><input class="expenses col-md-12" type="text"  name="d4"></td>
				<td><input class="expenses col-md-12" type="text"  name="e4"></td>
				<td><input class="expenses col-md-12" type="text"  name="f4"></td>
				<td><input class="expenses col-md-12" type="text"  name="g1"></td>
			</tr>
			<tr>
				<td>
					<div class="col-md-8">TOTAL</div></td>
				<td><input class=" col-md-12"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum1"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum2"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum3"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum4"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum5"></td>
				<td><input class="expenses_sum col-md-12" name="expenses_sum6"></td>
			</tr>
		</table>
		
		<div class="form-group">
			<label class="col-md-2 control-label"  for="properties">Additional Properties on an Addendum</label>

			<div class="col-md-4">
				<label class="radio-inline" for="properties-0">
					<input type="radio" name="apa"  value="Yes" checked="checked">
					Yes
				</label>
				<label class="radio-inline" for="properties-1">
					<input type="radio" name="apa" value="No">
					No
				</label>

			</div>
		</div>
	</div>
	<div class="nine">
		<a> 9. LIST OF AUTHORIZED SIGNERS (BORROWER, CO-BORROWER AND/OR GUARANTORES) FOR THIS LOAN REQUEST </a>
	<table class="table" border="1">
			<tbody>
				<tr>
					<td  width="700">
						<div class="form-group">
						<label class="col-md-4 text-center"  for="nameandtitle">Name and Title</label>
						<div class="col-md-3">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="lasnameandtitle1" type="text" placeholder="Name and Title" class=" form-control ">
								</div>
							</div>
						<div class="col-md-5">
								<label class="radio-inline" for="amortization-0">
									<input type="radio" name="las1" value="Borrower" checked="checked">
									Borrower
								</label>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="las1"  value="Guarantor">
									Guarantor
								</label>
								
							</div>
						</div>
						<div class="col-md-12">
							<label class="col-md-4 text-center"  for="mailingaddress">Mailing Address</label>
							<div class="col-md-2">
								<input name="las_street1" type="text" placeholder="Street" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_city1" type="text" placeholder="City" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_state1" type="text" placeholder="State" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_zip1" type="text" placeholder="Zip" class="form-control input-md ">
							</div>
						</div>
						<div class="form-group">
						</div>
					</td>					
					<td  width="400">
						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="ssn1" type="text" placeholder="SSN" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="tin1" type="text" placeholder="TIN" class="form-control input-md">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="las_phone1" type="text" placeholder="phone" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="las_email1" type="text" placeholder="email" class="form-control input-md">
								</div>
							</div>
						</div>

					</td>
				</tr>
				<tr>
					<td  width="700">
						<div class="form-group">
							<label class="col-md-4 text-center"  for="nameandtitle">Name and Title</label>
							<div class="col-md-3">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="lasnameandtitle2" type="text" placeholder="Name and Title" class=" form-control ">
								</div>
							</div>
							<div class="col-md-5">
								<label class="radio-inline" for="las-0">
									<input type="radio" name="las2" id="las-0" value="1" checked="checked">
									Borrower
								</label>
								<label class="radio-inline" for="las-1">
									<input type="radio" name="las2" id="las-1" value="2">
									Guarantor
								</label>
							</div>
						</div>
							<div class="col-md-12">
							<label class="col-md-4 text-center"  for="mailingaddress">Mailing Address</label>
							<div class="col-md-2">
								<input name="las_street2" type="text" placeholder="Street" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_city2" type="text" placeholder="City" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_state2" type="text" placeholder="State" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_zip2" type="text" placeholder="Zip" class="form-control input-md ">
							</div>
						</div>
						<div class="form-group">
						</div>
					</td>
					<td  width="400">
						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="ssn3" type="text" placeholder="SSN" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="tin2" type="text" placeholder="TIN" class="form-control input-md">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="las_phone2" type="text" placeholder="phone" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="las_email2" type="text" placeholder="email" class="form-control input-md">
								</div>
							</div>
						</div>

					</td>
				</tr>
				<tr>
					<td  width="700">
						<div class="form-group">
							<label class="col-md-4 text-center"  for="nameandtitle">Name and Title</label>
							<div class="col-md-3">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="nameandtitle3" type="text" placeholder="Name and Title" class=" form-control ">
								</div>
							</div>
							<div class="col-md-5">
								<label class="radio-inline" for="amortization-0">
									<input type="radio" name="las3"  value="Borrower" checked="checked">
									Borrower
								</label>
								<label class="radio-inline" for="amortization-1">
									<input type="radio" name="las3" value="Guarantor">
									Guarantor
								</label>
							</div>
						</div>
							<div class="col-md-12">
							<label class="col-md-4 text-center"  for="mailingaddress">Mailing Address</label>
							<div class="col-md-2">
								<input name="las_street3" type="text" placeholder="Street" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_city3" type="text" placeholder="City" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_state3" type="text" placeholder="State" class="form-control input-md ">
							</div>
							<div class="col-md-2">
								<input name="las_zip3" type="text" placeholder="Zip" class="form-control input-md ">
							</div>
						</div>
						<div class="form-group">

						</div>
					</td>
					<td  width="400">
						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="ssn3" type="text" placeholder="SSN" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="tin3" type="text" placeholder="TIN" class="form-control input-md">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class = "col-xs-2">
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input name="las_phone3" type="text" placeholder="phone" class="form-control input-md">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-female" style="font-size: 20px;"></i>
									</div>
									<input  name="las_email3" type="text" placeholder="email" class="form-control input-md">
								</div>
							</div>
						</div>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="ten">	
	<div class = "col-md-5">
	<table class="table" border="1" >
				<tbody>
					<tr>
						<td width="350">a. Purchase price</td>
						<td><input name="purchase" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>b. Alterations, improvements, repairs</td>
						<td><input name="alterations" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>c. Land (if acquired separately)</td>
						<td><input name="land" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>d. Refinance (incl. debts to be paid off)</td>
						<td><input name="refinance" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>e. Estimated prepaid items</td>
						<td><input name="prepaid" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>f. Estimated closing costs</td>
						<td><input name="closing" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>g. Discount (if Borrower will pay)</td>
						<td><input name="discount" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>h. Total costs (add items a through g)</td>
						<td><input name="totalcosts" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>i. Subordinate financing</td>
						<td><input name="subordinate" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>j. Borrower's closing costs paid by Seller</td>
						<td><input name="closingcosts" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>k. Other Credits (explain)</td>
						<td><input name="credits" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>l. Loan amount</td>
						<td><input name="loanamount" type="text" class="form-control input-md"></td>
					</tr>
					<tr>
						<td>m. Cash from/to Borrower (subtract h from l)</td>
						<td><input name="cash" type="text" class="form-control input-md"></td>
					</tr>
				</tbody>
			</table>
	</div>
	</div>
	<div class="eleven">		
	<div class = "col-md-7">
			<a>If you answer "Yes" to any questions a through i, please use continuation sheet for explanation.</a>
			<table class="table" border="1">
				<tbody>
					<tr>
						<td width="400"></td>
						<td>Borrower</td>
						<td>Co-Borrower</td>
					</tr>
					<tr>
						<td>a. Are there any outstanding judgments against you?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_judgments "  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_judgments "  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_judgments" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_judgments"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>b. Have you been declared bankrupt within the past 7 years?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_bankrupt "  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_bankrupt "  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_bankrupt"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_bankrupt" value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Have you had property foreclosed upon or given title or deed in lieu thereof
							in the last 7 years?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_foreclosedupon"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_foreclosedupon" value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_foreclosedupon" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_foreclosedupon" value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Are you a party to a lawsuit?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_lawsuit"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_lawsuit" value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_lawsuit"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_lawsuit"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>e. Have you directly or indirectly been obligated on any loan which resulted in
							foreclosure, transfer of title in lieu of foreclosure, or judgment?</td>
						<td>
						<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_obligated"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_obligated" value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_obligated"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_obligated"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>f. Are you presently delinquent or in default on any Federal debt or any other
							loan, mortgage, financial obligation, bond, or loan guarantee?
							If "Yes," give details as described in the preceding question.</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_delinquent"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_delinquent"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_delinquent"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_delinquent"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>g. Are you obligated to pay alimony, child support, or separate maintenance?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_pay_alimony" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_pay_alimony" value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_pay_alimony" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_pay_alimony" value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>h. Is any part of the down payment borrowed?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_down_payment"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_down_payment"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_down_payment"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_down_payment"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>i. Are you a co-maker or endorser on a note?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_co_maker"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_co_maker"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_co_maker"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_co_maker"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>j. Are you a U. S. citizen?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_citizen"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_citizen"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_citizen" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_citizen"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>k. Are you a permanent resident alien?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_resident"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_resident"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_resident"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_resident"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>l. Do you intend to occupy the property as your primary residence?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_pri_residence"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_pri_residence"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_pri_residence"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_pri_residence"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>m. Have you had an ownership interest in a property in the last three years?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_ownership"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_ownership"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_ownership"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_ownership"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>(1) What type of property did you own-principal residence (PR),
							second home (SH), or investment property (IP)?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_typeofproperty"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_typeofproperty"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_typeofproperty" value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_typeofproperty"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>(2) How did you hold title to the home-solely by yourself (S),
							jointly with your spouse (SP), or jointly with another person (O)?</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_holdtitle"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="bo_holdtitle"  value="No">
									No
								</label>
							</div>
						</td>
						<td>
							<div class="col-md-5">
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_holdtitle"  value="Yes" checked="checked">
									Yes
								</label><br>
								<label class="radio-inline" for="questions">
									<input type="radio" name="co_holdtitle"  value="No">
									No
								</label>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="twelve">
		<a> 12. ACKNOWLEDGEMENT AND AGREEMENT</a>
		<p>Each of the undersigned specifically represents to Lender and to Lender's actual or potential agents, brokers, processors, attorneys, insurers, servicers, successors and
			assigns and agrees and acknowledges that: (1) the information provided in this application is true and correct as of the date set forth opposite my signature and that any
			intentional or negligent misrepresentation of this information contained in this application may result in civil liability, including monetary damages, to any person who may
			suffer any loss due to reliance upon any misrepresentation that I have made on this application, and/or in criminal penalties including, but not limited to, fine or imprisonment or
			both under the provisions of Title 18, United States Code, Sec. 1001, et seq.; (2) the loan requested pursuant to this application (the "Loan") will be secured by a mortgage or
			deed of trust on the property described in this application; (3) the property will not be used for any illegal or prohibited purpose or use; (4) all statements made in this application
			are made for the purpose of obtaining a residential mortgage loan; (5) the property will be occupied as indicated in this application; (6) the Lender, its servicers, successors or
			assigns may retain the original and/or an electronic record of this application, whether or not the loan is approved; (7) the Lender and its agents, brokers, insurers, servicers,
			successors and assigns may continuously rely on the information contained in the application, and I am obligated to amend and/or supplement the information provided in this
			application if any of the material facts that I have represented herein should change prior to closing of the Loan; (8) in the event that my payments on the Loan become
			delinquent, the Lender, its servicers, successors, or assigns may, in addition to any other rights and remedies that it may have relating to such delinquency, report my name and
			account information to one or more consumer credit reporting agencies; (9) ownership of the Loan and/or administration of the Loan account may be transferred with such notice
			as may be required by law; (10) neither Lender nor its agents, brokers, insurers, servicers, successors or assigns has made any representation or warranty, express or implied, to
			me regarding the property or the condition or value of the property; (11) my transmission of this application as an "electronic record" containing my "electronic signature," as those
			terms are defined in applicable federal and/or state laws (excluding audio and video recordings), or my facsimile transmission of this application containing a facsimile of my
			signature, shall be as effective, enforceable and valid as if a paper version of this application were delivered containing my original written signature; (12) Lender will retain this
			application and any other credit information Lender receives, even if no loan or credit is granted; (13) Lender is authorized by to provide any insurer, lender, or investor, or their
			successors, with any information and documentation they may request with respect to my/our application, credit or loan; and (14) Lender may rely on the representations set forth
			herein without verifying the information provided by the borrower.</p>

		<table class="table" border="1" width="400">
			<tbody>
				<tr>
					<td>Borrower:</td>
					<td>Date:</td>
					<td>By:</td>
				</tr>
				<tr>
					<td>Co-Borrower</td>
					<td>Date:</td>
					<td>By:</td>
				</tr>
				<tr>
					<td>Guarantor</td>
					<td>Date:</td>
					<td>By:</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="thirteen">
		<a> 13. INFORMATION FOR GOVERNMENT MONITORING PURPOSES</a>
		<p>The following information is requested by the Federal Government for certain types of loans related to a dwelling in order to monitor the lender's compliance with equal credit
			opportunity, fair housing and home mortgage disclosure laws. You are not required to furnish this information, but are encouraged to do so. The law provides that a Lender may not
			discriminate either on the basis of this information, or on whether you choose to furnish it. If you furnish the information, please provide both ethnicity and race. For race, you may check
			more than one designation. If you do not furnish ethnicity, race, or sex, under Federal regulations, this lender is required to note the information on the basis of visual observation
			and surname if you have made this application in person. If you do not wish to furnish the information, please check the box below. (Lender must review the above material to assure
			that the disclosures satisfy all requirements to which the lender is subject under applicable state law for the particular type of loan applied for.)</p>

		<table class="table" border="1">
			<tbody>
				<tr>
					<td width="600">
						<div class="form-group">
							{!! Form::label('borrower0', 'Borrower',['class'=>'col-xs-2 control-label']) !!}
							<div class="col-xs-8">

								<label class="radio-inline" for="info">
									<input type="checkbox" name="info"  placeholder="I do not wish to furnish this information" id="info" value="I do not wish to furnish this information" checked="checked">
									I do not wish to furnish this information
								</label>
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							{!! Form::label('borrower1', 'Co-borrower',['class'=>'col-xs-2 control-label']) !!}
							<div class="col-xs-8">

								<label class="radio-inline" for="info">
									<input type="checkbox" name="info1"  placeholder="I do not wish to furnish this information" id="info" value="I do not wish to furnish this information" checked="checked">
									I do not wish to furnish this information
								</label>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
							{!! Form::label('ethniccity1', 'Ethniccity',['class'=>'col-xs-2 control-label']) !!}
							<div >
								<div class="col-md-8">
									<label class="radio-inline" for="ethniccity-10">
										<input type="radio" name="ethniccity1"  value="Hispanic or Latino" checked="checked">
										Hispanic or Latino
									</label>
									<label class="radio-inline" for="ethniccity-11">
										<input type="radio" name="ethniccity1" value="Not Hispanic or Latin">
										Not Hispanic or Latin
									</label>

								</div>

							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							{!! Form::label('ethniccity2', 'Ethniccity',['class'=>'col-xs-2 control-label']) !!}
							<div >
								<div class="col-md-8">
									<label class="radio-inline" for="ethniccity-0">
										<input type="radio" name="ethniccity2" value="Hispanic or Latino" checked="checked">
										Hispanic or Latino
									</label>
									<label class="radio-inline" for="ethniccity-1">
										<input type="radio" name="ethniccity2"  value="Not Hispanic or Latin">
										Not Hispanic or Latin
									</label>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
							<label class="col-xs-2 control-label" for="Race:">Race:</label>
							<div class="col-md-8">
								<label class="radio-inline" for="Race">
									<input type="radio" name="race1" value="American Indian or Alaska Native" checked="checked">
									American Indian or Alaska Native
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race1" value="Asian">
									Asian
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race1" value="Black or African American">
									Black or African American
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race1" value="Native Hawaiian or Other Pacific Islander">
									Native Hawaiian or Other Pacific Islander
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race1"  value="White">
									White
								</label><br>

							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							<label class="col-xs-2 control-label" for="Race:">Race:</label>
							<div class="col-md-8">
								<label class="radio-inline" for="Race">
									<input type="radio" name="race2"  value="American Indian or Alaska Native" checked="checked">
									American Indian or Alaska Native
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race2"  value="Asian">
									Asian
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race2" value="Black or African American">
									Black or African American
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race2"  value="Native Hawaiian or Other Pacific Islander">
									Native Hawaiian or Other Pacific Islander
								</label><br>
								<label class="radio-inline" for="Race">
									<input type="radio" name="race2"  value="White">
									White
								</label><br>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
							{!! Form::label('sex1', 'Sex',['class'=>'col-xs-2 control-label']) !!}
							<div >
								<div class="col-md-8">
									<label class="radio-inline" for="ethniccity-10">
										<input type="radio" name="sex1"  value="Female" checked="checked">
										Female
									</label>
									<label class="radio-inline" for="ethniccity-11">
										<input type="radio" name="sex1" value="Male">
										Male
									</label>

								</div>

							</div>
						</div>
					</td>
					<td>
						<div class="form-group">
							{!! Form::label('sex', 'Sex',['class'=>'col-xs-2 control-label']) !!}
							<div >
								<div class="col-md-8">
									<label class="radio-inline" for="ethniccity-0">
										<input type="radio" name="sex2" value="Female" checked="checked">
										Female
									</label>
									<label class="radio-inline" for="ethniccity-1">
										<input type="radio" name="sex2"  value="Male">
										Male
									</label>

								</div>

							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>


		<p>To be completed by Loan Originator</p>
		<div class="form-group">
			<label class="col-xs-2 control-label" for="information">This information was provided:</label>
			<div class="col-md-4">
				<label class="radio-inline" for="information">
					<input type="radio" name="information"  value="In a face-to-face interview" checked="checked">
					In a face-to-face interview
				</label><br>
				<label class="radio-inline" for="information">
					<input type="radio" name="information"  value="In a telephone interview">
					In a telephone interview
				</label><br>
				<label class="radio-inline" for="information">
					<input type="radio" name="information"  value="By the applicant and submitted by fax or mail">
					By the applicant and submitted by fax or mail
				</label><br>
				<label class="radio-inline" for="information">
					<input type="radio" name="information" value="By the applicant and submitted via e-mail or the internet">
					By the applicant and submitted via e-mail or the internet
				</label><br>

			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>
	{!! Form::close() !!}

</div>