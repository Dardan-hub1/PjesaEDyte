    function validate(number){
    
        var inputList=document.getElementsByClassName("login");
        var usernameR= /^(?=.{5,12}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
        var passwordR= /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        var namesurnameR=/^(?=.{5,12}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;

        if(number==0){
            if(inputList[1].value==="" || inputList[2].value===""){
                alert("Ju lutem mbusheni te dhenat e juaja");
                return false;
            }
            else if(!usernameR.test(inputList[1].value) && !passwordR.test(inputList[2].value)){
                alert('Te dhenat e juaja nuk jane ne rregull');
                return false;
            }
            else if(!usernameR.test(inputList[1].value)){
                alert('Username juaj nuk eshte ne rregull');
                return false;
            }
            else if(!passwordR.test(inputList[2].value)){
                alert('Passwordi juaj nuk eshte ne rregull');
                return false;
            }
            else{
                alert('Te dhenat juaja jane ne rregull')
            }
        }


        else if (number==1) {
            if (inputList[4].value === "" || inputList[5].value=== "" || inputList[6].value=== "") {
                alert("Ju lutem mbusheni te dhenat e juaja");
                return false;
            } else if (!namesurnameR.test(inputList[4].value) && !namesurnameR.test(inputList[5].value) && !passwordR.test(inputList[6].value)){
                alert("Te dhenat e juaja nuk jane ne rregull");
                return false;
            } else if(!namesurnameR.test(inputList[4].value)){
                alert("Name-i juaj nuk eshte ne rregull");
                return false;
            }
              else if(!namesurnameR.test(inputList[5].value)){
                alert("Email-i juaj nuk eshte ne rregull");
                return false;
            } 
              else if(!passwordR.test(inputList[6].value)){
                alert("Password-i juaj nuk eshte ne rregull");
                return false;
            } 
            else{
                alert("Te dhenat juaja jane ne rregull");
                return true;
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
      /*  function validateform(){  
            var name=document.myform.username.value;  
            var password=document.myform.password.value;  
              
            if (name==null || name==""){  
              alert("Name can't be blank");  
              return false;  
            }else if(password.length<6){  
              alert("Password must be at least 6 characters long.");  
              return false;  
              }  
            }  */