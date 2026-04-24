@extends('templates.base')

@section('title', 'Contacto')

@section('content')
    <div class="form-wrapper">
        <form action="{{ route('enviar') }}" id="contact_form">
            <fieldset>
                <legend>
                    <h1>Formulario de inscripción</h1>
                    <br>
                    <br>
                </legend>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="+54 3496 123456">
                </div>

                <div class="form-group">
                    <label for="idioma_de_interes">Idioma de interés</label>
                    <select name="idioma_de_interes" id="idioma_de_interes">
                        <option value="ingles">Inglés</option>
                        <option value="frances">Francés</option>
                        <option value="italiano">Italiano</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nivel_previo">Nivel previo</label>
                    <select name="nivel_previo" id="nivel_previo">
                        <option value="principiante">Principiante</option>
                        <option value="intermedio">Intermedio</option>
                        <option value="avanzado">Avanzado</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>¿Pertenece a una empresa?</label>
                    <div class="radio-options">
                        <input type="radio" id="empresa_si" name="empresa" value="si">
                        <label for="empresa_si">Sí</label>
                        <input type="radio" id="empresa_no" name="empresa" value="no">
                        <label for="empresa_no">No</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>¿Desea comprar un pack grupal?</label>
                    <div class="radio-options">
                        <input type="radio" id="pack_si" name="pack" value="si">
                        <label for="pack_si">Sí</label>
                        <input type="radio" id="pack_no" name="pack" value="no">
                        <label for="pack_no">No</label>
                    </div>
                </div>

            </fieldset>

            <div class="form-actions">
                <button type="submit">Enviar</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>
    </div>
@endsection