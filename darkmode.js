
        // Function to toggle between dark and light themes
        function toggleTheme() {
            const container = document.getElementById('theme-container');
            const body = document.body;

            container.classList.toggle('dark-mode');
            body.classList.toggle('dark-mode');
        }

        // Add an event listener to the toggle button
        const toggleButton = document.getElementById('toggle-theme');
        toggleButton.addEventListener('click', toggleTheme);
        
