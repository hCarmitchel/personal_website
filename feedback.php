<?php 
if ($_POST["sent"]<>'') {
	$email_to = "h17@ksu.edu";
	$email_subject = "Email from personal website";
	$message = $_POST['message']; // required
	$name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$subject = $_POST['subject']; // not required
									
	$email_message = "Email contents: \n\n";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_subject = $email_subject.": ".$subject;
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Subject: ".clean_string($subject)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
}	
?> 
<div class='modal hide fade' id='feedbackModal'>
		<div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'>
			<i style='vertical-align: text-top' class='icon-remove icon-white'></i></button>
			<h1>Contact</h1>
		</div>
		<div class='modal-body' id="feedbackBody">
		<form name="feedbackForm" class="form-horizontal" id="feedbackForm" method="post">
		<fieldset style="height:375px">
		<legend style="margin-bottom:0; font-size:1em; padding-left:25px; width:535px;">Fields marked with an <span style="color:#B94A48">*</span> are required.</legend>
					<div class="control-group">
						<label class="control-label" for="name">Your name<span class="help-inline">*</span></label>
						<div class="controls">
							<input type="text" name="name" class="required" id="name" maxlength="50" size="30" data-val="true" 
								data-val-required="Please enter your name."  <?php if (isset($_POST['name'])) echo 'value="'.$_POST['name'].'"';?>/>
							<span class="help-inline"><i id="nameHelp"></i></span>
							<p style="font-style:italics" class="field-validation-valid" data-valmsg-for="name" data-valmsg-replace="true"></p>
						</div>
					</div>
					<div class="control-group">  
						<label class="control-label" for="email">Your email<span class="help-inline">*</span></label>
						<div class="controls">
							<input type="email" name="email" class="required email" id="email" maxlength="80" size="30" data-val="true" 
								data-val-required="Please enter your email."  <?php if (isset($_POST['email'])) echo 'value="'.$_POST['email'].'"';?>/>
							<span class="help-inline"><i id="emailHelp"></i></span>
							<p class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></p>
						</div>
					</div>
					<div class="control-group">  
						<label class="control-label" for="subject">Subject</label>
						<div class="controls">
							<input type="text" name="subject" id="subject" maxlength="80" size="30" 
								<?php if (isset($_POST['subject'])) echo 'value="'.$_POST['subject'].'"';?>>
						</div>
					</div>
					<div class="control-group">	
						<label class="control-label" for="message">Message<span class="help-inline">*</span></label>
						<div class="controls">
							<textarea  name="message" id="message" class="required" maxlength="1000" cols="35" rows="3" 
								data-val="true" data-val-required="Please enter your message."><?php if (isset($_POST['message'])) echo $_POST['message'];?></textarea>
							<span class="help-inline"><i id="messageHelp"></i></span>
							<p style="font-style:italics" class="field-validation-valid" data-valmsg-for="message" data-valmsg-replace="true"></p>
						</div>
					</div>
					</fieldset>
					<div class="modal-footer">
						<p>
							<input id='feedback-submit' type='submit' class='btn btn-primary' value='Send message' />
							<a href='#' class='btn' data-dismiss='modal'>Close</a>
						</p>
					</div>
					<input value="sent" type="hidden" name="sent">
				</form>
		</div>
	</div>