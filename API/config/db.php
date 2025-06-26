
<?php
include_once __DIR__ . '/config.php';

// 🌟 เชื่อมต่อด้วย `mysqli`
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die(json_encode(["error" => "MySQLi Connection failed: " . $conn->connect_error]));
}
$conn->set_charset("utf8mb4"); // ✅ สำคัญมาก ต้องเพิ่มบรรทัด
// 🌟 เชื่อมต่อด้วย `PDO`
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(["error" => "PDO Connection failed: " . $e->getMessage()]));
}
?>
