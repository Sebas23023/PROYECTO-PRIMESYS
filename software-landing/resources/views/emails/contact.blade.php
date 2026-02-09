<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Lead</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333;">
    <h2 style="color: #0ea5e9;">Nuevo mensaje recibido</h2>
    <p>Hola, has recibido una nueva consulta desde el formulario web.</p>
    
    <ul style="background-color: #f3f4f6; padding: 20px; border-radius: 8px; list-style: none;">
        <li><strong>Nombre:</strong> {{ $data['name'] }}</li>
        <li><strong>Correo del cliente:</strong> {{ $data['email'] }}</li>
    </ul>
    
    <p><strong>Mensaje:</strong></p>
    <div style="border-left: 4px solid #0ea5e9; padding-left: 15px; margin-top: 10px;">
        {{ $data['message'] }}
    </div>
</body>
</html>