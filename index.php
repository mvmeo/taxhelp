<!DOCTYPE html>
<html>
    <head>
        <title>Tax Help</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="left-div col-lg-3">
                <h3>FAQs</h3>
                <p><a href="#">¿Cómo funciona la aplicación?</a></p>
                <p><a href="#">¿A quién está dirigido?</a></p>
                <p><a href="#">Conocer tabla de servicio de impuestos internos (SII)</a></p>                
            </div>
                <div class="col-lg-6">

                <h1>TAX HELP</h1>
                    <form method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 1:</span>
                            <input type="number" name="enero" class="form-control" placeholder="Honorario Bruto Enero" aria-label="Honorario Bruto Enero" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 2:</span>
                            <input type="number" name="febrero" class="form-control" placeholder="Honorario Bruto Febrero" aria-label="Honorario Bruto Febrero" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 3:</span>
                            <input type="number" name="marzo" class="form-control" placeholder="Honorario Bruto Marzo" aria-label="Honorario Bruto Marzo" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 4:</span>
                            <input type="number" name="abril" class="form-control" placeholder="Honorario Bruto Abril" aria-label="Honorario Bruto Abril" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 5:</span>
                            <input type="number" name="mayo" class="form-control" placeholder="Honorario Bruto Mayo" aria-label="Honorario Bruto Mayo" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 6:</span>
                            <input type="number" name="junio" class="form-control" placeholder="Honorario Bruto Junio" aria-label="Honorario Bruto Junio" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 7:</span>
                            <input type="number" name="julio" class="form-control" placeholder="Honorario Bruto Julio" aria-label="Honorario Bruto Julio" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 8:</span>
                            <input type="number" name="agosto" class="form-control" placeholder="Honorario Bruto Agosto" aria-label="Honorario Bruto Agosto" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 9:</span>
                            <input type="number" name="septiembre" class="form-control" placeholder="Honorario Bruto Septiembre" aria-label="Honorario Bruto Septiembre" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 10:</span>
                            <input type="number" name="octubre" class="form-control" placeholder="Honorario Bruto Octubre" aria-label="Honorario Bruto Octubre" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 11:</span>
                            <input type="number" name="noviembre" class="form-control" placeholder="Honorario Bruto Noviembre" aria-label="Honorario Bruto Noviembre" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mes 12:</span>
                            <input type="number" name="diciembre" class="form-control" placeholder="Honorario Bruto Diciembre" aria-label="Honorario Bruto Diciembre" aria-describedby="basic-addon1">
                        </div>

                        <br>

                        <p>Operación a realizar:</p>
                        <select name="Operator" class="form-control">
                            <option>Ninguna</option>
                            <option>Tramo situado</option>
                            <option>Impuestos retenidos</option>
                            <option>¿Tengo que pagar impuestos?</option>
                        </select>
                        <input type="submit" name="submit" value="Calculate" class="boton-calcular btn btn-danger col-lg-6 row">
                        <input type="reset" value="Clear" class="boton-clear btn btn-succes col-lg-5 row">
                    </form>
                    <br>
                    
                    <div id="answer">
                    <?php
                        if(isset($_POST['submit'])){
                            $meses = array();
                            $meses[] = $_POST['enero'];
                            $meses[] = $_POST['febrero'];
                            $meses[] = $_POST['marzo'];
                            $meses[] = $_POST['abril'];
                            $meses[] = $_POST['mayo'];
                            $meses[] = $_POST['junio'];
                            $meses[] = $_POST['julio'];
                            $meses[] = $_POST['agosto'];
                            $meses[] = $_POST['septiembre'];
                            $meses[] = $_POST['octubre'];
                            $meses[] = $_POST['noviembre'];
                            $meses[] = $_POST['diciembre'];

                            $tramo = array_sum($meses)*0.7;
                            $impuestosRetenidos = array_sum($meses)*0.1225;
                            $totalFactor = 0;

                            if ($tramo > 8775702.00 and $tramo <=19501560.00){
                                $totalFactor = $tramo*0.04;
                            } else if ($tramo > 19501560.00 and $tramo <= 32502600.00){
                                $totalFactor = $tramo*0.08;
                            } else if ($tramo > 32502600.00 and $tramo <= 45503640.00){
                                $totalFactor = $tramo*0.135;
                            } else if ($tramo > 45503640.00 and $tramo <= 58504680.00){
                                $totalFactor = $tramo*0.23;
                            } else if ($tramo > 58504680.00 and $tramo <= 78006240.00){
                                $totalFactor = $tramo*0.304;
                            } else if ($tramo > 78006240.00 and $tramo <= 201516120.00){
                                $totalFactor = $tramo*0.35;
                            } else if ($tramo > 201516120.00){
                                $totalFactor = $tramo*0.40;
                            }

                            $factorMenosRebaja = 0;

                            if ($tramo > 8775702.00 and $tramo <=19501560.00){
                                $factorMenosRebaja = $totalFactor-351028.08;
                            } else if ($tramo > 19501560.00 and $tramo <= 32502600.00){
                                $factorMenosRebaja = $totalFactor-1131090.48;
                            } else if ($tramo > 32502600.00 and $tramo <= 45503640.00){
                                $factorMenosRebaja = $totalFactor-2918733.48;
                            } else if ($tramo > 45503640.00 and $tramo <= 58504680.00){
                                $factorMenosRebaja = $totalFactor-7241579.28;
                            } else if ($tramo > 58504680.00 and $tramo <= 78006240.00){
                                $factorMenosRebaja = $totalFactor-11570925.60;
                            } else if ($tramo > 78006240.00 and $tramo <= 201516120.00){
                                $factorMenosRebaja = $totalFactor-15159212.64;
                            } else if ($tramo > 201516120.00){
                                $factorMenosRebaja = $totalFactor-25235018.64;
                            }

                            $resultadoSistema = $impuestosRetenidos - $factorMenosRebaja;

                            $mensajeFinal = 'Usted tiene que pagar ' . $resultadoSistema;

                            $sign = $_POST['Operator'];
                            switch($sign){
                            case 'Ninguna':
                                echo "Porfavor, escoge un operador";
                                break;

                            case 'Tramo situado':
                                echo $tramo;
                                break;

                            case 'Impuestos retenidos':
                                echo $impuestosRetenidos;
                                break;

                            case '¿Tengo que pagar impuestos?':
                                if ($tramo <= 8775702.00){
                                    echo 'Usted está exento del pago de impuestos.';
                                } else {
                                    echo $mensajeFinal;
                                }
                            }
                        }
                    ?>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        
    </body>
</html>
