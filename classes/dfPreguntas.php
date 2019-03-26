<?php

use Spipu\Html2Pdf\Html2Pdf;

class dfPreguntas {

  public $sectors = array(
    'codigos' => array(
      'form-empresa-tipo-1' => 'Comercio',
      'form-empresa-tipo-2' => 'Industria',
      'form-empresa-tipo-3' => 'Servicios y otros',
      ),
    'tipo_negocio' => array(
      'Comercio' => array(
        array('description'=>'Mayorista', 'tag' => 'SECTOR_EMPRESA_COMERCIO_MAYOR'),
        array('description'=>'Minorista', 'tag' => 'SECTOR_EMPRESA_COMERCIO_MENOR'),
        ),
      'Industria' => array(
        array('description'=>'Industria', 'tag' => 'SECTOR_EMPRESA_INDUSTRIA'),
        ),
      'Servicios y otros' => array(
        array('description'=>'Agricultura / Pesca y Ganadería', 'tag' => 'SECTOR_EMPRESA_AGRICULTURA_PESCA_Y_GANADERIA'),
        array('description'=>'Construcción', 'tag' => 'SECTOR_EMPRESA_CONSTRUCCION'),
        array('description'=>'Transportes', 'tag' => 'SECTOR_EMPRESA_SERVICIOS_TRANSPORTES'),
        array('description'=>'Turismo', 'tag' => 'SECTOR_EMPRESA_SERVICIOS_TURISMO'),
        array('description'=>'Servicios profesionales', 'tag' => 'SECTOR_EMPRESA_SERVICIOS_PROFESIONALES'),
        array('description'=>'Administración', 'tag' => 'SECTOR_EMPRESA_ADMINISTRACION'),
        array('description'=>'Proveedor Tecnológico', 'tag' => 'SECTOR_EMPRESA_PROVEEDOR_TECNOLOGICO'),
        ),
      ),
  );

  public $company_size = array(
    array('description' => 'Autónomo / microempresas (<10 trabajadores)', 'tag' => 'TIPO_EMPRESA_AUTONOMOS_Y_MICROEMPRESAS'),
    array('description' => 'Pequeña empresa (< 50 trabajadores)', 'tag' => 'TIPO_EMPRESA_PEQUENYAS_EMPRESAS'),
    array('description' => 'Medianas empresas (< 250 trabajadores)', 'tag' => 'TIPO_EMPRESA_MEDIANAS_EMPRESAS'),
    array('description' => 'Grandes empresas (>= 250 trabajadores)', 'tag' => 'TIPO_EMPRESA_GRANDES_EMPRESAS'),
    array('description' => 'Emprendedores', 'tag' => 'TIPO_EMPRESA_EMPRENDEDORES'),
    array('description' => 'Instituciones', 'tag' => 'TIPO_EMPRESA_INSTITUCIONES'),
    array('description' => 'Particulares', 'tag' => 'TIPO_EMPRESA_PARTICULARES'),
  );

	public $preguntas = array(
    '1-1-1' => array(
      'enunciado' => "¿Qué importancia tiene la transformación digital en tu negocio?",
      'respuestas' => array(

        'Respuesta 1-1-1-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Sé que aporta beneficios pero aún no la he aplicado a mi negocio",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
                                        
        'Respuesta 1-1-1-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Es importante y ya me he planteado algunos objetivos concretos",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
                                        
        'Respuesta 1-1-1-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Es prioridad para la dirección de la empresa y dentro del plan estratégico",
          'autodiagnostico' => "Ya has dado el primer paso, y posiblemente el más importante, para transformar tu negocio. Ahora debes pasar de la estrategia a la acción. Una hoja de ruta te ayudará a definir las acciones que debes emprender, los recursos necesarios para ello y las personas que deben liderar el proceso de transformación."
        ),
                                        
        'Respuesta 1-1-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Tengo objetivos concretos y dedico recursos para ello",
          'autodiagnostico' => "¡Enhorabuena! Eres parte de los que llevan ventaja para hacer su negocio más competitivo. Ten presente que la transformación digital es un proceso continuo y revisa tus objetivos periódicamente."
        )
      )
    ),
    '1-1-2' => array(
      'enunciado' => "Las acciones en el ámbito digital van dirigidas a:",
      'respuestas' => array(
        'Respuesta 1-1-2-a' => array(
          'puntuacion' => 3,
          'enunciado' => "Mejorar mi sistema de gestión ventas",
          'autodiagnostico' => "No hay duda de que optimizar la gestión de ventas redundará en una mayor rentabilidad del negocio, pero en la economía actual esto no es suficiente para competir en mercados que se hacen cada vez más digitales. La transformación debe darse en todas la áreas de tu negocio, no solo en las ventas."
        ),
        
        'Respuesta 1-1-2-b' => array(
          'puntuacion' => 5,
          'enunciado' => "Digitalizar mi tienda física (inventario, logística, transporte, etc.)",
          'autodiagnostico' => "Está muy bien que dirijas esfuerzos hacia optimizar procesos operativos, logísticos y en mejorar la experiencia de compra de tus clientes, pero no olvides que las personas cada vez acuden más a los canales online para realizar sus compras y que todas las acciones de la transformación digital deben girar en torno a las necesidades de tus cliente."
        ),
        
        'Respuesta 1-1-2-c' => array(
          'puntuacion' => 8,
          'enunciado' => "Implementar e-Commerce",
          'autodiagnostico' => "¡Buena decisión! Eres consciente de que a nivel global las ventas en línea han estado creciendo más que las ventas en tienda y que la tendencia es que esa brecha se amplíe. El comercio electrónico es una sabia decisión para tu negocio. Sin embargo, no pierdas de vista que los clientes esperan poder buscar, comprar y devolver productos a través de diversos canales, la omnicanalidad es el modelo ideal de comercialización."
        ),
        
        'Respuesta 1-1-2-d' => array(
          'puntuacion' => 10,
          'enunciado' => "Establecer un modelo omnicanal",
          'autodiagnostico' => "Seguramente vas un paso (o varios) adelante de tus competidores. Sabes que el comercio omnicanal es el motor de crecimiento del sector y que debes abarcar más allá de las tiendas para incluir hogares y puntos de distribución dedicados, tener una sola visión del consumidor en todos los canales y una visibilidad en tiempo real del inventario."
        )
      )
    ),
    '1-2-1' => array(
      'enunciado' => "¿Cómo describirías la experiencia de compra de tus clientes?",
      'respuestas' => array(
        'Respuesta 1-2-1-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Práctica y tradicional. Los clientes vienen a comprar los productos que ya conocen",
          'autodiagnostico' => "Tu estrategia se basa en rentabilizar las ventas realizadas a muchos compradores instantáneos, y tal vez te haya funcionado bien hasta ahora, pero la tendencia es que cada vez más gente compra a través del comercio electrónico, se informa suficientemente antes de tomar la decisión de compra y espera tener una experiencia personalizada. Es vital para tu negocio trabajar en mejorar la experiencia de compra si deseas mantenerte competitivo en el mercado."
        ),
        
        'Respuesta 1-2-1-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Conveniente y recreativa. Disfrutan la variedad, las novedades y el \"ambiente\" de la tienda",
          'autodiagnostico' => "La innovación es un elemento clave en la transformación digital y en la competitividad. La incorporación de tecnología en el punto de venta te ayuda a añadir valor y a crear tiendas físicas diferentes y más sofisticadas. Ten en cuenta también que la tendencia es que cada vez más gente compra a través del comercio electrónico, se informa suficientemente antes de tomar la decisión de compra y espera tener una experiencia personalizada. "
        ),
        
        'Respuesta 1-2-1-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Informada y exploradora: El cliente explora y se informa en canales online antes de comprar",
          'autodiagnostico' => "Cada vez más personas consultan los canales digitales antes de realizar una compra. La web, las redes sociales y las comunidades con intereses comunes generan clientes más conocedores y exigentes. Estrategias digitales como el Inbound Marketing te permiten destacar en el mercado y atraer a ese público ávido de información. También te ayudan a ofrecer experiencias personalizadas y a convertirte en el mejor aliado para tus clientes."
        ),
        
        'Respuesta 1-2-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Personalizada: El cliente recibe información y atención según sus gustos y preferencias",
          'autodiagnostico' => "Estás un paso adelante de muchos otros en el sector. Sabes que conocer bien a tus clientes y ofrecerles atención personalizada genera fidelidad, incrementa las ventas y atrae nuevos clientes. Herramientas como el CRM no solo te permiten hacer seguimiento en cada paso y etapa de un cliente, sino que te ayudan a automatizar tareas, analizar más información sobre tus clientes para entenderlos mejor y relacionarte con cada uno de ellos de manera individual y personalizada. Además, tecnologías como el internet de las cosas hacen posible una mayor personalización de productos/servicios, gracias a la recolección de datos y conexión directa con tus sistemas de información."
        )
      )
    ),
    '1-2-2' => array(
      'enunciado' => "¿Cuáles de estos canales digitales empleas en tu negocio?",
      'respuestas' => array(
        'Respuesta 1-2-2-a' => array(
          'puntuacion' => 2,
          'enunciado' => "Página web / blog / Redes sociales",
          'autodiagnostico' => "Vas por buen camino, la presencia en internet es una enorme puerta de entrada para tus clientes potenciales y una gran herramienta de comunicación, sin mencionar que es una fuente de datos muy valiosa, pero no olvides que los consumidores acuden cada vez más a las plataformas online para realizar sus compras, el comercio electrónico es fundamental en la transformación digital."
        ),
        
        'Respuesta 1-2-2-b' => array(
          'puntuacion' => 3,
          'enunciado' => "Tienda online y plataformas intermedias (Amazon, eBay, Groupon, etc.)",
          'autodiagnostico' => "Sabes aprovechar las ventajas y oportunidades de negocio que brinda Internet, pero no olvides que una estrategia de marketing digital te permite, entro otros, promocionar tu marca y tus productos, desplegar campañas publicitarias, captar clientes potenciales, convertirlos en clientes actuales y fidelizarlos para que sean referentes, además de proporcionar una valiosa cantidad de datos para futuras estrategias de mercado."),
        
        'Respuesta 1-2-2-c' => array(
          'puntuacion' => 5,
          'enunciado' => "Herramientas de marketing digital (Ads, Hubspot, DoubleClick, etc.)",
          'autodiagnostico' => "El marketing tradicional se ha extendido al mundo digital y has acertado al tener una estrategia de marketing digital para tu negocio. La tendencia es que la línea entre lo físico y lo virtual desaparece y tú ya estás preparado para desarrollar estrategias de marketing integral."
        ),
        
        'Respuesta 1-2-2-d' => array(
          'puntuacion' => 0,
          'enunciado' => "Ninguno",
          'autodiagnostico' => "Ya sabes lo que dicen: \"si no está en Internet, no existe\". Si tu negocio no tiene presencia en canales digitales, es como si no existiera. Esto debe ser prioridad en tu proyecto  de transformación digital."
        )
      )
    ),
    '1-3-1' => array(
      'enunciado' => "¿Cómo gestiónas tu relación con tus clientes?",
      'respuestas' => array(
        'Respuesta 1-3-1-a' => array(
          'puntuacion' => 2,
          'enunciado' => "Hago seguimiento de mis clientes (llamadas, visitas, pedidos, etc.)",
          'autodiagnostico' => "El seguimiento de tus clientes es fundamental para tu negocio, pero debes ir más allá si quieres lograr una transformación digital. El siguiente paso es analizar el comportamiento, gustos y perfiles de tus clientes actuales, consumidores y clientes meta para que puedas ofrecerles otros productos"
        ),
        
        'Respuesta 1-3-1-b' => array(
          'puntuacion' => 4,
          'enunciado' => "Analizo el comportamiento y opiniones de los clientes para mejorar su experiencia",
          'autodiagnostico' => "Vas por el camino correcto. La información que podemos obtener de clientes, consumidores y potenciales compradores es la materia prima para ofrecer nuevos productos. La atención preventa y postventa también son muy importantes para cerrar ventas, fidelizar al cliente y convertirlo en un referente, no dejes de incluirlas en tu hoja de ruta."
        ),
        
        'Respuesta 1-3-1-c' => array(
          'puntuacion' => 7,
          'enunciado' => "Ofrezco servicios postventa y atención a clientes",
          'autodiagnostico' => "Te encuentras muy cerca de alcanzar el escenario ideal para que tu negocio sea competitivo en el mundo digital. Debes pasar de la atención personalizada a tus clientes hacia una estrategia de negocio centrada en el cliente con una visión conjunta a lo largo de toda la organización y de la cadena de suministro."
        ),
        
        'Respuesta 1-3-1-d' => array(
          'puntuacion' => 10,
          'enunciado' => "Ofrezco experiencias personalizadas en cada punto de contacto con el cliente",
          'autodiagnostico' => "Sin duda, te estás beneficiando de las ventajas competitivas que te da una eficiente interrelación con tus clientes. Continua optimizando el conocimiento de tus clientes para predecir necesidades, ofrecer mejores experiencias e innovar."
        )
      )
    ),
    '1-3-2' => array(
      'enunciado' => "¿Su cultura corporativa incorpora la visión digital?",
      'respuestas' => array(
        'Respuesta 1-3-2-a' => array(
          'puntuacion' => 1,
          'enunciado' => "La visión digital es competencia del departamento de informática/sistemas",
          'autodiagnostico' => "Todas las personas que pertenecen a la empresa deben compartir la misma visión antes de emprender el camino hacia la transformación digital, deben estar abiertas y dispuestas al cambio si se quiere alcanzar una transformación profunda y duradera en el tiempo. Si bien el liderazgo puede estar a cargo del departamento de TIC, la visión digital debe ser compartida por todos los miembros de la organización."
        ),
        
        'Respuesta 1-3-2-b' => array(
          'puntuacion' => 3,
          'enunciado' => "La visión digital está a cargo de los jefes de las áreas funcionales",
          'autodiagnostico' => "Una buena manera de preparar el camino para la transformación digital es que los jefes de área propaguen la visión digital del negocio a lo largo y ancho de sus departamentos. Solo tendrá éxito el proceso de transformación cuando todos los miembros de la organización, vertical y horizontalmente, compartan la misma visión."
        ),
        
        'Respuesta 1-3-2-c' => array(
          'puntuacion' => 4,
          'enunciado' => "Sí, tenemos un plan de formación digital para todos los empleados",
          'autodiagnostico' => "¡Buen trabajo! Un plan de formación es una buena manera de motivar y dar seguridad a los trabajadores, además de demostrarles las ventajas que la transformación digital aportará a sus tareas diarias. El conocimiento digital empodera y es fuente de innovación. El siguiente paso es diseñar políticas de captación, selección, motivación y desarrollo de talento con competencias digitales para que forme parte de tu empresa a largo plazo."
        ),
        
        'Respuesta 1-3-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Sí, la visión digital es prioridad en la captación de talento y la innovación",
          'autodiagnostico' => "¡Enhorabuena! Has incorporado la gestión del talento digital como factor estratégico de tu negocio. No olvides que las políticas, prácticas y herramientas de gestión del talento digital deben ser revisadas y actualizadas con regularidad."
        )
      )
    ),
    
    '2-1-1' => array(
      'enunciado' => "¿Qué importancia tiene la transformación digital en tu negocio?",
      'respuestas' => array(
        'Respuesta 2-1-1-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Sé que aporta beneficios pero aún no la he aplicado a mi negocio",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
        
        'Respuesta 2-1-1-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Es importante y ya me he planteado algunos objetivos concretos",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
        
        'Respuesta 2-1-1-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Es prioridad para la dirección de la empresa y dentro del plan estratégico",
          'autodiagnostico' => "Ya has dado el primer paso, y posiblemente el más importante, para transformar tu negocio. Ahora debes pasar de la estrategia a la acción. Una hoja de ruta te ayudará a definir las acciones que debes emprender, los recursos necesarios para ello y las personas que deben liderar el proceso de transformación."
        ),
        
        'Respuesta 2-1-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Tengo objetivos concretos y dedico recursos para ello",
          'autodiagnostico' => "¡Enhorabuena! Eres parte de los que llevan ventaja para hacer su negocio más competitivo. Ten presente que la transformación digital es un proceso continuo y revisa tus objetivos periódicamente."
        )
      )
    ),
    '2-1-2' => array(
      'enunciado' => "Las acciones en el ámbito digital van dirigidas a:",
      'respuestas' => array(
        'Respuesta 2-1-2-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Aumentar la productividad y la eficiencia",
          'autodiagnostico' => "No hay duda de que aumentar la productividad y la eficiencia significa generar mayor rentabilidad para la empresa, pero en la economía actual esto no es suficiente para competir en mercados que se hacen cada vez más digitales. La transformación debe darse en todas la áreas de la organización y a lo largo de la cadena de suministro."
        ),
        
        'Respuesta 2-1-2-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Mejorar la visibilidad y comunicación de mi cadena de suministro",
          'autodiagnostico' => "Vas por muy buen camino, sabes que mantener una red de comunicación en tiempo real con socios y proveedores, y compartir información para que todos vean el mismo panorama de los procesos, te pondrá un paso delante de tus competidores. Tras alcanzar este punto, estarás en capacidad de incorporar business intelligence para mejorar procedimientos, hacer pronósticos y predicciones que te ayuden a afinar tus estrategias de negocios y planes de acción."
        ),
        
        'Respuesta 2-1-2-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Las anteriores e incorporar Business Intelligence en mi negocio",
          'autodiagnostico' => "¡Muy bien! El manejo de la información para generar conocimiento es fundamental en la toma de decisiones y en el diseño de estrategias futuras. El siguiente paso que deberías dar es aprovechar las tecnologías para innovar y competir en un nivel más alto o con nuevos modelos de negocio.  La inteligencia artificial, el Internet de las cosas y la impresión 3D son solo algunas de las que están revolucionando el sector industrial."
        ),
        
        'Respuesta 2-1-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Emplear las tecnologías para innovar y anticiparme a las demandas del mercado",
          'autodiagnostico' => "¡Excelente! ya conoces las ventajas de la digitalización. Recuerda que la transformación digital de la empresa debe ser continua para que pueda seguir innovando, adaptándose a nuevas tendencias y mantener su competitividad. La inteligencia artificial, el Internet de las cosas y la impresión 3D, por nombrar algunas, son tecnologías en auge, pero los avances tecnológicos son constantes y cada día surgen nuevos descubrimientos."
        )
      )
    ),
    '2-2-1' => array(
      'enunciado' => "¿En qué nivel de automatización se encuentra tu proceso de producción?",
      'respuestas' => array(
        'Respuesta 2-2-1-a' => array(
          'puntuacion' => 3,
          'enunciado' => "Utilizamos sensores y dispositivos de medición de los procesos de producción",
          'autodiagnostico' => "El uso de sensores y dispositivos de medición permiten optimizar la gestión del mantenimiento y recolectar datos de los procesos de producción para mejorarlos. Sin embargo, debes apuntar a la automatización de estos procesos para marcar la diferencia en el ahorro de costes y en la eficiencia de la cadena de producción."
        ),
        
        'Respuesta 2-2-1-b' => array(
          'puntuacion' => 5,
          'enunciado' => "Empleamos controladores programables para automatizar algunos procesos",
          'autodiagnostico' => "La automatización de los procesos de prouducción ayuda a disminuir costes y a aumentar la eficiencia, la seguridad y la calidad, pero la implementación de un sistema de monitorización de la producción te introducirá realmente en la transformación digital, ya que potencia la planificación de tareas, te permite anticipar posibles riesgos, hacer simulaciones, profundizar la automatización y adaptarte a las normativas vigentes."
        ),
        
        'Respuesta 2-2-1-c' => array(
          'puntuacion' => 7,
          'enunciado' => "Usamos dispositivos automáticos y sistemas de monitorización de la producción",
          'autodiagnostico' => "Ya te has adentrado en la digitalización con un sistema que permite controlar, monitorizar y documentar todos los procesos de producción automáticamente y de forma eficiente. El siguiente paso para aumentar tu competitividad es integrar ese sisitema con la planificación de tus recursos empresariales y con todas las áreas de la organización para generar inteligencia empresarial e innovación."
        ),
        
        'Respuesta 2-2-1-d' => array(
          'puntuacion' => 10,
          'enunciado' => "Mi sistema de producción está integrado con un ERP",
          'autodiagnostico' => "Estás un paso adelante de muchos otros en el sector. Sabes que la generación de conocimiento es una gran ventaja competitiva y que el acceso a ese conocimiento es fundamental para anticipar necesidades en los mercados, innovar y seguir creciendo. Mantén tus sistemas actualizados y a tus trabajadores formados en las últimas competencias digitales."
        )
      )
    ),
    '2-2-2' => array(
      'enunciado' => "¿Cómo es la comunicación entre los integrantes de tu cadena de suministro?",
      'respuestas' => array(
        'Respuesta 2-2-2-a' => array(
          'puntuacion' => 0,
          'enunciado' => "Utilizo canales independientes para comunicarme con partners y proveedores",
          'autodiagnostico' => "Si quieres ser competitivo es necesario que tus proveedores, partners y trabajadores tengan una visión única y en tiempo real de la cadena de suministros y que compartan información para tomar decisiones efectivas y oportunas. Un sistema de gestión o monitorización que te permita hacer esto te hará avanzar hacia la indutria 4.0"
        ),
        
        'Respuesta 2-2-2-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Me conecto simultáneamente con partners y proveedores y compartimos datos",
          'autodiagnostico' => "Si tienes comunicación en tiempo real con tus proveedores y partners y todos ven la misma realidad de la cadena de suministros, has dado un gran paso en la transformación de tu empresa. Para seguir adelante deberías incorporar un sistema de planificación de recursos que, entre otros beneficios, te ayudará a anticipar cómo será la industria en los próximos años e identificar los cambios necesarios en tu cadena de suministros para mantene tu competitividad en el futuro."
        ),
        
        'Respuesta 2-2-2-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Utilizo un sistema ERP y tecnología en la nube para tener amplia visión del negocio",
          'autodiagnostico' => "Pertences al aventajado grupo de empresas que se acerca a la industria 4.0 mediante la digitalización de su cadena de suministros y la planificación de recursos empresariales. Para alcanzar un nivel de digitalización óptimo, necesitas emplear tecnologías de análisis avanzado de datos que te permitan generar conocimiento e inteligencia empresarial a partir de la información derivada de la cadena de suministros."
        ),
        
        'Respuesta 2-2-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Empleo sistemas de análisis avanzado y machine learning",
          'autodiagnostico' => "Tu cadena de suministro es de una industria 4.0. Tecnologías avanzadas como machine learning e inteligencia artificial te permiten identificar patrones y enfocar el análisis de la información hacia objetivos concretos. Puedes hacer predicciones de consumo y de la demanda de productos en base a distintos factores internos y externos, detectar anomalías y anticipar posibles problemas, lo que ahorra tiempo y dinero. Tu personal cuenta con herramientas para tomar decisiones más inteligentes y has conformado una eficiente red de información con tus proveedores y partners."
        )
      )
    ),
    '2-3-1' => array(
      'enunciado' => "¿Cómo gestiónas tu relación con tus clientes?",
      'respuestas' => array(
        'Respuesta 2-3-1-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Recojo y analizo datos generales de los clientes",
          'autodiagnostico' => "El seguimiento de tus clientes es fundamental para tu negocio, pero debes ir más allá si quieres lograr una transformación digital. El siguiente paso es analizar el comportamiento, gustos y perfiles de tus clientes actuales, consumidores y clientes meta para que puedas ofrecerles nuevos productos y servicios."
        ),
        
        'Respuesta 2-3-1-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Analizo el comportamiento y opiniones de los clientes",
          'autodiagnostico' => "Vas por el camino correcto. La información que podemos obtener de clientes, consumidores y potenciales compradores es la materia prima para desarrollar nuevos productos y servicios. La atención preventa y postventa también son muy importantes para cerrar ventas, fidelizar al cliente y convertirlo en un referente, no dejes de incluirlas en tu hoja de ruta."
        ),
        
        'Respuesta 2-3-1-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Ofrezco servicios postventa y atención a clientes",
          'autodiagnostico' => "Te encuentras muy cerca de alcanzar el escenario ideal para que tu negocio sea más competitivo en el mundo digital. Debes comenzar a centrar tu estrategia empresarial hacia el cliente, con una visión conjunta a lo largo de toda la organización, e involucrarlo en el diseño de tus productos. Para ello, debes contar con herramientas de big data y business intelligence"
        ),
        
        'Respuesta 2-3-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Involucro al cliente en el diseño de mis productos",
          'autodiagnostico' => "Sin duda, te estás beneficiando de las ventajas competitivas que te da una eficiente interrelación con tus clientes. Continua optimizando el conocimiento de tus clientes para predecir necesidades e innovar."
        )
      )
    ),
    '2-3-2' => array(
      'enunciado' => "¿La cultura corporativa incorpora la visión digital?",
      'respuestas' => array(
        'Respuesta 2-3-2-a' => array(
          'puntuacion' => 1,
          'enunciado' => "La visión digital es competencia del departamento de informática/sistemas",
          'autodiagnostico' => "Todas las personas que pertenecen a la empresa deben compartir la misma visión antes de emprender el camino hacia la transformación digital, deben estar abiertas y dispuestas al cambio si se quiere alcanzar una transformación profunda y duradera en el tiempo. Si bien el liderazgo puede estar a cargo del departamento de TIC, la visión digital debe ser compartida por todos los miembros de la organización."
        ),
        
        'Respuesta 2-3-2-b' => array(
          'puntuacion' => 2,
          'enunciado' => "La visión digital está a cargo de los jefes de las áreas funcionales",
          'autodiagnostico' => "Una buena manera de preparar el camino para la transformación digital es que los jefes de área propaguen la visión digital del negocio a lo largo y ancho de sus departamentos. Solo tendrá éxito el proceso de transformación cuando todos los miembros de la organización, vertical y horizontalmente, compartan la misma visión."
        ),
        
        'Respuesta 2-3-2-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Sí, tenemos un plan de formación digital para todos los empleados",
          'autodiagnostico' => "¡Buen trabajo! Un plan de formación es una buena manera de motivar y dar seguridad a los trabajadores, además de demostrarles las ventajas que la transformación digital aportará a sus tareas diarias. El conocimiento digital empodera y es fuente de innovación. El siguiente paso es diseñar políticas de captación, selección, motivación y desarrollo de talento con competencias digitales para que formen parte de tu empresa a largo plazo."
        ),
        
        'Respuesta 2-3-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Sí, la visión digital es prioridad en la captación de talento y la innovación",
          'autodiagnostico' => "¡Enhorabuena! Has incorporado la gestión del talento digital como factor estratégico de tu negocio. No olvides que las políticas, prácticas y herramientas de gestión del talento digital deben ser revisadas y actualizadas con regularidad."
        )
      )
    ),
    
    '3-1-1' => array(
      'enunciado' => "¿Qué importancia tiene la transformación digital en tu negocio?",
      'respuestas' => array(
        'Respuesta 3-1-1-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Sé que aporta beneficios pero aún no la he aplicado a mi negocio",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
        
        'Respuesta 3-1-1-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Es importante y ya me he planteado algunos objetivos concretos",
          'autodiagnostico' => "Estar consciente de los beneficios que la transformación digital puede aportar a tu negocio es importante, pero no dejes pasar mucho tiempo para trazarte un plan que te permita llevar tu negocio hacia la digitalización."
        ),
        
        'Respuesta 3-1-1-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Es prioridad para la dirección de la empresa y dentro del plan estratégico",
          'autodiagnostico' => "Ya has dado el primer paso, y posiblemente el más importante, para transformar tu negocio. Ahora debes pasar de la estrategia a la acción. Una hoja de ruta te ayudará a definir las acciones que debes emprender, los recursos necesarios para ello y las personas que deben liderar el proceso de transformación."
        ),
        
        'Respuesta 3-1-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Tengo objetivos concretos y dedico recursos para ello",
          'autodiagnostico' => "¡Enhorabuena! Eres parte de los que llevan ventaja para hacer su negocio más competitivo. Ten presente que la transformación digital es un proceso continuo y revisa tus objetivos periódicamente."
        )
      )
    ),
    '3-1-2' => array(
      'enunciado' => "Las acciones en el ámbito digital van dirigidas a:",
      'respuestas' => array(
        'Respuesta 3-1-2-a' => array(
          'puntuacion' => 1,
          'enunciado' => "Aumentar la productividad y la eficiencia",
          'autodiagnostico' => "No hay duda de que aumentar la productividad y la eficiencia significa generar mayor rentabilidad del negocio, pero en la economía actual esto no es suficiente para competir en mercados que se hacen cada vez más digitales. La transformación debe darse en todas la áreas del negocio, no solo en la operativa."
        ),
        
        'Respuesta 3-1-2-b' => array(
          'puntuacion' => 2,
          'enunciado' => "Mejorar la productividad, el marketing y las ventas",
          'autodiagnostico' => "Estás concentrando esfuerzos en optimizar procesos operativos, afinar las estrategias de marketing y mejorar la gestión de ventas, pero no olvides que conocer en profundida a tus clientes actuales y potenciales es lo más importante para el propósito de tu negocio. Todas las acciones de la transformación digital deben girar en torno al cliente."
        ),
        
        'Respuesta 3-1-2-c' => array(
          'puntuacion' => 3,
          'enunciado' => "Las anteriores y gestión del cliente",
          'autodiagnostico' => "¡Muy bien! Entiendes que la gestión de clientes es fundamental para tu negocio y que es la principal fuente de información para tomar decisiones acertadas y oportunas. Ahora debes dirigir tus esfuerzos para que toda la organización esté en capacidad de aprovechar al máximo el conocimiento que se puede obtener de todos los sistemas de información en tu empresa."
        ),
        
        'Respuesta 3-1-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Todas las áreas de la organización",
          'autodiagnostico' => "¡Excelente! ya conoces las ventajas de la digitalización, pero recuerda que la transformación digital de un negocio debe ser continua para que pueda seguir innovando, adaptándose a nuevas tendencias y mantener su competitividad."
        )
      )
    ),
    '3-2-1' => array(
      'enunciado' => "¿Qué tecnológías empleas en los procesos de tu negocio?",
      'respuestas' => array(
        'Respuesta 3-2-1-a' => array(
          'puntuacion' => 3,
          'enunciado' => "Aplicaciones de ofimática (Excel, Word, Access, Power Point, etc)",
          'autodiagnostico' => "Las aplicaciones de ofimática facilitan el trabajo diario y permiten agilizar la organización de datos y la elaboración de reportes. Sin embargo, no son suficientes para procesar, integrar y analizar datos de todo el negocio de forma que se pueda generar conocimiento estratégico."
        ),
        
        'Respuesta 3-2-1-b' => array(
          'puntuacion' => 5,
          'enunciado' => "Cada área funcional dispone de un sistema propio",
          'autodiagnostico' => "Es importante que todas las áreas de la organización cuenten con sistemas de información que simplifiquen el trabajo, recopilen datos y generen información relevante para mejorar la toma de decisiones, pero el manejo de esa información de forma integral para generar conocimiento accesible de manera oportuna y a todas las personas adecuadas es lo que otorga una verdadera ventaja competitiva."
        ),
        
        'Respuesta 3-2-1-c' => array(
          'puntuacion' => 8,
          'enunciado' => "Tengo un sistema integrado alimentado por cada área funcional",
          'autodiagnostico' => "Sabes bien que una buena gestión integral de la información y la generación de conocimiento desde y hacia todas las áreas del negocio te aportan una gran ventaja competitiva. Ten en cuenta que el acceso a ese conocimiento desde cualquier lugar, en cualquier momento y para todas las personas adecuadas es igualmente importante."
        ),
        
        'Respuesta 3-2-1-d' => array(
          'puntuacion' => 10,
          'enunciado' => "Contamos con tecnología en la nube y conexión con los stakeholders",
          'autodiagnostico' => "Estás un paso adelante de muchos otros en el sector. Sabes que la generación de conocimiento es una gran ventaja competitiva y que el acceso a ese conocimiento desde cualquier lugar, en cualquier momento y para todas las personas adecuadas es fundamental."
        )
      )
    ),
    '3-2-2' => array(
      'enunciado' => "¿Cuáles de estos canales digitales empleas en tu negocio?",
        'respuestas' => array(
          'Respuesta 3-2-2-a' => array(
            'puntuacion' => 2,
            'enunciado' => "Página web / blog / Redes sociales",
            'autodiagnostico' => "Vas por buen camino, la presencia en internet es una enorme puerta de entrada para tus clientes potenciales y una gran herramienta de comunicación con tus stakeholders, sin mencionar que es una fuente de datos muy valiosa, pero no olvides que existen otras soluciones que te permiten informar, fidelizar e interactuar con el público. Una estrategia de marketing digital es imprescindible en la transformación digital."
          ),
          
          'Respuesta 3-2-2-b' => array(
            'puntuacion' => 3,
            'enunciado' => "Las anteriores y plataformas intermedias (Idealista, Booking, Infojobs, etc.)",
            'autodiagnostico' => "Sabes aprovechar las ventajas y oportunidades de negocio que brinda Internet, pero no olvides que una estrategia de marketing digital te permite, entro otros, promocionar tu marca y tus servicios, captar clientes potenciales, convertirlos en clientes actuales y fidelizarlos para que sean referentes, además de proporcionar una valiosa cantidad de datos para futuras estrategias de mercado."
          ),
          
          'Respuesta 3-2-2-c' => array(
            'puntuacion' => 5,
            'enunciado' => "Herramientas de marketing digital (Ads, Hubspot, Mailchimp, etc.)",
            'autodiagnostico' => "El marketing tradicional se ha extendido al mundo digital y has acertado al tener una estrategia de marketing digital para tu negocio. La tendencia es que la línea entre lo físico y lo virtual desaparece y tú ya estás preparado para desarrollar estrategias de marketing integral."
          ),
          
          'Respuesta 3-2-2-d' => array(
            'puntuacion' => 0,
            'enunciado' => "Ninguno",
            'autodiagnostico' => "Ya sabes lo que dicen: \"si no está en Internet, no existe\". Si tu negocio no tiene presencia en canales digitales, es como si no existiera. Esto debe ser prioridad en tu proyecto  de transformación digital."
          )
        )
    ),
    '3-3-1' => array(
      'enunciado' => "¿Cómo gestiónas tu relación con tus clientes?",
      'respuestas' => array(
        'Respuesta 3-3-1-a' => array(
          'puntuacion' => 2,
          'enunciado' => "Hago seguimiento de mis clientes (llamadas, visitas, solicitudes, etc.)",
          'autodiagnostico' => "El seguimiento de tus clientes es fundamental para tu negocio, pero debes ir más allá si quieres lograr una transformación digital. El siguiente paso es analizar el comportamiento, gustos y perfiles de tus clientes actuales, consumidores y clientes meta para que puedas ofrecerles nuevos servicios y/o productos"
        ),
        
        'Respuesta 3-3-1-b' => array(
          'puntuacion' => 3,
          'enunciado' => "Analizo el comportamiento y opiniones de los clientes para mejorar su experiencia",
          'autodiagnostico' => "Vas por el camino correcto. La información que podemos obtener de clientes, consumidores y potenciales compradores es la materia prima para desarrollar nuevos servicios y productos. La atención preventa y postventa también son muy importantes para cerrar ventas, fidelizar al cliente y convertirlo en un referente, no dejes de incluirlas en tu hoja de ruta."
        ),
        
        'Respuesta 3-3-1-c' => array(
          'puntuacion' => 4,
          'enunciado' => "Ofrezco servicios postventa y atención a clientes",
          'autodiagnostico' => "Te encuentras muy cerca de alcanzar el escenario ideal para que tu negocio sea competitivo en el mundo digital. Debes pasar de la atención personalizada a tus clientes hacia una estrategia de negocio centrada en el cliente con una visión conjunta a lo largo de toda la organización."
        ),
        
        'Respuesta 3-3-1-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Involucro al cliente en el diseño de mis servicios",
          'autodiagnostico' => "Sin duda, te estás beneficiando de las ventajas competitivas que te da una eficiente interrelación con tus clientes. Continua optimizando el conocimiento de tus clientes para predecir necesidades e innovar."
        )
      )
    ),
    '3-3-2' => array(
      'enunciado' => "¿La cultura corporativa incorpora la visión digital?",
      'respuestas' => array(
        'Respuesta 3-3-2-a' => array(
          'puntuacion' => 1,
          'enunciado' => "La visión digital es competencia del departamento de informática/sistemas",
          'autodiagnostico' => "Todas las personas que pertenecen a la empresa deben compartir la misma visión antes de emprender el camino hacia la transformación digital, deben estar abiertas y dispuestas al cambio si se quiere alcanzar una transformación profunda y duradera en el tiempo. Si bien el liderazgo puede estar a cargo del departamento de TIC, la visión digital debe ser compartida por todos los miembros de la organización."
        ),
        
        'Respuesta 3-3-2-b' => array(
          'puntuacion' => 3,
          'enunciado' => "La visión digital está a cargo de los jefes de las áreas funcionales",
          'autodiagnostico' => "Una buena manera de preparar el camino para la transformación digital es que los jefes de área propaguen la visión digital del negocio a lo largo y ancho de sus departamentos. Solo tendrá éxito el proceso de transformación cuando todos los miembros de la organización, vertical y horizontalmente, compartan la misma visión."
        ),
        
        'Respuesta 3-3-2-c' => array(
          'puntuacion' => 4,
          'enunciado' => "Sí, tenemos un plan de formación digital para todos los empleados",
          'autodiagnostico' => "¡Buen trabajo! Un plan de formación es una buena manera de motivar y dar seguridad a los trabajadores, además de demostrarles las ventajas que la transformación digital aportará a sus tareas diarias. El conocimiento digital empodera y es fuente de innovación. El siguiente paso es diseñar políticas de captación, selección, motivación y desarrollo de talento con competencias digitales para que forme parte de tu empresa a largo plazo."
        ),
        
        'Respuesta 3-3-2-d' => array(
          'puntuacion' => 5,
          'enunciado' => "Sí, la visión digital es prioridad en la captación de talento y la innovación",
          'autodiagnostico' => "¡Enhorabuena! Has incorporado la gestión del talento digital como factor estratégico de tu negocio. No olvides que las políticas, prácticas y herramientas de gestión del talento digital deben ser revisadas y actualizadas con regularidad."
        )
      )
    )
  );

  public function getNivel($puntuacion) {
    $nivel = null;
    
    $puntuacion = (is_int($puntuacion) || ctype_digit($puntuacion)) ? (int)$puntuacion : null;
    
    if ($puntuacion != null) {
      if ($puntuacion > 5 && $puntuacion < 15) {
        $nivel['score'] = 1;
        $nivel['leyend'] = "incipiente";
      } elseif ($puntuacion > 14 && $puntuacion < 22) {
        $nivel['score'] = 2;
        $nivel['leyend'] = "emergente";
      } elseif ($puntuacion > 21 && $puntuacion < 30) {
        $nivel['score'] = 3;
        $nivel['leyend'] = "avanzado";
      } else {
        $nivel['score'] = 4;
        $nivel['leyend'] = "innovador";
      }
    }
    return $nivel;
  }

	public function getPuntuacion($responses){

		foreach ($responses as $name => $value) {
	    if (isset($this->preguntas[$name]) && isset($this->preguntas[$name]['respuestas'][$value])) {
        $puntuacion += $this->preguntas[$name]['respuestas'][$value]['puntuacion'];
	    }
		}

		return $puntuacion;
	}

  public function getTipo($responses) {
    if ($responses['sector_description'] == "Proveedor Tecnológico") {
      $response = "CLIENTE_TIPO_PROVEEDOR";
    } else {
      $response = "CLIENTE_TIPO_EMPRESA";
    }
    return $response;
  }
}