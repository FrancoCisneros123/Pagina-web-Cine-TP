<?php 
class Permisos
{
    public function tienePermiso ($permiso,$id_usuario)
    {
        if(isset($permiso) || isset($id_usuario))
        {
            require_once("conexion.db");
            $sql = "
            SELECT 
                1 
            FROM 
                permiso
            INNER JOIN
                rol_permisos
                    ON
                        rol_permisos.id_permiso = permiso.id_permiso
            INNER JOIN
                usuario_rol
                    ON
                        usuario_rol.id_tipo_usuario = rol_permisos.id_tipo_usuario
            WHERE 
                    usuario_rol.id_usuario = :id_usuario 
                AND permiso.descripcion_permiso IN ()
            LIMIT 1;
        ";
        }
    }
}
?>