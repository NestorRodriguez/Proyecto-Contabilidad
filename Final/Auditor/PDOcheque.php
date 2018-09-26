<?PHP
    class Alumno
    {
        private $idCheque;
        private $idUser;
        private $numeroCheque;
        private $banco;
        private $responsable;
        private $bmil;
        private $bdosmil;
        private $bcincomil;
        private $bdiezmil;
        private $bveintemil;
        private $bcincuentamil;
        private $mcincuenta;
        private $mcien;
        private $mdocientos;
        private $mquinientos;
        private $mmil;
        
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

                $stm = $this->pdo->prepare("SELECT * FROM cheque");
                $stm->execute();

                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                {
                    $alm = new Alumno();

                    $alm->__SET('idCheque', $r->idCheque);
                    $alm->__SET('idUser', $r->idUser);
                    $alm->__SET('numeroCheque', $r->numeroCheque);
                    $alm->__SET('banco', $r->banco);

                    $alm->__SET('responsable', $r->responsable);
                    $alm->__SET('bmil', $r->bmil);
                    $alm->__SET('bdosmil', $r->bdosmil);
                    $alm->__SET('bcincomil', $r->bcincomil);
                    $alm->__SET('bdiezmil', $r->bdiezmil);
                    $alm->__SET('bveintemil', $r->bveintemil);

                    $alm->__SET('bcincuentamil', $r->bcincuentamil);
                    $alm->__SET('mcincuenta', $r->mcincuenta);
                    $alm->__SET('mcien', $r->mcien);
                    $alm->__SET('mdocientos', $r->mdocientos);
                    $alm->__SET('mquinientos', $r->mquinientos);
                    $alm->__SET('mmil', $r->mmil);
                    
                    $result[] = $alm;
                }

                return $result;
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Obtener($idCheque)
        {
            try 
            {
                $stm = $this->pdo
                        ->prepare("SELECT * FROM cheque WHERE idCheque = ?");
                        

                $stm->execute(array($idCheque));
                $r = $stm->fetch(PDO::FETCH_OBJ);

                $alm = new Alumno();

                    $alm->__SET('idUser', $r->idUser);
                    $alm->__SET('numeroCheque', $r->numeroCheque);
                    $alm->__SET('banco', $r->banco);
                    $alm->__SET('responsable', $r->responsable);
                    $alm->__SET('bmil', $r->bmil);
                    $alm->__SET('bdosmil', $r->bdosmil);
                    $alm->__SET('bcincomil', $r->bcincomil);
                    $alm->__SET('bdiezmil', $r->bdiezmil);
                    $alm->__SET('bveintemil', $r->bveintemil);

                    $alm->__SET('bcincuentamil', $r->bcincuentamil);
                    $alm->__SET('mcincuenta', $r->mcincuenta);
                    $alm->__SET('mcien', $r->mcien);
                    $alm->__SET('mdocientos', $r->mdocientos);
                    $alm->__SET('mquinientos', $r->mquinientos);
                    $alm->__SET('mmil', $r->mmil);

                return $alm;
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function Eliminar($idCheque)
        {
            try 
            {
                $stm = $this->pdo
                        ->prepare("DELETE FROM cheque WHERE idCheque = ?");                      

                $stm->execute(array($idCheque));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }

        public function Actualizar(Alumno $data)
        {
            try 
            {
                $sql = "UPDATE cheque SET 

                            idUser          = ?,
                            numeroCheque 	= ?, 
                            banco 	        = ?,  
                            responsable 	= ?,
                            bmil 			= ?, 
                            bdosmil 		= ?, 
                            bcincomil 		= ?, 
                            bdiezmil 		= ?, 
                            bveintemil 		= ?, 
                            bcincuentamil 	= ?, 
                            mcincuenta 		= ?, 
                            mcien 			= ?, 
                            mdocientos 		= ?, 
                            mquinientos 	= ?, 
                            mmil 			= ?
                        WHERE idCheque = ?";

                $this->pdo->prepare($sql)
                    ->execute(
                    array(

                            $data->__SET('idUser'),
                            $data->__GET('numeroCheque'),
                            $data->__GET('banco'),

                            $data->__GET('responsable'),
                            $data->__GET('bmil'), 
                            $data->__GET('bdosmil'), 
                            $data->__GET('bcincomil'), 
                            $data->__GET('bdiezmil'), 
                            $data->__GET('bveintemil'), 

                            $data->__GET('bcincuentamil'), 
                            $data->__GET('mcincuenta'), 
                            $data->__GET('mcien'), 
                            $data->__GET('mdocientos'), 
                            $data->__GET('mquinientos'), 
                            $data->__GET('mmil'),
                            $data->__GET('idCheque')

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
            $sql = "INSERT INTO recibo (idUser,numeroCheque,banco,responsable ,bmil,bdosmil,bcincomil,bdiezmil,bveintemil,bcincuentamil,mcincuenta,mcien,
                                        mdocientos,mquinientos,mmil) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                array(
                            $data->__SET('idUser'),
                            $data->__GET('numeroCheque'),
                            $data->__GET('banco'),

                            $data->__GET('responsable'),
                            $data->__GET('bmil'), 
                            $data->__GET('bdosmil'), 
                            $data->__GET('bcincomil'), 
                            $data->__GET('bdiezmil'), 
                            $data->__GET('bveintemil'), 

                            $data->__GET('bcincuentamil'), 
                            $data->__GET('mcincuenta'), 
                            $data->__GET('mcien'), 
                            $data->__GET('mdocientos'), 
                            $data->__GET('mquinientos'), 
                            $data->__GET('mmil')
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>