$(function () {
	var shirt_tpl = $(".shirt-info").html(),
		order_num = $("#order-num").val();
	$("#order-num").blur(function(){
		var _num = $(this).val();
		if(_num == order_num){
			return;
		}
		if(_num > 1){
			var shirt_tpl_html = shirt_tpl.toString();

			for(var _i = 1; _i < _num; _i++ ){
				var r1 = shirt_tpl_html.replace(/sex/g, "sex_"+_i);
				var r2 = r1.replace(/height/g, "height_" + _i);
				var r3 = r2.replace(/weight/g, "weight_" + _i);
				var r4 = r3.replace(/size/g, "size_" + _i);
				$(".shirt-info").append(r4);
				$(".shirt-info fieldset").addClass('line');
			}
		}else{
			$(".shirt-info").append(shirt_tpl);
		}
		order_num = _num;
	});


	$(document).on('click', function(){
		$("#overlay, #win").hide();
	});
});