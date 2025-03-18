<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <title>Nomina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Que quede arriba */
            background-color: #f9f9f9;
        }
        
        .container {
          width: 50%;
          text-align: center;
        }
        
        table {
          border-collapse: collapse;
          width: 100%;
          margin: 20px auto;
          text-align: center;
        }
    
        th, td {
          border: 1px solid #000;
          padding: 10px;
          vertical-align: middle;
        }
    
        th {
          background-color: #f2f2f2;
        }
        
        .card {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 95%;        /* Aquí lo hacemos bien ancho */
            display: flex;
            justify-content: center;
            margin: 0 auto;
        }
        
        .label {
            display: block;
            font-size: 20px;
            color: #333;
            margin-bottom: 5px;
            margin-top: 10px;
        }
        
        /* Estilo para los inputs */
        .input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background: #f9f9f9;
            transition: border 0.3s;
        }
        
        .input:focus {
            border-color: #ff7f7f;  /* Bordes rojos al enfocar */
            outline: none;
            background: #fff;
        }
        
        
        button {
            width: 70%;
            padding: 10px;
            /*background: #ff7f7f;  /* Rojo suave para el botón */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background: #ff4d4d;  /* Cambio de color al pasar el ratón */
        }
        
        .opciones-botones{
            flex: 1;
            padding: 10px;
            background: #ff7f7f;  /* Color del botón */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }
        
        .content {
            gap: 20px;
            margin: 10px;
        }
        
         h3 {
            text-align: center;
            color: #ff7f7f;  /* Rojo suave para el título */
            margin-bottom: 15px;
        }
        
        .button{
            width: 150px;
        }
        
        select {
          padding: 8px 12px;
          border-radius: 5px;
          border: 1px solid #ccc;
          background-color: #fff;
          font-size: 14px;
          color: #333;
          outline: none;
          transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        select:focus {
          border-color: #4CAF50;
          box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        
        select option {
          background-color: #fff;
          color: #333;
          padding: 8px;
        }
        
        .pequeno{
         width: 80px; 
        }
    </style>
</head>

<body>
    <div class="container colum" id="opcionPunto">
        <label class="label">Ingrese El Valor Del Punto Para La Simulación</label>
        <input class="input text-center" type="text" id="inputPunto"></input>
        <div class="row content">
            <button class="opciones-botones" id="btn-valor-fijo" onclick="valorFijo()">Usar Valor Fijo ($20.895)</button>
            <button class="opciones-botones" id="btn-siguiente" style="display: none" onclick="guardarValorPunto()">Siguiente</button>
        </div>
    </div>
    
    <div id="simulacion" style="display: none">
        <div class="card" id="card" style="display: none">
            <div id="divFormulario" style="display: none">
                <h3>Ingrese los datos del docente</h3>
                <div class="content colum" id="datosDocente">
                    <label class="label">Nombre</label>
                    <input class="input" type="text" id="inputNombre"></input>
                    <label class="label">Apellido</label>
                    <input class="input" type="text" id="inputApellido"></input>
                    <label class="label">Cedula</label>
                    <input class="input" type="text" id="inputCedula"></input>
                    <label class="label">Pregrado</label>
                    <select>
                      <option value="normal">Normal</option>
                      <option value="especial">Especial</option>
                    </select>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label class="label">Especialización</label>
                        <input type="checkbox" class="check unchecked" id="miCheckbox">
                    </div>
                    <div id="inputAñosEspecializacion" style="display: flex; align-items: center; gap: 10px;" style="display: none">
                        <label class="label">Cantidad:</label>
                        <input id="numEspecializacion" class="input pequeno text-center" type="number" max="2" min="1" value="1" onkeydown="return false;"></input>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label class="label">Maestria</label>
                        <input type="checkbox" class="check unchecked" id="miCheckbox2">
                    </div>
                    <div id="inputAñosEspecializacion" style="display: flex; align-items: center; gap: 10px;" style="display: none">
                        <label class="label">Cantidad:</label>
                        <input id="numMaestria" class="input pequeno text-center" type="number" max="2" min="1" value="1" onkeydown="return false;"></input>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label class="label">Doctorado</label>
                        <input type="checkbox" class="check unchecked" id="miCheckbox2">
                    </div>
                    <div id="inputAñosEspecializacion" style="display: flex; align-items: center; gap: 10px;" style="display: none">
                        <label class="label">Cantidad:</label>
                        <input id="numDoctorado" class="input pequeno text-center" type="number" max="2" min="1" value="1" onkeydown="return false;"></input>
                    </div>
                </div>
            </div>
            
            <div class="content colum" id="tipoDocente">
                <label class="label text-center">Seleccione el tipo Docente</label>
                <div class="row content">
                    <button class="opciones-botones" onclick=visualizarFormulario(1)>Docente De Planta</button>
                    <button class="opciones-botones" onclick=visualizarFormulario(2)>Docente Ocasional</button>
                </div>
            </div>
            
            <div class="row content">
                <button class="opciones-botones button" onclick=inicioSimulacion()>Cancelar</button>
                <button class="opciones-botones" id="btn-guardar" style="display: none" onclick="guardarDocente()">Guardar</button>
            </div>
        </div>
        
        <div id="registro">
            <div class="button">
                <button class="opciones-botones button" onclick=visualizarOpcionesDocentes()>Agregar Docente</button>
            </div>
            <div class="tabla" id="tabla">
                <table border="1" cellpadding="10" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Fecha de Ingreso</th>
                      <th>Cédula</th>
                      <th>Tipo Docente</th>
                      <th>Posgrado</th>
                      <th>Especialización</th>
                      <th>Maestria</th>
                      <th>Doctorado</th>
                      <th>Salario</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Juan</td>
                      <td>Pérez</td>
                      <td>2023-01-15</td>
                      <td>12345678</td>
                      <td>Docente de Planta</td>
                      <td>17</td>
                      <td>56</td>
                      <td>47</td>
                      <td>84</td>
                      <td>$1,200</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div id="totales">
            <table border="1" cellpadding="10" cellspacing="0">
              <thead>
                <tr>
                  <th>Tipo De Docentes</th>
                  <th>Cantidad De Docentes</th>
                  <th>Gasto Totales</th>
                  <th>Promedio</th>
                </tr>
              </thead>
              <tbody>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
              </tbody>
            </table>
            <p id="Total">Total: $0</p>
        </div>
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
    let tipoDocenteTemp = 0;
    let profesoresHoraCatedra = 0;
    let profesoresOcasionales = 0;
    let valorPunto = 0;
    let pregrado = 178;
    let pregradoE = 183;
    let especializacion = 20;
    let añoAdicionalE = 10;
    let maestria = 40;
    let doctorado = 80;
    let soloDoctorado = 120
    
    
    let totalPuntos = 0;
    // puntos = totalPuntos*valorPunto 
    /*
    especializacones maximas 2 puntos max 30
    maestrias maximas 2 puntos max 60
    doc maximas 2 puntos max 140
    solo doctorado sin maestria 120
    */
    
    function visualizarFormulario(tipoDocente){
        document.getElementById("tipoDocente").style.display = 'none';
        document.getElementById("divFormulario").style.display = '';
        
        if(tipoDocente==1){
            tipoDocenteTemp = 1;
        }else if(tipoDocente==2){
            tipoDocenteTemp = 2;
        }
    }
    
    function visualizarOpcionesDocentes(){
        document.getElementById("registro").style.display = 'none';
        document.getElementById("totales").style.display = 'none';
        document.getElementById("divFormulario").style.display = 'none';
        document.getElementById("card").style.display = '';
    }
    
    function guardarValorPunto(){
        valorPunto = parseInt(document.getElementById("inputPunto").value.replace(/\D/g, ""), 10);
        inicioSimulacion();
    }
    
    function valorFijo(){
        valorPunto = 20895;
        inicioSimulacion();
    }
    
    function inicioSimulacion(){
        console.log("Valor punto: "+valorPunto)
        document.getElementById("opcionPunto").style.display = 'none';
        document.getElementById("tipoDocente").style.display = '';
        document.getElementById("simulacion").style.display = '';
        document.getElementById("registro").style.display = '';
        document.getElementById("card").style.display = 'none';
        document.getElementById("inputNombre").value = "";
        document.getElementById("inputNombre").value = "";
        document.getElementById("inputNombre").value = "";
        tipoDocenteTemp = 0;
        totalPuntos = 0;
    }
    
    document.getElementById("inputPunto").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-siguiente");
            let valor = this.value.replace(/\D/g, ""); // Elimina caracteres no numéricos
            if (valor === "") {
                this.value = ""; // Si está vacío, no muestra nada
                return;
            }
            
            if(this.value.length > 0){
                divBtnSiguiente.style.display = '';
            }else{
                divBtnSiguiente.style.display = 'none';
            }
        
            let numero = parseInt(valor, 10); // Convierte el valor a número
            this.value = `$${numero.toLocaleString("es-CO")}`;
    });
    
    document.getElementById("inputNombre").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/[0-9]/g, "").replace(/[^a-zA-Z\s]/g, ""); // Elimina caracteres no numéricos
        
        if(this.value.length>0 && document.getElementById("inputApellido").value.length>0 && document.getElementById("inputCedula").value.length>6){
            divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById("inputApellido").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/[0-9]/g, "").replace(/[^a-zA-Z\s]/g, ""); // Elimina caracteres no numéricos
        
        if(this.value.length>0 && document.getElementById("inputCedula").value.length>6 && document.getElementById("inputNombre").value.length>0){
        divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById("inputCedula").addEventListener("input", function () {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/\D/g, ""); // Elimina caracteres no numéricos
        
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
        
        if(this.value.length>6 && document.getElementById("inputApellido").value.length>0 && document.getElementById("inputNombre").value.length>0){
            divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById('miCheckbox').addEventListener('change', function () {
        if (this.checked) {
          console.log('Checkbox marcado');
          document.getElementById("inputAñosEspecializacion").style.display = '';
        } else {
          console.log('Checkbox desmarcado');
          document.getElementById("inputAñosEspecializacion").style.display = 'none';
        }
      });
    </script>

</body>
</html>