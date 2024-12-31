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

	// Additional routes can be added here...
}

