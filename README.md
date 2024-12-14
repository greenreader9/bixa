<div align="center">
    <img src="assets/default/images/logo-sm.svg">
</div>

> **Note:**  
> **This development of this build is live again.**
> A bugfix release is coming due the currently known errors.
> Pull requests are welcome and will still be accepted. If you want to see a feature, feel free to contribute it.
> Thanks to @greenreader9 for answering people's questions and solving their issues while i was gone.

## 👀 What is Bixa?
Bixa is a hosting account and support management system especially designed to work with MOFH (MyOwnFreeHost). Bixa currently has a limited number of features which are listed below:

[![AppVeyor](https://img.shields.io/badge/Licence-GPL_2.0-orange)](LICENSE)
[![AppVeyor](https://img.shields.io/badge/Version-v1.2.8-informational)](https://github.com/bixacloud/bixa/releases/latest)
![AppVeyor](https://img.shields.io/badge/Build-Passed-brightgreen)
![AppVeyor](https://img.shields.io/badge/Interface-Tabler-lightgreen)
![AppVeyor](https://img.shields.io/badge/Development-Live-brightgreen)
![AppVeyor](https://img.shields.io/badge/Dependencies-PHP,_MySQL,_cUrl-red)

### 🎮 Features
- User Management
- Theme Management
- Support Management
- Administrative Access
- Integration With:
	- MOFH (MyOwnFreeHost)
	- Google reCAPTCHA 
	- hCaptcha
	- Cloudflare Turnstile
	- GoGetSSL
	- ACMEv2 (Let's Encrypt, ZeroSSL and Google Trust)
	- SitePro
	- SMTP
- Update Manager
- Multi-lingual

## 🤸 Getting Started

### 🚅 Requirements
Your server needs to meet the following minimum requirements to run Bixa:
- PHP v8.1 or above.
- MySQL v5.7 or above.
- A valid, trusted SSL certificate.

### 💾 Installation 
The installation of Bixa is much easier than you think!
- Download the Bixa installation files [here](https://github.com/bixacloud/bixa/releases/latest). Alternatively, if you want the latest development version you can get it [here](https://github.com/bixacloud/bixa/archive/refs/heads/dev.zip).
- Extract the file and upload the contents to your web hosting account. 
- Create a new database for Bixa.
- Go to ```https://{your.domain}/{bixa-directory}/install.php``` and click on the 'Get Started' button.
- Set your website's ```Website URL```, ```Cookie Prefix```, enable ```CSRF Protection``` and hit the 'Next Step' button.
- Edit the database credentials and click on the 'Next Step' button (this will automatically import tables and records to the database).
- Register an admin account and log in to your admin panel. 
- Replace the logo and favicon located in ```assets/default/img/``` with your own.
- Setup SMTP (see below for some services you can use).
- Refer to [Setup Guide](Setup-Guide.md)


### 📧 SMTP
Here are some widely used SMTP services. They have free plans with some limitations, most importantly though, they are compatible with Bixa.

#### Testing Environment
- [Mailtrap](https://mailtrap.io/)
  - Email Testing Environment (500 emails/month)
  - Real SMTP Service (1,000 emails/month)
  - Perfect for both development and production
  - Includes email testing and debugging features

#### Production Environment
- [Mailgun](https://www.mailgun.com/). 
> **Note**  
> Mailgun seems to offer only a trial plan for a month, and without adding a credit card you are only authorized to send emails to 5 recipients. Therefore, you may want to choose another service.
- [Mailjet](https://mailjet.com/).
- [SendGrid](https://sendgrid.com/free/).


### 🤔 Help
You can [open an issue here](https://github.com/bixacloud/bixa/issues/new) if you have discovered a bug or have an issue. In any way, please ensure your topic has not been previously discussed, and if it has contribute to that discussion instead of making a new one when you can.

### 👍 Like Bixa?
If you like project Bixa please donate [here](https://bixa.app/DONATE.md).

## ©️ Copyright
Code released under [the GPL-2.0 license](LICENSE).