$(document).ready(function () {
    
    const REGEX_NAME = /^[A-Z][a-z]{2,20}$/; 
    const REGEX_USERNAME = /^[A-z][A-z0-9@#$%^&*]{3,20}$/;
    const REGEX_PASSWORD = /^(?=.*[A-Z])(?=.*[0-9])[A-z0-9$%^&*]{8,}$/;
    const REGEX_EMAIL = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    const FIRSTNAME_ERROR = "First name needs to start with first capital letter and length of minimum 3";
    const LASTNAME_ERROR = "Last name needs to start with first capital letter and length of minimum 3";
    const USERNAME_ERROR = "Username needs to start with a letter and length of minimum 3";
    const PASSWORD_ERROR = "Password needs to have at least one big letter, one number and length of minimum 8";
    const EMAIL_ERROR = "Email is not in valid format.  Example: something@gmail.com";
    const ERROR_SURVEY = "Please vote to see results";
    
    var errors = [];
    function check(input, regex, error, div) {
      if (!regex.test(input)) {
        errors.push(error);
        div.text(error);
      }
    }
    // ajax callback function
    function ajaxCallBack(url, method, data, result){
        $.ajax({
            url: url,
            method: method,
            data: data,
            dataType: "json",
            success: result,
            error: function(xhr){
                /* console.log(xhr); */
                //if 500..
                //if 404..
            }
        })
    }

       //registracija korisnika
       $(document).on('click', '#registerButton', function(){
        let firstName, lastName, email, password, username;
        firstName = $('#firstname').val();
        lastName = $('#lastname').val();
        email = $('#mail').val();
        password = $('#passRegister').val();
        username = $('#userRegister').val();
        passconf = $('#passConfirm').val();
        errors=[];
        var usernameError = $("#userError");
        var passwordError = $("#passError");
        var firstNameError = $("#firstNameError");             // Promeni imena promenljivih na eng
        var lastNameError = $("#lastNameError");
        var emailError = $("#emailError");
        usernameError.text("");
        passwordError.text("");
        firstNameError.text("");
        lastNameError.text("");
        emailError.text("");

        check(username,REGEX_USERNAME,USERNAME_ERROR,usernameError);
        check(password,REGEX_PASSWORD,PASSWORD_ERROR,passwordError);
        check(firstName,REGEX_NAME,FIRSTNAME_ERROR,firstNameError);
        check(lastName,REGEX_NAME,LASTNAME_ERROR,lastNameError);
        check(email,REGEX_EMAIL,EMAIL_ERROR,emailError);
        if(password != passconf){
            $("#passConfError").html("Passwords do not match");  // Promeni ime
        }        

        var podaciZaSlanje;
        if(errors.length==0){
             podaciZaSlanje = {
                imePHP: firstName,
                prezimePHP: lastName,
                emailPHP: email,
                lozinkaPHP: password,
                usernamePHP: username
            }
        }

        ajaxCallBack("backend/registracija.php", "POST", podaciZaSlanje, function(result){
            $("#odgovor").html(`<p class="alert succRegister"> ${result.poruka} </p>`)
        })

        
    })
    // logovanje
    $(document).on('click', '#btnLogin', function(e){
        // regularni izrazi
        // provera
        e.preventDefault();
           
            $.ajax({
                type: "POST",
                url: "backend/login.php",
                data: {
                    username : $("#tbLogUsername").val(),
                    password : $("#tbLogPassword").val()
                },
                dataType: "json",
                success: function (response) {
                    if(response == false){
                        $("#login-error").text("Incorrect username or password");
                    } 
                    window.location.replace("shop.php");  
                }
            });
        
    })

    
    
    $( "#search" ).keyup(function() {
        v=$(this).val()
        //console.log(v);
        podaciZaSlanje={
        search:v
        }
        ajax2("backend/search.php","POST",podaciZaSlanje,
        function(data){
        stampajProdukte(data[0],data[1]);
        })
        })
        
    
});