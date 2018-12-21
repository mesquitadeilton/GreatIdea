<?php
// Connect to database
	include("../daoProject.php");
	$db = new daoProject();
	$connection =  $db->getConnstring();

	$request_method=$_SERVER["REQUEST_METHOD"];

  switch($request_method) {
  		case 'GET':
  			// Retrive Products
  			if(!empty($_GET["id"]))
  			{
  				$id=intval($_GET["id"]);
  				get_project($id);
  			}
  			else
  			{
  				get_project();
  			}
  			break;
  		default:
  			// Invalid Request Method
  			header("HTTP/1.0 405 Method Not Allowed");
  			break;

        case 'POST':
        // Insert Product
        insert_idea();
        break;

        case 'PUT':
        // Update Product
        $id=intval($_GET["id"]);
        update_idea($id);
        break;

        case 'DELETE':
        // Delete Product
        $id=intval($_GET["id"]);
        delete_idea($id);
        break;

  	}

    function get_project(){
  		global $connection;
  		$query="SELECT * FROM idea ";
  		$response=array();
  		$result=mysqli_query($connection, $query);
  		while($row=mysqli_fetch_array($result))
  		{
  			$response[]=$row;
  		}
  		header('Content-Type: application/json');
  		echo json_encode($response);
	}



  function insert_idea(){
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$title=$data["title"];
		$description=$data["description"];
		$value=$data["value"];
		$contact=$data["contact"];
		echo $query="INSERT INTO idea SET title='.$title.', description='.$description.', value='.$value.', contact='.$contact.' ";
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'`Project Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Project Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

  function update_idea($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$title=$post_vars["title"];
		$description=$post_vars["description"];
		$value=$post_vars["value"];
		$contact=$post_vars["contact"];
		$query= "UPDATE idea SET title='.$title.', description='.$description.', value='.$value.', contact='.$contact' WHERE id= '.$id' ";
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Project Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Project Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

  function delete_idea($id)
  {
	global $connection;
	$query="DELETE FROM idea WHERE id='.$id' ";
	if(mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'Project Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Project Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
}


?>
