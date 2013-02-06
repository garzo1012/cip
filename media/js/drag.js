			$(function(){
				$(".tarsec").hide();
				$(".gt1").show();

				var enea = "";
				var selt;
				var contador =2;

				$(".tarsec").dblclick(function(){
					alert();
				});

				$(".tarjeta").draggable();

				$("#seleccionTarjetas").droppable({
					drop:function(evt, el){
						enea = enea+el.draggable.attr("value")+",";
						el.draggable.removeClass("tarsec");
					},
					out: function(evt, el){
						enea = enea.replace(el.draggable.attr("value")+",","");
						el.draggable.addClass("tarsec");
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
						$(".tarsec").hide();
						$(".gt"+contador).show();
						contador++;
					}
				});

				
				
			});