<html>
<head>
	<title> SLB - TestPage </title>
	<style type="text/css">
		body{
			font-family: Arial;
		}
		table{
			width: 350px;
		}
		table,td,th{
			border-collapse: collapse;
			border-color: #000;
			border-width: 1px;
			border-style: solid;
		}
		tr td:first-child:not(#Header){
			min-width: 155px;
		}
		#Header{
			background-color: #ffffcc;
			text-align: center;
			font-size: 28px;
			font-weight: bold;
		}
		#image{
			width: 350px;
		}
		#image td{
			width: auto !important;
			min-width: auto !important;
		}
		#image td img{
			width: 100%;
		}
		.red-Font{
			color: #F00;
			display: inline;
		}
		.green-font{
			color: #0F0;
			display: inline;
		}
		.lightblue-font{
			color: #A9D0F5;
			display: inline;
		}
		.bold-font{
			font-weight: bold;
			display: inline;
		}
		.cookie-font{
			background-color: #F6D8CE;
			display:inline;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td id="Header"colspan="2">Script Env IP <?php echo $_SERVER['SERVER_ADDR']; ?> </td>
		</tr>
		<tr>
			<td>HTTP Request Source's IP & port</td>
			<td><?php echo $_SERVER['REMOTE_ADDR'].' :'.$_SERVER['REMOTE_PORT']; ?></td>
		</tr>
		<tr>
			<td>HTTP Request Destination IP & Port</td>
			<td><?php echo $_SERVER['SERVER_ADDR'].' :'.$_SERVER['SERVER_PORT'];?></td>
		</tr>
		<tr>
			<td>Request </td>
			<td><?php echo $_SERVER['REQUEST_METHOD'].' <div class="red-Font">'.$_SERVER['REQUEST_URI'].'</div> '.$_SERVER['SERVER_PROTOCOL']; ?></td>
		</tr>
		<tr>
			<td>Page Served over HTTPS? </td>
			<td><?php if(strlen($_SERVER['HTTPS'])>0 && !strcmp($_SERVER['HTTPS'],'off')){echo '<div class="green-font bold-font">'."Yes".'</div>';}else{echo "No";}?></td>
		</tr>
		<tr>
			<td>Host (HTTP Header)</td>
			<td><?php echo $_SERVER['HTTP_HOST'];?></td>
		</tr>
		<tr>
			<td>User Agent</td>
			<td><?php echo $_SERVER['HTTP_USER_AGENT'];?></td>
		</tr>
		<tr>
			<td>HTTP Accept Header</td>
			<td><?php echo $_SERVER['HTTP_ACCEPT'];?></td>
		</tr>
		<tr>
			<td>HTTP Accept-Encoding</td>
			<td><?php echo $_SERVER['HTTP_ACCEPT_ENCODING'];?></td>
		</tr>
		<tr>
			<td>HTTP Connection Header</td>
			<td><?php echo $_SERVER['HTTP_CONNECTION'];?></td>
		</tr>
		<tr>
			<td>X-Forwarded-For</td>
			<td><div class="lightblue-font"><?php echo $_SERVER['HTTP_X_FORWARDED_FOR'];?></div></td>
		</tr>
		<tr>
			<td>X-Forwarded-Host</td>
			<td><div class="lightblue-font"><?php echo $_SERVER['HTTP_X_FORWARDED_HOST'];?></div></td>
		</tr>
		<tr>
			<td>Via (Header)</td>
			<td><div class="lightblue-font"><?php echo $_SERVER['HTTP_VIA'];?></div></td>
		</tr>
		<tr>
			<td>X-ClientSide</td>
			<td><div class="lightblue-font"><?php echo $_SERVER['HTTP_X_CLIENTSIDE'];?></div></td>
		</tr>
		<tr>
			<td>Cookie</td>
			<td><div class="cookie-font"><?php echo $_SERVER['HTTP_COOKIE'];?></div></td>
		</tr>
		<?php if(isset($debug_flag)){
			echo '<tr>';
			echo '<td>$_SERVER Raw Value</td>';
			echo '<td> <pre>'.var_dump($_SERVER).'</pre> </td>';
			echo '</tr>';
		}?>
	</table>
	<div>
		<br/>
	</div>
	<table id="image">
		<tr>
			<td><img src="image.png"/></td>
			<td><img src="image.png"/></td>
			<td><img src="image.png"/></td>
		</tr>
	</table>
</body>
</html>


