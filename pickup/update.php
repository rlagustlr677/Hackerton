<?
    //데이터 베이스 연결하기
    include "db_info.php";
    $id = $_GET["id"];
    $no = $_GET["no"];
    $field = $_GET["field"];
    $search_word = $_GET["search_word"];
    $user = $_POST["user"];
    $item = $_POST["item"];
    $type=$_POST["type"];
    $title = $_POST["title"];
    $lwhere = $_POST["lwhere"];
    $lwhen = $_POST["lwhen"];
    $image = $_POST["image"];
    $comment = $_POST["comment"];

    // 글의 비밀번호를 가져온다.
    $query = "SELECT passwd FROM pickup_item WHERE id=$id";
    $result=mysql_query($query, $conn);
    $row=mysql_fetch_array($result);

    //입력된 값과 비교한다.
    $query = "UPDATE pickup_item SET user='$user', item='$item', type='$type',
    title='$title',image='$image',lwhere='$lwhere',lwhen='$lwhen' ,comment='$comment' WHERE id=$id";//업데이트 쿼리문
    $result=mysql_query($query, $conn) or die(mysql_error());
    echo $result;
    

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    //수정하기인 경우 수정된 글로..
    echo("<meta http-equiv='Refresh' content='1;URL=read.php?id=$id&no=$no&field=$field&search_word=$search_word'>");
?>
<center>
<font size=2>정상적으로 수정되었습니다.</font>
