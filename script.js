function showPassword() {
    const emailInput = document.getElementById('email-input').value;
    if (emailInput) {
        document.getElementById('email-section').style.display = 'none';
        document.getElementById('password-section').style.display = 'block';
        document.getElementById('display-email').innerText = emailInput;
    } else {
        alert("দয়া করে ইমেইল বা ফোন নম্বর দিন");
    }
}

function togglePassword() {
    const passField = document.getElementById('password-input');
    passField.type = passField.type === "password" ? "text" : "password";
}