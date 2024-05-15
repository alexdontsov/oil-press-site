$(function(){
    $('#product-info-form').on('submit', function(e){
        let token = $("input[name=_token]").val();

        e.preventDefault();
        $.ajax({
            url: '/product/get-info-form',
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: $('#product-info-form').serialize(),
            success: function(data){
                $('#responsestatus').text(data);
                setTimeout(function() {$('#send-product-message').modal('hide');}, 1000);
            }
        });
    });
});
//
// function submitForm(){
//     // Initiate Variables With Form Content
//     var phone = $("#phone").val();
//     var email = $("#email").val();
//     var token = $("input[name=_token]").val();
//
//
//     $.ajax({
//         type: "POST",
//         url: "/product-info",
//         data: "name=" + phone + "&email=" + email,
//         headers: {'X-CSRF-TOKEN': token},
//         success : function(text){
//             if (text == "success"){
//                 formSuccess();
//             } else {
//                 formError();
//                 submitMSG(false,text);
//             }
//         }
//     });
// }
//
// function formSuccess(){
//     $("#contactForm")[0].reset();
//     submitMSG(true, "Ваше сообщение успешно отправлено!")
// }
//
// function formError(){
//     $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
//         $(this).removeClass();
//     });
// }
//
// function submitMSG(valid, msg){
//     if(valid){
//         var msgClasses = "h3 text-center tada animated text-success";
//     } else {
//         var msgClasses = "h3 text-center text-danger";
//     }
//     $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
// }
