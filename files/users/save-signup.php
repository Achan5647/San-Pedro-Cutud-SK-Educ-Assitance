<?php
    //CALL DATABASE CONNECTION SCRIPT
    include("../config/database.php");
  
    //GET USER INPUT FROM WEB FORM
    $intAid = $_POST['Applicant_ID_Create'];
    $strUname = $_POST['Username_Create'];
    $strPass = $_POST['Password_Create'];
    $strEmail = $_POST['Email_Address_Create'];
    $strFname = $_POST['First_Name_Create'];
    $strMname = $_POST['Middle_Name_Create'];
    $strLname = $_POST['Last_Name_Create'];
    
    //CREATE QUERY TO INSERT RECORDS
    $query = "INSERT INTO tbl_applicant SET
    Applicant_ID=:aid,
    Applicant_username=:uname, 
    Applicant_password=:pass,  
    Applicant_email=:email, 
    Applicant_FName=:fname,
    Applicant_MName=:mname,
    Applicant_LName=:lname";

    //PREPARE QUERY AND STORE TO A STATEMENT VARIABLE
    $stmt = $pdo->prepare($query);

    //BIND PARAMETER VALUES
    $stmt->bindParam(":aid", $intAid);
    $stmt->bindParam(":uname", $strUname);
    $stmt->bindParam(":pass", $strPass);
    $stmt->bindParam(":email", $strEmail);
    $stmt->bindParam(":fname", $strFname);
    $stmt->bindParam(":mname", $strMname);
    $stmt->bindParam(":lname", $strLname);

    //EXECUTE STATEMENT
    $stmt->execute();  
?>
