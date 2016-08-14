   function validate(){
	var title = document.guiykien.TieuDe.value;
	var name = document.guiykien.HoTen.value;
	var mobile = document.guiykien.DienThoai.value;
	var guiden = document.getElementById("Guiden").value;
	var noidung = document.guiykien.NoiDung.value;
	var spam = document.guiykien.maSpam.value;
	
	if (title == ""){
		document.guiykien.TieuDe.focus();
		document.getElementById("tieude").innerHTML = "Vui lòng nhập tiêu đề!";
		document.getElementById("tieude").style.color = "red";
		document.guiykien.TieuDe.style.border = "solid red 1px";
		document.guiykien.TieuDe.style.background = "#e9e9e9";
		return false;
		}
		else if(title.length > 50){
		document.getElementById("tieude").innerHTML = "Tiêu đề của bạn quá dài!";
		document.getElementById("tieude").style.color = "red";	
		document.guiykien.TieuDe.style.border = "solid red 1px";
		document.guiykien.TieuDe.style.background = "#e9e9e9";	
		return false;
		}
		else{
		document.getElementById("tieude").innerHTML = "";	
		document.guiykien.TieuDe.style.border = "";
		document.guiykien.TieuDe.style.background = "white";
		}
	if (name == ""){
		document.guiykien.HoTen.focus();
		document.getElementById("hoten").innerHTML = "Vui lòng nhập tên của bạn!";
		document.getElementById("hoten").style.color = "red";
		document.guiykien.HoTen.style.border = "solid red 1px";
		document.guiykien.HoTen.style.background = "#e9e9e9";
		return false;
		}
		else if(name.length > 30){
		document.getElementById("hoten").innerHTML = "Tên của bạn quá dài!";
		document.getElementById("hoten").style.color = "red";	
		document.guiykien.HoTen.style.border = "solid red 1px";
		document.guiykien.HoTen.style.background = "#e9e9e9";	
		return false;
		}
		else{
		document.getElementById("hoten").innerHTML = "";	
		document.guiykien.HoTen.style.border = "";
		document.guiykien.HoTen.style.background = "white";
		}
	if (mobile == ""){
		document.guiykien.DienThoai.focus();
		document.getElementById("dienthoai").innerHTML = "Vui lòng nhập số điện thoại!";
		document.getElementById("dienthoai").style.color = "red";
		document.guiykien.DienThoai.style.border = "solid red 1px";
		document.guiykien.DienThoai.style.background = "#e9e9e9";
		return false;
		}
		else if( mobile.length <= 10 || mobile.length >= 13){
		document.getElementById("dienthoai").innerHTML = "Số điện thoại không đúng!";
		document.getElementById("dienthoai").style.color = "red";	
		document.guiykien.DienThoai.style.border = "solid red 1px";
		document.guiykien.DienThoai.style.background = "#e9e9e9";	
		return false;
		}
		else{
		document.getElementById("dienthoai").innerHTML = "";	
		document.guiykien.DienThoai.style.border = "";
		document.guiykien.DienThoai.style.background = "white";
		}
	if (guiden == "--Chọn bộ phận gửi đến--"){
		document.getElementById("guiden1").innerHTML = "Bạn chưa chọn bộ phận gửi đến!"
		document.getElementById("guiden1").style.color = "red";
		document.guiykien.BoPhan.style.border = "solid red 1px";
		document.guiykien.BoPhan.style.background = "#ccc";
		return false;
		}	
		else{
		document.getElementById("guiden1").innerHTML = "";
		document.guiykien.BoPhan.style.border = "";
		document.guiykien.BoPhan.style.background = "white";
		}
	if (noidung == ""){
		document.guiykien.NoiDung.focus();
		document.getElementById("noidung").innerHTML = "Vui lòng nhập nội dung!";
		document.getElementById("noidung").style.color = "red";
		document.guiykien.NoiDung.style.border = "solid red 1px";
		document.guiykien.NoiDung.style.background = "#e9e9e9";
		return false;
		}
		else{
		document.getElementById("noidung").innerHTML = "";	
		document.guiykien.NoiDung.style.border = "";
		document.guiykien.NoiDung.style.background = "white";
		}		
	if (spam == ""){
		document.guiykien.maSpam.focus();
		document.getElementById("maspam").innerHTML = "Vui lòng nhập mã!";
		document.getElementById("maspam").style.color = "red";
		document.guiykien.maSpam.style.border = "solid red 1px";
		document.guiykien.maSpam.style.background = "#e9e9e9";
		return false;
		}
		else if(spam.length > 5){
		document.getElementById("maspam").innerHTML = "Mã số sai! Vui lòng nhập lại";
		document.getElementById("maspam").style.color = "red";	
		document.guiykien.maSpam.style.border = "solid red 1px";
		document.guiykien.maSpam.style.background = "#e9e9e9";	
		return false;
		}
		else{
		document.getElementById("maspam").innerHTML = "";	
		document.guiykien.maSpam.style.border = "";
		document.guiykien.maSpam.style.background = "white";
		}
		alert("Gửi thành công!")
		return true;
}