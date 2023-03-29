<?php include "admin/connect.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>8YO Studio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="source/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link rel="shortcut icon" href="image/logo.webp">
        <link rel="stylesheet" href="style.css" />

    </head>
    <body>
        <header class="header">
            <div class="freeship">Freeship tất cả đơn hàng, mua 1 cái cũng free!</div>
            <div class="header-wrrap">
                <div class="header-wrrap-content">
                    <div class="wrrap-logo-menu">
                        <div class="menu"><i class="fa fa-bars"></i></div>
                        <a href="index.html"><img class="logo" src="image/logo.webp" alt="" /></a>
                    </div>
                    
                    <div class="wrrap-search">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." />
                        <i class="fa fa-search"></i>
                    </div>

                    <div class="wrrap-cart-user">
                        <div class="user">
                            <i class="fa fa-user btn-user"></i>
                            <span class="text-user">Tài khoản</span>
                        </div>
                        <div class="cart" onclick="gotoGio ()" style="cursor: pointer;">
                            <i class="fa fa-cart-arrow-down btn-cart"></i>
                            <span class="text-shop">Shop</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="wrrap-navigation">
                <div class="navigation">
                    <ul>
                        <li><a class="active filter" data-filters="trangchu" href="index.html">TRANG CHỦ</a></li>
                        <li><a class="filter" data-filters="sanpham" onclick="openProduct('sp8')">SẢN PHẨM</a></li>
                        <li><a class="filter" data-filters="bangsize" href="size.html" >BẢNG SIZE</a></li>
                        <li><a id="ins" class="filter" data-filters="insta" >INSTAGRAM 8YO</a></li>
                        
                        <li><a id="gt" class="filter" data-filters="gioithieu" >GIỚI THIỆU 8YO</a></li>
                        <li><a id="page" class="filter" data-filters="page8" >PAGE 8YO</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="wrrap-body">
            <div class="body">
               
                <div class="model">
                    <div class="close">
                        <i class="fa fa-close"></i>
                    </div>
                    <div class="wrrap-menu">
                        <ul>
                            <li><a href="">Trang chủ</a> </li>
                            <li><a href="">Sản phẩm </a> 
                                <i class="fa fa-chevron-down close-ul"></i>
                                <ul class="ul">
                                    <li><a href="">Tee</a></li>
                                    <li><a href="">Hoodie</a></li>
                                    <li><a href="">Short</a></li>
                                    <li><a href="">Sweater</a></li>
                                    <li><a href="">Mini Bag</a></li>
                                </ul>
                            </li>
                            <li><a href="">Bảng size</a></li>
                            <li><a href="">INSTAGRAM 8YO</a></li>
                            <li><a href="">GIÓI THIỆU 8YO</a></li>
                            <li><a href="">PAGE 8YO</a></li>
                        </ul>
                    </div>
                </div>
                
                <img src="image/slide_1_img.webp" alt="" />
                <h2>SẢN PHẨM MỚI TIN</h2>
                <div class="container">
                    <div class="row">
                        <?php 
                            $query = "SELECT * FROM product";
                            $sth = $pdo->query($query);
                            $sth->execute();
                            while($row = $sth->fetch()) {
                                ?>
                            <div class="col-lg-3 col-sm-6 col-6">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="http://localhost/CNW/public/Clone-8yo/product.php?id=<?php echo $row['id']?>" >
                                        <img
                                        style="width: 100%"
                                        src="image/product/26_1181703ee7254501a0eb22b333f2ccf2_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                    </a>
                                    <div class="card-body">
                                        <h3 class="card-title" style="font-size: 14px;"><?php echo $row['title']?></h>
                                        <p class="card-text">
                                            <?php echo $row['gia']?>
                                            <span class="price-del">300.000 đ</span>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp2`)">
                                    <img
                                        style="width: 100%"
                                        src="image/product/38_a760baf21c99437f91c82471ffb6b7fd_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp3`)">
                                    <img
                                    style="width: 100%"
                                    src="image/product/14_f4d83bdb6db24e84a03ad7e389db78a0_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp4`)">
                                    <img
                                        style="width: 100%"
                                        src="image/product/13_b0e025e20ed2499b8ee0ff13cf84ed30_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp5`)">
                                    <img
                                    style="width: 100%"
                                    src="image/product/8_1fb9a3beb4524aaf84e7b00e95f68d0d_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp6`)">
                                    <img
                                        style="width: 100%"
                                        src="image/product/1__2__faa864ffecf54033a8c5cc68f614d158_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp7`)">
                                    <img
                                    style="width: 100%"
                                    src="image/product/1_d42f4103ecb141f1ae76aff6826cba87_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a onclick="openProduct(`sp8`)">
                                    <img
                                        style="width: 100%"
                                        src="image/product/2_f23d3a7b4e8c4ba19f84d9d64ee6072b_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-product">
                    <img src="image/home_collection_1_image.webp" alt="">
                </div>
                <h2>TEE 8YO</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                    style="width: 100%"
                                    src="image/product/hoodie/5346c0de-9de0-4589-9f6f-41f9617dd5db_7efd33ad176643398640f28b53fb2717_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="#">
                                    <img
                                        style="width: 100%"
                                        src="image/product/hoodie/6g9om7r3-1-4kbm-hinh_mat_truoc-0_08d7b14ec09d46059d10e38a7b7b8ea0_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                    style="width: 100%"
                                    src="image/product/hoodie/8yo-mockup_hoodie_beige_1_c4a22ad7749d4a8489eb5f465c9e083f_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                        style="width: 100%"
                                        src="image/product/hoodie/_13_94bfbae507a141888cb098e2e87fe6d8_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                    style="width: 100%"
                                    src="image/product/hoodie/_17_74c46ece996a4a19b0b3e5e16f770890_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="#">
                                    <img
                                        style="width: 100%"
                                        src="image/product/hoodie/kf54uyki-1-69cw-hinh_mat_truoc-0_ce77bd418b414f1e8e81892aa3260ea6_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                    style="width: 100%"
                                    src="image/product/hoodie/z3651754852116_0d874c8afe0407c8bba65894ce5f1aec_91c54ce43af045bc85ff96dce4b5090a_master.webp"
                                    class="card-img-top"
                                    alt="..."
                                />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 p-2">
                            <div class="card" style="width: 100%">
                                <div class="sale">44%</div>
                                <a href="">
                                    <img
                                        style="width: 100%"
                                        src="image/product/hoodie/z3649704799735_fef7fe7e17ebb76a7ef70464e2effe9b_4ddd4d3ceca84406a984ede63436d5a9_master.webp"
                                        class="card-img-top"
                                        alt="..."
                                    />
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title" style="font-size: 14px;">8YO LULLABY TEE Ver2.0 # 3 COLOR</h>
                                    <p class="card-text">
                                        169.000 đ
                                        <span class="price-del">300.000 đ</span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 wrrap-footer">
                            <div class="wrrap-content-footer">
                                <h4>Về 8YO</h4>
                                <p>Đưa đến một chất lượng sản phẩm hoàn hảo với một giá thành hợp lí nhất. Luôn đặt khách hàng lên trên cả lợi nhuận. Tự hào là một Local Brand nhận được sự hài lòng của 99,99% khách hàng!</p>
                            </div>
                            <div class="wrrap-content-footer content2">
                                <ul>
                                    <li><b>Điện thoại: </b>0123456789</li>
                                    <li><b>Email: </b>nthu01867@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 wrrap-footer">
                            <div class="wrrap-content-footer">
                                <h4>Hỗ trợ khách hàng</h4>
                                <ul>
                                    <li>Tìm kiếm</li>
                                    <li>Giới thiệu</li>
                                    <li>Chính sách đổi trả</li>
                                    <li>Chính sách bảo mật</li>
                                    <li>Điều khoản và dịch vụ</li>
                                </ul>
                            </div>
                            <div class="wrrap-content-footer footer2">
                                <div class="content3">
                                    <h4>Chăm sóc khách hàng</h4>
                                </div>
                                <div class="footerInfo-hline">
                                    <div class="box-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="box-content">
                                        <span>0123456789</span>
                                        <u>nthu01867@gmail.com</u>
                                    </div>
                                   
                                </div>
                                <div class="box-follow"> <h4>Follow 8YO nha bạn hiền!</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="end">
                    <span>Copyright &copy;  8YO Studio. Design by Thu and Lam</span>
                </div>
            </div>
            
        </footer>

        <script src="javascript.js"></script>
    </body>
</html>
