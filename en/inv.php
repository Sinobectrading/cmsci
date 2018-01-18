<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "#9jc>Cn6";
$dbname = "cmsci";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'item', 
	1=> 'class',
	2=> 'sub',
	3 => 'height',
	4=> 'width',
	5=> 'tk',
	6=> 'tk2',
	7=> 'od',
	8=> 'ind',
	9=> 'nod',
	10=> 'ilength',
	11=> 'alloy',
	12=> 'surface',
	13=> 'color',
	14=> 'qty',
	15=> 'unit'
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM inventory";

$query=mysqli_query($conn, $sql) or die("inv.php: get inventory");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM inventory WHERE 1=1";



// if there is a search parameter, $requestData['search']['value'] contains search parameter
// if( !empty($requestData['columns'][4]['search']['value']) ){   //name
// 	$sql.=" AND die LIKE '".$requestData['columns'][4]['search']['value']."%' ";
// }
// if( !empty($requestData['columns'][1]['search']['value']) ){  
// 	$sql.=" AND length = ".$requestData['columns'][1]['search']['value'];
// }

if( !empty($requestData['columns'][1]['search']['value']) ){   //name
    $sql.=" AND class LIKE '".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){   //name
    $sql.=" AND sub LIKE '".$requestData['columns'][2]['search']['value']."%' ";
}


if( !empty($requestData['search']['value']) ) {   
	$sql.=" AND ( item LIKE '%".$requestData['search']['value']."%' ";    
	$sql.=" OR class LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR sub LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR height LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR width LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR tk LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR tk2 LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR od LIKE '%".$requestData['search']['value']."%' ";
 	$sql.=" OR ind LIKE '%".$requestData['search']['value']."%' ";
 	$sql.=" OR nod LIKE '%".$requestData['search']['value']."%' ";

	$sql.=" OR ilength LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR alloy LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR surface LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR unit LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR color LIKE '%".$requestData['search']['value']."%') ";	 
}


// $item = '1016202';
// $length = '72';
// $sql .= " WHERE item=".$item;
// $sql .= " AND length=".$length;


$query=mysqli_query($conn, $sql) or die("inv.php: get inventory");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 


$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";


/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("inv.php: get inventory");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["item"];
	$nestedData[] = $row["class"];
	$nestedData[] = $row["sub"];

	$nestedData[] = $row["height"];
	$nestedData[] = $row["width"];
	$nestedData[] = $row["tk"];
	$nestedData[] = $row["tk2"];
	$nestedData[] = $row["od"];
	$nestedData[] = $row["ind"];
	$nestedData[] = $row["nod"];

	$nestedData[] = $row["ilength"];
	$nestedData[] = $row["alloy"];
	$nestedData[] = $row["surface"];
	$nestedData[] = $row["color"];
	$nestedData[] = $row["qty"];
	$nestedData[] = $row["unit"];
	
 
	$data[] = $nestedData;
}



$json_data = array(
	"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
	"recordsTotal"    => intval( $totalData ),  // total number of records
	"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	"data"            => $data   // total data array
	);

echo json_encode($json_data);  // send data as json format

?>
