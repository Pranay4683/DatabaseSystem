<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search" >
    <button type="submit" name="submits">search</button>
</form>
<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();

$db->query("select * from carowner where country=:country");
$db->bind(':country', "canada"); //'"Ray" or 1=1; --');
$results = $db->resultSet();
echo "enter id to search from database : \n";
foreach ($results as $result) {
    echo $result->id . "\t" . $result->number . "\t" .
       $result->area . "\t" . $result->value. "\n";
}
$db->query("insert into carowner values ("newzealand",2014,2334,null,1)");
$db->execute();
?>

