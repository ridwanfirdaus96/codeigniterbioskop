$(document).ready(function () {
	$('select').material_select();
});

$(document).ready(function () {
	$('.slider').slider();
});

$('.carousel.carousel-slider').carousel({
	fullWidth: true
});

$(document).ready(function () {
	$('.carousel').carousel();
});

$('.carousel.carousel-slider').carousel({fullWidth: true});


$(document).ready(function() {
    $('select').material_select();
  });

  $(document).ready(function(){
		$('.input-tanggal').datepicker({
			dateFormat : 'yy-mm-dd'
		});		
	});

	var grndTotal = 0;
	var total1 = 0;
	var total2 = 0;
	
	window.totalIt= function(name) {
	  if(name == "baris"){
	 
	  var input = document.getElementsByName("product");
	  var total = 0;
		  for (var i = 0; i < input.length; i++) {
			if (input[i].checked) {
			  total += 1;
			}
		  }
	  if(total>=3){ total1 =  (total*29).toFixed(2);}
	  else{total1 =  (total*39).toFixed(2);}
	  }
	
	if(name == "dessert"){
	
	  var input = document.getElementsByName("dessert");
	  var total = 0;
	  for (var i = 0; i < input.length; i++) {
		if (input[i].checked) {
		  total += parseFloat(input[i].value);
		}
	  }
	  
	  total2 =  total.toFixed(2);
	  }
	  grndTotal = parseInt(total2) + parseInt(total1);
	  document.getElementById("total").value = "Rp."+grndTotal ;
		 
	}

	