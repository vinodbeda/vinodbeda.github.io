<?php 
// fruits
global $apple;
$apple=6.0;
global $orange;
$orange=16.0;
global $banana;
$banana=26.0;
global $mango;
$mango=46.0;

//Vegetables
global $potato;
$potato=6.0;
global $tomato;
$tomato=16.0;
global $onion;
$onion=26.0;
global $ladyfinger;
$ladyfinger=46.0;

//Dry Fruits
global $kaju;
$kaju=6.0;
global $kismish;
$kismish=16.0;
global $anjeer;
$anjeer=26.0;
global $pista;
$pista=46.0;

?>
<html>
<head>
	<title>Product</title>
<link href="style.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script>
var $total=0;
var $quantity=0;
function getSubTotal($a,$b,id)
{
	$r=$a*$b;
	$total=$total+$r;
	document.getElementById(id).innerHTML= "Rs."+$r;
	{
		document.getElementById('totaldiv').innerHTML="Grand Total : Rs."+$total;
	}
}

function bill()
{
	 document.getElementById("main").style.display="none";
	 document.getElementById("bill").style.display="block";	
	 var aa=document.getElementById("cname").value;
	 var bb=document.getElementById("cadd").value;
	 var cc=document.getElementById("cmob").value;
	 document.getElementById("bill").innerHTML="Name : "+aa+"<br/> Address : "+bb+"<br/> Mobile No. : "+cc+"<br/><br/> Grand Total. : "+$total;
	 print();	
}
</script>
</head>

<body>

<div id="main">
	<form action="" method="post">
    	Name: <input type="text" id="cname" value="" /><br/><br/>
        Address:<textarea rows="4" cols="30" id="cadd"></textarea><br/><br/>
        Mobile No.:<input type="text" id="cmob" value="" />
    </form>
<ul id="myTab" class="nav nav-tabs">
   <li class="active"><a href="#fr" data-toggle="tab">
      Fruits</a>
   </li>
   <li><a href="#veg" data-toggle="tab">Vegetables</a></li>
   <li><a href="#drfr" data-toggle="tab">Dry Fruits</a></li>
</ul>

<!-- fruits -->
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="fr">
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Apple</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $apple; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $apple; ?>,'tot');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Orange</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $orange; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $orange; ?>,'tot1');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot1"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Banana</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $banana; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $banana; ?>,'tot2');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot2"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Mango</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $mango; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $mango; ?>,'tot3');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot3"></div>
            </div>
        </div>
	</div>

<!-- Vegetables -->

   <div class="tab-pane fade text-center" id="veg">
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Potato</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $potato; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $potato; ?>,'tot');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Onion</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $onion; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $onion; ?>,'tot1');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot1"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Tomato</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $tomato; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $tomato; ?>,'tot2');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot2"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Lady Finger</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $ladyfinger; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $ladyfinger; ?>,'tot3');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot3"></div>
            </div>
        </div>
	</div>
    
    
    
 <!-- Dry Fruits-->   
    
   <div class="tab-pane fade in " id="drfr">
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Kaju</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $kaju; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $kaju; ?>,'tot');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Kismish</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $kismish; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $kismish; ?>,'tot1');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot1"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Anjeer</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $anjeer; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $anjeer; ?>,'tot2');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot2"></div>
            </div>
        </div>
		<div class="fruits">
        	<img style="float:left;" src="../jewelry/images/banner1.jpg" width="100" height="90" />
            <div style="float:left; margin-left:10px;">
                <label>Pista</label>
      			<br/><br/>
                <label> Price: Rs. <?php echo $pista; ?></label>
            </div>
            <div style="float:left; text-align:center; margin-left:100px;">
            	Quantity <br/><br/>
                <input type="text" name="proqty" onChange="getSubTotal(this.value,<?php echo $pista; ?>,'tot3');" />
            </div>
            <div style="float:left; text-align:center; margin-left:80px;">
            	Total<br/><br/>
                <div id="tot3"></div>
            </div>
        </div>
	</div>    
    
    <div id="totaldiv"></div>
    <div class="check">
    	<input type="button" value="Checkout" name="chk" onClick="bill();" />
    </div>
    
</div>

</div>

<div id="bill">

<script>

	var aa=document.getElementById("cname").value;
	document.write(aa);
</script>


<!--
<label>Name</label>: <?php echo $_POST['cname']; ?>
<label>Address</label>: <?php echo $_POST['cadd']; ?>
<label>Mobile No.</label>: <?php echo $_POST['cmob']; ?>
-->
</div>

<script>
   $(function () {
      $('#myTab li:eq(1) a').tab('show');
   });
</script>

 <script src="js/jquery.js"></script>
 <!-- Include all compiled plugins(below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>

</body>
</html>