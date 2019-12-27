class Menu {
    constructor() {
        var i = false;
        this.i = i;
        this.openClose();
        this.clickLink();
    }   
        
    openClose() {

        document.getElementById("hamburger").addEventListener("click",() => {
            if (this.i === true) {
                document.querySelector(".navMobile").classList.remove("navMobile-visible");
                document.querySelector("#hamburger").src = "../../public/frontend/img/menu/menu.png";
                this.i = false;
            } else {
                document.querySelector(".navMobile").classList.add("navMobile-visible");
                document.querySelector("#hamburger").src = "../../public/frontend/img/menu/cancel.png";
                this.i = true;
            }
        });
    };

    clickLink() {
        document.querySelector(".test").addEventListener("click",() => {
            document.querySelector(".navMobile").classList.remove("navMobile-visible");
            document.querySelector("#hamburger").src = "../../public/frontend/img/menu/menu.png";
            this.i = false;
        });
    };
}