<script type="text/javascript">
	function onSelect(e) {
                    i++;
                    var spn = document.createElement('a');
                    spn.innerHTML = $(e.item).children(".k-link").text();
                    spn.href = "#";
                    spn.className = 'opciones' + i;
                    document.getElementById('content').appendChild(spn);
                }
				
		function capturar(){
			
var a=document.getElementById("seleccion").options.selectedIndex;
	
	b=document.getElementById("seleccion").options[a].value;




localStorage.setItem('ponencia',b)

		//console.log(b);
			
		}
</script>
<?php $this->load->view('home_admin/header');?>
<?php $this->load->view('home_admin/left_side');?>
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
  <div id="container" class="ltr">
  <br />
  <br />
    
    <label class="desc" id="title20" for="Field20"> Seleccionar una opcion <span id="req_20" class="req">*</span></label>
			<div>
				<p>
				  <select onchange="capturar()" name="id_eve" class="field select medium" id="seleccion">
				    <?php for($i=0; $i<count($ponencias); $i++){?>
				    <option value="<?=$ponencias[$i]->id_pon?>">
			        <?=$ponencias[$i]->nom_pon?>
			        -<?=$ponencias[$i]->cod_eve_pon?>
			        </option>
				    <?php }?>
			      </select>
			  </p>
				<p>&nbsp;</p>
			</div>
            
            
            <br />
          
           
            <br />
            <div style="margin-left:300px;">
            <li style="list-style:none;">
            <ul >Vision 2013=1</ul>
             <ul>SOCOTE=2</ul>
              <ul>III Congreso de Educacion Virtual=3</ul>
            </li>
            
            </div>
            
            
    
    <a class="css3button2" href="<?php echo base_url(); ?>administracion/c_administracion/cargarCamara/">Registrar Asistencia</a>
    <fieldset>
      
    </fieldset>
    <br />
    <br />
  <img src="" id="laimagen"/> </div>
  <!--container--> 
  <!-- end .content --></div>
<?php $this->load->view('home_admin/right_side');?>
<?php $this->load->view('home_admin/footer');?>
