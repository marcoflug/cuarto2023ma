<?php
class EnlacesPaginas
{
    public static function enlacesPaginasModel($enlacesModel)
    {
        if($enlacesModel=="servicios" || 
            $enlacesModel=="servicios" || 
            $enlacesModel=="servicios"|| 
            $enlacesModel=="servicios") 
        {
            $module="views/interfaces/".$enlacesModel.".php";
        }
        elseif ($enlacesModel=="index") {
            $module="views/interfaces/inicio.php";
        }
        else {
            $module="views/interfaces/inicio.php";
        }
        return $module;
    }
}
?>