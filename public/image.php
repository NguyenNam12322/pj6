<?php
// Đường dẫn đến file ảnh
$imagePath = '5872_65x90j_110.jpg';

// Kiểm tra xem file tồn tại không
if (!file_exists($imagePath)) {
    header("HTTP/1.0 404 Not Found");
    exit;
}

// Lấy thông tin file
$fileSize = filesize($imagePath);
$fileTime = filemtime($imagePath);
$etag = md5($fileTime . $fileSize); // Tạo ETag dựa trên kích thước và thời gian sửa đổi

// Gửi ETag và Last-Modified
header("ETag: \"$etag\"");
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $fileTime) . " GMT");
header("Cache-Control: public, max-age=3600"); // Cache trong 1 giờ

// Kiểm tra nếu trình duyệt gửi ETag hoặc Last-Modified
if (
    (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) === "\"$etag\"") || 
    (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $fileTime)
) {
    // 304 Not Modified: Trình duyệt đã có bản mới nhất
    header("HTTP/1.1 304 Not Modified");
    exit;
}

// Gửi file ảnh
header("Content-Type: image/jpeg");
header("Content-Length: $fileSize");
readfile($imagePath);
exit;
?>