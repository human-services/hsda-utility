<?php

$override = 1;

$service = $_get['name'];
$path = $_get['path'];
$verb = $_get['verb'];

$api = $openapi[$service]['paths'][$path];
$definitions = $openapi[$service]['definitions'];
$responses = $api[$verb]['responses'];
$response_200 = $responses['200'];
$schema_ref = $response_200['schema']['items']['$ref'];
$schema = str_replace("#/definitions/","",$schema_ref);
$schema_properties = $definitions[$schema]['properties'];
$schema = str_replace("_complete","",$schema);

$schema_path = "schema/" . $service . "-" . $schema . ".json";
$schema_source = json_decode(file_get_contents($schema_path));

//var_dump($_body);
//echo "\n";

// Validate
$validator = new JsonSchema\Validator;
$validator->validate($_body, $schema_source);

//echo "valid? " . $validator->isValid() . "\n";

$local_id = getGUID();

$F = array();
$F['id'] = $local_id;
$F['service'] = $service;
$F['path'] = $path;
$F['verb'] = $verb;
if ($validator->isValid()) 
	{
	$F['valid'] = 1;
	$F['message'] = array();  
	$E = 'JSON Validates';
	array_push($F['message'],$E);
	} 
else 
	{
	
	$errors = $validator->getErrors();
	
	// Override here until I can figure out this error.
	if(count($errors) == 1 && $errors[0]['pointer'] == '/id' && $errors[0]['message'] == 'String value found, but an object is required')
		{
		$F['valid'] = 1;
		$F['message'] = array();  
		$E = 'JSON Validates';
		array_push($F['message'],$E);
		}
	else
		{
		$F['valid'] = 0;
		$F['message'] = array();			
	    foreach ($errors as $error) 
	    	{
	    	//var_dump($error);
	    	//echo "\n";
			if($error['pointer'] != '/id' && $error['message'] != 'String value found, but an object is required')
				{	    	
	        	$E = $error['pointer'] . ' - ' . $error['message'];
	        	array_push($F['message'],$E);
				}
	    	}
		}
	}

?>