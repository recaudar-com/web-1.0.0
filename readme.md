<p align="center">🚀</p>

# Recaudar.com

Plataforma web.

## Comenzando 🚀

_Crear una copia con Git._

```
git clone https://github.com/recaudar-com recaudar.com
```

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Git y un ambiente de desarrollo para laravel, con MacOS puede ser laravel Valet y para Windows Laragon que son sencillos de instalar y para ambas plataformas y tambien Linux pueden usar Homestead_

### Instalación 🔧

_Sigue los siguientes pasos para instalar el proyecto_

_Ingresa al directorio del proyecto_

```
cd recaudar.com
```

_Copia el archivo .env.example y nombralo como .env_

```
cp .env.example .env
```

_Edita el archivo .env cambiando los valores por los valores de tu ambiente de desarrollo usar solo un comando segun el editor deseado_

```
nano .env //linux systems
code .env //Visual Studio Code
subl .env //Sublime Text
atom .env //Atom
```

_Ahora ingresa a la url recaudar.com.test si usas valet o laragon y si usas Homestead la ip virtual del servidor de desarrollo_

## Ejecutando las pruebas ⚙️

_Usaremos PHPUnit para el desarrollo de pruebas de integracion y pruebas unitarias, dentro de la raiz del proyecto._

```
vendor/bin/phpunit
```

### Pruebas end-to-end 🔩

_En esta fase del proyecto no estamos usando pruebas end to end pero puedes descargar (Laravel Dusk)[https://laravel.com/docs/5.8/dusk]  para realizar algunas pruebas_

```
$ composer require laravel/dusk
```

### Pruebas de estilo de codificación ⌨️

_Para tomar en cuenta los PSR como guia de codificacion tenemos el PSR-2 y PSR-4 puedes descargar php code sniffer para tu editor de texto, (Visual Studio Code)[https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs], (sublime text) [https://packagecontrol.io/packages/Phpcs], (Atom)[https://atom.io/packages/linter-phpcs] y te ayudara a mantener un standard y tambien usar codeblocks segun el estilo de comentarios de los PSR, puedes ver (la guia de colaboracion de Laravel)[https://laravel.com/docs/5.8/contributions#coding-style] para documentacion, ver un ejemplo._

```
/**
 * Register a binding with the container.
 *
 * @param  string|array  $abstract
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 * @throws \Exception
 */
```

## Deployment 📦

_Recordar que con el deploy es necesario que el commit este en la rama master y usar git para actualizar el servidor._

```
git fetch --all
git reset --hard
```


## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Laravel](https://laravel.com/docs/5.8) - El framework web usado para el backend
* [Composer](https://getcomposer.org/) - Manejador de dependencias
* [Vue](https://vuejs.org/) - El framework web usado para el frontend

## Contribuyendo 🖇️

Por favor lee el [CONTRIBUTING.md](https://gist.github.com/villanuevand/xxxxxx) para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

## Wiki 📖

Puedes encontrar más ddocumentación de este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/tu/proyecto/tags).

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Ariel Salvador** - *Trabajo Inicial* - [arielsalvador](https://github.com/ArielSalvadorDev)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/your/project/contributors) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia [MIT license](https://opensource.org/licenses/MIT).
