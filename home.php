<?php
// $string = substr($string,0,10).'...';
function truncate($string, $length = 300, $append = "&hellip;")
{
    $string = trim($string);

    if (strlen($string) > $length) {
        $string = wordwrap($string, $length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . $append;
    }

    return $string;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>
    <!-- <div id="header">
        <div class="container1">
            <ul class="menu-item" type="none">
                <li class="menu">
                    <div class="logo-ice">
                        <a class="logo" href=""><img src="img/logo-header.png" alt="" height="100%"></a>
                    </div>
                </li>
                <li class="menu"><a href="">
                        <p>Tại sao lại chọn ice</p>
                    </a></li>
                <li class="menu"><a href="">
                        <p>Tin tức & Sự kiện</p>
                    </a></li>
                <li class="menu"><a href="">
                        <p>My Ielts classroom</p>
                    </a></li>
                <li class="menu"><a href="">
                        <p>Tuyển dụng </p>
                    </a></li>
                <li class="menu"><a href="">
                        <p>Liên hệ </p>
                    </a></li>
                <li class="menu search">
                    <div><i class="fa fa-search"></i></div>
                </li>
            </ul>
        </div>
    </div> -->
    <div id="wrapper">
        <div class="slide-show">
            <div class="slide"> <img src="img/slide.png" alt=""></div>
        </div>
        <div class="container">
            <div class="boder">
                <div class="display">
                    <div class="box-1">
                        <img src="img/box-1.webp" alt="">
                    </div>
                    <div class="box-2">
                        <div class="find">
                            <p>BẠN ĐANG MUỐN TÌM HIỂU</p>
                            <p>lỘ TRÌNH ANH NGỮ TỐT NHẤT TẠI ICE?</p>
                        </div>
                    </div>
                    <div class="box-3">
                        <p>ĐĂNG KÝ NGAY </p>
                        <p>ĐĂNG KÝ</p>
                        <p>NHẬN TƯ VẤN MIỄN PHÍ</p>
                    </div>
                </div>
                <div class="we">
                    <div class="we-are">
                        <p class="we-text">VỀ CHÚNG TÔI - ICE</p>
                    </div>
                    <div class="rol">
                        <div class="rol-1">
                            <p class="rol-1-text">Hệ thống Anh ngữ Quốc tế ICE đã và đang đào tạo hàng ngàn học viên đạt các chứng chỉ Anh
                                ngữ
                                quốc tế hàng đầu. ICE IELTS tự hào là đơn vị ủy quyền chính thức bài thi IELTS trên máy
                                tính
                                của IDP tại Việt Nam. Với nhiều năm kinh nghiệm trong lĩnh vực đào tạo tiếng Anh và
                                luyện
                                thi IELTS theo giáo trình được mua bản quyền từ Vương quốc Anh. Tại ICE chúng tôi luôn
                                hướng
                                tới mục tiêu xây dựng khung chương trình chuẩn cho việc học IELTS, để tiếng Anh trở
                                thành
                                ngôn ngữ phổ thông, giúp hàng triệu người Việt vươn ra tầm quốc tế</p>
                            <div class="watch">
                                <p class="watches">XEM THÊM </p>
                            </div>
                        </div>
                        <div class="rol-2"> <img src="img/rol-2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="top-unit">
                    <div class="unit">
                        <p class="ielts">IELTS ICE</p>
                        <p class="training">TOP ĐƠN VỊ ĐÀO TẠO IELTS HÀNG ĐẦU VIỆT NAM</p>
                    </div>
                    <div class="main">
                        <div class="item">
                            <p class="img-item"><img src="img/item-1.png" alt=""></p>
                            <p class="text-item">ICE | IELTS tự hào là đơn vị ủy quyền chính thức bài thi IELTS trên máy
                                tính của IDP tại Việt Nam.</p>
                        </div>
                        <div class="item">
                            <p class="img-item"><img src="img/item-2.png" alt=""></p>
                            <p class="text-item">Đội ngũ giáo viên có trên 5 năm kinh nghiệm giảng dạy IELTS, có IELTS
                                từ
                                8.0 trở lên và chứng chỉ DELTA, CELTA, TESOL…</p>
                        </div>
                        <div class="item">
                            <p class="img-item"><img src="img/item-3.png" alt=""></p>
                            <p class="text-item">Kiểm tra trình độ miễn phí, thi thử tại phòng thi thật. Kỹ năng nói sẽ
                                được
                                chấm điểm phân tích lỗi sai bởi giáo viên bản ngữ</p>
                        </div>
                        <div class="item">
                            <p class="img-item"><img src="img/item-4.png" alt=""></p>
                            <p class="text-item">Khung chương trình và giáo trình đều được mua bản quyền từ Vương quốc
                                Anh
                                do Đại học Cambridge biên soạn.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="title">
                        <div class="title-around">
                            <span class="title-1"> ĐÀO TẠO </span>
                            <span class="title-2"> & KHẢO THÍ IELTS</span>
                        </div>
                    </div>
                    <div class="rows">
                        <div class="col-3 col-6 border">
                            <div class="col-3-elem">
                                <img src="img/pan-1.webp" alt="">
                                <div class="col-child"><span class="pan-text">LỘ TRÌNH HỌC IELTS TỪ 0-7.0+</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border">
                            <div class="col-3-elem">
                                <img src="img/pan-2.webp" alt="">
                                <div class="col-child"><span class="pan-text">LỘ TRÌNH HỌC IELTS TỪ 0-6.5+</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border">
                            <div class="col-3-elem">
                                <img src="img/pan-3.webp" alt="">
                                <div class="col-child"><span class="pan-text"> TIẾNG ANH TĂNG CƯỜNG XÓA MẤT GỐC</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-4.webp" alt="">
                                <div class="col-child"><span class="pan-text">LỚP SPEAKING & WRITING</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-5.webp" alt="">
                                <div class="col-child"><span class="pan-text">LUYỆN THI IELTS CẤP TỐC (20H)</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-6.webp" alt="">
                                <div class="col-child"><span class="pan-text"> ĐÀO TẠO & TẬP HUẤN GIẢNG VIÊN</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-7.webp" alt="">
                                <div class="col-child"><span class="pan-text">KHÓA PHÁT ÂM TIẾNG ANH </span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-8.webp" alt="">
                                <div class="col-child"><span class="pan-text">KHÓA TỪ VỰNG TIẾNG ANH </span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-9.webp" alt="">
                                <div class="col-child"><span class="pan-text"> KHÓA NGỮ PHÁP TIẾNG ANH</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-10.webp" alt="">
                                <div class="col-child"><span class="pan-text"> LIÊN KẾT TRƯỜNG HỌC </span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-11.webp" alt="">
                                <div class="col-child"><span class="pan-text">ĐĂNG KÍ THỬ IELTS</span></div>
                            </div>
                        </div>
                        <div class="col-3 col-6 border ">
                            <div class="col-3-elem">
                                <img src="img/pan-12.webp" alt="">
                                <div class="col-child"><span class="pan-text"> ĐĂNG KÍ THẬT IELTS</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rigister">
                <div class="full">
                    <div class="dki-img"><img src="img/dang-ki.webp" alt=""></div>
                    <div class="dki-box">
                        <p class="dki-text"> ĐĂNG KÍ TƯ VẤN </p>
                        <form action="">
                            <div class="form-register">
                                <div class="col">
                                    <div class="col-6">
                                        <input type="text" placeholder="Tên học viên *" name="userstudent" id="userstudent" value="">
                                        <input type="text" placeholder="Tên Phụ Huynh*" name="userparent" id="userparent" value="">
                                        <input type="email" placeholder="Email *" name="email" id="email" value="">
                                        <select name="" id="">
                                            <option value="">Tư vấn về khóa học </option>
                                            <option value="">Lịch thi / đăng kí thi thử</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="date" placeholder="Ngay/Tháng/Năm sinh*" name="birth" id="birth" value="">
                                        <select name="name-list">
                                            <option value="" hidden>Khu vực</option>
                                            <option value="">Hà Nội</option>
                                            <option value="">Quảng Ninh</option>
                                            <option value=""> Vĩnh Yên - Vĩnh Phúc </option>
                                            <option value="">Ninh Bình </option>
                                            <option value="">Hải Dương</option>
                                        </select>
                                        <input type="number" placeholder="Số điện thoại *" name="number" id="number" value="">
                                        <input type="text" placeholder="Mã giới thiệu" name="magioithieu" id="magioithieu" value="">
                                    </div>
                                </div>
                                <div class="col-bt">
                                    <input- class="input-col" type="text" placeholder="Thông tin tư vấn " name="thongtin" id="thongtin" value="">
                                        <div class="choose">
                                            <input type="checkbox" id="choose" name="choose">
                                            <label for="choose">Tôi đồng ý nhận thêm thông tin về các khóa học, chương
                                                trình
                                                khảo
                                                thí và lịch thi IELTS từ ICE</label>
                                        </div>
                                        <div class="la">
                                            <button class="send-information" name="send-information">
                                                <i class="fa-thin fa-envelope"></i>
                                                GỬI THÔNG TIN
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="people">
                <div class="people-title">
                    <p class="title-top">ĐỘI NGŨ GIẢNG VIÊN </p>
                    <p class="own">ICE sở hữu đội ngũ giảng viên bản ngữ đến từ Anh, Úc, Mỹ có nhiều năm kinh nghiệm
                        và
                        chất lượng cao trong giảng dạy chương trình Anh ngữ Học thuật chuẩn Quốc Tế</p>
                </div>
                <div class="people-display">
                    <div class="row-1">
                        <div class="col-3-a col-6-a border">
                            <p><img src="img/p-case1.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Mr Edward Horgan</p>
                                <p class="case-text2">Giám đốc học thuật của ICE</p>
                            </div>
                        </div>
                        <div class="col-3-a col-6-a border">
                            <p><img src="img/p-case2.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Ms Jona Branzuela Bering</p>
                                <p class="case-text2">Giảng viên tại ICE</p>
                            </div>
                        </div>
                        <div class="col-3-a col-6-a border">
                            <p><img src="img/p-case3.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Ms Hannah Lintner</p>
                                <p class="case-text2">Giảng viên tại ICE</p>
                            </div>
                        </div>
                        <div class="col-3-a col-6-a border">
                            <p><img src="img/p-case4.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Mr Ngo Huy Tu</p>
                                <p class="case-text2">Giáo viên tại ICE</p>
                            </div>
                        </div>
                        <div class="col-3-a col-6-a border">
                            <p><img src="img/p-case5.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Ms Nguyen Minh Ly</p>
                                <p class="case-text2">Giáo viên tại ICE</p>
                            </div>
                        </div>
                        <div class="col-3-a col-6 border">
                            <p><img src="img/p-case6.webp" alt=""></p>
                            <div class="case-bottom">
                                <p class="case-text1">Ms Pham Thu Tra</p>
                                <p class="case-text2">Giáo viên tại ICE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="watch-all">
                    <p>XEM TẤT CẢ</p>
                </div>
            </div>
            <div class="inspire">
                <div class="inspire-child">
                    <div class="inspire-children">
                        <span class="inspire-in"> TRUYỀN CẢM HỨNG</span>
                        <span class="burn-fire"> - THẮP LỬA ĐAM MÊ </span>
                    </div>
                </div>
                <div class="passion">
                    <div class="inspiration">
                        <div class="inspiration-text">
                            <p> <img src="img/cam-hung1.jpg" alt=""></p>
                            <div class="text-detail">
                                <p class="lu-1">Ms Phan Thi Khanh Linh - 8.0 IELTS</p>
                                <p class="lu-2">
                                    <?php echo mb_strimwidth(' Cô học sinh cuối cấp THPT Chuyên Ngoại ngữ đa tài với thành tích học tập
                                    ấn tượng.Sở hữu 8.0 IELTS Khánh Linh đã có lợi thế rất lớn trong việc lựa chọn Trường Đại học mong
                                     muốn hay tìm kiếm cơ hội săn học bổng, du học tại trời Tây', 0, 100, '...'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="inspiration-text">
                            <p><img src="img/cam-hung2.jpg" alt=""></p>
                            <div class="text-detail">
                                <p class="lu-1">Lê Văn Tiến Dũng - 8.0 IELTS</p>
                                <p class="lu-2"> <?php echo mb_strimwidth('Chàng nghiên cứu sinh đến từ Đại học Bách Khoa Hà Nội lần đầu tiên thi IELTS đã xuất sắc đạt 8.0 Overall
                                🎥 Khi được hỏi về kinh nghiệm học IELTS, Dũng chia sẻ"Điều giúp mình tiến bộ hơn là việc không coi tiếng Anh là một môn học, mà coi nó là một công
                                 cụ để đến gần hơn với thế giới. Như vậy, việc học tiếng Anh không còn áp lực, do mình luôn thấy thoải mái và thích thú khi thấy mình tiếp thu thông
                                  tin dễ dàng hơn"', 0, 100, '...'); ?>
                                </p>

                            </div>
                        </div>
                        <div class="inspiration-text">
                            <p><img src="img/cam-hung3.jpg" alt=""></p>
                            <div class="text-detail">
                                <p class="lu-1">Nguyễn Đức Việt - 8.0 IELTS</p>
                                <p class="lu-2">
                                    <?php echo mb_strimwidth('Chia sẻ về kinh nghiệm học IELTS, Chàng Cực Phẩm Nguyễn Đức Việt cho hay:
                                    "Practice makes perfect là triết lý của em khi ôn luyện IELTS nói riêng và khi học tiếng Anh nói chung.
                                    Đối với kỹ năng Reading và Listening, chìa khoá để em đạt được điểm cao là theo sát bộ đề từ 10 - 16 của Cambridge. 
                                    Riêng với kỹ năng Listening, ngay trước hôm thi em đã lên Youtube để tìm một video 40 câu toàn dạng 
                                    map để có thể quen tai và follow theo mạch (và kết quả em được 9.0 cho kỹ năng này!)', 0, 100, '...'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activate">
                <div class="ac-title">
                    <p class="ac-text">HÌNH ẢNH HOẠT ĐỘNG</p>
                </div>
                <div class="activate-row">
                    <div class="activate-item">
                        <div class="activate-all">
                            <div class="activate-1"><img src="img/ac-1.jpg" alt=""></div>
                        </div>
                        <div class="activate-all">
                            <div class="activate-1"><img src="img/ac-2.jpg" alt=""></div>
                        </div>
                        <div class="activate-all">
                            <div class="activate-1"><img src="img/ac-3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news">
                <div class="new-title">
                    <p>TIN TỨC</p>
                </div>
                <div class="new">
                    <div class="new-rol">
                        <div class="new-rol-1">
                            <div class="fly-on">
                                <img src="img/new-1.jpg" alt="">
                            </div>
                            <div class="fly-bottom">
                                <div class="fly-text"><span>TIN TỨC, ƯU ĐÃI & SỰ KIỆN</span></div>
                                <p class="fly-con">ICE IELTS ĐÃ ĐÓN MÙA TRĂNG YÊU THƯƠNG NHƯ THẾ NÀO?</p>
                            </div>
                        </div>
                        <div class="new-rol-1">
                            <div class="fly-on">
                                <img src="img/new-2.jpg" alt="">
                            </div>
                            <div class="fly-bottom">
                                <div class="fly-text"><span>TIN TỨC, ƯU ĐÃI & SỰ KIỆN</span></div>
                                <p class="fly-con">ICE IELTS DÀNH TẶNG HƠN 500 SUẤT HỌC BỔNG GẦN 3 TỶ ĐỒNG TRONG THÁNG
                                    8/2022</p>
                            </div>
                        </div>
                        <div class="new-rol-1">
                            <div class="fly-on">
                                <img src="img/new-3.png" alt="">
                            </div>
                            <div class="fly-bottom">
                                <div class="fly-text"><span>TIN TỨC </span></div>
                                <p class="fly-con">CẬP NHẬT BỐ CỤC ĐỀ THI IELTS 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="watch-all">
                    <p>XEM TẤT CẢ</p>
                </div>
            </div>
            <div class="video">
                <div class="video-title">
                    <p class="vd">VIDEO GIỚI THIỆU TRUNG TÂM</p>
                </div>
                <div class="video-bottom">
                    <div class="video-display">
                        <div class="video-flex">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NBS7OlWbgS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-flex">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NBS7OlWbgS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-flex">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NBS7OlWbgS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bottom">

            </div>
        </div>
    </div>

    </div>
    <div id="footer">
        <div class="fter">
            <div class="fter-left">
                <div class="fter-logo">
                    <p class="logo-f"><img src="img/logo-footer.png" alt=""></p>
                    <div class="logo-r">
                        <p>ĐỊA CHỈ ICE</p>
                    </div>
                </div>
                <div class="fter-all">
                    <div class="col-2">
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>CÔNG TY CỔ PHẦN HỌC VIỆN ĐÀO TẠO ICE - MST: 0109212725</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> 150 Trần Vỹ, Mai Dịch, Cầu Giấy, Hà Nội</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fb.png" alt=""></p>
                                    <p class="title-text">https://facebook.com/iceielts.vn</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-right">
                            <div class="col-right-a">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29796.24603061916!2d105.732475748145!3d21.011438979300358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134538fb8d27185%3A0xceca270da7d542ef!2zQ2h1bmcgY8awIFRoxINuZyBMb25nIFZpY3RvcnksIMSQQ1QwOCwgQW4gUGjDuiwgSG_DoGkgxJDhu6ljLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1663260357566!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ ĐÔNG ANH</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> 183 - 185, Tổ 3, Thị Trấn Đông Anh, Huyện Đông Anh, Hà Nội
                                    </p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ BẮC NINH</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> LK 4 - Lô 41,42 KĐT Mới Trang Hạ, Trang Liệt, TP. Từ Sơn, Bắc
                                        Ninh</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ VĨNH PHÚC 1 (VĨNH YÊN)</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> TTTM Chùa Hà Tiên, Liên Bảo, TP. Vĩnh Yên, Vĩnh Phúc</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ VĨNH PHÚC 2 (LẬP THẠCH)</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> TDP Tân Chiền, TT Lập Thạch, H. Lập Thạch, Vĩnh Phúc</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ QUẢNG NINH</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text">Số 9 - 10 Lô A5, KĐT MonBay, Đường Phan Đăng Lưu, p. Đông Hải,
                                        TP. Hạ Long, Quảng
                                        Ninh</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-left">
                            <div class="col-b">
                                <div class="col-b2">
                                    <p>ICE CƠ SỞ NINH BÌNH</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/location.svg" alt=""></p>
                                    <p class="title-text"> Số 162 Đinh Tiên Hoàng, Phố Kim Đa, Ninh Khánh, TP Ninh Bình
                                    </p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/call.svg" alt=""></p>
                                    <p class="title-text"> (024)85.88.83.83</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/fax.svg" alt=""></p>
                                    <p class="title-text">1900 633 351</p>
                                </div>
                                <div class="left-title">
                                    <p class="icon-svg"><img src="img/mail.svg" alt=""></p>
                                    <p class="title-text">info@ieltsice.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fter-right">
                <div class="fter-right-all">
                    <div class="why-choose-ice">
                        <div class="choose-ice">
                            <div class="title-choose-ice">
                                <p>Tại sao chọn ice</p>
                            </div>
                            <div>
                                <a href=""><p class="fter-right-flex">Về chúng tôi-ICE</p></a>
                                <a href=""><p class="fter-right-flex">Lý do bạn chọn ICE</p></a>
                                <a href=""><p class="fter-right-flex">Đội ngũ giáo viên</p> </a>
                                <a href=""><p class="fter-right-flex">Cơ sở vật chất</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="news-event">
                        <div class="event">
                            <div class="title-choose-ice">
                                <p>Tin tức và sự kiện </p>
                            </div>
                            <div>
                                <a href=""><p class="fter-right-flex">Tin tức</p></a>
                                <a href=""><p class="fter-right-flex">ưu đãi và sự kiện</p> </a>
                                <a href=""><p class="fter-right-flex">Câu truyện truyền cảm hứng </p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fter-right-all">
                    <div class="why-choose-ice">
                        <div class="choose-ice">
                            <div class="title-choose-ice">
                                <p>Tại sao chọn ice</p>
                            </div>
                            <div>
                                <a href=""><p class="fter-right-flex">Về chúng tôi-ICE</p></a>
                                <a href=""><p class="fter-right-flex">Lý do bạn chọn ICE</p></a>
                                <a href=""><p class="fter-right-flex">Đội ngũ giáo viên</p> </a>
                                <a href=""><p class="fter-right-flex">Cơ sở vật chất</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="news-event">
                        <div class="event">
                            <div class="title-choose-ice">
                                <p>Tin tức và sự kiện </p>
                            </div>
                            <div>
                                <a href=""><p class="fter-right-flex">Tin tức</p></a>
                                <a href=""><p class="fter-right-flex">ưu đãi và sự kiện</p> </a>
                                <a href=""><p class="fter-right-flex">Câu truyện truyền cảm hứng </p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>