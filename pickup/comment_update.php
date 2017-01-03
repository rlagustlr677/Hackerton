<?php
    require_once('db_info.php');

    $board_id = $_GET['board_id'];
    $no = $_GET["no"];
    $w = '' ;
    $comment_id = 'null' ;
    $field = $_GET['field'] ;
    $search_word = $_GET['search_word'] ;
    // 2Depth 수정/삭제
    if(isset($_POST['w'])){
	$w = $_POST['w'] ;
	$comment_id = $_POST['comment_id'] ;
    }
   
    $comment_password = $_POST['comment_password'] ;

    if($w !== 'd'){//$w변수가 d일 경우 둘다 필요없음
	$comment_text = $_POST['comment_text'] ;
	if($w !== 'u'){//$w변수가 u일 경우
	    $comment_user = $_POST['comment_user'] ;
	}
    }

    if(empty($w) || $w === 'w'){//$w가 비었거나 w
	$msg = '작성' ;
	$sql = "insert into pickup_comment (comment_user, comment_password, comment_text, comment_time, board_id) values ('$comment_user', '$comment_password', '$comment_text', now(), '$board_id')" ;

	if(empty($w)){//$w 비어있으면
	    $result = mysql_query($sql, $conn) or die(mysql_error()) ; 
	    $sql = "update pickup_comment set comment_depth = comment_id where comment_id=(select LAST_INSERT_ID())" ;
   	}
    }
    else if($w === 'u'){ //작성
	$msg = '수정' ;
	$result = mysql_query("select comment_password from pickup_comment where comment_id='$comment_id'", $conn) ;
	$row = mysql_fetch_array($result) ;
	if($comment_password!==$row["comment_password"]){//맞는 결과 없으면 종료
?>
	    <script>
		alert('비밀번호가 맞지 않습니다.') ;
		history.back() ;
	    </script>
<?php
	    exit ;
	}
	$sql = "update from pickup_comment set comment_text ='$comment_text' where comment_id='$comment_id'" ;
    }

    else if($w === 'd'){//삭제
	$msg = '삭제' ;
	$sql = "select comment_password from pickup_comment where comment_id='$comment_id'" ;
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_array($result) ;
	if($comment_password!==$row["comment_password"]){
?>
	    <script>
		alert('비밀번호가 맞지 않습니다.') ;
		history.back() ;
	    </script>
<?php
	    exit ;
	}
	$sql = "delete from pickup_comment where comment_id='$comment_id'" ;
    }
    else{
?>
	<script>
	    alert('정상적인 경로를 이용해주세요.') ;
	    history.back() ;
	</script>
<?php
	exit ;
    }

    $result = mysql_query($sql, $conn) ;
    mysql_close($conn) ;
    echo("<meta http-equiv='Refresh' content='0;URL=read.php?id=$board_id&no=$no&field=$field&search_word=$search_word'>") ;
?>

