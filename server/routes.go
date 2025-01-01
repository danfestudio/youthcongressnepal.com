// File: /server/routes.go
package server

import (
	"log"
	"os"

	"github.com/danfestudio/youthcongress.org.np/database"
	"github.com/gofiber/fiber/v2"
)

// RegisterRoutes defines all the routes in one place
func urlRoutes(app *fiber.App) {
	// Define routes mapping to their respective HTML files
	routes := map[string]string{
		"/":        			"./public/index.html",
		"/about":   			"./public/about.html",
		"/faqs":   				"./public/faqs.html",
		"/contact": 			"./public/contact.html",
		"/central-committee": 	"./public/central-committee.html",
		"/registration": 		"./public/registration.html",
		
	}

	// Loop through the routes and register them
	for path, file := range routes {
		// Log each route being registered
		log.Printf("Registering route: %s -> %s", path, file)

		app.Get(path, func(filePath string) fiber.Handler {
			return func(c *fiber.Ctx) error {
				// Check if the file exists before serving it
				if _, err := os.Stat(filePath); os.IsNotExist(err) {
					log.Printf("File not found: %s", filePath)
					return c.Status(fiber.StatusNotFound).SendString("Page not found")
				}
				return c.SendFile(filePath)
			}
		}(file))
	}
}

// RegisterRoutes defines all the routes for the application
func RegisterRoutes(app *fiber.App) {
	// Handle form submission for registration
	app.Post("/register", database.HandleRegistration)

	// Serve the congratulations page
	app.Get("/congratulations", func(c *fiber.Ctx) error {
		return c.SendFile("./public/congratulations.html")
	})

	LoginRoutes(app)
}

// LoginRoutes defines all login-related routes
func LoginRoutes(app *fiber.App) {
	// Serve the login page
	app.Get("/login", func(c *fiber.Ctx) error {
		return c.SendFile("./public/login.html")
	})

	// Handle login form submission
	app.Post("/login", func(c *fiber.Ctx) error {
		// Parse form values
		email := c.FormValue("login-form-username")
		password := c.FormValue("login-form-password")

		// Validate login credentials
		err := database.ValidateLogin(email, password)
		if err != nil {
			return c.Status(fiber.StatusUnauthorized).SendString("Invalid email or password")
		}

		// Set session or cookie for authentication
		c.Cookie(&fiber.Cookie{
			Name:     "authenticated",
			Value:    "true",
			HTTPOnly: true,
			MaxAge:   3600, // 1-hour session
		})

		// Redirect to /members after successful login
		return c.Redirect("/members")
	})

	// Protect /members route
	app.Get("/members", func(c *fiber.Ctx) error {
		// Check if user is authenticated via cookie
		authCookie := c.Cookies("authenticated")
		if authCookie != "true" {
			return c.Status(fiber.StatusUnauthorized).SendString("Unauthorized access")
		}

		// Serve members.html
		return c.SendFile("./public/members.html")
	})

	// API endpoint to get members' data
	app.Get("/api/members", func(c *fiber.Ctx) error {
		members, err := database.FetchMembers()
		if err != nil {
			return c.Status(500).JSON(fiber.Map{
				"error": "Unable to fetch members data",
			})
		}
		return c.JSON(members)
	})
}
