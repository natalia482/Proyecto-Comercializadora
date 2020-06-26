<?php 

	class Db{
     	private static $dsn = 'mysql:host=localhost;dbname=elmanantial';

        private static $usuario = 'root'; 

        private static $contraseña = '';

		private static $conexion = null;

		private function __construct(){}

		public static function conectar(){

			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

				self::$conexion=new PDO(self::$dsn,self::$usuario,
				self::$contraseña,$pdo_options);

				return self::$conexion;

			} catch (PDOException $e) {
				
				echo 'Falló la conexión: ' . $e->getMessage();
			}
		}
	}
?>

<?php
/*
* Cuando queramos acceder a una constante o método estático desde 
* dentro de la clase, usamos la palabra reservada: self.
* http://programacion.jias.es/2012/11/poo-en-php-this-parent/
*/
?>