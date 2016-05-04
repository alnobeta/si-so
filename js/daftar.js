$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var nama = $("input#nama").val();
		if (nama == "") {
      $("label#nama_error").fadeIn();
      $("input#nama").focus();
      return false;
    }
	var email = $("input#email").val();
		if (email == "") {
			$("label#email_error").fadeIn();
			$("input#email").focus();
			return false;
		}
	var password = $("input#password").val();
		if (password == "") {
      $("label#password_error").fadeIn();
      $("input#password").focus();
      return false;
    }
	var web = $("input#web").val();

		var kelas = $("input#kelas").val();
		if (kelas == "") {
      $("label#kelas_error").fadeIn();
      $("input#kelas").focus();
      return false;
    }
	var NIM = $("input#NIM").val();
		if (NIM == "") {
		$("label#NIM_error").fadeIn();
		$("input#NIM").focus();
		return false;
    }
		
		var dataString = '&nama='+ nama + '&password=' + password + '&web=' + web + '&email=' + email + '&kelas=' + kelas + '&NIM=' + NIM;
		//alert (dataString);return false;
		$.ajax({
      type: "POST",
      url: "kirim.php",
      data: dataString,
      success: function() {
        $('#daftar').html("<div id='message'></div>");
        $('#message').html("<h2>Data Telah Disimpan!</h2>")
        .append("<p>Klik <a href='index.php?page=login'><u>Disini</u></a> Untuk Login!!</p>")
        .hide()
        .fadeIn(1100, function() {
          $('#message').append("<img id='checkmark' src='gambar/check.png' />");
        });
      }
     });
    return false;
		
	});
});
runOnLoad(function(){
  $("input#nama").select().focus();
});
