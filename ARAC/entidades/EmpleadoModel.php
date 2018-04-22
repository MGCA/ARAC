<?php

class Empleado{
    private $pdo;
    
    public $cedula;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $direccion;
    public $telefono;
    public $puesto;
    
    
    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM empleado");
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
			          ->prepare("SELECT * FROM empleado WHERE cedula = ?");
			          

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
			            ->prepare("DELETE FROM empleado WHERE cedula = ?");			          

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
			$sql = "UPDATE alumnos SET 
						nombre          = ?, 
						primerApellido        = ?,
                                                segundoApellido          = ?,
						direccion            = ?, 
						telefono = ?,
                                                puesto = ?
				    WHERE cedula = ?";
                        
//cedula- nombre- primerApellido- segundoApellido- direccion- telefono- puesto;
    

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                                        $data->nombre, 
                                        $data->primerApellido,
                                        $data->segundoApellido,
                                        $data->direccion,
                                        $data->telefono,
                                        $data->puesto,
                                        $data->cedula
                                    )
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Empleado $data)
	{
		try 
		{
                    //cedula- nombre- primerApellido- segundoApellido- direccion- telefono- puesto;
		$sql = "INSERT INTO empleado (cedula,nombre,primerApellido,segundoApellido,direccion,telefono,puesto) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                                    $data->cedula,
                                    $data->nombre,
                                    $data->primerApellido, 
                                    $data->segundoApellido, 
                                    $data->direccion,
                                    $data->telefono,
                                    $data->puesto,
                                
                                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}