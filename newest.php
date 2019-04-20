<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
			</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			
		    <!-- Calculator form -->
		    <form method="post" action="form.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>