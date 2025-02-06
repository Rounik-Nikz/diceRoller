<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-title" content="Roll a dice!">
	<meta name="application-name" content="Roll a dice!">
	<meta name="theme-color" content="#000000">
	<link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
	<title>Roll a dice!</title>
	<style>
		body {
			background-color: blue;
			color: white;
			text-align: center;
			position: relative;
			margin: 0;
			padding-bottom: 6rem;
			min-height: 100%
		}

		span {
			display: inline-block;
			padding: 5px;
			width: 200px;
			height: 200px;
		}

		html {
			height: 100%;
			box-sizing: border-box
		}

		*,
		*:before,
		*:after {
			box-sizing: inherit
		}

		.footer {
			position: absolute;
			right: 0;
			bottom: 0;
			left: 0;
			padding: 1rem;
			text-align: center
		}

		.footer a {
			font-size: 13px;
			text-decoration: none;
			font-family: 'Raleway', sans-serif;
			color: #303031
		}
	</style>
</head>

<body>
	<form action="" method="GET" id="form"><select name="dice" autofocus onchange="this.form.submit()">
			
			<option selected value="6">6</option>
			
		</select></form>
	<?php
	
	if (isset($_GET['dice'])) {
		$dice = $_GET['dice'];
	} else {
		$dice = '6';
	}
	echo ("<p><pre>1d" . $dice . "</pre></p>");
	//creating an array with all the images the dirty way
	$display['1'] = '<svg version="1.1" viewBox="0 0 150 150" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><g transform="translate(-203.5,-203.5)"><path d="m352.56 334.26c0 10.066-8.2357 18.302-18.302 18.302h-111.51c-10.066 0-18.301-8.2352-18.301-18.301v-111.51c0-10.066 8.2357-18.302 18.301-18.302h111.51c10.066 0 18.302 8.2357 18.302 18.302z" fill="#FFFFFF" stroke="#000" stroke-width="1.8851"/><circle cx="321.99" cy="321.98" r="15.381" stroke="#000000" stroke-width="1.3465"/><circle cx="235.02" cy="235.02" r="15.381" stroke="#000000" stroke-width="1.3465"/></g></svg>';

	$display['2'] = '<svg version="1.1" viewBox="0 0 150 150" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><g transform="translate(-203.5,-203.5)"><path d="m352.56 334.26c0 10.066-8.2357 18.302-18.302 18.302h-111.51c-10.066 0-18.301-8.2352-18.301-18.301v-111.51c0-10.066 8.2357-18.302 18.301-18.302h111.51c10.066 0 18.302 8.2357 18.302 18.302z" fill="#FFFFFF" stroke="#000" stroke-width="1.8851"/><circle cx="321.99" cy="321.98" r="15.381" stroke="#000000" stroke-width="1.3465"/><circle cx="235.02" cy="235.02" r="15.381" fill="#000000" stroke="#090505" stroke-width="1.3465"/><circle cx="278.5" cy="278.5" r="15.381" fill="#000000" stroke="#000" stroke-width="1.3465"/></g></svg>';

	$display['3'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><circle cx="74.865" cy="74.865" r="15.378" stroke="#000" stroke-width="1.3489"/></svg>';

	$display['4'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 323" stroke-linecap="round"><path d="m117 117v325m323-2v-325" stroke-width="120"/><path d="m117 117v325m323-2v-325" stroke-width="110"/></g></svg>';

	$display['5'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 228.4" stroke-linecap="round"><path d="m440 440-325-325m2 325 325-325" stroke-width="120"/><path d="m440 440-298.35-298.35-26.651-26.651m2 325 36.411-36.411 5.9004-5.9004 86.016-86.016 196.67-196.67" stroke-width="110"/></g></svg>';

	$display['6'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 161.5" stroke-linecap="round"><path d="m117 117v325m323-2v-325" stroke-width="120"/><path d="m117 117v325m323-2v-325" stroke-width="110"/></g></svg>';

	$display['7'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 161.5" stroke-linecap="round"><path d="m117 117v325m323-2v-325m-161.5 163.5v2" stroke-width="120"/><path d="m117 117v325m323-2v-325m-161.5 163.5v2" stroke-width="110"/></g></svg>';
	$display['8'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 161.5" stroke-linecap="round"><path d="m117 117v325m0-2h325m-2 0v-325m0 2h-323" stroke-width="120"/><path d="m117 117v325m0-2h325m-2 0v-325m0 2h-323" stroke-width="110"/></g></svg>';
	$display['9'] = '<svg version="1.1" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><rect x=".94424" y=".94424" width="148.11" height="148.11" rx="18.345" fill="#FFFFFF" stroke="#000" stroke-width="1.8885"/><g transform="matrix(.26978 0 0 .26978 -.13489 -.13489)" stroke="#000" stroke-dasharray="0, 161.5" stroke-linecap="round"><path d="m117 117v325m161.5-2v-325m161.5 2v325" stroke-width="120"/><path d="m117 117v325m161.5-2v-325m161.5 2v325" stroke-width="110"/></g></svg>';
	

	echo ('<span onClick=\'location.reload()\'>' . $display[random_int(1, $dice)] . '</span>');
	echo ('<span onClick=\'location.reload()\'>' . $display[random_int(1, $dice)] . '</span>');
	?>

</html>