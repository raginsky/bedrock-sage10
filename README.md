# WpBase Theme Project

Welcome to the WpBase Theme project! This repository contains a custom WordPress theme built with Sage 10, Acorn, TailwindCSS, ACF Pro, and ACF Builder. The project is structured using Bedrock and is intended to be used with LocalWP for local development.

## Table of Contents
- [WP Theme Project](#wp-theme-project)
  - [Table of Contents](#table-of-contents)
  - [Overview](#overview)
  - [Project Structure](#project-structure)
  - [Requirements](#requirements)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Documentation and Resources](#documentation-and-resources)
  - [Important notes](#important-notes)

## Overview

This project is a WordPress theme development setup that leverages modern tools and practices to create a powerful and efficient development environment. Key features include:

- **Sage 10**: A WordPress starter theme with a modern development workflow.
- **Acorn**: A framework for WordPress development using Laravel components.
- **TailwindCSS**: A utility-first CSS framework for rapid UI development.
- **ACF Pro (paid) + ACF Builder**: Advanced Custom Fields Pro for flexible content management and ACF Builder for streamlined field group creation.
- **Bedrock**: A WordPress boilerplate with improved configuration and folder structure.

## Project Structure

The project is structured as follows:

```bash
├── bedrock/
│   ├── config/
│   ├── scripts/
│   ├── web/
│       ├── app/
│           ├── mu-plugins/
│           ├── plugins/
│           ├── themes/
│               ├── sage10/
```

## Requirements

To get started, you will need the following:

- [LocalWP](https://localwp.com/) for local development
- Composer for dependency management
- Node.js and npm for managing JavaScript dependencies
- Yarn for managing JavaScript dependencies

## Installation

1. **Clone the repository:**

    ```bash
    git@github.com:raginsky/bedrock-sage10.git
    cd bedrock-sage10
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**

    ```bash
    cd web/app/themes/sage10
    composer install
    yarn
    ```

4. **Build the assets:**

    ```bash
    yarn build
    ```

5. **Start the development server:**

    Use LocalWP to create a local development environment and point it to the Bedrock installation.

## Usage

- **Development:**

    Use the following command to watch for changes and automatically compile assets during development:

    ```bash
    yarn dev
    ```

- **Production:**

    Compile the assets for production with:

    ```bash
    yarn build
    ```

## Documentation and Resources

- [Sage 10 Documentation](https://roots.io/sage/docs/installation/)
- [Acorn Documentation](https://roots.io/acorn/docs/installation/)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [ACF Pro Documentation](https://www.advancedcustomfields.com/resources/)
- [ACF Builder Documentation](https://github.com/Log1x/acf-composer)
- [Bedrock Documentation](https://roots.io/bedrock/docs/installation/)
- [LocalWP Documentation](https://localwp.com/help-docs/getting-started/installing-local/)
- [Bedrock with Local](https://roots.io/bedrock/docs/bedrock-with-local/)

## Important notes

ACF Pro is a paid plugin and requires a license key for use in production. You can purchase a license from the [ACF website]
(https://www.advancedcustomfields.com/pro/).
It does not included to current repository but required for full functionality. 
