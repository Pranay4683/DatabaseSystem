<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search" >
    <button type="submit" name="submit">search</button>
</form>
<?php
include_once("config.php");
include_once("Database.php");
$db = new Database();
$db->query("select * from carowner");
$db->query("select * from carowner;");
//$db->bind(':country', "canada"); //'"Ray" or 1=1; --');
$results = $db->resultSet();
echo "enter id to search from database : \n";
foreach ($results as $result) {
    echo "<table>"."<tr>"."<td>".$result->country. "\t" . $result->year . "\t" .
       $result->value . "\t" . $result->id. "\t"."</td>" ."</tr>"."</table>"."\n";
}
$db->query("insert into carowner values ('newzealand',2014,2334,null,1)");
$db->execute();
?>

