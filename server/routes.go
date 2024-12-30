// File: /server/routes.go
package server

import (
	"log"
	"os"

	"github.com/gofiber/fiber/v2"
)

// RegisterRoutes defines all the routes in one place
func RegisterRoutes(app *fiber.App) {
	// Define routes mapping to their respective HTML files
	routes := map[string]string{
		"/":        			"./public/index.html",
		"/about":   			"./public/about.html",
		"/contact": 			"./public/contact.html",
		"/central-committee": 	"./public/central-committee.html",
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
