(function($){

		var step = 0;
		var num_steps = 5;
		var form;

		(function(){

			if ( $('#formulario_diagnostico #df-forms').length ) {
				resetForms();	
			}
			
		})()

		function resetForms() {
			$('#'+form).off('click','#botonera #siguiente');
			$('#'+form).off('click','#botonera #anterior');
			$('#'+form+' #botonera').hide();
			$('#'+form).hide();
			//$('#'+form).off('click','#botonera #finalizar');
			$('#'+form).off('submit');
			step = 0;
			num_steps = 5;
			$('#'+form+' #1').hide();
			$('#'+form+' #2').hide();
			$('#'+form+' #3').hide();
			$('#'+form+' #4').hide();
			//$('form').hide();
		}
	
		$('#formulario_diagnostico select#tipo-empresa').on('change', function(e){
			resetForms();
			form = this.value;
			step = 1;
			asociarEventos();
			$('#'+form).fadeIn("fast");
			$('#'+form+' #1').fadeIn("fast");
			$('#'+form+' #botonera').fadeIn("fast");
			//$('#'+form+' #finalizar').hide();
			$('.progreso').html('Página <span>'+step+'</span>/'+num_steps);
			$('.progreso').show();
		})
	
		function asociarEventos() {
	
			// botón siguiente
			$('#'+form).on('click','#botonera #siguiente', function(){
				$('#'+form+' #botonera #anterior').removeAttr("disabled"); 
				if (step != num_steps) {
					$('#'+form+' #'+step).hide();
					step++;
					$('#'+form+' #'+step).fadeIn("fast");
					$('.progreso').html('Página <span>'+step+'</span>/'+num_steps);
					if (step === num_steps) {
						$('#'+form+' #botonera #siguiente').attr("disabled","disabled");
						//$('#'+form+' #botonera #finalizar').fadeIn("fast");
						//$('#'+form+' #botonera #siguiente').hide();
						$('.progreso span').addClass('final');
					}
				}
			});
	
			// botón anterior
			$('#'+form).on('click','#botonera #anterior', function(){
				$('#'+form+' #botonera #siguiente').removeAttr("disabled");
				$('.progreso span').removeClass('final');
				//$('#'+form+' #botonera #finalizar').hide();
				$('#'+form+' #botonera #siguiente').fadeIn("fast");
				//$('#form-empresa-datos').hide();
				if (step > 0) {
					$('#'+form+' #'+step).hide();
					step--;
					$('.progreso').html('Página <span>'+step+'</span>/'+num_steps);
					$('#'+form+' #'+step).fadeIn("fast");
					if (step === 1) {
						$('#'+form+' #botonera #anterior').attr("disabled","disabled");	
					}
				} 
	
			});
	
			// Validación campos on-time
			$('#'+form).on('keyup', '#form-empresa-datos input#email', function(e){
				verificaEmail(form, this.value);
			})

			$('#'+form).on('keyup', '#form-empresa-datos input#nombre', function(e){
				verificaNombre(form, this.value);
			})

			$('#'+form).on('keyup', '#form-empresa-datos input#nombre_empresa', function(e){
				verificaEmpresa(form, this.value);
			})

			$('#'+form).on('keyup', '#form-empresa-datos input#telefono', function(e){
				verificaTelefono(form, this.value);
			})

			$('#'+form).on('keyup', '#form-empresa-datos input#telefono', function(e){
				verificaTelefono(form, this.value);
			})

			$('#'+form).on('change', '#sector', function(e){
				verificaSector(form, this.value);
			});

			$('#'+form).on('change', '#tamaño', function(e){
				verificaTamanyo(form, this.value);
			})


			// botón submit salva los datos en una tabla, genera el informe PDF y manda un email al usuario
			$('#'+form).on('submit',function(e){
				e.preventDefault()

				if ( verificarCamposformulario(form) ) {

					var data = $('#'+form).serialize();

	        $('.formulario_select').hide();
	        $('#df-forms').hide();
	    		jump();	
					$('#mensaje-loading').show();
	        $.post(
			      PT_Ajax.ajaxurl, {
			        action: 'df_ajax_save_form',
			        form_id: $('#'+form).attr('id'),
			        tipo_negocio: $( "#tipo-empresa option:selected" ).val(),
			        data: data,
			        nonce: PT_Ajax.nonce
			      },

			      function(response) {
			        if (response) {
			        	$('#mensaje-loading').hide();
			        	$('#mensaje-send').show();
			        } 
			      }
			    );
				};
			});
		}

		function jump() {
			var top = document.getElementById('formulario_diagnostico').offsetTop;
    	window.scrollTo(0, top-150);
		}

		function verificarCamposformulario(formulario) {
			var email = $('#'+formulario+' input#email').val();
			var test_email = verificaEmail(formulario, email);
			var test_email_empty = verificaEmailEmpty(formulario, email);
			var nombre = $('#'+formulario+' input#nombre').val();
			var test_nombre = verificaNombre(formulario, nombre);
			var nombre_empresa = $('#'+formulario+' input#nombre_empresa').val();
			var test_nombre_empresa = verificaEmpresa(formulario, nombre_empresa);
			var sector = $('#'+formulario+' select#sector').val();
			var test_sector = verificaSector(formulario, sector);
			var tamanyo = $('#'+formulario+' select#tamaño').val();
			var test_tamanyo = verificaTamanyo(formulario, tamanyo);
			var telefono = $('#'+formulario+' input#telefono').val();
			var test_telefono = verificaTelefono(formulario, telefono);
			var test_radios = verificarRadios(formulario);
			var test_checkboxes = verificarCheckboxes(formulario);
			return (test_email && test_email_empty && test_nombre && test_nombre_empresa && test_sector && test_tamanyo && test_telefono && test_radios && test_checkboxes);
		}

		function verificarRadios(formulario) {
			var check = true;
			var fail = [];
			$('#'+formulario+' input:radio').each(function(){
				var name = $(this).attr("name");
				if($("input:radio[name="+name+"]:checked").length == 0){
					var exist = fail.some(function(e){
						return e === name;
					});
					if(!exist) {
						fail.push(name);
					}
					check = false;
				}
			});

			if(!check){
				$('#'+formulario+' #'+step).hide();
				// si es la primera página
				if (fail[0][fail[0].length - 3] == 1) {
					$('#'+form+' #botonera #anterior').attr("disabled","disabled");
					step = 1;
				} else {
					step = fail[0][fail[0].length - 3];
				}
				$('.progreso').html('Página <span>'+step+'</span>/'+num_steps);
				$('#'+formulario+' #botonera #siguiente').removeAttr("disabled");
				$('#'+formulario+' #'+fail[0][fail[0].length - 3]).show();

			  $('#mensaje-validacion').html('Seleccione una opción en cada una de las preguntas.');
			} else {
				$('#mensaje-validacion').html('');
			}
			return check;			
		}

		function verificarCheckboxes(formulario) {
			var test = $('#'+formulario+" input[type=checkbox]").is(":checked");
			if (test) {
				$('#mensaje-validacion').html('');
			} else {
				$('#'+formulario+' #'+step).hide();
				step = 4;
				$('.progreso').html('Página <span>'+step+'</span>/'+num_steps);
				$('#'+formulario+' #botonera #siguiente').removeAttr("disabled");
				$('#mensaje-validacion').html('Seleccione una opción en cada una de las preguntas.');
				$('#'+formulario+' #'+step).show();
			}
			return test;
		}

		function verificaEmail(formulario, value) {
			var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			var error_email = $('#'+formulario+' #error-email');
			var test = value.length === 0 || emailRegExp.test(value);
		  if (test) {
		    error_email.html("");
		    error_email.hide();
		  } else {
		    error_email.html("Teclea un email válido");
		    error_email.show();
		  }
		  return test;
		}

		function verificaEmailEmpty(formulario, value) {
			var error_email = $('#'+formulario+' #error-email');
			var test = value.length != 0;
		  if (test) {
		    error_email.html("");
		    error_email.hide();
		  } else {
		    error_email.html("Teclea un email válido");
		    error_email.show();
		  }
		  return test;
		}

		function verificaNombre(formulario, value) {
			var error_nombre = $('#'+formulario+' #error-nombre');
			var test = value.length != 0;
		  if (test) {
		    error_nombre.html("");
		    error_nombre.hide();
		  } else {
		    error_nombre.html("El campo no puede estar vacío");
		    error_nombre.show();
		  }
		  return test;
		}

		function verificaEmpresa(formulario, value) {
			var error_empresa = $('#'+formulario+' #error-empresa');
			var test = value.length != 0;
		  if (test) {
		    error_empresa.html("");
		    error_empresa.hide();
		  } else {
		    error_empresa.html("El campo no puede estar vacío");
		    error_empresa.show();
		  }
		  return test;
		}

		function verificaSector(formulario, value) {
			var error_sector = $('#'+formulario+' #error-sector');
			var test = (value === null) ? false : true;
			if (test) {
		    error_sector.html("");
		    error_sector.hide();
		  } else {
		    error_sector.html("Seleccione una opción");
		    error_sector.show();
		  }
		  return test;
		}

		function verificaTamanyo(formulario, value) {
			var error_tamanyo = $('#'+formulario+' #error-tamaño');
			var test = (value === null) ? false : true;
			if (test) {
		    error_tamanyo.html("");
		    error_tamanyo.hide();
		  } else {
		    error_tamanyo.html("Seleccione una opción");
		    error_tamanyo.show();
		  }
		  return test;
		}

		function verificaTelefono(formulario, value) {
			var telefonoRegExp = /^\d{9}$/;
			var error_telefono = $('#'+formulario+' #error-telefono');
			var test = value.length != 0 && telefonoRegExp.test(value);
		  if (test) {
		    error_telefono.html("");
		    error_telefono.hide();
		  } else {
		    error_telefono.html("Teclea un número de teléfono válido");
		    error_telefono.show();
		  }
		  return test;
		}
		
	
	})(jQuery)