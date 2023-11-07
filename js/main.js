var slide = null;
var soAnh = 0;
//lớp phủ
var lopphu = document.getElementById('lop-phu');
console.log(lopphu);

var lopphu2 = document.getElementById('menu-con');
console.log(lopphu2);
// button mở
var openForm = document.getElementById('openForm');
// button đóng
var closeForm = document.getElementById('closeForm');
// form
var form_dk = document.getElementById('form-dk');
// khung form
var khung_form = document.getElementById('form-dk-dn');

function tudong() {
    slide = setInterval(function () {
        document.getElementById('anh-tu-dong').style.transform = 'scale(1.1)'; /* Tăng tỷ lệ hình ảnh */
        setTimeout(function () {
            document.getElementById('anh-tu-dong').src = `img/anh${soAnh}.jpg`;
            soAnh++;
            if (soAnh > 3) {
                soAnh = 0;
            }
        }, 200); /* Đợi một chút trước khi thay đổi hình ảnh */
        setTimeout(function () {
            document.getElementById('anh-tu-dong').style.transform = 'scale(1)'; /* Trả về tỷ lệ ban đầu */
        }, 200);
    }, 2000);
}
tudong();

function mo_form(){
    lopphu.style.display = 'flex';
    khung_form.style.transform = 'scale(1)';
}
