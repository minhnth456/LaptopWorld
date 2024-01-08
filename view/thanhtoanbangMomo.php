<?php
header('Content-type: text/html; charset=utf-8');

include 'headermomo.php';

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

// 9704 0000 0000 0018
// 03 / 07
// NGUYEN VAN A
// 0969100100

if (isset($_GET["id_hoadon"])) {
    $orderInfo = "Thanh toán qua MoMo";
    $amount = $_GET["id_hoadon"];
    $orderId = time();
    $redirectUrl = "http://localhost/LaptopWorld/index.php?act=thanhcong";
    $ipnUrl = "http://localhost/LaptopWorld/index.php?act=thanhcong";
    $extraData = "";

    $extraData = isset($_POST["extraData"]) ? $_POST["extraData"] : "";

    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . time() . "&requestType=payWithATM";
    $signature = hash_hmac("sha256", $rawHash, $secretKey);

    $data = array(
        'partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => time(),
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => 'payWithATM',
        'signature' => $signature
    );

    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);

    if (isset($jsonResult['payUrl'])) {
        header('Location: ' . $jsonResult['payUrl']);
    } else {
        echo "Lỗi: Không thể lấy URL thanh toán từ MoMo. Vui lòng thử lại sau.";
    }
} else {
    echo "Lỗi: Giá trị id_hoado không tồn tại.";
}
?>