// Faire apparaître un mdp en clair

let revealButton = document.getElementById("revealPassword");
revealButton.addEventListener("click", function(e) {
    let inputPassword = document.getElementById("password");
    e.preventDefault();
    let typeInput = inputPassword.getAttribute("type");
    if(typeInput == "text") {
        inputPassword.setAttribute("type", "password");
    } else {
        inputPassword.setAttribute("type", "text");
    }
})


// AJAX Vérification présence username en BDD

let usernameInput = document.getElementById("username");
usernameInput.addEventListener("blur", async function() {
    let dataSearch = {
        username: usernameInput.value
    };
    if(dataSearch.username != "") {
        let response = await fetch("/Controllers/sign-in-checker-controller.php?username=" + dataSearch.username, {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        });
        let result = await response.json();
        let validationUsername = document.getElementById("validationUsername");
        let submitButton = document.getElementById("submitButton");
        if(result != "Valide") {
            validationUsername.innerText = "Le nom d'utilisateur saisi est invalide, veuillez en changer.";
            submitButton.setAttribute("disabled", "");
        } else {
            validationUsername.innerText = "Le nom d'utilisateur saisi est valide.";
            submitButton.removeAttribute("disabled");
        }
    }
})