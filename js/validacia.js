function validateForm() {
    var email = document.getElementById('email').value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        alert('Prosím, zadajte platnú emailovú adresu.');
        return false;
    }
    return true;
}
