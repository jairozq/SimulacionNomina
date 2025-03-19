<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <title>Nomina</title>
    <style>
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            margin: 15px;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
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
            width: 95%;
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
            border-color: #ff7f7f;
            outline: none;
            background: #fff;
        }
        
        
        button {
            width: 70%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background: #ff4d4d;
        }
        
        .opciones-botones{
            flex: 1;
            padding: 10px;
            background: #ff7f7f;
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
            color: #ff7f7f;
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
        
        .alinear {
            display: flex;
            align-items: center;
            gap: 10px;
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
                    <div class="alinear">
                        <label class="label">Especialización</label>
                        <input type="checkbox" class="check unchecked" id="checkbox">
                    </div>
                    <div class="alinear" id="inputCanEspecializacion" style="display: none">
                        <label class="label">Cantidad:</label>
                        <input id="numEspecializacion" class="input pequeno text-center" type="number" max="2" min="1" value="1" onkeydown="return false;"></input>
                    </div>
                    
                    <div class="alinear">
                        <label class="label">Maestria</label>
                        <input type="checkbox" class="check unchecked" id="checkbox2">
                    </div>
                    <div class="alinear" id="inputCanMaestrias" style="display: none">
                        <label class="label">Cantidad:</label>
                        <input id="numMaestria" class="input pequeno text-center" type="number" max="2" min="1" value="1" onkeydown="return false;"></input>
                    </div>
                    
                    <div class="alinear">
                        <label class="label">Doctorado</label>
                        <input type="checkbox" class="check unchecked" id="checkbox3">
                    </div>
                    <div class="alinear" id="inputCanDoc" style="display: none">
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
            <div class="tabla" id="tablas">
                <table border="1" cellpadding="10" cellspacing="0" id="tabla1">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Fecha de Ingreso</th>
                      <th>Cédula</th>
                      <th>Tipo Docente</th>
                      <th>Pregrado</th>
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
                      <td>178</td>
                      <td>20</td>
                      <td>40</td>
                      <td>80</td>
                      <td>$6.644.610</td>
                    </tr>
                  </tbody>
                </table>
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
                  <tbody id="tablaDocentes">
                    <tr data-tipo="Docente de Planta">
                      <td>Docente de Planta</td>
                      <td id="cantidadP">1</td>
                      <td id="gastoP">$6.644.610</td>
                      <td id="promedioP">$6.644.610</td>
                    </tr>
                    <tr data-tipo="Docente Ocacionales">
                      <td>Docente Ocacionales</td>
                      <td id="cantidadO">0</td>
                      <td id="gastoO">$0</td>
                      <td id="promedioO">$0</td>
                    </tr>
                  </tbody>
                </table>
                <p id="Total">Total Docentes: 0 | Gasto Total: $0 | Promedio: $0</p>
            </div>
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
    let especializacion = 0;
    let maestria = 0;
    let doctorado = 0;
    let totalPuntos = 0;
    
    function visualizarFormulario(tipoDocente){
        document.getElementById("tipoDocente").style.display = 'none';
        document.getElementById("divFormulario").style.display = '';
        
        if(tipoDocente==1){
            tipoDocenteTemp = 1;
        }else if(tipoDocente==2){
            tipoDocenteTemp = 2;
        }
    }
    
    function guardarDocente(){
        const apellido = document.getElementById("inputApellido").value;
        const nombre = document.getElementById("inputNombre").value;
        const cedula = document.getElementById("inputCedula").value;
        const pregradoSelect = document.querySelector("select").value;
        if (pregradoSelect === "normal"){
            totalPuntos = totalPuntos + pregrado;
        }else{
            totalPuntos = totalPuntos + pregradoE;
        }
        const salario = totalPuntos * valorPunto;
        
        const tabla = document.getElementById("tabla1").getElementsByTagName('tbody')[0];
        const nuevaFila = tabla.insertRow();
        
        nuevaFila.insertCell(0).innerText = nombre;
        nuevaFila.insertCell(1).innerText = apellido;
        nuevaFila.insertCell(2).innerText = new Date().toISOString().split('T')[0];
        nuevaFila.insertCell(3).innerText = cedula;
        nuevaFila.insertCell(4).innerText = (tipoDocenteTemp === 1) ? 'Docente de Planta' : 'Docente Ocasional';
        nuevaFila.insertCell(5).innerText = (pregradoSelect === "normal") ? pregrado : pregradoE;
        nuevaFila.insertCell(6).innerText = especializacion;
        nuevaFila.insertCell(7).innerText = maestria;
        nuevaFila.insertCell(8).innerText = doctorado;
        nuevaFila.insertCell(9).innerText = `$${salario.toLocaleString('es-CO')}`;
        actualizarTablaTotales(tipoDocenteTemp,salario);
        inicioSimulacion();
    }
    
    function actualizarTablaTotales(tipoDocente, valor) {
        // Variables para totales generales
        let totalCantidad = 0;
        let totalGasto = 0;
        
        // Variables para cada tipo
        let cantidad, gasto, promedio;
        
        if (tipoDocente === 1) { // Docente de Planta
        cantidad = parseInt(document.getElementById("cantidadP").innerText) || 0;
        gasto = parseFloat(document.getElementById("gastoP").innerText.replace(/\D/g, "")) || 0;
        
        cantidad += 1;
        gasto += valor;
        
        promedio = gasto / cantidad;
        
        document.getElementById("cantidadP").innerText = cantidad;
        document.getElementById("gastoP").innerText = `$${gasto.toLocaleString('es-CO')}`;
        document.getElementById("promedioP").innerText = `$${promedio.toLocaleString('es-CO', { minimumFractionDigits: 2 })}`;
        
        } else if (tipoDocente === 2) { // Docente Ocacionales
        cantidad = parseInt(document.getElementById("cantidadO").innerText) || 0;
        gasto = parseFloat(document.getElementById("gastoO").innerText.replace(/\D/g, "")) || 0;
        
        cantidad += 1;
        gasto += valor;
        
        promedio = gasto / cantidad;
        
        document.getElementById("cantidadO").innerText = cantidad;
        document.getElementById("gastoO").innerText = `$${gasto.toLocaleString('es-CO')}`;
        document.getElementById("promedioO").innerText = `$${promedio.toLocaleString('es-CO', { minimumFractionDigits: 2 })}`;
        }
        
        // Sumamos totales
        const cantidadP = parseInt(document.getElementById("cantidadP").innerText) || 0;
        const cantidadO = parseInt(document.getElementById("cantidadO").innerText) || 0;
        const gastoP = parseFloat(document.getElementById("gastoP").innerText.replace(/\D/g, "")) || 0;
        const gastoO = parseFloat(document.getElementById("gastoO").innerText.replace(/\D/g, "")) || 0;
        
        totalCantidad = cantidadP + cantidadO;
        totalGasto = gastoP + gastoO;
        
        const promedioGeneral = totalCantidad > 0 ? (totalGasto / totalCantidad) : 0;
        
        document.getElementById("Total").innerText = `Total Docentes: ${totalCantidad} | Gasto Total: $${totalGasto.toLocaleString('es-CO')} | Promedio: $${promedioGeneral.toLocaleString('es-CO', { minimumFractionDigits: 2 })}`;
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
        document.getElementById("inputCanEspecializacion").style.display = 'none';
        document.getElementById("btn-siguiente").style.display = 'none';
        document.getElementById("inputCanMaestrias").style.display = 'none';
        document.getElementById("inputCanDoc").style.display = 'none';
        document.getElementById("opcionPunto").style.display = 'none';
        document.getElementById("tipoDocente").style.display = '';
        document.getElementById("simulacion").style.display = '';
        document.getElementById("registro").style.display = '';
        document.getElementById("card").style.display = 'none';
        document.getElementById("totales").style.display = '';
        document.getElementById("inputNombre").value = "";
        document.getElementById("inputApellido").value = "";
        document.getElementById("inputCedula").value = "";
        document.getElementById('checkbox').checked = false;
        document.getElementById('checkbox2').checked = false;
        document.getElementById('checkbox3').checked = false;
        especializacion = 0;
        maestria = 0;
        doctorado = 0;
        tipoDocenteTemp = 0;
        totalPuntos = 0;
    }
    
    document.getElementById("inputPunto").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-siguiente");
            let valor = this.value.replace(/\D/g, "");
            if (valor === "") {
                this.value = "";
                return;
            }
            
            if(this.value.length > 0){
                divBtnSiguiente.style.display = '';
            }else{
                divBtnSiguiente.style.display = 'none';
            }
        
            let numero = parseInt(valor, 10);
            this.value = `$${numero.toLocaleString("es-CO")}`;
    });
    
    document.getElementById("inputNombre").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/[0-9]/g, "").replace(/[^a-zA-Z\s]/g, "");
        
        if(this.value.length>0 && document.getElementById("inputApellido").value.length>0 && document.getElementById("inputCedula").value.length>6){
            divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById("inputApellido").addEventListener("input", function (e) {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/[0-9]/g, "").replace(/[^a-zA-Z\s]/g, "");
        
        if(this.value.length>0 && document.getElementById("inputCedula").value.length>6 && document.getElementById("inputNombre").value.length>0){
        divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById("inputCedula").addEventListener("input", function () {
        const divBtnSiguiente = document.getElementById("btn-guardar");
        this.value = this.value.replace(/\D/g, "");
        
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
        
        if(this.value.length>6 && document.getElementById("inputApellido").value.length>0 && document.getElementById("inputNombre").value.length>0){
            divBtnSiguiente.style.display = '';
        }else{
            divBtnSiguiente.style.display = 'none';
        }
    });
    
    document.getElementById('checkbox').addEventListener('change', function () {
        if (this.checked) {
          document.getElementById("inputCanEspecializacion").style.display = '';
          totalPuntos = totalPuntos + 20;
          especializacion = especializacion + 20;
        } else {
          document.getElementById("inputCanEspecializacion").style.display = 'none';
          totalPuntos = totalPuntos - 20;
          especializacion = especializacion - 20;
        }
    });
    
    document.getElementById('numEspecializacion').addEventListener('change', function () {
        if (this.value == 2) {
          totalPuntos = totalPuntos + 10;
          especializacion = especializacion + 10;
        } else {
          totalPuntos = totalPuntos - 10;
          especializacion = especializacion - 20;
        }
    });
      
    document.getElementById('checkbox2').addEventListener('change', function () {
        if (this.checked) {
            document.getElementById("inputCanMaestrias").style.display = '';
            totalPuntos = totalPuntos + 40;
            maestria = maestria + 40;
        } else {
            document.getElementById("inputCanMaestrias").style.display = 'none';
            totalPuntos = totalPuntos - 40;
            maestria = maestria - 40;
        }
    });
    
    document.getElementById('numMaestria').addEventListener('change', function () {
        if (this.value == 2) {
          totalPuntos = totalPuntos + 20;
          maestria = maestria + 20;
        } else {
          totalPuntos = totalPuntos - 20;
          maestria = maestria - 20;
        }
    });
      
    document.getElementById('checkbox3').addEventListener('change', function () {
        if (this.checked) {
          document.getElementById("inputCanDoc").style.display = '';
          totalPuntos = totalPuntos + 80;
          doctorado = doctorado + 80;
        } else {
          document.getElementById("inputCanDoc").style.display = 'none';
          totalPuntos = totalPuntos - 80;
          doctorado = doctorado - 80;
        }
    });
    
    document.getElementById('numDoctorado').addEventListener('change', function () {
        if (this.value == 2) {
            totalPuntos = totalPuntos + 40;
            doctorado = doctorado + 40;
        } else {
            totalPuntos = totalPuntos - 40;
            doctorado = doctorado - 40;
        }
    });
    </script>

</body>
</html>
