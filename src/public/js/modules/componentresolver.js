export class ComponentResolver {

    constructor(message) {
        this.message = message;
    }

    show = (message) => {
        if(message != undefined) {
            this.message = message;
        } 
        console.log(this.message);
    }
}