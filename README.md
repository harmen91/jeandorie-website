# Static PHP Site — Self-Hosted on a Private VPS with Nginx Proxy Manager

A minimal Docker setup for serving a static PHP website on your own VPS, reverse-proxied through Nginx Proxy Manager with automatic SSL via Let's Encrypt.

---

## Overview

Mounts a local `site/` folder directly into the official `php:apache` container and serves it with Apache. No custom image, no build step, no scripts. To deploy or update the site, clone or pull this repository on your VPS and restart the container.

---

## Prerequisites

- A Linux VPS with Docker and Docker Compose installed
- A domain or subdomain pointed at your VPS IP
- Nginx Proxy Manager running on your VPS

> Don't have Nginx Proxy Manager set up yet? Follow this guide first:
> https://github.com/harmen91/nightscout-docker-simple

---

## Repository Structure

```
your-repo/
├── site/               # Your static PHP website
│   ├── index.php
│   └── ...
├── docker-compose.yml
└── README.md
```

---

## Getting Started

**1. Clone this repository on your VPS**

```bash
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```

**2. Set your port in `docker-compose.yml`**

```yaml
services:
  php-site:
    image: php:apache
    container_name: php-site
    restart: unless-stopped
    volumes:
      - ./site:/var/www/html
    ports:
      - "YOUR_PORT:80"
```

Replace `YOUR_PORT` with any free port on your VPS (e.g. `3002`).

**3. Start the container**

```bash
docker compose up -d
```

---

## Updating the Site

Pull the latest changes and restart:

```bash
git pull
docker compose restart php-site
```

---

## Nginx Proxy Manager Setup

Open the NPM web UI at `http://your-vps-ip:81`, go to **Proxy Hosts → Add Proxy Host**.

### Details tab

| Setting | Value |
|---|---|
| Domain Names | `site.yourdomain.com` |
| Scheme | `http` |
| Forward Hostname / IP | Your VPS IP address |
| Forward Port | The port set in `docker-compose.yml` |
| Cache Assets | off |
| Block Common Exploits | on |

### SSL tab

| Setting | Value |
|---|---|
| SSL Certificate | Request a new SSL Certificate |
| Force SSL | on |
| HTTP/2 Support | on |
| Let's Encrypt Email | your email address |
| Agree to Terms | on |

Click **Save**. Your site will be live at `https://site.yourdomain.com`.

---

## How It Works

```
Browser (HTTPS)
      |
      v
Nginx Proxy Manager :443   -- SSL termination
      |
      v
php-site container :80     -- mapped to YOUR_PORT on the host
      |
      v
./site/ mounted at /var/www/html
```

---

## License

This setup guide is for educational and personal use.
