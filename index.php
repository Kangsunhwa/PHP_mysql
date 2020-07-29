<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
        text-align : center;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
      h3 {
	text-align : right;
      }
      #table_title{
	height:30px;
	background-color:#eeeeee;
      }
</style>
</head>
<body>
	<h1>'2020년 8월' 상영 뮤지컬 리스트</h1>
	<h3> 이번 달 특가 이벤트 <button type="button" onclick="location.href='http://ihyhnoobnust4839986.cdn.ntruss.com/main.html' ">확인</button></h3>
	<table>
		<thead>
			<tr id="table_title">
			<th>제목</th>
			<th>날짜</th>
			<th>가격</th>
			<th>장소</th>
			</tr>
		</thead>
		<tbody>
		<?php
    			header("Content-Type:text/html; charset=UTF-8");
    			$host = 'db-4j7to.cdb.ntruss.com';
    			$user = 'sunhwa';
    			$pw = 'tg26626121!';
    			$dbName = 'info_table';

    			$conn = new mysqli($host, $user, $pw, $dbName);

    			mysqli_query($conn,"set names utf8;"); 
    			mysqli_query($conn,"set session character_set_connection=utf8;");
    			mysqli_query($conn,"set session character_set_results=utf8;");
    			mysqli_query($conn,"set session character_set_client=utf8;");
    			$query = 'SELECT * FROM movie';
    			$result = mysqli_query($conn, $query);

    			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        			echo '<tr><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['price'].'</td><td>'.$row['space'].'</td></tr>';
    			}
    		if($conn->connect_error){
			printf("Connect failed:%s\n",$conn->connect_error);
		exit();
    		}
		?>
		</tbody>
	</table>
</body>
</html>
