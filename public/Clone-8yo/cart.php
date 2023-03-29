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
                showCart();
            };
        </script>
    </head>
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
                            <i class="fa fa-cart-arrow-down btn-cart">
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
                        <li><a href="index.html" class="active filter" data-filters="trangchu">TRANG CHỦ</a></li>
                        <li><a href="product.html" class="filter" data-filters="sanpham">SẢN PHẨM</a></li>
                        <li><a href="size.html" class="filter" data-filters="bangsize">BẢNG SIZE</a></li>
                        <li><a id="ins" class="filter" data-filters="insta">INSTAGRAM 8YO</a></li>

                        <li><a id="gt" class="filter" data-filters="gioithieu">GIÓI THIỆU 8YO</a></li>
                        <li><a id="page" class="filter" data-filters="page8">PAGE 8YO</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container "  style="width: 75%;">
            <div class="wrrap-cart">
                <div class="navigation-cart" style="margin: 15px 15px  15px 0;">
                    <a style="text-decoration: none; color: #777" href="index.html">Trang chủ</a> / <a href="product.html" style="text-decoration: none;"><span style="color: #777;">giỏ hàng</span></a>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-8  col-12 cart-8" style="background: whitesmoke; width: 60%; height: 100%; margin-top: 10px;">
                        <div class="cart">
                            <div class="h5" style="margin: 10px 10px 10px 0;">
                                <h5 >Giỏ hàng của bạn</h5>
                                <?php echo "chọn mặt hàng"?>
                            </div>
                            <hr style="background: black; margin-top: 2px;">
                            <div style="font-size: 17px; font-weight: 400; margin: 0 0 10px 0;" class="empty">Giỏ hàng của bạn đang trống</div>
                            <table class="table">
                                
                            </table>
                        </div>
                        <div class="note">
                            <h5>Ghi chú đơn hàng</h5>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 cart-4" style="background: whitesmoke; margin-left: 20px; height: 100%; margin-top: 10px;">
                        <div class="h5" style="margin: 10px 10px 10px 0;">
                            <h5 >Thông tin đơn hàng</h5>
                        </div>
                        <hr style="background: black; ">
                        <div class="money">
                            <span>Tổng tiền: </span>
                            <span class="totalMoney" style="color: red; font-size: 20px; font-weight: 700; padding-left: 20px;">0 đ</span>
                        </div>
                        <hr style="background: black; ">
                        <div class="phivc">
                            <ul style="font-size: 14px;">
                                <li>Phí vận chuyển sẽ được tính ở trang thanh toán.</li>
                                <li>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</li>
                            </ul>
                            <button style="width: 100%; background: red; height: 40px; color: white; font-weight: bold; border: none; border-radius: 5px;">THANH TOÁN</button>
                        </div>
                        <div class="csmh" style="background: #bce8f1; margin-bottom: 10px; margin-top: 10px; border-radius: 5px">
                            <div style="padding: 10px; ">
                                <p><strong>Chính sách mua hàng</strong></p>
                                <span>Hiện chúng tôi chỉ áp dụng thanh toán với đơn hàng có giá trị tối thiểu  <strong> 0 đ</strong> trở lên</span>
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
                    <span>Copyright &copy; 8YO Studio. Design by Thu and Lam</span>
                </div>
            </div>
        </footer>
        <script src="javascript.js"></script>
    </body>
</html>
