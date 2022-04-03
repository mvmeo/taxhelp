<!DOCTYPE html>
<html>
    <head>
        <title>Tax Help</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style type="text/css">
            body{
                background-color: #fdc;
            }
            
            #answer{
                background-color: #f4f4f4;
                padding: 30px;
                border-radius: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form method="POST">
                        <label>Ingresa el honorario bruto de enero</label>
                        <input type="number" name="enero" placeholder="Honorario Bruto Enero" class="form-control">
                        <br>
                        <label>Ingresa el honorario bruto de febrero</label>
                        <input type="number" name="febrero" placeholder="Honorario Bruto Febrero" class="form-control">
                        <br>
                        <label>Ingresa el honorario bruto de marzo</label>
                        <input type="number" name="marzo" placeholder="Honorario Bruto Marzo" class="form-control">
                        <br>
                        <p>Escoge alguna operación del servicio de impuestos internos: </p>
                        <select name="Operate" class="form-control">
                            <option>Ninguna</option>
                            <option>Sumatoria Impuestos Retenidos</option>
                            <option>Sumatoria Honorarios Brutos Retenidos</option>
                            <option>Deuda o Pago en Abril</option>
                        </select>
                        <input type="submit" name="submit" value="Calculate" class="btn btn-sucess">
                        <input type="reset" value="Clear" class="btn btn-danger">
                    </form>
                    <br>
                    <h4>Usted debe pagar:</h4>
                    
                    <div id="answer"></div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        
    </body>
</html>
