ALTER DATABASE CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `priv_change`  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `priv_trigger_onobject` CHANGE `target_class` `target_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'ApplicationSolution'
ALTER TABLE `priv_sync_datasource` CHANGE `scope_class` `scope_class` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'lnkTriggerAction'
ALTER TABLE `physicaldevice` ADD `platform_date` DATE, ADD `next_maintenance` DATE
ALTER TABLE `server` ADD `host_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT ''
ALTER TABLE `pc` ADD `charger` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '', ADD `host_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT ''
