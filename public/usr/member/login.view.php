<?php
$pageTitle = "로그인";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<style>

.login-section{
 
  height: 800px;
  margin-left:auto;
  margin-right:auto;
  margin-top:40px;
}

    .input-box{
    margin-top:10px;
    text-align:center;
    border-radius: 0;
    border: none;
    padding:5px 0px;
    cursor: pointer;
    }
    .input{
      width:20%;
      font-size:25px;
      padding:15px; 
      
    }
    .logo{
      text-align:center;
      font-size:3rem;
      font-weight:bold;
    }
    .etc{
      margin-top:10px;
      margin-left:43%;
      display:inline-block;
      
    }
</style>
<div class="logo">
    <span>로고</span>

</div>
<section class="login-section">

<form action="doLogin.php" class>
  <div class="input-box">
    
    <input required placeholder="아이디" type="text" name="loginId" class="input"> 
  </div>
  <div  class="input-box" >
    
    <input required placeholder="비밀번호" type="password" name="loginPw"class="input"> 
  </div>
  <div  class="input-box">
  <input type="submit" value="로그인" class="input">
  </div>
</form>
<div class="etc">
    <span><a href="#">아이디 찾기</a></span>
    |
    <span><a href="#">비밀번호 찾기</a></span>
    |
    <span><a href="#">회원가입</a></span>
</div>

</section>
<?php require_once __DIR__ . "/../foot.php"; ?>