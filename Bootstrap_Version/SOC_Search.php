<!DOCTYPE html>
<html lang="en">

<head>
	<script src="./google-code-prettify/src/prettify.js"></script>
	<script src="./google-code-prettify/src/lang-css.js"></script>
</head>

<body onload="prettyPrint()">

<div class="container">
	<div class="row">
		<div class="span12">
			<pre class="prettyprint lang-css linenums">
&lt;!--
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;title&gt;Phoenix Search&lt;/title&gt;
	&lt;!-- Le styles --&gt;
	&lt;link href="./twitter-bootstrap-d335adf/docs/assets/css/bootstrap.css" rel="stylesheet"&gt;
	&lt;link href="./twitter-bootstrap-d335adf/docs/assets/css/bootstrap-responsive.css" rel="stylesheet"&gt;
	&lt;link href="./JQuery UI/development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet"&gt;
	&lt;script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"&gt;&lt;/script&gt;
	&lt;script src="./twitter-bootstrap-d335adf/docs/assets/js/jquery.validate.js" type="text/javascript"&gt;&lt;/script&gt;
	&lt;script src="./JQuery UI/development-bundle/ui/jquery.ui.core.js"&gt;&lt;/script&gt;
	&lt;script src="./JQuery UI/development-bundle/ui/jquery.ui.widget.js"&gt;&lt;/script&gt;
	&lt;script src="./JQuery UI/development-bundle/ui/jquery.ui.datepicker.js"&gt;&lt;/script&gt;
		
	&lt;script&gt;
	$(document).ready(function(){
	$("#PrimaryIPAddress").validate();
	$("#SecondaryIPAddress").validate();
	$("#SyslogMessageContent").validate({
		rules: {
			Syslog_Input01: {
				required: true,
				minlength: 6
			}
		}
	});
	});
	&lt;/script&gt;
		
	&lt;script&gt;
	$(function() {
		$( "#Start_DateInput01" ).datepicker({dateFormat:"yy M dd"}).datepicker("setDate",new Date());
		$( "#Start_DateInput01" ).datepicker();
		$( "#End_DateInput01" ).datepicker({dateFormat:"yy M dd"}).datepicker("setDate",new Date());
		$( "#End_DateInput01" ).datepicker();
	});
	&lt;/script&gt;
		
	&lt;script&gt;
	function onSubmit()
	{
		var fields = $("input[name='PrimaryCheckBoxes']").serializeArray();
		if (fields.length == 0)
			{
				alert('At least 1 checkbox must be selected in the Primary Search Field');
			}
		}
	&lt;/script&gt;
		
		&lt;script&gt;
        $(function() {
            $.validator.addMethod('IP4Checker', function(value) {
			var ip = /^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/;
			return value.match(ip);
			}, 'Invalid IP address');
        });
		&lt;/script&gt;
		
	&lt;/head&gt;

&lt;body&gt;

&lt;div class="container"&gt;
	&lt;div class="row"&gt;
		&lt;div class="span8 offset1"&gt;
			&lt;h1 align="center"&gt;Phoenix Search&lt;/h1&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	
&lt;br&gt;
	&lt;div class ="row"&gt;
		&lt;div class="span9 offset1"&gt;
			&lt;legend style="background: url(Internal IP to Picture) repeat-x top;color: #000;margin: 2px;padding: 5px;text-weight: bold;background-color: #f60;"&gt;
				&lt;b&gt;Primary Search Criteria&lt;/b&gt;
				&lt;span style="color: #fff000;font-size: 10px;vertical-align: top;"&gt;
				*Required
				&lt;/span&gt;
			&lt;/legend&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span6 offset1"&gt;
			&lt;form class="form-inline" action="" method="post" id="PrimaryIPAddress" name="PrimaryIPAddress"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="IP_Input01"&gt;&lt;b&gt;IP:&lt;/b&gt;&lt;/label&gt;
					&lt;input name="IP_Input01" id="IP_Input01" class="required IP4Checker input-IPSize" type="text" value=""&gt;
					&lt;label class="control-label" for="Port_Input01"&gt;&lt;b&gt;Port:&lt;/b&gt;&lt;/label&gt;
					&lt;input name="Port_Input01" id="Port_Input01" class="required digits input-PortSize" type="text" value=""&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
		
		&lt;div class="span5"&gt;
			&lt;form class="form-inline" action="" method="post" id="PrimaryIPAddress2" name="PrimaryIPAddress2"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="addressCheckBox01"&gt;&lt;b&gt;External:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox01" value="option01" name="PrimaryCheckBoxes"&gt;&lt;/label&gt;
					&lt;label class="control-label" for="addressCheckBox02"&gt;&lt;b&gt;Public:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox02" value="option02" name="PrimaryCheckBoxes"&gt;&lt;/label&gt;	
					&lt;label class="control-label" for="addressCheckBox03"&gt;&lt;b&gt;Internal:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox03" value="option03" name="PrimaryCheckBoxes"&gt;&lt;/label&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	
&lt;br&gt;
	
	&lt;div class="row"&gt;
		&lt;div class="span9 offset1"&gt;
		&lt;legend style="background: url(Internal IP to Picture) repeat-x top;color: #000;margin: 2px;padding: 5px;text-weight: bold;background-color: #f60;"&gt;
		&lt;b&gt;Secondary Search Criteria&lt;/b&gt;
		&lt;/legend&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span6 offset1"&gt;
			&lt;form class="form-inline" action="" method="post" id="SecondaryIPAddress" name="SecondaryIPAddress"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="IP_Input02"&gt;&lt;b&gt;IP:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="IP_Input02" class="IP4Checker input-IPSize" type="text"&gt;
					&lt;label class="control-label" for="Port_Input02"&gt;&lt;b&gt;Port:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="Port_Input02" name="Port_Input02" class="digits input-PortSize" type="text"&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
		
		&lt;div class="span5"&gt;
			&lt;form class="form-inline" action="" method="post" id="SecondaryIPAddress2" name="SecondaryIPAddress2"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="addressCheckBox04"&gt;&lt;b&gt;External:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox04" value="option04"&gt;&lt;/label&gt;
					&lt;label class="control-label" for="addressCheckBox05"&gt;&lt;b&gt;Public:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox05" value="option05"&gt;&lt;/label&gt;
					&lt;label class="control-label" for="addressCheckBox06"&gt;&lt;b&gt;Internal:&lt;/b&gt;&lt;/label&gt;
					&lt;label class="checkbox"&gt;
					&lt;input type="checkbox" id="addressCheckBox06" value="option06"&gt;&lt;/label&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span9 offset1"&gt;
			&lt;legend style="background: url(Internal IP to Picture) repeat-x top;color: #000;margin: 2px;padding: 5px;text-weight: bold;background-color: #f60;"&gt;
			&lt;b&gt;Time Period Search Criteria&lt;/b&gt;
			&lt;span style="color: #fff000;font-size: 10px;vertical-align: top;"&gt;
			*Required
			&lt;/span&gt;
			&lt;/legend&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span2 offset1"&gt;
			&lt;form class="form-inline" action="" method="post" id="TimeForm01" name="TimeForm01"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="Start_DateInput01"&gt;&lt;b&gt;Start Date:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="Start_DateInput01" class="input-small" type="text"&gt;
					&lt;label class="control-label" for="Start_TimeInput01"&gt;&lt;b&gt;Start Time:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="Start_TimeInput01" name="Start_TimeInput01" class="input-small" type="text" placeholder="00:00:00"&gt;
					&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
		&lt;div class="span1 offset1"&gt;
			&lt;form class="form-inline" action="" method="post" id="TimeForm02" name="TimeForm02"&gt;
				&lt;div class="control-group"&gt;
					&lt;label class="control-label" for="Start_DateInput01"&gt;&lt;b&gt;End Date:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="End_DateInput01" class="input-small" type="text"&gt;
					&lt;label class="control-label" for="End_TimeInput01"&gt;&lt;b&gt;End Time:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="End_TimeInput01" name="End_TimeInput01" class="input-small" type="text" placeholder="00:00:00"&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	
&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span9 offset1"&gt;
			&lt;legend style="background: url(Internal IP to Picture) repeat-x top;color: #000;margin: 2px;padding: 5px;text-weight: bold;background-color: #f60;"&gt;
			&lt;b&gt;Syslog Search Criteria&lt;/b&gt;
			&lt;/legend&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span11 offset1"&gt;
			&lt;form class="form-inline" action="" method="post" id="SyslogSource" name="SyslogSource"&gt;
				&lt;div class="controls"&gt;
					&lt;label class="control-label" for="select01"&gt;&lt;b&gt;Syslog Source&lt;/b&gt;&lt;/label&gt;
					&lt;select id="select01"&gt;
						&lt;option value="0.0.0.0"&gt;FWSM Builds/Teardowns&lt;/option&gt;
						&lt;option value="139.78.1.37"&gt;ThorInside&lt;/option&gt;
						&lt;option value="139.78.1.45"&gt;LokiInside&lt;/option&gt;
						&lt;option value="172.16.1.248"&gt;LoadBalancer2&lt;/option&gt;
						&lt;option value="172.16.1.249"&gt;LoadBalancer1&lt;/option&gt;
					&lt;/select&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
		&lt;div class="span 11 offset1"&gt;
			&lt;form id="SyslogMessageContent" name="SyslogMessageContent" class="form-inline" action="" method="post"&gt;
				&lt;div class="controls"&gt;
					&lt;label class="control-label" for="Syslog_Input01"&gt;&lt;b&gt;Syslog Message Content:&lt;/b&gt;&lt;/label&gt;
					&lt;input id="Syslog_Input01" name="Syslog_Input01" class="required minlength: 6 input-xlarge" type="text"&gt;
					&lt;span style="color: #f00; font-size: 10px;vertical-align: top;"&gt;
					min. 6 characters
					&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span9 offset1"&gt;
			&lt;legend style="background: url(Internal IP to Picture) repeat-x top;color: #000;margin: 2px;padding: 5px;text-weight: bold;background-color: #f60;"&gt;
			&lt;b&gt;Result Modifications&lt;/b&gt;
			&lt;span style="color: #fff000;font-size: 10px;vertical-align: top;"&gt;
			*Required
			&lt;/span&gt;
			&lt;/legend&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;br&gt;

	&lt;div class="row"&gt;
		&lt;div class="span8 offset1"&gt;
			&lt;form class="form-search" action="" method="post" id="ResultsForm" name="ResultsForm"&gt;
				&lt;div class="controls"&gt;
					&lt;label class="control-label" for="select01"&gt;&lt;b&gt;Results Per Page:&lt;/b&gt;&lt;/label&gt;
						&lt;select id="select01"&gt;
							&lt;option value="25"&gt;25&lt;/option&gt;
							&lt;option value="50"&gt;50&lt;/option&gt;
							&lt;option value="100"&gt;100&lt;/option&gt;
							&lt;option value="200"&gt;200&lt;/option&gt;
							&lt;option value="500"&gt;500&lt;/option&gt;
							&lt;option value="1000"&gt;1000&lt;/option&gt;
						&lt;/select&gt;
					&lt;label class="control-label" for="select01"&gt;&lt;b&gt;Results Order:&lt;/b&gt;&lt;/label&gt;
						&lt;select id="select01"&gt;
							&lt;option&gt;DESC&lt;/option&gt;
							&lt;option&gt;ASC&lt;/option&gt;
						&lt;/select&gt;
					&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;br&gt;
	
	&lt;div class="row"&gt;
		&lt;div class="span8 offset1" align="center"&gt;
			&lt;form class="form-search"&gt;
				&lt;button name="Search" style="width: 15%;" type="submit" class="btn" onclick="onSubmit();"&gt;Search&lt;/button&gt;
				&lt;button name="Clear" style="width: 15%;" type="submit" class="btn", "resetForm("PrimaryIPAddress", "PrimaryIPAddress2")"&gt;Clear&lt;/button&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	
&lt;/div&gt;

&lt;/body&gt;

&lt;/html&gt;

--&gt;
</pre>
		</div>
	</div>
</div>

</body>

</html>