<?php
$ReturnObject = array();

// HSDA
$name = "hsda";
if(count($openapi['hsda'])>0)
	{
	$paths = $openapi['hsda']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}
	
// HSDA Seach
$name = "hsda-search";
if(count($openapi['hsda-search'])>0)
	{
	$paths = $openapi['hsda-search']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}	
	
// HSDA Seach
$name = "hsda-bulk";
if(count($openapi['hsda-bulk'])>0)
	{
	$paths = $openapi['hsda-bulk']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}
	
// HSDA Meta
$name = "hsda-meta";
if(count($openapi['hsda-meta'])>0)
	{
	$paths = $openapi['hsda-meta']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}	

// HSDA Taxonomy
$name = "hsda-taxonomy";
if(count($openapi['hsda-taxonomy'])>0)
	{
	$paths = $openapi['hsda-taxonomy']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}
	
// HSDA Management
$name = "hsda-management";
if(count($openapi['hsda-management'])>0)
	{
	$paths = $openapi['hsda-management']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}
	
// HSDA Orchestration
$name = "hsda-orchestration";
if(count($openapi['hsda-orchestration'])>0)
	{
	$paths = $openapi['hsda-orchestration']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}	

// Utility
$name = "hsda-utility";
if(count($openapi['hsda-utility'])>0)
	{
	$paths = $openapi['hsda-utility']['paths'];
	foreach($paths as $path => $path_details)
		{
		foreach($path_details as $verb => $verb_details)
	  		{
	  		$route = $path;
	  		
	  		$Query = "SELECT * FROM service WHERE name = '" . $name . "' AND path = '" . $path . "' AND verb = '" . $verb . "'";
			$stmt = $conn->query($Query); 
			$row = $stmt->fetchObject();
			if(!isset($row->id))
				{
				$id = getGUID();	
		  		$Query = "INSERT INTO service(id,name,path,verb) VALUES('" . $id . "','" . $name . "','" . $path . "','" . $verb . "')";
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $response = $conn->exec($Query);				
				}
			$a = array();
			$a['name'] = $name;
			$a['path'] = $path;
			$a['verb'] = $verb;
			array_push($ReturnObject, $a);
	  		}
		}
	}
?>