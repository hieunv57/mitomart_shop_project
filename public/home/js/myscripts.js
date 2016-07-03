$(document).ready(function(){
    $(".update_cart").click(function(){
        var rowid = $(this).attr('id');
        var qty = $(this).parent().parent().parent().find(".qty").val();
        var token = $("input[name='_token']").val();
        alert(qty);
        $.ajax({
                        url:'cap-nhat-gio-hang/'+rowid+'/'+qty,
                        type:'GET',
                        cache:false,
                        data:{"_token":token, "id":rowid, "qty":qty},
                        success:function(data){
                        	// if (data == "oke"){
                        	// 	window.location = "gio-hang"
                        	// }
                        	console.log('okkk');
                        }
        });
    });
});