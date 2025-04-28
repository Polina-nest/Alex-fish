

<?php


     session_set_cookie_params(1);
       
session_start();

if(isset($_SESSION['login'])) { 

echo ""; 

				
                               $login = $_SESSION['login'];
  }
  else { 
session_destroy();
	echo "<script>document.location.href='index.php';</script>";
}


ini_set('display_errors', 0);
error_reporting(E_ALL);  /* 'экран ошибок */ 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
<link href="css/baza_modal.css" type="text/css" rel="stylesheet"/>
<link href="css/baza.css" type="text/css" rel="stylesheet"/>
<link href="css/baza2.css" type="text/css" rel="stylesheet"/>
<link href="css/krug.css" type="text/css" rel="stylesheet"/>
</head>

<body>
     
    	<div id="container" style="width:1660px;margin:0 auto;">
               <div class="mark">
         <embed src="mp3/birds-singing.mp3" autoplay="autoplay" hidden="true" loop="1" width="0" height="0" align="center">
</embed>
       </div>
<div id="fon">
<img id="samolet" class="img  "src="game/maxresdefault.jpg" style="width: 1660px;" />
<div id="meny">
    
    <?php
    
      include 'conn.php';


 
    
    

  

 ?>
	<div class="obloshka"></div>
	
        <div class="man">
           <?php echo $mani?>
            <img id="man" class="img  "src="game/mani.png" style="width: 30px; " />
           
	</div>
	<div class="uroven">
	<div class="nam">
	<?php echo $name?>
	</div>
	<div class="yroven">
		<div class="str"></div>
                <div class="cifr"><div class="c"> <?php echo $lvl?></div>
		</div>
	</div></div>
        
        
        <div class="karta">
            
           <div class="dropdown"><div class="tilt pac">
  <button1 class="dropbtn"><img id="karta" class="img  "src="game/karta.png" /></button1></div>
  <div class="dropdown-content">
    <a href="basa.php">Сосенки</a>
    <a href="#">Еще что-то</a>
    <a href="#">И еще что-то</a>
  </div>
</div>            
        </div>
             <div class="n">
            
            <div class="nastr">

      
		    <a href="#win1"> <div class="invert psc"> <img id="ava" class="img  "src="game/nastroiki.png" style="width: 100px; " /> </div> </a>
		</div>

        <!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win1"></a>
        <div class="popup">
           <img id="ava" class="img  "src="game/background-tree-wood-boards.jpg" style="width: 600px; " />
           <div class="invent">
           <P>Личный кабинет</P>
          </div>
   <div class="avalk">
      <?php  
              
            
      
      $sth = $conn->query($sql);
$result=mysqli_fetch_array($sth);
echo '<div class="ava"><div class="grow pic"><img src="data:ava/jpeg;base64,'.base64_encode( $result['ava'] ).'"/></div>
	</div>';?>
             
               
           </div>
           <div class="namelk">
               Имя: <?php echo $name?>
           </div> 
               <div class="emaillk">
                   Логин: <?php echo $login?>
           </div>
           <div class="tellk">
               Телефон: <?php echo $tel?>
           </div>
          
           <div class="yrlk">
               Индивидуальный номер: <?php echo $id?>
           </div>
           
           <div class="izm">
               
               		    <a href="#win4" class="button2"/>Изменить</a>
           </div>
               
          
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
            
        
</div>
        <a href="#x" class="overlay" id="win4"></a>
        
        <div class="popup">
           <img id="ava" class="img  "src="game/background-tree-wood-boards.jpg" style="width: 600px; " />
                    
           <div class="izmlk">
               Изменить мои данные
           </div>
           <div class="form_izm">
              <form class="decor" action="" method="post">
                  <div class="fo-inner">
<input type="text" name="name" style="width: 250px; "  placeholder="<?php echo $name?>">
    <input type="submit" style="width: 110px;" value="Изменить">
        
<?php
    
if($_REQUEST['name'] != null){
    $name = $_POST ['name'];
   $result = $conn->query("SELECT * FROM user WHERE login = '$login'  ");
   
   $query= "UPDATE `fishing`.`user` SET `name`='$name' WHERE login= '$login'";
   $result = $conn->query ($query); 
   if ($result){ 
       echo " <script>document.location.href='basa.php';</script>";
}else{ 
echo "Данные не обновлены!"; 
} 
   }
?>
        
        </div></form>



<form class="decor" action="" method="post">
                  <div class="fo-inner">
<input type="email" name="email" style="width: 250px; "  placeholder="<?php echo $login?>"> <input type="submit" style="width: 110px;" value="Изменить">
        <?php
    
if($_REQUEST['email'] != null){
    $email = $_POST ['email'];
   $result = $conn->query("SELECT * FROM user WHERE login = '$login'  ");
   
   $query= "UPDATE `fishing`.`user` SET `login`='$email' WHERE login= '$login'";
   $result = $conn->query ($query); 
   if ($result){
       echo "<script>document.location.href='index.php';</script>";
}else{ 
echo "Данные не обновлены!"; 
} 
   }
?>
        
        
        </div></form>



<form class="decor" action="" method="post">
                  <div class="fo-inner">
<input type="tel" name="tel" style="width: 250px; "  placeholder="<?php echo $tel?>">
    <input type="submit" style="width: 110px;" value="Изменить">
        
                <?php
    
if($_REQUEST['tel'] != null){
    $tel = $_POST ['tel'];
   $result = $conn->query("SELECT * FROM user WHERE login = '$login'  ");
   
   $query= "UPDATE `fishing`.`user` SET `tel`='$tel' WHERE login= '$login'";
   $result = $conn->query ($query); 
   if ($result){
   echo " <script>document.location.href='basa.php';</script>";
}else{ 
echo "Данные не обновлены!"; 
} 
   }
?>  </div></form>
        <div class="izm_pass">
        <a href="#win6" class="button1"/>Изменить пароль</a></div>
         <div class="izm2">
           <div class="izm_photo">
              <form method="post" enctype="multipart/form-data">
                  
<input type="file" name="image"/>
<input type="submit" name="submit" class="button1" value="Изменить фото"/>

    
<?php
    if(isset($_POST['submit']))
    {
     if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        echo " error ";
     }
     else
     {
        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        saveimage($image);
     }
    }
    function saveimage($image)
    {
 include 'connekt.php';
         
if ($conn->connect_error) { 
   printf(" ошибка подключения, код ошибки $conn->connect_error "); 
   exit; 
}
        $query = "UPDATE `fishing`.`user` SET `ava`='$image' WHERE `login`='Nestpolina02@gmail.com'";  //image - blob

       $qry = mysqli_query($conn, $query);
       $result = $conn->query ($query); 
        if($result)
        {
            
            
          echo " <script>document.location.href='basa.php';</script>";
        
           
        
        }
        else
        {
            echo " error ";
        }
    }
?>

</form> 
        </div> </div>
        
   

	</div>
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
        
        
        
         <a href="#x" class="overlay" id="win6"></a>
        <div class="popup">
           <img id="ava" class="img  "src="game/background-tree-wood-boards.jpg" style="width: 600px; " />
           <div class="st_pass">
               
               <form class="decor" action="" method="post">
                  <div class="fo-inner">
<input type="password" name="pass" style="width: 250px; "  placeholder="Введите старый пароль" required >
    <input type="password" name="passn" style="width: 250px; "  placeholder="Введите новый пароль" required >
    </input><input type="submit" style="width: 110px;" value="Изменить">
           </div>
                   
                            <?php
    
if($_REQUEST['passn'] != null){
    $pass = $_POST ['pass'];
     $passn = $_POST ['passn'];
     
   $result = $conn->query("SELECT * FROM user WHERE login = '$login'  ");

    if($result->num_rows == 1) {
        
       $result = $conn->query("SELECT * FROM user WHERE password = '$pass'  ");
       
      if($result->num_rows == 0) {
        
          echo '<h1>Извините, введен не верный пароль</h1>';
    }
    else {
 $query= "UPDATE `fishing`.`user` SET `password`='$passn' WHERE login = '$login'"; 
    
  $result = $conn->query ($query); 

if ($result){ 
       
 echo "<script>document.location.href='index.php';</script>";
}else{ 
echo "Данные не обновлены!"; 
} 
 }
}}
   
?>   </div></form>
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
            
         
         
         
        
            <div class="mag">
        <div class="knop">
        </div>
        <a href="mag_c_menu.php" class="btn"></a>


   <div class="teg">
    Mагазин
        </div>
     
</div>


         

            
<div class="rykzak">

 <div class="modalca">


        <div style="text-align: center;">
		    <a href="#win5"><img id="ava" class="img  "src="game/rykzak.png" style="width: 150px; " /></a>
		</div>

        <!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win5"></a>
        <div class="popup">
           <img id="ava" class="img  "src="game/rukzak_otkr.png" style="width: 600px; " />
           <div class="invent">
           <P>В рюкзаке</P>
           </div>
            <div class="in">
                <div class="pole1">
                <div class="fon_per"></div>
                <div class="per">
                    <img id="ava" class="img  "src="<?php echo $per?>" style="width: 80px; "/>
                </div>
                 <div class="kol_per"> <?php echo $kol_per?> </div>
</div>
                <div class="pole2">
                <div class="fon_vtor"></div>
                <div class="vtor">
                    <img id="vtor" class="img  "src="<?php echo $vtor?>" style="width: 80px;"/>
                </div>
                 <div class="kol_vtor"> <?php echo $kol_vtor?> </div>
</div>
                <div class="pole3">
                <div class="fon_tr"></div>
                <div class="tr">
                    <img id="tr" class="img  "src="<?php echo $tr?>" style="width: 80px;"/>
                </div>
                 <div class="kol_tr"> <?php echo $kol_tr?> </div>
</div>
                <div class="pole4">
                <div class="fon_chet"></div>
                <div class="chet">
                    <img id="chet" class="img  "src="<?php echo $chet?>" style="width: 80px; "/>
                </div>
                 <div class="kol_chet"> <?php echo $kol_chet?> </div>
</div> 
                <div class="pole5">
                <div class="fon_pat"></div>
                <div class="pat">
                    <img id="pat" class="img  "src="<?php echo $pat?>" style="width: 80px;"/>
                </div>
                 <div class="kol_pat"> <?php echo $kol_pat?> </div>
</div> 
                <div class="pole6">
                <div class="fon_shect"></div>
                <div class="shect">
                    <img id="shect" class="img  "src="<?php echo $shect?>" style="width: 80px;"/>
                </div>
                 <div class="kol_shect"> <?php echo $kol_shect?> </div>
</div> 
                <div class="pole7">
                <div class="fon_sem"></div>
                <div class="sem">
                    <img id="sem" class="img  "src="<?php echo $sem?>" style="width: 80px;"/>
                </div>
                 <div class="kol_sem"> <?php echo $kol_sem?> </div>
</div>
                <div class="pole8">
                <div class="fon_vosem"></div>
                <div class="vosem">
                    <img id="vosem" class="img  "src="<?php echo $vosem?>" style="width: 80px;"/>
                </div>
                 <div class="kol_sem"> <?php echo $kol_vosem?> </div>
</div>
                <div class="pole9">
                <div class="fon_devat"></div>
                <div class="devat">
                    <img id="devat" class="img  "src="<?php echo $devat?>" style="width: 80px;"/>
                </div>
                 <div class="kol_devat"> <?php echo $kol_devat?> </div>
</div>
                
                
                
            </div>
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
        
    </div>  </div>

    
    <div class="lok1">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok1_txt">
Коряжник
</div>
    <a href="lok1.php" class="btn3"></a>
    
        
    <div class="lok2">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok2_txt">
Остров
</div>
        <div class="lok3">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok3_txt">
Плёс
</div>
        <div class="lok4">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok4_txt">
 Мыс
</div>
        <div class="lok5">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok5_txt">
 Мостки
</div>
        <div class="lok6">
        	
<span class="mgo-widget-call_pulse"></span></div>
        
<div class="lok6_txt">
Жабовник
</div>

    

<div class="sadok">
     <div class="set">
		    <a href="#win3"><img id="ava" class="img  "src="game/sadok.png" style="width: 100px; " /></a>
		</div>

        <!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win3"></a>
        <div class="popup">
           <img id="sa1" class="img  "src="game/sadok_mod.png" style="width: 600px; " />
           <div class="rib_sad1">
               <div class="fon_sa1"></div>
                <div class="sa1">
                    <img id="sa1" class="img  "src="<?php echo $sadok1?>" style="width: 80px; top:110px; left:-55px; position:absolute;"/>
                </div>
                 <div class="kol_sa1"> <?php //echo $kol1?> </div>
            </div>
           <div class="rib_sad2">
            <div class="fon_sa2"></div>
                <div class="sa2">
                    <img id="sa2" class="img  "src="<?php echo $sadok2?>" style="width: 80px; top:110px; left:-55px;  position:absolute;"/>
                </div>
                 <div class="kol_sa2"> <?php //echo $kol2?> </div>
           </div>
           <div class="rib_sad3">
               <div class="fon_sa3"></div>
                <div class="sa3">
                    <img id="sa3" class="img  "src="<?php echo $sadok3?>" style="width: 80px; top:110px; left:-55px;  position:absolute;"/>
                </div>
                 <div class="kol_sa3"> <?php// echo $kol3?> </div>
           </div>
           <div class="rib_sad4">
               <div class="fon_sa4"></div>
                <div class="sa4">
                    <img id="sa4" class="img  "src="<?php echo $sadok4?>" style="width: 80px; top:-100px; left:-55px;  position:absolute;"/>
                </div>
                 <div class="kol_sa4"> <?php // echo $kol4 ?> </div>
           </div>
           <div class="rib_sad5">
               <div class="fon_sa5"></div>
                <div class="sa5">
                    <img id="sa5" class="img  "src="<?php echo $sadok5?>" style="width: 80px; top:10px; left:-55px;  position:absolute;"/>
                </div>
                 <div class="kol_sa5"> <?php //echo $kol5 ?> </div>
           </div>
           
            <a class="close" title="Закрыть" href="#close"></a>
        </div>
            
</div>
    
    
    
 <div class="ydocha">


        <div style="text-align: center;">
		    <a href="#win7"><img id="ava" class="img  "src="game/ydo_shehol-removebg-preview.png" style="width: 190px; " /></a>
		</div>

        <!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win7"></a>
        <div class="popup">
            <div class="yd1">
                
                
           <img id="id1" class="img  "src="game/bolon/95491.png" style="" />
           <div class="fon_yd1_kat"></div>
           <div class="yd1_kat">
                <img id="ava" class="img  "src="<?php echo $image_kat?>" style="width: 80px; " />
             
          </div>
           </div>
           
            <a class="close" title="Закрыть" href="#close"></a> </div>
       
        
    </div> 
    
   </div>

</div></div>
</body>

</html>




 
   <?php
  
  $conn->close();
 
 

 
 ?>

 




