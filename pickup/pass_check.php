<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<title>글 수정</title>
<STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
 
<script language="javascript">
 
function check_submit() {
        
        if (document.myForm.password.value == "") {
                alert('비밀번호를 입력해야 글을 삭제할 수 있습니다.');
                document.myForm.password.focus();
                return;
                
        } else {
                document.myForm.action = "edit.php";
                document.myForm.submit();
        }
        
}
 
</script>
 
 
</head>
 
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<form name="myForm" method="post">
<input type="hidden" name="page" value="<? echo $page; ?>">
<input type="hidden" name="number" value="<? echo $number; ?>">
 
<table align="center" border="1" cellspacing="0" width="200" bordercolordark="white" bordercolorlight="#CCCCCC">
    <tr>
        <td>
            <p align="center">글 수정 비밀번호</p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <input type="password" name="passwd" maxlength="12" size="12">
        </td>
    </tr>
</table>
 
<p align="center">[<a href="javascript:check_submit();">수정</a>] [<a href="javascript:history.go(-1)">취소</a>]</p>
</form>
</body>
 
</html>
