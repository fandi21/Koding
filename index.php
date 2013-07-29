<html>
<head>
<title>Coba Test</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="shourtcut icon" href="gambar/logo.png">
<style type="text/css">
<!--
body {
  font-family:"Times New Roman", Times, serif;
	font-size: 10pt;
}
.command {
	font-size: 14pt;
	background-color: #FF9;
	border-top-width: 1pt;
	border-right-width: 1pt;
	border-bottom-width: 1pt;
	border-left-width: 1pt;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	padding: 10px;
	margin-top: 5px;
	margin-bottom: 5px;
}
.result {
	padding: 10px;
	background-color: #CCC;
	margin-top: 5px;
	margin-bottom: 5px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	font-family: "Lucida Console", Monaco, monospace;
	font-size: 10pt;
}
#footer{
	font-family:"Times New Roman";
	font-size:10px;
	text-align:center;
}
-->
</style>

<script>
/*$(document).ready(function(){
  $("button").click(function(){
    $("#result").load("action.php");
  });
});*/
$(document).ready(function() {
  $('#ip').val('');
  $('#mac').val('');
  $("button").click(function(){
    //$("#result").load("index.php");
	$('form#f').submit();
  });
});

</script>
</head>
<body>
	<center>
    <form name="form" method="post" target="_self" enctype="application/x-www-form-urlencoded" id="f">
    <table border="0">
        <tr>
            <td colspan="3">
                <fieldset>
                    <legend>Masukkan Data</legend>
                    <table border="0">                    	
                        <tr>
                        	<td>Masukkan IP</td>
                            <td>:</td>
                            <td><input type="text" name="ip" id="ip" value=""><span>Ex: xxx.xxx.xxx</span></td>
                        </tr>
                        <tr>
                        	<td>Masukkan MAC</td>
                            <td>:</td>
                            <td><input type="text" name="mac" id="mac" value=""><span>Ex: 0000fad052a5</span></td>
                        </tr>
                        <tr>
                        	<td colspan="3" align="center"><button>CEK OUT</button></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>
    </form>
    </center><br />
    <div class="command">
    	Command
    </div>
    <div class="result" id="result">
    	Result            
    </div>
    <div id="footer">
    	&copy;2013 Van_Dee
    </div>
</body>
</html>
