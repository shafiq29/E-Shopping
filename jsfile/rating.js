var current=1;
var pdid;
var cartid;
function getUser(pid){
pdid=pid;
//alert(pdid);
 $.post( 
             "checkrate.php",
             { idforp: pdid },
             function(data) {
                $('#stage').html(data);
             });
}
function setToCart(cartid){
cartid=cartid;
mes = { 'name':cartid};
			$.post('cart_add.php', mes, function(data) {
					$('#provide').html(data);
				});
}
function checkOut(cartid){
cartid=cartid;
mes = { 'name':cartid};
			$.post('check_out.php', mes, function(data) {
					$('#provide').html(data);
				});
}
		
$(document).ready(function(){

				//alert(current);
			function vote(){
				//alert(current);
				 $.post( 
             "fixrate.php",
             { idforp: pdid },
             function(data) {
                //$('#stage').html(data);
             }

          );
			}
			function pers(){
				//alert(current);
				 $.post( 
             "person.php",
             { idforp: pdid },
             function(data) {
               // $('#stage').html(data);
             }

          );
			}
			
			$(document).on('click', '.one', function(){
				//alert('mama');
    			if(current==1){
						$(".one").attr("src","resimage/super.png");
					current++;
					//alert(current);
					vote();
					pers();
					}
			});
				
			
			 
				$(document).on('click', '.two', function(){
					
					if(current==2){
						$(".two").attr("src","resimage/super.png");
					current++;
					//alert(current);
					vote();
					}
				});

				$(document).on('click', '.thr', function(){
					
					if(current==3){
						$(".thr").attr("src","resimage/super.png");
					current++;
					//alert(current);
					vote();
					}
				});
				$(document).on('click', '.fou', function(){
					
					if(current==4){
						$(".fou").attr("src","resimage/super.png");
					current++;
					//alert(current);
					vote();
					}
				});
				$(document).on('click', '.fiv', function(){
					
					if(current==5){
						$(".fiv").attr("src","resimage/super.png");
					current++;
					//alert(current);
					vote();
					}
				});
				
			
		});