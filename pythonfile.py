import smtplib, ssl
import sys
def sendEmail():
	port = 465  # For SSL
	smtp_server = "smtp.gmail.com"
	sender_email = "zomatog123@gmail.com"  # Enter your address
	receiver_email = "preethikpn24@gmail.com" # Enter receiver address
	password = "passWORD1234"
	message = """\
	BMSIT: Hi there

	This message is sent to verify otp from php page ."""

	context = ssl.create_default_context()
	with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
		server.login(sender_email, password)
		server.sendmail(sender_email, receiver_email, message)
	return "completed"
	
if __name__=="__main__":
    sendEmail()