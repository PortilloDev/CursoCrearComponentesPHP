<h1>Curso de creación de componentes para PHP y Laravel </h1>

<hr>

<p> Recursos adquiridos </p>
<div>
    <li>Escribir pruebas unitarias con PHPUnit.</li>
    <li>Creación de componentes y su publicación en GitHub y Packagist</li>
    <li>Afianzar dominio de la programación orientada a objetos</li>
    <li>Inyección de dependencias</li>
    <li>Contenedor de inyección de dependencias</li>
</div>

<hr>

<div>
    <h3> WIKI del proyecto </h3>
     <div>
        <h4>Contenedor de inyección de dependencias</h4>
        <p>
            Para reducir la cantidad de código que necesitamos cuando implementamos el patrón de inyección de dependencias, debemos crear otro objeto llamado contenedor de inyección de dependencias, el cuál será un objeto que conocerá cómo instanciar y «ensamblar» otros objetos.
        </p>
        <p>
           Los contenedores de inyección de dependencias se crean como objetos que conocen cómo instanciar y configurar otros objetos, simplificando y desacoplando el código, ayudando a pasar de estructuras más complejas a un objeto que encapsula cómo funciona los constructores de cada uno de los otros objetos y sus dependencias, permitiendo de esta manera trabajar con ellos sin mayor problema.
        </p>
    </div>
     <div>
        <h4>Inyección de dependencias</h4>
        <p>
           Con el patrón de inyección de dependencias, los objetos, de los cuales una clase depende, son inyectados a través del constructor o de métodos setters.
           Con este patrón se intenta crear un código más desacoplado y mejor mantenible en el tiempo.
        </p>
    </div>
         <div>
        <h4>Patrón de diseño Singleton</h4>
        <p>
           Los patrones de diseño se utilizan con la finalidad de estandarizar la forma en que desarrollamos el código ofreciendo soluciones reusables. Es importante señalar que el uso e implementación de un patrón de diseño no es obligatorio, pero en algunos casos es recomendado como parte de las buenas prácticas.
        </p>
        <p>
           Singleton, su intención consiste en garantizar que una clase sólo tenga una instancia y proporcionar un punto de acceso global a ella.
        </p>
        <p>
            Al implementar en una clase el patrón Singleton su constructor debe estar privado y acceder a él por medio de un método público.
        </p>
    </div>
    <div>
        <h4>Reflection</h4>
        <p>
            PHP viene con una API de reflexión completa que añade la capacidad para realizar ingeniería inversa de clases, interfaces, funciones, métodos y extensiones. Además, la API de reflexión ofrece varias formas de obtener comentarios de documentación de funciones, clases y métodos.
        </p>
    </div>
     <div>
        <h4>Ingeniería inversa</h4>
        <p>
            La ingeniería inversa o retroingeniería es el proceso llevado a cabo con el objetivo de obtener información o un diseño a partir de un producto, con el fin de determinar cuáles son sus componentes y de qué manera interactúan entre sí y cuál fue el proceso de fabricación.
        </p>
    </div>
    <div>
        <h4>Clases o métodos staticos</h4>
        <p>
            Esto se debe a que al crear una propiedad o método de esa manera no se necesita instanciar la clase para poder usarlos.  Es decir, las propiedades y método declarados como «static» están asociados a una clase en lugar de a una instancia de la clase (objeto).
        </p>
        <p>
            Esto trae como consecuencia el alto acoplamiento de las clases
        </p>
    </div>
    <div>
        <h4>Interfaz</h4>
        <p>
            Una Interfaz establece qué debe hacer la clase que la implementa
        </p>
        <p>
           En la programación orientada a objetos las interfaces nos permiten crear objetos aún más flexibles, dado que si un controlador necesita un repositorio, podemos solicitar una interface en vez de una implementación en concreta
        </p>
    </div>
      <div>
        <h4>Facade </h4>
        <p>
           En términos generales una facade es una forma fácil de usar algo que por dentro es más complicado, como una fachada
        </p>
        <p>
          Esto de alguna manera permite encapsular código , haciendo que sea más sencillo pero manteniéndolo reusable y desacoplado. Entonces un Facade es una clase que contiene métodos estáticos, los cuales se encargarán de realizar los llamados a métodos y/o las acciones relacionadas con una clase que se está implementando (por ejemplo, la creación de la instancia del contenedor de inyección de dependencias), permitiendo así presentar una interfaz sencilla para el uso de la clase, y de esta forma tener una arquitectura de código robusta pero fácil de usar.
        </p>
        <p>
          Tambien es un tipo de patrón de diseño estructural. Viene motivado por la necesidad de estructurar un entorno de programación y reducir su complejidad con la división en subsistemas, minimizando las comunicaciones y dependencias entre estos.
        </p>
        <h4>Consideraciones para su aplicación </h4>
        <p>
        Cuando se necesite proporcionar una interfaz simple para un subsistema complejo, o cuando se quiera estructurar varios subsistemas en capas, ya que las fachadas serían el punto de entrada a cada nivel. Otro escenario proclive para su aplicación surge de la necesidad de desacoplar un sistema de sus clientes y de otros subsistemas, haciéndolo más independiente, portable y reutilizable (esto es, reduciendo dependencias entre los subsistemas y los clientes).
        </p>
    </div>
      <div>
        <h4>class_alias </h4>
        <p>
          Crear alias para una clase
        </p>
        <p>
          Crea un alias dado por alias basado en la clase original definida por el usuario. La clase apodada es exactamente la misma que la clase original.
        </p>
        <p>
          Con la función class_alias podemos simplificar aún más las interfaces de nuestro código,  pues de esta manera no se necesitaría importar la clase Facade en cada momento que se requiera usar, sino que definiendo un alias en bootstrap/start.php ya tendríamos dicho Facade disponible en toda la aplicación, puesto que al no importar la clase, PHP automáticamente busca un alias de la clase, el cual hemos definido en el archivo.
        </p>
    </div>
    <div>
        <h4>__callStatic  </h4>
        <p>
           Es un método mágico de PHP que se llama automáticamente cada vez que se intenta llamar a un método estático que no exista dentro la clase; el cual recibe como parámetros el nombre del método que se está llamando y un array con los argumentos que se están pasando a través del método
        </p>
    </div>
      <div>
        <h4>call_user_func_array  </h4>
        <p>
           Es en realidad para llamar a un método de un objeto, entonces el primer argumento es un array con dos elementos: el objeto y el método del objeto que se está llamando y como segundo argumento un array con los parámetros de dicho método
        </p>
        <p>
          Llamar a una llamada de retorno con un array de parámetros
        </p>
        <p>
          Retorna el valor devuelto por la llamada de retorno, o false en caso de error.
        </p>
    </div>
    <hr>
    <h4>Componentes Externos </h4>
    <hr>
    <div>
        <h4>Mockery</h4>
        <p>
           Mockery es un marco de objeto simulado PHP simple pero flexible para usar en pruebas unitarias con PHPUnit, PHPSpec o cualquier otro marco de prueba. Su objetivo principal es ofrecer un marco doble de prueba con una API sucinta capaz de definir claramente todas las posibles operaciones e interacciones de objetos utilizando un lenguaje específico de dominio (DSL) legible por humanos. Diseñado como una alternativa a la biblioteca phpunit-mock-objects de PHPUnit, Mockery es fácil de integrar con PHPUnit y puede operar junto con phpunit-mock-objects sin que el mundo termine.
        </p>
        <p>
            Componente de instalacion:
           <code> composer require mockery/mockery --dev  </code>
        </p>
    </div>
    <div>
        <h4>whoops</h4>
        <p>
           whoops es un marco de manejo de errores para PHP
        </p>
        <p>
            <ul dir="auto">
                <li>Manejo de errores flexible y basado en pilas</li>
                <li>Biblioteca independiente sin (actualmente) dependencias requeridas</li>
                <li>API simple para manejar excepciones, marcos de rastreo y sus datos</li>
                <li>Incluye una página de error bastante radical para sus proyectos de aplicaciones web</li>
                <li>Incluye la capacidad de abrir archivos referenciados directamente en su editor e IDE</li>
                <li>Incluye controladores para diferentes formatos de respuesta (JSON, XML, SOAP)</li>
                <li>Fácil de ampliar e integrar con bibliotecas existentes</li>
                <li>Base de código limpia, bien estructurada y probada</li>
            </ul>
        </p>
        <p>
            Componente de instalacion:
           <code> composer require filp/whoops  </code>
        </p>
    </div>
     <div>
        <h4>Stub </h4>
        <p>
           Stub es un tipo de clases que emula el comportamiento de otra clase que podemos emplear para avanzar en la construcción de nuestro sistema y no tener que esperar que esa clase esté implementada
        </p>
        <p>
           En la programación orientada a objetos las interfaces nos permiten crear objetos aún más flexibles, dado que si un controlador necesita un repositorio, podemos solicitar una interface en vez de una implementación en concreta
        </p>
    </div>
</div>

<hr>


<div>
 <h4>Comando /atajos / funciones PHP </h4>
    <div>
        <ul>Crear alias para ejecutar tests
            <li>alias test=vendor/bin/phpunit</li>
        </ul>
    </div>
    <div>
        <ul>ob_start()
            <li>Activa el almacenamiento en búfer de la salida.</li>
            <p>Mientras dicho almacenamiento esté activo, no se enviará ninguna salida desde el script (aparte de cabeceras); en su lugar la salida se almacenará en un búfer interno.</p>
        </ul>
        <ul>ob_get_clean()
            <li>Obtiene el contenido del búfer actual y elimina el búfer de salida actual.</li>
            <p>El búfer de salida debe estar iniciado por ob_start() </p>
            <p>Devuelve el contenido del búfer de salida y finaliza el almacenamiento en el mismo. Si el almacenamiento en el búfer de salida no está activo, entonces devuelve false. </p>
        </ul>
        <ul>extract()
            <li> Importar variables a la tabla de símbolos actual desde un array.</li>
            <p>Comprueba cada clave para ver si tiene un nombre de variable válido. También comprueba las colisiones con las variables existentes en la tabla de símbolos.</p>
        </ul>
    </div>
</div>
<div>
    <h4>Enlaces de interes </h4>
    <div>
        <li> <a href="https://www.php.net/manual" target="_blank"></a> Documentación PHP => https://www.php.net/manual</li>
        <li><a href="https://notasweb.me" target="_blank"></a> Notas Web => https://notasweb.me</li>
    </div>
</div>