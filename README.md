# Sistemas Operativos

En esta documentación, se proporciona una guía detallada sobre las carpetas esenciales, comandos fundamentales y otros aspectos cruciales para comprender y administrar eficazmente un entorno Linux. Desde las rutas de directorios clave como `/bin`, `/etc` y `/var`, hasta comandos esenciales como `ls`, `cd` y `sudo`, aquí encontrarás recursos valiosos que te ayudarán a navegar, configurar y mantener tu sistema Linux de manera eficiente. Ya sea que estés comenzando con Linux o busques información específica para tareas de administración, esta documentación está diseñada para servir como una referencia útil en tu viaje con sistemas operativos basados en Linux.

## Indice

- [¿Qué es un Archivo Plano?](#archivos-planos)
  - [Crear y Editar Archivos Planos en Linux](#crear-y-editar-archivos-planos-en-linux)

- [Carpetas Relevantes en Linux](#carpetas-relevantes-en-linux)
- [Comandos Básicos en Linux](#comandos-básicos-en-linux)
  - [Comandos de Navegación y Manipulación de Archivos](#comandos-de-navegación-y-manipulación-de-archivos)
  - [Comandos de Variables de Entorno y Red](#comandos-de-variables-de-entorno-y-red)
  - [Comandos de Gestión de Servicios](#comandos-de-gestión-de-servicios)
  - [Comandos de Apagado](#comandos-de-apagado)
- [Usuarios en Linux](#usuarios-en-linux)
  - [Comandos de Usuario](#comandos-de-usuario-en-linux)
  - [Permisos de Usuario](#permisos-de-usuario)
- [Paquetes](#paquetes)
  - [Comandos para instalar software](#comandos-para-instalar-software)
- [Servicios en Linux](#servicios-en-linux)

## Archivos Planos

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

- **`cd nombre_carpeta`:** Permite acceder a una carpeta específica.

- **`ls`:** Muestra una lista de los archivos en el directorio actual. También se puede especificar una ruta para listar archivos en ubicaciones específicas.

- **`mkdir nombre_carpeta`:** Crea una nueva carpeta en la ruta actual.

- **`nano nombre_archivo`:** Abre un archivo con el editor de texto Nano.

- **`cp nombre_archivo carpeta_destino/nombre_copia`:** Copia un archivo a una ubicación específica y permite renombrarlo si es necesario. Si solo deseas hacer una copia en la carpeta actual, omite el nombre de la copia.

- **`mv nombre_archivo carpeta_destino/nuevo_nombre`:** Mueve o renombra un archivo. Omitir la carpeta de destino o el nuevo nombre permite realizar acciones específicas.

- **`rm nombre_archivo`:** Elimina un archivo.

- **`rmdir nombre_directorio` || `rm -r nombre_directorio`:** Remueve un directorio.
  > **Nota:** `rmdir` solo funciona si el directorio está vacío.

- **`pwd`:** Imprime el directorio actual.

### Comandos de Variables de Entorno y Red

- **`env`:** Muestra las variables de entorno del sistema.

- **`printenv`:** Muestra las variables de entorno, ordenándolas alfabéticamente.

- **`grep "patrón" nombre_archivo`:** Busca patrones específicos en un archivo y muestra las líneas que coinciden.

- **`grep -i "patrón" nombre_archivo`:** Realiza una búsqueda sin distinción entre mayúsculas y minúsculas.

- **`grep -n "patrón" nombre_archivo`:** Muestra las líneas coincidentes junto con su número de línea.

- **`hostname -i`:** Muestra la dirección IP de la máquina en una red local.

- **`ifconfig`:** Ofrece información detallada sobre la configuración de red de la máquina, incluyendo direcciones IP y más.

    > **Nota**: Para utilizar el comando `ifconfig`, es necesario contar con el paquete `net-tools` instalado en su sistema. Para obtener instrucciones sobre cómo instalar paquetes adicionales, consulte la sección [paquetes](#paquetes) más adelante en este documento.

### Comandos de Gestión de Servicios

- **`systemctl status nombre_servicio`:** Muestra información sobre el estado de un servicio del sistema.

- **`systemctl restart nombre_servicio`:** Permite reiniciar un servicio del sistema.

### Comandos de Apagado

- **`poweroff`:** Apaga la máquina desde la terminal.

- **`reboot`:** Reinicia la maquina desde la terminal.

Esta guía proporciona una descripción general de comandos básicos en Linux y su funcionalidad. A medida que explores y aprendas estos comandos, podrás realizar una amplia variedad de tareas en tu sistema Linux de manera eficiente.

## Usuarios en Linux

En el entorno de Linux, existen tres tipos principales de usuarios: usuarios **`comunes`**, usuarios de **`sistemas`** y el usuario **`root`**. Los usuarios **`comunes`** son aquellos que creamos y tienen acceso limitado para instalar software. Sus perfiles se encuentran en la carpeta `/home` y allí reside el conjunto de nombres de todos los usuarios comunes. Por otro lado, los usuarios de **`sistemas`** son generados por los servicios, como el usuario *"apache"* creado por el servidor web Apache. Finalmente, el usuario **`root`** es una categoría especial, tambien conocido como el superusuario, posee control total del sistema y tiene su propio directorio en el directorio raíz(`/`) esta es la ruta del directorio raiz en linux.

Al configurar Ubuntu, el primer usuario que creamos se asocia con privilegios "sudo", lo que le permite ejecutar comandos como superusuario. Linux se caracteriza por su enfoque riguroso en la seguridad, donde cada usuario tiene acceso restringido solo a sus propios archivos. Por ejemplo, el usuario *"apache"* no puede acceder a los archivos de un usuario común.

Para visualizar una lista de todos los usuarios en el sistema, se puede utilizar el comando `nano /etc/shadow`. Sin embargo, un usuario común no tiene acceso a este archivo, ya que las contraseñas de los usuarios se encuentran cifradas, aunque técnicamente pueden ser descifradas. Es importante recordar que en Linux, el superusuario se considera alguien que no necesita confirmación, lo que subraya la importancia de actuar con precaución al realizar acciones con privilegios elevados.

### Comandos de Usuario en linux

- **`whoami`:**  Este comando muestra el nombre de usuario que estás utilizando en ese momento. Es útil para verificar qué usuario tiene sesión activa en la terminal en un sistema Linux.

- **`su nombre_usuario`:** Este comando te permite cambiar de usuario a otro usuario, incluyendo al usuario root. Ten en cuenta que para usar su generalmente `su` necesitas la contraseña del usuario al que deseas cambiar.

- **`sudo`:** Permite a un usuario con los privilegios adecuados ejecutar comandos con permisos de superusuario, sin la necesidad de iniciar sesión como el usuario root.

- **`sudo su`:** Este comando nos permite acceder a la cuenta del superusuario (root) y realizar acciones que requieren privilegios elevados en el sistema.

- **`adduser nombre_nuevo_usuario`:** Este comando te permite crear un nuevo usuario. Una vez ejecutado, el comando te guiará a través del proceso de configuración del nombre, contraseña y demas detalles del nuevo usuario.

- **`exit`:** Este comando se utiliza para salir de la sesión actual de usuario en la terminal. Es comúnmente utilizado cuando estás trabajando como usuario root o cuando has cambiado temporalmente a otro usuario utilizando el comando `su`. Ejecutar `exit` te devolverá a la sesión del usuario original o te desconectará, dependiendo del contexto en el que se use.

- **`passwd nombre_usuario`:** Este comando se utiliza para cambiar la contraseña de un usuario específico en un sistema Linux. Si no se especifica un nombre de usuario como argumento, cambia la contraseña del usuario con el que estás actualmente identificado.

- **`deluser nombre_usuario`:** Este comando se utiliza para eliminar un usuario específico del sistema. Cabe destacar que no elimina los archivos ni el directorio que tiene en home el usuario.

- **`deluser --remove-home nombre_usuario`:** Este comando elimina al usuario junto con su directorio home(`/home/nombre_usuario`).

- **`deluser --remove-all-files nombre_usuario`:** Este comando elimina al usuario junto con todos los archivos de su propiedad.

### Permisos de Usuario

Los permisos determinan quién puede acceder, leer, modificar o eliminar archivos y directorios en el sistema. Cada archivo y directorio tiene atributos de permisos que especifican qué acciones pueden realizar los diferentes usuarios. Comprender cómo funcionan los permisos y cómo se pueden modificar es fundamental para los administradores de sistemas y usuarios, ya que les permite controlar quién tiene acceso a qué recursos.

El comando `ls -l` brinda una lista detallada de la metadata de los archivos de la siguiente manera: `-rw-r--r--`. El primer caracter describe si es un archivo(`-`) o un directorio(`d`). Los caracteres desde el primero hasta el tercero nos define los permisos que tiene el propietario del archivo. Luego, los caracteres desde el cuarto hasta el sexto definen los permisos que tiene el grupo propietario. Por ultimo, los caracteres desde el septimo hasta el noveno nos describe los permisos del publico general.

> ***Nota:*** Los tres caracteres se definen de la siguiente forma: `r` quiere decir que cuenta con permisos de lectura, `w` que cuenta con permisos de escritura y por ultimo `x` que cuenta con permisos de ejecucion.

Otro comando importante respecto a los permisos es `chmod 000 nombre_archivo` que permite cambiar los permisos que tiene un archivo. El primer digito son los permisos que le asignaremos al usuario, el segundo al grupo y el tercero al publico en general.

> ***Nota:*** Los numeros que se le pasan al comando representan el permiso de la siguiente manera: el `0` quita todos los permisos, el `1` deja unicamente con permisos de ejecución, el `2` deja unicamente con permisos de escritura y el `4` deja unicamente con permisos de lectura. En caso de querer asignar varios permisos se suman los digitos mensionados.

El comando `chown nombre_dueño.nombre_grupo nombre_archivo` nos permite ambiar el propietario y grupo de un archivo. En caso de querer cambiar unicamente el usuario ingresamos `nombre_usuario` unicamente, y en caso de ser unicamente el grupo se ingresa `:nombre_grupo`.

## Paquetes

En un sistema Linux, existen dos terminos que pueden confundirse: **Repositorio** y **Paquete**. Un **`repositorio`** es una tienda de aplicaciones que alberga software probado y compatible con ese sistema(Debian, Kali, Fedora, etc). Los repositorios son fuentes seguras para instalar software en tu sistema operativo. Por otro lado, los **`paquetes`** son similares a los archivos de ejecucion(.exe) en Windows, ya que te permiten instalar software de manera externa en tu sistema Linux. Los nombres de los paquetes están diseñados para no contener espacios, lo que facilita su administración y uso. La combinación de repositorios y paquetes ofrece una forma segura y conveniente de gestionar el software en un sistema Linux.

### Comandos para instalar software

- **`apt` || `apt-get`:** Es una herramienta esencial para instalar paquetes de software en sistemas operativos basados en Debian mediante la terminal.

- **`apt update`||`apt-get update`:** Ambos comandos actualizan la lista de paquetes disponibles en los repositorios de software del sistema, asegurando que tengas acceso a las últimas actualizaciones y nuevas aplicaciones.

- **`apt-cache search palabra_clave`:** Este comando te permite buscar software en los repositorios del sistema a través de la terminal, utilizando una palabra clave como criterio de búsqueda.

- **`apt install nombre_paquete`||`apt-get install nombre_paquete`:**: Este comando permite instalar un paquete especifico desde los repositorios del sistema atraves de la terminal.

- **`add-apt-repository nombre_paquete`:**: Este comando te permite agregar un nuevo repositorio de paquetes al sistema a través de la terminal. Esto es útil cuando deseas instalar software que no está en los repositorios predeterminados y necesitas agregar fuentes adicionales para acceder a él.

- **`dpkg -i nombre_archivo`**:  Este comando te permite instalar un software que no está empaquetado en los repositorios del sistema, lo que es útil cuando deseas instalar aplicaciones que no están disponibles a través de los métodos convencionales de gestión de paquetes.

## Servicios en Linux
<!--
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