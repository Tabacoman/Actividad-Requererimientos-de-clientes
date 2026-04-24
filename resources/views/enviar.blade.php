@extends('templates.base')

@section('title', 'mensaje de confirmación')

@section('content')
    <div class="form-wrapper">
        <div class="confirmacion-card">
            <h1>¡Gracias por tu inscripción!</h1>
            <p>Hemos recibido tu solicitud y nos pondremos en contacto contigo a la brevedad.</p>

            <div id="mensaje_confirmacion">
                <div id="horarios_secretaria" class="tabla_horarios">
                    <table>
                        <caption>Horarios de Secretaría</caption>
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th>Horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>8:00 a 12:00</td>
                            </tr>
                            <tr>
                                <td>Lunes a Viernes</td>
                                <td>14:00 a 18:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <address>
                    <p><strong>Dirección:</strong> Calle Falsa 123</p>
                    <p><strong>Teléfono:</strong> 123456789</p>
                    <p><strong>Email:</strong> info@instituto.com</p>
                </address>
            </div>
            
            <div class="form-actions" style="margin-top: 20px;">
                <button onclick="window.top.location.href='{{ route('home') }}'">Volver al inicio</button>
            </div>
        </div>
    </div>
@endsection