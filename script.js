document.addEventListener('DOMContentLoaded', () => {
    // Input floating labels and show/hide password logic
    const inputWrappers = document.querySelectorAll('.input-wrapper');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const loginBtn = document.getElementById('login-btn');
    const showPasswordBtn = document.getElementById('show-password-btn');

    inputWrappers.forEach(wrapper => {
        const input = wrapper.querySelector('input');

        input.addEventListener('input', () => {
            if (input.value.length > 0) {
                wrapper.classList.add('has-content');
            } else {
                wrapper.classList.remove('has-content');
            }

            // For password field to show "Show/Hide" button
            if (input.type === 'password' || input.id === 'password') {
                if (input.value.length > 0) {
                    wrapper.classList.add('has-password');
                } else {
                    wrapper.classList.remove('has-password');
                }
            }

            // Check if login button should be enabled (username present, password >= 6 length)
            if (usernameInput.value.length > 0 && passwordInput.value.length >= 6) {
                loginBtn.classList.add('active');
                loginBtn.disabled = false;
            } else {
                loginBtn.classList.remove('active');
                loginBtn.disabled = true;
            }
        });
    });

    // Toggle password visibility
    if (showPasswordBtn) {
        showPasswordBtn.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordBtn.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                showPasswordBtn.textContent = 'Show';
            }
        });
    }

    // Screenshot Carousel Logic
    const screenshots = document.querySelectorAll('.screenshot');
    let currentScreenshot = 0;

    if (screenshots.length > 0) {
        setInterval(() => {
            screenshots[currentScreenshot].classList.remove('active');
            currentScreenshot = (currentScreenshot + 1) % screenshots.length;
            screenshots[currentScreenshot].classList.add('active');
        }, 3000); // Change image every 3 seconds
    }
});
