# Digital Preservation Workshop

[![CircleCI](https://circleci.com/gh/matt-bernhardt/dpworkshop.svg?style=shield)](https://circleci.com/gh/matt-bernhardt/dpworkshop)
[![Dashboard dpworkshop](https://img.shields.io/badge/dashboard-dpworkshop-yellow.svg)](https://dashboard.pantheon.io/sites/154fb06c-ec2e-4aca-bdaa-64d2d054b4f8#dev/code)
[![Dev Site dpworkshop](https://img.shields.io/badge/site-dpworkshop-blue.svg)](http://dev-dpworkshop.pantheonsite.io/)

## About the site

This code repository supports a rebuilding project of the [Digital Preservation Workshop website](https://dpworkshop.org). Specifically, this project attempts to build a fresh copy of the site using Drupal 8.

For now, this is a work in progress.

## About the tooling

This repository can be deployed on Pantheon via the Circle CI service, following the instructions in Pantheon's [Build Tools](https://pantheon.io/docs/guides/build-tools/) tutorial. It leverages the Terminus (and Terminus Secrets Plugin) and Composer CLI tools, as well as unit tests from Behat and code linting on Circle CI.

The badges at the top of this page will take you to the relevant resources and the running website.

### Terminus Secrets

This site includes the [SMTP](https://www.drupal.org/project/smtp) module, whose integration requires a username and password for sending email. Some of these settings should be managed using the [Terminus Secrets Plugin](https://github.com/pantheon-systems/terminus-secrets-plugin). The list of values that need to be defined are:

- `smtp_from`
- `smtp_fromname`
- `smtp_host`
- `smtp_password`
- `smtp_port`
- `smtp_protocol`
- `smtp_username`

Failure to define any of these values will result in the site not being able to send emails.

## Questions

If you have any questions, please contact Matt directly.
