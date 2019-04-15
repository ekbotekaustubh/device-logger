CREATE DATABASE device_logger;

USE device_logger;

CREATE TABLE user (
    `id` int AUTO_INCREMENT,
    `name` varchar (50),
    `user_name` varchar (50),
    `password` varchar (32),
    `is_archived` tinyint (1),
    `is_admin` tinyint (1),
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE device (
    `id` int AUTO_INCREMENT,
    `name` varchar (50),
    `is_archived` tinyint (1),
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE user_device_log (
    `user_id` int,
    `device_id` int,
    `return_by` int,
    `assigned_by` int,
    `assigned_at` datetime default now(),
    `recived_by` int,
    `recived_at` datetime,
    `comment` varchar (50),
    `status` tinyint (3) comment "1=assigned, 2=returned",
    INDEX (`user_id`),
    INDEX (`device_id`),
    INDEX (`assigned_by`),
    INDEX (`recived_by`),
    INDEX (`assigned_at`),
    INDEX (`recived_at`),
    INDEX (`status`)
) ENGINE=MyISAM;

-- INSERT INTO user (name, user_name, password, is_archived, is_admin) VALUES ('Hemant', 'hemant', '21232f297a57a5a743894a0e4a801fc3', 0, 1);