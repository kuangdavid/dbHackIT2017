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
				<div class="col-md-4">
					 
					<address>
						 <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
					</address>
				</div>
				<div class="col-md-4">
					<ul>
						<li>
							Lorem ipsum dolor sit amet
						</li>
						<li>
							Consectetur adipiscing elit
						</li>
						<li>
							Integer molestie lorem at massa
						</li>
						<li>
							Facilisis in pretium nisl aliquet
						</li>
						<li>
							Nulla volutpat aliquam velit
						</li>
						<li>
							Faucibus porta lacus fringilla vel
						</li>
						<li>
							Aenean sit amet erat nunc
						</li>
						<li>
							Eget porttitor lorem
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>