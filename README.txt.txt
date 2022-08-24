-DESCRIPCION DEL PROYECTO
crud simple con tablas relacionadas, ya que los productos se puede vender hay un modulo ventas y un modulo productos.
para poder vender algo debes tener productos agregados con anterioridad, tambien deben tener usuario y contraseña para acceder o en su defecto esta la posibilidad de registarse.

-ESTADO DEL PROYECTO

terminado.

-PARA VERIFICAR ESTA PRUEBA ES NECESARIO TENER INSTALADO

https://www.apachefriends.org/es/index.html
https://laravel.com/docs/9.x/installation->laravel
https://getcomposer.org/download/->composer
https://nodejs.org/es/download/->node js
https://docs.npmjs.com/downloading-and-installing-node-js-and-npm->npm

-PARA DEPLEGAR EL ARCHIVO ES NECESARIO CORRER LOS SIGUIENTES COMANDOS EN EL CMD O TERMINAR DE SU PREFERENCIA

->php artisan migrate
->composer install 
->npm install
->npm run dev

de no funcionar realizarlo como produccion
->php artisan migrate
->composer install 
->npm install
->npm run production

-Bugs conocidos y posibles correcciones de errores.
la interfaz se puede mejorar.


-REALIZAR UNA CONSULTA QUE PERMITA CONOCER CUAL ES EL PRODUCTO QUE MAS STOCK TIENE.

SELECT MAX(stock),nombreProducto as stock_maxima FROM productos;


-REALIZAR UNA CONSULTA QUE PERMITA CONOCER CUAL ES EL PRODUCTO MAS VENDIDO.

SELECT MAX(cantidadVenta),producto_id as ProductoMasVendido FROM `ventas`;