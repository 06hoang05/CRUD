<?php
$connect = mysqli_connect("localhost","root","", "stu_crud");
if($connect === false){
    die("Error: Could not connect." . mysqli_connect_error());

}
if(issert($_REQUEST["term"])){
    $sql = "SELECT * FROM student WHERE name LIKE ?";
    if($stml = mysqli_prepare($connect, $sql)){
        mysqli_stml_bind_param($stml,"s",$param_term);
        $param_term = $_REQUEST["term" ]. '%';
        if(mysqli_stmt_execute($stmt)){
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result. MYSQLI_ASSOS)){
            echo "<p>" .$row["name"] . "</p>";
        }
    } else{
        echo"<p>No matches found</p>";
    }
} else{
    echo"ERROR: Couldnot able to execute $sql." . mysqli_error($link);
}    
}
mysqli_stmt_close($stmt);

}
mysqli_close($connect);
?>