document.addEventListener("DOMContentLoaded", () => {
        fetch("/api/members")
            .then(response => {
                if (!response.ok) {
                    throw new Error("Failed to fetch members data");
                }
                return response.json();
            })
            .then(data => {
                const tbody = document.querySelector("#datatable1 tbody");
                tbody.innerHTML = ""; // Clear any existing rows

                data.forEach(member => {
                    const fullName = `${member.first_name} ${member.middle_name || ''} ${member.last_name}`.trim();
                    const location = `${member.permanent_district}, ${member.permanent_palika}, ${member.permanent_wada}, ${member.permanent_tole}`;
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${fullName}</td>
                        <td>${member.email_id}</td>
                        <td>${member.mobile_number}</td>
                        <td>${location}</td>
                    `;
                    tbody.appendChild(row);
                });
            })
            .catch(error => {
                console.error("Error fetching members data:", error);
            });
    });

