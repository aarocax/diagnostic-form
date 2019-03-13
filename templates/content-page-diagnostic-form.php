<?php

$url = plugins_url();
$path = parse_url($url);

$arrow_left  = $path['path'].'/diagnostic-form/images/arrow-left.png';
$arrow_right = $path['path'].'/diagnostic-form/images/arrow-right.png';
$download    = $path['path'].'/diagnostic-form/images/download.svg';
$email       = $path['path'].'/diagnostic-form/images/email.svg';
$loader      = $path['path'].'/diagnostic-form/images/ajax-loader.gif';

?>


<div class="formulario_diagnostico" id="formulario_diagnostico">

    <div id="form-wrapper">

      <h1>Conoce tu madurez digital con este sencillo diagnóstico preliminar</h1>

      <div class="formulario_select">
          <h2>¿Qué tipo de negocio tienes?</h2>
          <div class="formulario_elemento">
              <select class="formulario_caja select" id="tipo-empresa" name="tipo-empresa">
                  <option disabled selected value>Selecciona</option>
                  <option value="form-empresa-tipo-1">Comercio</option>
                  <option value="form-empresa-tipo-2">Industria</option>
                  <option value="form-empresa-tipo-3">Servicios y otros</option>
              </select>
          </div>
      </div>

      <div id="df-forms">
          <div class="progreso" style="display: none;">Página <span>1</span> / 4</div>

          <form id="form-empresa-tipo-1" novalidate style="display: none;" action="formulario-submit.php" method="post">
            <div class="formulario_preguntas">
              <div class="contenido">
                <div id="1" style="display: none;">
                    <div class="pregunta_uno">
                        <div class="texto">
                            <p><strong>¿Qué importancia tiene la transformación digital en tu negocio?</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-1-1" value="Respuesta 1-1-1-a">
                                    <div class="respuesta_contenedor">Sé que aporta beneficios pero aún no la he aplicado a mi negocio</div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-1-1" value="Respuesta 1-1-1-b"> <div class="respuesta_contenedor">Es
                                    importante y ya me he planteado algunos objetivos concretos</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-1-1" value="Respuesta 1-1-1-c"> <div class="respuesta_contenedor">Es
                                    prioridad para la dirección de la empresa y dentro del plan estratégico</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-1-1" value="Respuesta 1-1-1-d"> <div class="respuesta_contenedor">Tengo
                                    objetivos concretos y dedico recursos para ello</div></li>
                            </ol>
                        </div>
                    </div>
                    <div class="division"></div>
                    <div class="pregunta_dos">
                        <div class="texto">
                            <p><strong>Las acciones en el ámbito digital van dirigidas a:</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-1-2" value="Respuesta 1-1-2-a">
                                <div class="respuesta_contenedor"> Mejorar mi sistema de gestión ventas </div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-1-2" value="Respuesta 1-1-2-b"><div class="respuesta_contenedor">Digitalizar
                                    mi tienda física (inventario, logística, transporte, etc.)</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-1-2" value="Respuesta 1-1-2-c"><div class="respuesta_contenedor">Implementar
                                    e-Commerce</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-1-2" value="Respuesta 1-1-2-d"><div class="respuesta_contenedor">Establecer
                                    un modelo omnicanal</div></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div id="2" style="display: none;">
                    <div class="pregunta_uno">
                        <div class="texto">
                            <p><strong>¿Cómo describirías la experiencia de compra de tus clientes?</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-2-1" value="Respuesta 1-2-1-a"><div class="respuesta_contenedor">Práctica
                                    y tradicional. Los clientes vienen a comprar los productos que ya conocen</div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-2-1" value="Respuesta 1-2-1-b"><div class="respuesta_contenedor">Conveniente
                                    y recreativa. Disfrutan la variedad, las novedades y el "ambiente" de la tienda</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-2-1" value="Respuesta 1-2-1-c"><div class="respuesta_contenedor">Informada
                                    y exploradora: El cliente explora y se informa en canales online antes de
                                    comprar</div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-2-1" value="Respuesta 1-2-1-d"><div class="respuesta_contenedor">
                                    Personalizada:
                                        El cliente recibe información y atención según sus gustos y preferencias
                                </div></li>
                            </ol>
                        </div>
                    </div>
                    <div class="division"></div>
                    <div class="pregunta_dos">
                        <div class="texto">
                            <p><strong>¿Cuáles de estos canales digitales empleas en tu negocio?</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-2-2" value="Respuesta 1-2-2-a"><div class="respuesta_contenedor">
                                    Página
                                        web / blog / Redes sociales
                                </div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-2-2" value="Respuesta 1-2-2-b"><div class="respuesta_contenedor">
                                    Tienda
                                        online y plataformas intermedias (Amazon, eBay, Groupon, etc.)
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-2-2" value="Respuesta 1-2-2-c"><div class="respuesta_contenedor">
                                    Herramientas
                                        de marketing digital (Ads, Hubspot, DoubleClick, etc.)
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-2-2" value="Respuesta 1-2-2-d"><div class="respuesta_contenedor">
                                    Ninguno
                                </div></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div id="3" style="display: none;">
                    <div class="pregunta_uno">
                        <div class="texto">
                            <p><strong>¿Cómo gestionas tu relación con tus clientes?</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-3-1" value="Respuesta 1-3-1-a"><div class="respuesta_contenedor">
                                    Hago
                                        seguimiento de mis clientes (llamadas, visitas, pedidos, etc.)
                                </div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-3-1" value="Respuesta 1-3-1-b"><div class="respuesta_contenedor">
                                    Analizo
                                        el comportamiento y opiniones de los clientes para mejorar su experiencia
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-3-1" value="Respuesta 1-3-1-c"><div class="respuesta_contenedor">
                                    Ofrezco
                                        servicios postventa y atención a clientes
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-3-1" value="Respuesta 1-3-1-d"><div class="respuesta_contenedor">
                                    Ofrezco
                                        experiencias personalizadas en cada punto de contacto con el cliente
                                </div></li>
                            </ol>
                        </div>
                    </div>
                    <div class="division"></div>
                    <div class="pregunta_dos">
                        <div class="texto">
                            <p><strong>¿Su cultura corporativa incorpora la visión digital?</strong></p>
                            <ol>
                                <li><input type="radio" class="radio" id="huey" name="1-3-2" value="Respuesta 1-3-2-a"><div class="respuesta_contenedor">
                                    La
                                        visión digital es competencia del departamento de informática/sistemas
                                </div></li>
                                <li><input type="radio" class="radio" id="dewey" name="1-3-2" value="Respuesta 1-3-2-b"><div class="respuesta_contenedor">
                                    La
                                        visión digital está a cargo de los jefes de las áreas funcionales
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-3-2" value="Respuesta 1-3-2-c"><div class="respuesta_contenedor">
                                    Sí,
                                        tenemos un plan de formación digital para todos los empleados
                                </div></li>
                                <li><input type="radio" class="radio" id="louie" name="1-3-2" value="Respuesta 1-3-2-d"><div class="respuesta_contenedor">
                                    Sí,
                                        la visión digital es prioridad en la captación de talento y la innovación
                                </div></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div id="4" style="display: none;">
                    <p class="centrado"><strong>¿Cuáles de estas herramientas utilizas en tu negocio?</strong></p>
                    <div class="pregunta_uno">
                        <div class="texto">

                            <ol>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Software administrativo (contabilidad,
                                        facturación, nómina, etc.)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Software de ventas
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Plataformas de pago (TPV, pago con
                                        móvil)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Customer Relationship Manager (CRM)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Enterprise Resources Planner (ERP)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Herramientas en la nube (Cloud
                                        Computing) 
                                </div></li>
                            </ol>
                        </div>
                    </div>
                    <div class="division"></div>
                    <div class="pregunta_dos">
                        <div class="texto">

                            <ol>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Big Data / Business Intelligence (BI)
                                </div>
                                </li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Internet of Things (IoT)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Aplicaciones moviles (APP)
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Realidad Virtual / Realidad Aumentada
                                </div></li>
                                <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                    Otras
                                </div></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="flechas" id="botonera" style="display: none;">
                    <div class="flechas_contenedor">
                        <button type="button" id="anterior" disabled class="flecha_anterior"><img src="<?php echo $arrow_left?>"
                                alt=""></button>
                        <button type="button" id="siguiente" class="flecha_siguiente"><img src="<?php echo $arrow_right?>"
                                alt=""></button>
                    </div>
                </div>

                <div id="5" style="display: none;">
                  <div class="formulario_recoger_datos" id="form-empresa-datos">
                    <div class="formulario_elemento formulario_enviar formulario_descarga" style="display: none;">
                      <h2>Gracias por rellenar este formulario</h2>
                      <button class="formulario_boton_enviar descargar" type="submit" id="enviar"> <img src="<?php echo $download?>" alt="">Descargar informe</button>
                      <div class="error" style="display: none;">Este valor no es válido</div>
                    </div>

                    <div class="formulario_entrada">
                      <div class="formulario_elemento">
                        <label>Nombre y apellido</label>
                        <input class="formulario_caja" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido">
                        <div class="error" id="error-nombre" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_elemento">
                        <label>Nombre de la empresa</label>
                        <input class="formulario_caja" type="text" id="nombre_empresa" name="nombre_empresa"
                            placeholder="Nombre de la empresa">
                        <div class="error" id="error-empresa" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_elemento select_caja">
                        <label>Sector</label>
                        <select class="formulario_caja select" id="sector" name="sector">
                            <option disabled selected value>Selecciona uno...</option>
                            <option value="0">Mayorista</option>
                            <option value="1">Minorista</option>
                        </select>
                        <div class="error" id="error-sector" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_elemento select_caja">
                        <label>Tamaño</label>
                        <select class="formulario_caja select" id="tamaño" name="tamaño">
                            <option disabled selected value>Selecciona uno...</option>
                            <option value="0">Autónomos y microempresas ( < 10 trabajadores)</option>
                            <option value="1">Pequeñas empresas ( < 50 trabajadores )</option>
                            <option value="2">Medianas empresas ( < 250 trabajadores )</option>
                            <option value="3">Grandes empresas ( >= 250 trabajadores )</option>
                            <option value="4">Emprendedores</option>
                            <option value="5">Instituciones</option>
                            <option value="6">Particulares</option>
                        </select>
                        <div class="error" id="error-tamaño" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_elemento">
                        <label>Email</label>
                        <input class="formulario_caja" type="email" id="email" name="email" placeholder="E-mail">
                        <div class="error" id="error-email" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_elemento">
                        <label>Télefono</label>
                        <input class="formulario_caja" type="text" id="telefono" name="telefono" placeholder="Teléfono">
                        <div class="error" id="error-telefono" style="display: none;">Este valor no es válido</div>
                      </div>
                    </div>

                    <div class="formulario_elemento formulario_enviar">
                      <button class="formulario_boton_enviar" type="submit" id="enviar">Obtener diagnóstico</button>
                      <div class="error" style="display: none;">Este valor no es válido</div>
                      <small>Recibirás en tu correo electrónico un informe diagnóstico en formato PDF</small>
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
          </form>

          <form id="form-empresa-tipo-2" style="display: none;" action="formulario-submit.php" method="post">
              <div class="formulario_preguntas">

                  <div id="1" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿Qué importancia tiene la transformación digital en tu negocio?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-1-1" value="Respuesta 2-1-1-a"><div class="respuesta_contenedor">
                                      Sé que aporta beneficios pero aún no la he aplicado a mi negocio
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-1-1" value="Respuesta 2-1-1-b"><div class="respuesta_contenedor">
                                      Es importante y ya me he planteado algunos objetivos concretos
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-1-1" value="Respuesta 2-1-1-c"><div class="respuesta_contenedor">
                                      Es prioridad para la dirección de la empresa y dentro del plan estratégico
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-1-1" value="Respuesta 2-1-1-d"><div class="respuesta_contenedor">
                                      Tengo objetivos concretos y dedico recursos para ello
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>Las acciones en el ámbito digital van dirigidas a:</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-1-2" value="Respuesta 2-1-2-a">
                                      <div class="respuesta_contenedor">
                                          Aumentar la productividad y la eficiencia
                                      </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-1-2" value="Respuesta 2-1-2-b"><div class="respuesta_contenedor">
                                      Mejorar la visibilidad y comunicación de mi cadena de suministro
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-1-2" value="Respuesta 2-1-2-c"><div class="respuesta_contenedor">
                                      Las anteriores e incorporar Business Intelligence en mi negocio
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-1-2" value="Respuesta 2-1-2-d"><div class="respuesta_contenedor">
                                      Emplear las tecnologías para innovar y anticiparme a las demandas del mercado
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="2" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿En qué nivel de automatización se encuentra tu sistema de producción?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-2-1" value="Respuesta 2-2-1-a"><div class="respuesta_contenedor">
                                      Utilizamos sensores y dispositivos de medición de los procesos de producción
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-2-1" value="Respuesta 2-2-1-b"><div class="respuesta_contenedor">
                                      Empleamos controladores programables para automatizar algunos procesos
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-2-1" value="Respuesta 2-2-1-c"><div class="respuesta_contenedor">
                                      Usamos dispositivos automáticos y sistemas de monitorización de la producción
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-2-1" value="Respuesta 2-2-1-d"><div class="respuesta_contenedor">
                                      Mi sistema de producción está integrado en un ERP
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>¿Cómo es la comunicación entre los integrantes de tu cadena de suministro?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-2-2" value="Respuesta 2-2-2-a"><div class="respuesta_contenedor">
                                      Utilizo canales independientes para comunicarme con partners y proveedores
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-2-2" value="Respuesta 2-2-2-b"><div class="respuesta_contenedor">
                                      Me conecto simultáneamente con partners y proveedores y compartimos datos
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-2-2" value="Respuesta 2-2-2-c"><div class="respuesta_contenedor">
                                      Utilizo un sistema ERP que me permite tener una visión amplia de mi negocio
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-2-2" value="Respuesta 2-2-2-d"><div class="respuesta_contenedor">
                                      Empleo sistemas de análisis avanzado y machine learning
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="3" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿Cómo gestionas tu relación con tus clientes?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-3-1" value="Respuesta 2-3-1-a"><div class="respuesta_contenedor">
                                      Recojo y analizo datos generales de los clientes
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-3-1" value="Respuesta 2-3-1-b"><div class="respuesta_contenedor">
                                      Analizo el comportamiento y opiniones de los clientes
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-3-1" value="Respuesta 2-3-1-c"><div class="respuesta_contenedor">
                                      Ofrezco servicios postventa y atención a clientes
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-3-1" value="Respuesta 2-3-1-d"><div class="respuesta_contenedor">
                                      Involucro al cliente en el diseño de mis productos
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>¿La cultura corporativa incorpora la visión digital?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="2-3-2" value="Respuesta 2-3-2-a"><div class="respuesta_contenedor">
                                      La visión digital es competencia del departamento de informática/sistemas
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="2-3-2" value="Respuesta 2-3-2-b"><div class="respuesta_contenedor">
                                      La visión digital está a cargo de los jefes de las áreas funcionales
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-3-2" value="Respuesta 2-3-2-c"><div class="respuesta_contenedor">
                                      Sí, tenemos un plan de formación digital para todos los empleados
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="2-3-2" value="Respuesta 2-3-2-d"><div class="respuesta_contenedor">
                                      Sí, la visión digital es prioridad en la captación de talento y la innovación
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="4" class="pregunta_final" style="display: none;">
                      <p class="centrado"><strong>¿Cuáles de estas herramientas utilizas en tu negocio?</strong></p>
                      <div class="pregunta_uno">
                          <div class="texto">

                              <ol>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Software administrativo (contabilidad,
                                          facturación, nómina, etc.)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Supply Chain Management (SCM)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Manufacturing Execution System (MES)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Third-Party Logistics (3PL o TPL)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Impresión 3D
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Customer Relationship Manager (CRM)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Enterprise Resources Planner (ERP)
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">

                              <ol>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Herramientas en la nube (Cloud Computing)
                                  </div>
                                  </li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Big Data / Business Intelligence (BI)
                                  </div> </li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Internet of Things (IoT)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Aplicaciones moviles (APP)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Realidad Virtual / Realidad Aumentada
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Otras
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div class="flechas" id="botonera" style="display: none;">
                      <div class="flechas_contenedor">
                          <button type="button" id="anterior" disabled class="flecha_anterior"><img src="<?php echo $arrow_left?>"
                                  alt=""></button>
                          <button type="button" id="siguiente" class="flecha_siguiente"><img src="<?php echo $arrow_right?>"
                                  alt=""></button>
                      </div>
                  </div>

                  <div id="5" style="display: none;">
                    <div class="formulario_recoger_datos" id="form-empresa-datos">
                      <div class="formulario_elemento formulario_enviar formulario_descarga" style="display: none;">
                        <h2>Gracias por rellenar este formulario</h2>
                        <button class="formulario_boton_enviar descargar" type="submit" id="enviar"> <img src="<?php echo $download?>" alt="">Descargar informe</button>
                        <div class="error" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_entrada">
                        <div class="formulario_elemento">
                          <label>Nombre y apellido</label>
                          <input class="formulario_caja" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido">
                          <div class="error" id="error-nombre" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Nombre de la empresa</label>
                          <input class="formulario_caja" type="text" id="nombre_empresa" name="nombre_empresa"
                              placeholder="Nombre de la empresa">
                          <div class="error" id="error-empresa" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento select_caja">
                          <label>Sector</label>
                          <select class="formulario_caja select" id="sector" name="sector">
                              <option selected value="0">Industria</option>
                          </select>
                          <div class="error" id="error-sector" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento select_caja">
                          <label>Tamaño</label>
                          <select class="formulario_caja select" id="tamaño" name="tamaño">
                              <option disabled selected value>Selecciona uno...</option>
                              <option value="0">Autónomos y microempresas ( < 10 trabajadores)</option>
                              <option value="1">Pequeñas empresas ( < 50 trabajadores )</option>
                              <option value="2">Medianas empresas ( < 250 trabajadores )</option>
                              <option value="3">Grandes empresas ( >= 250 trabajadores )</option>
                              <option value="4">Emprendedores</option>
                              <option value="5">Instituciones</option>
                              <option value="6">Particulares</option>
                          </select>
                          <div class="error" id="error-tamaño" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Email</label>
                          <input class="formulario_caja" type="email" id="email" name="email" placeholder="E-mail">
                          <div class="error" id="error-email" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Télefono</label>
                          <input class="formulario_caja" type="text" id="telefono" name="telefono" placeholder="Teléfono">
                          <div class="error" id="error-telefono" style="display: none;">Este valor no es válido</div>
                        </div>
                      </div>

                      <div class="formulario_elemento formulario_enviar">
                        <button class="formulario_boton_enviar" type="submit" id="enviar">Obtener diagnóstico</button>
                        <div class="error" style="display: none;">Este valor no es válido</div>
                        <small>Recibirás en tu correo electrónico un informe diagnóstico en formato PDF</small>
                      </div>
                    </div>
                  </div>

                 

                  
              </div>

              

          </form>

          <form id="form-empresa-tipo-3" style="display: none;" action="formulario-submit.php" method="post">
              <div class="formulario_preguntas">

                  <div id="1" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿Qué importancia tiene la transformación digital en tu negocio?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-1-1" value="Respuesta 3-1-1-a"><div class="respuesta_contenedor">
                                      Sé que aporta beneficios pero aún no la he aplicado a mi negocio
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-1-1" value="Respuesta 3-1-1-b"><div class="respuesta_contenedor">
                                      Es importante y ya me he planteado algunos objetivos concretos
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-1-1" value="Respuesta 3-1-1-c"><div class="respuesta_contenedor">
                                      Es prioridad para la dirección de la empresa y dentro del plan estratégico
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-1-1" value="Respuesta 3-1-1-d"><div class="respuesta_contenedor">
                                      Tengo objetivos concretos y dedico recursos para ello
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>Las acciones en el ámbito digital van dirigidas a:</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-1-2" value="Respuesta 3-1-2-a">
                                      <div class="respuesta_contenedor">
                                          Aumentar la productividad y la eficiencia
                                      </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-1-2" value="Respuesta 3-1-2-b"><div class="respuesta_contenedor">
                                      Mejorar la productividad, el marketing y las ventas
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-1-2" value="Respuesta 3-1-2-c"><div class="respuesta_contenedor">
                                      Las anteriores y gestión del cliente
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-1-2" value="Respuesta 3-1-2-d"><div class="respuesta_contenedor">
                                      Todas las áreas de la organización
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="2" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿Qué tecnológías empleas en los procesos de tu negocio?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-2-1" value="Respuesta 3-2-1-a"><div class="respuesta_contenedor">
                                      Aplicaciones de ofimática (Excel, Word, Access, Power Point, etc)
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-2-1" value="Respuesta 3-2-1-b"><div class="respuesta_contenedor">
                                      Cada área funcional dispone de un sistema propio
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-2-1" value="Respuesta 3-2-1-c"><div class="respuesta_contenedor">
                                      Tengo un sistema integrado alimentado por cada área funcional
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-2-1" value="Respuesta 3-2-1-d"><div class="respuesta_contenedor">
                                      Contamos con tecnología en la nube y conexión con los stakeholders
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>¿Cuáles de estos canales digitales empleas en tu negocio?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-2-2" value="Respuesta 3-2-2-a"><div class="respuesta_contenedor">
                                      Página web / blog / Redes sociales
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-2-2" value="Respuesta 3-2-2-b"><div class="respuesta_contenedor">
                                      Las anteriores y plataformas intermedias (Idealista, Booking, Infojobs, etc.)
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-2-2" value="Respuesta 3-2-2-c"><div class="respuesta_contenedor">
                                      Herramientas de marketing digital (Ads, Hubspot, Mailchimp, etc.)
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-2-2" value="Respuesta 3-2-2-d"><div class="respuesta_contenedor">
                                      Ninguno
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="3" style="display: none;">
                      <div class="pregunta_uno">
                          <div class="texto">
                              <p><strong>¿Cómo gestionas tu relación con tus clientes?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-3-1" value="Respuesta 3-3-1-a"><div class="respuesta_contenedor">
                                      Hago seguimiento de mis clientes (llamadas, visitas, solicitudes, etc.)
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-3-1" value="Respuesta 3-3-1-b"><div class="respuesta_contenedor">
                                      Analizo el comportamiento y opiniones de los clientes para mejorar su experiencia
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-3-1" value="Respuesta 3-3-1-c"><div class="respuesta_contenedor">
                                      Ofrezco servicios postventa y atención a clientes
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-3-1" value="Respuesta 3-3-1-d"><div class="respuesta_contenedor">
                                      Involucro al cliente en el diseño de mis servicios
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">
                              <p><strong>¿La cultura corporativa incorpora la visión digital?</strong></p>
                              <ol>
                                  <li><input type="radio" class="radio" id="huey" name="3-3-2" value="Respuesta 3-3-2-a"><div class="respuesta_contenedor">
                                      La visión digital es competencia del departamento de informática/sistemas
                                  </div></li>
                                  <li><input type="radio" class="radio" id="dewey" name="3-3-2" value="Respuesta 3-3-2-b"><div class="respuesta_contenedor">
                                      La visión digital está a cargo de los jefes de las áreas funcionales
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-3-2" value="Respuesta 3-3-2-c"><div class="respuesta_contenedor">
                                      Sí, tenemos un plan de formación digital para todos los empleados
                                  </div></li>
                                  <li><input type="radio" class="radio" id="louie" name="3-3-2" value="Respuesta 3-3-2-d"><div class="respuesta_contenedor">
                                      Sí, la visión digital es prioridad en la captación de talento y la innovación
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div id="4" style="display: none;">
                      <p class="centrado"><strong>¿Cuáles de estas herramientas utilizas en tu negocio?</strong></p>
                      <div class="pregunta_uno">
                          <div class="texto">

                              <ol>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Software administrativo (contabilidad,
                                          facturación, nómina, etc.)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Software de ventas
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Customer Relationship Manager (CRM)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Enterprise Resources Planner (ERP)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Herramientas en la nube (Cloud Computing)
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                      <div class="division"></div>
                      <div class="pregunta_dos">
                          <div class="texto">

                              <ol>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Big Data / Business Intelligence (BI)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Internet of Things (IoT)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Aplicaciones moviles (APP)
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Realidad Virtual / Realidad Aumentada
                                  </div></li>
                                  <li><input type="checkbox" class="checkbox"><div class="respuesta_contenedor">
                                      Otras
                                  </div></li>
                              </ol>
                          </div>
                      </div>
                  </div>

                  <div class="flechas" id="botonera" style="display: none;">
                      <div class="flechas_contenedor">
                          <button type="button" id="anterior" disabled class="flecha_anterior"><img src="<?php echo $arrow_left?>"
                                  alt=""></button>
                          <button type="button" id="siguiente" class="flecha_siguiente"><img src="<?php echo $arrow_right?>"
                                  alt=""></button>
                      </div>
                  </div>
              </div>

                  <div id="5" style="display: none;">
                    <div class="formulario_recoger_datos" id="form-empresa-datos">
                      <div class="formulario_elemento formulario_enviar formulario_descarga" style="display: none;">
                        <h2>Gracias por rellenar este formulario</h2>
                        <button class="formulario_boton_enviar descargar" type="submit" id="enviar"> <img src="<?php echo $download?>" alt="">Descargar informe</button>
                        <div class="error" style="display: none;">Este valor no es válido</div>
                      </div>

                      <div class="formulario_entrada">
                        <div class="formulario_elemento">
                          <label>Nombre y apellido</label>
                          <input class="formulario_caja" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido">
                          <div class="error" id="error-nombre" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Nombre de la empresa</label>
                          <input class="formulario_caja" type="text" id="nombre_empresa" name="nombre_empresa"
                              placeholder="Nombre de la empresa">
                          <div class="error" id="error-empresa" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento select_caja">
                          <label>Sector</label>
                          <select class="formulario_caja select" id="sector" name="sector">
                              <option disabled selected value>Selecciona uno...</option>
                              <option value="0">Agricultura / Pesca y Ganadería</option>
                              <option value="1">Construcción</option>
                              <option value="2">Transportes</option>
                              <option value="3">Turismo</option>
                              <option value="4">Servicios profesionales</option>
                              <option value="5">Administración</option>
                              <option value="6">Proveedor Tecnológico</option>
                          </select>
                          <div class="error" id="error-sector" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento select_caja">
                          <label>Tamaño</label>
                          <select class="formulario_caja select" id="tamaño" name="tamaño">
                              <option disabled selected value>Selecciona uno...</option>
                              <option value="0">Autónomos y microempresas ( < 10 trabajadores)</option>
                              <option value="1">Pequeñas empresas ( < 50 trabajadores )</option>
                              <option value="2">Medianas empresas ( < 250 trabajadores )</option>
                              <option value="3">Grandes empresas ( >= 250 trabajadores )</option>
                              <option value="4">Emprendedores</option>
                              <option value="5">Instituciones</option>
                              <option value="6">Particulares</option>
                          </select>
                          <div class="error" id="error-tamaño" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Email</label>
                          <input class="formulario_caja" type="email" id="email" name="email" placeholder="E-mail">
                          <div class="error" id="error-email" style="display: none;">Este valor no es válido</div>
                        </div>

                        <div class="formulario_elemento">
                          <label>Télefono</label>
                          <input class="formulario_caja" type="text" id="telefono" name="telefono" placeholder="Teléfono">
                          <div class="error" id="error-telefono" style="display: none;">Este valor no es válido</div>
                        </div>
                      </div>

                      <div class="formulario_elemento formulario_enviar">
                        <button class="formulario_boton_enviar" type="submit" id="enviar">Obtener diagnóstico</button>
                        <div class="error" style="display: none;">Este valor no es válido</div>
                        <small>Recibirás en tu correo electrónico un informe diagnóstico en formato PDF</small>
                      </div>
                    </div>
                  </div>

                 

              
          </form>

      </div>

      <div id="mensaje-enviado" class="mensaje_final">

        <div id="mensaje-loading" class="cargando" style="display: none;">
          <img src="<?php echo $loader?>">
          <h3>Generando su informe</h3>
        </div>

        <div id="mensaje-send" class="enviado" style="display: none;">
          <img src="<?php echo $email?>">
          <h3> Su informe ha sido enviado a su dirección de correo electrónico </h3>
        </div>

      </div>

      <div class="mensaje-validacion" id="mensaje-validacion"></div>
    </div>
    
    
</div>

