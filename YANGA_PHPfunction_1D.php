<!DOCTYPE>
<html>
<head>
	<title> PHP ACTIVITY </title>
	<meta charset="utf-8"/>
	
	<style>
		body {
			font-family: Georgia, Arial, sans-serif;
		}
		
		.table {
			border: 1px solid black;
			border-collapse: collapse;
			width: 500px;
			height: 200px;
			text-align: center;
			margin-bottom: 20px;
			margin-top: 20px;
		}
		
		th {
			background-color: #ffb6c1;
		}
	</style>
</head>
<body>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Simple Function </th> </tr>
		<td>
			<?php 
				
				//Function is block of code that can be repeatedly called. 
				function simpleHello() {
					//statements 
					echo "Hello World!"; 
					} 
				//call the function 
				simpleHello(); 
				function withParam ($name="User") {
					echo "Welcome $name<br />"; 
					} 
					withParam ("Grace"); 
					withParam ("Isaac"); 
					withParam ("Ervin"); 
					withParam ();				
			?>
		</td>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function That Uses Echo and Return </th> </tr>
		<tr><td>
			<?php 
				//Function with more than one argument 
				function greetings ($greeting1, $greeting2, $greeting3) { 
					echo $greeting1. ", ".$greeting2." , ".$greeting3."!"."<br />";
				}
				//call greetingFunction 
			greetings ("Goodbye", "Toby", "Nice to see you"); 
				greetings ("Nice to see you " , "Toby ","Goodbye");
			?>
		</td></tr>
		<tr><td>
			<?php 
				// to let a function return a value use 
				// the return statement 
				$br ="<br>"; 
				function sum ($number1, $number2) {
					$sum= $number1 + $number2; 
					return $sum; 
				} 
				echo "<h3>Returning the value of function using \"RETURN\"</h3>"; 
				$number1=5; $number2=8; 
				echo "The sum of $number1 + $number2 = ".sum ($number1, $number2).$br; 
				$number1=48; $number2=75; 
				echo "$number1 + $number2= ".sum($number1, $number2); 
				?> 
		</td></tr>
		<tr><td>
			<?php 
				//echo use instead of return in a function 
				//will enable a constant output 
				$br="<br>"; 
				function noReturn ($number1, $number2) {
					$sum = $number1 + $number2; 
					echo "The sum of the the numbers is ".$sum; 
					} 
				echo "<h3>Returning the value of function using \"ECHO\"</h3>"; 
				noReturn (5,8); 
				echo $br; 
				// change the value of the variables 
				$number1=48;$number2=75; 
				noReturn ($number1, $number2); 
				echo $br;
			?>
		</td></tr>
	</table>
	
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Declaration Outside Function </th> </tr>
		<td>
			<?php 
				//declaration outside function 
				$br ="<br />"; 
				$a1 = "VENTURA"; 
				$a2 = "mary";
				$a3 = "Grace"; 
				echo "Before function call ".$br; 
				echo "<b>".$a2." ".$a3." ".$a1.$br."</b>"; 
				convertNamestoUpper($a2,$a3,$a1); 
				echo "<h2>After Function Call..</h2>"; 
				echo "Welcome <b>".$a2." ".$a3." ".$a1.$br."</b>"; 

				//statement function declaration 
				function convertNamestoUpper(&$n2, &$n3,&$n1){ 
					//the symbol ampersand (&) serves as a refernce to the value passed inside the function convertNamestoUpper 
					//strtoupper is a string special function that converts the casing of a string to uppercase. 
					$n2 = strtoupper($n2); 
					$n3 = strtoupper($n3); 
					$n1 = strtoupper($n1);
				}
			?>
		</td>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function with Multiple Returns </th> </tr>
		<tr><td>
			<?php 
				function addAndSubtract($num1 , $num2 ) {
					$add=$num1+$num2; 
					$subt=$num1-$num2; 
					return array ($add, $subt); 
				} 
				$br="<br />"; 
				$results=addAndSubtract(89, 24); 
				echo "Value of Addition: ".$results[0].$br; 
				echo "Value of Subtraction: ".$results[1].$br; 
			?>
		</tr></td>
	</table>

	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Use of List in Multiple Returns </th> </tr> 
		<tr><td>
			<?php 
				//Use of List 
				list($addResult, $subtResult)=addAndSubtract(589, 124); 
				echo "Value of Addition: ".$addResult.$br; 
				echo "Value of Subtraction: ".$subtResult.$br; 
			?>
		</tr></td>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function with Multiple Returns </th> </tr>
		<tr><td>
			<?php 
				$br ="<br />"; 
				function staticVar () { 
					/*static variable is a variable 
					that doesn't lose its value 
					when the function exits.*/ 
					static $number=0; 
					$number++; 
					return $number; 
				} 
				echo 'When $number is set to static: '.$br; 
				echo staticVar().$br; 
				echo staticVar().$br; 
				echo staticVar().$br;?> 
		</td></tr>
		<tr><td>
			<?php 
				$br ="<br />"; 
				function noStatic () { 
					/*When $number is declared as a local 
					variable, it loses it's value when the 
					function terminates*/ 
					$number=0; 
					$number++; 
					return $number; 
				}
				echo 'When $number is NOT set to static: '.$br; 
				echo noStatic().$br; 
				echo noStatic().$br; 
				echo noStatic().$br; ?>
		</td></tr>
		<tr><td>
			<?php 
				//declaration outside function 
				$br = "<br />"; 
				$a1 = "VENTURA"; 
				$a2 = "mary"; 
				$a3 = "Grace"; 
				echo "Before function call ".$br; 
				echo "<b>".$a2." ".$a3." ".$a1.$br."</b>"; 
				convertNamestoUpper($a2, $a3,$a1); 
				echo "<h2>After Function Call..</h2>"; 
				echo "Welcome <b>".$a2." ".$a3." ".$a1.$br."</b>"; 

				//statement function declaration 
				function convertOtherNamestoUpper(){
					//no parameters needed 
					//The global keyword followed by the variable name gives every part of your code full access to i 
					global $a1; global $a2; global $a3; 
					$a2 = strtoupper($a2); 
					$a3 = strtoupper($a3); 
					$a1 = strtoupper($al);
				}
			?>
		</td></tr>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function Recursion </th> </tr>
		<td>
			<?php 
				$br="<br />"; 
				function incByOne($a) { 
					if($a<=10) {
						//prints the value of $a with a space 
						echo "$a\n"; 
						// this will add a value of 1 to the value pass to $a 
						incByOne($a+1); 
					} 
				} 
				
				function incByTwo($a) { 
					if($a<=20){
						//prints the value of $a with a space 
						echo "$a\n"; 
						// this will add a value of 1 to the value pass to $a 
						incByTwo($a+2); 
					} 
				} 
				
				echo $br; 
				incByOne(0); 
				echo $br; 
				incByTwo(2) 
			?>	
		</td>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function with Array Values </th> </tr>
		<td>
			<?php 
				$br="<br />"; 
				
				//declaration of function 
				function displayStudInfo(array $studInfo) { 
					$formO = "<pre>";$formC="</pre>"; 
					echo $formO; 
					print_r($studInfo); 
					echo $formC; 
				}
			?> 
			<?php
			//call the function 
			//pass a direct array value using string indexed 
			displayStudInfo (array ('name'=>'Isaac')); 

			//create a variable that will hold the value of array, 
			// then when the function name is invoked, place the 
			//variable name inside the argument of the function 

			$studInfolist = array('name'=>'Daph','age'=>17,'gender'=>'F','job'=>'student'); 
			displayStudInfo($studInfolist);

			?>
			<?php
				function displayTableValues(array $studInfo, $color="#EDF5E1", $cellPadding = 5) {
					
					//declare the properties of the table in html 
					echo "<table align = center bgcolor ='$color' border='3'"."bordercolor='black' cellPadding = '$cellPadding'"."cellspacing='0'>";
					
					foreach($studInfo as $key => $value) {
						echo '<tr><td>'.ucwords($key).'</td>
						<td>'.$value.'</td></tr>';
					}
					echo "</table>";
				}
				
				//display the Table Function
				displayTableValues($studInfolist);
				echo $br;
				
				//call the name of the table again, with different parameters
				displayTableValues($studInfolist, 'lightpink',10);
				echo $br;
				displayTableValues($studInfolist, '#63FF77',20);
			?>
		</td>
	</table>
	<hr color = "Red"> 
	<h2> MY SAMPLE FUNCTIONS </h2>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Simple Function </th> </tr>
		<td>
			<?php 
				function simpleMessage() {
					//statements 
					echo "Hello! My Name is Precious. Nice to meet you!"; 
					} 
				//call the function 
				simpleHello(); 				
			?>
		</td>
	</table>
	
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function with Echo and Return Statement </th> </tr>
		<td>
			<?php 
				function calculateProduct($num1, $num2) {
					$product = $num1 * $num2;
					echo "The product is: " . $product . "\n";
					return $product;
				}
				$result = calculateProduct(5, 3);
				echo "The result stored in the variable is: " . $result;
			?>
		</td>
	</table>
	
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function By Reference </th> </tr>
		<td>
			<?php 
				function addOne(&$number) {
					$number += 1;
				}
				addOne($value);
				echo "After function call: ".$value;
			?>
		</td>
	</table>
	<table border = "1" align = "center" class = "table">
		<tr class = "header"  rowspan = "2"> <th> Function Using Static and Global Variables </th> </tr>
		<td>
		<?php 
			$globalVariable = 5;

			function calculateVariables() {
				static $staticVariable = 2;
				global $globalVariable;
				
				$staticVariable++;
				$globalVariable *= $staticVariable;
				
				echo "Static variable: " . $staticVariable . "\n\n";
				echo "Global variable: " . $globalVariable . "\n\n";
			}
			
			calculateVariables();
			calculateVariables();
		?>
		</td>
	</table>
		
</body>
</html>