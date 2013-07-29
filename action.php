<?php
  //Get Value Variable
	$ip = $_POST['ip'];
	$mac = $_POST['mac'];
	//print_r($ip."-".$mac);
	
	$output = array(); //array to store output	
	exec('java -cp docsdiag.jar docsdiag -cmip $ip -cmmac $mac', $output); //actual call to jar file
	$output_str = join("<br>",$output);
	//$result = var_dump(array_map("cb",$output));
	//$var = json_encode($output, true);
	echo $output_str."<br><br>"; //supposed to output data, but since no input was //given, no data is returned
?>
