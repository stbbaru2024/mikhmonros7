												<?php
if(substr($validity,-1) == "d"){
$validity = "Masa aktif:".substr($validity,0,-1)."Hari";
}else if(substr($validity,-1) == "h"){
$validity = "Masa aktif:".substr($validity,0,-1)."Jam";}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
$timelimit = "Durasi:".((substr($timelimit,0,-1)*7) + substr($timelimit, 2,1))."Hari";
}else if(substr($timelimit,-1) == "d"){
$timelimit = "Durasi:".substr($timelimit,0,-1)."Hari";
}else if(substr($timelimit,-1) == "h"){
$timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
$timelimit = "Durasi:".(substr($timelimit,0,-1)*7)."Hari";}
if($getprice == "3000"){ $color = "#01579B";} 
elseif($getprice == "2000"){ $color = "#FF1493";}
elseif($getprice == "3000"){ $color = "#8B008B";}
elseif($getprice == "4000"){ $color = "#161717";}
elseif($getprice == "5000"){ $color = "#800000";}
elseif($getprice == "7000"){ $color = "#E65100";}
elseif($getprice == "9000"){ $color = "#228B22";}
elseif($getprice == "100000"){ $color = "#008000";}
elseif($getprice == "125000"){ $color = "#FF00FF";}
elseif($getprice == "150000"){ $color = "#E60C00";}
elseif($getprice == "25000"){ $color = "#FF0000";}  
elseif($getprice == "70000"){ $color = "#CF0000";} 
else{ $color = "#BA68C8";}?>
<style type="text/css">.rotate {
vertical-align: center;
text-align: center;
font-size: 20px;}.rotate span {
-ms-writing-mode: tb-rl;
-webkit-writing-mode: vertical-rl;
writing-mode: vertical-rl;
transform: rotate(180deg);
white-space: nowrap;}
<!--mks-mulai-->
</style>
<!--mks-border-mulai-->
<table class="voucher" style="border: 2px solid <?php echo $color;?>;width:345px;">
<!--mks-border-akhir-->	
<tbody>
<!--mks-price-->	
<tr>
<td style="font-weight: bold; border-right: 4px dotted white; color:#fff;background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;" class="rotate" rowspan="4"><span><?php echo $price;?></span></td>
<td style="font-weight: bold; border-left: 4px dotted white; color:#fff;background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;" class="rotate" rowspan="4"><span></span></td>	
<!--mks-price-akhir-->	
<!--mks-logo-->	
<td style="font-weight: bold" colspan="3"><img src="<?php echo $logo;?>" alt="logo" style="height:45px;"> </td>
<!--mks-logo-akhir-->	
<!--mks-qr-mulai-->	
<?php if($qr == "yes"){?>
<td style="" rowspan="4"><img style="border: 2px solid<?php echo $color;?>;width:80px; height: 80px;" <?= $qrcode ?></td>
<?php }else{?>
<td style="" rowspan="4"><img style="border: 2px solid<?php echo $color;?>; width:80px; height: 80px;"<?= $qrcode ?></td>
<?php }?>
</tr>
<!--mks-qr-akhir-->
<!--mks-voucher-->	
<tr>
<?php if($usermode == "vc"){?> 
<td style="width: 100%; font-weight: bold; font-size: 18px; color:#111; text-align: center;"><?php echo $username;?></td>
<?php }elseif($usermode == "up"){?>
<td style="width: 100%; font-weight: bold; font-size: 17px; color:<?php echo $color;?>; text-align: left;"><?php echo "User: ".$username."<br>Pass: ".$password;?></td>
<?php }?> 
<!--mks-voucher-akhir-->
<!--mks-limitasi-mulai-->	
</tr>
<tr>
<td style="font-weight: bold; font-size: 10px; color:#000000;"><?php echo $validity;?> <?php echo $timelimit;?> <?php echo $datalimit;?></td>
</tr>
<!--mks-limitasi-akhir-->
<!--mks-cs-mulai-->	
<tr>
<td colspan="4" style="font-size: 10px;">
Gunakan Layanan Internet Dengan Bijak</tr>
</tbody>
</table> 
<!--mks-cs-akhir-->
<!--mks-selesai-->	  	        	        