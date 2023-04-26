
function scanQRCode() {
    // 初始化 QuaggaJS
    Quagga.init({
        inputStream: {
            name: "Live",
            type: "LiveStream",
            target: document.querySelector("#scanner-container")
        },
        decoder: {
            readers: ["code_128_reader", "ean_reader", "ean_8_reader", "code_39_reader", "codabar_reader", "upc_reader", "upc_e_reader"]
        }
    }, function (err) {
        if (err) {
            console.error("Failed to initialize Quagga", err);
            return;
        }
        // 成功初始化后开始扫描
        console.log("Initialization finished. Ready to start");
        Quagga.start();
    });

    // 监听扫描成功事件，获得二维码信息
    Quagga.onDetected(function (result) {
        alert("扫描结果：" + result.codeResult.code);
        Quagga.stop(); // 关闭摄像头
    });
}
