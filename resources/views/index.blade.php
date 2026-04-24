@extends('templates.base')

@section('content')
    <div class="container">

        <header>
            <div id="imagen"><img src="{{ asset('css/Logo Global Talk.png') }}" alt="Logo de Global Talk"></div>

            <div class="header-titles">
                <h2 id="slogan">Conectá con el mundo aprendiendo idiomas</h2>
                <h1 id="nombre-empresa">Global Talk</h1>
                <p class="mini-frase">Más de 20 años formando estudiantes</p>
            </div>
        </header>


        <main>
            <section class="welcome-section">
                <p class="descripcion">
                    <strong>Abrí la puerta a nuevas oportunidades.</strong><br>
                    En Global Talk no solo aprendés un idioma, aprendés a conectar con el mundo.
                    Clases dinámicas, profesores capacitados y una metodología pensada para que avances de verdad.
                </p>
                <a href="#form" class="cta-button">Quiero empezar</a>
            </section>

            <section class="intro-section">
                <p class="text-center">Contamos con cursos en Inglés, Francés y Alemán</p>
                <div id="tabla_modalidades" class="tabla_container">
                    <table>
                        <caption>Modalidades de Cursos</caption>
                        <thead>
                            <tr>
                                <th>Modalidad</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Presencial</td>
                                <td>Clases dictadas en el aula</td>
                            </tr>
                            <tr>
                                <td>Virtual</td>
                                <td>Clases dictadas en línea a través de internet</td>
                            </tr>
                            <tr>
                                <td>Híbrido</td>
                                <td>Combinación de clases en el aula y en línea</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="schedules-section">
                <div class="text-center">
                    <label for="sel_idioma" style="font-size: 1.2em; font-weight: bold; color: var(--celeste-6);">Selecciona tu idioma</label>
                    <select name="sel_idioma" id="sel_idioma" class="styled-select">
                        <option value="">-- Seleccionar --</option>
                        <option value="ingles">Inglés</option>
                        <option value="frances">Francés</option>
                        <option value="aleman">Alemán</option>
                    </select>
                </div>

                <div id="horarios_ingles" class="tabla_horarios">
                    <table>
                        <caption>Horarios de Inglés</caption>
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Horario</th>
                                <th>Nivel</th>
                                <th>Horas</th>
                                <th>Modalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>8:00 a 10:00</td>
                                <td>Básico A1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>10:00 a 12:00</td>
                                <td>Básico A2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>12:00 a 14:00</td>
                                <td>Intermedio B1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>14:00 a 16:00</td>
                                <td>Intermedio B2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>16:00 a 18:00</td>
                                <td>Avanzado C1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>18:00 a 20:00</td>
                                <td>Avanzado C2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="horarios_frances" class="tabla_horarios">
                    <table>
                        <caption>Horarios de Francés</caption>
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Horario</th>
                                <th>Nivel</th>
                                <th>Horas</th>
                                <th>Modalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>8:00 a 10:00</td>
                                <td>Básico A1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>10:00 a 12:00</td>
                                <td>Básico A2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>12:00 a 14:00</td>
                                <td>Intermedio B1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>14:00 a 16:00</td>
                                <td>Intermedio B2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>16:00 a 18:00</td>
                                <td>Avanzado C1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>18:00 a 20:00</td>
                                <td>Avanzado C2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="horarios_aleman" class="tabla_horarios">
                    <table>
                        <caption>Horarios de Alemán</caption>
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Horario</th>
                                <th>Nivel</th>
                                <th>Horas</th>
                                <th>Modalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>8:00 a 10:00</td>
                                <td>Básico A1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>10:00 a 12:00</td>
                                <td>Básico A2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>12:00 a 14:00</td>
                                <td>Intermedio B1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>14:00 a 16:00</td>
                                <td>Intermedio B2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>16:00 a 18:00</td>
                                <td>Avanzado C1</td>
                                <td>2 hs</td>
                                <td>Presencial</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>18:00 a 20:00</td>
                                <td>Avanzado C2</td>
                                <td>2 hs</td>
                                <td>Virtual</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="form" class="form-section">
                <iframe src="{{ route('contacto') }}" scrolling="no"></iframe>
            </section>
        </main>
    </div>
@endsection

@section('footer')
    <footer>
        <p>&copy; 2026 Global Talk. Todos los derechos reservados.</p>
    </footer>

    <script>
        const select = document.getElementById('sel_idioma');
        const divs = document.querySelectorAll('.tabla_horarios');

        // Ocultar los horarios por defecto al cargar la página
        divs.forEach(div => div.style.display = 'none');

        select.addEventListener('change', function() {
            // Ocultar todos los divs
            divs.forEach(div => div.style.display = 'none');

            // Mostrar el div cuyo id coincida con el valor seleccionado
            const valorSeleccionado = this.value;
            if (valorSeleccionado) {
                const divMostrar = document.getElementById('horarios_' + valorSeleccionado);
                if (divMostrar) {
                    divMostrar.style.display = 'block';
                }
            }
        });
    </script>
@endsection
