//VALIDATE Log in form -- 

function validateForm() {
    var username = document.forms["loginForm"]["userN"].value;
    var password = document.form["loginForm"]["lPassW"].value;

    if (username == "") {
        alert("Name must be filled out");
        return false;
    }

    if (password == "") {
        alert("Please enter a password");
        return false;
    }

    return( true );
}


//form-control-feedback.innerHTML="Please enter a Username";