<html lang="en">
<link rel="stylesheet" type="text/css" href="my.css">
  <head>
 	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DB Mentor Selector</title></center>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  
	  <body>
		<?php
		if ( ! empty($_POST['name'])){
			$name = $_POST['name'];
		}
		?>
		



<div class="container-fluid">
	<div class="row">
	<div class="col-md-12" style="margin-top: 30px;">
		<div class="navbar-left">
			<img src='logo.png' style = "width: 50px; height:50px; margin-left: 30px; margin-bottom: 10px;" ></img>
		</div>
		<div class="navbar-right">
			<img src='dbGuru.png' style = "width: 85px; height:50px; margin-right: 30px; margin-bottom: 10px;" ></img>
		</div>
	</div>
		<div class="col-md-12" ">
			
				<center>
				<form class="navbar-form navbar-center" name='form' method='post' action="search.php">
					<div class="navbar-center">
						<input "type="text" onkeyup="showUser(this.value)" id ='name' name = "name" class="form-control" value='<?php echo $name?>' style = "width:500px;"/>
						<select class = "btn btn-default" style="padding:5px;">
						<option value="Skill" onselect="Skill()" >Skill</option>
						<option value="Name" onselect="Name()">Name</option>
						</select>
					</div>
					
				</form>
				</center>
					
					<?PHP
					$pattern =  '/^[0-9A-Za-zÁ-Úá-úàÀÜü]+$/';//integers & letters
					if (preg_match($pattern, $name) == 1){
						//continue
					} else {
						//reload form with error message
					}?>
		</div>
	</div>
	
	
	
	
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}

</script>	




<script>
	showUser('<?Php echo $name?>');
</script>
	
	
	
	
	
	
	<div class="row">
		<div class="col-md-8 result" id='txtHint' style="margin-top: 3%">
		
		
		
		
		
		</div>
		<div class="col-md-4">
		<br/>
		<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="37340/"></script> <!-- end feedwind code -->
		
		
		
		</div>
	</div>
	
	
	
	
</div>
  </body>
</html>

