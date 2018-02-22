
-- 创建数据库
CREATE DATABASE `huobi`;


CREATE TABLE `trading_bloc` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '交易区名称' ,
`updated_at`  int(11) UNSIGNED NOT NULL DEFAULT 0 ,
`created_at`  int(11) NOT NULL DEFAULT 0 ,
PRIMARY KEY (`id`)
)
COMMENT='交易区表';



-- 交易区
INSERT INTO `trading_bloc` (`name`, `updated_at`, `created_at`) VALUES ('BTC', '1519271131', '1519271131');
INSERT INTO `trading_bloc` (`name`, `updated_at`, `created_at`) VALUES ('UT', '1519271131', '1519271131');


-- 创建货币表
CREATE TABLE `coins` (
`id`  int(11) NOT NULL AUTO_INCREMENT COMMENT '货币ID' ,
`coin_name_cn`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '货币中文名称' ,
`coin_name_en`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '货币英文名称' ,
`min_buy_number`  double NOT NULL DEFAULT 0 COMMENT '最小购买数量' ,
`max_buy_number`  double NOT NULL DEFAULT 0 COMMENT '最大购买量' ,
`min_withdrawal_number`  double NOT NULL DEFAULT 0 COMMENT '最小提币数量' ,
`coin_icon`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '货币图标' ,
`buy_fee`  double UNSIGNED NOT NULL DEFAULT 0 COMMENT '买入手续费费率' ,
`sell_fee`  double UNSIGNED NOT NULL DEFAULT 0 COMMENT '卖手续费费率' ,
`rpc_ip`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'rpc ip地址' ,
`rpc_port`  int(11) NOT NULL DEFAULT 0 COMMENT 'rpc 端口' ,
`rpc_username`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'rpc 用户名' ,
`rpc_password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'rpc 密码' ,
`is_hot`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1-是热门货币，0-不是热门货币' ,
`is_new`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1-是新币种，0-不是新币种' ,
`is_support_btc`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1-支持btc交易' ,
`is_support_ut`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1-支持ut 交易' ,
`coin_status`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '货币状态' ,
`updated_at`  int(11) NOT NULL ,
`created_at`  int(11) NOT NULL ,
PRIMARY KEY (`id`)
)
COMMENT='货币表';


