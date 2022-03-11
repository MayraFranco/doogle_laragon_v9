@extends('Layouts.navbar')

@section('LoginPrincipal')
    
<!---------  Contenedor del Registro Dueño  ----------------->
<div class="containerRegistro" id="dueño">
    <div>
        <!---------  Imagen del Dueño  ----------------->
        <div class="ImagenDueño">

        </div>

        <!---------  Contenedor Formulario Dueño  ----------------->
        <div class="RegistroDueño">
            <img src="/img/logo.png" alt="Logo doogle">
            
            <h3>¡Bienvenido al equipo!</h3>

            <!--------- Formulario Dueño  ----------------->
            <form method="POST" action="/Duenos" name="formDueno">
                @csrf
                <div class="row">
                    <div class="form-group col-3">
                    <!-------------------------------------
                        * Valores de rol:
                            - 1:Dueño
                            - 2:Rescatista/Voluntario 
                            - 3:Veterinaria
                            - 4:Asociasiones
                    --------------------------------------->
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Seleciona un rol</label>
                        <select class="form-control" name="rol" id="RolDueno" onchange="seleccionaRegistro(id)">
                            <option value="1">Dueño</option>
                            <option value="2">Rescatista/Voluntario</option>
                            <!-----option value="3">Veterinaria</option----->
                            <option value="4">Asociaciones</option>
                        </select>
                    </div>
                </div>

                <!---------  Nombre Completo  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Nombre Completo* </label>
                        <input type="text" id="nombreDueno" name="nombreDueno" class="form-control" >
                    </div>
                </div>

                <!--------- Celular Dueño  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Número de celular* </label>
                        <input type="text" name="celularDueno" class="form-control">
                    </div>
                </div>

                <!---------  Domicilo del dueño  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Domicilio* </label>
                        <input type="text" name="domicilioDueno" class="form-control">
                    </div>
                </div>

                <!--- Campo del correo electronico del registro Dueño ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Correo electrónico* </label>
                        <input type="text" name="correoDueno" class="form-control">
                    </div>
                </div>
                <!--- Campo contraseña del registro ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Contraseña*</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <!---------  Terminos y condiciones  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-check col-6">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Acepto los terminos y condiciones
                        </label>
                    </div>
                </div>

                <!---------  Boton registro  ----------------->
                <div class="BotonRegistroUsuario">
                    <div class="row">
                        <div class="form-group col-3">
                            
                        </div>
                        <div class="form-group col-6">
                            <button id="enviar"  type="submit">Guardar mi registro</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!---------  Boton Cancelar  ----------------->
            <div class="BotonCancelarRegistro">
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <button><a href="/Login">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------  Contenedor del Registro Rescatista/Voluntario  ----------------->
<div class="containerRegistro" id="rescatista">
    <div>
        <!---------  Imagen Rescatista/Voluntario  ----------------->
        <div class="ImagenRescatista">

        </div>

        <!---------  Contenedor del Formulario Rescatista/Voluntario  ----------------->
        <div class="RegistroDueño">
            <img src="/img/logo.png" alt="Logo doogle">
            
            <h3>¡Bienvenido al equipo!</h3>
            <form method="POST" action="/Rescatista">
                @csrf
                <div class="row">
                    <div class="form-group col-3">
                    <!-------------------------------------
                        * Valores de rol:
                            - 1:Dueño
                            - 2:Rescatista/Voluntario
                            - 3:Veterinaria
                            - 4:Asociasiones
                    --------------------------------------->
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Seleciona un rol</label>
                        <select class="form-control" name="rol" id="RolRescatista" onchange="seleccionaRegistro(id)">
                            <option value="1">Dueño</option>
                            <option value="2">Rescatista/Voluntario</option>
                            <!---------option value="3">Veterinaria</option-------->
                            <option value="4">Asociaciones</option>
                        </select>
                    </div>
                </div>

                <!---------  Nombre Rescatista/Voluntario  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Nombre Completo* </label>
                        <input type="text" name="nombreRescatista" class="form-control">
                    </div>
                </div>

                <!---------  Celular del Rescatista  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Número de celular* </label>
                        <input type="text" name="celularRescatista" class="form-control">
                    </div>
                </div>

                <!---------  Domicilio Rescatista/Voluntario  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Domicilio* </label>
                        <input type="text" name="domicilioRescatista" class="form-control">
                    </div>
                </div>

                <!---------  Disponibilidad de Rescatista  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Disponibilidad</label>
                        <input type="text" name="disponibilidad" class="form-control">
                    </div>
                </div>

                <!---------  Vehiculo de Rescatista  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Cuenta con medio de transporte*</label>
                        <input type="text" name="transporte" class="form-control">
                    </div>
                </div>

                <!--- Campo del correo electronico Rescatista ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Correo electrónico* </label>
                        <input type="text" name="correoRescatista" class="form-control" >
                    </div>
                </div>

                <!--- Campo contraseña del registro ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Contraseña*</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <!---------  Terminos y condiciones  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-check col-6">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Acepto los terminos y condiciones
                        </label>
                    </div>
                </div>

                <!---------  Boton de registro  ----------------->
                <div class="BotonRegistroUsuario">
                    <div class="row">
                        <div class="form-group col-3">
                            
                        </div>
                        <div class="form-group col-6">
                            <button type="submit">Guardar mi registro</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!--------- Boton de cancelar  ----------------->
            <div class="BotonCancelarRegistro">
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <button><a href="/Login">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------  Contenedor del Registro Veterinaria  ----------------->
<div class="containerRegistro" id="veterinaria">
    <div>
        <!---------  Imagen de la veterinaria  ----------------->
        <div class="ImagenVeterinaria">

        </div>

        <!---------  Contenedor del formulario de Veterinaria  ----------------->
        <div class="RegistroDueño">
            <img src="/img/logo.png" alt="Logo doogle">
            
            <h3>¡Bienvenido al equipo!</h3>
            <form method="POST" action="/Veterinaria">
                @csrf
                <div class="row">
                    <div class="form-group col-3">
                    <!-------------------------------------
                        * Valores de rol:
                            - 1:Dueño
                            - 2:Rescatista/Voluntario
                            - 3:Veterinaria
                            - 4:Asociasiones
                    --------------------------------------->
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Seleciona un rol</label>
                        <select class="form-control" name="rol" id="RolVeterinaria" onchange="seleccionaRegistro(id)">
                            <option value="1">Dueño</option>
                            <option value="2">Rescatista/Voluntario</option>
                            <!---------option value="3">Veterinaria</option-------->
                            <option value="4">Asociaciones</option>
                        </select>
                    </div>
                </div>

                <!---------  Nombre Veterinaria  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Nombre de la Veterinaria </label>
                        <input type="text" name="nombreVeterinaria" class="form-control">
                    </div>
                </div>

                <!---------  Telefono Veterinaria  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Número de contacto* </label>
                        <input type="text" name="telefonoVeterinaria" class="form-control">
                    </div>
                </div>

                <!---------  Dirección Veterinaria  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Direccion* </label>
                        <input type="text" name="direccionVeterinaria" class="form-control">
                    </div>
                </div>

                <!--------- Responsable de Veterinaria  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Nombre de la persona responsable*</label>
                        <input type="text" name="responsableVeterinaria" class="form-control">
                    </div>
                </div>

                <!---------  Cedula profesional Veterinaria  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Cedula Profesional*</label>
                        <input type="text" name="cedula" class="form-control">
                    </div>
                </div>

                <!--- Campo del correo electronico del veterinaria ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Correo electrónico* </label>
                        <input type="text" name="correoVeterinaria" class="form-control" >
                    </div>
                </div>

                <!--- Campo contraseña del registro ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Contraseña*</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <!---------  Aceptación Terminos y condiciones  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-check col-6">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Acepto los terminos y condiciones
                        </label>
                    </div>
                </div>

                <!---------  Boton de registrarse  ----------------->
                <div class="BotonRegistroUsuario">
                    <div class="row">
                        <div class="form-group col-3">
                            
                        </div>
                        <div class="form-group col-6">
                            <button type="submit">Guardar mi registro</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!---------  Boton Cancelar  ----------------->
            <div class="BotonCancelarRegistro">
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <button><a href="/Registro">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------  Contenedor del Registro Asociación  ----------------->
<div class="containerRegistro" id="Asociacion">
    <div>
        <!---------  Imagen Asociación  ----------------->
        <div class="ImagenAsociacion">

        </div>

        <!---------  Contenedor del Formulario Asociación  ----------------->
        <div class="RegistroDueño">
            <img src="/img/logo.png" alt="Logo doogle">
            
            <h3>¡Bienvenido al equipo!</h3>
            <form method="POST" action="/Organizaciones">
                @csrf
                <div class="row">
                    <div class="form-group col-3">
                    <!-------------------------------------
                        * Valores de rol:
                            - 1:Dueño
                            - 2:Rescatista/Voluntario
                            - 3:Veterinaria
                            - 4:Asociasiones
                    --------------------------------------->
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Seleciona un rol</label>
                        <select class="form-control" name="rol" id="RolAsociasion" onchange="seleccionaRegistro(id)">
                            <option value="1">Dueño</option>
                            <option value="2">Rescatista/Voluntario</option>
                            <!---------option value="3">Veterinaria</option-------->>
                            <option value="4">Asociaciones</option>
                        </select>
                    </div>
                </div>

                <!---------  Nombre Asociación  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Nombre de la Organizacion* </label>
                        <input type="text" name="nombreOrganizacion" class="form-control">
                    </div>
                </div>

                <!---------  Telefono de la Asociación  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Número de contacto* </label>
                        <input type="text" name="telefonoOrganizacion" class="form-control">
                    </div>
                </div>

                <!---------  Direccion de la Asociación  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Direccion* </label>
                        <input type="text" name="direccionOrganizacion" class="form-control">
                    </div>
                </div>

                <!---------  Responsable de la Asociación  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Nombre de la persona responsable*</label>
                        <input type="text" name="responsableOrganizacion" class="form-control">
                    </div>
                </div>

                <!--- Campo del correo electronico de la Asociacion ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="usr">Correo electrónico* </label>
                        <input type="text" name="correoOrganizacion" class="form-control" >
                    </div>
                </div>

                <!--- Campo contraseña ---->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Contraseña*</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <!---------  Aceptacion de Termminos y condiciones  ----------------->
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-check col-6">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Acepto los terminos y condiciones
                        </label>
                    </div>
                </div>

                <!---------  Boton de Registro  ----------------->
                <div class="BotonRegistroUsuario">
                    <div class="row">
                        <div class="form-group col-3">
                            
                        </div>
                        <div class="form-group col-6">
                            <button type="submit">Guardar mi registro</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!---------  Boton de Cancelar Registro  ----------------->
            <div class="BotonCancelarRegistro">
                <div class="row">
                    <div class="form-group col-3">
                        
                    </div>
                    <div class="form-group col-6">
                        <button><a href="/Registro">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function seleccionaRegistro(id){
    console.log('id', id)
    //Obtenemos el elemento select
    var valor = document.getElementById(id);
    //Guardamos el valor que recibimos del select
    var temp = valor.value;
    //Que tipo de rol es?
    if(temp == 1)
    {
        $("#dueño").show();
        $("#rescatista").hide();
        $("#veterinaria").hide();
        $("#Asociacion").hide();
        //Seteamos el valor de select al formulario al momento de hacer el cambio
        document.getElementById("RolDueno").value = temp;

    } else if(temp == 2)
    {
        $("#dueño").hide();
        $("#rescatista").show();
        $("#veterinaria").hide();
        $("#Asociacion").hide();
        document.getElementById("RolRescatista").value = temp;
    } else if(temp == 3)
    {
        $("#dueño").hide();
        $("#rescatista").hide();
        $("#veterinaria").show();
        $("#Asociacion").hide();
        document.getElementById("RolVeterinaria").value = temp;
    } else if(temp == 4)
    {
        $("#dueño").hide();
        $("#rescatista").hide();
        $("#veterinaria").hide();
        $("#Asociacion").show();
        document.getElementById("RolAsociasion").value = temp;
    }
}

</script>
@endsection