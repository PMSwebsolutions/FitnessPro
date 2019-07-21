 $(document).ready(function(){
        if($("#intro_btn").prop("checked") == false){
                $("#intro_btn").attr("disabled",true);
        }
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $("#intro_btn").attr("disabled",false);
            }
            else if($(this).prop("checked") == false){
                $("#intro_btn").attr("disabled",true);
            }
        });
     
        $("#intro_btn").click(function(){
            window.location.href = "register.php";
        })
    });