<?
    //데이터 베이스 연결하기
    include "db_info.php";

    //$id = $_GET['id'];
    //$id = $_GET["id"];
    $user = $_POST["user"];
    $item = $_POST["item"];
    $passwd = $_POST["passwd"];
    $title = $_POST["title"];
    $comment = $_POST['comment'];
    $lwhere = $_POST["lwhere"];
    $lwhen = $_POST["lwhen"];
    $tell = $_POST["tell"];
    $type = $_POST["type"];
    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];

    $query = "INSERT INTO lost_item 
    (title, user, passwd, wdate, item, ip, view, comment, lwhere, lwhen,type, tell)
    VALUES ('$title', '$user', '$passwd', now(),'$item', '$REMOTE_ADDR',0,'$comment','$lwhere','$lwhen','$type','$tell')"; 
    $result=mysql_query($query, $conn) or die(mysql_error());

    //데이터베이스와의 연결 종료
    mysql_close($conn);

    // 새 글 쓰기인 경우 리스트로..
    echo ("<meta http-equiv='Refresh' content='1; URL=list.php?no=0&field=&search_word='>");
    //1초후에 list.php로 이동함.
?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>
