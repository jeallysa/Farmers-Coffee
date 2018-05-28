-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 07:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

CREATE TABLE `activitylogs` (
  `activitylogs_id` int(11) NOT NULL,
  `user_no` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_coffreturn`
--

CREATE TABLE `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL,
  `client_dr` varchar(20) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `coff_resolveDate` date DEFAULT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No',
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `walkinPo_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_delivery`
--

CREATE TABLE `client_delivery` (
  `client_deliveryID` int(11) NOT NULL,
  `client_dr` varchar(20) NOT NULL,
  `contractPO_id` int(11) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `deliver_quantity` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL DEFAULT '0',
  `payment_remarks` varchar(25) NOT NULL DEFAULT 'unpaid',
  `return` varchar(10) NOT NULL DEFAULT 'Received'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `client_delivery`
--
DELIMITER $$
CREATE TRIGGER `update_pay_stat` BEFORE UPDATE ON `client_delivery` FOR EACH ROW IF NEW.client_balance = NEW.amount_paid THEN
	SET NEW.payment_remarks = 'paid';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `client_machreturn`
--

CREATE TABLE `client_machreturn` (
  `client_machReturnID` int(11) NOT NULL,
  `mach_returnDate` date NOT NULL,
  `mach_returnQty` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  `mach_resolveDate` date DEFAULT NULL,
  `resolved` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coffee_blend`
--

CREATE TABLE `coffee_blend` (
  `blend_id` int(11) NOT NULL,
  `blend` varchar(50) NOT NULL,
  `package_id` varchar(45) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_qty` int(11) NOT NULL,
  `blend_physcount` int(11) NOT NULL DEFAULT '0',
  `blend_remarks` varchar(45) DEFAULT NULL,
  `blend_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  `sticker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_returns`
--

CREATE TABLE `company_returns` (
  `company_returnID` int(50) NOT NULL,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(50) NOT NULL,
  `sup_returnQty` int(50) NOT NULL,
  `sup_returnItem` int(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL,
  `drNo` varchar(50) NOT NULL,
  `poNo` int(50) NOT NULL,
  `res` varchar(45) NOT NULL DEFAULT 'unresolved',
  `return_dr` varchar(50) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `categoryr` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(50) NOT NULL,
  `date_started` date NOT NULL,
  `blend_id` int(11) NOT NULL,
  `client_id` int(50) NOT NULL,
  `required_qty` int(11) NOT NULL,
  `credit_term` varchar(20) NOT NULL,
  `mach_id` int(50) NOT NULL,
  `date_expiration` date DEFAULT NULL,
  `seen` varchar(45) DEFAULT '0',
  `seen_admin` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracted_client`
--

CREATE TABLE `contracted_client` (
  `client_id` int(11) NOT NULL,
  `client_company` varchar(70) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_contact` varchar(12) NOT NULL,
  `client_type` varchar(20) NOT NULL,
  `client_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracted_po`
--

CREATE TABLE `contracted_po` (
  `contractPO_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivered_qty` int(11) NOT NULL DEFAULT '0',
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  `undoDel` int(11) NOT NULL DEFAULT '0',
  `roast` varchar(10) NOT NULL DEFAULT 'No',
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `contracted_po`
--
DELIMITER $$
CREATE TRIGGER `update_del_stat` BEFORE UPDATE ON `contracted_po` FOR EACH ROW IF NEW.contractPO_qty = NEW.delivered_qty THEN
	SET NEW.delivery_stat = 'delivered';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inv_transact`
--

CREATE TABLE `inv_transact` (
  `trans_id` int(11) NOT NULL,
  `transact_date` date NOT NULL,
  `company_returnID` int(11) DEFAULT NULL,
  `client_returnID` int(11) DEFAULT NULL,
  `po_supplier` int(11) DEFAULT NULL,
  `po_client` int(11) DEFAULT NULL,
  `sales_inv` int(11) DEFAULT NULL,
  `walkin_return` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `mach_id` int(11) NOT NULL,
  `brewer` varchar(50) NOT NULL,
  `brewer_type` varchar(50) NOT NULL,
  `mach_reorder` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `mach_physcount` int(11) NOT NULL DEFAULT '0',
  `mach_remarks` varchar(45) DEFAULT NULL,
  `mach_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine_out`
--

CREATE TABLE `machine_out` (
  `mach_salesID` int(11) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(60) NOT NULL DEFAULT 'Received',
  `status` varchar(60) NOT NULL,
  `mach_stat` varchar(45) NOT NULL DEFAULT '0',
  `contract_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `package_id` int(11) NOT NULL,
  `package_type` varchar(20) NOT NULL,
  `package_size` varchar(20) NOT NULL,
  `package_reorder` int(11) NOT NULL,
  `package_stock` int(11) NOT NULL,
  `package_physcount` int(11) NOT NULL DEFAULT '0',
  `package_remarks` varchar(45) DEFAULT NULL,
  `package_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_contracted`
--

CREATE TABLE `payment_contracted` (
  `paid_id` int(11) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_supplier`
--

CREATE TABLE `payment_supplier` (
  `supPayment_id` int(11) NOT NULL,
  `supPO_id` int(11) NOT NULL,
  `supPayment_date` date NOT NULL,
  `supPayment_amount` int(11) NOT NULL,
  `sup_balance` int(11) NOT NULL,
  `supPayment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proportions`
--

CREATE TABLE `proportions` (
  `proportion_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raw_coffee`
--

CREATE TABLE `raw_coffee` (
  `raw_id` int(11) NOT NULL,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_stock` int(50) NOT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_physcount` int(11) NOT NULL DEFAULT '0',
  `raw_remarks` varchar(45) DEFAULT NULL,
  `raw_discrepancy` int(11) NOT NULL DEFAULT '0',
  `inventory_date` date DEFAULT NULL,
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  `raw_type` varchar(50) NOT NULL,
  `category` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sticker`
--

CREATE TABLE `sticker` (
  `sticker_id` int(11) NOT NULL,
  `sticker` varchar(50) NOT NULL,
  `sticker_reorder` int(11) NOT NULL,
  `sticker_stock` int(11) NOT NULL,
  `sticker_physcount` int(11) NOT NULL DEFAULT '0',
  `sticker_remarks` varchar(45) DEFAULT NULL,
  `sticker_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  `sticker_type` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT '3',
  `inventory_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_productID` int(11) NOT NULL,
  `sup_company` varchar(70) NOT NULL,
  `sup_lname` varchar(50) NOT NULL,
  `sup_fname` varchar(50) NOT NULL,
  `sup_position` varchar(50) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  `sup_email` varchar(50) NOT NULL,
  `sup_contact` varchar(12) NOT NULL,
  `sup_activation` int(11) NOT NULL DEFAULT '1',
  `date_reg` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_delivery`
--

CREATE TABLE `supplier_delivery` (
  `sup_deliveryID` int(11) NOT NULL,
  `supPO_id` int(11) NOT NULL,
  `supDelivery_stat` varchar(20) NOT NULL,
  `date_recieved` date NOT NULL,
  `yield_weight` int(11) NOT NULL,
  `yield` int(11) NOT NULL,
  `recieved_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_po`
--

CREATE TABLE `supplier_po` (
  `supPO_id` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `supPO_date` date NOT NULL,
  `supPO_qty` int(11) NOT NULL,
  `truck_fee` int(11) NOT NULL,
  `sup_credit` text NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `sup_delivery` varchar(20) NOT NULL DEFAULT 'pending',
  `supPayment_stat` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_delivery`
--

CREATE TABLE `supp_delivery` (
  `supp_delivery_id` int(50) NOT NULL,
  `supp_po_ordered_id` int(50) NOT NULL,
  `supp_po_id` int(50) NOT NULL,
  `date_received` date NOT NULL,
  `received` decimal(50,3) NOT NULL DEFAULT '0.000',
  `yield_weight` decimal(50,3) NOT NULL,
  `yields` decimal(50,3) NOT NULL,
  `received_by` varchar(45) NOT NULL,
  `drNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_payment`
--

CREATE TABLE `supp_payment` (
  `supp_payment_id` int(50) NOT NULL,
  `supp_po_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_po`
--

CREATE TABLE `supp_po` (
  `supp_po_id` int(50) NOT NULL,
  `supp_id` int(50) NOT NULL,
  `suppPO_date` date NOT NULL,
  `trucking_fee` decimal(20,2) NOT NULL,
  `supp_creditTerm` varchar(45) NOT NULL,
  `total_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `delivery_stat` int(11) DEFAULT '0',
  `payment_stat` int(11) DEFAULT '0',
  `partial_stat` int(11) DEFAULT '0',
  `payment` decimal(20,2) DEFAULT NULL,
  `date_archived` date DEFAULT NULL,
  `archive` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_po_ordered`
--

CREATE TABLE `supp_po_ordered` (
  `supp_po_ordered_id` int(50) NOT NULL,
  `supp_po_id` int(50) NOT NULL,
  `item` varchar(45) NOT NULL,
  `qty` decimal(50,3) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Type',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(20,2) DEFAULT NULL,
  `received` decimal(50,3) DEFAULT '0.000',
  `categoryx` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0',
  `mach_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po`
--

CREATE TABLE `supp_temp_po` (
  `id_supp_temp_PO` int(50) NOT NULL,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(20,2) NOT NULL,
  `credit_term` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po_order`
--

CREATE TABLE `supp_temp_po_order` (
  `idsupp_temp_po_order` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `qty` decimal(50,3) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitPrice` decimal(20,2) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `categoryx` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transac_history`
--

CREATE TABLE `transac_history` (
  `transac_id` int(11) NOT NULL,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_mach`
--

CREATE TABLE `trans_mach` (
  `tmach_id` int(11) NOT NULL,
  `mach_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_pack`
--

CREATE TABLE `trans_pack` (
  `tp_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_raw`
--

CREATE TABLE `trans_raw` (
  `tr_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `stat` varchar(45) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_stick`
--

CREATE TABLE `trans_stick` (
  `tstick_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_fname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'jhcs',
  `u_activation` int(11) NOT NULL DEFAULT '1',
  `u_type` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `walkin_raw`
--

CREATE TABLE `walkin_raw` (
  `wiraw_id` int(11) NOT NULL,
  `walkin_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `walkin_sales`
--

CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `walkin_returns` int(11) NOT NULL DEFAULT '0',
  `coff_remark` varchar(80) NOT NULL DEFAULT 'Received',
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `inv_stat` varchar(45) NOT NULL DEFAULT '0',
  `pckng_stat` varchar(45) NOT NULL DEFAULT '0',
  `stckr_stat` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD PRIMARY KEY (`activitylogs_id`),
  ADD UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  ADD PRIMARY KEY (`client_coffReturnID`);

--
-- Indexes for table `client_delivery`
--
ALTER TABLE `client_delivery`
  ADD PRIMARY KEY (`client_deliveryID`);

--
-- Indexes for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  ADD PRIMARY KEY (`client_machReturnID`);

--
-- Indexes for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  ADD PRIMARY KEY (`blend_id`);

--
-- Indexes for table `company_returns`
--
ALTER TABLE `company_returns`
  ADD PRIMARY KEY (`company_returnID`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `contracted_client`
--
ALTER TABLE `contracted_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contracted_po`
--
ALTER TABLE `contracted_po`
  ADD PRIMARY KEY (`contractPO_id`);

--
-- Indexes for table `inv_transact`
--
ALTER TABLE `inv_transact`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `inv_trans1_idx` (`company_returnID`),
  ADD KEY `inv_trans2_idx` (`client_returnID`),
  ADD KEY `inv_trans3_idx` (`po_supplier`),
  ADD KEY `inv_trans4_idx` (`po_client`),
  ADD KEY `inv_trans5_idx` (`sales_inv`),
  ADD KEY `inv_trans6_idx` (`walkin_return`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`mach_id`);

--
-- Indexes for table `machine_out`
--
ALTER TABLE `machine_out`
  ADD PRIMARY KEY (`mach_salesID`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment_contracted`
--
ALTER TABLE `payment_contracted`
  ADD PRIMARY KEY (`paid_id`);

--
-- Indexes for table `payment_supplier`
--
ALTER TABLE `payment_supplier`
  ADD PRIMARY KEY (`supPayment_id`);

--
-- Indexes for table `proportions`
--
ALTER TABLE `proportions`
  ADD PRIMARY KEY (`proportion_id`),
  ADD KEY `raw_prop_idx` (`raw_id`),
  ADD KEY `blend_prop_idx` (`blend_id`);

--
-- Indexes for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  ADD PRIMARY KEY (`raw_id`);

--
-- Indexes for table `sticker`
--
ALTER TABLE `sticker`
  ADD PRIMARY KEY (`sticker_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `supplier_delivery`
--
ALTER TABLE `supplier_delivery`
  ADD PRIMARY KEY (`sup_deliveryID`);

--
-- Indexes for table `supplier_po`
--
ALTER TABLE `supplier_po`
  ADD PRIMARY KEY (`supPO_id`);

--
-- Indexes for table `supp_delivery`
--
ALTER TABLE `supp_delivery`
  ADD PRIMARY KEY (`supp_delivery_id`);

--
-- Indexes for table `supp_payment`
--
ALTER TABLE `supp_payment`
  ADD PRIMARY KEY (`supp_payment_id`);

--
-- Indexes for table `supp_po`
--
ALTER TABLE `supp_po`
  ADD PRIMARY KEY (`supp_po_id`);

--
-- Indexes for table `supp_po_ordered`
--
ALTER TABLE `supp_po_ordered`
  ADD PRIMARY KEY (`supp_po_ordered_id`);

--
-- Indexes for table `supp_temp_po`
--
ALTER TABLE `supp_temp_po`
  ADD PRIMARY KEY (`id_supp_temp_PO`);

--
-- Indexes for table `supp_temp_po_order`
--
ALTER TABLE `supp_temp_po_order`
  ADD PRIMARY KEY (`idsupp_temp_po_order`);

--
-- Indexes for table `transac_history`
--
ALTER TABLE `transac_history`
  ADD PRIMARY KEY (`transac_id`);

--
-- Indexes for table `trans_mach`
--
ALTER TABLE `trans_mach`
  ADD PRIMARY KEY (`tmach_id`),
  ADD KEY `mach_trans_idx` (`mach_id`),
  ADD KEY `mach_to_mtm_idx` (`mach_id`),
  ADD KEY `mach_trans_idx1` (`trans_id`);

--
-- Indexes for table `trans_pack`
--
ALTER TABLE `trans_pack`
  ADD PRIMARY KEY (`tp_id`),
  ADD KEY `t_pack_idx` (`package_id`),
  ADD KEY `t_pack_transact_idx` (`trans_id`);

--
-- Indexes for table `trans_raw`
--
ALTER TABLE `trans_raw`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `transact_idx` (`trans_id`),
  ADD KEY `raw_idx` (`raw_coffeeid`);

--
-- Indexes for table `trans_stick`
--
ALTER TABLE `trans_stick`
  ADD PRIMARY KEY (`tstick_id`),
  ADD KEY `stick_trans_idx` (`sticker_id`),
  ADD KEY `stick_trans2_idx` (`trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `walkin_raw`
--
ALTER TABLE `walkin_raw`
  ADD PRIMARY KEY (`wiraw_id`),
  ADD KEY `raw_wiraw_idx` (`raw_id`),
  ADD KEY `walk_wiraw_idx` (`walkin_id`);

--
-- Indexes for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  ADD PRIMARY KEY (`walkin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylogs`
--
ALTER TABLE `activitylogs`
  MODIFY `activitylogs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  MODIFY `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_delivery`
--
ALTER TABLE `client_delivery`
  MODIFY `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  MODIFY `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  MODIFY `blend_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_returns`
--
ALTER TABLE `company_returns`
  MODIFY `company_returnID` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracted_client`
--
ALTER TABLE `contracted_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracted_po`
--
ALTER TABLE `contracted_po`
  MODIFY `contractPO_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inv_transact`
--
ALTER TABLE `inv_transact`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `mach_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `machine_out`
--
ALTER TABLE `machine_out`
  MODIFY `mach_salesID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_contracted`
--
ALTER TABLE `payment_contracted`
  MODIFY `paid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_supplier`
--
ALTER TABLE `payment_supplier`
  MODIFY `supPayment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proportions`
--
ALTER TABLE `proportions`
  MODIFY `proportion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  MODIFY `raw_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `sticker_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_delivery`
--
ALTER TABLE `supplier_delivery`
  MODIFY `sup_deliveryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_po`
--
ALTER TABLE `supplier_po`
  MODIFY `supPO_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_delivery`
--
ALTER TABLE `supp_delivery`
  MODIFY `supp_delivery_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_payment`
--
ALTER TABLE `supp_payment`
  MODIFY `supp_payment_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_po`
--
ALTER TABLE `supp_po`
  MODIFY `supp_po_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_po_ordered`
--
ALTER TABLE `supp_po_ordered`
  MODIFY `supp_po_ordered_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_temp_po`
--
ALTER TABLE `supp_temp_po`
  MODIFY `id_supp_temp_PO` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supp_temp_po_order`
--
ALTER TABLE `supp_temp_po_order`
  MODIFY `idsupp_temp_po_order` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transac_history`
--
ALTER TABLE `transac_history`
  MODIFY `transac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_mach`
--
ALTER TABLE `trans_mach`
  MODIFY `tmach_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_pack`
--
ALTER TABLE `trans_pack`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_raw`
--
ALTER TABLE `trans_raw`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_stick`
--
ALTER TABLE `trans_stick`
  MODIFY `tstick_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `walkin_raw`
--
ALTER TABLE `walkin_raw`
  MODIFY `wiraw_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  MODIFY `walkin_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
