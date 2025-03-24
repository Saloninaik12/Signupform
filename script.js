document.getElementById('signupForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        // Send the form data to submit.php
        const response = await fetch('submit.php', {
            method: 'POST',
            body: formData,
        });

        const result = await response.json();

        if (result.success) {
            // Redirect to confirmation.php with user details
            const urlParams = new URLSearchParams({
                firstName: result.firstName,
                lastName: result.lastName,
                email: result.email,
                phone: result.phone,
            });
            window.location.href = `confirmation.php?${urlParams.toString()}`;
        } else {
            alert('Error: ' + result.message);
        }
    } catch (err) {
        console.error(err);
        alert('Error submitting the form.');
    }
});
