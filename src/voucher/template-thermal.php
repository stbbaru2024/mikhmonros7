												<?php
/*
 1 lembar A4 total 9 voucher scale 100 
 1 lembar A4 total 25 voucher  scale 60 
*/

if(substr($validity,-1) == "d"){
  $validity = "   <br>MASA AKTIF : ".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "MASA AKTIF : ".substr($validity,0,-1)."Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}
if($getsprice == "3000"){ $color = "#800000";} 
elseif($getsprice == "2000"){ $color = "#424242";}
elseif($getsprice == "3000"){ $color = "#424242";}
elseif($getsprice == "4000"){ $color = "#800000";}
elseif($getsprice == "5000"){ $color = "#FF4500";}
elseif($getsprice == "7000"){ $color = "#424242";}
elseif($getsprice == "9000"){ $color = "#228B22";}
elseif($getsprice == "100000"){ $color = "#008000";}
elseif($getsprice == "125000"){ $color = "#FF00FF";}
elseif($getsprice == "150000"){ $color = "#E60C00";} 
elseif($getsprice == "25000"){ $color = "#FF0000";} 
else{ $color = "#BA68C8";}
?>  
 <!--mks-mulai-->
<style>
.qrcode{
		height:200px;
		width:200px;
}
</style> 
<table class="voucher" style="border: 2px <?php echo $color ?> solid; border-radius: 1px; text-align: center; font-size: 2px; font-weight:bold; ">
<tbody>
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%;">
<tbody>
<tr>
<td style="width:75px">
<div style="position:relative;z-index:-1;padding: 0px;float:left;">
<div style="position:absolute;top:0;display:inline;margin-top:-100px;width: 0; height: 0; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:0px solid #DCDCDC; "></div>
 <!--mks-logo-->	
</div>
<img style="margin:1px 0 0 5px;" width="100" height="30" src="<?php echo $logo;?>" alt="logo">
</td>
<!--mks-logo-akhir-->	
<td style="width:115px">
<div style="float:right;margin-top:-6px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>
<!--mks-price-->	
<div style="text-align:right;font-weight:bold;font-family:Tahoma;font-size:25px;padding-left:17px;color:<?php echo $color ?>">
<small style="font-size:10px;margin-left:-17px;position:absolute;">Rp </small><?php echo $getsprice;?>
</div>	
<!--mks-price-akhir-->	
</td>		
</tr>
</tbody>
</table>
</td>
</tr>
<!--mks-voucher-->	
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:95px"valign="top" >
<div style="clear:both;color:#555;margin-top:2px;margin-bottom:2.5px;">

<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:10px;color:<?php echo $color ?>">Kode Akses</div>
<?php if($usermode == "vc"){?> 
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:17px;color:#111;"><?php echo $username;?></div>
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:14px;color:#111;"><?php echo "User: ".$username."<br>Pass: ".$password;?></div>
<?php }?>
<!--mks-voucher-akhir-->	

</td>	
<td style="width:100px;text-align:right;">
<div style="clear:both;padding:0 2.5px;font-size:10px;font-weight:bold;color:#000000">
<?php echo $validity;?><br> <?php echo $timelimit;?> <br> <?php echo $datalimit;?>
<?php echo $comment;?>	
</td>
<div><?= $qrcode ?></div>
</td>		
</tr>
<!--mks-cs-->	
<tr>
<td style="background:<?php echo $color ?>;color:#000;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:13px;font-weight:bold;margin:0px;padding:2.5px;">
<b>WhatsApp Admin: 087878868866</b><span id="num"><?php echo " [$num]";?>
</div>
<!--mks-cs-akhir-->	
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--mks-template-selesai-By-isber nendi-mks.net-->	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        
	        	        	        	        	        	        	        	        