var slide = null;
var soAnh = 0;
function tudong() {
    slide = setInterval(function () {
        document.getElementById("anh-tu-dong").style.transform = "scale(1.1)"; /* Tăng tỷ lệ hình ảnh */
        setTimeout(function () {
            document.getElementById("anh-tu-dong").src = `img/anh${soAnh}.jpg`;
            soAnh++;
            if (soAnh > 5) {
                soAnh = 0;
            }
        }, 500); /* Đợi một chút trước khi thay đổi hình ảnh */
        setTimeout(function () {
            document.getElementById("anh-tu-dong").style.transform = "scale(1)"; /* Trả về tỷ lệ ban đầu */
        }, 1000);
    }, 2000);
}
tudong();