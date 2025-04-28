
<?php


     session_set_cookie_params(0);
session_start();
if(isset($_SESSION['login'])) { 



echo ""; 



$login= $_SESSION['login'];
  }
  else { 
session_destroy();
	echo "<script>document.location.href='index.php';</script>";
}



ini_set('display_errors', 1);
error_reporting(E_ALL);  /* 'экран ошибок */ 
?>


    <?php
    
  

 
  
  include 'conn.php';


 ?>
     

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="css/lok1.css" type="text/css" rel="stylesheet"/>
    <link href="css/baza_modal.css" type="text/css" rel="stylesheet"/>

</head>
    
<style>






.hide_block2 {
  overflow: hidden;

  width: 200px;
  height: 0px;
  animation: showDiv  <?php echo $lok_tame ?> forwards;
}
@keyframes showDiv {
  0%, 99% {
    height: 0px;
  }
  100% {
    height: 120px;
  }
}








  
          	<?php
 if ($pag == 3) {
?>
.fogg {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 400px;
    overflow: hidden;
    background: url("background.jpg") center center;  
    background-size: cover;
}
.fogg::before,
.fogg::after,
.fogg div::before, 
.fogg div::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: repeat-x;
}
.fogg div::before, 
.fogg div::after    {
    left: 100%;
}
.fogg::before, 
.fogg div::before {
    background-image: url("game/fog-1.png");
    animation: fogmove 20s linear 0s infinite;
}
.fogg::after, 
.fogg div::after {
    background-image: url("game/fog-2.png");
    animation: fogmove 10s linear 0s infinite;
}
@keyframes fogmove {
    from {
        transform: translate3d(0, 0, 0);
    }
    to {
        transform: translate3d(-100%, 0, 0);
    }
}

<?php
}
?>
    
    
    
<?php
 if ($pag == 1) {
?>
.rain {

	 position: fixed;
	 width: 1px;
	 height: 5px; 
	top:125px;
	background-color: #7F7F7F;

	animation: rain 1.5s linear 100;
	z-index: 1;
	border-radius: 10px;
}

@keyframes rain {
	to {
		transform: translate3d(200px, 700px, 0); /* Первое значение (200px) это направление дождя, где: 0 - вниз, положительное число - вправо, отрицательное - влево */
	}
}
<?php
}
?>
    
	
#square {


  margin-left: 40px;
  
  width: 1px;
  height:15px;
  margin: 0 3px 3px 0;
  padding: 2px 2px;
  background: #BB0600;
  border-radius: 80% / 90% 90% 60% 60%;
   
    position:absolute;
    
	transform: scale(.85);	
	-webkit-animation-name: 'pulse','swim';
	-webkit-animation-duration: 1s, 10s;
	-webkit-animation-delay: <?php echo $tame ?>, <?php echo $tam ?>;
	-webkit-animation-timing-function: infinite;
	-webkit-animation-iteration-count: 5, 3;
}



@keyframes pulse {
  from {
	  
    transform: scale(.5);
  }
  50% {
    transform: scale(1);
  }
  to {
	  
    transform: scale(.5);
  }
}



/* Swim Animation */
@keyframes swim {
	
	
  0% {
    transform: translateY(0%) translateX(0%) rotate(10deg);
  }
  10% { 
    transform: translateY(150%) translateX(25%) rotate(20deg);
  }
  
    20% {
    transform: translateY(25%) translateX(10%) rotate(20deg);
  }
  
    30% {
    transform: translateY(16%) translateX(-100%);
  }
  
    40% {
    transform: translateY(100%) translateX(20%);
  }
  
  50% {
    transform: translateY(10%) translateX(-10%);
  }
  75% {
    transform: translateY(50%) translateX(25%) rotate(-20deg);
  }
  100% {
    transform: translateY(0%) translateX(0%) rotate(20deg);
  }
}

    

    


</style>

<body>              
 <div id="container" style="width:1660px;margin:0 auto;">
        
               <div class="mark">
         <embed src="mp3/birds-singing.mp3" autoplay="autoplay" hidden="true" loop="1" width="0" height="0" align="center">
</embed>
       </div>
<div id="fon">
<?php
 if ($pag == 1) {
?>  
<img id="fon" class="img  "src="game/1597136055227.jpg" style="width: 1660px; " />                                           
  
                 
<?php
}
if ($pag == 2) {
?>
                                            
<img id="fon" class="img  "src="game/1597136055227.JPEG" style="width: 1660px; " />
                 
<?php
}
?>
<?php
if ($pag == 3) {
?>
                                            
<img id="fon" class="img  "src="game/1597136055227.JPEG" style="width: 1660px; " />

 
                 
<?php
}
?>

 

   
   


<div id="meny" >
    

    <div class ="na_basy">
        
        <img src="game/na-bazu.png" alt="" style="width: 115px; border-radius: 100px; " class="scale" title="На базу">
        <a class="prodat" href="basa.php" ">
	<div class="earth"><img src="game/ramka.png" alt="" style="width: 135px; border-radius: 100px; " class="scale" title="На базу"></div>	
    </a>
        
    </div>
    



    
<div class="yd1">
       <img id="man" class="img  "src="game/ramka.png" style="width: 120px; " />    
 

<div class="yd1_bd">    <button id="showHideContent" style="opacity: 0.0; z-index:1000;" > <img id="yd1" class="img" style="width: 100px;" src="game/ydo.png" /> </button>  </div>
          <div class="yd1_vnut"></div>
          
           </div>
      <script>


$(document).ready(function(){
    $("#showHideContent").click(function () {
        if ($("#content").is(":hidden")) {
            $("#content").show("slow");
        } else {
            $("#content").hide("slow");
        }
        return false;
    });
});
    
</script>
            <div class="fogg">
    
    
    
    </div>
           
        <div id="content" style="display:none;">   
           
           

	
		
<div class="div3">
	

	
	  <button id="showHideContent2" style="width: 160px; 	z-index:100; position:absolute; top:500px; left:250px;   height:500px; opacity: 0.0;" > </button>
    
    
    <div class="kryg3"></div>
    
  
    <div class="yd1_zak">
	<img src="game/bolon/95491.png" alt="Snow">  </div>
	
	
	
    </div>
    
    
    

<div id="content2" style="">   
<div class ='hide_block2' style=" position:absolute; top:13px; left:310px; 	z-index:100;" name="vit" >
             

     
            
 <div class="modalca">




        <div style="text-align: center;">
			
			
		    <a href="#win5"> <button type="vit" name="vit" style="height: 100px; position:absolute; left:0px; width: 100px; border: 1px solid #5EBE5E; /*цвет рамки*/
   border-radius: 50px;  " value="vit">Вытащить</button> </a>
		     
		</div>

        <a href="#x" class="overlay" id="win5"></a>
        <div class="popup">
           <img id="ava" class="img  "src="game/doska.png" style="width: 600px; " />
           
           
           
           
           
           
           
           
           
           
           
           
           
           
            <div class="dosk">

              
               
                     <div class="hide_block2">
           
           <div class="nazv" style="position:absolute; top:100px; left:200px;"  >
           
 
             <?php echo $nazv_rib?>
             
            </div>
            
           <div class="rib" style="position:absolute; top:180px; left:30px; height: 80px;" >
<img id="rib" class="img  "src="<?php echo $img_rib?>"  />

           </div>
            <div class="ves" style="position:absolute; top:400px; left:200px;"  >
              <?php echo $ves  ?> КГ 
            </div>
           
           
           <form action="" method="post">
     
       <input type="submit" name="ost" style="background-image: url(game/vit.png); width: 95px;" value="оставить" />
        <input type="submit" name="otp" style="background-image: url(game/vit.png); width: 95px;" value="отпустить" />
         
       
     <?php 
     
     
     if (isset($_POST["ost"])) {
     
     
         include 'connekt.php';
         
         
        if (empty($sadok1)) {
   
   $query= "UPDATE `sadok` SET `sadok1`='$img_rib', `name1`='$nazv_rib', `kol_sadok1`='$ves' WHERE login= '$login'";
   
   
   $result = $conn->query ($query); 
    if ($result){ 
    
        
        
        
        echo " <script>document.location.href='lok1.php';</script>";
       exit; 
       }
       }
       
       if (empty($sadok2)) {
   
   $query= "UPDATE `sadok` SET `sadok2`='$img_rib',`name2`='$nazv_rib',`kol_sadok2`='$ves' WHERE login= '$login'";
   $result = $conn->query ($query); 
    if ($result){
    
    
    echo " <script>document.location.href='lok1.php';</script>";
    
       exit; }
       }
       
       
             if (empty($sadok3)) {
   
   $query= "UPDATE `sadok` SET `sadok3`='$img_rib',`name3`='$nazv_rib',`kol_sadok3`='$ves' WHERE login= '$login'";
   $result = $conn->query ($query); 
    if ($result){
    echo " <script>document.location.href='lok1.php';</script>";
       exit; }
       }
       
       
             if (empty($sadok4)) {
   
   $query= "UPDATE `sadok` SET `sadok4`='$img_rib',`name4`='$nazv_rib',`kol_sadok4`='$ves' WHERE login= '$login'";
   $result = $conn->query ($query); 
    if ($result){
    echo " <script>document.location.href='lok1.php';</script>";
       exit; }
       }
       
       
             if (empty($sadok5)) {
   
   $query= "UPDATE `sadok` SET `sadok5`='$img_rib',`name5`='$nazv_rib',`kol_sadok5`='$ves' WHERE login= '$login'";
   $result = $conn->query ($query); 
    if ($result){
    echo " <script>document.location.href='lok1.php';</script>";
       exit; }
       }
       
       
       
       
         }
         
     
     
      if (isset($_POST["otp"])) {
    
        echo " <script>document.location.href='lok1.php';</script>";
    }

     
 
     ?>

 </form></div>
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
          
                <a class="close" title="Закрыть" href="#close"></a>
 </div>
                
                
                
                
            </div>
            
            
            
           
        </div>
        

</div>      
    
<div id="square" style=" position:absolute;left:500px; top:450px;" > 


<script>
	
	
	
	let minMax = [410, 1400]



window.addEventListener('click', go);

function go(event) {

  let x = event.clientX
  let y = event.clientY
  let isOkX = minMax[0] < x && x < minMax[1]
  let isOkY = minMax[0] < y && y < minMax[1]
  if (!isOkX || !isOkY) return;

  var elem = document.getElementById('square');
  elem.style.left = x + 'px';
  elem.style.top = y + 'px';
 
}
	
	</script>
</div>

    </div>
<script>
 
     
</script>
    </div>
    </div>
     </div>
     

    
    


    <div class="sadok">
     <div class="set">
		    <a href="#win2"><img id="ava" class="img  "src="game/sadok.png" style="width: 100px; left:100px;   position:absolute;" /></a>
		</div>

        <!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win2"></a>
        <div class="popup">
           <img id="sa1" class="img  "src="game/sadok_mod.png" style="width: 600px; " />
           <div class="rib_sad1">
               <div class="fon_sa1"></div>
                <div class="sa1">
                    <img id="sa1" class="img  "src="<?php echo $sadok1?>" style="width: 80px;"/>
                </div>
                 <div class="kol_sa1"> <?php echo $kol_sadok1 ?> </div>
            </div>
           <div class="rib_sad2">
            <div class="fon_sa2"></div>
                <div class="sa2">
                    <img id="sa2" class="img  "src="<?php echo $sadok2?>" style="width: 80px;"/>
                </div>
                 <div class="kol_sa2"> <?php echo $kol_sadok2?> </div>
           </div>
           <div class="rib_sad3">
               <div class="fon_sa3"></div>
                <div class="sa3">
                    <img id="sa3" class="img  "src="<?php echo $sadok3?>" style="width: 80px;"/>
                </div>
                 <div class="kol_sa3"> <?php echo $kol_sadok3?> </div>
           </div>
           <div class="rib_sad4">
               <div class="fon_sa4"></div>
                <div class="sa4">
                    <img id="sa4" class="img  "src="<?php echo $sadok4?>" style="width: 80px; top:110px; left:-55px;  position:absolute;"/>
                </div>
                 <div class="kol_sa4"> <?php echo $kol_sadok4?> </div>
           </div>
           <div class="rib_sad5">
               <div class="fon_sa5"></div>
                <div class="sa5">
                    <img id="sa5" class="img  "src="<?php echo $sadok5?>" style="width: 80px; width: 80px; top:10px; left:-55px;  position:absolute; "/>
                </div>
                 <div class="kol_sa5"> <?php echo $kol_sadok5?> </div>
           </div>
           
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
            
</div>
       <?php
 if ($pag == 1) {
?>
<script>

	function random(min, max) {
	
		var rand = min + Math.random() * (max + 1 - min);
		rand = Math.floor(rand);
		
		return rand;
		
	}

	for (var i=0; i<200; i++) {
	
		document.getElementsByTagName('body')[0].innerHTML += '<i class="rain" style="left: '+random(-2000, 2000)+'px;transform: translate3d(0, 0, 0);animation-delay: '+(0.01 * i)+'s"></i>';
	
	}
	
</script>
<?php
}
?>

    

     
     
     
       


     
       </div>
       </div>
       </div>
   
</body>

</html>



    <?php
  
 
 $conn->close();
 ?>

 


