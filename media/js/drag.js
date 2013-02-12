		$(function(){
				$(".tarsec").hide();
				$(".gt1").show();

				var enea = "";
				var selt,x = 250,y=600;
				var contador =2;

				function intervalo(from,to){
					return Math.floor(Math.random()*(to-from+1)+from);
				}

				$(".tarjeta").draggable();

				$("#seleccionTarjetas").droppable({
					drop:function(evt, el){
						enea = enea+el.draggable.attr("value")+",";
						elemento = el.draggable.clone();
						elemento.removeClass("gt"+(contador-1));
						el.draggable.remove();
						$("#seleccionTarjetas").append(elemento);
						$(elemento).draggable();
						$(elemento).offset({ top: intervalo(250,400), left: intervalo(600,900)});
					},
					out: function(evt, el){
						enea = enea.replace(el.draggable.attr("value")+",","");
						el.draggable.addClass("salido");
					}
				});

				$("#revisar").click(function(evt){
					evt.preventDefault();
					selt = enea.substring(0,enea.length-1);
					if(selt.split(",").length<1){
						alert("Debes tener al menos 15 tarjetas");
					}else
						alert(selt);
				});

				$("#next").click(function(evt){
					evt.preventDefault();
					if(contador<16){
						$(".salido").remove();
						$(".1"+(contador-1)).remove();
						$(".gt"+contador).show();
						contador++;
					}
				});



			});