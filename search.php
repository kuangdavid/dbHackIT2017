


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
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="navbar-left">
					 
					 
					<!-- <img src='https://www.americanbankingnews.com/logos/deutsche-bank-logo.png' style = "width: 220px; height:50px;"></img> -->
					<img src='logo.png' style = "width: 50px; height:50px; float:left;" ></img>
					<img src='dbGuru.png' style = "width: 85px; height:50px; " ></img>
					

					
				</div>
				<center>
				<form class="navbar-form navbar-center" name='form' method='post' action="search.php">
					<div class="navbar-center">
					
					
					
						<input "type="text" onkeyup="showUser(this.value)" id ='name' name = "name" class="form-control" placeholder='<?php echo $name?>' style = "width:500px;"/>
					
					
						<button type="submit" name= "submit" class="btn btn-default" >Search</button>
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
			</nav>
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

	
	
	
	
	
	
	<div class="row">
		<div class="col-md-8 result" id='txtHint'>
		
		
		
		
		
		</div>
		<div class="col-md-4">
		
		
		
		
		</div>
	</div>
	
	
	
	
</div>
  </body>
</html>

