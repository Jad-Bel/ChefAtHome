CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_nom` varchar(100) NOT NULL,
  `plat_id` int(11) DEFAULT NULL,
  `description` text NULL,
  `price` int(11) NULL
) 



CREATE TABLE `plats` (
  `plat_id` int(11) NOT NULL,
  `nom_plat` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(100) NOT NULL
) 



CREATE TABLE `reservation` (
  `reserv_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `reservation_date` date NOT NULL
)



CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) 




INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'client'),
(2, 'admin');



CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
)



ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `plat_id` (`plat_id`);


ALTER TABLE `plats`
  ADD PRIMARY KEY (`plat_id`);


ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserv_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `menu_id` (`menu_id`);


ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `role_id` (`role_id`);




ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `plats`
  MODIFY `plat_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `reservation`
  MODIFY `reserv_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`plat_id`) REFERENCES `plats` (`plat_id`);

ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);


ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

