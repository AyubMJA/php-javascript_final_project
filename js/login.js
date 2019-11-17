window.addEventListener("load", function () {

    let button = document.getElementById("button");
    button.addEventListener("click", function(event) {
        event.preventDefault();

        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        let url = "server/Signup.php";
        let params = "firstName=" + firstName + "&lastName=" + lastName + "&email=" + email + "&password" + password;

        console.log(params);

        fetch(url, {
            method:"POST",
            credentials:"include",
            headers:{"Content-Type":"application/x-www-form-urlencoded"},
            body:params
        })
        .then(response => response.text())
        .then(success)
    });

    function success(text){
        console.log('Hello')
    }
});