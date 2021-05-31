async function createGame() {

    let form = document.forms['createGame'];
    let response = await fetch("init", {
        method: "POST",
        body: new FormData(form)
    });
    return response;

}

window.addEventListener('load', function() {

    let btn = document.querySelector('button#submit');
    
    btn.addEventListener('click', async function(e) {

        // Prevent Default Form Submission
        e.preventDefault();

        let response = await createGame();
        let data = await response.json();

        console.log(data);

    });

})
