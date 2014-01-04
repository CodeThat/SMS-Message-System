<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title>Web SMS Message System v1.0</title>

	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style type="text/css">
		<body>
		
		<form id="SMS Message System" method="post" />
			<label>To:</label>
			<br />
			<input id="number" type="text" name="number" />
			<br />
			<label>Subject:</label>
			<input id="subject" type="text" name="subject" />
			<br />
			<label>Message:</message>
			<textarea name="message" rows="4" cols="45"></textarea> />
			<br />
			<fieldset>
			<legend>Quantity to try sending:</legend>
			<label id="quantity" type="text" name="quantity" />
			</fieldset>
			<input type="submit" />
		</form>

		


		<?php
		$carriers = array('@textin.in', '@aircel.co.in', '@airtelap.com', '@airtelkk.com', '@msg.acsalaska.com', '@message.Alltel.com','@text.wireless.alltel.com', '@mms.alltel.net', 
		'@text.aql.com', '@txt.att.net', '@mms.att.net', '@mmode.com', '@cingularme.com', '@mobile.mycingular.com', '@page.att.net', '@sms.smartmessagingsuite.com', '@txt.bell.ca', 
		'@txt.bellmobility.ca', '@psms.bluesky.as', '@myboostmobile.com', '@mms.bouyguestelecom.fr', '@cbeyond.sprintpcs.com', '@mobile.celloneusa.com', '@csouth1.com' ,'@cwemail.com', 
		'@sms.cvalley.net', '@gocbw.com', '@mms.gocbw.com', '@cingular.com', '@cingulartext.com', '@clarotorpedo.com.br', '@ideasclaro-ca.com', '@vtexto.com' , '@comcel.com.co', 
		'@sms.mycricket.com', '@mms.mycricket.com', '@sms.ctimovil.com.ar', '@emtelworld.net', '@echoemail.net', '@esendex.net', '@fido.ca', '@smssturen.com', '@mobile.gci.net', 
		'@msg.globalstarusa.com', '@sms.globul.bg', '@gscsms.com', '@myhelio.com', '@ice.cr', '@msg.iridium.com', '.iws@iwspcs.net', '@iwirelesshometext.com', '@mobile.kajeet.net', 
		'@msg.telus.com', '@bplmobile.com', '@sms.spicenepal.com','@mymetropcs.com','@movimensaje.com.ar', '@sms.mtel.net', '@sms.mobitel.lk', '@sms.movistar.net.ar', '@movistar.com.co', 
		'@sms.co.za', '@text.mtsmobility.com', '@messaging.nextel.com', '@msgnextel.com.mx' ,'TwoWay.11@nextel.net.ar', '@mobile.celloneusa.com', '@orange.net', '@orange.pl', '@vtext.com', 
		'@api.panaceamobile.com', '@zsend.com' ,'@alertas.personal.com.ar' ,'@text.plusgsm.pl' ,'@sms.pocket.com' ,'@mobiletxt.ca', '@qwestmp.com', '@pcs.rogers.com', '@sms.sasktel.com',
		'@mas.aw', '@starhub-enterprisemessaing.com', '@starhub-enterprisemessaging.com', '@rinasms.com', '@messaging.sprintpcs.com','@pm.sprint.com', '@page.nextel.com' ,'@messaging.nextel.com',
		'@vtext.com', '@mypixmessages.com', '@tms.suncom.com', '@gsm.sunrise.ch', '@rinasms.com', '@tmomail.net', '@sms.t-mobile.at', '@sms.t-mobile.hr', '@tim.telstra.com', '@msg.telus.com', 
		'@esms.nu', '@sms.tigo.com.co', '@mmst5.tracfone.com', '@tmomail.net', '@vtext.com', '@email.uscc.net', '@message.alltel.com', '@txtlocal.co.uk', '@utext.com', '@mms.uscc.net',
		'@vzwpix.com', '@viaerosms.com', '@mmsviaero.com', '@sms.vivacom.bg', '@sms.vivacom.bg', '@torpedoemail.com.br', '@vmobile.ca', '@vmobl.com', '@vmpix.com', '@voda.co.za', '@SpikkoSMS.com')

		mail();	


		?>
</html>
	</head>
		</body>



