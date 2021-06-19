-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2019 at 04:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habrorea_realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `min` bigint(20) DEFAULT NULL,
  `max` bigint(20) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `society` int(11) NOT NULL,
  `phase` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `street` varchar(200) NOT NULL,
  `plot` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `assessment_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `name`, `email`, `contact`, `min`, `max`, `type`, `size`, `city`, `society`, `phase`, `sector`, `street`, `plot`, `description`, `purpose`, `assessment_created_date`) VALUES
(4, 'Testing', 'sufyannaveed28@gmail.com', '03000000000', 5, 5, 'Residential Plots', '1000Sq.Yd', 7, 4, 4, 16, '9A', '12', 'Testing', 'Assessment', '2018-10-22 14:20:18'),
(5, 'Testing', 'sufyannaveed28@gmail.com', '03000000000', 5, 5, 'Residential Plots', '1000Sq.Yd', 7, 4, 4, 16, '9A', '12', 'Testing', 'Assessment', '2018-10-22 14:20:46'),
(6, 'Testing', 'sufyannaveed28@gmail.com', '03000000000', 5, 5, 'Residential Plots', '1000Sq.Yd', 7, 4, 4, 16, '9A', '12', 'Testing', 'Assessment', '2018-10-22 14:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `blog_image` varchar(200) NOT NULL,
  `blog_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `category`, `title`, `description`, `blog_image`, `blog_created_date`) VALUES
(1, 'Buying,Commercial,Construction,Interiors', 'Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts!', 'Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate.com is back again with Property Sales Event Islamabad offering exclusive discounts!', 'zn_bg.png', '2018-09-13 20:12:27'),
(2, 'Buying,Commercial', 'Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts!', 'Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts! Habrorealestate is back again with Property Sales Event Islamabad offering exclusive discounts!', 'zn_bg1.png', '2018-09-13 20:30:48'),
(3, 'Buying', 'Test', 'acbddddd', '43951311_1048573338655049_8054376110336507904_n.jpg', '2018-12-02 17:18:34'),
(9, 'Construction', 'Construction (in) activity', 'The fact that construction activity would not be keeping up with the expectations set forth only a couple of months before the new government came into power is really a matter of foresight. Local demand for cement started showing signs of fatigue earlier toward the start of the fiscal year. Steel bar sales also dropped. Nearly half the construction demand comes from mega development projects, while the rest is divided in commercial and housing construction. Multiple factors are hurting demand.\r\nSince Imran took over the reins, the country has been grappling with handling the twin deficits contemplating whether to go for the IMF bailout or not while reaching out to friends for support. While CPEC projects already underway are not being touched, many expected projects were cut from the list of planned expenditure. PSDP funding was slashed down by 450 schemes from the current fiscal year alone (850 in total) worth Rs1.6 trillion. This will be a substantial cut for construction.\r\n\r\nCommercial and real estate development on the other hand are also facing the heat of the economic slowdown. Not only is there a reduction in demand from the housing sector, until recently, there was a ban on high-rise construction imposed by the Supreme Court. After lifting that ban, there may be some revival in both cement and steel demand but not as much. The hike in interest rates are making cost of borrowing higher and is not a very enabling environment for investments. Meanwhile, there is a restriction on the purchase of property on non-filers.\r\n\r\nDue to depreciation of the rupee against the dollar, and perhaps weak inventory management on the part of manufacturers, given also uncertain demand environment, imported raw material for construction materials like cement and steel has become more expensive. Adding insult to injury, imported coal prices themselves have been moving up. Construction manufacturers can raise prices but at the cost of losing market share.\r\n\r\nFor steel, industries like engineering and automotive sectors are themselves witnessing a downtrend. Meanwhile, there is a pressure on prices which is why smuggled steel coming from Iran is selling more. Local steel players are now slashing prices down to stay competitive, fighting for the shrinking market space.\r\n\r\nOn the cement front too, there is an increased pressure on prices particularly in the north with the industry expanding faster than demand is growing. Exports are growing comparatively better but local demand may not keep with the pace of the additional capacity. As predicted earlier, utilization will come down, prices will have to come down too as cement makers will be fighting to retain market share. So far, they have found other exporting markets to send excess cement but they generally get lesser margins on exports which isn’t ideal in a high cost of production environment.\r\n\r\nWhat will be the saving grace? Perhaps the promised 5 million houses under the Naya Pakistan Housing Plan? Liberally speaking, BR Research estimates suggest the plan should lead to an annual 20-22 million tons of additional cement (proxy: each house on average would require 400 bags of cement). Steel demand should increase by 4 million tons (proxy: for every six tons of cement, one ton of steel is used for construction). Will this keep the sector afloat? Maybe one could tell if they knew anything substantial about the plan in the first place but information is sparse. More investigation needed.', 'consdt-640x426.jpg', '2019-01-07 08:49:28');
INSERT INTO `blog` (`blog_id`, `category`, `title`, `description`, `blog_image`, `blog_created_date`) VALUES
(10, 'Construction', '2016 DHA I&R BUILDING BYLAWS', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nBUILDING BYELAWS\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nDEFENCE HOUSING AUTHORITY\r\nISLAMABAD/RAWALPINDI\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nREVISED 2016 \r\nTABLE OF CONTENTS\r\nContents		Page\r\nChapter – I	Preliminary 	1\r\n1.	Authority 	1\r\n2.	Definitions 	1\r\n3.	Application of Byelaws 	6\r\n4.	Exemptions 	6\r\n5.	Interpretation of Byelaws	6\r\nChapter – II 	General Regulations	7\r\n1.	General 	7\r\n2.	Corner Plot	7\r\n3.	Over / Under Size Plot 	7\r\n4.	Annexation of Adjacent Extra / Trapped Land 	7\r\n5.	Sub-Division of Plots 	7\r\n6.	Amalgamation of Plots 	8\r\n7.	Leveling of Plots 	8\r\n8.	Chamfering of Corner 	8\r\n9.	Services 	8\r\n10.	Water Supply	8\r\n11.	Sewerage / Manhole 	9\r\n12.	Gas / Telephone / Electric 	10\r\n13.	Damages 	10\r\n14.	Bearing Capacity Test 	10\r\n15.	Termite Proofing 	10\r\n16.	Blockage of Street 	10\r\n17.	Lighting and Ventilation 	10\r\n18.	Blasting 	12\r\n19.	Disputes 	12\r\n20.	Possession of Plots 	12\r\n21.	Preparation of Building Plans 	13\r\n22.	Submission of Drawings	13\r\n23.	Approval of Submission Drawing 	14\r\n24.	Revised Submission Drawing	15\r\n25.	Revalidation of Submission Drawing	15\r\n26.	Oversight in Scrutiny of Drawings 	15\r\n27.	Demarcation of Plot	15\r\n\r\n \r\n\r\n28.	SOP for Demarcation Check 	15\r\n29.	Approved Drawings 	16\r\n30.	Inspection During Construction 	16\r\n31.	Addition / Alteration 	17\r\n32.	Construction without Approval	17\r\n33.	Duplicate Copy of Documents	17\r\n34.	Completion Plan 	17\r\n35.	Revised Completion Plan	18\r\n36.	Cancellation of Completion Plan	18\r\n37.	Imposition of Utility Bills	18\r\nChapter – III	Space Requirement for Building 	19\r\n1.	Residential Building Standards 	19\r\n2.	General Conditions 	19\r\n3.	Commercial Building Standards 	34\r\n4.	General Condition for Commercial 	34\r\nChapter – IV	Health and Safety Guidelines 	45\r\nChapter – V	Administrative Aspects 	46\r\nChapter – VI	Construction Byelaws 	48\r\nAnnexes	a.	Specimen Drawing  	-	Annex-A	50\r\n	b.	Fines 			-	Annex-B	51\r\n\r\n\r\n\r\n\r\n \r\nCHAPTER-I\r\nPRELIMINARY\r\n1.	Authority\r\na.	This Regulation may be called “DHA Islamabad-Rawalpindi Building Control Regulation 2000 (Revised 2016)” made by the Executive Board in exercise of the powers conferred by the Section 20 of The Gazette of Pakistan, Part-I, Act No XII of 2013.\r\nb.	It extends to all residential and commercial plots / buildings in the DHA Islamabad-Rawalpindi (DHAI-R).\r\nc.	These Byelaws supersede all the previously published Byelaws.\r\nd.	They shall come into force with effect from January 2016.\r\ne.	The DHAI-R is empowered to change or make amendments in these regulations as and when required. \r\n2.		Definitions.In this regulation and in the subsidiary instructions that may be issued from time to time, frequently referred terms have the meanings as indicated. Where any term is not defined, it shall have ordinary meanings or such as the context may apply. \r\na.		Act and Regulation. The “Act” means DHAI-R Act 2013 and ‘Regulations’ means regulations made under this Act.\r\nb.		Addition / Alteration / Revision in Plan. Means changes in already existing building or in approved building plan. \r\nc.	Amenity Plot. Plot allocated exclusively for the purpose of amenity uses, such as government offices, health, welfare, education, worship places, burial grounds, parking and recreational areas.\r\nd.	Amalgamation. The joining of two or more adjoining plots into a single plot in accordance with these Byelaws.\r\n \r\ne.	Ancillary Building. Means a building subservient to the principal building on the same plot e.g servant quarters, garages etc. \r\nf.	Apartment. Means an independent residential unit in a building consisting of at least one bedroom, a living room, a bathroom, a kitchenette and a store.\r\ng.	Arcade. A covered walk-way or a verandah between the shops and the road or street on which the shops abut. \r\nh.	Area. Means the area under jurisdiction of the DHAI-R and / or the area shown in the Master Plan of DHAI-R and including any extension or modification affected therein from time to time.\r\nj.	Balcony. Means an outside projection from a building overlooking a compound, road or courtyard and projecting in front of a room and not used for sitting purpose. \r\nk.	Basement. Means a structure wholly or partly below natural ground level / approach road level.\r\nl.	Building / House Line. Means a line beyond which the outer faces of any building except boundary wall, porch and projection may not extend. \r\nm.	Building Works. Means site excavation, erection or re-erection of a building or making addition / alteration to existing building.\r\nn.	Building Plan. Means a plan showing detailed arrangements for intended building to be constructed on allotted plot.\r\no.	Byelaws. Means the laws and regulations approved by Executive Board / Competent Authority of DHAI-R.\r\np.	Carpet Area. The net floor area within a habitable, rent-able or saleable unit excluding the area of peripheral walls but including the area of internal walls and columns.\r\nq.	Corner plot. Means a plot situated at the intersection of two vehicular streets. \r\n \r\nr.	Commercial Area. Means the area where shops, show-rooms, stores / godowns, ware-houses, other market centres, hotels, clubs, petrol and gas filling stations etc are to be constructed. \r\ns.	Commercial Building. Means a building having shops, show rooms, offices, hotels, restaurant or apartments.\r\nt.	Competent Authority. Means President / Vice President, Administrator of \r\nDHAI-R or concerned officer empowered by the Authority to approve the plans and to control building activity.\r\nu.	Covered Area. Means (for the purpose of determining the floor area) the sum of the gross horizontal areas of the floor / floors, including, verandas, 25 percent of the area covered by pergolas but excluding shades / projections (not exceeding the maximum permissible limits).\r\nv.	Existing Building. Mean a building already existing on the ground on the date of commencement of alteration / addition plan. \r\nw.	Extra Land. Any piece of land that has been left vacant adjacent to any plot / s would be the property of DHAI-R which reserves the right to allot it to any member on payment or keep it for its own use.\r\nx.	Flats. Mean block / blocks of buildings consisting of a number of residential units built in a horizontal or vertical manner exclusively designed for human habitation in the Residential / Commercial Area. \r\ny.	Floor Area Ratio. (FAR) Means the total covered area of a building or buildings on a plot divided by the total area of that plot. \r\nz.	Footprint. The portion of a plot of land covered at any level by a building or part thereof other than basement.\r\naa.	Foundation. Means a RCC structure designed to bear and distribute the load of 	building into the ground through RCC columns, pillars, beams or walls.\r\n \r\nbb.	Frontage of Corner Plot. Frontage of plots opening on more than one road will be with reference to the street no as per the possession / site plan.  \r\ncc.	Height of Building. Shall be taken as vertical measurement from the crown of front approach road to the highest part of building.\r\ndd.	Licensed Architect.  Means a person registered with Pakistan Council of Architects and Town Planners (PCATP) and on panel of DHAI-R.\r\nee.	Licensed Engineer. Means a person registered with Pakistan Engineering Council (PEC). \r\nff.	Master Plan. Means the plan showing layout of the area with schedule and supported by written statement of goals and objectives and financial implications.\r\ngg.	Mumty. A structure with a covering roof over a primary (main) or secondary staircase and its landing built to enclose the stairs for the purpose of providing protection from weather.\r\nhh.	Non-Conforming Use. Means the use of a plot or structure thereon not conforming to the purpose authorised or permitted under this regulation. \r\njj.	Open Stairs Case. Means a stairs case of which the roof must be fully open to the sky or without RCC roof and of which at least two sides must be fully open and clear of any adjoining walls of any other building. \r\nkk.	Pergola. Means a structure of which the roof must be at least 75 percent open to sky.  \r\nll.	Party Wall. Means a common wall between two adjacent buildings on independent plots. \r\nmm.	Parapet. Means a wall, whether plain, perforated or panelled, protecting the edge of a roof, balcony, veranda or terrace.\r\nnn.	Plinth. The height of finished floor level of the ground floor, measured from the top of finished surface of the road serving the plot, taken from the centre of the property line of the plot along the road. In case of more than one road serving the plot, the plinth will be measured from the reference road providing principal access.\r\n \r\noo.	Projection. Means an outer side projection from the building line to provide protection from weather and sun. \r\npp.	Property Line. Boundary line of plot which separates private property from the public property or a private property from another private property.\r\nqq.	Possession. Means handing over of a demarcated plot to the member with demarcation of four corners.\r\nrr.	Public Buildings. Means a building designed for public use such as hospital / dispensary, post office, police station, town hall, library, recreational buildings and club etc.\r\nss.	Residential Building. Means a building authorised for residential occupancy by one or more families. \r\ntt.	Residential Plot. Means a plot allotted exclusively for residential purpose.\r\nuu.	Set-back / Compulsory Open Space.  Means a space compulsorily required to be left open between the building and the plot line without any obstruction.\r\nvv.	Storey. Means the space between the floor and the ceiling of a building. \r\nww.	Structural Alteration. Means any change in the structure of a building i.e supporting members of a building such as load bearing walls, columns, beams, slabs etc. \r\nxx.	Shop–Cum-Flats.  Means provision of shops on the ground floor and flats  / offices on the subsequent floors in commercial area.\r\nyy.	Sector Shops / Convenient Stores. Means a row of shops in residential area for routine utility requirements.\r\nzz.	Stores / Godowns. Means a building / buildings meant for storage of material. Those goods are not of inflammable or objectionable character.\r\naaa.	Septic Tank. Means a tank in which sewage is collected and decomposed before its discharge into a public sewer or Soakage Pit.\r\n \r\nbbb.	Soakage Pit. Means a pit filled with aggregate, boulders or broken bricks and intended for the reception of wastewater or effluent discharged from a Septic Tank.\r\nccc.	Trapped Land. Land which is not accessible / approachable by the Authority.\r\nddd.	TP&BC Directorate. Town Planning & Building Control Directorate. \r\n\r\n3.	Application of Byelaws\r\na.	Every person who, within the limits of DHAI-R, intends to carry out addition or alteration to existing building or demolish the existing building or erects or re-erects a building shall comply with the requirement of these Byelaws.\r\nb.	A building plan shall be approved only for the specified purpose of the plot mentioned in allotment letter.\r\n4.	Exemptions.	Application of these Byelaws can be relaxed by Competent Authority provided there is sound justification from engineering, town planning, architecture and all other relevant aspects.\r\n5.	Interpretation of Byelaws.	In case of any ambiguity in interpretation of any Byelaws, \r\nDHAI-R reserves the right to deliver / implement the interpreted contents of such Byelaws.\r\n	\r\n\r\n \r\nCHAPTER-II\r\nGENERAL REGULATIONS\r\n1.	General. These regulations have been framed with a view to facilitate construction by the members. Due relaxation has been ensured while specifying covered area and other details. The designers have been extended leverage to contribute such designs which add to the overall complexion of a healthy environment / development:- \r\na.	Any one who intends to carry out building works within the boundary of DHAI-R should strictly comply with the requirement of these BYELAWS. \r\nb.	The plot shall be strictly utilized for the purpose it has been allotted. To preserve the sanctity of planning, NO DEVIATION SHALL BE PERMITTED. \r\n2.	Corner Plot. The owner of corner plot will be required to pay additional (10% of original total) cost as laid down by DHAI-R.\r\n3.	Over / Under Size Plots. Plots measuring less area as compared to standard size plot will be remitted cost of land only. Similarly those, measuring more than the standard size plot shall be required to pay for the extra / additional area as per the rates decided by DHAI-R. \r\n4.	Annexation of Adjacent Extra / Trapped Land. In case where extra land is available adjacent to the plot, it may be purchased by the member. Rates and permission of such cases is subject to approval by DHAI-R. Construction on extra land is not allowed without changing its category to constructable. \r\n5.	Sub-Division of Plots \r\na.	Residential. Sub-division is not allowed for 500 sq yds and below cat plots however 1000 sq yds plots can be divided into two units provided 1000 sq yds plots lies in the line with 500 sq yds plots after payment of dues as per DHAI-R policy. Amalgamated plot can be subdivided into two separate plots provided the construction is done according to the Byelaws of smaller plot, after payment of dues as per DHAI-R policy.\r\nb.	Commercial. Sub-division is not allowed.\r\n \r\n6.	Amalgamation of Two Plots. With specific permission, adjacent plots / land may be combined together to form a single unit upto maximum of 4 kanals (residential) including extra land (any category) provided entire piece of land has single ownership. Such unit when constructed will not be sub-divided unless complete building is dismantled. Such amalgamated plot / land including green area will be governed by applicable DHAI-R Building Byelaws.\r\n7.	Levelling of Plots. In case of any abnormality in the plot such as ditch or mound etc, DHAI-R will not be responsible for any protective work or development within the plot line. However if adjacent plot/s are at higher level from the reference road, the member can excavate the adjacent plot upto reference road level for construction and the safety of boundary wall. Excavation in adjacent plot below the reference road level will not be permitted.\r\n8.		Chamfering of Corner. For smooth flow of traffic at turning, the corner of a plot bounded by two roads shall be tapered / chamfered by a standard i.e 6 ft x 6 ft on either side from the corner for all categories except commercial plots. \r\n9.		Services. The DHAI-R will provide roads including all services and the members are required to plan extension of these services to their buildings accordingly. Further extension of the services to other users is strictly disallowed. Defaulting members are liable to disconnection of services and financial penalties.\r\n10.		Water Supply  \r\na.	Application for water connection shall be made on the prescribed form to the DHAI-R.   \r\nb.	No person is permitted to install motor / pump on the water supply line. Only one connection shall be provided for each building. \r\nc.	Construction of under ground and overhead water tank is mandatory. \r\nd.	Boring of any type for the purpose of water, sewerage, drainage etc is strictly prohibited in the territory of DHAI-R except where found necessary.\r\ne.	Residential \r\n(1)	No water point / tap will be left outside the boundary wall. \r\n(2)	Construction of under ground water tank is mandatory but not on the slope side and be so located / designed that bowzer filling is facilitated.\r\n(3)	Member found violating the instructions on water supply will be asked to pay violation charges as per DHAI-R policy.\r\n \r\n(4)	Washing of car on the road is not allowed.\r\n(5)	Flow of water through porch on the road is not allowed. \r\nf.	Commercial\r\n(1)	Separate water connection for all owners of flat in commercial building.\r\n(2)	Over Head water tank must consist of two portions, one for fire fighting and other for storage purpose.\r\n(3)	GI pipe of 2.5 dia should run from top to basement.	\r\n11.	Sewerage / Manhole. Byelaws regarding house connection to main sewer are as under:- \r\na.	WC discharge be connected with the DHAI-R manhole through septic tank.\r\nb.	Wash room and kitchen drainage be connected direct to the over flow manhole of septic tank. It shall not be connected to the septic tank.\r\nc.	Rain water / storm water be disposed off in open drains or on the adjacent roads as per design of the said Phase. It should not be connected to the sewer lines.\r\nd.	Members are required to construct proper manholes and septic tanks (only RCC construction).\r\ne.	Members are required to get their septic tanks inspected before covering their tops.  \r\nf.	Connection to the main sewer line shall be provided by DHAI-R on completion of house / building and member will not tamper with main sewer line. Defaulters will be charged as per DHAI-R policy issued from time to time.\r\ng.	Where a resident / member excavates basement as per his requirement and decides to have bath rooms / toilets, the sewerage disposal will be through mechanical pumps by the resident. \r\n \r\n12.		Gas / Telephone / Electric. The services have been laid by DHAI-R and individual connection to houses be obtained from respective departments in accordance with respective departmental regulations. \r\n13.		Damages. No body is permitted to damage roads and services laid by DHAI-R. In case of extension of services, if any damage is likely to be caused to road, sewer line, rain water line etc such work shall not be undertaken without prior approval of DHAI-R. In case of damages, DHAI-R will impose penalties and cost of repair work will be recovered from member.\r\n14.		Bearing Capacity Test. Bearing capacity tests will be arranged by the member through \r\nDHAI-R approved laboratory. The approved list is available in TP&BC Directorate.\r\n15.		Termite Proofing. As there is a positive evidence of the presence of termite in \r\nDHAI-R, members will ensure termite-proofing treatment during construction stage.\r\n16.		Blockage of Street \r\na.	No part of any street shall be used in connection with the construction, repair or demolition of any building without prior written permission of DHAI-R. Street will not be blocked under any circumstance. \r\nb.	No excavation shall be made in any street for utility without prior permission from \r\nDHAI-R.\r\nc.	Defaulters will have to pay charges as per DHAI-R Byelaws.\r\n17.		Lighting and Ventilation\r\na.	Size of External Openings\r\n(1)	Every room, other than rooms used predominantly for the storage of goods, shall be provided with natural light and natural ventilation by means of one or more openings in external walls. These openings shall have a combined area of not less than 10% for habitable rooms and 7.5% for other rooms of the floor space of such opening and the whole of such openings shall be capable of allowing free and uninterrupted passage of air.\r\n \r\n(2)	Area for openings in case of warehouse, godown, storage places etc shall not be less than 5% of the floor space unless the space is mechanically ventilated.\r\nb.	Size of Internal Openings. Unless the light and ventilation requirements are met by an air well or ventilation duct, all internal habitable rooms must have openings in internal air wells in addition to door openings not less than 7.5% of the floor area of such room. Access for maintenance of shaft be provided at level from where the shaft commence.\r\nc.	Internal Air Wells\r\n(1)	Habitable rooms may receive daylight and natural ventilation from internal air wells which shall conform with the following minimum sizes:-\r\n(a)	For buildings upto 2 storeys, 20 sft with minimum width of well 5 ft.\r\n(b)	For buildings with 3 to 5 storeys, 100 sft with minimum width of well 8 ft.\r\n(c)	For buildings higher than 5 storeys, 100 sft plus 10 sft for each additional floor over storeys and minimum width of well 10 ft.\r\n(2)	Where only kitchens, WC and bath rooms receive daylight and ventilation from air wells, their sizes shall conform with the following as minimum:-\r\n(a)	For building upto 2 storeys, 25 sft with minimum width of well 3 ft.\r\n(b)	For buildings with 3 to 5 storeys, 50 sft with minimum width of well 5 ft.\r\n(c)	For building higher than 5 storeys, 50 sft plus 5 sft for each additional floor with minimum width of well 5 ft.\r\nd.	Permanent Openings in Kitchen. Every kitchen shall have openings for permanent ventilation into the external air space not less than 15 % of its floor area.\r\n \r\ne.	Water Closet, Bath Room & Ablution Places. Every water closet, urinal stall and bath room and ablution area shall be provided with natural lighting and ventilation by means of one or more openings in external walls having a combined area of not less than 2 sft per water closet, urinal or bath room except where adequate and permanent mechanical ventilation is provided and which discharges into an open space.\r\nf.	Garages. Every garage shall be provided with opening of not less than 5% of the floor area for ventilation and lighting incorporated in a wall or in the door.\r\ng.	Staircase. All staircases which are enclosed shall be provided with adequate lighting and ventilation from openings not less than 7.5% of the staircase area.\r\nh.	Mechanical Ventilation & Central Air Conditioning Waiver-Minimum Requirement\r\n(1)	Where undertaking for central air conditioning and permanent mechanical ventilation is provided, the relevant clauses of these regulations dealing with natural ventilation, lighting and heights of rooms may be waived.\r\n(2)	Where permanent mechanical ventilation in respect of lavatories water closets, bath rooms or corridors has been provided, conditions relating to natural ventilation and natural lighting under these Regulations shall not apply to such lavatories water closets bath rooms or corridors. \r\n18.	Blasting. Blasting is not allowed for any type of work in DHAI-R area.\r\n19.	Disputes. No member (by virtue of one’s status) is allowed to stop the construction activity of other members. Any dispute / interpretation of Byelaws shall be referred to DHAI-R.\r\n20.		Possession of Plots. Following procedure is laid down: -\r\na.	On clearing of all dues members should apply for possession of plots on prescribed form. \r\nb.	A site plan indicating details (gate, manhole and water point location) shall be provided to the member.\r\n \r\n21.		Preparation of Building Plans. For preparation of building plans (new or alteration) the member should engage a licensed architect and structural engineer on the panel of \r\nDHAI-R.\r\n22.		Submission of Drawings. The member shall submit alongwith the application, three sets of drawings (in ammonia prints) duly signed and stamped by the DHAI-R registered Architect along with the soft copy covering following details: -\r\na.	Size of sheet should be 30x40 inches (Anx A) and all details be given at a minimum scale of 1 / 8 inch on same sheet.\r\nb.	The plans of basement, ground floor and first floor, if any and the roof alongwith mumty.\r\nc.	Front elevation, longitudinal section passing through stairs and site plan / key plan showing width of the road. In case of corner plot 2x elevations are required. \r\nd.	Elevation and section of boundary wall, gate, ramp and water channel with respect to adjoining road / street.\r\ne.	External dimensions of building.\r\nf.	Internal dimensions of all rooms.\r\ng.	The position and dimensions of all projections beyond the walls of the building.\r\nh.	Roof plan showing the location / dimension of over head water tank, mumty. \r\nj.	Total height of building with reference to reference point including level of finished floor and split-levels (levels be indicated on plans also).\r\nk.	Location of reference service manhole and its invert level and location of water connection shall be clearly shown on submission drawing.\r\nl.	Thickness and X-section of RCC structures.\r\nm.	Location and size of overhead and underground tank.\r\nn.	The sewerage line, waste water / soap line and drainage line should be laid independently and marked properly on the plan. The soap water should not be connected directly to the septic tank. It should be connected to the over flow manhole (constructed within the plot line) of septic tank. A water channel of 4x4 inches would be constructed along the main gate line. This drain would be suitably connected to over flow manhole of septic tank through a 1 inch dia pipe. \r\n \r\no.	Schedule of open / covered areas.\r\np.	Schedule of doors and windows.\r\nq.	Covered area calculation block plan.\r\nr.	Signature of Owner and the Architect on drawings along with required DHAI-R forms.\r\ns.	Drawings must be of acceptable Architectural standards. \r\nt.	Attested copy of ID Card, Allotment letter, Possession form, Site Plan, NOC form duly verified from Transfer & Record Directorate and Finance Directorate, 3x set of submission drawings (ammonia print), soft copy of drawing (in CD), bearing capacity report, duly signed undertaking by the architect and structural engineer on a prescribed form and prescribed dues (scrutiny fee water charges) as decided by DHAI-R from time to time.\r\nu.	Soil test report duly signed and stamped by the DHAI-R registered firm along with 1xset of structural drawings on A3 sheet duly signed by the DHAI-R’s approved structural engineer along with the certificate on letter head that the structure is safe. These drawings showing layout and sectional details of foundations, beams columns, lintels, slabs, under ground and over head water tanks. This set of drawing is only for DHAI-R record and DHAI-R has no responsibility regarding the stability / safety of the structure. In case of commercial drawings, the structure should be duly vetted by the DHAI-R approved vetting engineer.\r\nv.	Security charges as per DHAI-R’s approved rates. These will be refunded at the time of issuance of completion certificate.\r\nw.	Isometric color view on a separate A4 paper with a soft copy (JPG).\r\n\r\n23.		Approval of Submission Drawings. Following procedure will be followed:-\r\na.	The member will submit the plans with DHAI-R for approval as per DHAI-R Byelaws.\r\nb.	Plans not conforming to DHAI-R Byelaws will be returned to the architect along with reasons by mail / may be collected by hand, otherwise member can collect approved drawing with permission letter and SOP for demarcation check within 15 working days.\r\n \r\n\r\nc.	In case of observation on drawings the time for approval will be 15 working days after re-submitting the drawing after rectifying the observation.\r\n24.	Revised Submission Drawing. If any change (demolition or addition) in the building plan is required, the revised drawing should be submitted for approval before making any changes. Member can collect approved revised drawing within 15 working days.\r\n25.		Revalidation of Submission Drawing. The approved submission drawing is valid for three months and if construction of house is not started within three months than member will have to revalidate the drawing from DHAI-R after payment of prescribed charges.\r\n26.		Oversight in Scrutiny of Drawings. Any oversight in the scrutiny of documents and drawings at the time of approval of the building plan does not entitle the member to violate the Byelaws. \r\n27.	Demarcation of Plot. Demarcation of plot will be done when the submission drawings have been approved by building control section of TP & BC Directorate.\r\n28.	SOP for Demarcation Check. Members are advised to follow steps given below for demarcation of plot before taking over construction and thereafter for confirmatory check by survey team of DHAI-R:-\r\na.	Step-I. Member to deposit the inspection chart with Town Planning Section of TP&BC Directorate and also provide the following items on the site at the time of demarcation:-\r\n(1)	4 pieces of PVC 4 inch dia pipe 2-½ ft length each.\r\n(2)	Cement, aggregate / sand / water etc.\r\n(3)	Required labour with pick, shovel etc.\r\n(4)	Pillars will be grouted / installed by the survey team in the presence of the owner / contractor which should not be disturbed or removed till the final demarcation of boundary wall upto DPC level.  \r\nb.	Step-II. Inspection Chart will be forwarded to Building Control Section for inspection of building construction \r\n \r\nactivities after completion of initial demarcation. Building Control Section has to ensure that the member gets the 2nd demarcation on lean after excavation of the boundary wall before starting of any construction activity on the inner building in case of no basement. However, in case of houses with basement member has to ensure demarcation on lean & DPC level of boundary wall whenever the basement is completed.\r\nc.	Step-III. Before taking over the construction of boundary wall, the member must intimate TP Section for final demarcation on lean / DPC level. Town Planning as well as Building Control Section will also ensure that the plot is finally demarcated on lean / DPC level of boundary wall before taking any further construction.\r\nd.	Note\r\n(1)	The subject SOP is laid down for the convenience of members / contractors in order to avoid any violation / embarrassment at later stage. Please follow these SOP strictly otherwise the members will be held responsible of any violation.\r\n(2)	Rs 1,000.00 (one thousand) and Rs 500.00 (five hundred) will be charged on revision of initial demarcation on the disturbance of pillars and issue of new Inspection Chart in case of loss respectively.\r\n(3)	It is primarily the responsibility of member to ensure the inspection of work on each stage of construction as per Inspection Chart and signature of building inspector of DHAI-R. If any anomaly occurs on later stage, member will be responsible.\r\n29.	Approved Drawings. The member / contractor must keep one set of approved drawings on site, which may be made available to DHAI-R staff during inspection. In case of non availability of approved drawings, fine would be imposed as per DHAI-R policy.\r\n30.	Inspection during Construction.	It is the responsibility of the owner to get the site inspected as per the stages mentioned in inspection chart.\r\n \r\n31.	Addition / Alteration. No construction, addition or alteration shall be allowed unless drawings are approved by DHAI-R. Any change after the approval of submission drawing will be regularized through submission of revised drawings. \r\n32.	Construction without Approval. Any construction started / carried out without prior approval of authority shall be liable to be demolished (partly / wholly) with or without notice at risk and cost of owner.\r\n33.	Duplicate Copy of Document/s. Copy of submission drawing / completion drawing / CD / soil test report may be given to owner (if available in record) by charging Rs 5,000/- for each document.\r\n34.	Completion Plan. The member shall obtain the House Completion Certificate after rectifying the observations / violations (if any) within 90 days from the date of sending the violation notice by DHAI-R, failing which fine will be imposed as per DHAI-R fines. The documents to be attached with completion plan are as under:-\r\na.	2x set of drawings (ammonia print) duly signed and stamped by the registered \r\nDHAI-R Architect.\r\nb.	Prescribed dues as decided by DHAI-R from time to time.\r\nc.	Inspection Chart duly signed by the concerned Officer during construction.\r\nd.	Soft copy of drawing.\r\ne.	After the receipt of completion drawing, DHAI-R technical staff shall arrange to inspect such work and after inspection either approve or disapprove or regularize minor deviations with penalty at rates as approved by the DHAI-R from time to time.\r\nf.	In case of no violation, completion case shall be put upto the DHAI-R Executive Board for final approval.\r\ng.	In case of violation the member shall be asked either to pay the prescribed penalty against minor deviations or completion plan shall be returned unsanctioned with an order for demolition of the subject un-authorized construction.\r\nh.	In case member intends to construct the building in phases, the sequence of construction in phases duly numbered shall be indicated on the submission drawing. For purpose of obtaining NOC of a building, the minimum requirement is completion of ground floor in all respect.\r\n \r\nj.	If member wants to occupy the building partially / completely then he should submit an application for occupation of house. If member occupies the building without getting approval from DHAI-R penalty / fine would be imposed as per DHAI-R policy. Member can apply for completion certificate after occupying his house but completion certificate must be obtained within 3 years from date of approval of submission plan, failing which penalty would be imposed as per DHAI-R policy. \r\nk.	Illegal occupants and violators will not be entertained with social & civic facilities of DHAI-R (i.e Jacaranda Club, Water bowzer, Ambulance, concession in Jungle restaurant, Car stickers and provision of cable network etc).  \r\n35.	Revised Completion Plan. If at any stage after the completion plan of building has been issued, any additions and alterations are made within the same building, approval of such revised completion plan from DHAI-R shall be mandatory.\r\n36.	Cancellation of Completion Plan. If at any stage after getting completion a member found violating DHAI-R Byelaws:- \r\na.	He / she will be served three notices in a span of three months and completion will be cancelled after issuance of final notice. \r\nb.	The fine of Rs 2,000/- month will be imposed starting one month after issuance of final notice till the removal of violations and applying for revised completion.\r\nc.	If any member fails to pay the fine within specified time period and persistently violates the Byelaws, then DHAI-R reserves the right to disconnect / discontinue services till payment of fine and all the violations are rectified / cleared which will be verified by TP&BC Directorate.  \r\n37.	Imposition of Utility Bills. The utility bills will be issued as soon as member occupy / partially occupy the house or get the completion certificate.\r\n \r\nCHAPTER-III\r\nSPACE REQUIREMENT FOR BUILDINGS\r\n1.		Residential Building Standards. All residential houses shall conform to following specifications / standards:-\r\nArea of Plot \r\n(Sq yds)	Allowable Covered Area (G.F)	Allowable Covered Area (F.F)	COS / Setback\r\n			Front\r\n(ft)	Rear\r\n(ft)	Side*\r\n(ft)	Side\r\n(ft)\r\nUpto 200	85% (including car porch)	F.P of G.F Area 	5	3	Nil	Nil\r\n201 to 249	75% (including car porch)	F.P of G.F Area	7	3	3	Nil\r\n250 to 399	70% (including car porch)	After leaving COS\r\n90% of GF\r\nincluding car porch area\r\nOR\r\nFP of GF area less car porch	10	3	3	3\r\n400 to 600	68% (including car porch)		15	5	5	5\r\n601 to 800			18	5	5	5\r\n801 and above	60% (including car porch)		20	5	5	5\r\nNotes\r\na.	*Along car porch side.\r\nb.	Front setback for standard plots may be relaxed upto 2 ft on payment of following regularization charges by the member:-\r\n(1)	Upto 1 ft	-	Rs 1,00,000/-\r\n(2)	Upto 2 ft	-	Rs 2,00,000/-\r\n2.	General Conditions\r\na.	Covered Area\r\n(1)	Shades shall not be counted in covered area.\r\n(2)	In case of pergola, 25% of its area shall be counted for calculation of covered area. However, pergola shall not be permitted within the set-backs / compulsory open spaces.\r\n \r\n(3)	The basement can be constructed 100% after leaving the COS.\r\n(4)	Structures such as fiber glass, steel structure would be taken in the covered area.\r\nb.	Basement. Generally open / closed basement is allowed to all members irrespective of topography of plots but with following conditions:-\r\n(1)	In case of open basement or set-back is less than 5 ft an NOC is required from the neighbour who has an existing structure so that the area can be dug in till the boundary wall of his neighbour. No such NOC is required in case of closed basement.\r\n(2)	Frontal set-back can be dug upto 3 ft only.\r\n(3)	In case of any damage to the adjacent building, the owner of the plot and Structural Engineer / Architect shall be jointly responsible for such damages and shall have to use proper engineering techs in order to avoid damage to neighbouring buildings. DHAI-R in no way shall be held responsible for such damages.\r\n(4)	The basement shall not be exposed more than 4 ft 6 inches from crown of the abutting road / zero level.\r\n(5)	The side set-backs in open basement may be covered but there level should be maximum +2 ft from reference point.\r\n(6)	Construction of ramp, stairs / steps leading to the basement is permitted within in the side and rear set-back without any super structure over them.\r\n(7)	Clear height of the basement shall not be less than 8 ft 6 inches.\r\n(8)	In all cases, the building should look like two storey and the total height of building from the reference point shall not be more than 37 ft.\r\n(9)	Basement Wall / Retaining Wall adjacent to completed houses / endangering neighbouring structure should be completed within 15 days from the date of commencement of excavation.\r\n \r\n(10)	All the retaining walls of the open / closed basement should be of RCC.\r\n(11)	In case of open basement member can excavate 2 ft into the adjacent plot with the permission of the DHAI-R Building Control Section by acquiring NOC but the backfilling should be done with sand. In case, of adjacent house is constructed, the member would not be allowed to excavate.\r\n(12)	If services, such as bath and kitchen etc are provided in the basement, the owner must provide mechanical disposal from the basement to the upper level in all cases (irrespective of levels of DHAI-R mains), so that there is no possibility of back flow in case of chockage of the sewer lines. DHAI-R will not be responsible for the consequences in any case. \r\n(13)	Cost of additional services work shall be borne by the member. \r\n(14)	The entry to the basement from rear and side set-back is allowed.\r\n(15)	In no case the basement shall be allowed in the minimum prescribed set-backs. \r\n(16)	Closed Basement, vaults, cellars and other structures, wholly or partly below the ground level / approach road level, shall be allowed provided minimum \r\n1 x emergency exit should be provided.\r\nc.	Reference Point. Reference point shall be the intersection of gate centre line and reference road crown. \r\nd.	Finish Floor Level. Finish floor / Plinth level of ground floor should not be more than \r\n4 ft 6 inches.\r\ne.	Set-back Level. The level of set-backs should not be more than +2 ft but corner side set-back level may be raised upto level of adjacent road.\r\nf.	Height of the Building & Height of Floors. Maximum height of the building including water tank / mumty or any structure should not exceed 37 ft from the reference point. In exceptional cases where site permits increase in height maximum upto 1 ft will be allowed after payment of Rs 15,000/- and approval from Competent Authority. \r\n \r\ng.	No of Storeys. Maximum two storeys (ground + first) are permitted. Number of storeys will be counted from the reference street / road. \r\nh.	Septic Tank. Septic tank should be constructed with their own RCC walls and should have a minimum distance of 3 ft from front boundary wall. Any other boundary wall should not be used for construction of septic tanks. \r\nj.	Projection / Shade.  Sun shades to be kept as under:-\r\n(1)	In front set-back not more than 3 ft.\r\n(2)	In side set-backs not more than 2 ft 6 inches for plots equal to or larger than 400 sq yds and 1 ft 6 inches for plots below 400 sq yds.\r\n(3)	In rear set-back not more than 2 ft 6 inches for plots equal to or larger than 400 sq yds and 1 foot 6 inches for plots below 400 sq yds.\r\n(4)	Fiber glass coverage on window top to avoid direct sun or rain will be allowed only till width of window. Depth of such projections should not be more then \r\n2 ft 6 inches in side and rear set-back and 3 ft in front set-back for 400 sq yds and above plots. For plots less then 400 sq yds side shade width should not be more than 1 ft 6 inches.\r\n(5)	No rooms shall be constructed on the projections / shades projecting beyond the building line.\r\n(6)	Maximum fall of shade should not be more than 3 ft.\r\n(7)	No projection beyond these limits weather permanent or temporary will be allowed in any set-back. \r\n(8)	Design element on front / side shade (In case there is open space / nullah / road on that side) may be allowed at first floor to maximum allowable width of shade. No design element allowed on a side of neighbouring plot.\r\n(9)	No other structure of any type is allowed in compulsory open spaces.\r\n \r\nk.	Open Stairs Case\r\n(1)	The plots having rear setback of 5 ft and more can have spiral stair in rear setback after leaving a clear distance of 2 ft 6 inches from rear plot line. Straight stairs having the width of 2 ft 6 inches also allowed in rear setback. \r\n(2)	Open stairs are not allowed in side setbacks.\r\n(3)	Mumty not allowed over open stairs.\r\nl.	Mumty. Mumty conforming following specifications / conditions is allowed and may be used for storage / habitation with toilet whereas window(s) towards neighbouring plot / house other than staircase is / are not allowed:-\r\n(1)	Location. Mumty can be constructed over primary (main) or secondary staircase (within the building line).\r\n(2)	Width. Maximum width of mumty including design element shall not be more than half the average width of plot. \r\n(3)	Height. Height of mumty including design element shall not be more than 11 ft from top of 1st floor roof slab. Additional 1 ft increase in height of mumty (maximum upto 12 ft), may be allowed on payment of regularization fee of \r\nRs 15,000/-. \r\n(4)	Covered Area. Covered area of mumty vis-à-vis area of under mentioned plot may be allowed as shown in front of each, whereas for plot having area \r\nin-between under-mentioned area, covered area of mumty will be calculated applying %age of lower side plot area:-\r\nArea of Plot (Sq yds)	% Age 	Covered Area of Mumty (Sq Ft)\r\n125	20	225\r\n200	13.5	245\r\n250	11	250\r\n300	11	300\r\n400	11	400\r\n500	9	405\r\n600	9	486\r\n800	9	648\r\n1000	9	810\r\n\r\n \r\n(5)	Machine room for lift / elevator and design element will be part of mumty and its covered area will be included in covered area of mumty.\r\n(6)	Shade / Projection. As per shades / projections of the building.\r\n(7)	Structure(s) including raised solar panel(s) or geyser(s) on roof of mumty is / are not allowed.\r\nm.	Entry Gate(s) \r\n(1)	Position / Location of the gate(s) will be kept as per DHAI-R approved site plan part of the master plan. \r\n(2)	Two gates shall only be allowed in case of corner plots or plots having roads on any two sides. Non-corner plots having frontage 70 ft and above can have two gates on front side but services such as transformer, DB, pole etc in front of second entry / gate will not be shifted. Charges for second gate on one side will be same as opening on two road charges. \r\n(3)	Standard width of main gate including wicket gate and excluding pillars will be upto 20 ft and for corner plots width of 2nd gate is upto 14 ft. Width of gate pillars (inclusive of boundary wall) should not be more than 1 ft 6 inches, however width of main gate may be increased upto 25 ft after payment of regularization fee as mentioned in the fines. But services such as transformer, DB, pole etc falling in front of increased width will not be shifted. Increased width of gate if found in inches will rounded off and taken as whole foot on the higher side.\r\n(4)	Provision of any type of arch / design element over the gate(s) is not allowed.\r\n(5)	Wicket gate upto 3 ft width in extra land having opening on road is allowed conditionally that services such as transformer, DB, pole etc falling in front of second entry / gate will not be shifted. The gate size can be increased maximum upto 14 ft by paying charges @Rs 25,000/- per running foot. In addition, charges for gates opening on two roads OR having frontage more than 70 ft will also be applied. Maximum two gates including in extra land will be allowed.\r\n \r\nn.	Ramp (Driveway) in Services Area. Ramp in front of gate in services area can be constructed subject to following conditions and specifications:-\r\n(1)	For laying / rectifications of fault / re-laying of services including electricity, telephone, cables, gas, water supply etc four (4) beneath ramp minimum 6 inches dia independent conduits will be provided by the member.\r\n(2)	Ramp at start of property / plot line should be maximum 18 inches high or at slope of 1:7 and its height will be taken from intersection of gate centre line & reference road crown. Profile / slope of the ramp should be as under:-\r\n(a)	Where footpath does not exists, the ramp from property / plot line (gate) may be extended maximum upto the outer edge of storm water drain kerb stone along the road.\r\n(b)	Where footpath exists, the ramp from property / plot line (gate) may be extended maximum upto the home-side (outer) edge of footpath / kerb stone.\r\no.	Size of Rooms. The minimum area of a room meant for human habitation shall not be less than 80 sft.\r\np.	Car Porch. Maximum size of car porches vis-à-vis plot area is as under:-\r\nSer	Area of Plot (Sq yds)	Maximum Size including Side Setback\r\n(1)	Above 800	32 ft x 35 ft\r\n18 ft x 18 ft (2nd Car Porch only for Corner Plots / Plots having opening on two roads)\r\n(2)\r\n	400 to 800	30 ft x 35 ft\r\n18 ft x 18 ft (2nd Car Porch only for Corner Plots  / Plots having opening on two roads)\r\n(3)\r\n	201 to 399\r\n	20 ft x 18 ft\r\n12 ft x 18 ft (2nd Car Porch only for Corner Plots  / Plots having opening on two roads)\r\n(4)\r\n	Upto 200\r\n	14 ft x 18 ft\r\n10 ft x 18 ft (2nd Car Porch only for Corner Plot  / Plots having opening on two roads)\r\n\r\n \r\nNotes\r\n(1)	Two (2) car porches shall be allowed for corner plots, plots with two entries and non-corner plots having frontage 70 ft and above.\r\n(2)	Second car porch shall fall within the permissible projection / shade but with side car porch columns resting over the boundary wall.\r\n(3)	Covered area of porch(s) shall be counted in the total covered area irrespective of its size / shape etc.\r\n(4)	The distance of porch roof from boundary wall may be allowed as 5 ft and porch columns should be kept 8 ft from plot line.\r\n(5)	For plots having area 250 sq yds and above porch columns shall have a clear distance of at least 8 ft from the outer edge of front boundary wall, however projection of 3 ft-wide towards front only is allowed.\r\n(6)	For plots having area less than 250 sq yds porch columns shall not extend beyond the front building line, however projection from porch column towards front can extend upto 2 ft 6 inches.\r\n(7)	The larger size porches can be constructed after leaving the COS.\r\n(8)	Storm water from the roof of porch shall be drained within the plot.\r\n(9)	For 200 & 125 sq-yards, porch columns shall not extend beyond the front building line, however, projection from porch column towards front only can be extended by 2 ft 6 inches.\r\n(10)	High car porch is not allowed with columns resting over the boundary wall. They can however be permitted if kept clear of the COS.\r\n \r\n(11)	Construction above / below the porch (basement) is allowed after leaving compulsory open spaces.\r\n(12).	Gap above boundary wall upto roof level between porch columns may be covered with inward louvers / lattice / solid wall or Jali.\r\n(13).	Design element on porch can be constructed upto the allowable width of building shade at front & sides. The design element should be without roof / pergola and it will not be counted in covered area. The design element can be constructed after approval from Competent Authority.  \r\n(14).	The min depth of porch for 1Kanal and above plots should be 15’ and less than 1 kanal plots is 12’. \r\nq.	Boundary Wall\r\n(1)  	Member can construct a boundary wall within his property line. If boundary wall of 4½ inches width is constructed then pillar of 9 inches x 9 inches at 10 ft distance must be provided. If member wants to construct a common boundary wall, approval of both neighbour should be necessary and affidavit in this regard from both neighbours to DHAI-R should be mandatory.\r\n(2)  	Both neighbours shall have full right to use it on their respective sides / top. However, no space from right of way of road / street shall be utilized for this purpose. \r\n(3)		Maximum height of rear boundary wall should be 6 ft above the level of rear road.\r\n(4)		Maximum height of left / right / front side boundary wall should be 7 ft 6 inches from the highest point of the road in front of plot.\r\n(5)		Minimum height of boundary wall should be such to ensure the privacy of the adjacent plot.\r\n(6)		The boundary wall should be an RCC or brick masonry wall. \r\n(7)		The front / side boundary wall (If there is open space / nullah / road on that side) may be constructed with grill or any other see-through material. \r\n(8)		A safety grill upto 2 ft 6 inches can be provided above boundary wall.\r\n \r\n	(9)	If two adjacent plots are owned by single owner or different owners having blood relation (parents & their children, brothers and sisters or husband and wife) then the Boundary Wall between the two plots can be exempted / omitted subject to providing an application to DHAI-R by the owners (jointly) on Judicial Stamp Paper.\r\nr.	Bay Windows.  For plots equal to or more than 500 sq yds, 2 ft 6 inches wide bay window and length 10 ft can be provided in frontal set-back. For plots less than 500 sq yds 2 ft 6 inches wide bay window can be provided in frontal set-back only. Area of bay window counted into total covered area. For plots having extra land up till 10 ft on rear or side bay window of 2 ft 6 inches width allowed on ground floor only. \r\ns.	Parapet Wall. Parapet wall maximum upto 5 ft and minimum upto 2 ft 6 inches height may be allowed. However, height of parapet wall can be kept less than 2 ft 6 inches for design purpose only, provided that, that specific area of roof should be unapproachable in normal conditions. \r\nt.	Main Stairs. Every building shall have a clear width of steps of stairs not less than 3 ft, with riser maximum upto 7 ft 6 inches and tread minimum upto 10 inches.\r\nu.	Area of Servant Quarter. Area of servant quarter excluding toilet should not be less than 80 sq ft.\r\nv.	Drain under Gate. A water channel of 4 inches x 4 inches would be constructed along the main gate line. This drain would be suitably connected to over flow manhole of septic tank through a 1 inch dia pipe. Steel grating shall be provided to cover it.\r\nw.	Services Area in front of Plots. The member can develop the services area in front of his plot (a property of DHAI-R) as green area by confining it with edge stones having height of maximum 9 inches from footpath level or road level where no footpath exist. The height more than 9 inches may be allowed after obtaining approval of plan / scheme from TP&BC Directorate DHAI-R. Fencing / grills around services area is not allowed. Growing of flower plants / hatching upto 3 ft height is allowed except corner on road junctions.\r\nx.	Electric Meters. Maximum two electric meters will be provided for each plot.\r\n \r\ny.	Two Adjacent Plots. If member has two adjacent plots and he uses one plot for construction of his house and second as lawn, then he has to follow following procedure:-\r\n(1)	Both the plots must be owned by the same member.\r\n(2) 	If ownership is different then an affidavit on judicial stamp paper of Rs100/- and a sketch showing detail of boundary wall and gate duly signed by the approved architect will be required from second owner that he / she has no objection for utilizing his / her plot as green area only. \r\n(3)	Members to get site plan / possession of the plot to be utilized as green / lawn.\r\n(4)	Construction of under ground water tank and structure using steel, fiber or wood up till 25 ft x 25 ft in the plot utilized as green area will be allowed after approval from Competent Authority. \r\n(5)	Sound proof generator may be placed after approval from Competent Authority. \r\n(6)	Combine boundary wall will be erected and second gate is allowed on plot utilized as green area as per DHAI-R gate layout plan.  \r\n(7)	A passage / drive way from gate to building line would also be allowed, however no construction of any type such as porch etc would be allowed. \r\n(8)	Monthly water charges will have to be paid by the owner.\r\nz.	Extra Land\r\n(1)	Construction in extra land without changing its category to constructable land is not allowed.\r\n(2)	In case extra land is equal to or more than the respective set-back building line can be extended upto plot line.\r\n(3)	Provision of gazebo / covered sitting area upto 150 sq ft using wood, fibre and / or iron will be allowed after leaving compulsory open space / set-back and approval from TP&BC Directorate DHAI-R.\r\n \r\n(4)	Construction in extra land of Defence Villas will be decided considering the category of extra land on case to case basis.\r\n(5)	Member holding extra land 10 marlas & above and maintaining it as green area will have to pay double water charges. After payment of dues, an additional water connection will be provided for green area.\r\n(6)	DHAI-R reserves the right to retrieve or withdraw any extra land having category B or C allotted to the member and the amount paid for such extra land, if any, the same shall be reimbursed to the member. It is declared that extra land does not create any title or right in favour of the member since it is not the part of member’s adjacent plot as per member’s entitlement. Cost of any construction therein will neither be claimed by the member nor DHAI-R will pay.\r\n(7)	Construction including water tank, septic tank and spiral stairs in non-constructable extra land is not allowed. However, with prior written approval by TP&BC Directorate DHAI-R shades as allowed in set-backs and perennial water tank having only one source of rainwater supply can be constructed.\r\n(8)	Sound proof generator may be placed in extra land after approval from Competent Authority. \r\n	 \r\naa.	Construction Period. The member must complete construction on the plot within a period of 3 years from the date building plan is approved. In case of building is not completed within 3 years, penalty would be imposed as per DHAI-R policy.\r\nbb.	Two Adjacent Plots at Different Levels. If two back to back / adjacent plots are at different levels and level difference is more than 5 ft then owner of the plot who first construct the house, will have to construct a common RCC retaining wall at rear side and foundation of RCC retaining wall should start from the lower road level.\r\n \r\ncc.	Pools.  Swimming and decorative pools and fountains may be allowed after approval from Competent Authority. However, privacy of the adjacent houses should be ensured more over DHAI-R will not responsible for supply of water in case of swimming pool.\r\ndd.	Water Tank	\r\n(1)	Under Ground Water Tank\r\n     	(a)   Maximum size of water tank 1,500 gallons for plots upto one kanal.\r\n     		(b)   Maximum size of water tank 2,000 gallons for more than one kanal.\r\n		(c)   Only one underground water tank is allowed.\r\n(d)  Should have a minimum distance of 3 ft from front boundary wall and should be located in such a way that bowzer filling for water tank may be facilitated from the outside.\r\n(e)	Tank should be constructed in RCC.\r\n(f)	1 ft free float will be taken while calculating the capacity of water tank.\r\n(2)	Over Head Water Tank\r\n(a)   Maximum size of water tank 900 gallons for plots upto one kanal.\r\n(b)   Maximum size of water tank 1,200 gallons for more than one kanal.\r\n(c)    Height of water tank may be allowed upto 8 ft from roof top level.\r\n(d)   Only one over head water tank (permanent / temporary) will be allowed.  \r\n        However internal partitioning of tank is allowed.\r\n(e)	Tank should be constructed in RCC. \r\n(f)	1 ft free float will be taken while calculating the capacity of water tank.\r\nee.	Installation of Solar Panels. Solar panels / geysers on rooftop of residential / commercial building will be provisionally allowed and structures including raised solar panel(s) or geyser(s) on roof of mumty and / or overhead water tank are not allowed. DHAI-R reserves the right to change the policy, notify the member and the member will change accordingly within one month at his expense, risk and cost.\r\n \r\nff.	Generator.	Generator shall not be used as a prime source of electric supply. It may be used as standby with following conditions:-\r\n(a)	Petrol or diesel driven generator with soundproof canopy may be installed.\r\n(b)	Noise beyond the boundary limit shall not be allowed i.e noise control arrangement must be made. \r\n(c)	Generator should be placed on rooftop (roof slab must be designed for structural stability to sustain the weight of generator) or in front lawn 5 ft away from common boundary wall. However, the generator shall not be placed in rear & side setbacks at ground floor and terraces at first floor.\r\ngg.	Pipe Duct. Pipe duct upto 6 (six) inches may be allowed in COS / set-back.\r\nhh.	Washing Area in Rear Set-back. One temporary shade of 7 ft x 4 ft will be allowed at rear compulsory open space (for laundry only).\r\njj.	Construction in Split Level. Due to variation in level or encountering hard strata, wherein excavation becomes difficult, split-level with a maximum of 3 ft level difference may be allowed.\r\nkk.	Design Element in Setbacks. Design Element maximum upto 9 inches will be allowed in front setback and 6 (six) inches in sides / rear setbacks. \r\nll.	Features in Setbacks.\r\n(1)	Rockery / water feature / flower pots upto height of boundary wall may be constructed with front boundary wall. In case rockery / water feature is provided along common boundary wall, a gap of minimum 6 inches shall be provided between the wall and rockery / water feature.\r\n(2)	Rockery / water feature / flower pots in sides / rear clear open spaces may be allowed leaving clear passage of 2 ft 6 inches between building & rockery / water feature and minimum 6 inches gap between common boundary wall & rockery / water feature.\r\n \r\n(3)	In case of seepage at the boundary wall of adjacent house due to the presence of rockery / water feature, the owner shall address the problem of seepage within 15 days from the issuance of notice from DHAI-R, otherwise, it will be rectified at owner’s risk and cost.\r\n(4)	Plants are not allowed in side / rear set-backs.\r\nmm.	Privacy\r\n(1)	The pardah wall minimum upto 7 ft height in front of servant terrace / doors /  windows should be constructed with a non-see-through material such as fiber / steel / wood etc but not in brick or RCC wall.\r\n(2)	Sill level of servant’s quarter window shall not be less than 5 ft. (if there is no pardah wall)\r\nnn.	Miscellaneous\r\n(1)	Earthing pit should be constructed inside the plot boundary. \r\n(2)	Maximum width of stairs in side set-back leading to Ground Floor only should not be more than half width of set-back.\r\n(3)	In case of violation, charges will be calculated across full length and not for a specific portion of violation.\r\n(4)	Development / protection of plot (retaining wall etc) within boundary line including extra land is sole responsibility of owner.\r\n(5)	Construction of boundary wall without construction of house and using it as green area / plantation of trees or any other purpose is not allowed.\r\n(6)	Changing the colour of Distribution Board’s, Electric Panels and electric poles etc in service area is not allowed.\r\n(7)	No structure of any kind will be allowed on roof except mumty and 1 x OHWT.\r\n(8)	Relocation of Plots. DHAI-R reserves the right to relocate / cancel the location and dimensions until physical possession (demarcation) of the plot is given.\r\n\r\n\r\n \r\n3.	Commercial Building Standards. Commercial plots shall observe the following standards:-\r\nArea of Plot\r\nSq Yds	Foot Print	Arcade at GF 	COS (Width in ft)	Floors\r\n			Front\r\n(ft)	Rear\r\n(ft)	Sides\r\n(ft)	\r\nUpto 100	100%	-	-	-	-	B+G+3 for Sectors Commercials\r\nB+G+5 Main Commercials\r\n101 to 250	100%	-	-	-	-	B+G+3 for Sectors Commercials\r\nB+G+5 Main Commercials\r\n251 to 400	90%	6 ft	-	7 ft 6 inches	-	B+G+3 for Sectors Commercials\r\nB+G+5 Main Commercials\r\n401 to 600	GF = 85%\r\nAbove GF = 75%	6 ft	-	7 ft 6 inches	5 ft @	B+G+3 for Sectors Commercials\r\nB+G+5 Main Commercials\r\nAbove 600	Will be decided by the Competent Authority\r\n@ Note: One side.\r\na.   Smaller plots amalgamated into one larger plot up till 400 sq yds will follow Byelaws of smaller plot.\r\n      b.   In case a commercial plot falls in residential area then set-backs and building height of residential area will be followed.\r\n\r\n\r\n4.	General Conditions for Commercials\r\na.	Height\r\n(1)	Main Commercial. Maximum height of the building may be increased to \r\n77 ft from reference point including machine room for lift, water tank and stair mumty.   \r\n(2)	Sector Commercial. Maximum height of the building may be increased to \r\n55 ft from reference point including machine room for lift, water tank and stair mumty.\r\n(3)	For Larger Commercial Plots. DHAI-R will give separate approval depending on nature of commercial project.\r\nb.	Height of Floor and Area of Shops. The height of floor should not be less than 9 ft. Minimum area of the shop should not less than 100 sft.\r\n \r\nc.	Basement. Basement is allowed to all members irrespective of topography of plots but with following conditions:-\r\n(1)	In case of open basement, an NOC is required from the neighbour who has an existing structure so that the area can be dug in till the boundary wall of his neighbour. No such NOC is required in case of closed basement. In case of any damage to the adjacent building, the owner of the plot and Structural Engineer / Architect shall be jointly responsible for such damages and shall have to use proper engineering techniques in order to avoid damage to neighbouring buildings. DHAI-R in no way shall be held responsible for such damages.\r\n(2)	The basement shall not be exposed more than 4 ft 6 inches from crown of the abutting road / zero level.\r\n(3)	Clear height of the basement shall not be less than 8 ft 6 inches.\r\n(4)	Basement Wall / Retaining wall adjacent to completed houses / endangering neighbouring structure should be completed within 15 days from the date of commencement of excavation.\r\n(5)	If services, such as bath and kitchen etc, are provided in the basement, the owner must provide mechanical disposal from the basement to the upper level in all cases (irrespective of levels of DHAI-R mains), so that there is no possibility of back flow in case of chockage of the sewer lines. DHAI-R will not be responsible for the consequences in any case. \r\n(6)	Cost of additional services work shall be borne by the member. \r\n(7)	Construction of RCC retaining wall (as per structural design) at building line shall be compulsory.\r\n \r\nd.	Reference Point.  Reference point shall be the intersection of building centre line & reference road crown.\r\ne.	Projection / Shade\r\n(1)	Maximum 3 ft beyond plot line at front and rear (if site permits).\r\n(2)	Conversion of projections into habitable area only at front. However, rear may be used for balconies only.\r\n(3)	Corner plots or plots having opening on two roads would be allowed construction on shade at front and side / rear provided that dues for corner / opening on two roads are paid. Plots which have openings on three sides the construction on shade at 3 sides shall be allowed after paying double the charges for corner plots.\r\nf.	Mumty. Maximum upto 30% of the plot area can be utilized for mumty. Extra 20% can be constructed by paying Rs 2500/- per sft additional charges on this account. Mumty area may be used for machine room, lift room, generator room, living area or bathrooms.\r\ng.	Arcade. The commercial plots upto 250 sq yds can be constructed with or without arcade.\r\nh.	Entrance Steps. Entrance steps can be provided upto the 3 ft out side the plot line.\r\nj.	Septic Tank.  A septic tank of size 3 ft x 5 ft x 5 ft can be constructed adjacent to the entrance stairs in the parking area. To maintain the Septic Tank and to keep it clean and workable is the responsibility of the plot owner.\r\nk.	Shops / Offices / Apartments Numbering.  Shop / Office / apartment number will be shown on submission drawing for reference. The numbers will be in clockwise direction following the suffix B1, B2, G, F1, F2, F3, F4, F5 and so on e.g Shop / Office / apartment number in basement next to Ground Floor will be numbered as 1B1, for 2nd basement 1B2, Shop / Office number 1 on G.F will be named as 1G, Shop / Office / apartment number 1 on First Floor will be named as 1F1, for second floor 1F2 and so on.\r\n \r\nl.	Partial Selling of Shops / Apartments / Offices. The partial selling of units like shops, apartments or offices is allowed after completion subject to the following: -\r\n(1)	The shop numbers should be properly marked in submission / completion drawing as per the procedure laid down in DHAI-R Byelaws.\r\n(2)	The partial selling should be through DHAI-R \r\n(Transfer & Record Office) after payment of prescribed dues.\r\n(3)	In case of partial selling 20% of the shops should be kept by the owner excluded mumty. However member can sell a whole plaza to a single owner.\r\n(4)	All the responsibilities for the provision / maintenance of services such as Electricity, Sui Gas, Water, Telephone, Cable, Fire-fighting, Security, structural safety etc would be the sole responsibility of the owner of the plaza.\r\n(5)	No good will / Pagri is allowed, failing which will result in heavy fines / disconnection of services.\r\n(6)	In case of any structural change prior approval from DHAI-R is mandatory. However the internal / soft partitioning can be done without approval.\r\nm.	Occupation. Any commercial unit like shops / offices / halls / apartments can be occupied after completing the front façade of the whole building and the floor to be occupied sh', 'ha-building-header.jpg', '2019-01-07 09:14:17');
INSERT INTO `blog` (`blog_id`, `category`, `title`, `description`, `blog_image`, `blog_created_date`) VALUES
(11, 'Home_Decor', 'Here’s our round-up of the top home decor trends to look out for to help you stay ahead of the curve in 2018/2019', 'There’s no escaping trends. Whether you live by them or feel totally unaffected, everything designed for our homes is predetermined by a wider trend influence. From trending paint colours to minimalist furniture choices, the high street offers us new collections all inspired by over-arching global trends.\r\n\r\nWhilst ‘trends’ change and evolve, they do so at different paces – some are popular for years rather than merely a season. Take the Nordic trend, it has been with us for years now and yet continues to surprise and delight.\r\n\r\nRead on, and you’ll discover that many of our key trends for Autumn/Winter 2018 offer a way to update existing looks at home, such as country, or luxe. This means you don’t have to redecorate your whole home to be on song, stylistically.\r\n\r\n', '1136678_f12f_2.jpg', '2019-01-07 10:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `blog_subscribe`
--

CREATE TABLE `blog_subscribe` (
  `blog_subscribe_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `bs_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_subscribe`
--

INSERT INTO `blog_subscribe` (`blog_subscribe_id`, `email`, `bs_created_date`) VALUES
(1, 'sufyannaveed28@gmail.com', '2018-12-02 17:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `city_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `city_name`, `city_created_date`) VALUES
(8, 1, 'Karachi', '2018-09-30 04:34:03'),
(7, 1, 'Islamabad', '2018-09-30 04:33:28'),
(3, 1, 'Lahore', '2018-08-08 20:54:28'),
(4, 1, 'Rawalpindi', '2018-08-08 20:54:28'),
(17, 1, 'Bhawalpur', '2018-10-01 06:24:11'),
(10, 1, 'Gujranwala', '2018-09-30 05:15:09'),
(11, 1, 'Multan', '2018-09-30 06:22:37'),
(12, 1, 'Peshawar', '2018-09-30 06:23:08'),
(16, 1, 'Gawadar', '2018-09-30 12:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `cu_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `name`, `email`, `contact`, `message`, `cu_created_date`) VALUES
(1, 'Sufyan Naveed', 'sufyannaveed28@gmail.com', '03000000000', 'adsdasdasdasdas', '2018-12-02 16:21:58'),
(2, 'Syed Hassan Ghazanfar', 'admin@hms.com', '03325400287', 'westindies', '2019-01-10 16:58:16'),
(3, 'Syed Hassan Ghazanfar', 'Ijaz@HMS.org', 'Yaseen', 'Bahria Town Phase 3, House No 1656 Street No 53. \r\nI And R Builders Presents - Brand New 10 Marla 5 Beds Cottage Available For Sale In Bahria Town\r\nCottage Is On 50 Ft Wide Road. \r\nProper Double Unit With Total 5 Bedrooms With Attach Bathrooms. \r\nOn Ground Floor 3 Bedrooms With Attach Bathrooms, Kitchen, T. v Lounge And Drawing Plus Dinning Room. \r\nOn 1st Floor 3 Proper Bedrooms With Attach Bathrooms, Kitchen, T. v Lounge. \r\n1 Servant Quarter On Mumty\r\nNo Electric And No Gas Load Shedding \r\nFeel Free To Contact Us. \r\nPlease Feel Free To Call Us If You Need Further Details About It. We Request That Only Serious Individuals Contact Us To Make An Immediate Deal, And Please Do Not Forget To Mention Zameen. com When Calling.\r\n\r\nBahria Town Phase 3, House No 1656 Street No 53. \r\nI And R Builders Presents - Brand New 10 Marla 5 Beds Cottage Available For Sale In Bahria Town\r\nCottage Is On 50 Ft Wide Road. \r\nProper Double Unit With Total 5 Bedrooms With Attach Bathrooms. \r\nOn Ground Floor 3 Bedrooms With Attach Bathrooms, Kitchen, T. v Lounge And Drawing Plus Dinning Room. \r\nOn 1st Floor 3 Proper Bedrooms With Attach Bathrooms, Kitchen, T. v Lounge. \r\n1 Servant Quarter On Mumty\r\nNo Electric And No Gas Load Shedding \r\nFeel Free To Contact Us. \r\nPlease Feel Free To Call Us If You Need Further Details About It. We Request That Only Serious Individuals Contact Us To Make An Immediate Deal, And Please Do Not Forget To Mention Zameen. com When Calling.', '2019-01-10 16:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `country_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_created_date`) VALUES
(1, 'Pakistan', '2018-08-08 16:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `am_direct` varchar(200) NOT NULL,
  `delete_message` int(11) NOT NULL DEFAULT '0',
  `inbox_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `post_id`, `user_id`, `name`, `email`, `mobile`, `phone`, `message`, `am_direct`, `delete_message`, `inbox_created_date`) VALUES
(1, 1, 2, 'Sufyan', 'sufyannaveed28@gmail.com', '03040944647', '03000000000', 'Testing email', 'Agent', 0, '2018-08-14 19:30:08'),
(4, 3, 0, 'Sufyan', 'sufyannaveed28@gmail.com', '03216452731', '0300000009', 'fhgfgfghfhfhg', 'Agent', 0, '2018-09-15 18:14:12'),
(5, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'sadasdasd', 'Buyer', 0, '2019-01-07 06:04:01'),
(6, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'asasdas', 'Buyer', 0, '2019-01-07 06:08:30'),
(7, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'dssdfsdfsd', 'Buyer', 0, '2019-01-07 06:10:45'),
(8, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'asdsadasdas', 'Buyer', 0, '2019-01-07 06:11:20'),
(9, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'asdsadasdas', 'Buyer', 0, '2019-01-07 06:11:20'),
(10, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'asdasdas', 'Buyer', 0, '2019-01-07 06:12:21'),
(11, 0, 0, 'Sufyan', 'admin@gmail.com', '333333333333', '33333333333', 'asdasdas', 'Buyer', 0, '2019-01-07 06:15:02'),
(12, 0, 0, 'Sufyan', 'sufyan@gmail.com', '0300000000000', '030000000000', 'teting', 'Buyer', 0, '2019-01-10 10:24:38'),
(13, 0, 0, 'Syed Hassan Ghazanfar', 'admin@hms.com', '22220000000', '03331234567', 'asdfgh', 'Buyer', 0, '2019-01-10 10:26:37'),
(14, 0, 0, 'Syed Hassan Ghazanfar', 'admin@hms.com', '22220000000', NULL, 'zxcv', 'Buyer', 0, '2019-01-10 10:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `investment_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `min` varchar(200) DEFAULT NULL,
  `max` varchar(200) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `society` int(11) NOT NULL,
  `phase` int(11) NOT NULL,
  `description` text NOT NULL,
  `time_period` varchar(200) NOT NULL,
  `investment_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`investment_id`, `name`, `email`, `contact`, `min`, `max`, `type`, `city`, `society`, `phase`, `description`, `time_period`, `investment_created_date`) VALUES
(2, 'Sufyan', 'sufyannaveed28@gmail.com', '03000000000', '5Lac - 1Million', '5Lac - 1Million', 'Residential', 7, 4, 4, 'TESTING', '3 Months', '2018-10-20 20:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `listing_quota`
--

CREATE TABLE `listing_quota` (
  `listing_quota_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_quota` int(11) NOT NULL,
  `used_listing_quota` int(11) NOT NULL,
  `hot_credit` int(11) NOT NULL,
  `used_hot_credit` int(11) NOT NULL DEFAULT '0',
  `superhot_credit` int(11) NOT NULL,
  `used_superhot_credit` int(11) NOT NULL DEFAULT '0',
  `refresh_credit` int(11) NOT NULL,
  `used_refresh_credit` int(11) NOT NULL DEFAULT '0',
  `listing_quota_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_quota`
--

INSERT INTO `listing_quota` (`listing_quota_id`, `user_id`, `listing_quota`, `used_listing_quota`, `hot_credit`, `used_hot_credit`, `superhot_credit`, `used_superhot_credit`, `refresh_credit`, `used_refresh_credit`, `listing_quota_created_date`) VALUES
(1, 1, 100, 29, 10, 5, 10, 6, 21, 0, '2018-08-08 18:02:30'),
(2, 2, 10, 0, 5, 0, 5, 0, 5, 0, '2018-08-08 18:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_name` varchar(200) NOT NULL,
  `parent_location` int(11) NOT NULL,
  `location_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city_id`, `location_name`, `parent_location`, `location_created_date`) VALUES
(1, 1, 'DHA Defence', 0, '2018-08-08 21:03:22'),
(2, 1, 'DHA Phase II', 1, '2018-08-08 21:04:23'),
(3, 1, 'DHA Phase 2 - Sector A', 2, '2018-08-08 21:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `map_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL,
  `phase_id` int(11) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `map_image` varchar(200) NOT NULL,
  `map_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`map_id`, `city_id`, `society_id`, `phase_id`, `sector_id`, `title`, `map_image`, `map_created_date`) VALUES
(29, 7, 44, 65, NULL, '2015 Map', 'DHA_2_A_to_J_-_Copy.jpg', '2018-11-22 12:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `market_updates`
--

CREATE TABLE `market_updates` (
  `market_update_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `mu_image` varchar(200) NOT NULL,
  `mu_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_updates`
--

INSERT INTO `market_updates` (`market_update_id`, `user_id`, `title`, `description`, `mu_image`, `mu_created_date`) VALUES
(11, 1, 'US Market Trends - Jan 2019', 'It looks like this year could be a buyer\'s market for real estate as higher rates weigh on prices\r\nHome values in November were 5.1 percent higher compared with November 2017, according to a report released Wednesday by CoreLogic. But that is down from the 5.4 percent annual gain seen in October.\r\nThe slowdown in asking prices comes as sellers face a new reality of higher interest rates and affordability worries among potential buyers.\r\nCoreLogic is now projecting a smaller, 4.8 percent gain in November 2019.\r\nIt looks like 2019 could be a buyer\'s market in real estate, but that\'s not necessarily a good sign for the economy.\r\n\r\nHome prices, while still higher than a year ago, are pulling back in most major markets, according to a report released Wednesday. Values in November were 5.1 percent higher compared with November 2017, CoreLogic said. That is down from the 5.4 percent annual gain seen in October. CoreLogic is now projecting a smaller, 4.8 percent gain in November 2019.\r\n\r\nThe decline in asking prices comes as sellers face a new reality of higher interest rates and affordability worries among potential buyers.\r\n\r\n\"The rise in mortgage rates has dampened buyer demand and slowed home-price growth,\" said Frank Nothaft, chief economist at CoreLogic. \"Interest rates for new 30-year fixed-rate loans averaged 4.9 percent during November, the highest monthly average since February 2011. These higher rates and home prices have reduced buyer affordability.\"\r\nThere is also more supply on the market now, as new listings come out amid a slower sales pace. Last spring, more than half of the nation\'s 50 largest housing markets were considered \"overvalued,\" meaning prices were at least 10 percent higher than their long-term sustainable levels. In November, that share slipped to 44 percent.\r\n\r\nMortgage rates shot up in the fall, and by the start of November the average rate on the popular 30-year fixed mortgage sat just over 5 percent, according to Mortgage News Daily. It has since fallen back, in response to the major sell-off in the U.S. stock market, and wider concerns over global economic growth. The rate hit 4.61 percent on the last day of 2018. That is still 57 basis points higher than the end of 2017.\r\nThe drop in rates, however, comes amid concern over the U.S. economy. Buying a home, which is most consumers\' single largest investment, is an incredibly emotional decision, and this new worry could overshadow the benefits of the drop in rates and prices.\r\n\r\n\"A strong economy helps homeowners feel confident about the value of their property,\" said Frank Martell, president and CEO of CoreLogic. \"If recent declines in the stock market shake consumer confidence in the national economy, we may see homeowners\' perception of home value change and a subsequent buyer\'s market emerge in 2019.\"', 'MAR16_ALINI_POST01.jpg', '2019-01-07 09:48:33'),
(10, 1, 'Here’s how to apply for Naya Pakistan Housing Program', 'The National Database and Registration Authority (NADRA) have issued the registration form for Prime Minister Imran Khan’s ‘Naya Pakistan Housing Programme’.\r\n\r\nRegistration process has been initiated in seven districts including Sukkur, Quetta, Gilgit-Balistan, Muzaffarabad, Swat, Islamabad  and Faisalabad with cooperation of National Database and Registration Authority (NADRA) to collect data for housing needs of the people, NADRA informed.\r\n\r\nThe applicant can download the form online form NADRA’s website, which can then be submitted within two months, from October 22 to December 21, along with a registration fee of Rs250 for selected district offices.\r\n\r\nPM Khan launched PTI’s ambitious flagship Naya Pakistan Housing Programme’ on Wednesday, which is aimed at building five million low-cost and affordable housing units across the country, fulfilling one of the ‘cornerstones’ of his party’s election manifesto.\r\n\r\nAddressing the launching ceremony at the PM Office, he announced that the government would provide the land, facilitate and remove bottlenecks and work under public-private partnership to construct housing units with all basic amenities.\r\n\r\n“We want to build houses for those who ordinarily do not even dream of owning a house, as they fall in low-income group and barely manage to find a shelter,” Imran Khan said.\r\n\r\nHe said the data of federal or provincial lands was being collected and registered by a land bank so that the government could provide land for the housing programme to be undertaken by the private sector.\r\n\r\nVowing to personally supervise the project, the PM announced setting up of a Naya Pakistan Housing Authority in 90 days. Meanwhile the 17-member Housing Task Force would oversee the housing programme, he added.', 'Untitled-9.jpg', '2019-01-07 09:35:29'),
(9, 1, 'Dealing with taxation ills', 'The biggest economic problem in Pakistan is persistently high fiscal deficit and within it the narrow tax base and low tax collection. The tax collection has increasingly become indirect in the last decade and within it the reliance is tilting towards collection at import stage – 43 percent of FBR net tax collection in FY18 was collected at imported stage.\r\n\r\n\r\n\r\nThis is creating a dilemma for policymakers on how to deal with taxation mess. The need is to go back to the drawing room to run the basic analytics to ponder on why 20,000 FBR work force is needed – collection on demand was a mere 7 percent of total direct taxes and 3 percent of overall FBR revenues in FY18.\r\n\r\nThe other paradox is delinking the tax policy from trade policy as the taxes on imports are used for revenue purposes, while the tariff policy is supposed to be used for improving trade balance, and bringing competitiveness in the domestic economy.\r\n\r\nThe policies ought to be dynamic as there are interdependencies of fiscal, trade and investment policies; as revenue considerations are paramount in the short run with an objective to lower the fiscal deficit to bring macroeconomic stability. In the medium to long term, the taxation ought to be linked to improving trade balance, competitiveness and bringing investment for optimal resource allocation and efficiencies.\r\n\r\n\r\n\r\nThe FBR’s 20,000 plus workforce has to be evaluated against the direct tax it collects. Out of Rs1,537 billion direct tax, which is two fifth of FBR revenues, Rs1,055 billion (69% of direct tax) are withheld at source and Rs336 billion (22% of direct tax ) are advance taxes – mainly coming from banks and large firms.\r\n\r\n\r\n\r\nIn FY18, a mere Rs42 billion were raised from filing returns (3% of direct tax) and Rs104 billion (7% of direct tax) collected on demand. This raises serious doubt on the efficacy of the FBR team as two percent increase in GST rate from 17 to 19 percent would yield Rs175 billion on FY18 numbers – higher than on demand and collection from return, cumulatively.\r\n\r\n\r\n\r\nThus, hypothetically, sending the FBR workforce packing, would have no impact on overall collection, if GST is raised by 2 percent. The policy in the past ten years has been to increase the GST – the rate is to increase by one percent in five years, and to lower the income tax rate – reduced from 35 to 30 percent for corporate. However, the FBR work force did not shrink correspondingly.\r\nThe expected minibudget in Jan19 may increase the GST further by one percent to 18 percent, and maintain the policy of reducing income tax rate from 30 to 25 percent in five years. It should come up with shifting excess manpower of FBR to some other jurisdictions.\r\n\r\n \r\n\r\nThat is one leg of the problem that the policymakers have implicitly given up on the FBR for collecting direct taxes. The other interlinked problem is that taxation is skewed towards a few sectors as majority of sectors are either exempt or simply not paying their due share of taxes. In direct taxes, banking companies take the lion’s share while the rest is primarily contributed by handful of companies in fertilizer, automobile and other big sectors.\r\n\r\nTextile, IPP and a few others are exempted while majority of modern services pay income tax indirectly. The wholesale and retail trade, whose contribution in GDP is equal to agriculture, are contributing almost nothing as income tax. The other services like private health, education, legal consultancies and food outlet are not taxed enough. The income tax is mostly withheld at contract stage- Rs283 billion (18% of direct taxes).\r\n\r\nThe indirect taxes, 60 percent of total, are concentrated in oil and gas, telecom, cement and tobacco. The biggest sector contribution is coming from POL (petroleum) products – 32 percent of GST at import stage and 42 percent of domestic GST, collectively Rs547billion are collected from POL GST i.e. 15 percent of total FBR collection.\r\n\r\n\r\n\r\n \r\n\r\nIn the last few years, the import stage taxes have been imposed on even essential raw materials and intermediate goods which has created an anti-export bias, and reduced the ability for domestic sectors to expand which paves way for reverse of import substitution.\r\n\r\nThe other unintended consequence of higher taxes at import stage is creating incentives for under invoicing and smuggling. The undocumented trade related payments are routed through grey channels which are settled against inward remittances without money crossing the border – fueling money laundering.\r\n\r\nThe government has to move away from taxation at imported stage. The problem is that direct tax collection has limited potential, especially with the existing FBR force. Since many sectors are either exempted or the FBR is incapable of bringing them in the net, the onus of taxation ought to fall on existing players. This may further exacerbate the problem of tax compliance – one major disincentive for investment.\r\n\r\nThe government has to turn the tables to solve the puzzle. The FBR’s role has to be minimized and new tax agencies should be formed to deal with various form of taxes. The most important is to replace custom wing of FBR by a port agency to deal taxes at import stage. On direct taxes, a new tax agency needs to be formed specializing in services income tax and should be independent of FBR.\r\n\r\nCopyright Business Recorder, 2019', 'kjkjkh-640x272.jpg', '2019-01-07 08:46:45'),
(12, 1, 'INAUGURATION OF SECTOR-C, DHA PHASE-VIII Karachi.', 'Karachi, Dec 31: Inauguration of Sector-C of DHA Phase-VIII marking the opening of the sector for construction was held in a simple and graceful ceremony at DHA Country & Golf Club. Lt Gen Humayun Aziz, HI(M) Commander 5 Corps who is also President Executive Board DHA was the chief guest of the ceremony who unveiled the plaque to inaugurate the newly developed sector of Phase-VIII. Sector-C has been developed as a hub of residential centre along Seaview Beach overlooking the majestic Arabian Sea and has all the basic utilities of life for a vibrant, dynamic and comfortable living.\r\n\r\nCorps Commander commended DHA on developing Sector-C as per the highest standards of engineering excellence that substantiates the credibility of DHA as a strong organization in the field of housing and development in the country. He said that it was reassuring that development of all sectors of DHA Phase-VIII have been completed as per the international standards. He said that opening of all sectors of Phase-VIII for construction will unleash dawn of a new era of progress and development in the area.\r\n\r\nAdministrator DHA Brig Ibrar Hussain Bhatti said that inauguration of Sector-C was an event beyond symbolic significance that will give a boost to the momentum with which the remaining sectors of Phase-VIII were being completed for opening in the near future. Administrator DHA acknowledged the role played by K-Electric, SSGC and Karachi Water Board for providing the basic amenities to Phase-VIII in general and Sector-C in particular.\r\n\r\nA large number of people including members of Residents’ Associations, Real Estate Agents, prominent citizens and DHA officials attended the ceremony.', 'DHA-Karachi-Phase-VIII-All-You-Need-To-Know-450x300.jpg', '2019-01-07 10:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `phase_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL,
  `phase_name` varchar(200) NOT NULL,
  `phase_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`phase_id`, `country_id`, `city_id`, `society_id`, `phase_name`, `phase_created_date`) VALUES
(114, 1, 3, 48, 'Others', '2019-01-02 12:28:26'),
(113, 1, 3, 47, 'Phase 2', '2019-01-02 12:27:51'),
(112, 1, 3, 47, 'Phase 1', '2019-01-02 12:27:01'),
(111, 1, 3, 54, 'Complete Phase', '2019-01-02 12:25:53'),
(110, 1, 3, 46, 'Phase 2', '2019-01-02 12:24:58'),
(109, 1, 3, 46, 'Phase 1', '2019-01-02 12:24:07'),
(108, 1, 3, 49, 'Others', '2019-01-02 12:23:42'),
(107, 1, 3, 49, 'Phase 2 Extension', '2019-01-02 12:22:19'),
(106, 1, 3, 49, 'Phase 2', '2019-01-02 12:22:01'),
(105, 1, 3, 49, 'Phase 1', '2019-01-02 12:21:32'),
(103, 1, 3, 53, 'Main Boulevard', '2019-01-02 12:20:05'),
(102, 1, 3, 53, 'Raya Golf Resort', '2019-01-02 12:19:21'),
(101, 1, 3, 53, 'Defence Chowk', '2019-01-02 12:18:55'),
(104, 1, 3, 53, 'Phase 11 Halloki Gardens', '2019-01-02 12:20:29'),
(99, 1, 3, 53, 'Phase 10', '2019-01-02 12:16:22'),
(98, 1, 3, 53, 'Phase 9 Town', '2019-01-02 12:15:20'),
(96, 1, 3, 53, 'Phase 9 Prism', '2019-01-02 12:13:47'),
(93, 1, 3, 53, 'Phase 8', '2019-01-02 12:11:12'),
(92, 1, 3, 53, 'Phase 7', '2019-01-02 12:10:51'),
(91, 1, 3, 53, 'Phase 6', '2019-01-02 12:10:34'),
(89, 1, 3, 53, 'Phase 5', '2019-01-02 12:09:58'),
(88, 1, 3, 53, 'Phase 4', '2019-01-02 12:09:40'),
(87, 1, 3, 53, 'Phase 3', '2019-01-02 12:09:12'),
(86, 1, 3, 53, 'Phase 2', '2019-01-02 12:09:00'),
(85, 1, 3, 53, 'Phase 1', '2019-01-02 12:08:43'),
(84, 1, 8, 52, 'Phase 8 Extension', '2019-01-02 12:03:48'),
(83, 1, 8, 52, 'Phase 8', '2019-01-02 12:01:28'),
(82, 1, 8, 52, 'Phase 7', '2019-01-02 11:59:27'),
(81, 1, 8, 52, 'Phase 6', '2019-01-02 11:59:12'),
(80, 1, 8, 52, 'Phase 5', '2019-01-02 11:58:59'),
(79, 1, 8, 52, 'Phase 4', '2019-01-02 11:58:43'),
(78, 1, 8, 52, 'Phase 3', '2019-01-02 11:58:25'),
(77, 1, 8, 52, 'Phase 2', '2019-01-02 11:58:11'),
(76, 1, 8, 52, 'Phase 1', '2019-01-02 11:57:57'),
(75, 1, 8, 52, 'DHA City Karachi', '2019-01-02 11:57:29'),
(72, 1, 7, 44, 'Others', '2019-01-02 11:48:26'),
(71, 1, 7, 44, 'DHA Villas', '2019-01-02 11:47:11'),
(70, 1, 7, 44, 'DHA Valley', '2019-01-02 11:46:52'),
(69, 1, 7, 44, 'Phase 2 Extension', '2019-01-02 11:46:19'),
(68, 1, 7, 44, 'Phase 5', '2019-01-02 11:45:22'),
(67, 1, 7, 44, 'Phase 4', '2019-01-02 11:45:01'),
(74, 1, 7, 44, 'Phase 3', '2019-01-02 11:52:13'),
(65, 1, 7, 44, 'Phase 2', '2019-01-02 11:44:15'),
(64, 1, 7, 44, 'Phase 1', '2019-01-02 11:43:40'),
(115, 1, 16, 55, 'Naval Anchorage', '2019-01-02 12:30:23'),
(116, 1, 4, 56, 'Acumilative', '2019-01-02 12:30:59'),
(117, 1, 17, 58, 'Affidavit Files', '2019-01-02 12:31:55'),
(118, 1, 17, 58, 'Allocated Files', '2019-01-02 12:32:34'),
(119, 1, 12, 57, 'Phase 1', '2019-01-02 12:34:19'),
(120, 1, 11, 59, 'Phase 1', '2019-01-02 12:34:44'),
(121, 1, 11, 60, 'Phase 1', '2019-01-02 12:35:54'),
(124, 1, 10, 61, 'Phase 1', '2019-01-02 12:39:26'),
(123, 1, 10, 61, 'Phase 2', '2019-01-02 12:38:13'),
(125, 1, 10, 61, 'Others', '2019-01-02 12:40:00'),
(130, 1, 8, 52, 'Phase 9', '2019-01-02 19:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `post_ads`
--

CREATE TABLE `post_ads` (
  `post_ads_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `wanted_for` varchar(200) DEFAULT NULL,
  `property_type` varchar(200) DEFAULT NULL,
  `frst_option` varchar(200) DEFAULT NULL,
  `scnd_option` varchar(200) DEFAULT NULL,
  `thrd_option` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `city` int(11) DEFAULT NULL,
  `society` int(11) DEFAULT NULL,
  `phase` int(11) DEFAULT NULL,
  `sector` int(11) DEFAULT NULL,
  `lat_val` varchar(200) NOT NULL,
  `long_val` varchar(200) NOT NULL,
  `property_title` varchar(200) DEFAULT NULL,
  `description` text,
  `all_inclusive` varchar(200) DEFAULT NULL,
  `land_area` varchar(200) DEFAULT NULL,
  `bedroom` varchar(200) DEFAULT NULL,
  `bathroom` varchar(200) DEFAULT NULL,
  `hot_ads_type` int(11) DEFAULT '0',
  `hot_ads_updated_date` date NOT NULL,
  `superhot_ads_type` int(11) NOT NULL DEFAULT '0',
  `superhot_ads_updated_date` date NOT NULL,
  `refresh_ads_type` int(11) NOT NULL DEFAULT '0',
  `refresh_ads_updated_date` date NOT NULL,
  `min_contract_period` int(11) DEFAULT NULL,
  `min_contract_duration` varchar(200) DEFAULT NULL,
  `rental_price` varchar(200) DEFAULT NULL,
  `number_of_cheques` int(11) DEFAULT NULL,
  `security_deposit` varchar(200) DEFAULT NULL,
  `agent_commission_tenant` varchar(200) DEFAULT NULL,
  `agent_commission_landlord` varchar(200) DEFAULT NULL,
  `advance_rent` varchar(200) DEFAULT NULL,
  `vacating_notice_period` varchar(200) DEFAULT NULL,
  `pay_maintenance_fee` varchar(200) DEFAULT NULL,
  `amount_maintenance_fee` varchar(200) DEFAULT NULL,
  `list_owner` int(11) DEFAULT '0',
  `contact_person` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `cell` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `f_built_in_year` varchar(200) DEFAULT NULL,
  `f_bedrooms` varchar(200) DEFAULT NULL,
  `f_view` varchar(200) DEFAULT NULL,
  `f_bathrooms` varchar(200) DEFAULT NULL,
  `f_parking_space` varchar(200) DEFAULT NULL,
  `f_servant_quarter` varchar(200) DEFAULT NULL,
  `f_double_glazed` varchar(200) DEFAULT NULL,
  `f_drwaing_room` varchar(200) DEFAULT NULL,
  `f_central_air_condition` varchar(200) DEFAULT NULL,
  `f_dining_room` varchar(200) DEFAULT NULL,
  `f_central_heating` varchar(200) DEFAULT NULL,
  `f_kitchen` varchar(200) DEFAULT NULL,
  `f_flooring` varchar(200) DEFAULT NULL,
  `f_study_room` varchar(200) DEFAULT NULL,
  `f_electricity_backup` varchar(200) DEFAULT NULL,
  `f_prayer_room` varchar(200) DEFAULT NULL,
  `f_waste_disposal` varchar(200) DEFAULT NULL,
  `f_powder_room` varchar(200) DEFAULT NULL,
  `f_floors` varchar(200) DEFAULT NULL,
  `f_gym` varchar(200) DEFAULT NULL,
  `f_other_main_features` varchar(200) DEFAULT NULL,
  `f_store_rooms` varchar(200) DEFAULT NULL,
  `f_furnished` varchar(200) DEFAULT NULL,
  `f_steam_rooms` varchar(200) DEFAULT NULL,
  `f_lounge_sitting_room` varchar(200) DEFAULT NULL,
  `f_laundry_room` varchar(200) DEFAULT NULL,
  `f_other_room` varchar(200) DEFAULT NULL,
  `f_broadband_internet` varchar(200) DEFAULT NULL,
  `f_lawn_garden` varchar(200) DEFAULT NULL,
  `f_satellite_cable_tv` varchar(200) DEFAULT NULL,
  `f_swimming_pool` varchar(200) DEFAULT NULL,
  `f_intercome` varchar(200) DEFAULT NULL,
  `f_sauna` varchar(200) DEFAULT NULL,
  `f_other_business_communication` varchar(200) DEFAULT NULL,
  `f_jacuzzi` varchar(200) DEFAULT NULL,
  `f_other_healthcare_recreation` varchar(200) DEFAULT NULL,
  `nearby_school` varchar(200) DEFAULT NULL,
  `nearby_hospital` varchar(200) DEFAULT NULL,
  `nearby_shopping_mall` varchar(200) DEFAULT NULL,
  `nearby_restaurants` varchar(200) DEFAULT NULL,
  `distance_airport` varchar(200) DEFAULT NULL,
  `nearby_public_transport` varchar(200) DEFAULT NULL,
  `other_nearby_places` varchar(200) DEFAULT NULL,
  `security_staff` varchar(200) DEFAULT NULL,
  `other_facilities` varchar(200) DEFAULT NULL,
  `f_maintenance_staff` varchar(200) DEFAULT NULL,
  `f_facilities_disabled` varchar(200) DEFAULT NULL,
  `pf_possesion` varchar(200) DEFAULT NULL,
  `pf_corner` varchar(200) DEFAULT NULL,
  `pf_park_facing` varchar(200) DEFAULT NULL,
  `pf_disputed` varchar(200) DEFAULT NULL,
  `pf_file` varchar(200) DEFAULT NULL,
  `pf_balloted` varchar(200) DEFAULT NULL,
  `pf_sewerage` varchar(200) DEFAULT NULL,
  `pf_electricity` varchar(200) DEFAULT NULL,
  `pf_water_supply` varchar(200) DEFAULT NULL,
  `pf_sui_gas` varchar(200) DEFAULT NULL,
  `pf_boundary_wall` varchar(200) DEFAULT NULL,
  `pf_other_plot_feature` varchar(200) DEFAULT NULL,
  `ads_images` varchar(10000) DEFAULT NULL,
  `video_url` varchar(2000) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `edited` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `sold_out_status` int(11) NOT NULL DEFAULT '0',
  `post_ads_created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_ads`
--

INSERT INTO `post_ads` (`post_ads_id`, `user_id`, `purpose`, `wanted_for`, `property_type`, `frst_option`, `scnd_option`, `thrd_option`, `status`, `city`, `society`, `phase`, `sector`, `lat_val`, `long_val`, `property_title`, `description`, `all_inclusive`, `land_area`, `bedroom`, `bathroom`, `hot_ads_type`, `hot_ads_updated_date`, `superhot_ads_type`, `superhot_ads_updated_date`, `refresh_ads_type`, `refresh_ads_updated_date`, `min_contract_period`, `min_contract_duration`, `rental_price`, `number_of_cheques`, `security_deposit`, `agent_commission_tenant`, `agent_commission_landlord`, `advance_rent`, `vacating_notice_period`, `pay_maintenance_fee`, `amount_maintenance_fee`, `list_owner`, `contact_person`, `phone`, `cell`, `fax`, `email`, `f_built_in_year`, `f_bedrooms`, `f_view`, `f_bathrooms`, `f_parking_space`, `f_servant_quarter`, `f_double_glazed`, `f_drwaing_room`, `f_central_air_condition`, `f_dining_room`, `f_central_heating`, `f_kitchen`, `f_flooring`, `f_study_room`, `f_electricity_backup`, `f_prayer_room`, `f_waste_disposal`, `f_powder_room`, `f_floors`, `f_gym`, `f_other_main_features`, `f_store_rooms`, `f_furnished`, `f_steam_rooms`, `f_lounge_sitting_room`, `f_laundry_room`, `f_other_room`, `f_broadband_internet`, `f_lawn_garden`, `f_satellite_cable_tv`, `f_swimming_pool`, `f_intercome`, `f_sauna`, `f_other_business_communication`, `f_jacuzzi`, `f_other_healthcare_recreation`, `nearby_school`, `nearby_hospital`, `nearby_shopping_mall`, `nearby_restaurants`, `distance_airport`, `nearby_public_transport`, `other_nearby_places`, `security_staff`, `other_facilities`, `f_maintenance_staff`, `f_facilities_disabled`, `pf_possesion`, `pf_corner`, `pf_park_facing`, `pf_disputed`, `pf_file`, `pf_balloted`, `pf_sewerage`, `pf_electricity`, `pf_water_supply`, `pf_sui_gas`, `pf_boundary_wall`, `pf_other_plot_feature`, `ads_images`, `video_url`, `views`, `edited`, `deleted`, `sold_out_status`, `post_ads_created_date`) VALUES
(16, 1, 'Sale', '', 'Plots', '', 'Residential Plot', '', 1, 7, 44, 65, 391, '33.5347712', '73.17405020000001', 'Allah is Great', '8 MARLA Plot is available on sale, containing following miscellaneous features: \r\n\r\n1. Top Height \r\n2. Sector F \r\n3. Street 80\r\n4. Excellent for House building and investment. \r\n5. Walking Distance from Mosque, market and School. \r\n6. Possession Available. \r\n7. Confirm Deal\r\n8. Walking distance from Islamabad express high way. \r\n9. Heightened Area\r\n10. Scenic view of Valley. \r\n11. 24/7 Security. \r\n12. Elite Living Standards. \r\n13. All ambiguities available. \r\n14. Level Plot,\r\n15. Natural Soil Level( NO filling or Cut )\r\n16. Excellent features for Personnel House building. \r\n17. Back Open. \r\n18. Peace full living. \r\n\r\n\r\nOur dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. \r\n\r\nWe have have the best of Assessment and value calculation of any assets, no match in the market. \r\n\r\n\r\nDHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. \r\n\r\nWe Believe in Fair and Transparent Deal. \r\n\r\nFor Further information or guidance feel free to contact us.', '12500000', '20 Sqft', '', '', 0, '2018-12-01', 1, '2018-12-31', 0, '2018-12-31', 0, '', '', 0, '', '', '', '', '', '', '', 1, '', '0300', '0300999999', '0300000777', 'admin@gmail.com', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '1 km', '', '', '', '', '', '', 'Yes', '', NULL, NULL, 'Possesion', 'Corner', 'Park Facing', 'Disputed', 'File', 'Balloted', 'Sewerage', 'Electricity', 'Water Supply', 'Sui Gas', 'Boundary Wall', '', 'mainoffc.jpg,cinebowl.jpg', 'https://www.youtube.com/watch?v=mxWBW--yoiA', 0, 1, 0, 1, '2018-12-31 03:08:47'),
(17, 1, 'Sale', '', 'Plots', '', 'Residential Plot', '', 1, 7, 44, 65, 391, '33.5347712', '73.17405020000001', '20 Marla Plot Urgent For Sale', '8 MARLA Plot is available on sale, containing following miscellaneous features: \r\n\r\n1. Top Height \r\n2. Sector F \r\n3. Street 80\r\n4. Excellent for House building and investment. \r\n5. Walking Distance from Mosque, market and School. \r\n6. Possession Available. \r\n7. Confirm Deal\r\n8. Walking distance from Islamabad express high way. \r\n9. Heightened Area\r\n10. Scenic view of Valley. \r\n11. 24/7 Security. \r\n12. Elite Living Standards. \r\n13. All ambiguities available. \r\n14. Level Plot,\r\n15. Natural Soil Level( NO filling or Cut )\r\n16. Excellent features for Personnel House building. \r\n17. Back Open. \r\n18. Peace full living. \r\n\r\n\r\nOur dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. \r\n\r\nWe have have the best of Assessment and value calculation of any assets, no match in the market. \r\n\r\n\r\nDHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. \r\n\r\nWe Believe in Fair and Transparent Deal. \r\n\r\nFor Further information or guidance feel free to contact us.', '125000000', '20 Marla', '', '', 0, '2018-12-11', 0, '2018-12-22', 0, '2018-12-10', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'Army Public', '', '', '', '18KM', '', '', 'Security Staff', '', NULL, NULL, 'Possesion', 'Corner', 'Park Facing', 'Disputed', 'File', 'Balloted', 'Sewerage', 'Electricity', 'Water Supply', 'Sui Gas', 'Boundary Wall', '', '164411_671769726185799_868942992_n.jpg,cinebowl.jpg', '', 0, 0, 0, 0, '2018-12-21 10:06:23'),
(48, 1, 'Sale', '', 'Homes', 'House', '', '', 1, 7, 44, 65, 391, '33.5347712', '73.17405020000001', 'Testing', 'asdas', '22', '12 Sq.Yd', '8', '2', 0, '2019-01-01', 0, '2019-01-01', 0, '2019-01-01', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'be1.jpeg,be2.jpeg,be3.jpeg,be4.jpeg,be5.jpeg,be6.jpeg,be7.jpeg,be8.jpeg,be9.jpeg,be10.jpeg', 'https://www.youtube.com/watch?v=fEdMff4PQSw', 0, 0, 0, 0, '2019-01-05 04:50:50'),
(47, 1, 'Sale', '', 'Homes', 'House', '', '', 1, 7, 44, 65, 391, '33.5347712', '73.17405020000001', 'Testing', 'asdas', '22', '12 Sq.Yd', '8', '2', 0, '2019-01-01', 0, '2019-01-01', 0, '2019-01-01', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '164411_671769726185799_868942992_n.jpg,cinebowl.jpg', 'https://www.youtube.com/watch?v=fEdMff4PQSw', 0, 0, 0, 0, '2019-01-05 04:50:50'),
(49, 1, 'Rent', '', 'Homes', 'House', '', '', 1, 7, 44, 68, 419, '33.5347712', '73.17405020000001', 'Testing', 'asdas', '22', '12 Sq.Yd', '8', '2', 0, '2019-01-01', 0, '2019-01-01', 0, '2019-01-01', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '164411_671769726185799_868942992_n.jpg,cinebowl.jpg', 'https://www.youtube.com/watch?v=fEdMff4PQSw', 0, 0, 0, 0, '2019-01-05 04:50:50'),
(50, 1, 'Rent', '', 'Commercial', 'House', '', '', 1, 7, 44, 68, 419, '33.5347712', '73.17405020000001', 'Testing', 'asdas', '22', '12 Sq.Yd', '8', '2', 0, '2019-01-01', 0, '2019-01-01', 0, '2019-01-01', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '164411_671769726185799_868942992_n.jpg,cinebowl.jpg', 'https://www.youtube.com/watch?v=fEdMff4PQSw', 0, 0, 0, 1, '2019-01-05 04:50:50'),
(51, 1, 'Sale', '', 'Plots', '', 'Residential Plot', '', 1, 8, 52, 75, 492, '24.9850908', '67.47251069999993', '20 Marla Plot Urgent For Sale', '8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.\r\n8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.\r\n8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.', '181000000', '500 Sq.Yd', '', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, 'Possesion', 'Corner', 'Park Facing', 'Disputed', 'File', 'Balloted', 'Sewerage', 'Electricity', 'Water Supply', 'Sui Gas', 'Boundary Wall', '', NULL, 'https://www.youtube.com/watch?v=3pwNF5VhJMM', 0, 0, 0, 0, '2019-01-10 09:41:22'),
(52, 1, 'Sale', '', 'Plots', '', 'Residential Plot', '', 1, 8, NULL, NULL, NULL, '', '', '20 Marla Plot Urgent For Sale', '8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.\r\n8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.\r\n8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.8 MARLA Plot is available on sale, containing following miscellaneous features: 1. Top Height 2. Sector F 3. Street 80 4. Excellent for House building and investment. 5. Walking Distance from Mosque, market and School. 6. Possession Available. 7. Confirm Deal 8. Walking distance from Islamabad express high way. 9. Heightened Area 10. Scenic view of Valley. 11. 24/7 Security. 12. Elite Living Standards. 13. All ambiguities available. 14. Level Plot, 15. Natural Soil Level( NO filling or Cut ) 16. Excellent features for Personnel House building. 17. Back Open. 18. Peace full living. Our dedicated team of professionals works in the best interest of our Clients in order to make There expenses of living worth while. We have have the best of Assessment and value calculation of any assets, no match in the market. DHA is always secured and profitable investment whether as living or purely investment purposes. NO MATCH TO ANY OTHER. We Believe in Fair and Transparent Deal. For Further information or guidance feel free to contact us.', '181000000', '500 Sq.Yd', '', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '', '', 0, '', '', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, 'Possesion', 'Corner', 'Park Facing', 'Disputed', 'File', 'Balloted', 'Sewerage', 'Electricity', 'Water Supply', 'Sui Gas', 'Boundary Wall', '', '993930_706724039344721_1164210857_n.jpg', 'https://www.youtube.com/watch?v=3pwNF5VhJMM', 0, 0, 0, 0, '2019-01-10 09:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `purchaser_guide`
--

CREATE TABLE `purchaser_guide` (
  `purchaser_guide_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `min` varchar(200) DEFAULT NULL,
  `max` varchar(200) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `society` int(11) NOT NULL,
  `phase` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `street` varchar(200) NOT NULL,
  `plot` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `pguide_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roles` varchar(500) NOT NULL,
  `roles_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roles_id`, `user_id`, `roles`, `roles_created_date`) VALUES
(1, 2, '1,2,0,4,0,0,0,0,0,10,11,0,0,14,0,0,17,18,0,0,0', '2018-09-01 16:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `sector_name` varchar(200) NOT NULL,
  `sector_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `country_id`, `city_id`, `society_id`, `phase_id`, `sector_name`, `sector_created_date`) VALUES
(752, 1, 4, 56, 116, 'Accumulative', '2019-01-02 22:11:45'),
(751, 1, 16, 55, 115, 'Accumulative', '2019-01-02 22:10:57'),
(750, 1, 3, 48, 114, 'Accumulative ', '2019-01-02 22:10:34'),
(749, 1, 3, 54, 111, 'Others', '2019-01-02 22:09:47'),
(748, 1, 3, 47, 113, 'Others', '2019-01-02 22:09:19'),
(747, 1, 3, 47, 112, 'Block C', '2019-01-02 22:08:50'),
(746, 1, 3, 47, 112, 'Block B', '2019-01-02 22:08:31'),
(745, 1, 3, 47, 112, 'Block A', '2019-01-02 22:08:17'),
(744, 1, 3, 46, 110, 'Block F', '2019-01-02 22:07:43'),
(743, 1, 3, 46, 110, 'Block E2', '2019-01-02 22:07:16'),
(742, 1, 3, 46, 110, 'Block E1', '2019-01-02 22:06:54'),
(741, 1, 3, 46, 110, 'Block E', '2019-01-02 22:06:31'),
(740, 1, 3, 46, 110, 'Block D', '2019-01-02 22:05:46'),
(739, 1, 3, 46, 110, 'Block C1', '2019-01-02 22:05:25'),
(738, 1, 3, 46, 110, 'Block C', '2019-01-02 22:05:01'),
(736, 1, 3, 46, 110, 'Block A', '2019-01-02 22:04:14'),
(737, 1, 3, 46, 110, 'Block B', '2019-01-02 22:04:37'),
(735, 1, 3, 46, 109, 'Block D', '2019-01-02 22:03:45'),
(734, 1, 3, 46, 109, 'Block C', '2019-01-02 22:03:24'),
(733, 1, 3, 46, 109, 'Block B', '2019-01-02 22:03:07'),
(732, 1, 3, 46, 109, 'Block A', '2019-01-02 22:02:51'),
(731, 1, 3, 49, 108, 'Others', '2019-01-02 22:02:21'),
(730, 1, 3, 49, 107, 'Block P', '2019-01-02 22:02:03'),
(729, 1, 3, 49, 107, 'Block N', '2019-01-02 22:01:42'),
(728, 1, 3, 49, 107, 'Block M', '2019-01-02 22:01:22'),
(727, 1, 3, 49, 106, 'Block J', '2019-01-02 22:00:50'),
(726, 1, 3, 49, 106, 'Others', '2019-01-02 22:00:21'),
(724, 1, 3, 49, 106, 'Block K', '2019-01-02 21:58:59'),
(725, 1, 3, 49, 106, 'Block L', '2019-01-02 21:59:46'),
(723, 1, 3, 49, 106, 'Block H', '2019-01-02 21:58:39'),
(722, 1, 3, 49, 106, 'Block G', '2019-01-02 21:58:19'),
(721, 1, 3, 53, 86, 'Block F', '2019-01-02 21:57:54'),
(720, 1, 3, 49, 105, 'Block CCA', '2019-01-02 21:57:18'),
(719, 1, 3, 49, 105, 'Block E', '2019-01-02 21:56:51'),
(718, 1, 3, 53, 85, 'Block D', '2019-01-02 21:56:30'),
(717, 1, 3, 49, 105, 'Block C', '2019-01-02 21:56:11'),
(716, 1, 3, 49, 105, 'Block B', '2019-01-02 21:55:01'),
(715, 1, 3, 49, 105, 'Block A', '2019-01-02 21:54:42'),
(714, 1, 3, 53, 103, 'Accumulative ', '2019-01-02 21:54:16'),
(713, 1, 3, 53, 102, 'Accumulative ', '2019-01-02 21:53:46'),
(712, 1, 3, 53, 101, 'Others', '2019-01-02 21:53:13'),
(711, 1, 3, 53, 104, 'Others', '2019-01-02 21:52:42'),
(710, 1, 3, 53, 104, 'Block B', '2019-01-02 21:52:25'),
(709, 1, 3, 53, 104, 'Block A ', '2019-01-02 21:52:01'),
(708, 1, 3, 53, 99, 'Others', '2019-01-02 21:51:21'),
(706, 1, 3, 53, 99, 'Allocation Files', '2019-01-02 21:50:28'),
(707, 1, 3, 53, 99, 'Affidavit Files', '2019-01-02 21:50:58'),
(704, 1, 3, 53, 96, 'Oval Complex', '2019-01-02 21:49:19'),
(703, 1, 3, 53, 96, 'Commercial Zone 3', '2019-01-02 21:48:57'),
(702, 1, 3, 53, 96, 'Commercial Zone 2', '2019-01-02 21:48:32'),
(701, 1, 3, 53, 96, 'Commercial Zone 1', '2019-01-02 21:48:15'),
(700, 1, 3, 53, 96, 'Block R', '2019-01-02 21:47:15'),
(699, 1, 3, 53, 96, 'Block Q', '2019-01-02 21:46:51'),
(698, 1, 3, 53, 96, 'Block P', '2019-01-02 21:46:19'),
(697, 1, 3, 53, 96, 'Block N', '2019-01-02 21:45:55'),
(695, 1, 3, 53, 96, 'Block M', '2019-01-02 21:45:11'),
(694, 1, 3, 53, 96, 'Block L', '2019-01-02 21:44:55'),
(693, 1, 3, 53, 96, 'Block K', '2019-01-02 21:44:35'),
(692, 1, 3, 53, 96, 'Block J', '2019-01-02 21:44:18'),
(691, 1, 3, 53, 96, 'Block H', '2019-01-02 21:44:01'),
(690, 1, 3, 53, 96, 'Block G', '2019-01-02 21:43:43'),
(689, 1, 3, 53, 96, 'Block F', '2019-01-02 21:43:25'),
(688, 1, 3, 53, 96, 'Block E', '2019-01-02 21:43:05'),
(687, 1, 3, 53, 96, 'Block D', '2019-01-02 21:42:47'),
(686, 1, 3, 53, 96, 'Block C', '2019-01-02 21:42:25'),
(685, 1, 3, 53, 96, 'Block B', '2019-01-02 21:42:12'),
(684, 1, 3, 53, 96, 'Block A', '2019-01-02 21:41:56'),
(683, 1, 3, 53, 93, 'Block CCA 2', '2019-01-02 21:40:37'),
(682, 1, 3, 53, 93, 'Block CCA 1', '2019-01-02 21:40:15'),
(681, 1, 3, 53, 93, 'Park View', '2019-01-02 21:39:55'),
(680, 1, 3, 53, 93, 'Broadway Commercial', '2019-01-02 21:39:31'),
(679, 1, 3, 53, 93, 'Block Z6', '2019-01-02 21:38:56'),
(678, 1, 3, 53, 93, 'Block Z5', '2019-01-02 21:38:38'),
(677, 1, 3, 53, 93, 'Block Z4', '2019-01-02 21:38:19'),
(676, 1, 3, 53, 93, 'Block Z3', '2019-01-02 21:37:50'),
(675, 1, 3, 53, 93, 'Block Z2', '2019-01-02 21:37:32'),
(674, 1, 3, 53, 93, 'Block Z1', '2019-01-02 21:37:15'),
(673, 1, 3, 53, 93, 'Block Z', '2019-01-02 21:36:59'),
(672, 1, 3, 53, 93, 'Block Y', '2019-01-02 21:36:38'),
(671, 1, 3, 53, 93, 'Block X', '2019-01-02 21:36:14'),
(670, 1, 3, 53, 93, 'Block W', '2019-01-02 21:35:53'),
(669, 1, 3, 53, 93, 'Block V', '2019-01-02 21:35:31'),
(668, 1, 3, 53, 93, 'Block U', '2019-01-02 21:35:13'),
(667, 1, 3, 53, 93, 'Block T', '2019-01-02 21:34:51'),
(666, 1, 3, 53, 93, 'Block S', '2019-01-02 21:34:30'),
(665, 1, 3, 53, 93, 'Block R', '2019-01-02 21:34:11'),
(664, 1, 3, 53, 93, 'Block Q', '2019-01-02 21:33:52'),
(663, 1, 3, 53, 93, 'Block P', '2019-01-02 21:33:33'),
(662, 1, 3, 53, 93, 'Block N', '2019-01-02 21:33:09'),
(661, 1, 3, 53, 93, 'Block M', '2019-01-02 21:32:52'),
(660, 1, 3, 53, 93, 'Block L', '2019-01-02 21:32:25'),
(659, 1, 3, 53, 93, 'Block K', '2019-01-02 21:32:05'),
(658, 1, 3, 53, 93, 'Block J', '2019-01-02 21:31:41'),
(657, 1, 3, 53, 93, 'Block H', '2019-01-02 21:31:10'),
(656, 1, 3, 53, 93, 'Block G', '2019-01-02 21:30:53'),
(655, 1, 3, 53, 93, 'Block F', '2019-01-02 21:30:35'),
(654, 1, 3, 53, 93, 'Block E', '2019-01-02 21:30:16'),
(653, 1, 3, 53, 93, 'Block D', '2019-01-02 21:29:48'),
(652, 1, 3, 53, 93, 'Block C', '2019-01-02 21:29:04'),
(651, 1, 3, 53, 93, 'Block B', '2019-01-02 21:28:48'),
(650, 1, 3, 53, 93, 'Block A', '2019-01-02 21:28:30'),
(649, 1, 3, 53, 92, 'Others', '2019-01-02 21:28:12'),
(648, 1, 3, 53, 92, 'Block CCA 5', '2019-01-02 21:27:37'),
(647, 1, 3, 53, 92, 'Block CCA 4', '2019-01-02 21:26:20'),
(646, 1, 3, 53, 92, 'Block CCA 3', '2019-01-02 21:25:28'),
(645, 1, 3, 53, 92, 'Block CCA 2', '2019-01-02 21:25:02'),
(644, 1, 3, 53, 92, 'Block CCA 1', '2019-01-02 21:24:37'),
(643, 1, 3, 53, 92, 'Block Z2', '2019-01-02 21:23:21'),
(642, 1, 3, 53, 92, 'Block Z1', '2019-01-02 21:22:49'),
(641, 1, 3, 53, 92, 'Block Z', '2019-01-02 21:22:18'),
(640, 1, 3, 53, 92, 'Block Y', '2019-01-02 21:21:44'),
(639, 1, 3, 53, 92, 'Block X', '2019-01-02 21:21:21'),
(638, 1, 3, 53, 92, 'Block W', '2019-01-02 21:20:54'),
(637, 1, 3, 53, 92, 'Block V', '2019-01-02 21:20:35'),
(636, 1, 3, 53, 92, 'Block U', '2019-01-02 21:20:15'),
(635, 1, 3, 53, 92, 'Block T', '2019-01-02 21:19:54'),
(634, 1, 3, 53, 92, 'Block S', '2019-01-02 21:19:31'),
(633, 1, 3, 53, 92, 'Block R', '2019-01-02 21:19:05'),
(632, 1, 3, 53, 92, 'Block Q', '2019-01-02 21:18:36'),
(631, 1, 3, 53, 92, 'Block P', '2019-01-02 21:18:15'),
(630, 1, 3, 53, 89, 'Penta Square', '2019-01-02 21:17:48'),
(629, 1, 3, 53, 89, 'Block CCA', '2019-01-02 21:17:07'),
(628, 1, 3, 53, 89, 'Block M', '2019-01-02 21:16:05'),
(627, 1, 3, 53, 89, 'Block L', '2019-01-02 21:15:46'),
(625, 1, 3, 53, 89, 'Block J', '2019-01-02 21:14:46'),
(626, 1, 3, 53, 89, 'Block K', '2019-01-02 21:15:06'),
(624, 1, 3, 53, 89, 'Block H', '2019-01-02 21:13:48'),
(623, 1, 3, 53, 89, 'Block G', '2019-01-02 21:13:12'),
(622, 1, 3, 53, 89, 'Block E', '2019-01-02 21:12:47'),
(621, 1, 3, 53, 89, 'Block D', '2019-01-02 21:12:28'),
(620, 1, 3, 53, 89, 'Block C', '2019-01-02 21:11:54'),
(619, 1, 3, 53, 89, 'Block B', '2019-01-02 21:11:29'),
(618, 1, 3, 53, 89, 'Block A', '2019-01-02 21:11:05'),
(617, 1, 3, 53, 88, 'Block CCA', '2019-01-02 21:06:43'),
(616, 1, 3, 53, 88, 'Block JJ', '2019-01-02 21:06:08'),
(615, 1, 3, 53, 88, 'Block HH', '2019-01-02 21:00:00'),
(614, 1, 3, 53, 88, 'Block GG', '2019-01-02 20:49:14'),
(613, 1, 3, 53, 88, 'Block FF', '2019-01-02 20:47:33'),
(612, 1, 3, 53, 88, 'Block EE', '2019-01-02 20:47:06'),
(611, 1, 3, 53, 88, 'Block DD', '2019-01-02 20:24:42'),
(610, 1, 3, 53, 88, 'Block CC', '2019-01-02 20:23:50'),
(609, 1, 3, 53, 88, 'Block BB', '2019-01-02 20:23:34'),
(608, 1, 3, 53, 88, 'Block AA', '2019-01-02 20:23:17'),
(607, 1, 3, 53, 87, 'Block Z', '2019-01-02 20:23:01'),
(606, 1, 3, 53, 87, 'Block Y', '2019-01-02 20:22:43'),
(605, 1, 3, 53, 87, 'Block XX', '2019-01-02 20:22:20'),
(604, 1, 3, 53, 87, 'Block X', '2019-01-02 20:21:59'),
(603, 1, 3, 53, 87, 'Block W', '2019-01-02 20:21:36'),
(601, 1, 3, 53, 85, 'Block N', '2019-01-02 20:20:28'),
(600, 1, 3, 53, 85, 'Block M', '2019-01-02 20:20:11'),
(599, 1, 3, 53, 85, 'Block L', '2019-01-02 20:19:53'),
(598, 1, 3, 53, 85, 'Block K', '2019-01-02 20:19:30'),
(597, 1, 3, 53, 85, 'Block J', '2019-01-02 20:19:09'),
(596, 1, 3, 53, 85, 'Block H', '2019-01-02 20:18:35'),
(595, 1, 3, 53, 85, 'Block G', '2019-01-02 20:18:03'),
(594, 1, 3, 53, 85, 'Block F', '2019-01-02 20:17:46'),
(593, 1, 3, 53, 85, 'Block E', '2019-01-02 20:17:31'),
(592, 1, 3, 53, 85, 'Block D', '2019-01-02 20:17:05'),
(591, 1, 3, 53, 85, 'Block C', '2019-01-02 20:16:50'),
(590, 1, 3, 53, 85, 'Block B', '2019-01-02 20:16:36'),
(589, 1, 3, 53, 85, 'Block A', '2019-01-02 20:16:22'),
(588, 1, 3, 53, 91, 'Main Boulevard ', '2019-01-02 20:15:36'),
(587, 1, 3, 53, 91, 'CCA 2', '2019-01-02 20:15:11'),
(586, 1, 3, 53, 91, 'CCA', '2019-01-02 20:14:50'),
(585, 1, 3, 53, 91, 'Block N', '2019-01-02 20:14:25'),
(584, 1, 3, 53, 91, 'Block M', '2019-01-02 20:14:04'),
(583, 1, 3, 53, 91, 'Block L', '2019-01-02 20:13:43'),
(582, 1, 3, 53, 91, 'Block K', '2019-01-02 20:13:20'),
(581, 1, 3, 53, 91, 'Block J', '2019-01-02 20:12:54'),
(580, 1, 3, 53, 91, 'Block H', '2019-01-02 20:12:26'),
(579, 1, 3, 53, 91, 'Block G', '2019-01-02 20:12:06'),
(578, 1, 3, 53, 91, 'Block F', '2019-01-02 20:11:43'),
(577, 1, 3, 53, 91, 'Block E', '2019-01-02 20:11:25'),
(576, 1, 3, 53, 91, 'Block D', '2019-01-02 20:10:25'),
(575, 1, 3, 53, 91, 'Block C', '2019-01-02 20:10:07'),
(574, 1, 3, 53, 91, 'Block B', '2019-01-02 20:09:47'),
(573, 1, 3, 53, 91, 'Block A', '2019-01-02 20:09:26'),
(572, 1, 3, 53, 86, 'Block V', '2019-01-02 20:08:57'),
(571, 1, 3, 53, 86, 'Block U', '2019-01-02 20:08:27'),
(570, 1, 3, 53, 86, 'Block T', '2019-01-02 20:08:03'),
(569, 1, 3, 53, 86, 'Block S', '2019-01-02 20:07:45'),
(567, 1, 3, 53, 86, 'Block R', '2019-01-02 20:06:53'),
(566, 1, 3, 53, 86, 'Block Q', '2019-01-02 20:06:31'),
(565, 1, 3, 53, 98, 'CCA', '2019-01-02 20:06:07'),
(564, 1, 3, 53, 98, 'Block E', '2019-01-02 20:05:39'),
(563, 1, 3, 53, 98, 'Block D', '2019-01-02 20:05:17'),
(562, 1, 3, 53, 98, 'Block C', '2019-01-02 20:04:13'),
(560, 1, 3, 53, 98, 'Block A', '2019-01-02 20:03:29'),
(561, 1, 3, 53, 98, 'Block B', '2019-01-02 20:03:50'),
(529, 1, 8, 52, 84, 'Accumulative Sector ', '2019-01-02 19:24:22'),
(528, 1, 8, 52, 83, 'Others', '2019-01-02 19:23:01'),
(527, 1, 8, 52, 83, 'Zulfiqar Commercial Area', '2019-01-02 19:22:36'),
(526, 1, 8, 52, 83, 'Al Murtaza Commercial Area', '2019-01-02 19:22:00'),
(525, 1, 8, 52, 83, 'Peninsula Commercial Area', '2019-01-02 19:18:01'),
(524, 1, 8, 52, 83, 'Zone E', '2019-01-02 19:16:56'),
(523, 1, 8, 52, 83, 'Zone D', '2019-01-02 19:16:35'),
(522, 1, 8, 52, 83, 'Zone C', '2019-01-02 19:16:14'),
(521, 1, 8, 52, 83, 'Zone B', '2019-01-02 19:14:57'),
(520, 1, 8, 52, 83, 'Zone A', '2019-01-02 19:14:33'),
(519, 1, 8, 52, 82, 'Others', '2019-01-02 19:13:50'),
(518, 1, 8, 52, 82, 'Accumulative Sectors ', '2019-01-02 19:12:41'),
(517, 1, 8, 52, 82, 'Sehar Commercial Area', '2019-01-02 19:12:03'),
(516, 1, 8, 52, 82, 'Jami Commercial Area', '2019-01-02 19:11:31'),
(515, 1, 8, 52, 82, 'Extension', '2019-01-02 19:11:04'),
(514, 1, 8, 52, 81, 'Rahat Commercial Area', '2019-01-02 19:10:39'),
(513, 1, 8, 52, 81, 'Ittehad Commercial Area', '2019-01-02 19:10:05'),
(512, 1, 8, 52, 81, 'Nishat Commercial Area', '2019-01-02 19:09:25'),
(511, 1, 8, 52, 81, 'Muslim Commercial Area', '2019-01-02 19:08:56'),
(510, 1, 8, 52, 81, 'Shahbaz Commercial Area', '2019-01-02 19:08:22'),
(509, 1, 8, 52, 81, 'Bukhari Commercial', '2019-01-02 19:07:39'),
(508, 1, 8, 52, 81, 'Accumulative Sector', '2019-01-02 19:07:10'),
(507, 1, 8, 52, 80, 'Zamzama Commercial Area', '2019-01-02 19:06:26'),
(506, 1, 8, 52, 80, 'Tauheed Commercial Area', '2019-01-02 19:05:49'),
(505, 1, 8, 52, 80, 'Saba Commercial Area', '2019-01-02 19:02:36'),
(504, 1, 8, 52, 80, 'Badar Commercial Area', '2019-01-02 19:02:06'),
(503, 1, 8, 52, 80, 'Extension', '2019-01-02 19:01:38'),
(502, 1, 8, 52, 79, 'Accumulative Sector ', '2019-01-02 19:01:05'),
(501, 1, 8, 52, 78, 'Accumulative', '2019-01-02 19:00:32'),
(500, 1, 8, 52, 77, 'Accumulative ', '2019-01-02 18:59:55'),
(499, 1, 8, 52, 77, 'Extension', '2019-01-02 18:59:31'),
(498, 1, 8, 52, 76, 'Accumulative ', '2019-01-02 18:58:40'),
(497, 1, 8, 52, 75, 'Others', '2019-01-02 18:58:02'),
(496, 1, 8, 52, 75, 'Oasis', '2019-01-02 18:57:41'),
(495, 1, 8, 52, 75, 'Sector 17', '2019-01-02 18:57:05'),
(494, 1, 8, 52, 75, 'Sector 16', '2019-01-02 18:56:44'),
(493, 1, 8, 52, 75, 'Sector 15', '2019-01-02 18:56:23'),
(492, 1, 8, 52, 75, 'Sector 14', '2019-01-02 18:55:55'),
(491, 1, 8, 52, 75, 'Sector 13', '2019-01-02 18:55:32'),
(490, 1, 8, 52, 75, 'Sector 12', '2019-01-02 18:55:09'),
(489, 1, 8, 52, 75, 'Sector 11', '2019-01-02 18:54:40'),
(488, 1, 8, 52, 75, 'Sector 10', '2019-01-02 18:54:11'),
(487, 1, 8, 52, 75, 'Sector 9', '2019-01-02 18:53:44'),
(486, 1, 8, 52, 75, 'Sector 8', '2019-01-02 18:53:17'),
(485, 1, 8, 52, 75, 'Sector 7', '2019-01-02 18:52:43'),
(484, 1, 8, 52, 75, 'Sector 6', '2019-01-02 18:52:18'),
(483, 1, 8, 52, 75, 'Sector 5', '2019-01-02 13:50:03'),
(481, 1, 8, 52, 75, 'Sector 4', '2019-01-02 13:49:06'),
(480, 1, 8, 52, 75, 'Sector 3', '2019-01-02 13:48:39'),
(479, 1, 8, 52, 75, 'Sector 2', '2019-01-02 13:31:00'),
(477, 1, 8, 52, 75, 'Sector 1', '2019-01-02 13:29:54'),
(476, 1, 8, 52, 75, 'CBD Commercial', '2019-01-02 13:29:25'),
(475, 1, 7, 44, 69, 'Others', '2019-01-02 13:27:18'),
(474, 1, 7, 44, 69, 'Sector T', '2019-01-02 13:26:57'),
(473, 1, 7, 44, 69, 'Sector S', '2019-01-02 13:26:38'),
(472, 1, 7, 44, 69, 'Sector R', '2019-01-02 13:26:17'),
(471, 1, 7, 44, 69, 'Sector Q', '2019-01-02 13:25:55'),
(470, 1, 7, 44, 69, 'Sector P', '2019-01-02 13:25:38'),
(469, 1, 7, 44, 69, 'Sector N', '2019-01-02 13:24:44'),
(468, 1, 7, 44, 69, 'Sector M', '2019-01-02 13:24:25'),
(467, 1, 7, 44, 69, 'Sector L', '2019-01-02 13:24:06'),
(466, 1, 7, 44, 69, 'Sector K', '2019-01-02 13:23:44'),
(464, 1, 7, 44, 69, 'Sector J', '2019-01-02 13:23:06'),
(463, 1, 7, 44, 69, 'Sector H', '2019-01-02 13:22:47'),
(462, 1, 7, 44, 69, 'Sector G', '2019-01-02 13:22:27'),
(461, 1, 7, 44, 69, 'Sector F', '2019-01-02 13:22:10'),
(460, 1, 7, 44, 69, 'Sector E', '2019-01-02 13:21:45'),
(459, 1, 7, 44, 69, 'Sector D', '2019-01-02 13:21:30'),
(458, 1, 7, 44, 69, 'Sector C', '2019-01-02 13:21:17'),
(457, 1, 7, 44, 69, 'Sector B', '2019-01-02 13:21:02'),
(456, 1, 7, 44, 69, 'Sector A', '2019-01-02 13:20:50'),
(455, 1, 7, 44, 74, 'Others', '2019-01-02 13:20:30'),
(454, 1, 7, 44, 74, 'Zone IX', '2019-01-02 13:19:54'),
(453, 1, 7, 44, 74, 'Zone VIII', '2019-01-02 13:19:33'),
(452, 1, 7, 44, 74, 'Zone VII', '2019-01-02 13:19:11'),
(451, 1, 7, 44, 74, 'Zone VI', '2019-01-02 13:18:51'),
(450, 1, 7, 44, 74, 'Zone V', '2019-01-02 13:18:29'),
(449, 1, 7, 44, 74, 'Sector E', '2019-01-02 13:18:07'),
(448, 1, 7, 44, 74, 'Sector D', '2019-01-02 13:17:41'),
(447, 1, 7, 44, 74, 'Sector C', '2019-01-02 13:17:09'),
(446, 1, 7, 44, 74, 'Sector B', '2019-01-02 13:16:54'),
(445, 1, 7, 44, 74, 'Sector A', '2019-01-02 13:16:40'),
(444, 1, 7, 44, 67, 'Others', '2019-01-02 13:15:30'),
(443, 1, 7, 44, 67, 'Sector M', '2019-01-02 13:15:11'),
(442, 1, 7, 44, 67, 'Sector L', '2019-01-02 13:14:36'),
(441, 1, 7, 44, 67, 'Sector K', '2019-01-02 13:14:20'),
(440, 1, 7, 44, 67, 'Sector J', '2019-01-02 13:13:52'),
(439, 1, 7, 44, 67, 'Sector H', '2019-01-02 13:13:26'),
(438, 1, 7, 44, 67, 'Sector G', '2019-01-02 13:13:06'),
(437, 1, 7, 44, 67, 'Sector F', '2019-01-02 13:12:45'),
(436, 1, 7, 44, 67, 'Sector E', '2019-01-02 13:12:23'),
(435, 1, 7, 44, 67, 'Sector D', '2019-01-02 13:12:05'),
(434, 1, 7, 44, 67, 'Sector C', '2019-01-02 13:11:47'),
(433, 1, 7, 44, 67, 'Sector B', '2019-01-02 13:11:31'),
(432, 1, 7, 44, 67, 'Sector A', '2019-01-02 13:11:16'),
(431, 1, 7, 44, 70, 'Bogenvelia Block', '2019-01-02 13:10:48'),
(430, 1, 7, 44, 64, 'Others', '2019-01-02 13:10:09'),
(429, 1, 7, 44, 64, 'Sector F', '2019-01-02 13:09:39'),
(428, 1, 7, 44, 64, 'Sector E', '2019-01-02 13:09:00'),
(427, 1, 7, 44, 64, 'Sector D', '2019-01-02 13:08:28'),
(426, 1, 7, 44, 64, 'Sector C Orchid', '2019-01-02 13:08:08'),
(425, 1, 7, 44, 64, 'Sector C', '2019-01-02 13:07:47'),
(424, 1, 7, 44, 64, 'Sector B', '2019-01-02 13:07:33'),
(423, 1, 7, 44, 64, 'Sector B 1', '2019-01-02 13:07:20'),
(422, 1, 7, 44, 64, 'Sector A', '2019-01-02 13:07:03'),
(421, 1, 7, 44, 64, 'Sector A 1', '2019-01-02 13:06:47'),
(420, 1, 7, 44, 68, 'River View Block', '2019-01-02 13:05:52'),
(419, 1, 7, 44, 68, 'Sector H', '2019-01-02 13:05:13'),
(418, 1, 7, 44, 68, 'Sector G', '2019-01-02 13:04:51'),
(417, 1, 7, 44, 68, 'Sector F', '2019-01-02 13:04:20'),
(416, 1, 7, 44, 68, 'Sector D', '2019-01-02 13:03:56'),
(415, 1, 7, 44, 68, 'Sector C', '2019-01-02 13:03:35'),
(414, 1, 7, 44, 68, 'Sector B', '2019-01-02 13:03:13'),
(413, 1, 7, 44, 68, 'Sector A', '2019-01-02 13:02:57'),
(412, 1, 7, 44, 70, 'Gardenia Block', '2019-01-02 13:01:43'),
(411, 1, 7, 44, 70, 'Snowdrop Block', '2019-01-02 13:01:24'),
(410, 1, 7, 44, 70, 'Zinia Block', '2019-01-02 13:00:57'),
(409, 1, 7, 44, 70, 'Tulip Block', '2019-01-02 13:00:39'),
(408, 1, 7, 44, 70, 'Magnolia Block', '2019-01-02 12:59:53'),
(407, 1, 7, 44, 70, 'Lavender Block', '2019-01-02 12:59:28'),
(406, 1, 7, 44, 70, 'Lotus Block', '2019-01-02 12:59:09'),
(405, 1, 7, 44, 70, 'Rose Block', '2019-01-02 12:58:49'),
(404, 1, 7, 44, 70, 'Marigold Block', '2019-01-02 12:58:27'),
(403, 1, 7, 44, 70, 'Sun Flower Block', '2019-01-02 12:57:53'),
(402, 1, 7, 44, 70, 'Daisy Block', '2019-01-02 12:57:36'),
(401, 1, 7, 44, 70, 'Eglantine Block', '2019-01-02 12:57:17'),
(400, 1, 7, 44, 70, 'Gloxinia Block', '2019-01-02 12:56:58'),
(399, 1, 7, 44, 70, 'Iris Block', '2019-01-02 12:56:12'),
(398, 1, 7, 44, 70, 'Jasmine Block', '2019-01-02 12:55:47'),
(397, 1, 7, 44, 70, 'Daffodils Block', '2019-01-02 12:55:11'),
(396, 1, 7, 44, 70, 'Lilly Block', '2019-01-02 12:54:41'),
(395, 1, 7, 44, 70, 'Oleander Block', '2019-01-02 12:54:21'),
(394, 1, 7, 44, 70, 'Blue Bell Block', '2019-01-02 12:54:06'),
(392, 1, 7, 44, 70, 'Homes', '2019-01-02 12:53:15'),
(391, 1, 7, 44, 65, 'Sector J', '2019-01-02 12:51:21'),
(390, 1, 7, 44, 65, 'Sector H', '2019-01-02 12:50:56'),
(389, 1, 7, 44, 65, 'Sector G', '2019-01-02 12:50:39'),
(388, 1, 7, 44, 65, 'Sector F', '2019-01-02 12:50:15'),
(386, 1, 7, 44, 65, 'Sector D', '2019-01-02 12:48:15'),
(387, 1, 7, 44, 65, 'Sector E', '2019-01-02 12:48:34'),
(384, 1, 7, 44, 65, 'Sector C', '2019-01-02 12:47:15'),
(382, 1, 7, 44, 65, 'Sector A', '2019-01-02 12:46:32'),
(383, 1, 7, 44, 65, 'Sector B', '2019-01-02 12:46:54'),
(753, 1, 17, 58, 117, 'Accumulative', '2019-01-02 22:12:12'),
(754, 1, 17, 58, 118, 'Accumulative', '2019-01-02 22:12:30'),
(755, 1, 12, 57, 119, 'Sector A', '2019-01-02 22:12:51'),
(756, 1, 12, 57, 119, 'Sector B', '2019-01-02 22:13:41'),
(757, 1, 12, 57, 119, 'Sector C', '2019-01-02 22:14:09'),
(758, 1, 12, 57, 119, 'Sector D', '2019-01-02 22:14:51'),
(759, 1, 12, 57, 119, 'Sector E', '2019-01-02 22:15:29'),
(760, 1, 12, 57, 119, 'Sector F', '2019-01-02 22:16:02'),
(761, 1, 12, 57, 119, 'Sector G', '2019-01-02 22:16:42'),
(762, 1, 12, 57, 119, 'Sector H', '2019-01-02 22:17:04'),
(763, 1, 12, 57, 119, 'Allocation', '2019-01-02 22:17:46'),
(764, 1, 12, 57, 119, 'Affidavit ', '2019-01-02 22:18:12'),
(765, 1, 12, 57, 119, 'Others', '2019-01-02 22:18:30'),
(766, 1, 11, 59, 120, 'Accumulative', '2019-01-02 22:19:03'),
(767, 1, 11, 60, 121, 'Accumulative', '2019-01-02 22:19:47'),
(768, 1, 10, 61, 124, 'Accumulative', '2019-01-02 22:20:14'),
(769, 1, 10, 61, 123, 'Accumulative', '2019-01-02 22:20:29'),
(770, 1, 10, 61, 125, 'Others', '2019-01-02 22:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `society_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `society_name` varchar(200) NOT NULL,
  `society_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`society_id`, `country_id`, `city_id`, `society_name`, `society_created_date`) VALUES
(55, 1, 16, 'Makran Costal Highway', '2019-01-02 11:38:29'),
(54, 1, 3, 'Defence Road City Garden', '2019-01-02 11:38:03'),
(53, 1, 3, 'DHA Defence', '2019-01-02 11:37:39'),
(52, 1, 8, 'DHA Defence', '2019-01-02 11:37:19'),
(51, 1, 8, 'Defence Garden ', '2019-01-02 11:36:47'),
(50, 1, 8, 'Defence View Society', '2019-01-02 11:36:32'),
(49, 1, 3, 'DHA 11 Rahbar', '2019-01-02 11:36:00'),
(48, 1, 3, 'DHA City', '2019-01-02 11:35:42'),
(47, 1, 3, 'Defence Road Dream Gardens', '2019-01-02 11:35:21'),
(46, 1, 3, 'AWT Army Welfare Trust', '2019-01-02 11:35:01'),
(45, 1, 7, 'AWT Army Welfare Trust', '2019-01-02 11:28:45'),
(44, 1, 7, 'DHA Defence', '2019-01-02 11:04:37'),
(56, 1, 4, 'AWT Army Welfare Trust', '2019-01-02 11:39:04'),
(57, 1, 12, 'DHA Defence', '2019-01-02 11:39:36'),
(58, 1, 17, 'DHA Defence', '2019-01-02 11:40:00'),
(59, 1, 11, 'DHA Defence', '2019-01-02 11:40:24'),
(60, 1, 11, 'DHA Villas', '2019-01-02 11:41:18'),
(61, 1, 10, 'DHA Defence', '2019-01-02 11:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `estate_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `cell` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `country` int(11) NOT NULL DEFAULT '1',
  `city` int(11) NOT NULL,
  `about_self` text NOT NULL,
  `work_experience` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `profile_image` varchar(200) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1',
  `user_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `estate_name`, `email`, `password`, `phone`, `cell`, `fax`, `address`, `zip_code`, `country`, `city`, `about_self`, `work_experience`, `designation`, `profile_image`, `user_role`, `user_created_date`) VALUES
(1, 'Syed Hassan Ghazanfer', 'Habro Real Estate Consultant', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '030000000000', '0300999999', '0300000777', '', '', 1, 7, '', '3 years', 'Agent', 'habro6.png', 0, '2018-08-06 11:54:04'),
(2, 'Sufyan Naveed', 'Sufyan Real Consultant', 'sufyan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0300000009', '0300000009', '0300999999', 'ABC', '510', 1, 7, 'Hi! My name is Tom. I’m 16 and I live in Warsaw which is the capital of Poland. Actually I come from another city - Wroclaw, where I lived for eleven years, but five years ago, my dad decided to change his job, and we all moved to Warsaw. I have a sister – Maja. She is 18 and she had been to USA two years ago and now she studies law at the University of Warsaw. My dad works for a German company. My mom used to teatch at the University and now, she works as a computer analitist.\r\n\r\nI’m interested in computer science, music, sport and fantasy literature. Computers first appered in my life when I was seven. Then I had got my first computer. It was Commodore 64 and I remember myself thinking, that it was the best thing in the world. I was playing it whenever I could. Then I had got my first PC. At first, I was just playing computer games, but some time later, I noticed that I could do a lot more things with the computer, for example programming. Now, I can already programue in Pascal, C++ and HTML. I have my own site on the internet and I have done many programues. I hope that in the future I will get a job as a computer scientist.', '3 years', 'Agent', 'habro6.png', 1, '2018-08-08 18:02:30'),
(4, 'Sufyan Naveed', 'Properman Real Estate', 'sufyan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0300000009', '0300000009', '0300999999', 'ABC', '510', 1, 7, 'Hi! My name is Tom. I’m 16 and I live in Warsaw which is the capital of Poland. Actually I come from another city - Wroclaw, where I lived for eleven years, but five years ago, my dad decided to change his job, and we all moved to Warsaw. I have a sister – Maja. She is 18 and she had been to USA two years ago and now she studies law at the University of Warsaw. My dad works for a German company. My mom used to teatch at the University and now, she works as a computer analitist.\r\n\r\nI’m interested in computer science, music, sport and fantasy literature. Computers first appered in my life when I was seven. Then I had got my first computer. It was Commodore 64 and I remember myself thinking, that it was the best thing in the world. I was playing it whenever I could. Then I had got my first PC. At first, I was just playing computer games, but some time later, I noticed that I could do a lot more things with the computer, for example programming. Now, I can already programue in Pascal, C++ and HTML. I have my own site on the internet and I have done many programues. I hope that in the future I will get a job as a computer scientist.', NULL, NULL, 'habro6.png', 1, '2018-08-08 18:02:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_subscribe`
--
ALTER TABLE `blog_subscribe`
  ADD PRIMARY KEY (`blog_subscribe_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`investment_id`);

--
-- Indexes for table `listing_quota`
--
ALTER TABLE `listing_quota`
  ADD PRIMARY KEY (`listing_quota_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `market_updates`
--
ALTER TABLE `market_updates`
  ADD PRIMARY KEY (`market_update_id`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`phase_id`);

--
-- Indexes for table `post_ads`
--
ALTER TABLE `post_ads`
  ADD PRIMARY KEY (`post_ads_id`);

--
-- Indexes for table `purchaser_guide`
--
ALTER TABLE `purchaser_guide`
  ADD PRIMARY KEY (`purchaser_guide_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`society_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_subscribe`
--
ALTER TABLE `blog_subscribe`
  MODIFY `blog_subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `investment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `listing_quota`
--
ALTER TABLE `listing_quota`
  MODIFY `listing_quota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `market_updates`
--
ALTER TABLE `market_updates`
  MODIFY `market_update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `post_ads`
--
ALTER TABLE `post_ads`
  MODIFY `post_ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `purchaser_guide`
--
ALTER TABLE `purchaser_guide`
  MODIFY `purchaser_guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `society_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
