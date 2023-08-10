const navbarItems = document.querySelectorAll(".nav-item");
const loginForm = document.getElementById("login-form");
const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById("search-input");
const loginLink = document.getElementById("login-link");
const logoClass=document.querySelector(".logo");





const scrollSpeed = 10; // Daha düşük bir değer, daha hızlı animasyon

searchInput.addEventListener("keyup", () => {
  const keyword = searchInput.value.trim().toLowerCase();
  const elements = document.querySelectorAll("body *");

  for (const i of elements) {
    const text = i.textContent.trim().toLowerCase();
    if (text.includes(keyword)) {
      customScroll(i);
      break;
    }
  }
});

function customScroll(element) {
  const rect = element.getBoundingClientRect();
  const scrollTop =  document.documentElement.scrollTop;
  const finalOffset = rect.top + scrollTop;
  let currentOffset = scrollTop;

  function animateScroll(timestamp) {
    const distance = finalOffset - currentOffset;
    const increment = distance / scrollSpeed;

    if (Math.abs(distance) < Math.abs(increment)) {
      window.scrollTo(0, finalOffset);
      return;
    }

    currentOffset += increment;
    window.scrollTo(0, currentOffset);

    window.requestAnimationFrame(animateScroll);
  }

  window.requestAnimationFrame(animateScroll);
}


const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const textarea = document.getElementById('textarea');

form.addEventListener('submit', (e) =>{
    e.preventDefault();
  
    checkInputs();
});
function checkInputs(){
  //get the values from the inputs
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  
  
  if(usernameValue === ''){
    setErrorFor(username, 'Name cannot be blank'); 
   }else{
     setSuccessFor(username);
   }
  if(emailValue === ''){
    setErrorFor(email, 'Email cannot be blank'); 
   }else if(!isEmail(emailValue)){
      setErrorFor(email, 'Email is not valid'); 
   }else{
     setSuccessFor(email);
   }
  if(passwordValue === ''){
    setErrorFor(password, 'Password cannot be blank'); 
   }else{
     setSuccessFor(password);
   }
   if(ptextarea === ''){
    setErrorFor(textarea, 'Textarea cannot be blank'); 
   }else{
     setSuccessFor(textarea);
   } 
   
  //show a success message
  
}
function setErrorFor(input, message){
  const formControl = input.parentElement; //.form-control
  const small = formControl.querySelector('small');
  
  //add error message inside small
  small.innerText = message;
  
  //add error class
  formControl.className= 'form-control error';
}
function setSuccessFor(input, message){
  const formControl = input.parentElement; //.form-control
  formControl.className= 'form-control success';
}

 function isEmail(email){
   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
 }

