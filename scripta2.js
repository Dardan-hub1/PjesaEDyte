var divElements=document.getElementsByClassName('slider-content');
var sliderIndex=0;
document.getElementsByClassName('slider')[0].addEventListener('click',function(event) {
  divElements[sliderIndex].classList.remove('active');
  divElements[sliderIndex].classList.add('not-active');
  
  sliderIndex++;
  if(sliderIndex==divElements.length)sliderIndex=0;

divElements[sliderIndex].classList.add('active');
divElements[sliderIndex].classList.remove('not-active');

})