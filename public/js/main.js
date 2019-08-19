

$(document).ready(function(){
	var url = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
	$(".navbar-nav li ").each(function(){
if (url == $(this).attr("name")){
			$(this).addClass('active').siblings().removeClass('active');
} else if (url == '' && $(this).attr('name') == 'home'){
	$(this).addClass('active');
}
});
});

  
// $(document).ready(function(){
// // 1

//     $('#button_login').click(function(){
// // 2

//     var usuario = $('#email').val();
//     var password = $('#senha').val();

// // inicio if

//     if(usuario != '' && password != ''){
//         // inicio ajax
//         $.ajax({

//             url:"user",
//             method:"POST",
//             data:{usuario: usuario, password:password},
// // inicio funcao

		
//             success:function(data){
//                 if (data == 'no') {
//                     alert('no');
//                 }else{
//                     alert('yes');
//                 }
//             }
// // fim funcao
//         })
// //fim ajax 
//     }else{
//         alert('erro');

//     }

// // fim if



// // 2
//     });
// // 1
// });