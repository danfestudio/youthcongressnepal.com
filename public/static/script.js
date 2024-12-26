document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = {
        firstname: document.getElementById('firstname').value,
        lastname: document.getElementById('lastname').value,
        email: document.getElementById('email').value,
        mobile: document.getElementById('mobile').value,
        location: document.getElementById('location').value
    };

    fetch('/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        alert('Registration successful!');
    })
    .catch((error) => {
        console.error('Error:', error);
        alert('Registration failed!');
    });
});