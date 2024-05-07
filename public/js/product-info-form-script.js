$(function(){
    $('#product-info-form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'notifications/subscribe/',
            type: 'POST',
            data: $('#subscribe-email-form').serialize(),
            success: function(data){
                $('#responsestatus').val(data);
                $('#subscription-confirm').modal('show');
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
