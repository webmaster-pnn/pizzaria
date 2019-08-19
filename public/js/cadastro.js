$(document).ready
(
    function()
    {  
        $('#btnenviar').click
        (
            function(e)
            {   
                $inNome     =$('#txtName');
                $inSobNome  =$('#txtSobrenome');
                $inEmail    =$('#txtEmail');
                $btnEnviar  =$('#btnenviar');
                $password   =$('#senha');
                $confirm_password =$('#confirm_senha');
                
                var emailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var latinformat=/[^a-zA-Z\-\'\ ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏàáâãäåæçèéêëìíîïÐÑÒÓÔÕÖØÙÚÛÜÝÞßðñòóôõöøùúûüýþÿ]/i;
                
                if($inNome.val().length<=5 || latinformat.test($inNome.val()))
                {
                    e.preventDefault();
                    $('#txtName + span').toggle().html("Informe um nome válido !");
                    $inNome.focus();                 
                }
                else if($inSobNome.val().length<=5 || latinformat.test($inSobNome.val()))
                {
                    e.preventDefault();
                    $('#txtSobrenome + span').toggle().html("Informe um nome válido !");
                    $inNome.focus();                 
                }
                else if(!emailformat.test($inEmail.val()))
                {
                    e.preventDefault();
                    $('#txtEmail + span').toggle().html("Informe um e-mail válido !");
                    $inEmail.focus();                 
                }
                
               
                else if($password.val().length >= 5){

                    if($password.val() == $confirm_password.val()) {
                                                
                       } else {
                        e.preventDefault();
                        $('#senha + span').toggle().html("Senhas Diferentes !");
                        $password.focus();
                       }

                } 

                else if($password.val().length <= 5){
                        e.preventDefault();
                        $('#senha + span').toggle().html("A senha deve conter mais de 5 caracteres!");
                        $password.focus();
                }


                    
            } 
                     
        )
    }
);

