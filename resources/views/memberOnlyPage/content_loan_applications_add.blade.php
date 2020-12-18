<h1>Business Purpose/Commercial Loan Application</h1>
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('loan_applicationAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

	<a>1. CREDIT REQUESTED</a>
	<div class="form-group">
		{!! Form::label('borrower', 'Borrower:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('borrower', old('borrower'), ['class' => 'form-control','placeholder'=>'Input name Borrower']) !!}</div>
	</div>
	<div class="form-group">
		{!! Form::label('co_borrower', 'Co borrower:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('co_borrower', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input co borrower']) !!}
		</div>
	</div>
	
	<div class="form-group">	
	{!! Form::label('loan_type', 'Loan type:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">	
			{!! Form::checkbox('Purchase', '1');!!}
			{!! Form::checkbox('Ground-Up Construction', '2');!!}
			{!! Form::checkbox('Purchase', '3');!!}
		</div>	
	</div>
	<div class="form-group">
		{!! Form::label('Amount Requested', 'Amount Requested:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amount_requested', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input Amount Requested']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('interest_rate', 'Interest rate',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('interest_rate', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input interest_ rate']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('amortization_type', 'Amortization type',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('amortization_type', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input amortization type']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('pes_requested_loan', 'Proposed Exit Strategy for Requested Loan',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('pes_requested_loan', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input Proposed Exit Strategy for Requested Loan']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('intended_loa_purpose', 'Intended loan purpose and use of loan proceeds shall be set forth on a separate “Loan
		Purpose and Real Property Loan Security Declaration.”',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('intended_loa_purpose', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input Intended loan purpose and use of loan proceeds shall be set forth on a separate “Loan
			Purpose and Real Property Loan Security Declaration.”']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vesting', 'Vesting (Manner in which title will be held):',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('vesting', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input vesting']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('additional_property', 'Will additional property be given as collateral by a guarantor, or any person who will not
		be a Borrower or Co-Borrower?',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('additional_property', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input additional_property']) !!}
		</div>
	</div>
	<a>2. PROPERTY INFORMATION</a>
	<p>Subject Property Address (street, city, state, & ZIP)</p>
	<div class="form-group">
		{!! Form::label('spa_street', 'Street',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_street', old('spa_street'), ['class' => 'form-control','placeholder'=>'Input spa_street']) !!}</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_city', 'City',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_city', old('spa_city'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input spa_city']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_state', 'spa_state',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_state', old('spa_state'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input spa_state']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('spa_zip', 'Zip',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('spa_zip', old('spa_zip'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input spa zip']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('current_occupancy', 'current_occupancy',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('current_occupancy', old('current_occupancy'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input icurrent_occupancy']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('proposed_occupancy', 'Proposed Occupancy',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('proposed_occupancy', old('proposed_occupancy'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input proposed_occupancy']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('year_build', 'year_build',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('year_build', old('year_build'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input year_build']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('type_of_property', 'type_of_property',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('type_of_property', old('type_of_property'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input type_of_property']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_beneficiary', 'lcp_beneficiary',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_beneficiary', old('lcp_beneficiary'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_beneficiary']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lien_position', 'lcp_lien_position',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lien_position', old('lcp_lien_position'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_lien_position']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_interest_rate', 'lcp_interest_rate',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_interest_rate', old('lcp_interest_rate'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_interest_rate']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_amortization_type', 'lcp_amortization_type',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_amortization_type', old('lcp_amortization_type'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_amortization_type']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_monthly_payment', 'lcp_monthly_payment',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_monthly_payment', old('lcp_monthly_payment'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_monthly_payment']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_balloon_payment_d', 'lcp_balloon_payment_d',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_balloon_payment_d', old('lcp_balloon_payment_d'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_balloon_payment_d']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_balloon Payment_a', 'lcp_balloon Payment_a',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_balloon Payment_a', old('lcp_balloon Payment_a'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_balloon Payment_a']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lwr_on_title', 'lcp_lwr_on_title',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lwr_on_title', old('lcp_lwr_on_title'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_lwr_on_title']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lws', 'lcp_lws',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lws', old('lcp_lws'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_lws']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_lwpo_from_lp', 'lcp_lwpo_from_lp',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_lwpo_from_lp', old('lcp_lwpo_from_lp'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_lwpo_from_lp']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lcp_add_lia', 'lcp_add_lia',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('lcp_add_lia', old('lcp_add_lia'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input lcp_add_lia']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_y_l_a', 'construc_loan_y_l_a',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_y_l_a', old('construc_loan_y_l_a'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_y_l_a']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_o_c_l', 'construc_loan_o_c_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_o_c_l', old('construc_loan_o_c_l'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_o_c_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_a_e_l', 'construc_loan_a_e_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_a_e_l', old('construc_loan_a_e_l'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_a_e_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_p_v_l', 'construc_loan_p_v_l',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_p_v_l', old('construc_loan_p_v_l'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_p_v_l']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_p_r_b', 'construc_loan_p_r_b',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_p_r_b', old('construc_loan_p_r_b'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_p_r_b']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('construc_loan_e_a_r_v', 'construc_loan_e_a_r_v',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8">
			{!! Form::text('construc_loan_e_a_r_v', old('construc_loan_e_a_r_v'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Input construc_loan_e_a_r_v']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
		</div>
	</div>

	{!! Form::close() !!}

</div>