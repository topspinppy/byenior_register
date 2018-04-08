function edit (id) 
{
    $.ajax({
        type: "POST",
        url: "form_add_reservation.php",
        cache: false,
        data: "id="+id,
        success: function(msg){
            document.getElementById("r").innerHTML = msg;
        }
    });
}