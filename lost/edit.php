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
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<?
    include "db_info.php";
    $id = $_GET["id"];
    $passwd = $_POST["passwd"];
    $result=mysql_query("SELECT passwd FROM lost_item WHERE id=$id",$conn);
    $row=mysql_fetch_array($result);
    if ($passwd==$row["passwd"] )//비밀번호 맞는지 확인함.
    {

?>
<form action=update.php?id=<?=$_GET["id"]?>&no=<?=$_GET["no"]?>&field=<?=$_GET["field"]?>&search_word=<?=$_GET["search_word"]?> method=post>
<table width=700 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
    <tr>
        <td height=20 align=center bgcolor=#999999>
            <font color=white><B>글 수 정 하 기</B></font>
        </td>
    </tr>
<?
    //데이터 베이스 연결하기

   //$no = $_GET["no"];

    // 먼저 쓴 글의 정보를 가져온다.
    $result=mysql_query("SELECT * FROM lost_item WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);
    $test="teest"
?>
<!-- 입력 부분 -->
    <!-- 입력 부분 -->
<font size=2>
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td width=50 align=center >제 목</td>
                <td align=left>
                    <INPUT type=text name=title size=15 maxlength=35 value=<?=$row["title"]?>>
		     
		     
                </td>
            </tr>
            <tr>
                <td width=80 align=center >글쓴이</td>
                <td colspan=3 align=left>
                    <INPUT type="text" name='user' size=15 maxlength=10 value=<?=$row["user"]?>>
		</td>
            </tr>
	    <tr>
		<td width=60 align=center>전화번호</td>
		<td align=left>
		    <INPUT type=text name=tell size=15 maxlength=15 value=<?=$row["tell"]?>>
          	</td>
		<td width=60 align=center> 분실물타입</td>
		<td align=left>
		    <INPUT type=text name=type size=15 maxlength=25 value=<?=$row["type"]?>>
		</td>
            </tr>

	    <tr>
	        <td width=60 align=center >분실물명</td>
                <td align=left >
                    <INPUT type=text name=item size=15 maxlength=25 value=<?=$row["item"]?>>
                </td>
		<td width=60 align=left>분실 장소</td>
		<td align=left>
		    <INPUT type=text name=lwhere size=15 maxlength=15 value=<?=$row["lwhere"]?>>
		</td>
	    </tr>
	    <tr>	
 		<td width=60 align= center>분실날짜</td>
		<td align=left>
		    <INPUT type=text name=lwhen size=15 maxlength=20 value=<?=$row["lwhen"]?>>
		</td>
	    </tr>
 	   
                <td width=60 align=center >내용</td>
                <td colspan=3>  <TEXTAREA name=comment cols=65 rows=15><?=$row["comment"]?></TEXTAREA></td>           
            <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="글 저장하기">
                    &nbsp;&nbsp;
                    <INPUT type=reset value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type=button value="되돌아가기" 
                    onclick="history.back(-1)">
                </td>
            </tr>
            </TABLE>
        </td>
    </tr>
<!-- 입력 부분 끝 -->
</table>
</form>
<?
    }//if문
    else
    {
	echo ("
	<script>
	alert('비밀번호가 틀립니다.');history.go(-1);
	</script>");
	exit;
    }
?>
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
<embed height="300" width="90%" src="http://www.gagalive.kr/livechat1.swf?chatroom=sejong_lostandfound"></embed>
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
