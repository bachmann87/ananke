export class Snackbar {

    constructor(message) {
        this.message = message;
    }

    show = () => {
        console.log(this.message);
    }
}