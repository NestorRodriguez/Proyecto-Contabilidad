<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: Login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Page Title</title>
</head>
<body>
    <div>
    <a href="Cerrar.php">Cerrar Sesión</a>
    </div>
    <div class="contenedor-caja">
        <div class="recibo">
            <span>Recibo</span>
        </div>
        <div class="cheque">
            <span>Cheque</span>
        </div>
        <div class="factura">
            <span>Factura</span>
        </div>
        <div class="anticipo">
            <span>Anticipo</span>
        </div>
        <div class="caja">
            <span>Aún en caja</span>
        </div>
        
        <div class="formularioRcb">
            <form name="recibo">
                <label for="Fecha">Fecha:</label>
                <input type="text" name="fecharcb" id="fecharcb" value="<?php echo date("d/m/Y"); ?>" disabled/>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsablercb" id="responsablercb" placeholder="Juan Leon">
                <label for="NIT">NIT:</label>
                <input type="number" name="nitrcb" id="nitrcb" placeholder="123456789">
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milrcb" id="milrcb"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilrcb" id="dosmilrcb" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilrcb" id="cincomilrcb" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilrcb" id="diezmilrcb" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilrcb" id="veintemilrcb" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilrcb" id="cincuentamilrcb" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="number" name="cincuentarcb" id="cincuentarcb" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="number" name="cienrcb" id="cienrcb" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="number" name="docientosrcb" id="docientosrcb" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="number" name="quinientosrcb" id="quinientosrcb" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="number" name="mmilrcb" id="mmilrcb" placeholder="1">
                </div>
                <input type="button" onclick="validarRecibo();" value="Enviar">
            </form>
            <div id="alerta"></div>
        </div>
        
        <div class="formularioChq">
            <form name="cheque">
                <label for="NCheque">No. Cheque:</label>
                <input type="number" name="ncheque" id="ncheque" placeholder="123456789">
                <label for="Banco">Banco:</label>
                <input type="text" name="banco" id="banco" placeholder="Davivienda">
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsablechq" id="responsablechq" placeholder="Juan Leon">
                <label for="Valor">Valor:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milchq" id="milchq"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilchq" id="dosmilchq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilchq" id="cincomilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilchq" id="diezmilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilchq" id="veintemilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilchq" id="cincuentamilchq" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="number" name="cincuentachq" id="cincuentachq" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="number" name="cienchq" id="cienchq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="number" name="docientoschq" id="docientoschq" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="number" name="quinientoschq" id="quinientoschq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="number" name="mmilchq" id="mmilchq" placeholder="1">
                </div>
                <input type="button" onclick="validarCheque();" value="Enviar">
            </form>
            <div id="alerta"></div>
        </div>

        <div class="formularioFtr">
            <form name="factura">
                <label for="Fecha">Fecha:</label>
                <input type="text" name="fechaftr" id="fechaftr" value="<?php echo date("d/m/Y"); ?>" disabled/>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsableftr" id="responsableftr" placeholder="Juan Leon">
                <label for="NIT">NIT:</label>
                <input type="number" name="nitftr" id="nitftr" placeholder="123456789">
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milftr" id="milftr"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilftr" id="dosmilftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilftr" id="cincomilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilftr" id="diezmilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilftr" id="veintemilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilftr" id="cincuentamilftr" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="number" name="cincuentaftr" id="cincuentaftr" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="number" name="cienftr" id="cienftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="number" name="docientosftr" id="docientosftr" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="number" name="quinientosftr" id="quinientosftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="number" name="mmilftr" id="mmilftr" placeholder="1">
                </div>
                <input type="button" onclick="validarFactura();" value="Enviar">
            </form>
            <div id="alerta"></div>
        </div>

        <div class="formularioAnt">
            <form name="anticipo">
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsableant" id="responsableant" placeholder="Juan Leon">
                <label for="Cedula">Cedula:</label>
                <input type="number" name="cedula" id="cedula" placeholder="123456789">
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milant" id="milant"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilant" id="dosmilant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilant" id="cincomilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilant" id="diezmilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilant" id="veintemilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilant" id="cincuentamilant" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="number" name="cincuentaant" id="cincuentaant" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="number" name="cienant" id="cienant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="number" name="docientosant" id="docientosant" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="number" name="quinientosant" id="quinientosant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="number" name="mmilant" id="mmilant" placeholder="1">
                </div>
                <input type="button" onclick="validarAnticipo();" value="Enviar">
            </form>
        </div>

        <div class="formularioCaj">
            <form name="caja">
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milcaj" id="milcaj"  placeholder="1" disabled>
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilcaj" id="dosmilcaj" placeholder="1" disabled>
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilcaj" id="cincomilcaj" placeholder="1" disabled>
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilcaj" id="diezmilcaj" placeholder="1" disabled>
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilcaj" id="veintemilcaj" placeholder="1" disabled>
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilcaj" id="cincuentamilcaj" placeholder="1" disabled>
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="number" name="cincuentacaj" id="cincuentacaj" placeholder="1" disabled>
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="number" name="ciencaj" id="ciencaj" placeholder="1" disabled>
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="number" name="docientoscaj" id="docientoscaj" placeholder="1" disabled>
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="number" name="quinientoscaj" id="quinientoscaj" placeholder="1" disabled>
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="number" name="mmilcaj" id="mmilcaj" placeholder="1" disabled>
                </div>
                <input type="button" value="Actualizar">
            </form>
        </div>
    </div>
    <script src="../JS/jquery-3.1.1.min.js"></script>    
    <script type="text/javascript" src="../JS/Scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>