<html>
<head>
<title>Activity</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">   
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>       
</head>
<body class="blue-grey lighten-3">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<div class="container">
	<div class="condensed">
	<h1>Select two numbers:</h1>
	</div>
	<form method="POST" action="result.php">
	<div class="row">
		 <div class="input-field col s3">
          <i class="fas fa-bowling-ball"><input placeholder="First Number" name="num1" id="num1" type="text" class="validate"></i><input placeholder="First Number" name="num1" id="num1" type="text" class="validate">
      </div>	
		<div class="input-field col s3">
          <i class="fab fa-angellist"></i><input placeholder="Second Number" name="num2" id="num2" type="text" class="validate">
      </div>	
	</div>
	<div class="row">
		<div class="input-field col s6">
		<h2> Select operation: </h2>
    <i class="fas fa-check"></i><input placeholder="Type add, subtract, multiply or divide" name="oper" id="oper" type="text" class="validate">
    </div>
	</div>
	<div class="row">
	  <div class="input-field col s5">
	    <h2> Enter number: </h2>
	    <i class="fas fa-calendar"></i><input placeholder="From 1-7" name="num3" id="num3" type="text" class="validate">
	  </div>
  </div>
	<div class="row">
	  <div class="input-field col s5">
		  <button class="btn waves-effect waves-light  grey darken-4	" type="submit" name="action">Submit</button>
	  </div>
	</div>
</form>
</div>
</body>
</html>
