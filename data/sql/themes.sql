INSERT INTO `sf_multisite_theme_theme_info` (`id`, `theme_name`, `theme_enabled`, `created_at`, `updated_at`) VALUES
(1, 'blueocean', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(2, 'redsea', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(3, 'blackandwhite', 1, '2011-03-04 17:34:41', '2011-03-04 17:34:41'),
(4, 'greendragon', 1, '2011-03-13 17:01:47', '2011-03-13 17:01:47');

INSERT INTO `sf_multisite_theme_profile` (`id`, `site_name`, `sf_multisite_theme_theme_info_id`, `created_at`, `updated_at`) VALUES
(1, 'picnpay_network', 4, '2011-01-26 21:29:00', '2011-01-26 21:29:00'),
(2, 'ninemiles_network', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43');

INSERT INTO `sf_multisite_theme_profile_host` (`id`, `sf_multisite_theme_profile_id`, `host_uri`, `created_at`, `updated_at`) VALUES
(1, 1, 'picnpay.yuoweb.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(2, 1, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(3, 1, 'picnpay.yuoweb.com', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(4, 2, 'ninemiles.yuoweb.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(5, 2, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(6, 2, 'ninemiles.yuoweb.com', '2011-01-31 13:17:29', '2011-01-31 13:17:29');