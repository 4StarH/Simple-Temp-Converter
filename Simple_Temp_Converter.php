<html>
 <head>
  <title>Simple Temperature Converter - Forrester Hinds</title>
 </head>
 <body>
 
		<form action="Simple_Temp_Converter.php" method="post">
		<br><br><br>Enter The Temperature: <input type="text" name="temp"><br><br>
		<b>Please choose the measurement you wish to convert from and to.</b><br><br>
			<input type="radio" name="convert" value="Celsius" checked> Celsius to Fahrenheit<br>
			<input type="radio" name="convert" value="Fahrenheit"> Fahrenheit to Celsius<br><br>
			<input type="submit" name="Submit" >
		</form>
		
		<?php

			if(isset($_POST['Submit'])) { //when the user clicks submit, run this script
			
				if (empty($_POST['temp']) || is_numeric($_POST['temp']) == false) { //if the value entered in the temperature box isn't a number or is empty, output error message.
		
					echo "Oops, please enter a temperature.<br><br>";
				} else {
				
					$temp = $_POST['temp']; 
				
					if ($_POST['convert'] == 'Celsius') { //if the user wants to convert from Celsius to Fahrenheit.
						
							$convertedTemp = ($temp * (9/5)) + 32; //conversion math stored in a local variable.
							
							$formattedNumber = number_format((float)$convertedTemp, 2, '.', ''); //format the number to two decimal places. Understanding of how to use number_format came from: https://www.w3schools.com/Php/func_string_number_format.asp
							
							echo "<b>$temp converted from Celsius to Fahrenheit is $formattedNumber degrees.</b>";
					
					} elseif ($_POST['convert'] == 'Fahrenheit') { //if the user wants to convert from Fahrenheit to Celsius.
						
							$convertedTemp = ($temp - 32) * (5/9); //conversion math stored in a local variable.
							
							$formattedNumber = number_format((float)$convertedTemp, 2, '.', ''); //format the number to two decimal places.
							
							echo "<b>$temp converted from Fahrenheit to Celsius is $formattedNumber degrees.</b>"; 
						
					}	

				}
					
			}
		?>
 </body>
</html>
