<!DOCTYPE html>
<html>
		<head>
		<script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/scriptcam.js"></script>

		<script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		
		<script> 
			$(document).ready(function() {
				$("#webcam").scriptcam({
					onError:onError,
					cornerRadius:0,
					onWebcamReady:onWebcamReady
				});
			});

			function onError(errorId,errorMsg) {
				alert(errorMsg);
			}			
			function changeCamera() {
				$.scriptcam.changeCamera($('#cameraNames').val());
			}
			function onWebcamReady(cameraNames,camera,microphoneNames,microphone,volume) {
				$.each(cameraNames, function(index, text) {
					$('#cameraNames').append( $('<option></option>').val(index).html(text) )
				}); 
				$('#cameraNames').val(camera);
			}
			
			function enviarAsistencia(){
				var cadena=$.scriptcam.getBarCode();
				if(cadena!=''){
				$('#decoded').text(cadena);
					var data=cadena.split('%&',2);
						if(data[1]!=''){
							$.post("http://localhost/sge/administracion/asistencia/registar_asistencia",
									{num_doc_user:data[1] ,id_ponencia:localStorage.getItem('ponencia')}, 
									function(dataRetorno){
										alert(dataRetorno);
									});
							}
					}
					
					
					
					
					
					
				}
		</script>
		</head>
		<body>
<div style="width:330px;float:left;">
          <div id="webcam"> </div>
          <div style="margin:5px;"> 
            <select id="cameraNames" size="1" onChange="changeCamera()" style="width:245px;font-size:10px;height:25px;">
            </select>
  </div>
        </div>
<div style="width:135px;float:left;">
          <p>
    <button class="btn btn-small" id="btn1" onclick="enviarAsistencia()">Registrar</button>
  </p>
        </div>
<div style="width:200px;float:left;">
          <p id="decoded"></p>
        </div>
</body>
</html>
