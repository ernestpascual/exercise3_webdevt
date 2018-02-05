<html>
<head>
<title>Activity</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">          
</head>
<body class="blue-grey lighten-3">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<div class="container">
	<h1>Select two numbers:</h1>
	<form method="POST" action="result.php">
	<div class="row">
		 <div class="input-field col s3">
          <input placeholder="First Number" name="num1" id="num1" type="text" class="validate">
      </div>	
		<div class="input-field col s3">
          <input placeholder="Second Number" name="num2" id="num2" type="text" class="validate">
      </div>	
	</div>
	<div class="row">
		<div class="input-field col s6">
		<h2> Select operation: </h2>
    <input placeholder="Type add, subtract, multiply or divide" name="oper" id="oper" type="text" class="validate">
    </div>
	</div>
	<div class="row">
	  <div class="input-field col s5">
	    <h2> Enter number: </h2>
	    <input placeholder="From 1-7" name="num3" id="num3" type="text" class="validate">
	  </div>
  </div>


	<div class="row">
	  <div class="input-field col s5">
		  <button class="btn waves-effect waves-light  grey darken-4	" type="submit" name="action">Submit</button>
	  </div>
	</div>

  <select>
  <option>asa</option>

</form>
</div>
</body>
</html>