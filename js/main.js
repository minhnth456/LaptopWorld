// banner ảnh tự động
var slide = null;
var soAnh = 0;

function tudong() {
    slide = setInterval(function() {
        document.getElementById('anh-tu-dong').style.transform = 'scale(1.1)'; /* Tăng tỷ lệ hình ảnh */
        setTimeout(function() {
            document.getElementById('anh-tu-dong').src = `img/anh${soAnh}.jpg`;
            soAnh++;
            if (soAnh > 3) {
                soAnh = 0;
            }
        }, 200); /* Đợi một chút trước khi thay đổi hình ảnh */
        setTimeout(function() {
            document.getElementById('anh-tu-dong').style.transform = 'scale(1)'; /* Trả về tỷ lệ ban đầu */
        }, 200);
    }, 2000);
}
tudong();
// end banner ảnh tự động

// form đăng kí đăng nhập

//lớp phủ
var lopphu = document.getElementById('lop-phu');
// button mở
var openForm = document.getElementById('openForm');
// button đóng
var closeForm = document.getElementById('closeForm');
// khung form
var khung_form = document.getElementById('form-dk-dn');
// form dang ki
var form_dk = document.getElementById('dangki');
// form dang nhap
var form_dn = document.getElementById('dangnhap');
// button close form
var closeForm = document.getElementById('closeForm');
// thẻ i đóng
var elI = closeForm.children[0];

function mo_fo(idFo) {
    lopphu.style.display = 'flex';
    if (idFo == 'dangki') {
        form_dk.style.display = 'block';
        form_dn.style.display = 'none';
    } else if (idFo == 'dangnhap') {
        form_dn.style.display = 'block';
        form_dk.style.display = 'none';
    }
    setTimeout(function() {
        khung_form.style.transform = 'scale(0.8)';
    }, 100);

}

function chuyen_fo(idFo) {
    if (idFo == 'dangki') {
        khung_form.style.transform = 'scale(0)';
        setTimeout(function() {
            form_dn.style.display = 'none';
            form_dk.style.display = 'block';
            khung_form.style.transform = 'scale(0.8)';
        }, 250);
    } else if (idFo == 'dangnhap') {
        khung_form.style.transform = 'scale(0)';
        setTimeout(function() {
            form_dk.style.display = 'none';
            form_dn.style.display = 'block';
            khung_form.style.transform = 'scale(0.8)';
        }, 250);
    }
}

function dong_fo(e) {
    if (e.target === lopphu || e.target === closeForm || e.target === elI) {
        khung_form.style.transform = 'scale(0)';
        setTimeout(function() {
            lopphu.style.display = 'none';
            form_dk.style.display = 'none';
            form_dn.style.display = 'none';
        }, 300);
    };
}
// end form đăng kí đăng nhập

// Loading
window.addEventListener('load', function() {
    // Đợi 3 giây trước khi hiển thị nội dung trang web
    setTimeout(function() {
        const preloadImage = document.querySelector('.preload-image');
        preloadImage.style.display = 'none';

        const content = document.querySelector('.container-p-0');
        content.style.opacity = 1;
    }, 1000);
});
// end Loading
// Start số lượng cart
function increment() {
    var input = document.getElementById('form1');
    input.stepUp();
}

function decrement() {
    var input = document.getElementById('form1');
    input.stepDown();
}
// end số lượng cart