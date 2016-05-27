
 	<meta charset="UTF-8">
 
 	<!-- bootstrap -->
 	<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
       
    function showProduct(value){

       showPrice(value);
       showPic(value);
    }
     function showPrice(str) {
    if (str == "") {
    	
    		  document.getElementById("txtHint").innerHTML = "";
      	
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    		  		document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","showProduct.php?q="+str,true);
        xmlhttp.send();
    }
}
    function showPic(value){
        var a = value.split("-")[0];
        var b = value.split("-")[1];
        var c = value.split("-")[2];
        var d = value.split("-")[3];
         var img = document.getElementById('imgshowproduct');
         img.src = "photos/"+d;
    }
    function swap(picT,a){

        var lpic = document.getElementById("imgshowproduct");
        var selectProduct = document.getElementById("products");
        var productPrice = document.getElementById("txtHint");
        lpic.src = picT.href;
        var price = a.split("-")[0];
        selectProduct.value = a;
        
        productPrice.innerHTML = "Cost : "+ numberWithCommas(price)+" bath";
    
        
       
    }
    function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
     
    
         
   
	</script>
       
 </head>
