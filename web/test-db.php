$servername = "db";          // 这里的 "db" 是 Docker Compose 中的服务名称
$username = "your_user";      // 你的数据库用户名
$password = "your_password";  // 你的数据库密码
$dbname = "your_database";    // 数据库名称

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
