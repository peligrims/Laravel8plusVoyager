@extends('layouts.admin')

<div class="wrapper container-fluid">
	{!! Form::open(['url' => route('term_sheetsview',array('term_sheet'=>$term_sheet['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Term Sheet</title>
		<style type="text/css"> * {
				margin: 0;
				padding: 0;
				text-indent: 0;
			}
			p {
				color: black;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 11pt;
				margin: 0pt;
			}
			.s1 {
				color: #2F759E;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 12pt;
			}
			.s2 {
				color: black;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: bold;
				text-decoration: underline;
				font-size: 11pt;
			}
			.s3 {
				color: black;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 12pt;
			}
			.s4 {
				color: #212121;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: bold;
				text-decoration: underline;
				font-size: 11pt;
			}
			.s5 {
				color: #212121;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: bold;
				text-decoration: none;
				font-size: 11pt;
			}
			.s6 {
				color: #212121;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 11pt;
			}
			.s7 {
				color: #FFF;
				font-family: "Segoe UI Symbol", sans-serif;
				font-style: normal;
				font-weight: bold;
				text-decoration: none;
				font-size: 9pt;
			}
			.s8 {
				color: black;
				font-family: "Segoe UI Symbol", sans-serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 9pt;
			}
			.s9 {
				color: black;
				font-family: "Segoe UI Symbol", sans-serif;
				font-style: normal;
				font-weight: bold;
				text-decoration: none;
				font-size: 9pt;
			}
			.s10 {
				color: black;
				font-family: "Lucida Console", monospace;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 8.5pt;
			}
			.s12 {
				color: black;
				font-family: Arial, sans-serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 10.5pt;
			}
			li {
				display: block;
			}
			#l1 {
				padding-left: 0pt;
				counter-reset: c1 1;
			}
			#l1> li>*:first-child:before {
				counter-increment: c1;
				content: counter(c1, decimal)". ";
				color: #212121;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 11pt;
			}
			#l1> li:first-child>*:first-child:before {
				counter-increment: c1 0;
			}
			li {
				display: block;
			}
			#l2 {
				padding-left: 0pt;
				counter-reset: d1 1;
			}
			#l2> li>*:first-child:before {
				counter-increment: d1;
				content: counter(d1, decimal)". ";
				color: black;
				font-family: "Times New Roman", serif;
				font-style: normal;
				font-weight: normal;
				text-decoration: none;
				font-size: 11pt;
			}
			#l2> li:first-child>*:first-child:before {
				counter-increment: d1 0;
			}
			table, tbody {
				vertical-align: top;
				overflow: visible;
			}
		</style>
	</head>

	<body>



		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="text-indent: 0pt;text-align: left;">
			<div class="logo">
				<a href="#">
				<img src="{{ asset ('assets/img/AR-Logo-300x83.png')}}" alt="logo">
					
				</a>
			</div>

		</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Mr. Krishan R. Patel Principal</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Foster Holdings Lithia, LLC</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">13421 Parker Commons Blvd., Suite 102 Fort Myers, FL 33912
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">
		</p>
		<p class="s1" style="padding-top: 4pt;padding-left: 6pt;text-indent: 0pt;text-align: right;">750 Lexington Avenue, 9th Floor New York, NY 10022</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p class="s2" style="padding-top: 4pt;padding-left: 184pt;text-indent: 0pt;text-align: left;">Summary of Proposed Terms &amp; Conditions</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p style="padding-top: 4pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">Thank you for presenting to us the financing opportunity for
			<b>The Spring House at Lithia Springs, </b> . Based upon our initial underwriting, we are pleased to issue you this Conditional Term Sheet with the terms summarized below. This Summary of Proposed Terms &amp; Conditions does not represent a commitment on the part of AlphaRock Asset Management, LLC or any affiliate thereof (collectively “AlphaRock” or “Lender”) but is being presented to you at your request for discussion purposes only. These terms have not received approval from our internal committee, nor have we proceeded with the necessary due diligence that would allow us to seek approval. Only after receipt of internal credit approval and significant additional due diligence and execution of definitive documentation acceptable to Lender in Lender’s sole discretion could such a commitment be given. These summary terms and conditions are not complete, and as such, during the underwriting and documentation process, they may change, potentially materially. The purpose of this document currently is only to provide the basis of further discussion. Please review the information in detail and let us know if you have any ques- tions. Additionally, please confirm that you would like to proceed to the next step of engagement and fur- ther underwriting prior to the issuance of loan documents.</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Property Address: </p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;"> Borrower :{{$term_sheet['borrower_id']}} </p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Estimated Value of Asset: {{$term_sheet['eva1']}} As Stabilized (to be verified after new appraisal) Loan Amount: {{$term_sheet['loan_amount1']}}</p>
		<p style="padding-left: 232pt;text-indent: -180pt;text-align: left;">Use of Funds: {{$term_sheet['use_of_funds']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Maximum LTV: {{$term_sheet['max_ltv']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Term: {{$term_sheet['term']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Interest Rate: {{$term_sheet['interest_rate']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Loan Extension Option: {{$term_sheet['loan_ext_option']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Yield Maintenance:{{$term_sheet['yield_maintenance']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Structure:{{$term_sheet['structure']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Origination Fee: {{$term_sheet['original_fee']}}</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Exit Fee:{{$term_sheet['exit_fee']}}
			<span class="s3">L</span>oan
			<span class="s3">A</span>mount, paid to the Lender</p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Broker Fee: {{$term_sheet['broker_fee']}}</p>
		<p style="padding-left: 232pt;text-indent: -180pt;text-align: left;">Due Diligence Fee: {{$term_sheet['due_diligence_fee']}}
			<span class="s3">Due Dili- gence Fee shall be fully refundable should the terms of this Agreement materially change or if the Lender decides not to proceed with the Loan for any reason.</span></p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p class="s4" style="padding-top: 4pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">FINAL APPROVAL IS CONTINGENT UPON COMPLETE UNDERWRITING, WHICH IS DE-
			<span class="s5"> </span>PENDENT UPON PROVISION OF FULL DOCUMENTATION:</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>


		<p class="s6" style="padding-top: 4pt;padding-left: 88pt;text-indent: -18pt;text-align: left;">
		<div class="container">

			<div id="lc" class="row">

				@if ($term_sheet['lc_01']=='1')
				<li>
					<p>Signed Loan Application</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_02']=='1')
				<li>
					<p>Articles of organization and operating agreement for the holding entity</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_03']=='1')
				<li>
					<p>Credit-report authorization form for each guarantor/principal</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_04']=='1')
				<li>
					<p>Personal financial statement for each guarantor/principal (PFS)</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_05']=='1')
				<li>
					<p>REO</p></li>
				@else
				@endif

				@if ($term_sheet['lc_06']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_07']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
				</li>
				@if ($term_sheet['lc_08']=='1')
				<li>
					<p>BIO & history</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_09']=='1')
				<li>
					<p>Signed Loan Application</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_10']=='1')
				<li>
					<p>Articles of organization and operating agreement for the holding entity</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_11']=='1')
				<li>
					<p>Credit-report authorization form for each guarantor/principal</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_11']=='1')
				<li>
					<p>Personal financial statement for each guarantor/principal (PFS)</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_11']=='1')
				<li>
					<p>REO</p></li>
				@else
				@endif

				@if ($term_sheet['lc_12']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_13']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
				</li>
				@if ($term_sheet['lc_14']=='1')
				<li>
					<p>BIO & history</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_15']=='1')
				<li>
					<p>Signed Loan Application</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_16']=='1')
				<li>
					<p>Articles of organization and operating agreement for the holding entity</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_17']=='1')
				<li>
					<p>Credit-report authorization form for each guarantor/principal</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_18']=='1')
				<li>
					<p>Personal financial statement for each guarantor/principal (PFS)</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_19']=='1')
				<li>
					<p>REO</p></li>
				@else
				@endif

				@if ($term_sheet['lc_20']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_21']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
				</li>
				@if ($term_sheet['lc_22']=='1')
				<li>
					<p>BIO & history</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_23']=='1')
				<li>
					<p>Signed Loan Application</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_24']=='1')
				<li>
					<p>Articles of organization and operating agreement for the holding entity</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_25']=='1')
				<li>
					<p>Credit-report authorization form for each guarantor/principal</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_26']=='1')
				<li>
					<p>Personal financial statement for each guarantor/principal (PFS)</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_27']=='1')
				<li>
					<p>REO</p></li>
				@else
				@endif

				@if ($term_sheet['lc_28']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_29']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
				</li>
				@if ($term_sheet['lc_30']=='1')
				<li>
					<p>BIO & history</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_31']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_32']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
				</li>
				@if ($term_sheet['lc_33']=='1')
				<li>
					<p>BIO & history</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_34']=='1')
				<li>
					<p>Signed Loan Application</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_35']=='1')
				<li>
					<p>Articles of organization and operating agreement for the holding entity</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_36']=='1')
				<li>
					<p>Credit-report authorization form for each guarantor/principal</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_37']=='1')
				<li>
					<p>Personal financial statement for each guarantor/principal (PFS)</p>
				</li>
				@else
				@endif
				@if ($term_sheet['lc_38']=='1')
				<li>
					<p>REO</p></li>
				@else
				@endif

				@if ($term_sheet['lc_39']=='1')
				<li>
					<p>Guarantor/principal’s resume</p>
				</li>
				@else
				@endif

				@if ($term_sheet['lc_40']=='1')
				<li>
					<p>Sponsor(s) global cash flow</p></li>
				@else
				@endif
			</div>
		</div>




		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p class="s6" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">* Loan to be non-recourse, subject to “bad-boy” and other standard carve-outs
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p class="s6" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">** A figure to be determined by the Lender, shall be held back in an Interest Reserve account to be drawn down to pay interest payments over a maximum of six (6) months. Each month, the equivalent of one month’s interest payment shall be drawn from this Interest Reserve account, subject to Lender’s standard drawdown requirements. See attached Sources and Uses which includes a six (6) month interest reserve.
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p class="s6" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">*** $200,000.00 or a figure to be determined by the Lender after review of working capital budget shall be held back in a Working Capital Reserve account, subject to Lender’s standard drawdown requirements. See attached Sources and Uses Lease-Up/Operating Expense.</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p class="s6" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">**** Due Diligence Fee shall be held in a third party escrow account only to be used for site visit ex- penses, if any, appraisal fees, preliminary legal expenses, loan documents, credit and background checks and any other underwriting fees associated with and applicable to this loan transaction.  Any additional expenses to be paid by borrower and any unused fees to be refunded if transaction does not close. Any expenses will be preapproved in writing from the borrower prior to being disbursed. (Unused Fees to be returned within 10 business days of receipt of return request).</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p style="padding-top: 4pt;padding-left: 221pt;text-indent: 0pt;text-align: center;">Sources &amp; Uses
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>

		<table style="border-collapse:collapse;margin-left:121.616pt" cellspacing="0">
			<tr style="height:13pt">
				<td style="width:113pt" bgcolor="#000000">
					<p class="s7" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Sources</p>
				</td>
				<td style="width:51pt" bgcolor="#000000">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Amount</p>
				</td>
				<td style="width:50pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Per Unit</p>
				</td>
				<td style="width:51pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 1pt;text-indent: 0pt;line-height: 12pt;text-align: right;">% of Total</p>
				</td>
			</tr>
			<tr style="height:12pt">
				<td style="width:113pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Proposed Loan</p>
				</td>
				<td style="width:51pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$8,000,000</p>
				</td>
				<td style="width:50pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$95,238</p>
				</td>
				<td style="width:51pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">100.0%</p>
				</td>
			</tr>
			<tr style="height:12pt">
				<td style="width:113pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Total Sources</p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$8,000,000</p>
				</td>
				<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$95,238</p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 1pt;text-indent: 0pt;line-height: 11pt;text-align: right;">100.0%</p>
				</td>
			</tr>
			<tr style="height:12pt">
				<td style="width:113pt;border-top-style:solid;border-top-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt;border-top-style:solid;border-top-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:50pt;border-top-style:solid;border-top-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
			</tr>
			<tr style="height:14pt">
				<td style="width:113pt" bgcolor="#000000">
					<p class="s7" style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Uses</p>
				</td>
				<td style="width:51pt" bgcolor="#000000">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Amount</p>
				</td>
				<td style="width:50pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 6pt;text-indent: 0pt;line-height: 12pt;text-align: right;">Per Unit</p>
				</td>
				<td style="width:51pt" bgcolor="#000000">
					<p class="s7" style="padding-right: 1pt;text-indent: 0pt;line-height: 12pt;text-align: right;">% of Total</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Refinance Existing Loan</p>
				</td>
				<td style="width:51pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$6,912,900</p>
				</td>
				<td style="width:50pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$82,296</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">86.4%</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Loan Fee (1%)</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">1.50%</p>
				</td>
				<td style="width:66pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$120,000</p>
				</td>
				<td style="width:50pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$1,429</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">1.5%</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Broker Fee (1%)</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">1.25%</p>
				</td>
				<td style="width:66pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$100,000</p>
				</td>
				<td style="width:50pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$1,190</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">1.3%</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Interest Reserve (6 mo.)</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">7.50%</p>
				</td>
				<td style="width:66pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$300,000</p>
				</td>
				<td style="width:50pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$3,571</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">3.8%</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Lease-up/Operating</p>
				</td>
				<td style="width:51pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$200,000</p>
				</td>
				<td style="width:50pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$2,381</p>
				</td>
				<td style="width:51pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">2.5%</p>
				</td>
			</tr>
			<tr style="height:13pt">
				<td style="width:113pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Closing Costs/Other</p>
				</td>
				<td style="width:51pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$367,100</p>
				</td>
				<td style="width:50pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$4,370</p>
				</td>
				<td style="width:51pt;border-bottom-style:solid;border-bottom-width:1pt">
					<p class="s8" style="padding-right: 2pt;text-indent: 0pt;line-height: 11pt;text-align: right;">4.6%</p>
				</td>
			</tr>
			<tr style="height:12pt">
				<td style="width:113pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-left: 1pt;text-indent: 0pt;line-height: 11pt;text-align: left;">Total Uses</p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p style="text-indent: 0pt;text-align: left;"><br/></p>
				</td>
				<td style="width:66pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 9pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$8,000,000</p>
				</td>
				<td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 5pt;text-indent: 0pt;line-height: 11pt;text-align: right;">$95,238</p>
				</td>
				<td style="width:51pt;border-top-style:solid;border-top-width:1pt;border-bottom-style:solid;border-bottom-width:1pt" bgcolor="#F1F1F1">
					<p class="s9" style="padding-right: 1pt;text-indent: 0pt;line-height: 11pt;text-align: right;">100.0%</p>
				</td>
			</tr>
		</table>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="padding-top: 4pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">We look forward to working with you on this transaction in a smooth, efficient, and timely manner.
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p style="padding-top: 10pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">Best Regards,</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Maxim Shishlyannikov, CEO</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="text-indent: 0pt;text-align: left;">
			<span><img width="166" height="48" alt="image" src="Term Sheet/Image_002.png"/></span></p>
		<p class="s10" style="padding-top: 5pt;padding-left: 250pt;text-indent: 0pt;text-align: center;">7/23/2020</p>
		<p style="padding-top: 2pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">X Date:
			<u> </u></p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="padding-top: 4pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">“APPROVED AND AGREED”</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="padding-top: 10pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">Krishan R. Patel</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p style="text-indent: 0pt;text-align: left;">
			<span><img width="154" height="41" alt="image" src="Term Sheet/Image_003.png"/></span></p>
		<p style="padding-top: 5pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">X Date:</p>
		<p class="s12" style="padding-top: 3pt;padding-bottom: 2pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">07-23-2020</p>
		<p style="padding-left: 3pt;text-indent: 0pt;line-height: 1pt;text-align: left;">
			<span><img width="176" height="1" alt="image" src="Term Sheet/Image_004.png"/></span></p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p class="s2" style="padding-top: 4pt;padding-left: 132pt;text-indent: 0pt;text-align: left;">INCOMING WIRE INSTRUCTIONS FOR EAST WEST BANK:</p>
		<p style="text-indent: 0pt;text-align: left;"><br/>
		</p>
		<p style="padding-top: 4pt;padding-left: 52pt;text-indent: 0pt;text-align: left;">Beneficiary Name:
			<b>AlphaRock Holding Company, LLC</b></p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Beneficiary Account Number:
			<b>8 6 0 8 0 0 9 4 3 0</b></p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Bank Routing Number (domestic wires):
			<b>3 2 2 0 7 0 3 8 1</b></p>
		<p style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Bank Routing/ Swift Code (international wires):
			<b>EWBKUS66XXX</b></p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Receiving Bank Name:
			<b>East West Bank</b></p>
		<p style="padding-left: 52pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Receiving Bank Address (branch address):
			<b>9300 Flair Drive, 4th Fl., El Monte, CA 91731</b>
		</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<p class="s2" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">Note:</p>
		<p style="text-indent: 0pt;text-align: left;"><br/></p>
		<ol id="l2">
			<li>
				<p style="padding-top: 4pt;padding-left: 63pt;text-indent: -11pt;text-align: left;">The beneficiary name and beneficiary account number must match for funds to be credited</p>
			</li>
			<li>
				<p style="padding-left: 63pt;text-indent: -11pt;line-height: 13pt;text-align: left;">All Domestic wires for East West bank should be wired to bank routing number:
					<b>3 2 2 0 7 0 3 8 1</b>
				</p>
			</li>
			<li>
				<p style="padding-left: 63pt;text-indent: -11pt;line-height: 13pt;text-align: left;">All International wires for East West bank should be wired to Swift code:
					<b>EWBKUS66XXX</b>
				</p>
			</li>
		</ol>
	</body>
	{!! Form::close() !!}
</div>