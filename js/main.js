// banner ảnh tự động
var slide = null;
var soAnh = 0;

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

if (document.getElementById('anh-tu-dong')) {
    tudong();
} else {}

// end banner ảnh tự động

// form đăng kí đăng nhập

//lớp phủ
var lopphu = document.getElementById('lop-phu');
var lopphu2 = document.getElementById('lop-phu2');
// button mở
var openForm = document.getElementById('openForm');
// button đóng
var closeForm = document.getElementById('closeForm');
// khung form
var khung_form = document.getElementById('form-dk-dn');
// khung chi tiết cấu hình
var khung_thong_so_ki_thuat = document.getElementById('khung-thong-so-ki-thuat');
// chi tiết cấu hình
var thong_so_ki_thuat = document.getElementById('thong-so-ki-thuat');
// form dang ki
var form_dk = document.getElementById('dangki');
// form dang nhap
var form_dn = document.getElementById('dangnhap');
// button close form
var closeForm = document.getElementById('closeForm');
// thẻ i đóng
var elI = closeForm.children[0];

function mo_fo(idFo){
    if(idFo == 'dangki'){
        lopphu.style.display = 'flex';
        form_dk.style.display = 'block';
        form_dn.style.display = 'none';
        if(thong_so_ki_thuat){
            thong_so_ki_thuat.style.display = 'none';
        }
        setTimeout(function(){
            khung_form.style.transform = 'scale(0.8)';
        },100);
    } else if(idFo == 'dangnhap'){
        lopphu.style.display = 'flex';
        form_dn.style.display = 'block';
        form_dk.style.display = 'none';
        if(thong_so_ki_thuat){
            thong_so_ki_thuat.style.display = 'none';
        }
        setTimeout(function(){
            khung_form.style.transform = 'scale(0.8)';
        },100);
    } else if(idFo == 'chitietcauhinh'){
        lopphu2.style.display = 'flex';
        form_dn.style.display = 'none';
        form_dk.style.display = 'none';
        thong_so_ki_thuat.style.display = 'block';
        setTimeout(function(){
            khung_thong_so_ki_thuat.style.transform = 'scale(0.8)';
        },100);
    }
}

function chuyen_fo(idFo){
    if(idFo == 'dangki'){
        khung_form.style.transform = 'scale(0)';
        setTimeout(function(){  
            form_dn.style.display = 'none';
            form_dk.style.display = 'block';
            khung_form.style.transform = 'scale(0.8)';
        },250);
    } else if(idFo == 'dangnhap'){
        khung_form.style.transform = 'scale(0)';
        setTimeout(function(){
            form_dk.style.display = 'none';
            form_dn.style.display = 'block';
            khung_form.style.transform = 'scale(0.8)';
        },250);
    }
}

function dong_fo(e){
    if(e.target === lopphu || e.target === closeForm || e.target === elI || e.target === lopphu2){
        khung_form.style.transform = 'scale(0)';
        if(thong_so_ki_thuat){
            khung_thong_so_ki_thuat.style.transform = 'scale(0)';
        }
        setTimeout(function(){
            lopphu.style.display = 'none';
            lopphu2.style.display = 'none';
            form_dk.style.display = 'none';
            form_dn.style.display = 'none';
            if(thong_so_ki_thuat){
                thong_so_ki_thuat.style.display = 'none';
            }
        },300);
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
        const content2 = document.querySelector('.container-p-1');
        if(content){
            content.style.opacity = 1;
        }
        if(content2){
            content2.style.opacity = 1;
        }
        
    }, 500); 
});
// end Loading

//Chi tiết sản phẩm

//chọn ảnh trong chi tiết sản phẩm
// var anh_chinh = document.getElementById('anh-chinh');

// var anhPhu = document.querySelectorAll('.anh-phu ul li a img');
// console.log(anhPhu);
// function chon_anh(anh){
//     const img = anh.target.querySelectorAll('img');
//     if(img){
//         console.log(img);
//     }
// }

// Lấy danh sách các thẻ <a> trong thẻ ul
var thumbnailLinks = document.querySelectorAll('.anh-phu ul li a');

// Lấy thẻ <img> trong .anh-chinh
var mainImage = document.querySelector('.anh-chinh img');

// Thêm sự kiện click cho mỗi thẻ <a> trong thẻ ul
thumbnailLinks.forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Ngăn chặn hành vi mặc định khi nhấp vào liên kết

    mainImage.style.opacity = 0;
    setTimeout(function() {
        mainImage.style.opacity = 1;
        // Thay đổi nguồn hình ảnh trong .anh-chinh bằng nguồn của liên kết đã nhấp vào
        mainImage.src = link.getAttribute('href');
    },350);
  });
});

//end Chi tiết sản phẩm

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

// Start Bình luận

var nd = document.getElementById('nd');
var dn_chat = document.getElementById('dang');

function chat(){
    if(nd.value.trim() !== ""){
        dn_chat.removeAttribute("disabled");
        dn_chat.style.opacity = 1;
        console.log(dn_chat);
    } else {
        dn_chat.style.opacity = 0.5;
        dn_chat.setAttribute("disabled", "disabled");
    }
}

// end Bình luận