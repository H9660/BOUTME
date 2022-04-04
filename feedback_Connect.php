<style>
*{
    background-repeat: no-repeat;
    background-color: #daf2f2;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}

.acknow{
    color: black;
    font-size: 50px;
    font-family: 'Courier New', Courier, monospace;
    text-align: center;

}
</style>

<?php
$FIRST = $_POST['FIRST'];
$SECOND = $_POST['SECOND'];
$THIRD = $_POST['THIRD'];


$conn = new mysqli('localhost','root','','my_feedback');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
    $stmt =$conn->prepare("insert into hussain_feedback(FIRST, SECOND, THIRD)
    values(?,?,?)");
    $stmt->bind_param("sss",$FIRST,$SECOND, $THIRD);
    $stmt->execute();
    echo "<p class='acknow'> <strong> Your Response Has Been Recorded </strong> </p>";
    $stmt->close();
    $conn->close();
}


?>