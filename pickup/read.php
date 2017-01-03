<!doctype html>
<html>
<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt;color : black;text-decoration : none; fontfamily
: 굴림;font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; font-size : 9pt;}
-->
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
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
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

					<a href="../lost/list.php?no=0&field=&search_word=">LOST</a>

            			</li>

	     			<li><a href="list.php?no=0&field=&search_word=">FOUND</a></li>
            
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
	
                    <h2>FOUND</h2>
                   
            	</div>
                
            </div>
            

    </div>

    <div id="body">

	<div class="width">

	<section id="content" class="two-column with-right-sidebar">

	    <article>
<center>
<BR>
<?
    //데이터 베이스 연결하기
    include "db_info.php";

    $id = $_GET['id'];
    $no = $_GET['no'];
    $field=$_GET['field'];
    $search_word = $_GET['search_word'];
    // 글 정보 가져오기
    $result=mysql_query("SELECT * FROM pickup_item WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);
?>
<table width=700 border=0 cellpadding=2 cellspacing=1
bgcolor=#777777>
<tr>
    <td height=20 colspan=4 align=center bgcolor=#999999>
        <font color=white><B><?=$row['title']?></B></font>
    </td>
</tr>
<tr>
    <td width=80 height=20 align=center bgcolor=#EEEEEE>글쓴이</td>
    <td width=240 bgcolor=white><?=$row["user"]?></td>
    <td width=80 height=20 align=center bgcolor=#EEEEEE>게시일</td>
    <td width=240 bgcolor=white><?=$row["wdate"]?></td>
</tr>
<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>분실물</td>
    <td width=240 bgcolor=white><?=$row["item"]?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>종류</td>
    <td width=240 bgcolor=white><?=$row["type"]?></td>
</tr>
<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>분실일시</td>
    <td width=240 bgcolor=white><?=$row["pwhen"]?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>분실장소</td>
    <td width=240 bgcolor=white><?=$row["pwhere"]?></td>
</tr>
<!--<tr>
    <td width=50 height=350 align=center bgcolor=#EEEEEE>사진</td>
    <td colspan=3 width=240 height=350 bgcolor=white><?=$row["image"]?></td>
</tr>-->
<tr>   
    <td width=50 height=20 align=center bgcolor=#EEEEEE>조회수</td>
    <td width=240 bgcolor=white><?=$row["view"]?></td>
    
</tr>
<tr>
    <td height=200  bgcolor=white colspan=4>
    <font color=black>
    <pre><?=$row["comment"]?></pre>
    </font>
    </td>
</tr>

<tr>
    <td colspan=4 bgcolor=#EEEEEE>
    <table width=100%>
        <tr>
    	    <td width = 200 align = left height = 100>
    	    <div id = "boardComment">
		<? require_once('./comment.php')?>
    	    </div></td>
        </tr>
    </table>
    </td>
</tr>
<!-- 기타 버튼 들 -->
<tr>
    <td colspan=4 bgcolor=#999999>
    <table width=100%>
        <tr>
            <td width=200 align=left height=20>
                <a href=list.php?no=<?=$no?>&field=<?=$field?>&search_word=<?=$search_word?>><font color=white>
                [목록보기]</font></a>
                <a href=write.php><font color=white>
                [글쓰기]</font></a>
                <a href=preupdat.php?id=<?=$id?>&no=<?=$no?>&field=<?=$field?>&search_word=<?=$search_word?>><font color=white>
                [수정]</font></a>
                <a href=predel.php?id=<?=$id?>>
                <font color=white>[삭제]</font></a>
            </td>
            <!-- 기타 버튼 끝 -->
            <!-- 이전 다음 표시 -->
            <td align=right>
<?
   
    $query=mysql_query("SELECT id FROM pickup_item WHERE id >$id LIMIT 1", 
    $conn);
    $prev_id=mysql_fetch_array($query);

    if ($prev_id["id"]) // 이전 글이 있을 경우
    {
        echo "<a href=read.php?id=$prev_id[id]&no=$no>
        <font color=white>[이전]</font></a>";
    }
    else
    {
        echo "[이전]";
    }

    //내림차순으로 정렬하고 작은 것 한개 가져옴
    $query=mysql_query("SELECT id FROM pickup_item WHERE id <$id 
    ORDER BY id DESC LIMIT 1", $conn);
    $next_id=mysql_fetch_array($query);

    if ($next_id["id"])
    {
        echo "<a href=read.php?id=$next_id[id]&no=$no>
        <font color=white>[다음]</font></a>";
    }
    else
    {
        echo "[다음]";
    }
?>
            </td>
        </tr>
    </table>
    </b></font>
    </td>
</tr>
</table>
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
<embed height="300" width="90%" src="http://www.gagalive.kr/livechat1.swf?chatroom=sejong_pickupandfound"></embed>
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
