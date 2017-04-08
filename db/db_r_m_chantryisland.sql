-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 10:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `events_id` smallint(4) UNSIGNED NOT NULL,
  `events_title` varchar(250) NOT NULL,
  `events_body` text NOT NULL,
  `events_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`events_id`, `events_title`, `events_body`, `events_date`) VALUES
(1, 'Retiring from Marine Heritage Board', 'Don Nicholson informed the Marine Heritage Board of Directors that he will be stepping aside, as a board member, effective February 28, 2017. Thank you for the opportunity to serve the community of Saugeen Shores by working and volunteering for the Marine Heritage Society,  Chantry Island Tours, and the Propeller Club.    I wish you all the best and continued success in the operation of the Chantry Island Tours. I plan to continue volunteering and support the restoration, tours, projects and help in the transition as past President and Chair.', '2017-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `images_id` smallint(3) UNSIGNED NOT NULL,
  `images_file` varchar(50) NOT NULL,
  `images_name` varchar(150) NOT NULL,
  `images_photographer` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`images_id`, `images_file`, `images_name`, `images_photographer`) VALUES
(1, '1.jpg', '', 'test'),
(2, '2.jpg', '', ''),
(3, '3.jpg', '', ''),
(4, '4.jpg', '', ''),
(5, '5.jpg', '', ''),
(6, '6.jpg', '', ''),
(7, '7.jpg', '', ''),
(8, '8.jpg', '', ''),
(9, '9.jpg', '', ''),
(10, '10.jpg', '', ''),
(11, '11.jpg', '', ''),
(12, '12.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` smallint(4) UNSIGNED NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_body` text NOT NULL,
  `news_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_body`, `news_date`) VALUES
(12, 'Straight and Neat', 'The docks are lined up and moved to a location in front of the TourBase. This entire operation took less than 1 and 1/2 hours to complete. Thanks to the 9 members who turned up to get the job done.', '2017-04-06'),
(13, 'To All a Good Night', 'Once all the docks are on dry land they are lined up neatly, checked for damage and stored for the long, cold, windy winter season.', '2017-04-06'),
(14, 'New Winch for Ramp on Island', 'Today the newly designed winch template was taken to Kuhl Machine Shop in Keady. The new location of the winch will make for much safer raising and lowering of the ramp on Chantry Island.', '2017-04-06'),
(8, 'Marine Heritage Volunteers Work on Dock Lift', 'A group of Marine Heritage Volunteers helping offload the metal walkways from Chantry Island Saturday October 8.', '2017-04-06'),
(9, 'Tilbury Bumper Pad is lifted for Storage', 'This bumper pad that sits in the water at the dock side will be repaired this winter. It needs it! By the looks of the number of volunteers needed to do the lifting it is also very heavy.', '2017-04-06'),
(10, 'Volunteers Prepare the Foating Dock for Lifting', 'This is the procedure used to lift such a heavy dock.	It requires accuracy, timing and team work to do this safely.', '2017-04-06'),
(11, 'Floating Docks from Chantry Island Lifted', 'The floating docks from Chantry Island were lifted today onto the Tarmac. The Metal walkways were also lifted off and placed for winter storage. The entire operation was done in less than 1 1/2 hours. Thanks to the volunteers and especially to Sam Welsh Contracting who took a short time out of a very busy Thanksgiving weekend to complete this annual and important job.', '2017-04-06'),
(5, 'A Night Alone on Chantry Island', 'Recently, August 31 the President of the Bluewater Astronomical Society spent a night camped out on Chantry Island.â€¨The purpose was to photograph the full moon with a celestial background and include Chantry Island Lighthouse Tower. Thanks to Captain John Willetts and Mark Clarke despite high seas the mission was accomplished. The photos have proven to be magnificent and will be a valuable asset to our organization. Thank you John Hlynialuk, Bluewater Astronomical Society.', '2017-04-06'),
(6, 'Storm Signals Flying High Again', 'Storm signals in Pioneer Park have been raised and are flying as they once were so many years ago. This set up indicates a gale from west. Much appreciation and thanks goes the volunteers and to Tom Stewart Jr. who supplied the bucket truck and his time at no charge to help this happen.', '2017-04-06'),
(7, 'Lighthouse Keeperâ€™s Cottage Looking Great Again', 'The keeperâ€™s cottage has had itâ€™s white washing completed under the supervision of Mike Sterling. Mike worked with our two students for weeks with the lime, rock salt and water to gain the correct consistency for the whitewash to stick and protect. Matt and Sebastion worked for hours and hours, day over day to get this done. The final result producing a clean, white authentic looking stone cottage just the way the Light House Keepers would have liked and kept it.', '2017-04-06'),
(15, 'Safer Winch Location Equals Safer Working Environment', 'In the past the crew would have to climb up on the ramp and unwind the winch in an awkward position. If all works as planned this procedure will occur without climbing and also from the safety of the main dock. The new winch will be located at the opposite end of the ramp, much closer to where it can be reached.', '2017-04-06'),
(16, 'New Winch for Ramp on Island', 'Over many discussions and observations with Randy Schnarr and Charles Bailey we came up with a plan. The actual template was designed by our own Marine Heritage Volunteer Randy Schnarr. Kuhl Manufacturing has been involved with the needs of MHS for many years. The cannons which were designed for the General Hunter by Mike Sterling were produced at the Kuhl facility as well.', '2017-04-06'),
(17, 'Anchor from the Ontario', 'The anchor from the ship Ontario which ran ashore in the year 1907, in front of the Blue Water on Front St. is complete now with a plaque to acknowledge the event.', '2017-04-06'),
(18, 'Anchor Crosses Many Paths', 'The anchor from the Ship "Ontario" that went aground in front of the Blue Water Hotel on Front St. in 1907 has crossed many paths since that tragic day. Presented to Hap Rogers former mayor of Southampton and onto Bill Bray, then to Jane Kramer and finally to the marine Heritage Society.', '2017-04-06'),
(19, 'BIA Southampton Christmas Sled', 'Volunteers under the direction of the Southampton BIA, have been busy painting and restoring an old Cutter sled in the Boathouse. The Sled will be used in front of the Town Hall this Christmas season.', '2017-04-06'),
(20, 'Shoreline Artists Busy in the Boathouse', 'The Shoreline Artists are busy touching up the wooden Christmas figures used in Perkins Park for the Southampton Rotarians. This is all taking place in the spacious and comfort of the Southampton Marine Heritage Boathouse.', '2017-04-06'),
(21, 'Everything is Looking Good in the Boathouse.', 'It seems that everyone enjoys a good old fashioned cutter ride. Here the newly painted Christmas decorations gather around the one horse sleigh.', '2017-04-06'),
(22, 'Tilbury Work Goes Well', 'Thanks to the faithful members of the Propeller Club the work on the Tilbury, our work boat has been well started. Six members turned up to do this work. In addition, the complete interior has been cleaned, scrubbed and dried. Next, we will be painting the interior, flipping the boat to clean and paint the bottom.', '2017-04-06'),
(23, 'Chambettes Christmas Sale in the Boathouse', 'It was a busy Saturday in the Marine Heritage Boathouse November 26. The Chambettes held their Annual Christmas sale. From what I saw it was a huge success and everyone went away happy and with the Christmas Spirit. Picture Credit goes to Sandy Lindsay.', '2017-04-06'),
(24, 'Chambettes Present Cheque to Marine Heritage Society', 'The Marine Heritage Society was pleased to receive a cheque for $1500.00 from the local Chambettes. This represents donations received connected to the September 10 "Chantry Island Sleepover". We are certainly grateful and appreciate all the support we have received from the Chambettes both in the past & present. Thank You! Picture Credit to Sandy Lindsay.', '2017-04-06'),
(25, 'MHS and Propeller Club Annual General Meeting', 'It was a fine time to dine last Friday night at the 13th annual Marine Heritage and Propeller Club General Business meeting and dinner. The Walker House in Southampton served a fine meal and over 60 supporters were in attendance. Captain Gerald Grieg from Lions Head presented the "Tales and Yarns" of our Great Lakes and Great Ships. The evening concluded with a live Auction with lots of fun and laughs. Thanks for coming and if you could not make it...we missed you.', '2017-04-06'),
(26, 'MHS and Propeller Club Annual General Meeting', 'The dinner table was full and fun. The conversation was lively and spontaneous. The meal was excellent! Photo by Sandy Lindsay.', '2017-04-06'),
(27, 'Southampton Christmas Parade', 'The Marine Heritage Society and Propeller Club Float or I mean boat was well received Friday Night at the annual Christmas Parade. Towing the Boat was a Saugeen Shores Fire pick up truck driven by Phil Eagleson our Fire Chief.', '2017-04-06'),
(28, 'Southampton Christmas Parade', 'The Peerless II outside the Boathouse in southampton. Photo courtesy Eric Rogers.', '2017-04-06'),
(29, 'Chantry Island Tour Base', 'Inside the Chantry Island Tour Base, where tickets can be purchased for the tours to Chantry Island. The Tour Base will open again in June.', '2017-04-06'),
(30, 'Doug Johnsons 91st Birthday', 'Doug Johnson is giving a short talk about his history with the Propeller Club. He is one of our strongest supporters.', '2017-04-06'),
(31, 'Boat House Southampton', 'Work on the Tilbury continues as the winter slowly approaches conclusion.', '2017-04-06'),
(32, 'Boat House Work', 'Soon our Island extensions and crossbars will be welded and drilled to serve as supports in the water holding up the metal walkways.', '2017-04-06'),
(33, 'Paddles and Pieces', 'Oars, paddles and pieces of the Tilbury are currently being painted and repaired in preparation of an early Spring and Island work.', '2017-04-06'),
(34, 'The Boat is Very Heavy', 'A heavy boat requires heavy equipment to do the job safely.', '2017-04-06'),
(35, 'The Inside looks as good as the Outside', 'Now the boat is flipped, it has to be lifted again and set back on the trailer. Thanks to all who were able to come out and help. More pictures and movies are available if you click on the Facebook link found on our first page.', '2017-04-06'),
(36, 'Liferaft Certification', 'The 12 man life raft will soon be certified and ready for remounting on the Peerless. This is a heavy, time consuming and expensive job which must be done every 2 years. We are fortunate to have the Local Fire Dept. help us keep the tour boat safe every season.', '2017-04-06'),
(37, 'Flipping the Tilbury Work Boat', 'Every year our work boat is stripped down, painted both inside and out and prepared for another season of hard work. Thanks to the Town and our volunteers this turns into a fun and productive activity.', '2017-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(4) UNSIGNED NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_level` smallint(2) NOT NULL,
  `user_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_pass`, `user_email`, `user_level`, `user_ip`) VALUES
(1, 'chantry', 'island', 'chantryisland', 'password', 'email@email.com', 0, '::1'),
(9, '1', '2', '3', '4', '1', 5, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `events_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `images_id` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
