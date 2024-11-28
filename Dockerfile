FROM mcr.microsoft.com/devcontainers/go:1-1.23-bookworm

WORKDIR /app

COPY go.mod ./
RUN go mod tidy || true  

COPY . .

RUN go build -o main .

EXPOSE 8081

CMD ["./main"]