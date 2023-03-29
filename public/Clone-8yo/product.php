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
        <link rel="shortcut icon" href="image/logo.webp" />
        <link rel="stylesheet" href="style.css" />
        <script>
            window.onload = () => {
                domImg();
                countGio();
                activeNavi('sanpham');
            };
        </script>
    </head>
    <?php
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        }
        $id = $_GET['id'];;
        $query = "SELECT * FROM product where id=$id";
        $sth = $pdo->query($query);
        $sth->execute();
        $row = $sth->fetch();

    ?>
    <body>
        <header class="header">
            <div class="model">
                <div class="close">
                    <i class="fa fa-close"></i>
                </div>
                <div class="wrrap-menu">
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li>
                            <a href="">Sản phẩm </a>
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
            <div class="freeship">Freeship tất cả đon hàng, mưa 1 cái cũng free!</div>
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

                        <div class="cart">
                            <i class="fa fa-cart-arrow-down btn-cart" style="cursor:pointer;" onclick="gotoGio ()">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 12px; position: absolute; left: 28px !important;">
                                 0
                                <span class="visually-hidden">unread messages</span></i>
                            <span class="text-shop">Shop </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrrap-navigation">
                <div class="navigation">
                    <ul>
                        <li><a href="index.html" id="trangchu" class="active filter" data-filters="trangchu">TRANG CHỦ</a></li>
                        <li><a href="index.html" id="sanpham" class="filter" data-filters="sanpham">SẢN PHẨM</a></li>
                        <li><a href="size.html" id="bansize" class="filter" data-filters="bangsize">BẢNG SIZE</a></li>
                        <li><a id="ins" class="filter" data-filters="insta">INSTAGRAM 8YO</a></li>

                        <li><a id="gt" class="filter" data-filters="gioithieu">GIỚI THIỆU 8YO</a></li>
                        <li><a id="page" class="filter" data-filters="page8">PAGE 8YO</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="wrrap-product" style="background: whitesmoke">
            <div class="container">
                <div class="row">
                    <div class="link">
                        <a href="index.html">Trang chủ</a> / <a href="">Sản phẩm mới</a> /
                        <a href=""> <span id="name"></span></a>
                    </div>
                    <div class="col-lg-6 img">
                        <img class="img-product" src="" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="infor-product"
                            style="background: white; margin-bottom: 20px; height: 480px; padding: 20px"
                        >
                            <h1 style="font-size: 20px" class="name-product"><?php echo $row['title']?></h1>
                            <span>Tình trạng: <b style="color: blue; font-weight: 400">còn hàng</b></span>
                            <div class="wrrap-price" style="display: flex; align-items: center">
                                <?php echo $row['gia']?>
                                <b class="price-sale" style="padding-right: 20px; color: #878c8f"
                                    ><del>300,000₫</del></b
                                >
                                <div class="price" style="font-size: 30px; font-weight: 600; color: red"></div>
                            </div>
                            <span>Màu sắc: <b class="mausac"> Black</b></span>
                            <div class="wrrap-color" style="display: flex">
                                <div class="color active-color" data-color="Black"></div>
                                <div class="color White" data-color="White"></div>
                                <div class="color Green" data-color="Green"></div>
                            </div>
                            <span>Kích thước:</span>
                            <div class="wrrap-size" style="display: flex">
                                <div data-set="M" class="size active-size">M</div>
                                <div data-set="L" class="size">L</div>
                                <div data-set="XL" class="size">XL</div>
                            </div>
                            <hr />
                            <div class="wrrap-input-add" style="display: flex">
                                <div class="wrrap-input">
                                    <input class="button" id="pre" type="button" value="-" />
                                    <input id="value" type="text" value="1" />
                                    <input class="button" id="next" type="button" value="+" />
                                </div>
                                <div class="addCart">
                                    <button class="gio" onclick="Gio()"><span>THÊM VÀO GIỎ</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrrap-details-size" style="background: white; margin-bottom: 20px">
                            <div
                                class="details"
                                style="
                                    display: flex;
                                    justify-content: space-between;
                                    padding: 20px;
                                    align-items: center;
                                "
                            >
                                <div>THÔNG TIN SẢN PHẨM</div>
                                <span
                                    class="openTable"
                                    style="font-size: 24px; position: relative; top: -2px; cursor: pointer"
                                    >+</span
                                >
                                <span class="closeTable" style="display: none; font-size: 24px; cursor: pointer"
                                    >--</span
                                >
                            </div>
                            <div class="table-size" style="padding: 0 20px 20px 20px; display: none">
                                <span>Material ver2.0 Tee: Cotton 2C 100% 250gsm dày dặn, đứng form, xịn xò</span>
                                <img
                                    src="image/product/color/z3636855509379_048e036e3867398f2f62499a75a1e156_ebbb954a337547bea0d9c1e59f84d872_grande.webp"
                                    alt=""
                                    style="width: 100%"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container wrrap-slide" style="position: relative;">
                <div class="row">
                    <div class="col" >
                        <h2 style="text-align: center;">Có thể bạn cũng thích</h2>
                        <div class="slide ">
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a onclick="openProduct(`sp1`)" >
                                        <img
                                        style="width: 100%"
                                        src="image/product/26_1181703ee7254501a0eb22b333f2ccf2_master.webp"
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
                            </div><div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="#">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            <div class="col-lg-3 col-sm-6 col-6" style="width: 18%; margin-right: 20px;">
                                <div class="card" style="width: 100%">
                                    <div class="sale">44%</div>
                                    <a href="">
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
                            
                        </div>
                        
                    </div>
                    
                </div>
                <div style="font-weight: 700; font-size: 30px;  position: absolute; top: 190px; left: 0%; border-radius: 50%; background: white; padding: 0px 15px 5px 15px; cursor: pointer;" class="pre">
                    <
                </div>
                <div style="font-weight: 700; font-size: 30px; position: absolute; top: 190px; right: 0%; border-radius: 50%; background: white; padding: 0px 15px 5px 15px; cursor: pointer;"  class="next">
                    <span>></span>
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
                                <p>
                                    Đưa đến một chất lượng sản phẩm hoàn hảo với một giá thành hợp lí nhất. Luôn đặt
                                    khách hàng lên trên cả lợi nhuận. Tự hào là một Local Brand nhận được sự hài lòng
                                    của 99,99% khách hàng!
                                </p>
                            </div>
                            <div class="wrrap-content-footer content2">
                                <ul>
                                    <li><b>Điện thoại: </b>0123456789</li>
                                    <li><b>Email: </b>nthu01867@gamil.com</li>
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
                                <div class="box-follow"><h4>Follow 8YO nha bạn hiền!</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="end">
                    <span>Copyright &copy; 8YO Studio. Design by Thu and Lam </span>
                </div>
            </div>
        </footer>
        <!-- <script src="javascript.js"></script> -->
    </body>
</html>
