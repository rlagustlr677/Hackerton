<?
//데이터 베이스 연결하기
include "db_info.php";

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=10;

# 2. 페이지 나누기에 표시될 페이지의 수
// $no는 페이지가 시작되는 첫 글의 순번이다.
$page_list_size = 10;
$no = $_GET['no'];
$field=$_GET['field'];
$search_word=$_GET['search_word'];

if (!$no || $no <0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.

if($search_word=='')
{
	$query = "SELECT * FROM lost_item ORDER BY id DESC LIMIT $no, $page_size";
	$result_count=mysql_query("SELECT count(*) FROM lost_item",$conn);
	$result_row=mysql_fetch_row($result_count);
	$total_row = $result_row[0];
}else{
	if($field=="title")
	{
	$query = "SELECT * FROM lost_item where title like '%$search_word%' ORDER BY id DESC LIMIT $no, $page_size";
	$result_count=mysql_query("SELECT count(*) FROM lost_item where title like '%$search_word%'",$conn);
	$result_row=mysql_fetch_row($result_count);
	$total_row = $result_row[0];
	}
	else if($field=="comment")
	{
	$query = "SELECT * FROM lost_item where comment like '%$search_word%' ORDER BY id DESC LIMIT $no, $page_size";
	$result_count=mysql_query("SELECT count(*) FROM lost_item where title like '%$search_word%'",$conn);
	$result_row=mysql_fetch_row($result_count);
	$total_row = $result_row[0];
	}
	else if($field=="user")
	{
	$query = "SELECT * FROM lost_item where user like '%$search_word%' ORDER BY id DESC LIMIT $no, $page_size";
	$result_count=mysql_query("SELECT count(*) FROM lost_item where title like '%$search_word%'",$conn);
	$result_row=mysql_fetch_row($result_count);
	$total_row = $result_row[0];
	}
}
$result = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
//$result_count=mysql_query("SELECT count(*) FROM lost_item",$conn);
//$result_row=mysql_fetch_row($result_count);
//$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

# 총 페이지 계산
# ceil는 올림이다. 
if ($total_row <= 0) $total_row = 0;
$total_page = ceil($total_row / $page_size);//1개면

# 현재 페이지 계산
# no 변수는 0부터 시작해서 +1을 해줌.
$current_page = ceil(($no+1)/$page_size);
?>
<!doctype html>
<html>
<style>
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>immix - Free CSS Template by ZyPOP</title>


<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--
immix, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
<div id="container">

    <header> 
	<div class="width">
    		

		<h1><a href="../index.html">SLFC</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">

			
        			<li><a href="../index.html">Home</a></li>

            			<li class="selected">

					<a href="list.php?no=0&field=&search_word=">LOST</a>

            			</li>

	     			<li><a href="../pickup/list.php?no=0&field=&search_word=">FOUND</a></li>
            
				<li>

					<a href="../help.html">HELP</a>
     

            			</li>
            
				<li><a href="../contact.html">CONTACT</a></li>

       			</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


    <div id="intro">

	<div class="width">
      
		<div class="intro-content intro-content-short">
	
                    <h2>LOST</h2>
                   
            	</div>
                
            </div>
            

    </div>

    <div id="body">

	<div class="width">

	<section id="content" class="two-column with-right-sidebar">

	    <article>
				<center>
<BR>
<!-- 게시판 타이틀 -->
<font size=2><!--잃어버린물건입니다</a>-->
<BR>
<BR>

<table width=580 border=0 cellpadding=2 cellspacing=1
bgcolor=#777777>

<tr height=20 bgcolor=#999999>
    <td width=30 align=center>
        <font color=white>번호</font>
    </td>
    <td width=370 align=center>
        <font color=white>제 목</font>
    </td>
    <td width=50 align=center>
        <font color=white>글쓴이</font>
    </td>
    <td width=60 align=center>
        <font color=white>날 짜</font>
    </td>
    <td width=40 align=center>
        <font color=white>조회수</font>
    </td>
</tr>

<?
while($row=mysql_fetch_array($result))
{

?>

<tr>
    <!-- 번호 -->
    <td height=20 bgcolor=white align=center>
        <a href="read.php?id=<?=$row["id"]?>&no=<?=$no?>&field=<?=$field?>&search_word=<?=$search_word?>">
        <?=$row["id"]?></a>
    </td>
    <!-- 번호 끝 -->
    <!-- 제목 -->
    <td height=20 bgcolor=white>&nbsp;
        <a href="read.php?id=<?=$row["id"]?>&no=<?=$no?>&field=<?=$field?>&search_word=<?=$search_word?>">
        <?=strip_tags($row["title"], '<b><i>');?></a>
    </td>
    <!-- 제목 끝 -->
    <!-- 이름 -->
    <td align=center height=20 bgcolor=white>
        <font color=black>
        <a href="mailto:<?=$row["user"]?>"><?=$row["user"]?></a>
        </font>
    </td>
    <!-- 이름 끝 -->
    <!-- 날짜 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row["wdate"]?></font>
    </td>
    <!-- 날짜 끝 -->
    <!-- 조회수 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row["view"]?></font>
    </td>
    <!-- 조회수 끝 -->
</tr>
<!-- 행 끝 -->
<?
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
</table>
<!-- 게시물 리스트를 보이기 위한 테이블 끝-->
<!-- 페이지를 표시하기 위한 테이블 -->
<table border=0>
<tr>
    <td width=600 height=20 align=center rowspan=4>
    <font color=gray>
    &nbsp;
<?
$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;

$end_page = $start_page + $page_list_size - 1;

if ($total_page <$end_page) $end_page = $total_page;

if ($start_page >= $page_list_size) {


    $prev_list = ($start_page - 2)*$page_size;
    echo "<a href=:$PHP_SELF?no=$prev_list&field=$field&search_word=$search_word>◀</a> ";

}

$PHP_SELF = &$_SERVER['PHP_SELF'];

for ($i=$start_page;$i <= $end_page;$i++) {
    $page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
    if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
        echo "<a href=$PHP_SELF?no=$page&field=$field&search_word=$search_word>";
    }
    
    echo " $i "; //페이지를 표시
    
    if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시하기 위해서
        echo "</a>";
    }
}

if($total_page >$end_page)
{
    $next_list = $end_page * $page_size;
    echo "<a href=$PHP_SELF?no=$next_list&field=$field&search_word=$search_word>▶</a><p>";
}
?>
    </font>
    </td>
</tr>
</table>
<a href=write.php>글쓰기</a>
<form name=search method=get action="<?=$PHP_SELF?>">
<select name=field>
<option value=title>제 목</option>
<option value=comment>내 용</option>
<option value=user>글쓴이</option>
</select>
<input type=hidden name=no value="<?=$no?>">
<input type=text name=search_word size=20><input type=submit value="검색">
</center>
                       <p>&nbsp;</p>

            

            <p>&nbsp;</p>

            
                

            </table>

            <p>&nbsp;</p>

            
            

		</article>
        </section>
        
        <aside class="sidebar big-sidebar right-sidebar">
	
	
            <ul>	
               <li class="color-bg">
                    <h4>Live Chat</h4>

                    <ul class="Live Chat">
<embed height="300" width="90%" src="http://www.gagalive.kr/livechat1.swf?chatroom=sejong_lostandfound!"></embed>
                    </ul>
                </li>
                
               

		
               
	
                
		
        </aside>
    	<div class="clear"></div>
    </div>
	</div>
</div>

    <footer>



</div>

</li>
            </ul>
            
            <div class="clear"></div> 
            
    </div>
	</div>
</div>


            
        <div class="footer-bottom">
            <p>&copy; YourSite 2015. <a href="http://zypopwebtemplates.com/">Free HTML5 Templates</a> by ZyPOP</p>
         </div>
    </footer>

</body>
</html>
