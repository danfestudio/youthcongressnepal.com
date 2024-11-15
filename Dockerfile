# Use Go base image
FROM mcr.microsoft.com/devcontainers/go:1-1.23-bookworm

# Set the working directory inside the container
WORKDIR /app

# Copy go.mod and go.sum files if they exist (skip if not using Go modules)
COPY go.mod go.sum ./
RUN go mod tidy || true  

# Run this if you have Go modules, else it will be skipped

# Copy the entire project
COPY . .

# Build the Go application
RUN go build -o main .

# Expose the application port
EXPOSE 8081

# Command to run the application
CMD ["./main"]
