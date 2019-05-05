<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
</head>
<body>
	<?php  
	echo "
	<div>
      <div class='slideshow-container'>
        <div class='mySlides fade'>
          <img src='image/m1.jpg' style='width:100%; height: 500px'>
          <div class='text'>Nội dung caption của slide đầu tiên!</div>
        </div>

        <div class='mySlides fade'>
          <img src='image/m2.jpg' style='width:100%; height: 500px'>
          <div class='text'>Nội dung caption của slide thứ 2!</div>
        </div>

        <div class='mySlides fade'>
          <img src='image/m3.png' style='width:100%; height: 500px'>
          <div class='text'>Nội dung caption của slide thứ 3!</div>
        </div>

        <div class='mySlides fade'>
          <img src='image/m4.jpg' style='width:100%; height: 500px'>
          <div class='text'>Nội dung caption của slide thứ 3!</div>
        </div>

        <div class='mySlides fade'>
          <img src='image/m5.jpg' style='width:100%; height: 500px'>
          <div class='text'>Nội dung caption của slide thứ 3!</div>
        </div>
      </div>
      <br>

      <div style='text-align:center'>
        <span class='dot' onclick='currentSlide(0)'></span> 
        <span class='dot' onclick='currentSlide(1)'></span> 
        <span class='dot' onclick='currentSlide(2)'></span> 
        <span class='dot' onclick='currentSlide(3)'></span> 
        <span class='dot' onclick='currentSlide(4)'></span> 
      </div>  
   	</div>
    <script>
      var slideIndex;
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName('mySlides');
          var dots = document.getElementsByClassName('dot');
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = 'none';  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(' active', '');
          }

          slides[slideIndex].style.display = 'block';  
          dots[slideIndex].className += ' active';
          slideIndex++;
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          setTimeout(showSlides, 5000);
      }
      showSlides(slideIndex = 0);
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>


    
	<div id='menu'>
		<ul style='
    margin-top: 4px;'>
				<a href='#'>Trang chủ</a>
				<a href='#'>Giới thiệu</a>
				<a href='#'>Du lịch</a>
				<a href='#'>Khách sạn</a>
				<a href='#'>Vận chuyển</a>
				<a href='#'>Tin tức</a>
				<a href='#'>Khuyến mãi</a>
				<a href='#'>Dịch vụ khách hàng</a>
				<a href='#' style=' border-right: 0px;'>Liên hệ</a>
		</ul>
	</div>
	<div id='main'>
		<div id='main_left'>
			<div class='main_left_1'>
				<div class='left_1_1'>
					<div class='left_1_1_title'>
						<a style='
						    padding: 15px;
						    font-size: 23px;
						    color: #bfbfbf;
							'>Tour du lịch 1
						</a>
					</div>
					<div class='left_1_1_body'>
						<img src='image/k1.jpg' style='
						width: 260px;
						height: 100px;
						width: 260px;
						height: 100px;'>
						<a style='font-size: 14px;'>Phú Quốc - Thiên Đường Xanh - Dinh Cậu - Thử Tài Câu Cá (Resort 3*, Tour Tiêu Chuẩn)</a>
						<a href='#' style=' margin-left: 200px; '>Xem thêm</a>
					</div>
				</div>
				<div class='left_1_2'>
					<div class='left_1_2_title'>
						<a style='
						    padding: 15px;
						    font-size: 23px;
						    color: #bfbfbf;
							'>Tour du lịch 2
						</a>
					</div>
					<div class='left_1_2_body'>
						<img src='image/k2.jpg' style='width: 260px;
						height: 100px;
						width: 260px;
						height: 100px;'>
						<a style='font-size: 14px;'>Miền Tây - Bạc Liêu - Nhà Thờ Cha Diệp - Đất Mũi Cà Mau - Cần Thơ (Tour Tiêu Chuẩn)-Tháng Vàng Ưu Đãi</a>
					<a href='#' style='
    					margin-left: 200px;'>Xem thêm</a>
					</div>
				</div>
				<div class='left_1_3'>
					<div class='left_1_3_title'>
						<a style='
						    padding: 15px;
						    font-size: 23px;
						    color: #bfbfbf;
							'>Tour du lịch 3
						</a>
					</div>
					<div class='left_1_3_body'>
						<img src='image/k3.jpg' style='width: 260px;
						height: 100px;
						width: 260px;
						height: 100px;'>
						<a style='font-size: 14px;'>Đà Lạt - Đường Hầm Điêu Khắc Đất Sét (Tour tiết kiệm)</a>
						<a href='#' style='
    					margin-left: 200px;'>Xem thêm</a>
					</div>
				</div>
			</div>
			<div class='main_left_2'>
				<div class='left_2_title'>
					<a>Thay chữ</a>
				</div>
				<div class='left_2_1'>
					<div class='left_2_1_1'>
						<img src='image/h1.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Singapore - Malaysia (Tour Tiêu chuẩn)</a>
   						<a style='margin-top: -41px;padding-left: 4px;font-size: 20px;border: 5px solid yellow;'> 13.990.000</a>
					</div>
					<div class='left_2_1_2'>
						<img src='image/130.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'> Giá: 000</a>
					</div>
					<div class='left_2_1_3'>
						<img src='image/handico.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'>Giá: 000</a>
					</div>
					<div class='left_2_1_4'>
						<img src='image/ca2.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   					<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'>Giá: 000</a>
					</div>
				</div>
				<div class='left_2_2'>
					<div class='left_2_2_1'>
						<img src='image/200.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'>Giá: 000</a>
					</div>
					<div class='left_2_2_2'>
						<img src='image/320.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ssv</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'>Giá: 000</a>
					</div>
					<div class='left_2_2_3'>
						<img src='image/78.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'> Giá: 000</a>
					</div>
					<div class='left_2_2_4'>
						<img src='image/1178.jpg' style='    
							width: 210px;
   							 height: 130PX;'>
   						<a href='#'>Chưa có nội dung ss</a>
   						<a style=' 
    						margin-top: -41px;
   						    padding-left: 4px;
						    font-size: 20px;
 						   border: 5px solid yellow;
						'> Giá: 000</a>

					</div>
				</div>
				<a href='#' style='margin-left: 715px;'>Xem thêm</a>
			</div>
			<div class='main_left_3'>
				<div class='left_3_title'>
					<a> chưa có nội dung ll </a>
				</div>
				<div class='left_3_body'>
					<div class='left_3_1'>
						<img src='image/011.jpg'>
						<a href='#'> chưa có nội dung ll </a>
					</div>
					<div class='left_3_1'>
						<img src='image/012.jpg'>
						<a href='#'> chưa có nội dung ll </a>
					</div>
					<div class='left_3_1'>
						<img src='image/013.jpg'>
						<a href='#'> chưa có nội dung ll </a>
					</div>
					<div class='left_3_1'>
						<img src='image/014.jpg'>
						<a href='#'> chưa có nội dung ll</a>
					</div>
				</div>
			</div>
		</div>
		<div class='main_right'>
			<div class='right01'>
				<div class='right_1'>
					<div class='right_1_title' style='
					    background: #136f86;
					    height: 37px;'>
						<a style='
						    color: #f9f9f9;
						    font-size: 18px;
						    padding: 15px;
							'>Các địa điểm du lịch
						</a>
					</div>
					<div class='right_1_body'>
						<ul style=' margin-left: -40px;'>
							<a href='#'>Địa điểm 1</a><br><br>
							<a href='#'>Địa điểm 2</a><br><br>
							<a href='#'>Địa điểm 3</a><br><br>
							<a href='#'>Địa điểm 4</a><br><br>
							<a href='#'>Địa điểm 5</a><br><br>
							<a href='#'>Địa điểm 6</a><br><br>
						
					</div>
				</div>
				<div class='right_2' style='
				    background: #e5eaea;
				    width: 199px;
				    height: 495px;'>
					<div class='right_2_title'>
						<a>Xem nhiều</a>
					</div>
					<div class='right_2_body'>
						<div class='right_2_body_1'>
							<img src='image/01.jpg' style='
							height: 100px;
							width: 199px;'>
							<a href='#'>thay ảnh và caption</a>
						</div>
						<div class='right_2_body_1'>
							<img src='image/01.jpg' style='
							height: 100px;
							width: 199px;'>
							<a href='#'>thay ảnh và caption</a>
						</div>
						<div class='right_2_body_1'>
							<img src='image/01.jpg' style='
							height: 100px;
							width: 199px;'>
							<a href='#'>thay ảnh và caption</a>
						</div>
					</div>
				</div>
			</div>
			<div class='right02' style='
			    background: #ccc;
			    height: 1000px;
			    width: 200px;
			    float: left;
			    border-left: 1px solid #136f86;'>
							<div class='right_3' style='
			    background: #70a1ad;
			    width: 200px;
			    height: 334px;
			    border-bottom: 3px solid #ff0a0a;'>
					<!-- <img src='image/search.jpg' style='width: 200px;
					height: 290px;     border-left: 1px solid #136f86;'> -->
					<div class='right_3_title' style='
				    background: #542ba2;'> 
										<a> Tìm Kiếm </a>
									</div>
									<div class='right_3_body' style='
				    background: #71dccd;'>
						




						<table cellpadding='0px' cellspacing='0px' style='width: 150px;border: 1px #79a905 solid;'>
        <tbody><tr>
            <td style='width: 80px;height: 48px;text-align:left;border: 1px #79a905 solid;color:#068a35;font-size: 10px;font-weight:bold;'>
                &nbsp;&nbsp; chưa có mã : </td>
            <td style='border: 1px #79a905 solid;'>
            
                <input name='txtma' type='text' id='ma' style='font-size: 12px;height: 14px;width: 136px;'> 
                                                    </td>
        </tr>
        <tr>
            <td style='width: 114px;height: 47px;text-align:left;border: 1px #79a905 solid;color:#068a35;font-size: 10px;font-weight:bold;'>
               &nbsp;&nbsp;chưa có ax : 
            </td>
            <td style='border: 1px #79a905 solid;'>
            
             <select name='catalog' id='catalog' style='color:#068A35;font-size: 12px;height: 20px;width: 140px;'>
	<option value='0'>--- Chọn tất cả ---</option>
	<option value='1'>thay ảnh và captionxxx</option>
	<option value='2'>thay ảnh và captionvvv</option>
	<option value='3'>thay ảnh và captionvvv</option>
	<option value='4'>thay ảnh và captionvvv</option>
	<option value='5'>thay ảnh và captionvvv</option>
	<option value='6'>thay ảnh và captionvvv</option>
	<option value='7'>thay ảnh và captionvvv</option>

</select>
            </td>
        </tr>
        <tr>
            <td style='width:180px;height: 47px;text-align:left;border: 1px #79a905 solid;color:#068a35;font-size: 12px;font-weight:bold;'>
                &nbsp;&nbsp;Địa điểm:
            </td>
            <td style='border: 1px #79a905 solid;'>
              <select name='vitri' id='vitri' style='color:#068A35;font-size: 12px;height: 20px;width: 140px;'>
	<option selected='selected' value='0'>--- Chọn tất cả ---</option>
	<option value='1'>thay tiếp ppp</option>
	<option value='2'>thay tiếp ppp</option>
	<option value='3'>thay tiếp ppp</option>
	<option value='4'>thay tiếp ppp</option>
	<option value='5'>thay tiếp ppp</option>
	<option value='6'>thay tiếp ppp</option>
	<option value='7'>thay tiếp ppp</option>
	<option value='8'>thay tiếp ppp</option>
	<option value='9'>thay tiếp ppp</option>
	<option value='11'>thay tiếp ppp</option>
	<option value='12'>thay tiếp ppp</option>
	<option value='13'>thay tiếp ppp</option>
	<option value='14'>thay tiếp ppp</option>
	<option value='15'>thay tiếp ppp</option>

</select>
 
            </td>
        </tr>
        <tr>
            <td style='width:180px;height: 47px;text-align:left;border: 1px #79a905 solid;color:#068a35;font-size: 12px;font-weight:bold;'>
              &nbsp;&nbsp;chưa có: 
            </td>
            <td style='border: 1px #79a905 solid;'>
               <select name='huong' id='huong' style='color:#068A35;font-size: 12px;height: 18px;width: 140px;'>
	<option selected='selected' value='0'>--- Chọn tất cả ---</option>
	<option value='1'>Thay đây nữa bbb</option>
	<option value='2'>Thay đây nữa bbb</option>
	<option value='3'>Thay đây nữa bbb</option>
	<option value='4'>Thay đây nữa bbb</option>
	<option value='5'>Thay đây nữa bbb</option>
	<option value='6'>Thay đây nữa bbb</option>
	<option value='7'>Thay đây nữa bbb</option>
	<option value='8'>Thay đây nữa bbb</option>
	<option value='9'>Thay đây nữa bbb</option>
	<option value='10'>Thay đây nữa bbb</option>

</select>
            </td>
        </tr>
        <tr>
            <td style='width: 157px;height: 45px;text-align:left;border: 1px #79a905 solid;color:#068a35;font-size: 13px;font-weight:bold;'>
               &nbsp;&nbsp; Khoảng giá :</td>
            <td style='border: 1px #79a905 solid;'>
             
                 <select name='Gia' id='Gia' style='color:#068A35;font-size: 12px;height: 20px;width: 140px;'>
	<option selected='selected' value='0'>--- Khoảng giá ---</option>
	<option value='1'>Thay tiếp eee</option>
	<option value='2'>Thay tiếp eee</option>
	<option value='3'>Thay tiếp eee</option>
	<option value='4'>Thay tiếp eee</option>
	<option value='5'>Thay tiếp eee</option>
	<option value='6'>Thay tiếp eee</option>

</select>
                </td>
        </tr>
    </tbody></table>
    <a href='#'><img src='image/search.png' style='
    margin: 8px;
    margin-left: 46px;
'></a>





					</div>
				</div>
				<div class='right_4' style='
    background: #62ceec;
    width: 200px;
    height: 410px;
'>
					<div class='right_4_title'>
						<a> nội dung ax </a>
					</div>
					<div class='right_4_body'>
						<div class='right_4_body_1'>
							<img src='image/pt1.jpg'>
							<a href='#'>Chưa tìm được nội dung xx</a>
						</div>
						<div class='right_4_body_1'>
							<img src='image/pt2.jpg'>
							<a href='#'>Chưa tìm được nội dung xx</a>
						</div>
						<div class='right_4_body_1'>
							<img src='image/pt3.jpg'>
							<a href='#'>Chưa tìm được nội dung xx</a>
						</div>
						<div class='right_4_body_1'>
							<img src='image/pt4.jpg'>
							<a href='#'>Chưa tìm được nội dung xx</a>
						</div>
						
					</div>
				</div>
				<div class='right_5' style='
    background: #ccc;
    width: 200px;
    height: 252px;
'>
					<div class='right_5_title'></div>
					<div class='right_5_body'>
						<img src='image/New.gif'>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div id='bottom'>
		<div class='bottom_title'></div>
		<div class='bottom_body'></div>
	</div>-->
	<div class='bet'>
		<div class='bet_title'>
			<a style='
    font-size: 24px;
    margin-left: 9px;
    color: white;
'>Nội dung thêm</a>
		</div>
		<div class='bet_body'>
			<div class='bet_body1'>
				<div class='bet_body1_title'><a>chưa có nội dung</a></div>
				<div class='bet_body1_body'>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
				</div>
			</div>
			<div class='bet_body1'>
				<div class='bet_body1_title'><a>chưa có nội dung</a></div>
				<div class='bet_body1_body'>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
				</div>
			</div>
			<div class='bet_body1'>
				<div class='bet_body1_title'><a>chưa có nội dung</a></div>
				<div class='bet_body1_body'>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
				</div>
			</div>
			<div class='bet_body1'>
				<div class='bet_body1_title'><a>chưa có nội dung</a></div>
				<div class='bet_body1_body'>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
				</div>
			</div>
			<div class='bet_body1'>
				<div class='bet_body1_title'><a>chưa có nội dung</a></div>
				<div class='bet_body1_body'>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
					<div class='betbody11'><a href='#'> Chưa tìm được nội dung zzz</a></div>
				</div>
			</div>
		</div>
		<div class='bet_bottom'>
			<a href='#'>Giới thiệu</a>
			<a href='#'>Góp ý</a>
			<a href='#'>Đầu trang</a>
			<a href='#'style='
    border: 0px;
	'>Liên hệ quảng cáo</a>
		</div>
	</div>
	";
	?>
</body>
</html>