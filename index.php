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

<p id="test">This is some <b>bold</b> text in a paragraph.</p>

<p>Name: <input type="text" id="test2" value="Satoru Iwata"></p>

<p class="t1">This is a <b>bold</b> paragraph.</p>
<p class="t1">This is a <b>bold</b> paragraph.</p>
<p id="t2">This is another <b>bold</b> paragraph.</p>

<button id="btn1">Show Old/New Text</button>
<button id="btn2">Show Old/New HTML</button>

<?php
//echo "Olá Mundo!";
?>

</body>
<script>
$(document).ready(function(){
	
	//---Efeitos---//
	var msg = false;
	var msg2 = false;
	var slide = false;
	var anim = false;
	
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
			 
			 //slideToggle() ft. Chaining
			 $("div.dropbox").slideToggle().slideToggle().slideToggle().slideToggle().slideToggle();
		});
	}
	
	if(anim)
	{
		//Animate
		$(".dropbox").click(function(){
			$(this).css("position","relative");
			$(this).animate({left: '250px'},"slow",function(){
				$(this).html("<b>Fim</b>");//calback
			});
			//JavaScript statements are executed line by line. However, with effects,
			//the next line of code can be run even though the effect is 
			//not finished. This can create errors. EX:
			$(this).html("<b>Hello world!</b>");
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
	
	$(".button").click(function(){
		//https://api.jquery.com/stop/
		$(".dropbox").stop(true,true);
	});
	//---Fim efeitos---//
	
	
	
	//-----HTML-----//
	var omg = false;
	var omg2 = false;
	var classes = false;
	var dim = false;
	
	if(omg)
	{
		//get
		$(".button").click(function(){
		alert("Text: " + $("#test").text() + " " +$("#test2").val() + " " +$(this).attr("href"));
		});
		$(".dropbox").click(function(){
			alert("HTML: " + $("#test").html() + " " +$("#test2").val() + " " +$(this).attr("href"));
		});
		
		//set
		$(".button").click(function(){
			$("#test").text("Hello world!");
		});
		$("a.dropbox").click(function(){
			$("#test").html("<b>Hello world!</b>");
		});
		$("div.dropbox").click(function(){
			$("#test").html($("#test").html() + "<b>Hello world!</b>");
		});
		
		$(".dropbox").click(function(){
			$("#test2").val("Thanks for all!");
		});
		
		//callback poupando esforco com o w3schools! thanks
		$("#btn1").click(function(){
			$(".t1").text(function(i, origText){
				return "Old text: " + origText + " New text: Hello world! (index: " + i + ")"; 
			});
		});

		//descobri que com elementos id ele so atua sobre o primeiro portanto o indice do callback para id's é "inutil"
		$("#btn2").click(function(){
			$("#t2").html(function(i, origText){
				return "Old html: " + origText + " New html: Hello <b>world!</b> (index: " + i + ")"; 
			});
		});
		
		//set attr()
		$(".button").click(function(){
			$(".dropbox").attr("href", "http://www.w3schools.com/jquery"); //hahah uma div pode ter href!
		});
		
		//esplica tu w3schools:
		/* The jQuery method attr(), also come with a callback function. The callback 
		function has two parameters: the index of the current element in the list of 
		elements selected and the original (old) attribute value. You then return the 
		string you wish to use as the new attribute value from the function.
		*/
		
		$(".button").click(function(){//com isto percebi que ele acrescenta os metodos do click e nao faz override
			$(".dropbox").attr("href", function(i, origValue){
				//alert("legal?"); ele apresenta 3x porque ha 3 elementos dropbox(sou um genio)	
				return origValue + "/jquery"; //boa ele estraga o link haha nice gg wp
			});
		});
	}
	
	
	if(omg2)
	{
		//add
		/*	append() - Inserts content at the end of the selected elements
			prepend() - Inserts content at the beginning of the selected elements
			after() - Inserts content after the selected elements
			before() - Inserts content before the selected elements*/
		
		$(".button").click(function(){
			//append()
			$("p").append("Some appended text.",document.createElement("p").innerHTML = "Teste");//perfect
			//prepend()
			$("p").prepend("Some prepended text.");
		});
		
		//basicamente a diferenca entre o append,prepend e after,e before é que os primeiros fazem dentro do elemento ou outros fazem fora do elemento
		$(".dropbox").click(function(){
			//append()
			$("p").after("Some appended text.",document.createElement("p").innerHTML = "Teste");//perfect
			//prepend()
			$("p").before("Some prepended text.");//este nem se nota a diferenca porque é o fim do p
		});
		
		$("a.dropbox").click(function(){
			//remove()
			$("p").remove(".t1");//apaga o proprio elemento
			//filtro ^^^ para classes t1
		});
		
		$("div.dropbox").click(function(){
			//empty()
			$(this).empty();//tira o conteudo do elemento
		});
	}
	
	
	if(classes)
	{
		//classes css
		
		//addClass()
		$(".button").click(function(){ //as classes tem de ja estar defenidas
			$("p").addClass("blue");
			$("div").addClass("important");
		});
		
		$("a.dropbox").click(function(){//simplesmente tira a classe
			$("p").removeClass("blue");
		});
		
		$("div.dropbox").click(function(){//toggle (nvm, bue fixe)
			$("p").toggleClass("blue");
		});
	}
	
	if(dim)
	{
		//css() Method
		
		//return property
		$(".button").click(function(){
			alert("Background color = " + $(".button").css("background"));
			$(".button").css({"background": "yellow", "font-size": "200%"});
		});
		
		
		//jQuery Dimensions
		
		$(".button").click(function(){//lel
			$("div").css("margin", "20px");//apenas para ver a diferenca
			var txt = "";
			txt += "Width: " + $("div").width() + "</br>";
			txt += "Height: " + $("div").height() + "</br>";
			txt += "Inner width of div: " + $("div").innerWidth() + "</br>";
			txt += "Inner height of div: " + $("div").innerHeight() + "</br>";
			txt += "Outer width: " + $("div").outerWidth(true) + "</br>";//com o true devolve com a margin
			txt += "Outer height: " + $("div").outerHeight(); //sem margin
			$("div").html(txt);
		});
		
		$(".dropbox").click(function(){//super lel
			$(this).width(800).height(300);
		});
	}
	//---Fim HTML---//
	
	
	//-----Traversing?-----//
	
	
	
	
});
</script>
</html>