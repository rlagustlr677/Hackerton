<?php
    $sql = mysql_query("select * from pickup_comment where comment_id=comment_depth and board_id=$id", $conn) ;
    $result = mysql_fetch_array($sql);
?>
<div id="commentView">
    <form action = comment_update.php?board_id=<?=$_GET["id"]?>&no=<?=$_GET["no"]?> method="post">
        <?php
            while($row = mysql_fetch_array($sql)){
        ?>
        <ul class = "oneDepth">
            <li>
                <div id="co_<?php echo $row['comment_id']?>" class="commentSet">
		    <div class="commentInfo">
		        <div class="commentId">작성자:<span class="comment_user"> <?php echo $row["comment_user"]?>
			<div class="comment_text"><?php echo $row["comment_text"]?></div></span></div>
			<div class="commentBtn">
			    <a href="#" class="comt write">댓글</a>
			    <a href="#" class="comt modify">수정</a>
			    <a href="#" class="comt delete">삭제</a>
			</div>
	        <?php
		    $sql2 = mysql_query("select * from pickup_comment where comment_id!=comment_depth and comment_depth=".$row["comment_id"], $conn) ;
                    $result2 = mysql_fetch_array($sql2) ;

		    while($row2 = mysql_fetch_array($sql2)){
	        ?>
	        <ul class = "twoDepth">
		    <li>
		        <div id="co_<?php echo $row2['comment_id']?>" class="commentSet">
			    <div class="commentInfo">
			    <div class="commentId">작성자:<span class="comment_user"><?php echo $row2["comment_user"]?>
			    <div class="comment_text"><?php echo $row2["comment_text"]?></div></span></div>
			    <div class="commentBtn">
				<a href="#md" class="comt modify">수정</a>
				<a href="#dt" class="comt delete">삭제</a>
			    </div>
			</div>
			</div>
		    </li>
	        </ul>
	        <?php
		    }
	        ?>
	    </li>
        </ul>
        <?php } ?>
    </form>
</div>

<form action = comment_update.php?board_id=<?=$_GET["id"]?>&no=<?=$_GET["no"]?> method=post>
    
    <table>
        <tbody>
            <tr>
               <th scope="row"> <label for = "comment_user">아이디</label></th>
		<td><input type = "text" name = "comment_user" id = "comment_user"></td>
		<br>
	   <th scope = "row"> <label for = "comment_password">비밀번호</label></th>
		<td><input type = "password" name = "comment_password" id = "comment_password"></td>
	    <tr>
		<th scope="row"><label for = "comment_text">내용</label></th>
		<td><textarea name = "comment_text" id = "comment_text"></textarea></td>
	    </tr>
	</tbody>
    </table>
    <div class = "btnSet">
	    <input type = "submit" value = "코멘트작성">
	</div>
</form>

<script>
    $(document).ready(function(){
	var action = '' ;

	$('#commentView').delegate('.comt', 'click', function(){
	    //현재 위치에서 가장 가까운 commentSet 클래스를 변수에 넣는다.
	    var thisParent = $(this).parents('.commentSet') ;

	    //현재 작성 내용을 변수에 넣고, active 클래스 추가.
	    var commentSet = thisParent.html() ;
	    thisParent.addClass('active') ;

	    //취소버튼
	    var commentBtn = '<a href="#" class="addComt cancel">취소</a>' ;

	    //버튼 삭제 ,추가
	    $('.comt').hide() ;
	    $(this).parents('.commentBtn').append(commentBtn) ;

	    //commentInfo의 Id를 가져온다
	    var comment_id = thisParent.attr('id') ;

	    // 전체 길이에서 3을 뺀 나머지가 co_no
	    comment_id = coomment_id.substr(3, comment_id.length) ;

	    //변수 초기화
	    var comment = '';
	    var comment_user = '';
	    var comment_text = '' ;

	    if($(this).hasClass("comt write")){
		//댓글 쓰기
		action = 'w' ;
		//ID출력
		comment_user = '<input type="text" name="comment_user" id="comment_user"> ;
	    }
	    else if($(this).hasClass("comt modify")){
		//댓글 수정
		action = 'u' ;

		comment_user = thisParent.find('.comment_user').text() ;
		comment_text = thisParent.find('.comment_text').text() ;
	    }
	    else if($(this).hasClass("comt delete")){
		//댓글 삭제
		action = 'd' ;
	    }
		comment += '<div class="writeComment">' ;
		comment += '    <inputType="hidden" name="w" value="'+action+'">';
		comment += '    <input type="hidden" name="comment_id" value="'+comment_id+'">' ;
		comment += '    <table>' ;
		comment += '        <tbody>' ;

		if(action !== 'd') {
		    comment += '        <tr>' ;
		    comment += '            <th scope="row"><label for="comment_user">아이디</label></th>';
		    comment += '            <td>'+comment_user+'</td>' ;
		    comment += '        </tr>' ;
		}
		comment += '        <tr>' ;
		comment += '            <th scope="row">' ;
		comment += '        <label for="comment_password">비밀번호</label></th>' ;
		comment += '            <td><input type="password" name="comment_password" id="comment_password"></td>' ;
		comment += '        </tr>' ;

		if(action !== 'd'){
		    comment += '        <tr>' ;
		    comment += '            <th scope="row"><label for="comment_text">내용</label</th>' ;
		    comment += '            <td><textarea name="comment_text" id="comment_text">'+comment_text+'</textarea></td>' ;
		    comment += '        </tr>' ;
		}
		comment += '        </tbody>' ;
		comment += '    </table>' ;
		comment += '    <div class="btnSet">' ;
		comment += '        <input type="submit" value="확인">' ;
		comment += '    </div>' ;
		comment += '</div>' ;

		thisParent.after(comment) ;
	    return false ;
	}) ;

	$('#commentView').delegate(".cancel", "click", function(){
	    $('.writeComment').remove() ;
	    $('.commentSet.active').removeClass('active') ;
	    $('.addComt').remove() ;
	    $('.comt').show() ;
	return false ;
	}) ;
    }) ;
</script>

