<?php
$pageTitle = "게시물 리스트";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<style>
  body, ul, li {
  margin:0;
  padding:0;
  list-style:none;
  color:black;
}

a {
  color:black;
  text-decoration:none;
}
.contents{
  text-align:center;

}
.list-contents{
  display:inline-block;
}
.contents {
    position: relative;
    width: 1280px;
    margin: 0 auto;
    padding: 0 0 120px;
}
.title{
    position: relative;
    max-width: 1280px;
    margin: 0 auto;
    padding-top: 63px;
    margin-bottom: 76px;
    text-align: center;
}
.board-list{
  border-top: 2px solid #222;
}
.board-list table {
    table-layout: fixed;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
}
.board-list td {
    height: 50px;
    line-height: 19px;
    padding: 5px;
    vertical-align: middle;
    border-bottom: 1px solid #e1e1e1;
    text-align: center;
    word-break: normal;
    font-size: 17px;
}
.board-list thead th {
    line-height: 17px;
    height: 52px;
    padding: 0px 5px;
    vertical-align: middle;
    font-family: 'NotoKrM';
    font-size: 18px;
    border-bottom: 1px solid #e1e1e1;
    color: #222;
    background: #eee;
    word-break: normal;
}
.tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
    
}
.tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
.thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}
.th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
.num{
  width:10%;
}
.regdate{
  width:15%;
}
.hit{
  width:10%;
}
.title{
  width:65%;
}
#dBody h2.titleWrap {
    position: relative;
    font-size: 42px;
    color: #222;
    font-family: 'NotoKrB';
}
.board-search {
    margin-bottom: 16px;
    text-align: right;
    font-size: 0;
    
}

.board_search select {
    position: relative;
    width: 200px ;
}
select { 
    height: 40px;
    padding-left: 25px;
    border: 1px solid #c2c2c2;
    font-size: 15px;
    background: url(../images/ico_select.png) no-repeat right 50% #fff;
    background-size: contain;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    margin-right:5px;
}
input{
     
    height: 40px;
    padding: 0 10px;
    font-size: 15px;
    border: 1px solid #c2c2c2;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.write{
  margin-left:90%;
  margin-top:10px;
  display:block;
}
}
</style>

<hr>
<section class="contents">
<div class = "title">
<h2 class="titleWrap">자유게시판</h2>
<p>자유롭게 대화하세요</p>
</div>
<div class="board-search">
<form>
  <select>
    <option value=1>공지</option>
    <option value=2>자유</option>
    <option value=3>이벤트</option>
  </select>
  <span class="keyword">
  
  <input type="text" name="search"placeholder="검색어를 입력하세요"></input>
  </span>
</form>
</div>


  <div class="board-list">
  <table>
  <thead>
  <tr>
      <th scope="col" class="num">구분</th>
      <th scope="col" class="title">제목</th>
      <th scope="col" class="regdate">등록일</th>
      <th scope="col"class="hit">조회수</th>
  </tr>
  </thead>
  <tbody>
  
  <?php foreach ( $articles as $article ) { ?>
    <tr>
    <?php
    $detailUri = "detail.php?id=${article['id']}";
    ?>
    <td class="num"><span><a href="<?=$detailUri?>"><?=$article['id']?></a></span></td>
    <td><a href="<?=$detailUri?>"><?=$article['title']?></a></td>
    <td class="regdate"><?=$article['regDate']?></td>
    <td class="hit">1</td>    
    </tr>  
  <?php } ?>
  
  </tbody>
  </table>
</div>
<div class="write">
  <button a href="write.php">글 작성</button>
</div>
</section>
<?php require_once __DIR__ . "/../foot.php"; ?>
