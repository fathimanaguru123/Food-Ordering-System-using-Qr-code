<?
$amount= $_POST['amout'];
$name= $_POST['name'];
$phoneNumber= $_POST['phoneNumber'];
$homeAddress= $_POST['homeAddress'];
$pincode= $_POST['pincode'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connnection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(amount,name,phoneNumber,homeAddress,pincode)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$amount,$name,$phoneNumber,$homeAddress,$pincode);
    $stmt->execute();
    echo "Registration Successfully";
    $stmt->close();
    $conn->close();

}


?>