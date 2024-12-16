// Path: /scripts/include-html.js

document.addEventListener("DOMContentLoaded", function () {
    // Function to include HTML content
    function includeHTML() {
        // Select all elements with the `data-include` attribute
        const elements = document.querySelectorAll("[data-include]");
        
        elements.forEach(async (element) => {
            const filePath = element.getAttribute("data-include");
            if (filePath) {
                try {
                    // Fetch the HTML content from the file
                    const response = await fetch(filePath);
                    if (response.ok) {
                        const content = await response.text();
                        element.innerHTML = content;
                    } else {
                        console.error(`Failed to load ${filePath}: ${response.status}`);
                    }
                } catch (error) {
                    console.error(`Error loading ${filePath}: ${error}`);
                }
            }
        });
    }
    
    includeHTML();
});
