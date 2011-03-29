INSERT INTO `sf_multisite_theme_theme_info` (`id`, `theme_name`, `theme_enabled`, `created_at`, `updated_at`) VALUES
(1, 'blueocean', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(2, 'redsea', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(3, 'blackandwhite', 1, '2011-03-04 17:34:41', '2011-03-04 17:34:41'),
(4, 'greendragon', 1, '2011-03-13 17:01:47', '2011-03-13 17:01:47'),
(5, 'kustomcruise', 1, '2011-03-19 20:11:32', '2011-03-19 20:11:32'),
(6, 'urbanscapes', 1, '2011-03-21 12:34:55', '2011-03-21 12:34:55'),
(7, 'fonk', 1, '2011-03-21 12:34:55', '2011-03-21 12:34:55');

INSERT INTO `sf_multisite_theme_profile` (`id`, `site_name`, `sf_multisite_theme_theme_info_id`, `created_at`, `updated_at`) VALUES
(1, 'kustomcruisers-network', 5, '2011-01-26 21:29:00', '2011-03-19 18:35:01'),
(2, 'fbsurf-network', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(3, 'groupbuying-network', 2, '2011-03-19 19:10:51', '2011-03-19 19:10:51'),
(4, 'fonk-network', 7, '2011-03-19 19:10:51', '2011-03-19 19:10:51');

INSERT INTO `sf_multisite_theme_profile_host` (`id`, `sf_multisite_theme_profile_id`, `host_uri`, `created_at`, `updated_at`) VALUES
(1, 1, 'kcruise.yuoweb.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(2, 1, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(3, 2, 'fbsurf.yuoweb.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(4, 2, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(5, 3, 'groupbuying.yuoweb.localhost', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(6, 3, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(7, 4, 'fonk.yuoweb.localhost', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(8, 4, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29');