// File: /database/members.go
package database

import (
	"log"
	"time"
)

// Member represents a row in the members table
type Member struct {
	ID                 int       `json:"id"`
	FirstName          string    `json:"first_name"`
	LastName           string    `json:"last_name"`
	MiddleName         string    `json:"middle_name"`
	EmailID            string    `json:"email_id"`
	MobileNumber       string    `json:"mobile_number"`
	Gender             string    `json:"gender"`
	DOB                string    `json:"dob"`
	BloodGroup         string    `json:"blood_group"`
	PermanentDistrict  string    `json:"permanent_district"`
	PermanentPalika    string    `json:"permanent_palika"`
	PermanentWada      int       `json:"permanent_wada"`
	PermanentTole      string    `json:"permanent_tole"`
	TemporaryDistrict  string    `json:"temporary_district"`
	TemporaryPalika    string    `json:"temporary_palika"`
	TemporaryWada      int       `json:"temporary_wada"`
	TemporaryTole      string    `json:"temporary_tole"`
	CreatedAt          time.Time `json:"created_at"`
}

func FetchMembers() ([]Member, error) {
	// Adjust the query to fetch all columns
	query := `SELECT id, first_name, last_name, middle_name, email_id, mobile_number, gender, dob, blood_group,
	                 permanent_district, permanent_palika, permanent_wada, permanent_tole,
	                 temporary_district, temporary_palika, temporary_wada, temporary_tole, created_at
	          FROM members`

	// Execute the query
	rows, err := DB.Query(query)
	if err != nil {
		log.Printf("Error executing query: %v", err)
		return nil, err
	}
	defer rows.Close()

	// Parse the rows into a slice of Member structs
	var members []Member
	for rows.Next() {
		var member Member
		err := rows.Scan(&member.ID, &member.FirstName, &member.LastName, &member.MiddleName,
			&member.EmailID, &member.MobileNumber, &member.Gender, &member.DOB, &member.BloodGroup,
			&member.PermanentDistrict, &member.PermanentPalika, &member.PermanentWada, &member.PermanentTole,
			&member.TemporaryDistrict, &member.TemporaryPalika, &member.TemporaryWada, &member.TemporaryTole,
			&member.CreatedAt)
		if err != nil {
			log.Printf("Error scanning row: %v", err)
			continue
		}
		members = append(members, member)
	}

	if err := rows.Err(); err != nil {
		log.Printf("Error iterating over rows: %v", err)
		return nil, err
	}

	return members, nil
}
