<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();

?>

<h1>search page</h1>
<div>
<?php
if(isset($_POST['submit'])){
  
$a= $_POST['search'];
$db->query("SELECT * FROM carowner where 
id LIKE '%$a%' 

");
$result = $db->single();
// foreach ($results as $result) {
    echo $result->country . "\t" . $result->year . "\t" .
       $result->value . "\t" . $result->id ."\n";
// }
}
?>
</div>