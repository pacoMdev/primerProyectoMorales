<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$usuarios = [
    ['id' => 1,'nombre' => 'Juan Perez','email' => 'juan.perez@example.com','edad' => 28],
    ['id' => 2,'nombre' => 'Ana Garcia','email' => 'ana.garcia@example.com','edad' => 32],
    ['id' => 3,'nombre' => 'Luis Lopez','email' => 'luis.lopez@example.com','edad' => 24],
    ['id' => 4,'nombre' => 'Maria Fernandez','email' => 'maria.fernandez@example.com','edad' => 29]
];

$metodo= $_SERVER["REQUEST_METHOD"];
switch($metodo){
    case "GET":
        if (isset($_GET["id"])){
            // filtrado para buscar id pasada por url
            $existe=false;
            foreach ($usuarios as $usuario) {
                if ($usuario["id"] == $_GET["id"]){
                    echo json_encode([
                        "estado"=>"exit",
                        "usuario"=>$usuario
                    ]);
                    $existe=true;
                    break;
                }
            }
            if ($existe == false){
                http_response_code(404);
                echo json_encode([
                    "estado"=>"exit",
                    "usuarios"=>"no existe el usuario"
                ]);
            }
        }else{
            // codificar un array a json
            echo json_encode([
                "estado" => "exit",
                "usuarios" => $usuarios
            ]);
        }
        break;

    case "POST":
        $data = json_decode(file_get_contents("php://input"), true); // Obtener los datos del cuerpo en JSON
        if (isset($data["nombre"]) && isset($data["email"]) && isset($data["edad"])) {
            $nuevoUsuario = [
                "id" => count($usuarios) + 1, // Asigna un ID único incrementando el contador
                "nombre" => $data["nombre"],
                "email" => $data["email"],
                "edad" => $data["edad"]
            ];
            array_push($usuarios, $nuevoUsuario);
            echo json_encode([
                "estado" => "exito",
                "mensaje" => "Usuario agregado correctamente",
                "usuario" => $nuevoUsuario
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                "estado" => "error",
                "mensaje" => "Faltan datos necesarios"
            ]);
        }
        break;
    default:
        echo json_encode(["estado" => "error", "mensaje" => "Metodo no permitido"]);
        break;
}