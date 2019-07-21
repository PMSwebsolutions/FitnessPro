$(document).ready(function(){
    $.ajax({
        url: "check.php",
        type: "post",
        dataType: "json",
        data: "",
        success: function(result){
            alert(result);
        },
        error: function(){
            alert("Nope");
        }
    })
})