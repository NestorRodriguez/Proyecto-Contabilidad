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
        <div class="resivo">
            <span>Resivo</span>
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
        
        <div class="formularioRsv">
            <form name="resivo">
                <label for="Fecha">Fecha:</label>
                <input type="date" name="fecharsv" id="fecharsv"><br>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsablersv" id="responsablersv" placeholder="Juan Leon"><br>
                <label for="NIT">NIT:</label>
                <input type="text" name="nitrsv" id="nitrsv" placeholder="123456789"><br>
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="number" name="milrsv" id="milrsv"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="number" name="dosmilrsv" id="dosmilrsv" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="number" name="cincomilrsv" id="cincomilrsv" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="number" name="diezmilrsv" id="diezmilrsv" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="number" name="veintemilrsv" id="veintemilrsv" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="number" name="cincuentamilrsv" id="cincuentamilrsv" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="text" name="cincuentarsv" id="cincuentarsv" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="text" name="cienrsv" id="cienrsv" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="text" name="docientosrsv" id="docientosrsv" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="text" name="quinientosrsv" id="quinientosrsv" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="text" name="mmilrsv" id="mmilrsv" placeholder="1">
                </div>
                <input type="button" onclick="validate();" value="Enviar">
            </form>
        </div>
        
        <div class="formularioChq">
            <form name="cheque">
                <label for="NCheque">No. Cheque:</label>
                <input type="text" name="ncheque" id="ncheque" placeholder="123456789"><br>
                <label for="Banco">Banco:</label>
                <input type="text" name="banco" id="banco" placeholder="Davivienda"><br>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsablechq" id="responsablechq" placeholder="Juan Leon"><br>
                <label for="Valor">Valor:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="text" name="milchq" id="milchq"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="text" name="dosmilchq" id="dosmilchq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="text" name="cincomilchq" id="cincomilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="text" name="diezmilchq" id="diezmilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="text" name="veintemilchq" id="veintemilchq" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="text" name="cincuentamilchq" id="cincuentamilchq" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="text" name="cincuentachq" id="cincuentachq" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="text" name="cienchq" id="cienchq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="text" name="docientoschq" id="docientoschq" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="text" name="quinientoschq" id="quinientoschq" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="text" name="mmilchq" id="mmilchq" placeholder="1">
                </div>
                <input type="button" onclick="validate();" value="Enviar">
            </form>
        </div>

        <div class="formularioFtr">
            <form name="factura">
                <label for="Fecha">Fecha:</label>
                <input type="date" name="fechaftr" id="fechaftr"><br>
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsableftr" id="responsableftr" placeholder="Juan Leon"><br>
                <label for="NIT">NIT:</label>
                <input type="text" name="nitftr" id="nitftr" placeholder="123456789"><br>
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="text" name="milftr" id="milftr"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="text" name="dosmilftr" id="dosmilftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="text" name="cincomilftr" id="cincomilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="text" name="diezmilftr" id="diezmilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="text" name="veintemilftr" id="veintemilftr" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="text" name="cincuentamilftr" id="cincuentamilftr" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="text" name="cincuentaftr" id="cincuentaftr" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="text" name="cienftr" id="cienftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="text" name="docientosftr" id="docientosftr" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="text" name="quinientosftr" id="quinientosftr" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="text" name="mmilftr" id="mmilftr" placeholder="1">
                </div>
                <input type="button" onclick="validate();" value="Enviar">
            </form>
        </div>

        <div class="formularioAnt">
            <form name="anticipo">
                <label for="Responsable">Responsable:</label>
                <input type="text" name="responsableant" id="responsableant" placeholder="Juan Leon"><br>
                <label for="Cedula">Cedula:</label>
                <input type="text" name="cedula" id="cedula" placeholder="123456789"><br>
                <label for="Valor">Valor:</label>
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="text" name="milant" id="milant"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="text" name="dosmilant" id="dosmilant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="text" name="cincomilant" id="cincomilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="text" name="diezmilant" id="diezmilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="text" name="veintemilant" id="veintemilant" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="text" name="cincuentamilant" id="cincuentamilant" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="text" name="cincuentaant" id="cincuentaant" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="text" name="cienant" id="cienant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="text" name="docientosant" id="docientosant" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="text" name="quinientosant" id="quinientosant" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="text" name="mmilant" id="mmilant" placeholder="1">
                </div>
                <input type="button" onclick="validate();" value="Enviar">
            </form>
        </div>

        <div class="formularioCaj">
            <form name="caja">
                <label for="Billetes">Billetes:</label>
                <div class="valor">                            
                    <label for="1.000">$1.000</label>
                    <input type="text" name="milcaj" id="milcaj"  placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="2.000">$2.000</label>
                    <input type="text" name="dosmilcaj" id="dosmilcaj" placeholder="1">
                </div>
                <div class="valor">
                    <label for="5.000">$5.000</label>
                    <input type="text" name="cincomilcaj" id="cincomilcaj" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="10.000">$10.000</label>
                    <input type="text" name="diezmilcaj" id="diezmilcaj" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="20.000">$20.000</label>
                    <input type="text" name="veintemilcaj" id="veintemilcaj" placeholder="1">
                </div>
                <div class="valor"> 
                    <label for="50.000">$50.000</label>
                    <input type="text" name="cincuentamilcaj" id="cincuentamilcaj" placeholder="1">
                </div>
                <label for="Monedas">Monedas:</label>
                <div class="valor">
                    <label for="50">$50</label>
                    <input type="text" name="cincuentacaj" id="cincuentacaj" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="100">$100</label>
                    <input type="text" name="ciencaj" id="ciencaj" placeholder="1">
                </div>
                <div class="valor">
                    <label for="200">$200</label>
                    <input type="text" name="docientoscaj" id="docientoscaj" placeholder="1">
                </div>
                <div class="valor">    
                    <label for="500">$500</label>
                    <input type="text" name="quinientoscaj" id="quinientoscaj" placeholder="1">
                </div>
                <div class="valor">
                    <label for="1.000">$1.000</label>
                    <input type="text" name="mmilcaj" id="mmilcaj" placeholder="1">
                </div>
                <input type="button" onclick="validate();" value="Enviar">
            </form>
        </div>
    </div>
    <script src="../JS/jquery-3.1.1.min.js"></script>    
    <script type="text/javascript" src="../JS/Scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>