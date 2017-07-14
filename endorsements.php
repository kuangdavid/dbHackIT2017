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
						<input "type="text" onkeyup="showUser(this.value)" id ='name' name = "name" class="form-control" placeholder='<?php echo $name?>' style = "width:500px;"/>
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
			<div class="row">
				<div class="col-md-4" id="details">
					 

				</div>
				
				<div class="col-md-4" id="endorsements">
			
				</div>
				
				
				<div class="col-md-4" id="comments">
		
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script>
function getInfo(str) {
    if (str == "") {
        document.getElementById("details").innerHTML = "";
		document.getElementById("endorsements").innerHTML = "";
		document.getElementById("comments").innerHTML = "";
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
                document.getElementById("details").innerHTML = this.responseText;
				document.getElementById("endorsements").innerHTML = this.responseText;
				document.getElementById("comments").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdetails.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>	
	
<script>
getInfo("Adam");
<!--<?php echo $name ?>-->
</script>
</html>