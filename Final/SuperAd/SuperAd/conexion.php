<?PHP
    class Alumno
    {
        private $idUser;
        private $user;
        private $password;
        private $rol;

        
        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }
 
    class AlumnoModel
    {
        private $pdo;

        public function __CONSTRUCT()
        {
            try
            {
                $this->pdo = new PDO('mysql:host=localhost; dbname=arqueo', 'root', '');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
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

                $stm = $this->pdo->prepare("SELECT * FROM usuarios");
                $stm->execute();

                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                {
                    $alm = new Alumno();

                    $alm->__SET('idUser', $r->idUser);
                    $alm->__SET('user', $r->user);
                    $alm->__SET('password', $r->password);
                    $alm->__SET('rol', $r->rol);
                    
			
                    $result[] = $alm;
                }

                return $result;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Obtener($idUser)
        {
            try 
            {
                $stm = $this->pdo
                        ->prepare("SELECT * FROM usuarios WHERE idUser = ?");
                        

                $stm->execute(array($idUser));
                $r = $stm->fetch(PDO::FETCH_OBJ);

                $alm = new Alumno();

                $alm->__SET('idUser', $r->idUser);
                $alm->__SET('user', $r->user);
                $alm->__SET('password', $r->password);
                $alm->__SET('rol', $r->rol);

                return $alm;
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function Eliminar($idUser)
        {
            try 
            {
                $stm = $this->pdo
                        ->prepare("DELETE FROM usuarios WHERE idUser = ?");                      

                $stm->execute(array($idUser));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function Actualizar(Alumno $data)
        {
            try 
            {
                $sql = "UPDATE usuarios SET 
                            user            = ?, 
                            password        = ?,
                            rol             = ?
                        WHERE idUser = ?";

                $this->pdo->prepare($sql)
                    ->execute(
                    array(
                        $data->__GET('user'), 
                        $data->__GET('password'), 
                        $data->__GET('rol')
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function Registrar(Alumno $data)
        {
            try 
            {
            $sql = "INSERT INTO usuarios (user,password,rol) 
                    VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                array(
                    $data->__GET('user'), 
                    $data->__GET('password'), 
                    $data->__GET('rol')
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>