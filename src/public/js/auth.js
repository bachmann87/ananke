async function authenticateUser(event, form) {

    event.preventDefault();

    // Await Response from Endpoint
    let response = await PortalService.post("auth/login", {
        body: new FormData(form)
    });

    if(response.ok) {
        // Handle Client Redirect based on Response Route
    }

}