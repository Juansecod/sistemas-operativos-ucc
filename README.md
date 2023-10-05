# Sistemas Operativos

En esta documentación, se proporciona una guía detallada sobre las carpetas esenciales, comandos fundamentales y otros aspectos cruciales para comprender y administrar eficazmente un entorno Linux. Desde las rutas de directorios clave como `/bin`, `/etc` y `/var`, hasta comandos esenciales como `ls`, `cd` y `sudo`, aquí encontrarás recursos valiosos que te ayudarán a navegar, configurar y mantener tu sistema Linux de manera eficiente. Ya sea que estés comenzando con Linux o busques información específica para tareas de administración, esta documentación está diseñada para servir como una referencia útil en tu viaje con sistemas operativos basados en Linux.

## ¿Qué es un Archivo Plano?

Un archivo plano, también conocido como archivo de texto sin formato, es un tipo de archivo que no contiene ninguna estructura de formato específica o extensión. A diferencia de los archivos con formato, como los documentos de Microsoft Word o las hojas de cálculo de Excel, los archivos planos almacenan datos en un formato simple y legible por humanos.

Un archivo plano podría contener información de texto sin formato, como una lista de nombres o números:

```txt
Nombre 1
Nombre 2
Nombre 3
```

### Crear y Editar Archivos Planos en Linux

Para crear un archivo plano en Linux desde la terminal, puedes utilizar el comando touch seguido del nombre del archivo que deseas crear:

```sh
touch nombre_archivo
```

Para editar un archivo plano, puedes utilizar el editor de texto Nano, que es una herramienta de edición de texto simple y poderosa. Para abrir un archivo con Nano, utiliza el siguiente comando:

```sh
nano nombre_archivo
```

Dentro de Nano, puedes editar el contenido del archivo, guardar los cambios y salir del editor utilizando combinaciones de teclas específicas. Asegúrate de consultar la documentación de Nano o utilizar la función de ayuda para obtener más información sobre su uso.

**¡Los archivos planos son una forma común de almacenar y manipular datos en sistemas Linux, y son especialmente útiles para configuraciones de texto simples y datos tabulares!**

## Carpetas Relevantes en Linux

Dentro del ecosistema de Linux, es esencial comprender las carpetas clave que desempeñan un papel fundamental en el funcionamiento del sistema. A continuación, se presentan algunas de las carpetas más relevantes:

1. **`/bin`**: Aquí se encuentran los ejecutables esenciales del sistema. Contiene comandos y utilidades fundamentales para el funcionamiento del sistema operativo.

2. **`/etc`**: Esta carpeta almacena archivos de configuración de programas y servicios. Las configuraciones cruciales para el sistema se encuentran aquí, lo que permite personalizar el comportamiento de Linux.

3. **`/var`**: En esta carpeta se almacenan archivos de programas en ejecución. Contiene datos que pueden cambiar durante la operación del sistema, como registros y archivos temporales.

4. **`/boot`**: Aquí se encuentran los archivos de inicio necesarios para que el sistema operativo arranque. Estos archivos son esenciales para el proceso de inicio del sistema.

5. **`/home`**: Esta carpeta alberga las carpetas de usuario para todos los usuarios no privilegiados. Cada usuario tiene su propio directorio de inicio dentro de esta carpeta.

6. **`/root`**: Esta es la carpeta del usuario administrador o superusuario (root). El superusuario tiene control total sobre el sistema y su directorio de inicio se encuentra aquí.

7. **`/media`**: Cuando se conecta una unidad USB u otro dispositivo de medios extraíbles, Linux monta automáticamente el dispositivo y lo hace accesible en esta carpeta.

8. **`/etc/group`**: Este archivo plano contiene información sobre los grupos de usuarios en el sistema, como los nombres de los grupos y sus miembros.

9. **`/etc/shadow`**: Este archivo plano almacena información de contraseñas en forma cifrada para los usuarios del sistema. Es altamente sensible y está destinado a garantizar la seguridad de las contraseñas.

    > **Nota:** *Solo el super usuario tiene acceso a los archivos group y shadow*

10. **`/proc/cpuinfo`**: Este archivo plano proporciona información detallada sobre la CPU del sistema, incluyendo su modelo y capacidades.

Estas carpetas son fundamentales para cualquier administrador de sistemas o usuario de Linux, ya que contienen información y recursos esenciales para el funcionamiento y la configuración del sistema. Es importante comprender su estructura y cómo se utilizan para aprovechar al máximo el sistema operativo Linux.

## Comandos Básicos en Linux

Los comandos en Linux son la columna vertebral de la interacción con el sistema operativo. A través de la línea de comandos, los usuarios pueden ejecutar una amplia variedad de tareas, desde navegar por el sistema de archivos y gestionar archivos hasta configurar servicios y administrar usuarios. Los comandos en Linux suelen ser herramientas poderosas y flexibles que ofrecen un alto grado de control sobre el sistema. Aprender a utilizar comandos te permitirá aprovechar al máximo tu sistema Linux y realizar una amplia variedad de tareas de manera eficiente.

### Comandos de Navegación y Manipulación de Archivos

- `cd nombre_carpeta`: Permite acceder a una carpeta específica.

- `ls`: Muestra una lista de los archivos en el directorio actual. También se puede especificar una ruta para listar archivos en ubicaciones específicas.

- `mkdir nombre_carpeta`: Crea una nueva carpeta en la ruta actual.

- `nano nombre_archivo`: Abre un archivo con el editor de texto Nano.

- `cp nombre_archivo carpeta_destino/nombre_copia`: Copia un archivo a una ubicación específica y permite renombrarlo si es necesario. Si solo deseas hacer una copia en la carpeta actual, omite el nombre de la copia.

- `mv nombre_archivo carpeta_destino/nuevo_nombre`: Mueve o renombra un archivo. Omitir la carpeta de destino o el nuevo nombre permite realizar acciones específicas.

- `rm nombre_archivo`: Elimina un archivo.

- `rmdir nombre_directorio` || `rm -r nombre_directorio`: Remueve un directorio. Nota: `rmdir` solo funciona si el directorio está vacío.

- `pwd`: Imprime el directorio actual.

### Comandos de Variables de Entorno y Red

- `env`: Muestra las variables de entorno del sistema.

- `printenv`: Muestra las variables de entorno, ordenándolas alfabéticamente.

- `grep "patrón" nombre_archivo`: Busca patrones específicos en un archivo y muestra las líneas que coinciden.

- `grep -i "patrón" nombre_archivo`: Realiza una búsqueda sin distinción entre mayúsculas y minúsculas.

- `grep -n "patrón" nombre_archivo`: Muestra las líneas coincidentes junto con su número de línea.

- `hostname -i`: Muestra la dirección IP de la máquina en una red local.

- `ifconfig`: Ofrece información detallada sobre la configuración de red de la máquina, incluyendo direcciones IP y más.

    > **Nota**: Para utilizar el comando `ifconfig`, es necesario contar con el paquete `net-tools` instalado en su sistema. Para obtener instrucciones sobre cómo instalar paquetes adicionales, consulte la sección [paquetes](#paquetes) más adelante en este documento.

### Comandos de Gestión de Servicios

- `systemctl status nombre_servicio`: Muestra información sobre el estado de un servicio del sistema.

- `systemctl restart nombre_servicio`: Permite reiniciar un servicio del sistema.

### Comandos de Apagado

- `poweroff`: Apaga la máquina desde la terminal.

Esta guía proporciona una descripción general de comandos básicos en Linux y su funcionalidad. A medida que explores y aprendas estos comandos, podrás realizar una amplia variedad de tareas en tu sistema Linux de manera eficiente.

## Usuarios en linux
<!--
Existen 3 tipos: Usuarios comunes, usuarios de sistemas y usuarios root
- Los comunes son los que uno crear, no pueden instalar software. Se encuentran en la carpeta /home. Alli se encuentran el nombre de todos los usuarios comunes
- Los de sistemas son usuarios creados por los servicios, por ejemplo apache crea su propio usuario apache.
- El usuario root es un tipo de superusuario, que permite el control total del sistema. Tiene su propia carpeta en el directorio raiz.

En ubunto el primer usuario que crea es un usuario sudo, que le va permitir ejecutar opciones de superusuario

Linux es muy restrictivo con respecto a la seguridad, en donde los usuarios solo tienen accesos a sus propios archivos. Por ejemplo el usuario apache no tiene acceso a los archivos que puede tener un usuario comun

Para ver todos los usuarios creados se usa nano /etc/shadow. Un usuario comun no tiene acceso a este archivo. Las claves de los usuarios estan encriptadas pero pueden ser decifradas.

Linux considera al superusuario alguien que no necesita confirmacion, por  lo que se debe de tener cuidado con lo que se hace

Comandos de usuario en linux:
whoami - Muestra el usuario que estoy utilizando
su - Me permite acceder al usuario root
sudo - Permite al usuario sudo ejecutar comandos de superusuario
sudo su - Me permite acceder al usuario root del sistema
adduser - Permite crear un usuario
su nombre_usuario - Permite al superusuario identificarse como otro usuario
exit - Permite al superusuario salir del usuario con el que esta identificado
passwd nombre_usuario - Permite actualizar la contraseña de un usuario. Si no le paso el nombre cambia la                                 contraseña del usuario sobre el que estoy accediendo
deluser nombre_usuario - Elimina un usuario 
deluser --remove-home nombre_usuario - Elimina un usuario junto a su directorio en la capeta home

Permisos de usuario:
ls -l - Da una lista detallada de la metadata de los archivos, en donde la tercera y la cuarta columna son el usuario y el grupo.

-rw-r--r--  El primer caracter es si es archivo o directorio(-:archivo d:directorio). Los tres siguientes es los permisos del usuario. Los tres siguientes el grupo. Y los ultimos tres al publico en general. 

Nota: Los tres caracteres estan organizados de esta manera:
        r - read
        w - write
        x - execute

chmod 000 archivo - Permite cambiar los permisos de un archivo. El primer digito es del usuario, el segundo del grupo y el tercero del publico en general

En los tres caracteres puedo asignar los permisos asi:
0 deja sin permisos
1 ejecucion
2 escritura
4 lectura
Ya si le quiero asignar varios permisos le sumo los digitos de los que deseo

chown nombre_dueño.nombre_grupo archivo - Cambia el propietario y grupo de un archivo
chown :nombre_grupo archivo -  Pemite cambiar solo el grupo de un archivo
------------------------------------------------------------------------------------------------------------------

## Paquetes

Un repositorio es una tienda de aplicaciones, que nos permite instalar el software y ya esta comprobado que esta testeado y es compatible con èl. 

Los paquetes son similares a los .exe de windows, que nos permite instalar un software de manera externa. Los nombres de paquetes nunca tienen espacio

Comandos para instalar software:
apt - Es el comando para instalar paqueteria en todo SO basado en debian
apt update - Actualiza el listado de la tienda del software que tiene disponible
apt-cache search palabra_clave - Permite buscar software atraves de la terminal
apt-get install nombre_paquete - Permite instalar un paquete
add-apt-repository nombre_paquete - Permite agregar un paquete al listado
dpkg -i nombre_archivo - Permite descargar e instalar un software que no se encuentra empaquetado en la tienda
------------------------------------------------------------------------------------------------------------------
Servicios en linux
Es diferente instalar un programa a un servicio. Un servicio tambien es un programa que se instala, con la caracteristica es que ofrece un servicio en la red.

Existen varios servicios para un servicio web, algunos son apache o nginx

/var/www/html -> Es donde normalmente apache guarda los archivos html

apt-get install nombre_servicio - Permite instalar el servicio en la maquina
ifconfig - Me permite revisar la informacion de mi sistema en la red
apt-get install openshh-server -  Instala un servicio para conectarme remotamente entre equipos
ssh nombre_usuario@ip - Comando para conectarse a otra maquina de manera remota
who - Me permite consultar que equipos estan conectados a mi sistema
top - Me permite mostrar todos los procesos del sistema, es como el administrador de tareas
ps aux - Me lista todos los procesos que estan activos en el momento
ps -aux |grep nombre_proceso - Me filtra la lista del proceso por el nombre_proceso
kill PID_proceso - Mata un unico proceso, puede estar separados por espacio
killall -e nombre_proceso - Mata todos los procesos de un programa con el nombre
service nombre_servicio status - Me permite consultar el estado de un servicio
service nombre_servicio start - Me permite iniciar un servicio
service nombre_servicio stop - Me permite apagar un servicio
scp archivo nombre_usuario@ip:ruta_destino - Copiar por ssh un archivo de mi computadora, tener encuenta los                                                   privilegios del usuario
scp carpeta nombre_usuario@ip:ruta_destino - Copiar por ssh una carpeta de mi computadora, tener encuenta los                                                  privilegios del usuario
scp nombre_usuario@ip:ruta_archivo ruda_destino - Copiar por ssh un archivo del servidor, tener encuenta los                                                        privilegios del usuario
scp carpeta nombre_usuario@ip:ruta_destino - Copiar por ssh una carpeta del servidor, tener encuenta los                                                       privilegios del usuario

------------------------------------------------------------------------------------------------------------------
Creacion de scripts

El script es un archivo plano que no tiene formato, pero tambien es comun encontrarlo con formato como el .sh.
Dentro del script escribo el comando que voy a utilizar
command > archivo -> Guarda la informacion de un comando en un archivo, pero reemplaza el contenido del archivo
command >> archivo -> Guarda la informacion de un comando en un archivo sin sobreescribirlo
echo "Message" -> Imprime el mensaje en la consola, es util para los scripts que guardan informacion en un archivo
free -m -> Me muestra la informacion de la memoria ram y el espacio libre que tiene en megas
cat file -> Muestra lo que hay dentro del archivo en terminal
cron -> Es un servicio que me permite ejecutar scripts en determinado momento
crontab -l -> Me muestra la informacion del cron
crontab -e -> Me permite editar los scripts que va a ejecutar 

El formato que usa el crontab mientras se edita es el siguiente: min hora dia_mes mes dia_semana comando
Ejemplo: * * * * * echo "Comando con cron" -> Ejecuta todo el tiempo el comando
         30 3,15 1,15 * * echo "Comando con cron" -> Ejecuta los dias 1-15 de cada mes a las 3:30 y 15:30

Nota: Los dias de la semana empieza con 0 y es el domingo. -->
