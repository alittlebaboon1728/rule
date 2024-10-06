<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        .movie-block {
            width: 200px;
            height: 300px;
            border: 1px solid #ccc;
            margin: 20px;
            display: inline-block;
            text-align: center;
            background-color: #f9f9f9;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .movie-block:hover {
            background-color: #e0e0e0;
            transform: scale(1.05); /* 放大效果 */
        }

        .movie-block img {
            width: 100%;
            height: 80%;
        }

        .movie-block h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Movie List</h1>

    <?php
    // 定义影视文件夹的根目录
    $uploadsDir = 'uploads/';

    // 遍历uploads目录，查找所有文件夹
    foreach (glob($uploadsDir . '*', GLOB_ONLYDIR) as $movieDir) {
        // 获取电影文件夹的名称（最后一级路径）
        $movieName = basename($movieDir);

        // 尝试从电影文件夹中获取封面图片
        $coverImage = $movieDir . '/cover.jpg';

        // 检查封面图片是否存在
        if (file_exists($coverImage)) {
            echo '<div class="movie-block" onclick="window.location.href=\'view.php?movie=' . urlencode($movieName) . '\'">';
            echo '<img src="' . $coverImage . '" alt="' . $movieName . '">';
            echo '<h3>' . htmlspecialchars($movieName) . '</h3>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>
