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
if (closeForm) {
    var elI = closeForm.children[0];
}

function mo_fo(idFo) {
    if (idFo == 'dangki') {
        lopphu.style.display = 'flex';
        form_dk.style.display = 'block';
        form_dn.style.display = 'none';
        if (thong_so_ki_thuat) {
            thong_so_ki_thuat.style.display = 'none';
        }
        setTimeout(function() {
            khung_form.style.transform = 'scale(0.8)';
        }, 100);
    } else if (idFo == 'dangnhap') {
        lopphu.style.display = 'flex';
        form_dn.style.display = 'block';
        form_dk.style.display = 'none';
        if (thong_so_ki_thuat) {
            thong_so_ki_thuat.style.display = 'none';
        }
        setTimeout(function() {
            khung_form.style.transform = 'scale(0.8)';
        }, 100);
    } else if (idFo == 'chitietcauhinh') {
        lopphu2.style.display = 'flex';
        form_dn.style.display = 'none';
        form_dk.style.display = 'none';
        thong_so_ki_thuat.style.display = 'block';
        setTimeout(function() {
            khung_thong_so_ki_thuat.style.transform = 'scale(0.8)';
        }, 100);
    }
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
    if (e.target === lopphu || e.target === closeForm || e.target === elI || e.target === lopphu2) {
        khung_form.style.transform = 'scale(0)';
        if (thong_so_ki_thuat) {
            khung_thong_so_ki_thuat.style.transform = 'scale(0)';
        }
        setTimeout(function() {
            lopphu.style.display = 'none';
            lopphu2.style.display = 'none';
            form_dk.style.display = 'none';
            form_dn.style.display = 'none';
            if (thong_so_ki_thuat) {
                thong_so_ki_thuat.style.display = 'none';
            }
        }, 300);
    };
}
// end form đăng kí đăng nhập

// Loading
window.addEventListener('load', function() {
    // Đợi 3 giây trước khi hiển thị nội dung trang web
    setTimeout(function() {
        const preloadImage = document.querySelector('.preload-image');
        if(preloadImage){
            preloadImage.style.display = 'none';
        }
        
        const content = document.querySelector('.container-p-0');
        const content2 = document.querySelector('.container-p-1');
        if (content) {
            content.style.opacity = 1;
        }
        if (content2) {
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
        }, 350);
    });
});

//end Chi tiết sản phẩm

// Start số lượng cart
function increment(id) {
    var input = document.getElementById('soluongsp-'+id);
    input.value = parseInt(input.value) + 1;
}

function decrement(id) {
    var input = document.getElementById('soluongsp-'+id);
    if(parseInt(input.value) < 2){

    } else {
        input.value = parseInt(input.value) - 1;
    }
    
}
// end số lượng cart

// start tính tổng tiền

function chuyenDoiGia(gia) {
    // Loại bỏ các ký tự không phải số
    const giaSo = parseInt(gia.replace(/\D/g, ''), 10);
    return giaSo;
}

function formatTongTien(tongtien) {
    // Chuyển đổi số sang chuỗi
    let tongtienString = tongtien.toString();

    // Chia thành phần nguyên và phần thập phân (nếu có)
    let [nguyen, thapphan] = tongtienString.split('.');

    // Thêm dấu chấm hàng nghìn
    nguyen = nguyen.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

    // Nếu có phần thập phân, thêm dấu chấm đỏ
    if (thapphan) {
        tongtienString = nguyen + '.' + thapphan;
    } else {
        tongtienString = nguyen;
    }

    return tongtienString + ' đ';
}

function tinhtongtien(){
    const dssp = document.getElementById('body-cart');
    const tr = dssp.children;
    let tong = 0;
    for(i = 0; i < tr.length; i++){
        const td = tr[i].getElementsByTagName('td');
        const gia = td[1].innerText;
        const soluong = parseInt(td[2].getElementsByTagName('input')[0].value);
        const giaSo = chuyenDoiGia(gia);
        ttien = giaSo * soluong;
        tong += ttien; 
        // let tongtien = td[3].innerHTML;
        // tongtien = 0;
        // tongtien = ttien;
        // tongtien = formatTongTien(tongtien);
        // console.log(tongtien);
        td[3].innerText = formatTongTien(ttien);
        // document.getElementById('tongtien').innerText = tongtien;
        document.getElementById('tongcong').value = formatTongTien(tong);
        document.getElementById('thanhtoan').value = formatTongTien(tong);

    }
    
    
}

window.addEventListener('beforeunload', function() {
    // Tạo đối tượng XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Cấu hình yêu cầu
    xhr.open('POST', 'path/to/your/php/script.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Gửi yêu cầu
    xhr.send("action=beforeUnload"); // action có thể làm thay đổi dựa trên logic của bạn
});

// end tính tổng tiền

// Start Bình luận

function chat() {
    var nd = document.getElementById('nd');
    var dn_chat = document.getElementById('dang');
    if (nd.value.trim() !== "") {
        dn_chat.removeAttribute("disabled");
        dn_chat.style.opacity = 1;
        console.log(dn_chat);
    } else {
        dn_chat.style.opacity = 0.5;
        dn_chat.setAttribute("disabled", "disabled");
    }
}

function rep_chat(id_bl) {
    const nd = document.getElementById('rep-nd-'+id_bl);
    const dn_chat = document.getElementById('rep-dang-'+id_bl);

    if (nd.value.trim() !== "") {
        dn_chat.removeAttribute("disabled");
        dn_chat.style.opacity = 1;
    } else {
        dn_chat.style.opacity = 0.5;
        dn_chat.setAttribute("disabled", "disabled");
    }
}

// end Bình luận


// Check form thêm ảnh sản phẩm trong admin

function checkForm_themsp() {
    var fileAnh = document.getElementById("hinh").files;
    
    // Kiểm tra số lượng tập tin đã chọn
    if (fileAnh.length > 5) {
        alert("Chỉ được phép chọn tối đa 5 ảnh");
        return false;
    }
    
    if (fileAnh.length == 0){
        alert("Bạn chưa chọn ảnh");
        return false;
    }


    return true;
}

// end Check form thêm sản phẩm


// start kiểm tra số lượng ảnh của sản phẩm trong admin

function check_anh(){
    var tr = document.querySelectorAll('.table tbody tr');
    var button = document.getElementById('themanhsp');
    console.log(button.style.display);
    if(tr.length >= 5){
        button.setAttribute("disabled", "disabled");
    } else {
        button.removeAttribute("disabled");
    }
}

// end kiểm tra số lượng ảnh của sản phẩm trong admin


// start khung trả lời bình luận

function tra_loi(id_bl){
    const rep_com = document.getElementById('rep-com-'+id_bl);
    rep_com.style.display = "flex";
}

// end khung trả lời bình luận


// var gioHang = [];

// function giohang(){
//     const anh = document.getElementById('anh-chinh').src;
//     const tensp = document.getElementById('ten-san-pham').innerText;
//     const gia = document.getElementById('gia-san-pham').innerText;
//     // console.log(anh, tensp, gia);
//     them_gio_hang(anh, tensp, gia);
// }

// function them_gio_hang(anh, tensp, gia){
//     var san_pham = {
//         anh: anh,
//         tensp: tensp,
//         gia: gia,
//         soluong: 1
//     }

//     gioHang.push(san_pham);

// }



// function in_gio_hang(){
//     if(gioHang.length > 0){
//         for (var i = 0; i < gioHang.length; i++) {
//             console.log(gioHang[i]);
//             var tr = document.createElement('tr');
//             var thongtin = '<th class="border-1" scope="row">'+(i+1)+'</th><td class="border-1" style="width: 750px;"><div class="img_cart" style="display: flex; align-items: center;"><img src="./img/'+gioHang[i].anh+'" width="80px" alt="" /><div class="text_cart" style="margin-left: 20px;"><a href="#">'+gioHang[i].tensp+'</a><div class="baohanh">Bảo hành 12 tháng</div></div></div></td><td class="border-1">'+gioHang[i].gia+' đ</td><td class="border-1"><div class="number" style="display: flex;"><button class="btn btn-link px-2" onclick="decrement()"><i class="fas fa-minus"></i></button><input style="width: 50px;" id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" /><button class="btn btn-link px-2" onclick="increment()"><i class="fas fa-plus"></i></button></div></td><td class="border-1">16.000.000 đ</td><td><a href="#"><img style="margin-left: 10px;" src="./img/icon_cart_del.png"></a></td>';
//             tr.innerHTML = thongtin;
//             var tbody = document.getElementById('body-cart');
//             if (tbody !== null) {
//                 tbody.appendChild(tr);
//             }

//             console.log(tbody);
//         }
//     }
// }