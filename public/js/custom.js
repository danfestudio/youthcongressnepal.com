document.addEventListener("DOMContentLoaded", () => {
    const permanentDistrictSelect = document.getElementById("permanent_district");

    // Fetch district data from location_data.json
    fetch("./database/location_data.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("Failed to fetch districts");
            }
            return response.json();
        })
        .then(data => {
            // Clear the placeholder option
            permanentDistrictSelect.innerHTML = '<option value="" disabled selected>Select District</option>';

            // Populate the dropdown with districts
            data.districts.forEach(district => {
                const option = document.createElement("option");
                option.value = district;
                option.textContent = district;
                permanentDistrictSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error("Error loading districts:", error);
            permanentDistrictSelect.innerHTML = '<option value="" disabled>Error loading districts</option>';
        });
});
