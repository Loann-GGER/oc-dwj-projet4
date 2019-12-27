class ModalAvatar {
    constructor() {
        this.openClose();
    }

    openClose() {
        this.open = false;
        document.getElementById("avatar").addEventListener("click",() => {
            if (this.open === true) {
                document.querySelector(".modalAvatar").classList.remove("modalAvatar-visible");
                this.open = false;
            } else {
                document.querySelector(".modalAvatar").classList.add("modalAvatar-visible");
                this.open = true;
            }
        });
    }
}