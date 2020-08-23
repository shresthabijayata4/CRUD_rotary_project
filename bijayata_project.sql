-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 11:55 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_table`
--

CREATE TABLE `page_table` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `alias` text,
  `page_title` text NOT NULL,
  `Body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_table`
--

INSERT INTO `page_table` (`id`, `Name`, `alias`, `page_title`, `Body`) VALUES
(21, 'Footer', 'footer', 'footer-part', '                                                            \r\n        &lt;footer&gt;\r\n		&lt;div id=&quot;footer-wholemenu&quot;&gt;\r\n			&lt;div class=&quot;footer-uppermenu&quot; &gt;\r\n				&lt;div class=&quot;row&quot;&gt;\r\n					&lt;div class=&quot;col-sm-4&quot;&gt;\r\n						&lt;div class=&quot;imp-links&quot;&gt;\r\n							&lt;span style=&quot;font-size: medium;&quot;&gt; Important Links&lt;/span&gt;\r\n							&lt;ul&gt;\r\n								&lt;li&gt;&lt;a href=&quot;https://my.rotary.org/en/&quot;&gt;My Rotary&lt;/a&gt;&lt;/li&gt;\r\n								&lt;li&gt;&lt;a href=&quot;https://brandcenter.rotary.org/en-GB&quot;&gt;Rotary Brand Center&lt;/a&gt;&lt;/li&gt;\r\n								&lt;li&gt;&lt;a href=&quot;https://my.rotary.org/en&quot;&gt;Rotary Learning Center&lt;/a&gt;&lt;/li&gt;\r\n								&lt;li&gt;&lt;a href=&quot;https://learn.rotaract3292.org/&quot;&gt;Rotaract Learning Center&lt;/a&gt;&lt;/li&gt;\r\n\r\n							&lt;/ul&gt;\r\n						&lt;/div&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;footer-contacts&quot;&gt;\r\n					&lt;div class=&quot;col-sm-4&quot;&gt;\r\n						&lt;span style=&quot;font-size:medium;&quot;&gt;Contacts&lt;/span&gt;\r\n						&lt;ul&gt;\r\n							\r\n							&lt;li&gt;&lt;i class=&quot;fa fa-map-marker&quot;&gt;&lt;/i&gt; \r\n							&lt;span&gt;Baluwatar, Kathmandu&lt;/span&gt;\r\n							&lt;/li&gt;\r\n							&lt;li&gt;&lt;i class=&quot;fa fa-volume-control-phone&quot;&gt;&lt;/i&gt;\r\n							&lt;span&gt;+977 9843671841&lt;/span&gt;\r\n							\r\n							&lt;/li&gt;\r\n							&lt;li&gt;&lt;i class=&quot;fa fa-envelope&quot;&gt;&lt;/i&gt;\r\n							&lt;span&gt;hello@rotaryclub123.org&lt;/span&gt;\r\n							\r\n							&lt;/li&gt;\r\n\r\n\r\n						&lt;/ul&gt;\r\n					&lt;/div&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;col-sm-4&quot;&gt;\r\n						&lt;span style=&quot;font-size: large; font-weight: bold;&quot;&gt;Newsletter&lt;/span&gt;\r\n						&lt;form&gt;\r\n						&lt;div class=&quot;form-group&quot;&gt;\r\n							&lt;label for=&quot;exampleInputEmail1&quot; style=&quot;font-weight: 500;&quot; class=&quot;class-label&quot;&gt;Enter your e-mail to get the latest news of Rotary&lt;/label&gt;\r\n							&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;\r\n						&lt;/div&gt;\r\n						&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Subscribe&lt;/button&gt;\r\n						&lt;/form&gt;\r\n					&lt;/div&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;footer-lowermenu&quot;&gt;\r\n				&lt;div class=&quot;row&quot;&gt;\r\n					&lt;div class=&quot;col-sm-6&quot;&gt;\r\n						&lt;div class=&quot;copy-right&quot;&gt;\r\n							&lt;span&gt; Copyright &lt;i class=&quot;fa fa-copyright&quot;&gt;&lt;/i&gt; 2020 Rotary website created by Bijayata&lt;/span&gt;\r\n						&lt;/div&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;col-sm-6&quot;&gt;\r\n						&lt;div class=&quot;footer-icons&quot;&gt;\r\n							&lt;ul&gt;\r\n							&lt;li class=&quot;facebook-icon&quot;&gt; &lt;a href=&quot;https://www.facebook.com/PatanWest&quot; class=&quot;fa fa-facebook-official&quot; &gt;&lt;/a&gt; &lt;/li&gt;\r\n							&lt;li class=&quot;twitter-icon&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;fa fa-twitter&quot; &gt;&lt;/a&gt; &lt;/li&gt;\r\n							&lt;li class=&quot;instagram-icon&quot;&gt; &lt;a href=&quot;https://www.instagram.com/rotaractclubofpatanwest/&quot; class=&quot;fa fa-instagram&quot;&gt;&lt;/a&gt; &lt;/li&gt;\r\n							&lt;li class=&quot;youtube-icon&quot;&gt; &lt;a href=&quot;https://www.youtube.com/watch?v=W5zHTjKjFYY&quot; class=&quot;fa fa-youtube-play&quot;&gt;&lt;/a&gt; &lt;/li&gt;\r\n							&lt;/ul&gt;\r\n						&lt;/div&gt;\r\n					&lt;/div&gt;\r\n					\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n		\r\n		&lt;/div&gt;\r\n	&lt;/footer&gt;\r\n\r\n	&lt;script&gt;\r\n		jQuery(document).ready(function(){\r\n			jQuery(\'.menu .menuitem&gt;a\').on(\'click\',function () {\r\n				// e.preventDefault();\r\n		\r\n				var target = this.hash,\r\n				jQuerytarget = jQuery(target);\r\n		\r\n			jQuery(\'html, body\').stop().animate({\r\n				\'scrollTop\': jQuerytarget.offset().top-170\r\n				}, 900, \'swing\', function () {\r\n				window.location.hash = target;\r\n				});\r\n			});\r\n		});\r\n	&lt;/script&gt;\r\n	&lt;script&gt;\r\n		jQuery(document).ready(function(){\r\n			jQuery(\'.walpaper .button1&gt;a\').on(\'click\',function () {\r\n				// e.preventDefault();\r\n		\r\n				var target = this.hash,\r\n				jQuerytarget = jQuery(target);\r\n		\r\n			jQuery(\'html, body\').stop().animate({\r\n				\'scrollTop\': jQuerytarget.offset().top-170\r\n				}, 900, \'swing\', function () {\r\n				window.location.hash = target;\r\n				});\r\n			});\r\n		});\r\n	&lt;/script&gt;\r\n\r\n&lt;/body&gt;\r\n&lt;/html&gt;                                 '),
(22, 'Menu', 'menu', 'Menu-part', '                                                                                                                                                                                    \r\n	&lt;div class=&quot;header&quot;&gt;\r\n		&lt;div class=&quot;footerhead&quot;&gt;\r\n			&lt;div class=&quot;row&quot;&gt;\r\n				&lt;div class=&quot;col-sm-3&quot;&gt;\r\n					&lt;div class=&quot;contact-info&quot;&gt;\r\n						&lt;span class=&quot;phone-icon&quot;&gt; &lt;i class=&quot;fa fa-volume-control-phone&quot; style=&quot;color:white&quot;&gt;&lt;/i&gt; &lt;/span&gt;\r\n						&lt;span class=&quot;phone-no&quot;&gt;+977 9843671841&lt;/span&gt;\r\n					&lt;/div&gt;\r\n\r\n				&lt;/div&gt;\r\n\r\n				&lt;div class=&quot;col-sm-3&quot;&gt;\r\n					&lt;span class=&quot;mail-icon&quot;&gt; &lt;i class=&quot;fa fa-envelope&quot; style=&quot;color:white&quot;&gt;&lt;/i&gt; &lt;/span&gt;\r\n					&lt;span class=&quot;mail-address&quot;&gt;hello@rotaryclub123.org&lt;/span&gt;\r\n				&lt;/div&gt;\r\n				&lt;div class=&quot;col-sm-3&quot;&gt;\r\n					&lt;div class=&quot;icons&quot;&gt;\r\n					&lt;span class=&quot;facebook-icon&quot;&gt; &lt;a href=&quot;https://www.facebook.com/PatanWest&quot; class=&quot;fa fa-facebook-official&quot; style=&quot;color:white&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n					&lt;span class=&quot;twitter-icon&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;fa fa-twitter&quot; style=&quot;color:white&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n					&lt;span class=&quot;instagram-icon&quot;&gt; &lt;a href=&quot;https://www.instagram.com/rotaractclubofpatanwest/&quot; class=&quot;fa fa-instagram&quot; style=&quot;color:white&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n					&lt;span class=&quot;youtube-icon&quot;&gt; &lt;a href=&quot;https://www.youtube.com/watch?v=W5zHTjKjFYY&quot; class=&quot;fa fa-youtube-play&quot; style=&quot;color:white&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n					&lt;/div&gt;\r\n				&lt;/div&gt;\r\n				&lt;div class=&quot;col-sm-3&quot; style=&quot;padding-top:10px ;&quot;&gt;\r\n					&lt;span class=&quot;member&quot;&gt;Are you a Rotary Member?&lt;/span&gt;\r\n					&lt;span&gt;\r\n						\r\n						\r\n						&lt;a href=&quot;../login&quot; style=&quot;padding-left: 10px; color: yellow;&quot;&gt;Log In&lt;/a&gt;\r\n						\r\n					&lt;/span&gt;\r\n				&lt;/div&gt;\r\n\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n\r\n		&lt;div class=lo_ba&gt;\r\n			&lt;div class=&quot;logo&quot;&gt;&lt;img src=&quot;/CI/assets/images/wheel.jpg&quot; height=&quot;110px&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;banner&quot;&gt;&lt;img src=&quot;/CI/assets/images/banner.jpg&quot; height=&quot;100px&quot; align=&quot;right&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=menu&gt;\r\n				&lt;div class=&quot;menuitem&quot;&gt;&lt;a href=&quot;&quot;&gt;HOME&lt;/a&gt;&lt;/div&gt;\r\n				&lt;div class=&quot;menuitem&quot;&gt;&lt;a href=#aboutus-whole&gt;ABOUT US&lt;/a&gt;&lt;/div&gt;\r\n				&lt;div class=&quot;menuitem&quot;&gt;&lt;a href=&quot;#resources&quot;&gt;RESOURCES&lt;/a&gt;&lt;/div&gt;\r\n				&lt;div class=&quot;menuitem&quot;&gt;&lt;a href=&quot;#joinus-id&quot;&gt; JOIN US&lt;/a&gt;&lt;/div&gt;\r\n				&lt;div class=&quot;menuitem&quot;&gt;&lt;a href=&quot;#footer-wholemenu&quot;&gt; CONTACT US&lt;/a&gt;&lt;/div&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		\r\n	&lt;/div&gt;                                                                                                                '),
(26, 'Body', 'body', 'Welcome to body part', '                                                            \r\n        &lt;div class=&quot;walpaper&quot;&gt;\r\n        &lt;img src=&quot;/CI/assets/images/walpaper.jpg&quot; style=&quot;width: 100%; height: 700px;&quot;&gt;\r\n        &lt;div class=&quot;overlay&quot;&gt;&lt;/div&gt;\r\n            &lt;div class=&quot;homecontent&quot;&gt;\r\n                &lt;h1&gt;Rotary Club&lt;/h1&gt;\r\n                &lt;h2&gt; Join the global movement of young leaders who are developing innovative solutions to the world’s most pressing challenges.  &lt;/h2&gt;\r\n				&lt;button class=&quot;button1&quot;&gt;\r\n					&lt;span class=&quot;plane-icon&quot;&gt; &lt;a href=&quot;#joinus-id&quot; class=&quot;fa fa-paper-plane-o&quot; style=&quot;color:white; padding-right: 0px;&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n					\r\n					&lt;a href=&quot;#joinus-id&quot;&gt;Join Now&lt;/a&gt;\r\n				&lt;/button&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	\r\n\r\n\r\n	&lt;div class=&quot;container&quot;&gt;\r\n		&lt;a id=&quot;aboutus-whole&quot;&gt;&lt;/a&gt;\r\n		&lt;div class=&quot;aboutus-whole&quot;&gt;\r\n		&lt;div id=&quot;title&quot;&gt;\r\n			&lt;h1&gt;Rotaract &amp; Rotary&lt;/h1&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;row&quot;&gt;\r\n			&lt;div class=&quot;col-sm-4&quot;&gt;&lt;img class=&quot;img1&quot; src=&quot;/CI/assets/images/aboutus.png&quot; alt=&quot;about us&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-8&quot;&gt;\r\n				&lt;h2&gt;About US&lt;/h2&gt;\r\n				&lt;p&gt; Rotary is a worldwide organization of more than 1.2 million business, professional, and community leaders. Members of Rotary clubs, known as Rotarians, provide humanitarian service, encourage high ethical standards in all vocations, and help build goodwill and peace in the world.\r\n\r\n					Rotaract is a Rotary-sponsored service club for young men and women aged 18 to 30 years. Rotaract clubs are either community or university based, and they’re sponsored by a local Rotary club.&lt;span id=&quot;dots&quot;&gt;.....&lt;/span&gt;&lt;span id=&quot;more&quot;&gt; This makes them true “partners in service” and key members of the family of Rotary. Rotaract is Rotary’s most significant and fastest-growing service programs, with more than 9,030 clubs in about 170 countries and geographical areas. \r\n					\r\n					Rotaract Movement started in Nepal in 1991 with the Charter of the first Rotaract Club. Since then the movement has extensively grown inspiring thousands of youths and brought out dynamic young leaders. Presently, there are 120 Rotaract Clubs across the country with more than 4000 Rotaractors spread across the nation.&lt;/span&gt;\r\n				&lt;/p&gt;\r\n				&lt;button onclick=&quot;myFunction()&quot; id=&quot;myBtn&quot;&gt;Read more&lt;/button&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;/div&gt;\r\n\r\n	&lt;/div&gt;\r\n\r\n\r\n	&lt;div id=&quot;resources&quot;&gt;\r\n		&lt;div class=&quot;resource-title&quot;&gt;\r\n			&lt;h2&gt;&lt;b&gt;Resources&lt;/b&gt;&lt;/h2&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;row&quot; style=&quot;background-color:&quot;&gt;\r\n			&lt;div class=&quot;col-sm-3&quot;&gt;\r\n				&lt;div class=&quot;col-1&quot; style=&quot;padding: 50px;&quot;&gt;\r\n					&lt;div class=&quot;documents&quot;&gt;\r\n						&lt;i class=&quot;fa fa-bell-o&quot; style=&quot;color:#4f4f8a&quot;&gt;&lt;/i&gt;\r\n\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;doc-content&quot;&gt;\r\n						&lt;div class=&quot;doc-title&quot;&gt;\r\n							&lt;h3&gt;Document &amp; Templates&lt;/h3&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;doc-desc&quot;&gt;\r\n							&lt;p&gt;\r\n								Find out all the documents &amp; templates required for your club via Rotaract Resourcess\r\n							&lt;/p&gt;\r\n						&lt;/div&gt;\r\n						&lt;button class=&quot;button1&quot;&gt;\r\n							&lt;span class=&quot;readmore&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n							\r\n							Read More\r\n						&lt;/button&gt;\r\n					&lt;/div&gt;\r\n\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-3&quot;&gt;\r\n				&lt;div class=&quot;2-col&quot; style=&quot;padding: 50px;&quot;&gt;\r\n\r\n					&lt;div class=&quot;tutorial&quot;&gt;\r\n						&lt;i class=&quot;fa fa-youtube-play&quot; style=&quot;color:#4f4f8a&quot;&gt;&lt;/i&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;tu-content&quot;&gt;\r\n						&lt;div class=&quot;tu-title&quot;&gt;\r\n							&lt;h3&gt;Online Tutorials&lt;/h3&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;tu-desc&quot;&gt;\r\n							&lt;p&gt;Find out all the video tutorials available at out official youtube channel.&lt;/p&gt;\r\n						&lt;/div&gt;\r\n						&lt;button class=&quot;button1&quot;&gt;\r\n							&lt;span class=&quot;readmore&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n							\r\n							Read More\r\n						&lt;/button&gt;\r\n\r\n\r\n					&lt;/div&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-3&quot;&gt;\r\n				&lt;div class=&quot;3-col&quot; style=&quot;padding: 50px;&quot;&gt;\r\n\r\n					&lt;div class=&quot;learning&quot;&gt;\r\n					&lt;i class=&quot;fa fa-graduation-cap&quot; style=&quot;color:#4f4f8a&quot;&gt;&lt;/i&gt;\r\n					&lt;/div&gt;\r\n\r\n					&lt;div class=&quot;learn-content&quot;&gt;\r\n						&lt;div class=&quot;learn-title&quot;&gt;\r\n							&lt;h3&gt;Learning Center&lt;/h3&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;learn-desc&quot;&gt;\r\n							&lt;p&gt;\r\n								Learn about Rotaract Basics to Road to leadership through our online courses.\r\n							&lt;/p&gt;\r\n						&lt;/div&gt;\r\n						&lt;button class=&quot;button1&quot;&gt;\r\n							&lt;span class=&quot;readmore&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n							\r\n							Read More\r\n						&lt;/button&gt;\r\n					&lt;/div&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-3&quot;&gt;\r\n				&lt;div class=&quot;4-col&quot; style=&quot;padding: 50px;&quot;&gt;\r\n\r\n					&lt;div class=&quot;publication&quot;&gt;\r\n						&lt;i class=&quot;fa fa-book&quot; style=&quot;color:#4f4f8a&quot;&gt;&lt;/i&gt;\r\n					&lt;/div&gt;\r\n\r\n					&lt;div class=&quot;pub-content&quot;&gt;\r\n						&lt;div class=&quot;pub-title&quot;&gt;\r\n							&lt;h3&gt;Publication&lt;/h3&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;pub-desc&quot;&gt;\r\n							&lt;p&gt;Check all out digital content at issuu\r\n\r\n							&lt;/p&gt;\r\n						&lt;/div&gt;\r\n						&lt;button class=&quot;button1&quot;&gt;\r\n							&lt;span class=&quot;readmore&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n							\r\n							Read More\r\n						&lt;/button&gt;\r\n					&lt;/div&gt;\r\n\r\n				\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n\r\n		  &lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;!-- \r\n	=======================message from leaders================= --&gt;\r\n	&lt;div class=&quot;message-title&quot;&gt;\r\n		&lt;h2&gt;&lt;b&gt; Message From Leaders&lt;/b&gt;&lt;/h2&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div class=&quot;Message-from-leaders&quot;&gt;\r\n		\r\n		&lt;div class=&quot;row&quot;&gt;\r\n			&lt;div class=&quot;col-sm-4&quot;&gt;\r\n				&lt;img src=&quot;/CI/assets/images/holger.jpg&quot; class=&quot;img-thumbnail&quot;&gt;\r\n				&lt;div class=&quot;content&quot;&gt;\r\n					&lt;div class=&quot;title&quot;&gt;\r\n						&lt;span&gt;&lt;b&gt;Holger Knaack&lt;/b&gt;&lt;/span&gt;\r\n					&lt;/div&gt;\r\n					&lt;p&gt;Rotary International President&lt;/p&gt;\r\n					&lt;button class=&quot;button1&quot;&gt;\r\n						&lt;span class=&quot;read&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n						\r\n						Read \r\n					&lt;/button&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-4&quot;&gt;\r\n				&lt;img src=&quot;/CI/assets/images/rajib.jpg&quot; class=&quot;img-thumbnail&quot;&gt;\r\n				&lt;div class=&quot;content&quot;&gt;\r\n					&lt;div class=&quot;title&quot;&gt;\r\n						&lt;span&gt;Rajib Pokhrel&lt;/span&gt;\r\n					&lt;/div&gt;\r\n					&lt;p&gt;District Governor&lt;/p&gt;\r\n					&lt;button class=&quot;button1&quot;&gt;\r\n						&lt;span class=&quot;read&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n						\r\n						Read\r\n					&lt;/button&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-4&quot;&gt;\r\n				&lt;img src=&quot;/CI/assets/images/sanjib.jpg&quot; class=&quot;img-thumbnail&quot;&gt;\r\n				&lt;div class=&quot;content&quot;&gt;\r\n					&lt;div class=&quot;title&quot;&gt;\r\n						&lt;span&gt;Sanjib Poudel&lt;/span&gt;\r\n					&lt;/div&gt;\r\n					&lt;p&gt;District Rotaract Representative&lt;/p&gt;\r\n					&lt;button class=&quot;button1&quot;&gt;\r\n						&lt;span class=&quot;read&quot;&gt; &lt;a href=&quot;#&quot;&gt;&lt;/a&gt; &lt;/span&gt;\r\n						\r\n						Read \r\n					&lt;/button&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n\r\n\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	\r\n\r\n&lt;!-- =====================student walpaper====================== --&gt;\r\n\r\n	&lt;!-- =========================JOIN US======================== --&gt;\r\n\r\n	&lt;a id=&quot;joinus-id&quot;&gt;&lt;/a&gt;\r\n	&lt;div class=&quot;join-us&quot;&gt;\r\n		&lt;div class=&quot;row&quot;&gt;\r\n			&lt;div class=&quot;paragraph&quot;&gt;\r\n				&lt;div class=&quot;col-sm-7&quot;&gt;\r\n					&lt;span class=&quot;global-movement&quot;&gt;Be a part of Global Movement&lt;/span&gt;\r\n					&lt;div class=&quot;title-content&quot;&gt;\r\n						&lt;div class=&quot;title&quot;&gt;\r\n							&lt;b&gt;Join Us!&lt;/b&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;content&quot;&gt;\r\n							&lt;p&gt;\r\n								Check with your university or contact a local Rotary club to find out if there’s a Rotaract club in your area. Contact the Rotaract club to find out how you can join its next meeting, service project, or social event. You can use the Request to join form and the respective club shall reach to you.\r\n							&lt;/p&gt;\r\n						&lt;/div&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;members&quot;&gt;\r\n						&lt;div class=&quot;member-1&quot; style=&quot;width: 42%;&quot;&gt;\r\n							&lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;\r\n							&lt;div class=&quot;number-member&quot;&gt;6,727&lt;/div&gt;\r\n							&lt;div class=&quot;numberof-member&quot;&gt;Members&lt;/div&gt;\r\n						&lt;/div&gt;\r\n						&lt;div class=&quot;member-1&quot; style=&quot;margin-left: 30px; width: 42%;&quot;&gt;\r\n						\r\n							&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;\r\n							&lt;div class=&quot;number-member&quot;&gt;132&lt;/div&gt;\r\n							&lt;div class=&quot;numberof-member&quot;&gt;Clubs&lt;/div&gt;\r\n							\r\n						&lt;/div&gt;\r\n					&lt;/div&gt;\r\n				&lt;/div&gt;\r\n			&lt;/div&gt;\r\n			&lt;div class=&quot;col-sm-5&quot;&gt;\r\n				&lt;form&gt;\r\n\r\n					&lt;div class=&quot;request&quot;&gt;\r\n						Request to join\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;form-group&quot;&gt;\r\n						&lt;label for=&quot;exampleInputName&quot;&gt;Name&lt;/label&gt;\r\n						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter Name&quot;&gt;\r\n						&lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;&lt;/small&gt;\r\n					  &lt;/div&gt;\r\n					&lt;div class=&quot;form-group&quot;&gt;\r\n					  &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;\r\n					  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;\r\n					  &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We\'ll never share your email with anyone else.&lt;/small&gt;\r\n					&lt;/div&gt;\r\n					&lt;div class=&quot;form-group&quot;&gt;\r\n					  &lt;label for=&quot;exampleInputPassword1&quot;&gt;Message&lt;/label&gt;\r\n					  &lt;textarea class=&quot;form-control&quot; rows=&quot;5&quot; id=&quot;comment&quot; placeholder=&quot;Message&quot;&gt;&lt;/textarea&gt;\r\n\r\n					&lt;/div&gt;\r\n					\r\n					&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot; style=&quot;margin: 0px 0px 0px 30px&quot;&gt;Submit Request&lt;/button&gt;\r\n				  &lt;/form&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n\r\n	\r\n\r\n\r\n	&lt;!-- ==================our partners================== --&gt;\r\n\r\n	&lt;div class=&quot;partners&quot;&gt;\r\n		&lt;div class=&quot;our-partners&quot;&gt;\r\n			&lt;h2&gt;&lt;b&gt;Our Partners&lt;/b&gt;&lt;/h2&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;partner-bar&quot;&gt;\r\n\r\n			&lt;div class=&quot;partneritem&quot;&gt;&lt;img src=&quot;/CI/assets/images/microsoft-partner.png&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;partneritem&quot;&gt;&lt;img src=&quot;/CI/assets/images/miniso-partner.png&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;partneritem&quot;&gt;&lt;img src=&quot;/CI/assets/images/oyo-partner.png&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;partneritem&quot;&gt;&lt;img src=&quot;/CI/assets/images/1-1.png&quot;&gt;&lt;/div&gt;\r\n			&lt;div class=&quot;partneritem&quot;&gt;&lt;img src=&quot;/CI/assets/images/2-1.png&quot;&gt;&lt;/div&gt;\r\n\r\n\r\n		&lt;/div&gt;\r\n		\r\n\r\n	&lt;/div&gt;                                ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_table`
--
ALTER TABLE `page_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_table`
--
ALTER TABLE `page_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;