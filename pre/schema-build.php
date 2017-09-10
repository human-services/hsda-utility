<?php

$override = 1;

foreach($openapi as $key => $value)
	{
	$service_name = $key;
	
	if(isset($value['definitions']))
		{
	
		$definitions = $value['definitions'];
		
		//echo $service_name . "<br  />";
		
		foreach($definitions as $key2 => $value2)
			{
			//echo $key2 . "<br  />";	
			
			$schema_array = array();
			//$schema_array['$schema'] = 'http://json-schema.org/draft-06/schema#';
			$schema_array['title'] = $key2;
			$schema_array['description'] = 'This is ' . $key2 . ' object from the ' . $service_name . ' service.';
			$schema_array['type'] = 'array';
			$schema_array['patternProperties']['^X-']['type'] = 'object';
			$schema_array['items']['type'] = "object";
			$schema_array['items']['properties'] = $value2['properties'];
			
			if(isset($value2['required']))
				{
				$schema_array['items']['required'] = $value2['required'];
				}
			//$schema_array['items']['type'] = "object";
			
			foreach($value2['properties'] as $key3 => $value3)
				{
				if($value3['type'] == 'array' || $value3['type'] == 'object')	
					{
					if(isset($value3['items']))
						{
						$ref = $value3['items']['$ref'];
						$ref = str_replace('#/definitions/','',$ref);
						$definition = $definitions[$ref];
						$schema_array['items']['definitions'][$key3] = $definition;
						}
					}
				}
			
			$schema_json = stripslashes(format_json(json_encode($schema_array)));
			//echo $schema_json . "\n";
			
			$file_name = $service_name . "-" . $key2 . ".json";
			$file_path = "schema/" . $file_name;
			$myfile = fopen($file_path, "w") or die("Unable to open file!");
			fwrite($myfile, $schema_json);
			fclose($myfile);
			
			$b = array();
			$b['service'] = $service_name;
			$b['definition'] = $key2;
			$b['file'] = $file_name;
			
			array_push($ReturnObject,$b);
			
			}
		
		}
	}

?>