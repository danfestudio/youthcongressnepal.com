// File: /database/registration.go
package database

import (
	"log"

	"github.com/gofiber/fiber/v2"
)

type RegistrationForm struct {
    FirstName          string `form:"first_name"`
    LastName           string `form:"last_name"`
    MiddleName         string `form:"middle_name"`
    EmailID            string `form:"email_id"`
    MobileNumber       string `form:"mobile_number"`
    Gender             string `form:"gender"`
    DOB                string `form:"dob"`
    BloodGroup         string `form:"blood_group"`
    PermanentDistrict  string `form:"permanent_district"`
    PermanentPalika    string `form:"permanent_palika"`
    PermanentWada      int    `form:"permanent_wada"`
    PermanentTole      string `form:"permanent_tole"`
    TemporaryDistrict  string `form:"temporary_district"`
    TemporaryPalika    string `form:"temporary_palika"`
    TemporaryWada      int    `form:"temporary_wada"`
    TemporaryTole      string `form:"temporary_tole"`
}

// HandleRegistration processes the registration form and stores the data
func HandleRegistration(c *fiber.Ctx) error {
	// Parse the form data
	form, err := parseRegistrationForm(c)
	if err != nil {
		log.Printf("Failed to parse form data: %v", err)
		return c.Status(fiber.StatusBadRequest).SendString("Failed to parse form data")
	}

	// Insert data into the database
	err = InsertMember(form)
	if err != nil {
		log.Printf("Failed to insert member: %v", err)
		return c.Status(fiber.StatusInternalServerError).SendString("Failed to save registration")
	}

	// Redirect to the congratulations page
	return c.Redirect("/congratulations")
}

// parseRegistrationForm parses form data from the request
func parseRegistrationForm(c *fiber.Ctx) (*RegistrationForm, error) {
	form := &RegistrationForm{}
	err := c.BodyParser(form)
	return form, err
}

func InsertMember(form *RegistrationForm) error {
    query := `
    INSERT INTO members (
        first_name, last_name, middle_name, email_id, mobile_number,
        gender, dob, blood_group,
        permanent_district, permanent_palika, permanent_wada, permanent_tole,
        temporary_district, temporary_palika, temporary_wada, temporary_tole
    )
    VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16);
    `
    _, err := DB.Exec(
        query,
        form.FirstName, form.LastName, form.MiddleName, form.EmailID, form.MobileNumber,
        form.Gender, form.DOB, form.BloodGroup,
        form.PermanentDistrict, form.PermanentPalika, form.PermanentWada, form.PermanentTole,
        form.TemporaryDistrict, form.TemporaryPalika, form.TemporaryWada, form.TemporaryTole,
    )
    return err
}


