																																																<?php
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
if($getprice == "3000"){ $color = "#E50877";} 
elseif($getprice == "2000"){ $color = "#752CEB";}
elseif($getprice == "3000"){ $color = "#13C013";}
elseif($getprice == "4000"){ $color = "#E50877";}
elseif($getprice == "5000"){ $color = "#F75418";}
elseif($getprice == "7000"){ $color = "#1433FD";}
elseif($getprice == "9000"){ $color = "#663399";}
elseif($getprice == "100000"){ $color = "#663399";}
elseif($getprice == "125000"){ $color = "#2E8B57";}
elseif($getprice == "150000"){ $color = "#2E8B57";}
elseif($getprice == "25000"){ $color = "#0000FF";}
elseif($getprice == "12000"){ $color = "#0000FF";}
elseif($getprice == "22000"){ $color = "#6495ED";} 
elseif($getprice == "32000"){ $color = "#6495ED";} 
elseif($getprice == "42000"){ $color = "#FF8C00";}
elseif($getprice == "52000"){ $color = "#FF8C00";}
elseif($getprice == "62000"){ $color = "#DC143C";} 
elseif($getprice == "72000"){ $color = "#DC143C";} 
else{ $color = "#FF69B4";}?>  
 <!--mks-mulai-->
<table style="display: inline-block;border-collapse: collapse;border: 1px solid #666;margin: 2.5px;width: 190px;overflow:hidden;position:relative;padding: 1px;margin: 0px;border: 1px solid #444; background:; ">
<tbody>
<tr>
<td style="background:<?php echo $color ?>;color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:center;color:#fff;font-size:10px;font-weight:bold;margin:1px;padding:2.5px;">
 <b>LAYANAN JARINGAN INTERNET</b>	
</div>
</td>		
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%;">
<tbody>
<tr>	
<tr>
<td style="width:75px">
<div style="position:relative;z-index:-1;padding: 0px;float:left;">
<div style="position:absolute;top:0;display:inline;margin-top:-100px;width: 0; height: 0; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:140px solid #DCDCDC; "></div>	

</div>	
</div>
<img style="margin:-5px 0 0 5px;" width="85" height="20" src="<?php echo $logo;?>" alt="logo">	
</td>	
<td style="width:115px">
<div style="float:right;margin-top:-6px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>
<div style="margin:-10px;text-align:right;font-weight:bold;font-size:15px;padding-left:17px;color:<?php echo $color ?>"> <?= $price; ?>
</div>	
</td>		
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:95px"valign="top" >
<div style="clear:both;color:#555;margin-top:5px;margin-bottom:2.5px;">
<?php if($usermode == "vc"){?> 
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:9px;color:#444">Kode Akses</div>		
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:12px;color:<?php echo $color ?>"><?php echo $username;?></div>
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:10px;color:#444">Member</div>		
<div style="padding:0px;border-bottom:1px solid;text-align:center;font-weight:bold;font-size:12px;color:<?php echo $color ?>"><?php echo "User: ".$username."<br>Pass: ".$password;?></div>
<?php }?>
<!--mks-voucher-akhir-->
</div>
<div style="text-align:center;color:#111;font-size:7px;font-weight:bold;margin:0px;padding:2.5px;">
Hubungkan ke wifi <?= $hotspotname; ?>
 Buka browser ketik  : <?= $dnsname; ?> 
<div style="text-align:center;color:#111;font-size:7px;font-weight:bold;margin:0px;padding:2.5px;">	
	<?= $comment; ?>	
</div>	
</td>	
<p style=" margin-top:-10px;margin-bottom:0px">		
<td style="width:100px;text-align:right;">
<div style="clear:both;padding:0 2.5px;font-size:7px;font-weight:bold;color:#000000">
<?php echo $validity;?><br> <?php echo $timelimit;?> <br><?php echo $datalimit;?>
</div>
<img style="solid;float:right;padding:1px;text-align:right;width:70%;margin:0 1px -5px 0;"><img style="border: 1px <?php echo $color ?> solid; border-radius: 3px; solid  #444;width:50px;height:50px;"  <?= $qrcode ?></div>
</td>		
</tr>
<tr>
<td style="background:<?php echo $color ?>;color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:8px;font-weight:bold;margin:0px;padding:2.5px;">
<b>Gunakan internet dengan bijak </b>
<span id="num"><?= " [$num]"; ?>
</div>
</td>	
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
 <!--mks-akhir-->	        	        	        	        	        	        	        	        