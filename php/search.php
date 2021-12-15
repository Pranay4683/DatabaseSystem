<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();

?>

<h1>search page</h1>
<div>
<?php
if(isset($_POST['submits'])){
  
$search= $_POST['search'];
$db->query("SELECT * FROM migrant where 
id LIKE '%$search%' 

");
$results = $db->resultSet();
foreach ($results as $result) {
    echo $result->id . "\t" . $result->number . "\t" .
       $result->area . "\t" . $result->value;
}
}
?>
</div>