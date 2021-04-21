class Ino {

    constructor(router) {
        this.button = document.querySelector('.button');
        this.handleButton.bind(this);
        this.request = new Request();
        this.base_router = router;
    }

    init() {
        this.handleButton();
    }

    handleButton() {
        this.button.addEventListener("click", e => {this.submit()});
    }

    submit() {
        this.button.classList.toggle('transform');
        if (this.button.classList.contains('transform')) {
            this.button.textContent = "Off";
            this.request.send("h", `${this.base_router}/state`);
        } else {
            this.request.send("l", `${this.base_router}/state`);
            this.button.textContent = "On";
        }
    }

}
