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
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action='insert.php' method='post'>
<table width=700 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
    <tr>
        <td height=20 align=center bgcolor=#999999>
        <font color=white><B>글 쓰 기</B></font>
        </td>
    </tr>
    <!-- 입력 부분 -->
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td width=50 align=center >제 목</td>
                <td colspan=3 align=left>
                    <INPUT type=text name=title size=15 maxlength=35>
		     
		     
                </td>
            </tr>
            <tr>
                <td width=80 align=center >글쓴이</td>
                <td align=left >
                    <INPUT type="text" name='user' size=15 maxlength=10>
		</td>
		<td width =60 align=center>비밀 번호</td>
		<td align=left>  
		    <INPUT type=password name=passwd size=15 maxlength=8>
			<br>
			<br>
			(수정,삭제시 반드시 필요)
		</td>
            </tr>
	    <tr>
		<td width=60 align=center> 습득물</td>
		<td colspan=3 align=left>
		    <INPUT type=text name=type size=15 maxlength=25>
		</td>
            </tr>

	    <tr>
	        <td width=60 align=center >종류</td>
                <td align=left >
                    <INPUT type=text name=item size=15 maxlength=25>
                </td>
		<td width=60 align=left>습득 장소</td>
		<td align=left>
		    <INPUT type=text name=pwhere size=15 maxlength=15>
		</td>
	    </tr>
	    <tr>	
 		<td width=60 align= center>습득일시</td>
		<td align=left>
		    <INPUT type=text name=pwhen size=15 maxlength=20>
		</td>
	    </tr>
	    <tr>
 	   
                <td width=60 valign=top align=center >내용</td>
                <td colspan=3>  <TEXTAREA name=comment cols=65 rows=15></TEXTAREA></td>
           
	    </tr>
	    <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="글 저장하기">
                    &nbsp;&nbsp;
                    <INPUT type=reset value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type=button value="되돌아가기" 
                    onclick="history.back(-1)"> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
                </td>
            </tr>
        </TABLE>
</td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
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
