
CREATE TABLE IF NOT EXISTS `puzzle` (
 
  `id_puzzle` int(11) NOT NULL AUTO_INCREMENT,
 
  `nazev` varchar(255) NOT NULL,

  `pocet_dilku` int(255) NOT NULL,
 
  `sviti_v_noci` TINYINT NOT NULL,
 
  `vyrobce` varchar(255) NOT NULL,
 
  PRIMARY KEY (`id_puzzle`)
 
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


CREATE TABLE IF NOT EXISTS `events` (
 
  `id` int(11) NOT NULL AUTO_INCREMENT,
 
  `title` varchar(255) NOT NULL,
 
  `start_date` date NOT NULL,
 
  `end_date` date NOT NULL,
 
  PRIMARY KEY (`id`)
 
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;