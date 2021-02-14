    var usernameR= /^[a-zA-Z0-9]{10,}$/;
    var passwordR= /^[A-Z](?=[a-z]*)(?=.*[a-z])(?=.*[0-9])(?=.{10,})+$/;
    var namesurnameR=/^[a-zA-Z0-9]{20,}$/;
    
function validate(number){
    
        var inputList=document.getElementsByClassName("login");

        if(number==0){
            if(inputList[0].value==="" || inputList[1].value===""){
                alert("Ju lutem mbusheni te dhenat e juaja");
            }
            else if(usernameR.value.test(inputList[0].value) && passwordR.test(inputList[1].value)){
                alert('Te dhenat e juaja jane ne rregull');
            }
            else if(!usernameR.test(inputList[0].value)){
                alert('Username juaj nuk eshte ne rregull');
            }
            else if(!passwordR.test(inputList[1].value)){
                alert('Passwordi juaj nuk eshte ne rregull');
            }
        }


        else if (number==1) {
            if (inputList[3].value === "" ||inputList[4].value=== "" ||inputList[5].value=== "") {
                alert("Ju lutem mbusheni te dhenat e juaja")
            } else if (inputList[3].value.test(namesurnameR) && inputList[4].value.test(namesurnameR) && inputList[5].value.test(passwordR)){
                alert("Te dhenat e juaja jane ne rregull");
            } else if(!namesurnameR.test(inputList[3].value)){
                alert("Name&Surname nuk jane ne rregull");
            }
              else if(!namesurnameR.test(inputList[4].value)){
                alert("Email nuk eshte ne rregull");
            } 
              else if(!passwordR.test(inputList[5].value)){
                alert("Passwordi nuk eshte ne rregull");
            } 
        }
    }
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
       