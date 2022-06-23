<?php //conexão.php
    class Conexao {
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';
        private static $dbName = 'cadastro';

        private static $cont = null;

        public function __construct()
        
        {
            die("FINALIZAR CONSTRUTOR DA CLASSE CONEXÃO");  
        }

        public static function conectar(){
            if (self::$cont == null){
                try {
                    self::$cont = new PDO('mysql:host=localhost;dbname=cadastro', self::$dbUsuario, self::$dbSenha);

                }

            catch(PDOException $exception){
                die ($exception->getmessage());
            } 

        }
        return self::$cont;       
   }
        public static function desconectar() {
            self::$cont = null;
        }
}
?>