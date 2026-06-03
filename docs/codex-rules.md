# Codex Rules for Wortex SHOP WordPress

## Project context
This repository contains the custom code layer for the Wortex SHOP WordPress/WooCommerce website.

The live website runs on WordPress with:
- WoodMart parent theme
- WoodMart Child theme
- Elementor
- WooCommerce

## Allowed editing areas
Codex may edit:
- `woodmart-child/`
- documentation inside `docs/`

## Forbidden editing areas
Codex must not edit:
- WordPress core files
- WoodMart parent theme
- third-party plugins
- `wp-config.php`
- database dumps
- API keys, credentials, or secrets

## Design workflow
Prefer making design changes through:
- child theme CSS
- child theme PHP hooks
- custom CSS classes used in Elementor
- WooCommerce template overrides only when necessary

Do not assume Elementor database content can be safely edited from code.

## Safety rules
Before changing code, inspect the current structure.
Make the smallest safe change first.
Explain every modified file.
Avoid breaking checkout, cart, product pages, and admin functionality.

## Deployment target
Changes should first be tested on:
`https://staging.wortex.one`

Production deployment happens only after staging is reviewed.
