function changeForm(number){

    var divElements=document.getElementsByClassName('forms');
    if(number==0){
        divElements[0].classList.remove('hidden')
        divElements[0].classList.add('form-style')
        divElements[1].classList.add('hidden')
        divElements[1].classList.remove('form-style')
    }else if(number==1){
      divElements[1].classList.remove('hidden')
      divElements[1].classList.add('form-style')
      divElements[0].classList.add('hidden')
      divElements[0].classList.remove('form-style')
    }
    }
    const usernameR= /^[a-zA-Z0-9]{12,}$/;
    const passwordR= /^[A-Z](?=[a-z]*)(?=.*[a-z])(?=.*[0-9])(?=.{10,})+$/;
    const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const namesurnameR=/^[a-zA-Z0-9]{25,}$/;

    function validate(number){
        username = inputList[0].value;
        password = inputList[1].value;
        var inputList=document.getElementsByClassName("login");

        if(number==0){
            if(username.value==="" || password.value===""){
                alert("Ju lutem mbusheni te dhenat e juaja1")
            }
            else if(usernameR.test(username) && passwordR.test(password)){
                alert('Te dhenat e juaja nuk jane ne rregull')
            }
            else if(!usernameR.test(username)){
                alert('Username juaj nuk eshte ne rregull')
            }
            else if(!passwordR.test(password)){
                alert('Passwordi juaj nuk eshte ne rregull')
            }
        }
        namesurname=inputList[3].value;
        email=inputList[4].value;
        password2=inputList[5].value;

        if (number == 1) {
            if (namesurname === "" || email=== "" || password2=== "") {
                alert("Ju lutem mbusheni te dhenat e juaja1...")
            } else if (namesurname.test(namesurnameR) && email.test(emailRegex) && password2.test(passwordR)){
                alert("Te dhenat e juaja jane ne rregull");
            } else if(!namesurname.test(namesurnameR)){
                alert("Name&Surname nuk jane ne rregull");
            }
              else if(!email.test(emailRegex)){
                alert("Email nuk eshte ne rregull");
            } 
              else if(!password2.test(passwordR)){
                alert("Passwordi nuk eshte ne rregull");
            } 
        }
    }

