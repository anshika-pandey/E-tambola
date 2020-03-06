<?php
session_start();
require_once('config.php');
if(!isset($_SESSION['roll']))
{
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#logoutLblPos{

position:fixed;
right:10px;
top:5px;
}
#myTable {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  border: solid;
  border-top-color:#ffbc00;
  border-right-color:#ffbc00;
            border-bottom-color:#ffbc00;
            border-left-color:#ffbc00;
  width: 10%;
}
  
table#myTable {
  /* background-color:#ffbc00; */
    width:70%; 
	
    
  }

#myTable td, #myTable th {
  border: 2px solid #ddd;
  padding: 8px;
  border-top-color:#ffbc00;
  border-right-color:#ffbc00;
            border-bottom-color:#ffbc00;
            border-left-color:#ffbc00;
}



#myTable td:hover {background-color: #ddd;}

#myTable td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 
  
}
#ques,#score{
	color: black;
	font-size: 40px;
	text-align: center;
}


</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta charset="UTF-8">
	<title>Tambola</title>
  <meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/style1.css">
	
</head>
<style>
table, th, td {
  border: 1px solid black;
}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome-all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/swiper.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</style>
</head>
<body >

<!-- <div style="background-image: url('images/tamb.jpg') ; height=100%"width =100%> -->

<div class="logout text-right">
			Hi, <?php echo $_SESSION['name'].' '.$_SESSION['roll']; ?><a href="logout.php" class="px-3">Logout</a>
		</div><br>
    
    <div id="qid"  >qid</div>
<p id="ques" style="color:white">QUESTIONS WILL COME HERE!!!</p><br> 
<p id="score" style="color:white">YOUR SCORE WILL DISPLAY HERE!!!</p>
<br>



<table id="myTable" style="width:70%"  align="center"  >
<!-- <div class="table-wrapper"><table cellpadding="5" cellspacing="10" class="table-borderless"> -->




  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)> </td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>
  </tr>
  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>

	<td onclick=clicked(this)></td>
	
  </tr>
  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)> </td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>
  </tr>
  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)> </td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>
  </tr>
  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>
  </tr>
  <tr>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
    <td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
	<td onclick=clicked(this)></td>
  <td onclick=clicked(this)></td>
  </tr>
</table>

<script>

    $("table tr td").click(function() {
        $(this).css("background", "#858481");
		this.setclass
    });
</script>
<br><br>

<div class="mt-4 d-flex justify-content-center flex-wrap" style="text-align:center">
<button class="btn btn-primary m-2"  onclick=claim()>claim</button>
<button class="btn btn-primary m-2" onclick=myFunction()>answers</button>
  </div>
<script>
var score=0;



 clicked.clicked_count=0;
 function claim()
 {
    var resp=prompt("Do you really want to claim your ticket!!(say yes or no)"); 
    if(resp=="yes"){ 
     var sco=document.getElementById("score").innerHTML;
     sco=sco.substring(7,);
     
      $.ajax({
                type: "post",
                url: "claimed.php",
                data: {data:sco },
                success: function (result) {
                  alert(result);
                  
                }
            });
            location.replace("login.php");

  } 
}




function clicked(tablecell)
{

  clicked.clicked_count++;
	$(tablecell).css("pointer-events", "none");
	var s=tablecell.innerHTML;
	var clicked_count=clicked_count+1;
	var z=document.getElementById("qid").innerHTML;
  /* alert(z); */
	/* z=z.substring(5,7); */
	var sc=document.getElementById("score");
if(clicked.clicked_count<=25){
  
$.ajax({
                type: "post",
                url: "setans.php",
                data: { q: z, a: s,sco:score },
                success: function (result) {
                  /* alert(result); */
				          	score=result;
                    sc.innerHTML="Score: "+ result;
                }
            });
}
else
{
  var x=document.getElementById("ques");
  ques.innerHTML="GAME OVER!!!";
  $(myTable).css("pointer-events", "none");
}
}

var i=1;
document.getElementById("qid").style.visibility = "hidden";
$.ajax({
                type: "post",
                url: "generate_question.php",
                data: { data:"start" },
                success: function (result) {
                  /* alert(result); */
                  if(result=="yes")
                  {

                    setInterval(() => {
	if(i<=99){
    if(i<=9)
    {
      var s="0"+i;
      //alert(s);
      $.ajax({
                type: "post",
                url: "setques.php",
                data: {data : s},
                success: function (result) {
                  /* alert(result); */
                  /* alert(result); */
                  result=result.replace(/(\r\n|\n|\r)/g,"");	
                        var pa=document.getElementById("ques");
                        var qid=document.getElementById("qid");
                        /* qid.innerHTML="Ques"+*/
                        /* alert(qid); */
                       var q=result.substr(0,2); 
                       /* alert(q); */
                       qid.innerHTML=q;
                        var str=result.substring(2,);
						pa.innerHTML=str.replace(/(\r\n|\n|\r)/g,"");	
            /* alert(str); */
                }
            });
    }
    else if(i<=99){
	$.ajax({
                type: "post",
                url: "setques.php",
                data: {data : i},
                success: function (result) {
                  result=result.replace(/(\r\n|\n|\r)/g,"");	
                        var pa=document.getElementById("ques");
                        var qid=document.getElementById("qid");
                        var q=result.substr(0,2); 
                        qid.innerHTML=q;
                        /* qid.innerHTML="Ques"+*/
                       
                       /* alert(q); */
                        var str=result.substring(2,);
						pa.innerHTML=str.replace(/(\r\n|\n|\r)/g,"");	
                }
            });
          }

          i=i+1;
          }
          else
          {
            alert("time up");
          }
}, 20000,i)


 
                  }
                }
            });

myFunction.clicked=0;
function myFunction(){
	myFunction.clicked++;
	if(myFunction.clicked==1){
    var arr = [];
    while(arr.length < 25){
	var xhttp; 
  

    

    var r = Math.floor(Math.random() * 99) + 1;
    if(arr.indexOf(r) === -1) 
    {arr.push(r);

// console.log(arr);


  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		var htmlString=this.responseText.replace(/(\r\n|\n|\r)/g,"");
		//alert(htmlstring);
		var i=Math.floor(Math.random() * 6) ;
		var j=Math.floor(Math.random() * 7) ;
		var x=document.getElementById("myTable"); 
		if(x.rows[i].cells[j].innerHTML=="")
		x.rows[i].cells[j].innerHTML=htmlString;
		else
		{
      i=0;
      j=0;
			while(x.rows[i].cells[j].innerHTML!="")
			{
				 j=j+1;
				if(j>6)
				{
          i=i+1;
          j=0;
					if(i>5){
           i=0;
           j=0;
        }
         
       }
			}
			x.rows[i].cells[j].innerHTML=htmlString;
		}
    } 
	
  };
  xhttp.open("GET", "test1.php?r="+r, true);
  xhttp.send();
    }
}

}}
</script>
<!-- </div> -->
</body>
</html>