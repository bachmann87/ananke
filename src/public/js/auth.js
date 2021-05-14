/**
 * Diese Datei zeigt ein Refactoring Approach von mir. Die 
 * Funktion login war die alte, bestehendene Funktion. Die
 * asynchrone Funktion "authenticateUser" zeigt den neuen 
 * Weg nach dem Refactoring basierend auf Fetch API.
 * 
 * 1.) Umstellung auf Asynchrones Verhalten
 * 2.) Verwendung eines ServiceProvider, damit keine einzelne XMLHttpRequests vorhanden sind
 * 3.) Basierend auf Promises 
 * 4.) Umstellung auf CamelCase
 * 5.) PortalService basierend auf Fetch API
 */
function login(form_obj) {

    $("div#login").fadeOut();

    var url_path = document.URL;
    var login_successful = true;

    $.ajax({
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        method: "POST",
        data: form_parameter($(form_obj).attr("name")),
        success: function(response) {
            if(response.trim() == "first_login") {
                window.location = "user_profile?first_login=1"
            } else {
                window.location = "login";
            }
        }
    })

    if(login_successful) {
        return true;
    } else {
        return false;
    }
}

async function authenticateUser(event, form) {

    event.preventDefault();

    // Await Response from Endpoint
    let response = await PortalService.post("auth/login", {
        body: new FormData(form)
    });

    if(response.ok) {
        window.location = response.redirect;
    }

}