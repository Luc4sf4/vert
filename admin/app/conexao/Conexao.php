<?php
class Conexao {
   
   public static $instance;

   private function __construct() {
       //
   }

   public static function getConexao() {
       if (!isset(self::$instance)) {
           self::$instance = new PDO('mysql:host=adminvert1.mysql.uhserver.com;dbname=adminvert1', 'vert', 'Contabilid@de16', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
       }

       return self::$instance;
   }

}