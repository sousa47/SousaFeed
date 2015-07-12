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
</br>
<a href="#" class="dropbox">+</a>
</br>
<div class="dropbox">Teste</div>

<?php
//echo "Olá Mundo!";
?>

</body>
<script>
$(document).ready(function(){
	var msg = false;
	var msg2 = false;
	var slide = false;
	var anim = true;
	
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
	if(msg2)//porque posso
	{
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
	}

	if(slide)
	{
		//Slides
		
		//slideDown() Method
		$(".dropbox").click(function(){ //precissa de ficar invisivel com o hide ou com 
										//css display: none; de forma a aparecer do "nada"
			 //ups
			 //http://stackoverflow.com/questions/31368704/selecting-the-element-with-this
			 $(this).hide().slideDown();
			 //site interessante de seletor
			 //http://www.javascript-coder.com/jquery/jquery-selector-this.phtml
			 //nunca se sabe
			 //http://learn.jquery.com/using-jquery-core/
			 //alert("oi");
			 
			 //slideUp()
			 $("div.dropbox").slideUp();
			 
			 //slideToggle() 
			 $("div.dropbox").slideToggle();
			 $("div.dropbox").slideToggle();
			 $("div.dropbox").slideToggle();
			 $("div.dropbox").slideToggle();
			 $("div.dropbox").slideToggle();
		});
	}
	
	if(anim)
	{
		//Animate
		$(".dropbox").click(function(){
			$(this).css("position","relative");
			$(this).animate({left: '250px'});
			/*
				Is it possible to manipulate ALL CSS properties 
				with the animate() method?

				Yes, almost! However, there is one important thing 
				to remember: all property names must be camel-cased
				when used with the animate() method: You will need 
				to write paddingLeft instead of padding-left, marginRight 
				instead of margin-right, and so on. 

				Also, color animation is not included in the core jQuery library.
				If you want to animate color, you need to download 
				the Color Animations plugin from jQuery.com.
			*/
			$(this).animate({
				width: '500px',//toggle ou hide para o slide de lado :)
				height: '80px' //toggle, (especie de 0px) / show e hide, mesmo que a animação slide 
				//no entanto o border-radius nao da nem o background :/
			});
			
			//o w3 diz que isto faz uma queque. ^^^^^^ (ou seja so executa um apos o outro)
			
		});
	}
	
});
</script>
</html>