
var oculto=true;

var ancho=$( window ).width();
var alto=$( window ).height();
console.log(ancho);
console.log(alto);


function alertas(){
	var caja=$('#caja_vacia');
	caja.html("HEY LE HAS DADO CLICK AL BOTON");
	caja.addClass('rojo');
}
function cancela(){
	var caja=$('#caja_vacia');
	caja.removeClass("rojo");
}

function switch_texto(){
	var caja=$('#texto_oculto');
	if (oculto){
		caja.fadeIn();
		oculto=false;
	}
	else{
		caja.fadeOut();
		oculto=true;
	}
}
function mueve(){
	var boton=$('#boton_inquieto');
	var left=boton.css("left");
	var top=boton.css("top");
	var izquierda=true;
	var arriba=true;
	if(left+1000>ancho){
		console.log("Left+1000="+(left+1000));
		izquierda=true
	}
	else if(left-1000<0){
		izquierda=false;
		console.log("Left-1000="+(left-1000));
	}
	else{
		izquierda= Math.random() >= 0.5;
		console.log("Random="+(izquierda));
		console.log("left"+left);
	}
	if(top+500>alto){
		arriba=false
	}
	else if(top-500<0){
		arriba=true;
	}
	else{
		arriba= Math.random() >= 0.5;
	}
	var atributos={};
	if(izquierda){
		atributos.left="+=1000";
	}
	else{
		atributos.left="-=1000";
	}
	if(arriba){
		atributos.top="+=500";
	}
	else{
		atributos.top="-=500";
	}
	boton.animate(atributos, 100, fin_animacion());
}

function fin_animacion(){
	console.log("acabo la animacion");
}
$(document).ready(function (){
	$("#boton_inquieto").hover(function(){
        mueve();
        },function(){
        console.log("salgo");
    });
});
