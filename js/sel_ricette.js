$(document).ready(function () {
  
        $("#primi_pesce").click(function() {
var parametro = '07_1';
//alert(parametro);

$.ajax({
type: "POST",
data: ({ ricette: parametro, start: 0}),
url: "ricette.php",
error: function() {
                $("#errors").html('Error submiting the form.');
            },
success: function(response){
$("#content").html(response);
}
});
//alert('fatto');
});



});





