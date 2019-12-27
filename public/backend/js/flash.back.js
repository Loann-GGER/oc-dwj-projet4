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