<?
require 'Predis/Autoloader.php';
Predis\Autoloader::register();
try {
  $redis = new Predis\Client();
$data = file_get_contents("php://input");
$notification = json_decode($data);
$redis->lpush($notification->topic, $data);
echo "OK";
} catch (Exception $e) {
header('HTTP/1.1 500 Internal Server Error');
echo "ERRO",  $e->getMessage(), "\n";
}
?>