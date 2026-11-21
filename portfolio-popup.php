<?php
header('Content-Type: application/json');
$id = $_GET['id'] ?? '1';
$file = __DIR__ . '/portfolio_data.json';
if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
    if (isset($data[$id])) {
        echo json_encode($data[$id]);
        exit;
    }
}
echo json_encode(['error' => 'Project details not found']);
