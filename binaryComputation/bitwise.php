<?php
  // Set test cases to true
$n = true;
// Open file
$file = fopen("data.txt","r");
echo "Results: </br>";
while ($line = fgets($file)) // Loop through input
{
	sscanf($line, "%d %d", $par1, $par2); // Parse 2 integers
	
    if($n==true){ // Number of test cases
            $cases=$par1+1; //Test case n+1
            $n = false;
			}
	else
	{		
		    $result = add($par1, $par2); // Add integers
		    echo $result . "</br>";
		    $cases--;
		    if($cases<=0) {
		        exit; // Exit loop if last test case completed.
		    }
	}
}	

function add($xi, $yi){ //Add function / Bitwise arithmetic

    while($yi!=0){
        $carry = $xi & $yi;

        $xi=$xi^$yi;

        $yi=$carry << 1;
        }
    return $xi;
}

?>
