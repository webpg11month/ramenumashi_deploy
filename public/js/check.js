function confirmPassword() {
　const password = document.getElementById("password").value;
　const confirmPassword = document.getElementById("confirm_password").value;
　const errorMsg = document.getElementById("error_msg");
  console.log(errorMsg);
  console.log(password);
  console.log(confirmPassword);
　if(password === confirmPassword){
　　errorMsg.innerText = "";
　　errorMsg.classList.remove('error_msg');
　　return true;
　}else{
　　errorMsg.innerText = "パスワードが一致しません";
　　errorMsg.classList.add('error_msg');
　　return false;
　}
}
