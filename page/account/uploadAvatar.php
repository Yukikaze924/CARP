<?php
$account = $_COOKIE['account'];
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
//&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        header("Location: fail/index.html");
    }
    else
    {
        // 打开临时文件并获取图像的宽度和高度
        list($width, $height, $type) = getimagesize($_FILES['file']['tmp_name']);

        // 判断宽高比是否大于1.0
        if ($width / $height > 1.0) {
            header("Location: fail/index.html");
        }

        // 使用GD库打开图像
        switch ($type) {
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
                break;
            case IMAGETYPE_PNG:
                $image = imagecreatefrompng($_FILES['file']['tmp_name']);
                break;
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($_FILES['file']['tmp_name']);
                break;
            default:
                die('Unsupported file type');
        }

        // 计算缩放比例
        $ratio = min(100 / $width, 100 / $height);
        // 计算缩放后的尺寸
        $new_width = $width * $ratio;
        $new_height = $height * $ratio;

        // 裁剪为正方形
        if ($new_width > $new_height) {
            $x = ($new_width - $new_height) / 2;
            $y = 0;
            $size = $new_height;
        } else {
            $x = 0;
            $y = ($new_height - $new_width) / 2;
            $size = $new_width;
        }

        // 缩放图像
        $image_resized = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        ob_start();
        imagepng($image_resized);
        $image_data = ob_get_clean();

        $base64_content = base64_encode($image_data);
        $conn = new mysqli("Localhost", "root", "", "carp");
        $conn->query("UPDATE users SET avatar = '$base64_content' WHERE account = '$account'");
        
        $avatarUrl = 'data:image/png;base64,' . $base64_content;
        $conn->query("UPDATE comments SET avatar = '$avatarUrl' WHERE account = '$account'");

        setcookie('avatar', $avatarUrl, 0, '/');

        $conn->close();
        header("Location: index.php");
    }
}
else
{
    echo "非法的文件格式";
}
?>