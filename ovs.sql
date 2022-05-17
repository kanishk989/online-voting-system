SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user`(
    `id` int(11) NOT NULL,
    `name` text NOT NULL,
    `mobile` bigint(11) NOT NULL,
    `photo` varchar(255) NOT NULL,
    `password` varchar(16) NOT NULL,
    `status` int(11) NOT NULL,
    `votes` int(11) NOT NULL,
    `role` int(11) NOT NULL
);

INSERT INTO `user` (`id`, `name`, `mobile`, `photo`, `password`, `status`, `votes`, `role`) VALUES
(4, 'Bharatiya Janata Party', 1, 'bjp.png', 123, 1, 78, 2),
(5, 'Congress Party', 2, 'congress.png', 123, 1, 55, 2),
(6, 'Kanishk Soni', 7015786675, 'kanishk_soni.png', 123, 0, 0, 1);

ALTER TABLE `user` ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
