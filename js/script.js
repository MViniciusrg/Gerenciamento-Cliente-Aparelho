const clientSubmitBtn = document.querySelector("#submitBtn");

clientSubmitBtn.addEventListener('click', function(){
    document.querySelector("#inputsClient").style.display = "none";
    document.querySelector("#inputsDevice").style.display = "flex";
})

document.querySelector("#btnSignUp").addEventListener('click', function () {
    document.querySelector("#inputsClient").style.display = "flex";

    document.querySelector("#inputsDevice").style.display = "none";
})