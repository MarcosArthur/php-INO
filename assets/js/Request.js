class Request {

    constructor() {
        this.form = new FormData();
    }

    send(state, route) {
        this.form.append("state", state);

        fetch(route, {
            method: "POST",
            body: this.form
        })
            .then(response => response.json())
            .then(response => {
                if (response.sucess) {
                    return response.sucess;
                } else if (response.error) {
                    return response.error;
                }


            });
    }
}