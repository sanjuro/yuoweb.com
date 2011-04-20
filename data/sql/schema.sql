CREATE TABLE advert_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE advert (id BIGINT AUTO_INCREMENT, title VARCHAR(200), description VARCHAR(200), url VARCHAR(200), image_path VARCHAR(200), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE advert_network (id BIGINT AUTO_INCREMENT, advert_id BIGINT, network_id BIGINT, click_count BIGINT DEFAULT 2 NOT NULL, position BIGINT, is_active TINYINT(1) DEFAULT '0' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX network_id_idx (network_id), INDEX advert_id_idx (advert_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE application_error (id BIGINT AUTO_INCREMENT, message TEXT, type VARCHAR(100), file TEXT, line BIGINT, trace LONGTEXT, code BIGINT, module VARCHAR(100), action VARCHAR(100), uri TEXT, user VARCHAR(100), comment LONGTEXT, severity VARCHAR(255) DEFAULT 'medium', user_agent VARCHAR(100), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE client (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, fullname VARCHAR(255), logo VARCHAR(255), url VARCHAR(255), email VARCHAR(255), description VARCHAR(255), token VARCHAR(255) NOT NULL UNIQUE, is_activated TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, network_count BIGINT DEFAULT 0, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE comment (id BIGINT AUTO_INCREMENT, record_model VARCHAR(255) NOT NULL, record_id BIGINT NOT NULL, author_name VARCHAR(255) NOT NULL, author_email VARCHAR(255), author_website VARCHAR(255), body LONGTEXT NOT NULL, is_delete TINYINT(1) DEFAULT '0', edition_reason LONGTEXT, reply BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX record_model_record_id_idx (record_model, record_id), INDEX reply_idx (reply), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE comment_report (id BIGINT AUTO_INCREMENT, reason LONGTEXT NOT NULL, referer VARCHAR(255), state VARCHAR(255) DEFAULT 'untreated', id_comment BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_comment_idx (id_comment), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE connection (id BIGINT AUTO_INCREMENT, owner_id BIGINT, reciever_id BIGINT, type_id BIGINT, state_id BIGINT, INDEX type_id_idx (type_id), INDEX state_id_idx (state_id), INDEX owner_id_idx (owner_id), INDEX reciever_id_idx (reciever_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE connection_state (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE connection_type (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE event (id BIGINT AUTO_INCREMENT, networkuser_id BIGINT, network_id BIGINT, eventtype_id BIGINT, title VARCHAR(100), description VARCHAR(200), accept_count BIGINT, accept_limit BIGINT, address VARCHAR(200), g_lat BIGINT, g_long BIGINT, contact_no VARCHAR(200), start_at DATETIME, end_at DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, slug VARCHAR(255), UNIQUE INDEX event_sluggable_idx (slug), INDEX network_id_idx (network_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event_invite (id BIGINT AUTO_INCREMENT, event_id BIGINT, networkuser_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX event_id_idx (event_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event_type (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE feature (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, description TEXT NOT NULL, url VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE feed (id BIGINT AUTO_INCREMENT, networkuser_id BIGINT, feedtype_id BIGINT, body VARCHAR(160), htmlbody VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX networkuser_id_idx (networkuser_id), INDEX feedtype_id_idx (feedtype_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE feed_type (id BIGINT AUTO_INCREMENT, title VARCHAR(160), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE gender (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE message (id BIGINT AUTO_INCREMENT, subject VARCHAR(100), body VARCHAR(255), htmlbody VARCHAR(255), networkuser_id BIGINT, network_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX networkuser_id_idx (networkuser_id), INDEX network_id_idx (network_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE message_reciever (id BIGINT AUTO_INCREMENT, message_id BIGINT, networkuser_id BIGINT, messagestatus_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX networkuser_id_idx (networkuser_id), INDEX message_id_idx (message_id), INDEX messagestatus_id_idx (messagestatus_id), PRIMARY KEY(id)) ENGINE = MyISAM;
CREATE TABLE message_status (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network (id BIGINT AUTO_INCREMENT, client_id BIGINT NOT NULL, networktype_id BIGINT NOT NULL, networkcategory_id BIGINT NOT NULL, subdomain VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description TEXT NOT NULL, feature_count BIGINT DEFAULT 3, user_count BIGINT DEFAULT 0, logo VARCHAR(255), accesskey VARCHAR(255) DEFAULT '0', is_public TINYINT(1) DEFAULT '1' NOT NULL, is_activated TINYINT(1) DEFAULT '0' NOT NULL, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX subdomain_index_idx (subdomain), UNIQUE INDEX slug_index_idx (slug, id), UNIQUE INDEX network_sluggable_idx (slug), INDEX client_id_idx (client_id), INDEX networktype_id_idx (networktype_id), INDEX networkcategory_id_idx (networkcategory_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network_category (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network_feature (id BIGINT AUTO_INCREMENT, network_id BIGINT, feature_id BIGINT, active BIGINT DEFAULT 2 NOT NULL, position BIGINT NOT NULL, INDEX network_id_idx (network_id), INDEX feature_id_idx (feature_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network_type (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network_user (id BIGINT AUTO_INCREMENT, network_id BIGINT, user_id BIGINT, is_private TINYINT(1) DEFAULT '0' NOT NULL, INDEX network_id_idx (network_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE photo (id BIGINT AUTO_INCREMENT, url VARCHAR(100), networkuser_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE photo_gallery (id BIGINT AUTO_INCREMENT, title VARCHAR(200), networkuser_id BIGINT, photo_count BIGINT DEFAULT 0, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE photo_link (id BIGINT AUTO_INCREMENT, photo_id BIGINT, gallery_id BIGINT, INDEX photo_id_idx (photo_id), INDEX gallery_id_idx (gallery_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE photo_view (id BIGINT AUTO_INCREMENT, network_id BIGINT, photo_id BIGINT, has_viewed BIGINT DEFAULT 2 NOT NULL, INDEX network_id_idx (network_id), INDEX photo_id_idx (photo_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE shout_client_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE shout_client (id BIGINT AUTO_INCREMENT, client_id BIGINT, network_id BIGINT, country_id BIGINT, username VARCHAR(200), password VARCHAR(200), api_id VARCHAR(200), message_count BIGINT DEFAULT 0, credit_left DECIMAL(10, 2), local_only BIGINT, dialing_code VARCHAR(20), deleted_at DATETIME, INDEX client_id_idx (client_id), INDEX network_id_idx (network_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE shout_country (id BIGINT AUTO_INCREMENT, title VARCHAR(150), dailing_code VARCHAR(20), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE shout_message_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE shout_message (id BIGINT AUTO_INCREMENT, networkuser_id BIGINT, shoutclient_id BIGINT, mobile_number VARCHAR(200), message VARCHAR(200), status BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX shoutclient_id_idx (shoutclient_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE speakout_category_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE speakout_category (id BIGINT AUTO_INCREMENT, title VARCHAR(200), description VARCHAR(200), network_id BIGINT, topic_count BIGINT DEFAULT 0, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX network_id_idx (network_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE speakout_reply (id BIGINT AUTO_INCREMENT, body VARCHAR(255), htmlbody VARCHAR(255), topic_id BIGINT, networkuser_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX topic_id_idx (topic_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE speakout_topic_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE speakout_topic (id BIGINT AUTO_INCREMENT, title VARCHAR(200), description VARCHAR(200), category_id BIGINT, networkuser_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME, INDEX category_id_idx (category_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user_profile_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE user_profile (id BIGINT AUTO_INCREMENT, sfuser_id BIGINT, mobile_no VARCHAR(255), description VARCHAR(255), profile_pic VARCHAR(255), gender_id BIGINT, city VARCHAR(255), country VARCHAR(255), birthday DATETIME NOT NULL, INDEX sfuser_id_idx (sfuser_id), INDEX gender_id_idx (gender_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_category (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_deal_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE webuy_deal (id BIGINT AUTO_INCREMENT, product_id BIGINT, network_id BIGINT, title VARCHAR(150), full_price DECIMAL(10, 2), deal_price DECIMAL(10, 2), discount_percent DECIMAL(10, 2), buyer_count BIGINT DEFAULT 0, tipping_count BIGINT DEFAULT 0, status BIGINT DEFAULT 0, g_lat BIGINT DEFAULT 0, g_long BIGINT DEFAULT 0, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX webuy_deal_sluggable_idx (slug), INDEX product_id_idx (product_id), INDEX network_id_idx (network_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_deal_attribute (id BIGINT AUTO_INCREMENT, deal_id BIGINT, attribute_name VARCHAR(155), attribute_value VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX deal_id_idx (deal_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_network_user (id BIGINT AUTO_INCREMENT, networkuser_id BIGINT, deal_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX deal_id_idx (deal_id), INDEX networkuser_id_idx (networkuser_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_product_index (keyword VARCHAR(200), field VARCHAR(50), position BIGINT, id BIGINT, PRIMARY KEY(keyword, field, position, id)) ENGINE = INNODB;
CREATE TABLE webuy_product (id BIGINT AUTO_INCREMENT, category_id BIGINT, supplier_id BIGINT, title VARCHAR(150), description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX supplier_id_idx (supplier_id), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE webuy_supplier (id BIGINT AUTO_INCREMENT, fullname VARCHAR(255), product_count BIGINT DEFAULT 0, contact_number VARCHAR(100), address VARCHAR(255), g_lat BIGINT DEFAULT 0, g_long BIGINT DEFAULT 0, logo VARCHAR(255), url VARCHAR(255), email VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX webuy_supplier_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_multisite_theme_profile (id BIGINT AUTO_INCREMENT, site_name VARCHAR(255) NOT NULL UNIQUE, sf_multisite_theme_theme_info_id BIGINT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sf_multisite_theme_theme_info_id_idx (sf_multisite_theme_theme_info_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_multisite_theme_profile_host (id BIGINT AUTO_INCREMENT, sf_multisite_theme_profile_id BIGINT NOT NULL, host_uri VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sf_multisite_theme_profile_id_idx (sf_multisite_theme_profile_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_multisite_theme_theme_info (id BIGINT AUTO_INCREMENT, theme_name VARCHAR(255) NOT NULL, theme_enabled TINYINT(1) DEFAULT '0', is_private TINYINT(1) DEFAULT '0', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE advert_index ADD CONSTRAINT advert_index_id_advert_id FOREIGN KEY (id) REFERENCES advert(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE advert_network ADD CONSTRAINT advert_network_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id) ON DELETE CASCADE;
ALTER TABLE advert_network ADD CONSTRAINT advert_network_advert_id_advert_id FOREIGN KEY (advert_id) REFERENCES advert(id) ON DELETE CASCADE;
ALTER TABLE client ADD CONSTRAINT client_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE comment ADD CONSTRAINT comment_reply_comment_id FOREIGN KEY (reply) REFERENCES comment(id);
ALTER TABLE comment_report ADD CONSTRAINT comment_report_id_comment_comment_id FOREIGN KEY (id_comment) REFERENCES comment(id) ON DELETE CASCADE;
ALTER TABLE connection ADD CONSTRAINT connection_type_id_connection_type_id FOREIGN KEY (type_id) REFERENCES connection_type(id);
ALTER TABLE connection ADD CONSTRAINT connection_state_id_connection_state_id FOREIGN KEY (state_id) REFERENCES connection_state(id);
ALTER TABLE connection ADD CONSTRAINT connection_reciever_id_network_user_id FOREIGN KEY (reciever_id) REFERENCES network_user(id) ON DELETE CASCADE;
ALTER TABLE connection ADD CONSTRAINT connection_owner_id_network_user_id FOREIGN KEY (owner_id) REFERENCES network_user(id) ON DELETE CASCADE;
ALTER TABLE event_index ADD CONSTRAINT event_index_id_event_id FOREIGN KEY (id) REFERENCES event(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE event ADD CONSTRAINT event_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE event ADD CONSTRAINT event_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id);
ALTER TABLE event_invite ADD CONSTRAINT event_invite_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE event_invite ADD CONSTRAINT event_invite_event_id_event_id FOREIGN KEY (event_id) REFERENCES event(id);
ALTER TABLE feed ADD CONSTRAINT feed_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE feed ADD CONSTRAINT feed_feedtype_id_feed_type_id FOREIGN KEY (feedtype_id) REFERENCES feed_type(id);
ALTER TABLE message ADD CONSTRAINT message_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE message ADD CONSTRAINT message_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id);
ALTER TABLE message_reciever ADD CONSTRAINT message_reciever_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id) ON DELETE CASCADE;
ALTER TABLE message_reciever ADD CONSTRAINT message_reciever_messagestatus_id_message_status_id FOREIGN KEY (messagestatus_id) REFERENCES message_status(id);
ALTER TABLE message_reciever ADD CONSTRAINT message_reciever_message_id_message_id FOREIGN KEY (message_id) REFERENCES message(id) ON DELETE CASCADE;
ALTER TABLE network ADD CONSTRAINT network_networktype_id_network_type_id FOREIGN KEY (networktype_id) REFERENCES network_type(id);
ALTER TABLE network ADD CONSTRAINT network_networkcategory_id_network_category_id FOREIGN KEY (networkcategory_id) REFERENCES network_category(id);
ALTER TABLE network ADD CONSTRAINT network_client_id_client_id FOREIGN KEY (client_id) REFERENCES client(id) ON DELETE CASCADE;
ALTER TABLE network_feature ADD CONSTRAINT network_feature_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id) ON DELETE CASCADE;
ALTER TABLE network_feature ADD CONSTRAINT network_feature_feature_id_feature_id FOREIGN KEY (feature_id) REFERENCES feature(id) ON DELETE CASCADE;
ALTER TABLE network_user ADD CONSTRAINT network_user_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE network_user ADD CONSTRAINT network_user_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id) ON DELETE CASCADE;
ALTER TABLE photo ADD CONSTRAINT photo_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE photo_gallery ADD CONSTRAINT photo_gallery_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE photo_link ADD CONSTRAINT photo_link_photo_id_photo_id FOREIGN KEY (photo_id) REFERENCES photo(id);
ALTER TABLE photo_link ADD CONSTRAINT photo_link_gallery_id_photo_gallery_id FOREIGN KEY (gallery_id) REFERENCES photo_gallery(id);
ALTER TABLE photo_view ADD CONSTRAINT photo_view_photo_id_feature_id FOREIGN KEY (photo_id) REFERENCES feature(id) ON DELETE CASCADE;
ALTER TABLE photo_view ADD CONSTRAINT photo_view_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id) ON DELETE CASCADE;
ALTER TABLE shout_client_index ADD CONSTRAINT shout_client_index_id_shout_client_id FOREIGN KEY (id) REFERENCES shout_client(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE shout_client ADD CONSTRAINT shout_client_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id);
ALTER TABLE shout_client ADD CONSTRAINT shout_client_client_id_client_id FOREIGN KEY (client_id) REFERENCES client(id);
ALTER TABLE shout_message_index ADD CONSTRAINT shout_message_index_id_shout_message_id FOREIGN KEY (id) REFERENCES shout_message(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE shout_message ADD CONSTRAINT shout_message_shoutclient_id_shout_client_id FOREIGN KEY (shoutclient_id) REFERENCES shout_client(id);
ALTER TABLE shout_message ADD CONSTRAINT shout_message_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE speakout_category_index ADD CONSTRAINT speakout_category_index_id_speakout_category_id FOREIGN KEY (id) REFERENCES speakout_category(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE speakout_category ADD CONSTRAINT speakout_category_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id);
ALTER TABLE speakout_reply ADD CONSTRAINT speakout_reply_topic_id_speakout_topic_id FOREIGN KEY (topic_id) REFERENCES speakout_topic(id) ON DELETE CASCADE;
ALTER TABLE speakout_reply ADD CONSTRAINT speakout_reply_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id) ON DELETE CASCADE;
ALTER TABLE speakout_topic_index ADD CONSTRAINT speakout_topic_index_id_speakout_topic_id FOREIGN KEY (id) REFERENCES speakout_topic(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE speakout_topic ADD CONSTRAINT speakout_topic_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id);
ALTER TABLE speakout_topic ADD CONSTRAINT speakout_topic_category_id_speakout_category_id FOREIGN KEY (category_id) REFERENCES speakout_category(id) ON DELETE CASCADE;
ALTER TABLE user_profile_index ADD CONSTRAINT user_profile_index_id_user_profile_id FOREIGN KEY (id) REFERENCES user_profile(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE user_profile ADD CONSTRAINT user_profile_sfuser_id_sf_guard_user_id FOREIGN KEY (sfuser_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE user_profile ADD CONSTRAINT user_profile_gender_id_gender_id FOREIGN KEY (gender_id) REFERENCES gender(id);
ALTER TABLE webuy_deal_index ADD CONSTRAINT webuy_deal_index_id_webuy_deal_id FOREIGN KEY (id) REFERENCES webuy_deal(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE webuy_deal ADD CONSTRAINT webuy_deal_product_id_webuy_product_id FOREIGN KEY (product_id) REFERENCES webuy_product(id) ON DELETE CASCADE;
ALTER TABLE webuy_deal ADD CONSTRAINT webuy_deal_network_id_network_id FOREIGN KEY (network_id) REFERENCES network(id);
ALTER TABLE webuy_deal_attribute ADD CONSTRAINT webuy_deal_attribute_deal_id_webuy_deal_id FOREIGN KEY (deal_id) REFERENCES webuy_deal(id) ON DELETE CASCADE;
ALTER TABLE webuy_network_user ADD CONSTRAINT webuy_network_user_networkuser_id_network_user_id FOREIGN KEY (networkuser_id) REFERENCES network_user(id) ON DELETE CASCADE;
ALTER TABLE webuy_network_user ADD CONSTRAINT webuy_network_user_deal_id_webuy_deal_id FOREIGN KEY (deal_id) REFERENCES webuy_deal(id) ON DELETE CASCADE;
ALTER TABLE webuy_product_index ADD CONSTRAINT webuy_product_index_id_webuy_product_id FOREIGN KEY (id) REFERENCES webuy_product(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE webuy_product ADD CONSTRAINT webuy_product_supplier_id_webuy_supplier_id FOREIGN KEY (supplier_id) REFERENCES webuy_supplier(id) ON DELETE CASCADE;
ALTER TABLE webuy_product ADD CONSTRAINT webuy_product_category_id_webuy_category_id FOREIGN KEY (category_id) REFERENCES webuy_category(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_multisite_theme_profile ADD CONSTRAINT sssi FOREIGN KEY (sf_multisite_theme_theme_info_id) REFERENCES sf_multisite_theme_theme_info(id);
ALTER TABLE sf_multisite_theme_profile_host ADD CONSTRAINT sssi_1 FOREIGN KEY (sf_multisite_theme_profile_id) REFERENCES sf_multisite_theme_profile(id);
