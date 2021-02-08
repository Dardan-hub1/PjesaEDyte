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
    function validate(number){
        var inputList=document.getElementsByClassName("login");
        if(number==0){
            if(inputList[0].value==="" || inputList[1].value===""){
                alert("Ju lutem mbusheni te dhenat e juaja")
            }
            else{
                alert('Te dhenat e juaja jane ne rregull')
            }
        }
        else if (number == 1) {
            let emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (inputList[3].value === "" || inputList[4].value === "" || inputList[5].value === "") {
                alert("Ju lutem mbusheni te dhenat e juaja")
            } else if (inputList[4].value && !emailRegex.test(inputList[1].value)) {
                alert("Emaili gabim!!");
            } else {
                alert("Te dhenat tuaja jane ne rregull");
            }
        }
    }