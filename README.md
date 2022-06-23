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