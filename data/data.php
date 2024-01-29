<?php
// data.php

include '../db/connection.php';

// Obtener la categoría de la URL de manera segura
$categoryId = isset($_GET['category']) ? $_GET['category'] : '';

// Validar la categoría
$allowedCategories = ['underground', 'processing'];
if (!in_array($categoryId, $allowedCategories)) {
    // Categoría no válida
    echo "Categoría no válida: $categoryId";
    exit;
}

// Instanciar la clase Database
$database = new Database();
$conn = $database->connection();

try {
    // Consulta SQL para obtener los datos según la categoría
    $sql = "SELECT * FROM equipment WHERE category = :category";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':category', $categoryId);
    $stmt->execute();

    // Obtener los resultados
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verificar si hay resultados
    if ($data) {
        // Devolver datos en formato JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        // No se encontraron resultados
        echo "No se encontraron equipos para la categoría: $categoryId";
    }
} catch (PDOException $e) {
    // Manejar errores de la base de datos
    echo 'Error en la consulta: ' . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>