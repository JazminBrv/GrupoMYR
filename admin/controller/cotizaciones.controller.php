<?php
require_once 'model/cotizaciones.php';

class CotizacionesController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cotizaciones();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cotizaciones/cotizaciones.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Cotizaciones();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cotizaciones/cotizaciones-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Cotizaciones();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->correo_electronico = $_REQUEST['correo_electronico'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->accesorio = $_REQUEST['accesorio'];
        $alm->medida_alto = $_REQUEST['medida_alto'];
        $alm->medida_ancho = $_REQUEST['medida_ancho'];
        $alm->cuadricula = $_REQUEST['cuadricula'];
        $alm->color_vidrio = $_REQUEST['color_vidrio'];
        $alm->color_aluminio = $_REQUEST['color_aluminio'];
        
        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
            echo "<html>
            <head>
                <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700\">
                <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
                <link rel=\"stylesheet\" href=\"css/fonts.css\">
                <link rel=\"stylesheet\" href=\"css/style.css\">
                <link href=\"./CSS/style.css\" rel=\"stylesheet\">
            </head>
            <body>
                <center class=\"box-booking\">
                <div class=\"rd-form booking-form\">
                    <h1><center><label class=\"mensajesOKsql\">Cotización  Enviada<label></center></h1>
                     
                </div>
                <center>
            </body>
        </html>";

        header("refresh:3; administrador.php");

    }
    
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: administrador.php');
    }
}
?>
<a href="../admin/administrador.php"> Regresar </a>
<br>
<a href="https://alicemadnessr.000webhostapp.com/PaginaMVC/"> Página Principal </a>