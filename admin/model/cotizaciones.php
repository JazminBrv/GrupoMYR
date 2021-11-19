<?php
class Cotizaciones
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $correo_electronico;
    public $telefono;
    public $accesorio;
    public $medida_alto;
    public $medida_ancho;
    public $cuadricula;
	public $color_vidrio;
	public $color_aluminio;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cotizaciones");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cotizaciones WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cotizaciones WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cotizaciones SET 
						nombre          = ?,
						correo_electronico        = ?,
						telefono        = ?,
						accesorio        = ?,
						medida_alto        = ?,
						medida_ancho        = ?,
						cuadricula        = ?,
						color_vidrio        = ?,
						color_aluminio        = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->correo_electronico,
						$data->telefono,
						$data->accesorio,
						$data->medida_alto,
						$data->medida_ancho,
						$data->cuadricula,
						$data->color_vidrio,
						$data->color_aluminio,

						$data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Cotizaciones $data)
	{
		try 
		{
		$sql = "INSERT INTO cotizaciones (nombre,correo_electronico,telefono,accesorio,medida_alto,medida_ancho,cuadricula,color_vidrio,color_aluminio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->correo_electronico, 
                    $data->telefono, 
                    $data->accesorio,
                    $data->medida_alto,
					$data->medida_ancho,
                    $data->cuadricula,
                    $data->color_vidrio,
					$data->color_aluminio
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}