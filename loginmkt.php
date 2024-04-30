<?php
   $mac=$_POST['mac'];
   $ip=$_POST['ip'];
   $username=$_POST['username'];
   $linklogin=$_POST['link-login'];
   $linkorig=$_POST['link-orig'];
   $error=$_POST['error'];
   $chapid=$_POST['chap-id'];
   $chapchallenge=$_POST['chap-challenge'];
   $linkloginonly=$_POST['link-login-only'];
   $linkorigesc=$_POST['link-orig-esc'];
   $macesc=$_POST['mac'];
?>
<?php
    //DB details
  //  $dbHost     = 'localhost';
  //  $dbUsername = 'u794648024_zkorpio1';
 //   $dbPassword = 'Woodwindow35';
 //   $dbName     = 'u794648024_test';
    
    //Create connection and select DB
 //   $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
 //   if($db->connect_error){
//       die("Connection failed: " . $db->connect_error);
 //   }
//        //Get image data from database
//    $result = $db->query("SELECT file_data, file_type FROM media WHERE DATE(created_at) = CURDATE() ORDER BY id DESC LIMIT 1");
    
//    if($result->num_rows > 0){
//        $imgData = $result->fetch_assoc();
        
        
        //Render image
        
 //       $tipo=$imgData['file_type'];
        
        //header("Content-type: $tipo");
  //      $imagenfinal=$imgData['file_data'];
 //       if ($imagenfinal=="image/jpeg")
 //       {
        
 //       file_put_contents('imgmkt/girardota1.jpg', $imagenfinal);
 //       }
 //       else if ($imagenfinal=="image/png")
 //       {
 //       file_put_contents('imgmkt/girardota1.png', $imagenfinal);    
 //       }
        
        
        //echo $imgData['file_data']; 
        

        
  //  }else{
      
        
  //      $imagenf="imgmkt/girardotaalterna.jpg";
  //      //echo 'Image not found...';
 //   }
?>










<?php


//
//$link = mysqli_connect("a2ss33.a2hosting.com", "wilsonba_parquegirardota", "woodwindow35");

//mysqli_select_db($link, "wilsonba_parque");

//$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

//$result = mysqli_query($link, "SELECT * FROM cartelera");

//mysqli_data_seek ($result, 0);

//$extraido= mysqli_fetch_array($result);

//echo "- Nombre: ".$extraido['nombre']."<br/>";

//echo "- Apellidos: ".$extraido['apellidos']."<br/>";

//echo "- Dirección: ".$extraido['direccion']."<br/>";

//echo "- Teléfono: ".$extraido['telefono']."<br/>";

//echo "- Edad: ".$extraido['edad']."<br/>";

//mysqli_free_result($result);

//mysqli_close($link);

?>




<!--agregado en lugar de consultar a la bdd

-->
  <?php $imagenf="imgmkt/milk3.gif"; ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title>mikrotik hotspot > login</title>


<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<style type="text/css">

body {color: #737373; font-size: 10px; font-family: verdana;}



.imagebackground {
    background: #000000 url(<?php echo $imagenf; ?>) no-repeat bottom left;
    background-size: 100% 100%;
    width: 100%;
    /* height: 100%; */
    height: auto !important;
    min-height:100%;
}

.fullWithBackground {
  height: 100vh;
  background: url(<?php echo $imagenf; ?>) 50% fixed;
  background-size: cover;
  color: #fff;
}

textarea,input,select{
background-color: #FDFBFB 
border: 1px solid #BBBBBB;
padding: 2px;
margin: 1px;
font-size: 14px;
color: #808080;
}

.aClassName{
   width:200px;
   height:80px;
}

a, a:link, a:visited, a:active { color: #AAAAAA; text-decoration: none; font-size: 10px; }
a:hover { border-bottom: 1px dotted #c1c1c1; color: #AAAAAA; }
img {border: none;}
td { font-size: 14px; color: #7A7A7A; }
</style>

</head>

<body>
    
  <script>var minutes =0;
var seconds=20;
url='<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>';
link_name='<h1 style="font-size: 30px">CLICK AQUI PARA EMPEZAR A NAVEGAR<h1>'
var timer=setInterval(function(){myCounter()},1000);
function myCounter()
{
 
if(minutes > 59 || minutes < 0)
{
document.getElementById("time").innerHTML="<font color='red'>Please check the minutes variable, Set it in between 0 to 59</font>";
}else
{
     seconds--;
     if(seconds==0)
        {
          minutes=minutes-1;
          seconds=60;
        }
     document.getElementById("time").innerHTML='<h1 style="font-size: 30px">'+minutes +" Minutos "+seconds+" Segundos"+'<h1>';
         if(minutes==-1)
             {
               clearTimeout(timer);
               document.getElementById("time").innerHTML='<h1 style="font-size: 30px">SU TIEMPO DE NAVEGACION HA SIDO HABILITADO<h1><br><br>';
               document.getElementById("data").innerHTML="<button><a target='_blank' href='"+url+"'>"+link_name+"</a></button>";
                   
 }            }
}
</script>


<script>
var minutes1 =0;
var seconds1=900;
var timer1=setInterval(function(){myCounter2()},1000)
function myCounter2()
{
if(minutes1 > 59 || minutes1 < 0)
{

}else
{
     seconds1--;
     if(seconds1==0)
        {
          minutes1=minutes1-1;
          seconds1=60;
        }
     document.getElementById("timepromo").innerHTML='<h1 style="font-size: 50px">'+minutes1 +" Minutos "+seconds1+" Segundos"+'<h1>';
         if(minutes==-1)
             {
               clearTimeout(timer);
               
                   
 }            }
}    
    
    
    
    
    
    
    
</script>






<center><div id="data"><h1 style="font-size: 30px">Espere unos segundos hasta generar su navegacion.<H1></div>
    
    <div id="time"></div></h1></center>  
    
    
    
    
    
    
    
<!-- $(if chap-id) -->

 <div class="fullWithBackground">
        
    <div class="flex h-screen items-center justify-center">
  <div id="timepromo" ; style="text-align:center; vertical-align: middle"></div>
   
    </div>
</div>




     

	<!--<form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
		<input type="hidden" name="popup" value="true" />
	</form>-->
	
	<script type="text/javascript" src="./md5.js"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
                <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
<!-- $(endif) -->

<div align="center">
<a href="<?php echo $linkloginonly; ?>?target=lv&dst=<?php echo $linkorigesc; ?>"><!--Latviski--></a>
</div>

<table width="100%" style="margin-top: 10%;">
	<tr>
	<td align="center" valign="middle">
		<!--<div class="notice" style="color: #c1c1c1; font-size: 9px">Please log on to use the mikrotik hotspot service<br />-->

<!-- $(if trial == 'yes') -->

<!--Free trial available, <a style="color: #FF8080"href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>">click here</a>-->
<!-- $(endif) -->

</div><br />
	<!--<table width="240" height="240" style="border: 1px solid #cccccc; padding: 0px;" cellpadding="0" cellspacing="0">-->
	<tr>
	<td align="center" valign="bottom" height="175" colspan="2">
<!-- removed $(if chap-id) $(endif)  around OnSubmit -->
		<form name="login" action="<?php echo $linkloginonly; ?>" method="post" onSubmit="return doLogin()" >
			<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
			<input type="hidden" name="popup" value="true" />
						
			<!--<table width="100" style="background-color: #ffffff">
				<tr><td align="right">login</td>
				<td><input style="width: 80px" name="username" type="text" value="<?php echo $username; ?>"/></td>
				</tr>
				<tr><td align="right">password</td>
				<td><input style="width: 80px" name="password" type="password"/></td>
				</tr>
				<tr><td> </td>
				<td><input type="submit" value="OK" /></td>
				</tr>
			</table>-->
		</form>
	</td>
	</tr>
	</table>
	
<!-- $(if error) -->
<br /><div style="color: #FF8080; font-size: 9px"><?php echo $error; ?></div>
<!-- $(endif) -->

	</td>
	</tr>
</table>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>

</div>
</body>
</html>