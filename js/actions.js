$("#primipesce").click(function() {
//alert($("#comune").val());
$.ajax({
type: "POST",
data: ({ comune: $("#comune").val()}),
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


