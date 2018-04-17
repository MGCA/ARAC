<?php
include_once "app/Conexion.php";

class UserDB{
    
   
public static function obtener($conexion){
    $usuarios = array();
    if (isset($conexion)){
        try {
            include_once "entidades/Usuario.php";
            
            $sql = "SELECT * FROM usuario";
            
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            
            if (count($resultado)){
                foreach ($resultado as $fila){
                    $usuarios[] = new Usuario(
                            $fila['numUsuario'],
                            $fila['nombreUsuario'],
                            $fila['password'],
                            $fila['empleado']
                            );
                }
            } else {
                print 'No hay Usuarios';
                
            }
            
        } catch (PDOException $ex) {
            print "ERROR" . $ex ->getMessage();
            
        }
    }
    return $usuarios;
}
public static function obtener_numero_usuarios($conexion){
    $total_usuarios = null;
    
    if (isset($conexion)){
        try {
            $sql = "SELECT COUNT(*) as total FROM usuario";
            
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            
            $total_usuarios = $resultado['total'];
            
        } catch (PDOException $ex) {
            print "ERROR" . $ex->getMessage();
        }
    }
    return $total_usuarios;
}
    
}
