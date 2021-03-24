<?php

/**
 * Salsify Integration for Isotope eCommerce and Contao CMS
 *
 * Copyright (C) 2021 Andrew Stevens Consulting
 *
 * @package	   asconsulting/isotope_salsify
 * @link	   https://andrewstevens.consulting
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['sd_amount'] 					= array('Amounts', 'Amounts available for donation. Leave blank for user defined amounts.');
$GLOBALS['TL_LANG']['tl_module']['sd_shippingMinimum'] 			= array('Shipping Minimum', 'Minimum donation to show shipping fields.');
$GLOBALS['TL_LANG']['tl_module']['sd_paymentType'] 				= array('Payment Type', 'Type of donation being made.');
$GLOBALS['TL_LANG']['tl_module']['sd_billingFields'] 			= array('Billing Fields', 'Fields to show for the billing address.');
$GLOBALS['TL_LANG']['tl_module']['sd_shippingFields'] 			= array('Shipping Fields', 'Fields to show for the shipping address.');
$GLOBALS['TL_LANG']['tl_module']['sd_paymentProcessor'] 		= array('Payment Processor', 'Payment processor to use for donation.');
$GLOBALS['TL_LANG']['tl_module']['sd_authorizeApiId'] 			= array('Authorize.NET API ID', 'API ID for Authorize.NET.');
$GLOBALS['TL_LANG']['tl_module']['sd_authorizeTransactionKey'] 	= array('Authorize.NET Transation Key', 'Transaction Key for Authorize.NET.');
$GLOBALS['TL_LANG']['tl_module']['sd_authorizeSandboxMode'] 	= array('Authorize.NET Sandbox Mode', 'Process Authorize.NET payments in Sandbox mode.');
$GLOBALS['TL_LANG']['tl_module']['sd_paypalClientId'] 			= array('PayPal Client ID', 'Client ID from PayPal.');
$GLOBALS['TL_LANG']['tl_module']['sd_paypalClientSecret'] 		= array('PayPal Client Secret', 'Client Secret for PayPal.');
$GLOBALS['TL_LANG']['tl_module']['sd_paypalSandboxMode'] 		= array('PayPal Sandbox Mode', 'Process PayPal payments in Sandbox mode.');
$GLOBALS['TL_LANG']['tl_module']['sd_stripePublishableKey'] 	= array('Stripe Publishable Key', 'Publishable Key for Stripe.');
$GLOBALS['TL_LANG']['tl_module']['sd_stripeSecretKey'] 			= array('Stripe Secret Key', 'Secret Key for Stripe.');
$GLOBALS['TL_LANG']['tl_module']['sd_stripeVersion'] 			= array('Stripe Version', 'Set a specific API version to use for Stripe.');
$GLOBALS['TL_LANG']['tl_module']['sd_stripeSandboxMode'] 		= array('Stripe Sandbox Mode', 'Process Stripe payments in Sandbox mode.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['amount_legend'] 				= 'Donation Details';
$GLOBALS['TL_LANG']['tl_module']['donor_legend'] 				= 'Billing Information';
$GLOBALS['TL_LANG']['tl_module']['processor_legend'] 			= 'Shipping Information';
