buttons1 = document.getElementsByClassName("button1");
buttons2 = document.getElementsByClassName("button2");
previews = document.getElementsByClassName("img-preview");

for (let i = 0; i < buttons1.length; i++) {
    buttons1[i].addEventListener("click", () => {
        previews[i].classList.add("active");
    });

    buttons2[i].addEventListener("click", () => {
        previews[i].classList.remove("active");
    });
}