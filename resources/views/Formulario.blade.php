<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>
     
   <div class ="container">
      
    <div class = "row">

        <div  class="col">
          <label for="formGroupExampleInput">N° Bipsia:</label>
        
        </div>

        <div  class="col">
          <label for="formGroupExampleInput">historia clinica:</label>
          
        </div>
    </div>
  <br>


  <div class="jumbotron text-center">
      <h4> SERVICIO DE ANATOMÍA PATOLÓGICA INFORME DE BIOPSIA</h4><br>
  </div>
  <form>
    <div class="row">
      <div class="container">
          <label for="formGroupExampleInput">Ingrese Rut</label>
          <input type="text" maxlength="10" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT">
        <button type="submit">Consultar Rut</button>
        <script src="validarRUT.js"></script>
      </div>
      <div class="col">
        <label for="formGroupExampleInput">Ingrese nombre</label>
        <input type="text" class="form-control" placeholder="Nombre">
      </div>

      <div class="col">
        <label for="formGroupExampleInput">Ingrese edad </label>
        <input type="number" min="0" class="form-control" placeholder="Edad">
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col">
        <label for="formGroupExampleInput">Servicio</label>
        <input type="text" class="form-control" placeholder="Nombre">
      </div>

      <div class="col">
        <label for="formGroupExampleInput">Muestra</label>
        <input type="text" class="form-control" placeholder="Muestra">
      </div>
    </div>
  <br>
    <div class="form-group">
      <label for="formGroupExampleInput">Ingrese diagnostico</label>
      <textarea class="form-control" id="formGroupExampleInput" rows="3" placeholder="Diagnostico"></textarea>
    </div>

  </form>
  <br>
  <form>
  <div class="form-group">
      <label for="formGroupExampleInput">Ingrese Antecedentes clinicos</label>
      <textarea class="form-control" id="formGroupExampleInput" rows="3" placeholder="Antecedentes clinicos"></textarea>
    </div>


  <div> 

    <div class="row">
      <div class="col">
        <label for="formGroupExampleInput">Ingrese medico Solicitante</label>
        <input type="text" class="form-control" placeholder="Nombre Medico">
      </div>
    </div> 

    <div class="row"> 
      <div class="col">
        <label for="formGroupExampleInput">Examen Macroscopico</label>
        <textarea class="form-control" id="formGroupExampleInput" rows="5" placeholder="Ingrese examen"></textarea>
      </div>
    </div>

    <br>
      <div class ="rows col-md-6">
        <label for="formGroupExampleInput">Fecha toma muestra </label>
        <input type="date" class="form-control" placeholder="Fecha de muestra">
        <label for="formGroupExampleInput">Fecha de ingreso</label>
        <input type="date" class="form-control" placeholder="Fecha de ingreso">
        <label for="formGroupExampleInput">Fecha de informe </label>
        <input type="date" class="form-control" placeholder="Fecha de informe">
      </div>
    </div>
    
    <br>

    <div class="row">
      <div class="col">
        <label for="formGroupExampleInput">Examen Microscopico</label>
        <textarea class="form-control" id="formGroupExampleInput" rows="5" placeholder="Ingrese examen"></textarea>
      </div>

  </div>

  <br>
  <br>
  <div class="form-group">
      <label for="formGroupExampleInput">Ingrese diagnostico</label>
      <textarea class="form-control" id="formGroupExampleInput" rows="3" placeholder="Diagnostico"></textarea>
    </div>
    
  <div class="form-group">
      <label for="formGroupExampleInput">Notas</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese notas">
  </div>

  <div class="row">
      <div class="col">
        <label for="formGroupExampleInput">Ingrese numero de laminas</label>
        <input type="number" min ="0" class="form-control" placeholder="Laminas">
      </div>

      <div class="col">
        <label for="formGroupExampleInput">Ingrese codigo</label>
        <input type="text" class="form-control" placeholder="Codigo">
      </div>
    </div>

  <br>
  <div class="form-group">
      <label for="formGroupExampleInput"></label>Mensaje Interno
      <textarea class="form-control" id="formGroupExampleInput" rows="3" placeholder="Mensaje"></textarea>
    </div> 


</div>

</form>
<br>

 
<script>
      function checkRut(rut) {
        // Despejar Puntos
        var valor = rut.value.replace('.','');
        // Despejar Guión
        valor = valor.replace('-','');
        
        // Aislar Cuerpo y Dígito Verificador
        cuerpo = valor.slice(0,-1);
        dv = valor.slice(-1).toUpperCase();
        
        // Formatear RUN
        rut.value = cuerpo + '-'+ dv
        
        // Si no cumple con el mínimo ej. (n.nnn.nnn)
        if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
        
        // Calcular Dígito Verificador
        suma = 0;
        multiplo = 2;
        
        // Para cada dígito del Cuerpo
        for(i=1;i<=cuerpo.length;i++) {
        
            // Obtener su Producto con el Múltiplo Correspondiente
            index = multiplo * valor.charAt(cuerpo.length - i);
            
            // Sumar al Contador General
            suma = suma + index;
            
            // Consolidar Múltiplo dentro del rango [2,7]
            if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
      
        }
        
        // Calcular Dígito Verificador en base al Módulo 11
        dvEsperado = 11 - (suma % 11);
        
        // Casos Especiales (0 y K)
        dv = (dv == 'K')?10:dv;
        dv = (dv == 0)?11:dv;
        
        // Validar que el Cuerpo coincide con su Dígito Verificador
        if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
        
        // Si todo sale bien, eliminar errores (decretar que es válido)
        rut.setCustomValidity('');
    }
</script>


    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>