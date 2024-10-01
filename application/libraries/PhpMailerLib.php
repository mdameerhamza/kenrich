<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PhpMailerLib 
{
	function __construct($config = array())
	{
		
	}

	public function load()
	{
		require_once(APPPATH."third_party/phpmailer/PHPMailer.php");
		$objMail = new \PHPMailer\PHPMailer\PHPMailer;
        $objMail->isSMTP();                                      // Set mailer to use SMTP
        $objMail->Host = get_option("smtp_host");  // Specify main and backup SMTP servers
        $objMail->SMTPAuth = true;                               // Enable SMTP authentication
        $objMail->Username = get_option("smtp_email");                 // SMTP username
        $objMail->Password = get_instance()->encryption->decrypt(get_option('smtp_password'));
        $objMail->SMTPSecure = get_option("smtp_encryption");                            
        $objMail->Port = get_option("smtp_port");
        return $objMail;
        }
    }

