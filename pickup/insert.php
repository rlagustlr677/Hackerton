<?
    //데이터 베이스 연결하기
    include "db_info.php";


$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


    //$id = $_GET['id'];
    //$id = $_GET["id"];
    $user = $_POST["user"];
    $item = $_POST["item"];
    $passwd = $_POST["passwd"];
    $title = $_POST["title"];
    $comment = $_POST['comment'];
    $pwhere = $_POST["pwhere"];
    $pwhen = $_POST["pwhen"];
    $image = $_POST["image"];
    $type = $_POST["type"];
    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];

    $query = "INSERT INTO pickup_item 
    (title, user, passwd, wdate, item, ip, view, comment, pwhere, pwhen,type, image)
    VALUES ('$title', '$user', '$passwd', now(),'$item', '$REMOTE_ADDR',0,'$comment','$pwhere','$pwhen','$type','$image')"; 
    $result=mysql_query($query, $conn) or die(mysql_error());

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    // 새 글 쓰기인 경우 리스트로..
    echo ("<meta http-equiv='Refresh' content='1; URL=list.php?no=0&field=&search_word='>");
    //1초후에 list.php로 이동함.
?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>
