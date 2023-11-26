<!-- start article -->
<article>
                <div class="capnhap">
                    <div class="tieudecapnhap">
                        <h2 style="font-weight: 500;color: #333;">Cập nhập tài khoản</h2>
                        <div class="quanli">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                    </div>
                    
                    <div class="khungcapnhap">
                        <div class="capnhapphai">
                            <?php
                                extract($load_tk);
                            ?>
                            <form action="index.php?act=luutk" method="post">
                                <table>
                                    <tr>
                                        <input type="hidden" name="id_user" value="id_user">
                                        <td class="tieudemuc">
                                            Tên
                                        </td>
                                        <td class="tenUser">
                                            <input type="text" name="name" value="<?php echo $name?>" style="border: 1px solid rgba(0,0,0,.14);" disabled></input>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="tieudemuc">Email</td>
                                        <td class="tenUser">
                                            <input type="text" name="email" value="<?php echo $email?>" style="border: 1px solid rgba(0,0,0,.14);"></input>
                                            
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="tieudemuc">Địa chỉ</td>
                                        <td class="tenUser">
                                            <input type="text" name="address" value="<?php echo $address?>" style="border: 1px solid rgba(0,0,0,.14);"></input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tieudemuc">Số điện thoại</td>
                                        <td class="tenUser"> 
                                            <input type="text" name="tel" value="<?php echo $tel?>" style="border: 1px solid rgba(0,0,0,.14);"></input>
                                        </td>
                                    </tr>
                                
                                </table>
                                <button type="submit" class="luu" style="" name="luutk">Lưu thông tin</button>
                            </form>
                        </div>

                        <div class="capnhaptrai" style="border-left: 0.0625rem solid #2b80dd;">
                            <div class="khunganh">
                                <form action="index.php?act=chonanh" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                    <div class="anh" style="width:150px; height:150px;">
                                        <img src="img/<?php echo $img?>" alt="" style="width:100%; height:100%;">
                                    </div>
                                    <input type="file" name="img">
                                    <button type="submit" class="chonanh" style="margin-top: 10px;" name="chonanh">Lưu ảnh</button>
                                    <div class="chuy">
                                        <div class="chuy1">Dụng lượng file tối đa 1 MB</div>
                                        <div class="chuy1">Định dạng:.JPEG, .PNG</div></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
        </article>
        <!-- end article -->