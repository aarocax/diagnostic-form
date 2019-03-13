<style type="text/css">
<!--

h1 {
  color: #17365d;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 19pt; 
}

hr, h2, .contacto {
  color: #4f81bd;
}

h2 {
  font-size: 12pt;
  margin: 0;
}
 h3 {
  font-size: 10pt;
}

.contacto {
margin-top: 10mm;
}
.contacto table {
  margin: 0;
  padding: 0;
}
.contacto table td {
  vertical-align: middle;
}
.contacto img {
  margin-right: 5px;
}


.tbl{
     width: 100%;
     border: 1px solid #000;
     padding-top: 4mm;
     padding-bottom: 4mm;
     line-height: 18px;
     vertical-align: top;
    }

table, th, td {
  border: none;
}

th, td {
  padding: 5px 10px;
  text-align: left;    
}

.azul {
  background: #d3dfee;
  border-top: solid 1px #4f81bd;
}

.contacto td {
  padding: 5px 0;
}


.subtitulo, span.resaltar {
  color: #17365d;
}

.subtitulo {
  margin-top: 16px;
  margin-bottom: 16px;
  font-weight: bold;
  color: #4f81bd;
}

.subtitulo td {
  padding: 10px 0;
}

span.resaltar {
  font-weight: bold;
  margin-left: 3px;
}

.imagen_diagnostico .estrellas img {
  width: 28px;
  margin: 0 1px;
  padding: 0;
 
}
-->
</style>

<page backtop="22mm" backbottom="2mm" backleft="10mm" backright="10mm" style="font-size: 10pt">
  <page_header>
    <table style="width: 100%;">
      <tr>
        <td style="width=33.33%; text-align: center">
          <img style="width: 120px" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/logo-camara-valencia.png">
        </td>
        <td style="width=33.33%; text-align: center">
          <img style="width: 120px" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/logo-tecnologia.png">
        </td>
        <td style="width=33.33%; text-align: center">
          <img style="width: 120px" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/logo-oficina-transformacion.png">
        </td>
      </tr>
    </table>  
  </page_header>

<page_footer>
<table style="width: 100%; font-size: 8pt; padding-left: 10mm; padding-right: 10mm; vertical-align: top; line-height: 15px;">
    <tr>
      <td style="width: 50%;text-align: left">
      Oficina de Transformación Digital | Cámara Valencia
      <br>
      C/Poeta Querol, 15 - 46002 València
      </td>
    
      <td style="width: 50%; text-align: right">
      Auto-diagnóstico del nivel de madurez digital
      <br>
      [[page_cu]]
      </td>
    </tr>
  </table>

</page_footer>

<div style="margin-bottom: 8pt;">
  <h1 style="text-align: center; margin-bottom: 0pt;">Autodiagnóstico del nivel de madurez digital</h1>
  
</div>


<div style="background: url(<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/banner.jpg) no-repeat center; background-size: contain; padding: 40px 0;">
<table class="tbl imagen_diagnostico" CELLSPACING='2' cellpadding='2'>
<tr>
<td style="width: 50%; font-weight: bold; line-height: 24px; vertical-align: middle;">
<span style="font-size: 18pt; font-weight: 500; color: #ffffff;">Nivel</span>
<br>
<span style="font-size: 22pt; color: #17365d;"><?php echo strtoupper($nivel['leyend']) ?></span>
</td>
<td class="estrellas" style="width: 50%; text-align: right; vertical-align: middle; padding-right: 20px;">
<?php {
  switch ($nivel['leyend']) {
    case 'incipiente': ?>
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <?php
      break;

    case 'emergente': ?>
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <?php
      break;

    case 'avanzado': ?>
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella_vacia.png">
      <?php
      break;

    case 'innovador': ?>
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <img  src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/estrella.png">
      <?php
      break;
  }
} ?>

</td>
</tr>
</table>
</div>
<br>
<br>

  <div class="subtitulo" style="font-size: 12pt; line-height: 25px;">
    Empresa: <span class="resaltar"><?php echo $responses_array['nombre_empresa'] ?></span>
    <br>
    Tipo de negocio: <span class="resaltar"><?php echo $responses_array['tipo_negocio_description'] ?></span>
  </div>


  <?php $dfPreguntas = new dfPreguntas; ?>

  <?php $i = 0;  $color="azul" ?>

  <?php foreach ($responses_array as $key => $value) { ?>
    <?php if ($i < 6) { ?>
      <?php $color = ($i % 2 === 0) ? "" : "azul"; ?>
      <table class='tbl <?php echo $color ?>' CELLSPACING='2' cellpadding='2'>
        <tr>
          <td style="width: 50%">
            <strong><?php echo $dfPreguntas->preguntas[$key]['enunciado'] ?></strong>
            <br>
            <br>
            <?php echo $dfPreguntas->preguntas[$key]['respuestas'][$value]['enunciado'] ?>
          </td>
        
          <td style="width: 50%">
            <?php echo $dfPreguntas->preguntas[$key]['respuestas'][$value]['autodiagnostico'] ?>
          </td>
        </tr>
      </table>
    <?php } ?>
    <?php $i++; ?>
  <?php } ?>


  <div class="contacto">
    <table>
    <tr>
    <td>
    <h2>¿Quieres que tu negocio avance hacia el siguiente nivel de madurez digital?</h2>
    <h3 style="color: #000000;">Contacta con un consultor de la Oficina de Transformación Digital</h3>
    </td>
    </tr>


    <tr>
    <td style="font-size: 14pt; font-weight: bold;">
    <img style="width: 25px;" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/telefono.png">963 103 924
    </td>
    </tr>

    <tr>
    <td>
    <img style="width: 25px;" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/email.png">oficinadigital@camaravalencia.com
    </td>
    </tr>

    <tr>
    <td>
    <img style="width: 25px;" src="<?php echo ABSPATH ?>wp-content/plugins/diagnostic-form/images/pdf/info.png">https://ticnegocios.camaravalencia.com
    </td>
    </tr>

    </table>
  </div>


</page>