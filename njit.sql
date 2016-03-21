drop user `njit`@`localhost`;
create user `njit`@`localhost` identified by "itconsult";
grant all privileges on *.* to `njit`@`localhost`;
flush privileges;
