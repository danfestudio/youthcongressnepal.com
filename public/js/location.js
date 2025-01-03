document.addEventListener("DOMContentLoaded", () => {
    const locationDataUrl = "/js/location.json";

    // Permanent Location Fields
    const permanentDistrictDropdown = document.getElementById("permanent_district");
    const permanentPalikaDropdown = document.getElementById("permanent_palika");
    const permanentWardDropdown = document.getElementById("permanent_wada");
    const permanentToleInput = document.getElementById("permanent_tole");

    // Temporary Location Fields
    const temporaryDistrictDropdown = document.getElementById("temporary_district");
    const temporaryPalikaDropdown = document.getElementById("temporary_palika");
    const temporaryWardDropdown = document.getElementById("temporary_wada");
    const temporaryToleInput = document.getElementById("temporary_tole");

    // Fetch location data
    fetch(locationDataUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error("Failed to fetch location data");
            }
            return response.json();
        })
        .then(data => {
            // Populate both Permanent and Temporary Districts
            populateDistricts(data, permanentDistrictDropdown);
            populateDistricts(data, temporaryDistrictDropdown);

            // Set up cascading logic for Permanent Location
            setupCascadingLogic(
                data,
                permanentDistrictDropdown,
                permanentPalikaDropdown,
                permanentWardDropdown,
                permanentToleInput
            );

            // Set up cascading logic for Temporary Location
            setupCascadingLogic(
                data,
                temporaryDistrictDropdown,
                temporaryPalikaDropdown,
                temporaryWardDropdown,
                temporaryToleInput
            );
        })
        .catch(error => console.error("Error loading location data:", error));
});

// Populate districts dropdown
function populateDistricts(data, districtDropdown) {
    const districts = [...new Set(data.map(item => item.district))].sort();

    districts.forEach(district => {
        const option = document.createElement("option");
        option.value = district;
        option.textContent = district;
        districtDropdown.appendChild(option);
    });
}

// Set up cascading dropdown logic
function setupCascadingLogic(data, districtDropdown, palikaDropdown, wardDropdown, toleInput) {
    districtDropdown.addEventListener("change", () => {
        const selectedDistrict = districtDropdown.value;

        // Reset palika, ward, and tole fields
        palikaDropdown.innerHTML = '<option value="" disabled selected>Select your palika</option>';
        wardDropdown.innerHTML = '<option value="" disabled selected>Select your ward</option>';
        toleInput.value = '';
        toleInput.disabled = true;
        palikaDropdown.disabled = true;
        wardDropdown.disabled = true;

        // Filter and sort unique palikas by selected district
        const filteredPalikas = [
            ...new Map(
                data
                    .filter(item => item.district === selectedDistrict)
                    .map(item => [item.palika, item]) // Use Map to ensure unique palika names
            ).values()
        ].sort((a, b) => a.palika.localeCompare(b.palika));

        if (filteredPalikas.length > 0) {
            // Populate palika dropdown
            filteredPalikas.forEach(palikaData => {
                const option = document.createElement("option");
                option.value = palikaData.palika;
                option.textContent = `${palikaData.palika} ${palikaData.type}`;
                palikaDropdown.appendChild(option);
            });

            // Enable the palika dropdown
            palikaDropdown.disabled = false;
        } else {
            console.warn(`No palikas found for district: ${selectedDistrict}`);
        }
    });

    palikaDropdown.addEventListener("change", () => {
        const selectedDistrict = districtDropdown.value;
        const selectedPalika = palikaDropdown.value;

        // Reset ward and tole fields
        wardDropdown.innerHTML = '<option value="" disabled selected>Select your ward</option>';
        toleInput.value = '';
        toleInput.disabled = true;
        wardDropdown.disabled = true;

        // Filter wards by selected district and palika
        const filteredWards = data.filter(
            item => item.district === selectedDistrict && item.palika === selectedPalika
        );

        const hasValidWards = filteredWards.some(wardData => wardData.ward > 0);

        if (hasValidWards) {
            filteredWards
                .filter(wardData => wardData.ward > 0)
                .forEach(wardData => {
                    const option = document.createElement("option");
                    option.value = wardData.ward;
                    option.textContent = `Ward ${wardData.ward}`;
                    wardDropdown.appendChild(option);
                });

            wardDropdown.disabled = false;

            wardDropdown.addEventListener("change", () => {
                toleInput.disabled = !wardDropdown.value;
            });
        } else {
            // Enable tole input directly if no valid wards
            toleInput.disabled = false;
        }
    });
}

function validateForm() {
    const requiredFields = [
        'first_name',
        'last_name',
        'email_id',
        'mobile_number',
        'gender',
        'blood_group',
        'dob',
        'permanent_district',
        'permanent_palika',
        'permanent_wada'
    ];

    for (const field of requiredFields) {
        const element = document.getElementById(field);
        if (!element || !element.value.trim()) {
            alert(`Please fill in the ${field.replace('_', ' ')}`);
            return false;
        }
    }
    return true;
}