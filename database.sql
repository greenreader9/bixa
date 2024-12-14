-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2024 at 09:35 AM
-- Server version: 11.7.1-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_account`
--

CREATE TABLE `is_account` (
  `account_id` int(11) NOT NULL,
  `account_label` varchar(250) NOT NULL,
  `account_username` varchar(20) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  `account_status` varchar(20) NOT NULL,
  `account_sql` varchar(6) NOT NULL DEFAULT 'sqlxxx',
  `account_key` varchar(8) NOT NULL,
  `account_for` varchar(16) NOT NULL,
  `account_time` varchar(20) NOT NULL,
  `account_domain` varchar(50) NOT NULL,
  `account_main` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_acme`
--

CREATE TABLE `is_acme` (
  `acme_id` varchar(13) NOT NULL DEFAULT 'xera_acme',
  `acme_letsencrypt` varchar(100) NOT NULL,
  `acme_zerossl` varchar(1000) NOT NULL,
  `acme_googletrust` varchar(1000) NOT NULL,
  `acme_status` varchar(8) NOT NULL,
  `acme_dns` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_admin`
--

CREATE TABLE `is_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_key` varchar(16) NOT NULL,
  `admin_rec` varchar(32) NOT NULL,
  `admin_status` varchar(8) NOT NULL,
  `admin_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_base`
--

CREATE TABLE `is_base` (
  `base_id` varchar(89) NOT NULL DEFAULT 'xera_base',
  `base_name` varchar(20) NOT NULL,
  `base_email` varchar(100) NOT NULL,
  `base_fourm` varchar(100) NOT NULL,
  `base_template` varchar(100) NOT NULL DEFAULT 'default',
  `base_status` varchar(8) NOT NULL,
  `base_rpp` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_base`
--

INSERT INTO `is_base` (`base_id`, `base_name`, `base_email`, `base_fourm`, `base_template`, `base_status`, `base_rpp`) VALUES
('xera_base', 'Web Host', 'abc@gmail.com', 'https://fourm.example.com', 'default', 'active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `is_builder`
--

CREATE TABLE `is_builder` (
  `builder_id` varchar(12) NOT NULL DEFAULT 'xera_builder',
  `builder_hostname` varchar(100) NOT NULL,
  `builder_username` varchar(100) NOT NULL,
  `builder_password` varchar(100) NOT NULL,
  `builder_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_builder`
--

INSERT INTO `is_builder` (`builder_id`, `builder_hostname`, `builder_username`, `builder_password`, `builder_status`) VALUES
('xera_builder', 'https://site.pro', 'username', 'password', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `is_domain`
--

CREATE TABLE `is_domain` (
  `domain_id` int(11) NOT NULL,
  `domain_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_domain`
--

INSERT INTO `is_domain` (`domain_id`, `domain_name`) VALUES
(1, '.example.com');

-- --------------------------------------------------------

--
-- Table structure for table `is_email`
--

CREATE TABLE `is_email` (
  `email_id` varchar(50) NOT NULL,
  `email_subject` varchar(200) NOT NULL,
  `email_content` varchar(10000) NOT NULL,
  `email_for` varchar(8) NOT NULL,
  `email_doc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_email`
--

INSERT INTO `is_email` (`email_id`, `email_subject`, `email_content`, `email_for`, `email_doc`) VALUES
('new_user', 'Verification required', 'Hi {user_name}!<br>\r\n	 Your account need to be verified in order to use our services.<br>\r\n	 <a href=\"{activation_link}\">click here</a><br>\r\n	 Regards {site_name}', 'user', '{user_name} {user_email} {activation_link} {site_name} {site_url}'),
('forget_password', 'Action required', 'Hi {user_name}!<br>\r\n	 You have requested a password reset.<br>\r\n	 New password: {new_password}<br>\r\n	 Regards {site_name}', 'user', '{user_name} {user_email} {new_password} {site_name} {site_url}'),
('forget_password', 'Action required', 'Hi {admin_name}!<br>\r\n	 You have requested a password reset.<br>\r\n	 New password: {new_password}<br>\r\n	 Regards {site_name}', 'admin', ''),
('new_ticket', 'Ticket Created', 'Hi {site_name}!<br>\r\n	 A new ticket had been opened by {user_name}<br>\r\n	 <a href=\"{ticket_url}\">View Ticket</a>\r\n	 Regards {site_name}', 'admin', '{site_name}, {site_url}, {ticket_url}, {ticket_id}, {user_name}'),
('reply_ticket', 'Ticket Reply Received', 'Hi {user_name}!<br>\r\n	 A new ticket reply had been received on ticket id {ticket_id}<br>\r\n	 <a href=\"{ticket_url}\">View Ticket</a>\r\n	 Regards {site_name}', 'user', '{site_name}, {site_url}, {ticket_url}, {ticket_id}, {user_name}'),
('reply_ticket', 'Ticket Reply Received', 'Hi {admin_name}!<br>\r\n	 A new ticket reply had been received on ticket id {ticket_id}<br>\r\n	 <a href=\"{ticket_url}\">View Ticket</a>\r\n	 Regards {site_name}', 'admin', '{site_name}, {site_url}, {ticket_url}, {ticket_id}, {admin_name}'),
('account_created', 'Account Created', 'Hi {user_name}!<br>\r\n	 Account created successfully.<br>\r\n	 Regards {site_name}', 'user', '{site_name}, {site_url}, {account_username}, {account_password}, {account_domain}, {main_domain}, {cpanel_domain}, {sql_server}, {nameserver_1}, {nameserver_2}, {account_label}, {user_name}, {user_email}'),
('account_suspended', 'Account Suspended', 'Hi {user_name}!<br>\r\n	 Account with the username {account_username} had been suspended due to {some_reason}. Please visit our clientarea for further inquiry.<br>\r\n	 Regards {site_name}', 'user', '{site_name}, {site_url}, {account_username}, {user_name}, {user_email}, {some_reason}'),
('account_reactivated', 'Account Reactivated', 'Hi {user_name}!<br>\r\n	 Account with the username {account_username} had been recativated. Please visit our clientarea for further inquiry.<br>\r\n	 Regards {site_name}', 'user', '{site_name}, {site_url}, {account_username}, {user_name}, {user_email}'),
('delete_account', 'Account Deleted', 'Hi {user_name}!<br>\r\n	 Account with the username {account_username} had been deleted. Please visit our clientarea for creating new account.<br>\r\n	 Regards {site_name}', 'user', '{site_name}, {site_url}, {account_username}, {user_name}, {user_email}');

-- --------------------------------------------------------

--
-- Table structure for table `is_gogetssl`
--

CREATE TABLE `is_gogetssl` (
  `gogetssl_id` varchar(13) NOT NULL DEFAULT 'xera_gogetssl',
  `gogetssl_username` varchar(100) NOT NULL,
  `gogetssl_password` varchar(100) NOT NULL,
  `gogetssl_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_gogetssl`
--

INSERT INTO `is_gogetssl` (`gogetssl_id`, `gogetssl_username`, `gogetssl_password`, `gogetssl_status`) VALUES
('xera_gogetssl', 'username', 'password', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `is_mofh`
--

CREATE TABLE `is_mofh` (
  `mofh_id` varchar(9) NOT NULL DEFAULT 'xera_mofh',
  `mofh_username` varchar(256) NOT NULL,
  `mofh_password` varchar(256) NOT NULL,
  `mofh_cpanel` varchar(100) NOT NULL,
  `mofh_ns_1` varchar(50) NOT NULL,
  `mofh_ns_2` varchar(50) NOT NULL,
  `mofh_package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_mofh`
--

INSERT INTO `is_mofh` (`mofh_id`, `mofh_username`, `mofh_password`, `mofh_cpanel`, `mofh_ns_1`, `mofh_ns_2`, `mofh_package`) VALUES
('xera_mofh', 'username', 'password', 'cpanel', 'ns1', 'ns2', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `is_oauth`
--

CREATE TABLE `is_oauth` (
  `oauth_id` varchar(20) NOT NULL,
  `oauth_client` varchar(100) NOT NULL,
  `oauth_secret` varchar(100) NOT NULL,
  `oauth_endpoint` varchar(100) NOT NULL,
  `oauth_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_oauth`
--

INSERT INTO `is_oauth` (`oauth_id`, `oauth_client`, `oauth_secret`, `oauth_endpoint`, `oauth_status`) VALUES
('github', '', '', 'https://api.github.com/user', 'inactive'),
('google', '', '', 'https://www.googleapis.com/oauth2/v2/userinfo', 'inactive'),
('facebook', '', '', 'https://graph.facebook.com/me', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `is_recaptcha`
--

CREATE TABLE `is_recaptcha` (
  `recaptcha_id` varchar(89) NOT NULL DEFAULT 'xera_recaptcha',
  `recaptcha_site` varchar(200) NOT NULL,
  `recaptcha_key` varchar(200) NOT NULL,
  `recaptcha_status` varchar(8) NOT NULL,
  `recaptcha_type` varchar(15) NOT NULL DEFAULT 'google'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_recaptcha`
--

INSERT INTO `is_recaptcha` (`recaptcha_id`, `recaptcha_site`, `recaptcha_key`, `recaptcha_status`, `recaptcha_type`) VALUES
('xera_recaptcha', 'site key', 'secret key', 'inactive', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `is_reply`
--

CREATE TABLE `is_reply` (
  `reply_id` int(11) NOT NULL,
  `reply_content` varchar(10000) NOT NULL,
  `reply_by` varchar(16) NOT NULL,
  `reply_for` varchar(8) NOT NULL,
  `reply_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_smtp`
--

CREATE TABLE `is_smtp` (
  `smtp_id` varchar(9) NOT NULL DEFAULT 'xera_smtp',
  `smtp_hostname` varchar(100) NOT NULL,
  `smtp_username` varchar(100) NOT NULL,
  `smtp_password` varchar(100) NOT NULL,
  `smtp_port` varchar(8) NOT NULL,
  `smtp_from` varchar(100) NOT NULL,
  `smtp_status` varchar(8) NOT NULL,
  `smtp_name` varchar(50) NOT NULL,
  `smtp_encryption` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `is_smtp`
--

INSERT INTO `is_smtp` (`smtp_id`, `smtp_hostname`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_from`, `smtp_status`, `smtp_name`, `smtp_encryption`) VALUES
('xera_smtp', 'smtp.example.com', 'username', 'password', '587', 'jhon@example.com', 'inactive', 'Web Host', '');

-- --------------------------------------------------------

--
-- Table structure for table `is_ssl`
--

CREATE TABLE `is_ssl` (
  `ssl_id` int(11) NOT NULL,
  `ssl_pid` varchar(250) NOT NULL,
  `ssl_key` varchar(20) NOT NULL,
  `ssl_for` varchar(20) NOT NULL,
  `ssl_private` varchar(5000) NOT NULL,
  `ssl_type` varchar(50) DEFAULT NULL,
  `ssl_domain` varchar(250) DEFAULT NULL,
  `ssl_status` varchar(250) DEFAULT NULL,
  `ssl_dns` varchar(250) NOT NULL,
  `ssl_dnsid` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_ticket`
--

CREATE TABLE `is_ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticket_subject` varchar(300) NOT NULL,
  `ticket_content` varchar(10000) NOT NULL,
  `ticket_status` varchar(20) NOT NULL,
  `ticket_key` varchar(8) NOT NULL,
  `ticket_for` varchar(16) NOT NULL,
  `ticket_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `is_user`
--

CREATE TABLE `is_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_key` varchar(16) NOT NULL,
  `user_rec` varchar(32) NOT NULL,
  `user_status` varchar(8) NOT NULL,
  `user_oauth` varchar(8) NOT NULL DEFAULT 'disabled',
  `user_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_account`
--
ALTER TABLE `is_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `is_admin`
--
ALTER TABLE `is_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `is_domain`
--
ALTER TABLE `is_domain`
  ADD PRIMARY KEY (`domain_id`);

--
-- Indexes for table `is_reply`
--
ALTER TABLE `is_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `is_ssl`
--
ALTER TABLE `is_ssl`
  ADD PRIMARY KEY (`ssl_id`);

--
-- Indexes for table `is_ticket`
--
ALTER TABLE `is_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `is_user`
--
ALTER TABLE `is_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_account`
--
ALTER TABLE `is_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `is_admin`
--
ALTER TABLE `is_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `is_domain`
--
ALTER TABLE `is_domain`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `is_reply`
--
ALTER TABLE `is_reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `is_ssl`
--
ALTER TABLE `is_ssl`
  MODIFY `ssl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `is_ticket`
--
ALTER TABLE `is_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `is_user`
--
ALTER TABLE `is_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
