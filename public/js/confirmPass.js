function validate() {
 
    var a = document.getElementById("password").value;
    var b = document.getElementById("confirm_password").value;

    if (a!=b) {
        alert("Les mots de passe ne correspondent pas.");
        return false; }
    else {
        alert("Les mots de passe correspondent.");
        return false; }
}
