class Application {
    constructor() {
        new Flash();
        new ModalAvatar();
    }
}

class Flash {
    constructor() {
        this.flash = document.getElementById("varFlash").innerHTML;
        this.display();
        this.closeAutomatic();
        this.closeManual();
    }

    display() {
        if (this.flash.length > 0) {
            document.getElementById("flash").style.display = "block";
        }
    }
    
    closeAutomatic() {
        setTimeout(this.closeNotification, 5000);
    }
    
    closeManual() {
        var that = this;
        document.getElementById("closeFlash").addEventListener("click",() => {
            that.closeNotification();
        });
    }

    closeNotification() {
        document.getElementById("flash").style.display = "none";
    }
}

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

var app = new Application();