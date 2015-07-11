<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> 	<!--Permite usar caracteres latinos como os acentos-->
	<link rel="stylesheet" type="text/css" href="main.css">				<!--Mete as styles-->
	<script type="text/javascript" src="scriptName.js"></script>		<!--Mete os scripts-->
	<!--http://www.w3schools.com/jquery/jquery_syntax.asp-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	<!--Implementa o jQuery-->
</head>

<body>

<!--Step 1: The HTML-->
<a href="#" class="button">Click Me</a>

</br>

<a href="#" class="dropbox">+</a>

<?php
//echo "Olá Mundo!";
?>

</body>
<script>
$(document).ready(function(){
	var msg = false;
	var msg2 = false;
	
   $(".button").dblclick(function(){
	   //http://www.w3schools.com/jquery/jquery_selectors.asp
		$(this).hide(); // o this apaga o objeto que executou o click
						//e nao todos os buttoes
   });

   
   if(msg)//apenas para nao "chatear"
   {
	   //mouseenter()
	   //http://www.w3schools.com/jquery/jquery_events.asp
	   $(".button").mouseenter(function(){
			alert("Entrou com o rato no botão!");//mensagem de aviso
		});
		
		//mouseleave()
		$("a").mouseleave(function(){
			alert("Saiu com o rato de um elemento a!");
		});
		
		//mousedown()
		$("body").mousedown(function(){
			alert("Clicou no background");
		});
			
   }
   
   if(msg2)
   {
	   //mouseup()
	   $("body").mouseup(function(){
			$(".button").show();
		});
   }
   
	/*	hover()
		
	The hover() method takes two functions and is a 
	combination of the mouseenter() and mouseleave() methods.

	The first function is executed when the mouse enters the 
	HTML element, and the second function is executed when the mouse
	leaves the HTML element:
	*/
	
	//focus() and blur()(The function is executed when the form field loses focus)
	/*
	ver site
	*/
	
	
	//The on() Method
	//The on() method attaches one or more event handlers for the selected elements.
	$(".dropbox").on("click", function(){
		//alert("Clicado!"); //spam...
		//$(".button").toggle();
		//http://www.w3schools.com/jquery/jquery_fade.asp
		$(".button").fadeOut(2000);//desaparece
		$(".button").fadeIn(2000);//aparece
		$(".button").fadeToggle("fast");
		$(".button").fadeToggle("slow");
		$(".button").fadeTo(10000, 0.70);
		//$("#div2").fadeIn("slow");
		//$("#div3").fadeIn(3000);

	});
	

});
</script>
</html>