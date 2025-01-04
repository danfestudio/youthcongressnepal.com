# Stage 1: Build
FROM golang:1.20-alpine AS builder
WORKDIR /app
COPY go.mod go.sum ./
RUN go mod download
COPY . .
RUN go build -o main .

# Stage 2: Run
FROM alpine:latest
WORKDIR /app
COPY --from=builder /app/main .
COPY --from=builder /app/public ./public
RUN apk add --no-cache ca-certificates

RUN curl --create-dirs -o /app/root.crt 'https://cockroachlabs.cloud/clusters/1b394f99-bc6c-4179-bd90-2af47fd66103/cert'

EXPOSE 8001
CMD ["./main"]
