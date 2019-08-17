<?php


// Base
require_once 'core/AmoMethod.php';
require_once 'core/AmoGetMethod.php';
require_once 'core/AmoPostMethod.php';
require_once 'interfaces/IMethod.php';

// Auth
require_once 'methods/AmoAuth.php';

// Accounts
require_once 'methods/AmoAccountsCurrent.php';

// Leads
require_once 'methods/AmoLeadsList.php';
require_once 'methods/AmoLeadsSet.php';

// Contacts
require_once 'methods/AmoContactsList.php';
require_once 'methods/AmoContactsSet.php';
require_once 'methods/AmoContactsLinks.php'; // устарел

// Companies
require_once 'methods/AmoCompaniesList.php';
require_once 'methods/AmoCompaniesSet.php';

// Customers
require_once 'methods/AmoCustomersList.php';
require_once 'methods/AmoCustomersSet.php';
require_once 'methods/AmoCustomersPeriodsSet.php';
require_once 'methods/AmoCustomersPeriodsGet.php';

// Transactions
require_once 'methods/AmoTransactionsList.php';
require_once 'methods/AmoTransactionsSet.php';

// Tasks
require_once 'methods/AmoTasksList.php';
require_once 'methods/AmoTasksSet.php';

// Notes
require_once 'methods/AmoNotesList.php';
require_once 'methods/AmoNotesSet.php';

// Catalogs
require_once 'methods/AmoCatalogsSet.php';
require_once 'methods/AmoCatalogsList.php'; // устарел
require_once 'methods/AmoCatalogsLinks.php'; // устарел
require_once 'methods/AmoCatalogsElementsSet.php';

// Products
require_once 'methods/AmoProductsStatus.php';
require_once 'methods/AmoProductsSet.php';

// WebHooks
require_once 'methods/AmoWebHooksList.php';
require_once 'methods/AmoWebHooksSubscribe.php';
require_once 'methods/AmoWebHooksUnsubscribe.php';

// Pipelines
require_once 'methods/AmoPipelinesList.php';
require_once 'methods/AmoPipelinesSet.php';
require_once 'methods/AmoPipelinesDelete.php';

// Widgets
require_once 'methods/AmoWidgetsList.php';
require_once 'methods/AmoWidgetsSet.php';

// Events
require_once 'methods/AmoEventsSet.php';

// CustomFields
require_once 'methods/AmoFieldsSet.php';

// Links
require_once 'methods/AmoLinksSet.php';

// Url Shortener
require_once 'methods/AmoShortUrlsSet.php';

// API Core
require_once 'API.php';
