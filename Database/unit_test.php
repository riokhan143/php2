<?php
require("Database.php");
$dbObj = new Database();
//case 1 Inserting data using valid SQL insert command
//$dbObj = new Database();
$result=$dbObj->execute("INSERT INTO tbluser(name,email,username,password) VALUES
('Rio','riokhan@yahoo.com','riokhan',123)");
echo "Case 1 result: ".$result;

//case 2 Updating data using valid SQL update command
$result = $dbObj->execute("UPDATE tbluser SET name='Rio Khan' WHERE id=1");
echo "Case 2 result: ".$result;

//case 3 Extracting data using valid SQL select command.
$result = $dbObj->execute("SELECT * FROM tbluser");
echo "Case 3 result:".$result;

//case 4 Deleting data using valid SQL delete command.
$result = $dbObj->execute("DELETE FROM tbluser WHERE id=1");
echo "Case 4 result:".$result;

//case 5 Inserting data using invalid SQL insert command
$dbObj = new Database();
$result=$dbObj->execute("INSERT INTO tbluser(name,emal,username,password) VALUES
('Rio','riokhan@yahoo.com','riokhan','123')");
echo "Case 5 result: ".$result;

//case 6 Updating data using invalid SQL update command
$result = $dbObj->execute("UPDAT tbluser SET name='Rio Khan' WHERE id=1");
echo "Case 6 result: ".$result;

//case 7 Extracting data using invalid SQL select command.
$result = $dbObj->execute("SELECT  FROM tbluser");
echo "Case 7 result:".$result;

//case 8 Deleting data using valid SQL delete command.
$result = $dbObj->execute("DELETE * FROM tbluser WHERE id=1");
echo "Case 8 result:".$result;


?>