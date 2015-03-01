<?php
class send_msg
{
	private $access_token;
	private $textTpl = "";

	function __construct($access_token){
		$this->access_token = $access_token; 
	}

	public function send($openid, $msgtype, $ ) 
	{

		"touser":"OPENID",
		"msgtype":"text",
		"text":
			    {

					"content":"Hello World"
						    }
	
	}
}
?>
