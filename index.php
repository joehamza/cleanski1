
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>إستقبال</title>
<link rel="icon" href="im/systran  3D.ico" >
<script type="text/javascript">
    //<!--
       document.oncontextmenu = new Function("return false");
    //-->
    </script>
	<?php
	include 'compo.php';
	?>
<style>
body{
background-color:#CCCC99;
}
.p2{font-size:20px;color:#fff;animation:an 1s infinite;}
.head{width:100%;background-color:#333;height:90px;border-radius:5px;overflow:hidden;display:flex;justify-content:center;align-items:center;}
.p{font-size:35px;color:#fff;animation:an 1s infinite;}
@keyframes an{
0% {
color:#999;}
50% {color:#ccc;}
100%{color:#999;}
}
.s{font-size:30px;color:blue;}
.h{align-items:center;justify-content:center;display:flex;}
.aaa{
position:absolute;
background-color:#9999FF;
width:0px;
height:0px;
margin:auto;
overflow:hidden;
top:110px;

align-items:center;justify-content:center;display:flex;
transition:transform 0.5s 0.7s ,width 1.3s 0.7s,height 0.5s 0.2s,border-radius 0.5s 1.3s; }
/*transition:transform 0.5s 0.7s ,width 0.5s 0.4s,height 0.5s 0.2s;}*/

.txt{
color:#fff;
font-size:35px;
transform:translateX(1000px);}

.text2{
transition:transform 0.5s 1.5s;
transform:translateX(0);
}
</style>
<div class="h">
<div class="aaa"><em class="txt">cleanski skikda</em></div></div>
<br><br><br><br><br><br><br><br><br>
<center>
  <div class="head"><div class="p"><em>الجمهورية الجزائرية الديمقراطية الشعبية<br><div class="p2">REPUBLIQUE ALGERIENNE DEMOCRATIQUE POPULAIRE</div></em></div></div>
<marquee direction="up" height="300" >
  <center><div class="s"> المؤسسة العمومية الولائية<br><br>لتسيير مراكز الردم التقني لولاية سكيكدة<br><br><br><font style="color:#0066FF;">*صفحة إستقبال*</font><br><br><br><br><br><br><br><br>Entreprise Publique  de wilaya<br><br>Gestion Des Centres D'enfouissements Technique<br><br>De La Wilaya De Skikda<br><br><br><font style="color:#0066FF;">*Page d'accueil*</font></div></center>
</marquee>
<center><div style="width:100%;background:#bbb;"><h3>Développé par: beldjehem hamza</h3></div></center>
<script>
var aa=document.querySelector(".aaa");
var tx=document.querySelector(".txt");
window.addEventListener("contextmenu",f);
function f(e){
e.preventDefault();
}
window.addEventListener('load',f2);
function f2(){
    aa.style.transform="rotate(720deg)";
    aa.style.width="300px";
	aa.style.height="80px";
	aa.style.borderRadius="100px";
tx.classList.add("text2");
setTimeout(()=>{
	aa.style.transform="rotate(0deg)";
         aa.style.width="0px";
         aa.style.height="0px";
		aa.style.borderRadius="0px";	 
tx.classList.remove("text2");
    }, 5500);
    
	setTimeout("f2()",10500);
}
</script>
</html>
