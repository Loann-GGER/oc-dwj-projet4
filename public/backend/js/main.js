this.i = false;
document.getElementById("avatar").addEventListener("click",() => {
    if (this.i === true) {
        document.querySelector(".modalAvatar").classList.remove("modalAvatar-visible");
        this.i = false;
    } else {
        document.querySelector(".modalAvatar").classList.add("modalAvatar-visible");
        this.i = true;
    }
});