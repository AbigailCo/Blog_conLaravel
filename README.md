
<body>

<h1>My Blog</h1>

<h2>Descripción breve</h2>
<p>"My Blog" es una aplicación que permite a cada usuario registrado crear su propio blog personal. Los usuarios pueden crear publicaciones con diferentes categorías, agregar títulos y contenido a sus publicaciones. Los usuarios autenticados pueden ver sus propias publicaciones en "My Posts" y ver todas las publicaciones en la sección "Home", donde se muestran las publicaciones de diferentes autores. Además, los usuarios pueden editar sus publicaciones, su perfil (nombre, correo electrónico y foto de perfil), y dar "Me gusta" a las publicaciones de otros autores y a las propias.</p>

<h2>Instalación</h2>
<p>Para instalar y configurar el proyecto, sigue estos pasos:</p>
<ol>
    <li>Clona el repositorio:
        <pre><code>git clone https://github.com/AbigailCo/myblog</code></pre>
    </li>
    <li>Instala las dependencias de Composer:
        <pre><code>composer install</code></pre>
    </li>
    <li>Instala las dependencias de npm:
        <pre><code>npm install</code></pre>
    </li>
    <li>Configura el archivo <code>.env</code>:
        <ul>
            <li>Copia el archivo <code>.env.example</code> y renómbralo a <code>.env</code>.</li>
            <li>Actualiza las configuraciones necesarias para la conexión a la base de datos.</li>
        </ul>
    </li>
    <li>Crea una base de datos con el nombre de tu proyecto.</li>
    <li>Ejecuta las migraciones y los seeders para crear y poblar las tablas en la base de datos:
        <pre><code>php artisan migrate:fresh
php artisan db:seed</code></pre>
    </li>
    <li>Inicia el servidor:
        <pre><code>php artisan serve</code></pre>
        Asegúrate de tener encendido Apache y MySQL. La aplicación correrá en <code>localhost:8000</code>.
    </li>
</ol>

<h2>Uso</h2>
<p>Una vez que la aplicación esté en funcionamiento, puedes:</p>
<ul>
    <li><strong>Registrarte como usuario</strong>: Completa el formulario de registro respetando sus rectrinciones</li>
    <li><strong>Crear publicaciones</strong>: Añade títulos y contenido a tus publicaciones, y asígnales categorías.</li>
    <li><strong>Ver tus publicaciones</strong>: Navega a "My Posts" para ver las publicaciones que has creado.</li>
    <li><strong>Explorar publicaciones</strong>: En la sección "Home", puedes ver todas las publicaciones de diferentes autores.</li>
    <li><strong>Editar publicaciones y perfil</strong>: Actualiza tus publicaciones y la información de tu perfil.</li>
    <li><strong>Dar "Me gusta"</strong>: Interactúa con las publicaciones dando "Me gusta".</li>
</ul>


<h2>Tecnologías utilizadas</h2>
<ul>
    <li>PHP (Laravel)</li>
    <li>Composer</li>
    <li>npm</li>
    <li>MySQL</li>
</ul>

<h2>Autores</h2>
<p>
<a href="https://github.com/AbigailCo">Abigail Corrales</a>.</p>
<a href="https://github.com/Santiag0Vidal">Santiago Vidal</a>.</p>
<a href="https://github.com/melaniquininires">Melani Quiñiñires</a>.</p>
<a href="https://github.com/BenitezFranco">Franco Benitez</a>.</p>

</body>
</html>
