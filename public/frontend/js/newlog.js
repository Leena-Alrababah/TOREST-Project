let sign_in_btn = document.getElementById("sign-in-btn");
let sign_up_btn = document.getElementById("sign-up-btn");
let container = document.getElementById("container");

//for responsive
let sign_in_btn2 = document.getElementById("sign-in-btn2");
let sign_up_btn2 = document.getElementById("sign-up-btn2");

// sign_up_btn.addEventListener ("click" , function(){
//     container.classList.add ("sign-up-mood");
// });

// sign_in_btn.addEventListener ("click" , function(){
//     container.classList.remove ("sign-up-mood");
// });

sign_up_btn.addEventListener("click", function () {
  container.setAttribute("id", "sign-up-mood");
});

sign_in_btn.addEventListener("click", function () {
  container.removeAttribute("id");
});

// for resposive
sign_up_btn2.addEventListener("click", function () {
  container.setAttribute("id", "sign-up-mood2");
});

sign_in_btn2.addEventListener("click", function () {
  container.removeAttribute("id");
});
