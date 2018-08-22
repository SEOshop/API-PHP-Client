<?php

namespace Lightspeed;

/**
 * The Webshopapp Api Client Class
 */
class WebshopappApiClient
{
    /**
     * The Api Client version (do not change!)
     */
    const CLIENT_VERSION = '1.8.0';
    /**
     * The Api Hosts (do not change!)
     */
    const SERVER_HOST_LOCAL = 'https://api.webshopapp.dev/';
    const SERVER_HOST_TEST  = 'https://api.webshopapp.net/';
    const SERVER_HOST_LIVE  = 'https://api.webshopapp.com/';
    const SERVER_EU1_LIVE   = 'https://api.webshopapp.com/';
    const SERVER_US1_LIVE   = 'https://api.shoplightspeed.com/';

    /**
     * @var string
     */
    private $apiServer = null;
    /**
     * @var string
     */
    private $apiKey = null;
    /**
     * @var string
     */
    private $apiSecret = null;
    /**
     * @var string
     */
    private $apiLanguage = null;
    /**
     * @var int
     */
    private $apiCallsMade = 0;

    /**
     * @var WebshopappApiResourceAccount
     */
    public $account;
    /**
     * @var WebshopappApiResourceAccountMetafields
     */
    public $accountMetafields;
    /**
     * @var WebshopappApiResourceAccountPermissions
     */
    public $accountPermissions;
    /**
     * @var WebshopappApiResourceAccountRatelimit
     */
    public $accountRatelimit;
    /**
     * @var WebshopappApiResourceAdditionalcosts
     */
    public $additionalcosts;
    /**
     * @var WebshopappApiResourceAttributes
     */
    public $attributes;
    /**
     * @var WebshopappApiResourceBlogs
     */
    public $blogs;
    /**
     * @var WebshopappApiResourceBlogsArticles
     */
    public $blogsArticles;
    /**
     * @var WebshopappApiResourceBlogsArticlesImage
     */
    public $blogsArticlesImage;
    /**
     * @var WebshopappApiResourceBlogsArticlesTags
     */
    public $blogsArticlesTags;
    /**
     * @var WebshopappApiResourceBlogsComments
     */
    public $blogsComments;
    /**
     * @var WebshopappApiResourceBlogsTags
     */
    public $blogsTags;
    /**
     * @var WebshopappApiResourceBrands
     */
    public $brands;
    /**
     * @var WebshopappApiResourceBrandsImage
     */
    public $brandsImage;
    /**
     * @var WebshopappApiResourceCatalog
     */
    public $catalog;
    /**
     * @var WebshopappApiResourceCategories
     */
    public $categories;
    /**
     * @var WebshopappApiResourceCategoriesImage
     */
    public $categoriesImage;
    /**
     * @var WebshopappApiResourceCategoriesProducts
     */
    public $categoriesProducts;
    /**
     * @var WebshopappApiResourceCheckouts
     */
    public $checkouts;
    /**
     * @var WebshopappApiResourceCheckoutsOrder
     */
    public $checkoutsOrder;
    /**
     * @var WebshopappApiResourceCheckoutsPayment_methods
     */
    public $checkoutsPayment_methods;
    /**
     * @var WebshopappApiResourceCheckoutsProducts
     */
    public $checkoutsProducts;
    /**
     * @var WebshopappApiResourceCheckoutsShipment_methods
     */
    public $checkoutsShipment_methods;
    /**
     * @var WebshopappApiResourceCheckoutsValidate
     */
    public $checkoutsValidate;
    /**
     * @var WebshopappApiResourceContacts
     */
    public $contacts;
    /**
     * @var WebshopappApiResourceCountries
     */
    public $countries;
    /**
     * @var WebshopappApiResourceCustomers
     */
    public $customers;
    /**
     * @var WebshopappApiResourceCustomersLogin
     */
    public $customersLogin;
    /**
     * @var WebshopappApiResourceCustomersMetafields
     */
    public $customersMetafields;
    /**
     * @var WebshopappApiResourceCustomersTokens
     */
    public $customersTokens;
    /**
     * @var WebshopappApiResourceDashboard
     */
    public $dashboard;
    /**
     * @var WebshopappApiResourceDeliverydates
     */
    public $deliverydates;
    /**
     * @var WebshopappApiResourceDiscountrules
     */
    public $discountrules;
    /**
     * @var WebshopappApiResourceDiscounts
     */
    public $discounts;
    /**
     * @var WebshopappApiResourceEvents
     */
    public $events;
    /**
     * @var WebshopappApiResourceExternal_services
     */
    public $external_services;
    /**
     * @var WebshopappApiResourceFiles
     */
    public $files;
    /**
     * @var WebshopappApiResourceFilters
     */
    public $filters;
    /**
     * @var WebshopappApiResourceFiltersValues
     */
    public $filtersValues;
    /**
     * @var WebshopappApiResourceGroups
     */
    public $groups;
    /**
     * @var WebshopappApiResourceGroupsCustomers
     */
    public $groupsCustomers;
    /**
     * @var WebshopappApiResourceInvoices
     */
    public $invoices;
    /**
     * @var WebshopappApiResourceInvoicesItems
     */
    public $invoicesItems;
    /**
     * @var WebshopappApiResourceInvoicesMetafields
     */
    public $invoicesMetafields;
    /**
     * @var WebshopappApiResourceLanguages
     */
    public $languages;
    /**
     * @var WebshopappApiResourceMetafields
     */
    public $metafields;
    /**
     * @var WebshopappApiResourceOrders
     */
    public $orders;
    /**
     * @var WebshopappApiResourceOrdersCredit
     */
    public $ordersCredit;
    /**
     * @var WebshopappApiResourceOrdersMetafields
     */
    public $ordersMetafields;
    /**
     * @var WebshopappApiResourceOrdersProducts
     */
    public $ordersProducts;
    /**
     * @var WebshopappApiResourceOrdersCustomstatuses
     */
    public $ordersCustomstatuses;
    /**
     * @var WebshopappApiResourceOrdersEvents
     */
    public $ordersEvents;
    /**
     * @var WebshopappApiResourcePaymentmethods
     */
    public $paymentmethods;
    /**
     * @var WebshopappApiResourceProducts
     */
    public $products;
    /**
     * @var WebshopappApiResourceProductsAttributes
     */
    public $productsAttributes;
    /**
     * @var WebshopappApiResourceProductsFiltervalues
     */
    public $productsFiltervalues;
    /**
     * @var WebshopappApiResourceProductsImages
     */
    public $productsImages;
    /**
     * @var WebshopappApiResourceProductsMetafields
     */
    public $productsMetafields;
    /**
     * @var WebshopappApiResourceProductsRelations
     */
    public $productsRelations;
    /**
     * @var WebshopappApiResourceQuotes
     */
    public $quotes;
    /**
     * @var WebshopappApiResourceQuotesConvert
     */
    public $quotesConvert;
    /**
     * @var WebshopappApiResourceQuotesPaymentmethods
     */
    public $quotesPaymentmethods;
    /**
     * @var WebshopappApiResourceQuotesProducts
     */
    public $quotesProducts;
    /**
     * @var WebshopappApiResourceQuotesShippingmethods
     */
    public $quotesShippingmethods;
    /**
     * @var WebshopappApiResourceRedirects
     */
    public $redirects;
    /**
     * @var WebshopappApiResourceReturns
     */
    public $returns;
    /**
     * @var WebshopappApiResourceReviews
     */
    public $reviews;
    /**
     * @var WebshopappApiResourceSets
     */
    public $sets;
    /**
     * @var WebshopappApiResourceShipments
     */
    public $shipments;
    /**
     * @var WebshopappApiResourceShipmentsMetafields
     */
    public $shipmentsMetafields;
    /**
     * @var WebshopappApiResourceShipmentsProducts
     */
    public $shipmentsProducts;
    /**
     * @var WebshopappApiResourceShippingmethods
     */
    public $shippingmethods;
    /**
     * @var WebshopappApiResourceShippingmethodsCountries
     */
    public $shippingmethodsCountries;
    /**
     * @var WebshopappApiResourceShippingmethodsValues
     */
    public $shippingmethodsValues;
    /**
     * @var WebshopappApiResourceShop
     */
    public $shop;
    /**
     * @var WebshopappApiResourceShopCompany
     */
    public $shopCompany;
    /**
     * @var WebshopappApiResourceShopJavascript
     */
    public $shopJavascript;
    /**
     * @var WebshopappApiResourceShopLimits
     */
    public $shopLimits;
    /**
     * @var WebshopappApiResourceShopMetafields
     */
    public $shopMetafields;
    /**
     * @var WebshopappApiResourceShopScripts
     */
    public $shopScripts;
    /**
     * @var WebshopappApiResourceShopTracking
     */
    public $shopTracking;
    /**
     * @var WebshopappApiResourceShopWebsite
     */
    public $shopWebsite;
    /**
     * @var WebshopappApiResourceSubscriptions
     */
    public $subscriptions;
    /**
     * @var WebshopappApiResourceSuppliers
     */
    public $suppliers;
    /**
     * @var WebshopappApiResourceTags
     */
    public $tags;
    /**
     * @var WebshopappApiResourceTagsProducts
     */
    public $tagsProducts;
    /**
     * @var WebshopappApiResourceTaxes
     */
    public $taxes;
    /**
     * @var WebshopappApiResourceTaxesOverrides
     */
    public $taxesOverrides;
    /**
     * @var WebshopappApiResourceTextpages
     */
    public $textpages;
    /**
     * @var WebshopappApiResourceThemeCategories
     */
    public $themeCategories;
    /**
     * @var WebshopappApiResourceThemeProducts
     */
    public $themeProducts;
    /**
     * @var WebshopappApiResourceTickets
     */
    public $tickets;
    /**
     * @var WebshopappApiResourceTicketsMessages
     */
    public $ticketsMessages;
    /**
     * @var WebshopappApiResourceTime
     */
    public $time;
    /**
     * @var WebshopappApiResourceTypes
     */
    public $types;
    /**
     * @var WebshopappApiResourceTypesAttributes
     */
    public $typesAttributes;
    /**
     * @var WebshopappApiResourceVariants
     */
    public $variants;
    /**
     * @var WebshopappApiResourceVariantsMetafields
     */
    public $variantsMetafields;
    /**
     * @var WebshopappApiResourceVariantsBulk
     */
    public $variantsBulk;
    /**
     * @var WebshopappApiResourceVariantsMovements
     */
    public $variantsMovements;
    /**
     * @var WebshopappApiResourceWebhooks
     */
    public $webhooks;

    /**
     * @param string $apiKey      The api key
     * @param string $apiSecret   The api secret
     * @param string $apiLanguage The language to use the api in
     * @param string $apiServer   The api server to use test / live
     *
     * @throws WebshopappApiException
     */
    public function __construct($apiServer, $apiKey, $apiSecret, $apiLanguage)
    {
        if (!function_exists('curl_init'))
        {
            throw new WebshopAppApiException('WebshopappApiClient needs the CURL PHP extension.');
        }
        if (!function_exists('json_decode'))
        {
            throw new WebshopAppApiException('WebshopappApiClient needs the JSON PHP extension.');
        }

        $this->setApiServer($apiServer);
        $this->setApiKey($apiKey);
        $this->setApiSecret($apiSecret);
        $this->setApiLanguage($apiLanguage);

        $this->registerResources();
    }

    /**
     * @return string
     */
    public function getApiLanguage()
    {
        return $this->apiLanguage;
    }

    /**
     * @param $apiServer
     */
    public function setApiServer($apiServer)
    {
        $this->apiServer = $apiServer;
    }

    /**
     * @param $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param $apiSecret
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @param $apiLanguage
     */
    public function setApiLanguage($apiLanguage)
    {
        $this->apiLanguage = $apiLanguage;
    }

    /**
     * @return string
     */
    public function getApiServer()
    {
        return $this->apiServer;
    }

    /**
     * @return int
     */
    public function getApiCallsMade()
    {
        return $this->apiCallsMade;
    }

    /**
     * @throws WebshopappApiException
     */
    private function checkLoginCredentials()
    {
        if (strlen($this->getApiKey()) !== 32 || strlen($this->getApiSecret()) !== 32)
        {
            throw new WebshopappApiException('Invalid login credentials.');
        }
        if (strlen($this->getApiLanguage()) !== 2)
        {
            throw new WebshopappApiException('Invalid API language.');
        }
    }

    private function registerResources()
    {
        $this->account                   = new WebshopappApiResourceAccount($this);
        $this->accountMetafields         = new WebshopappApiResourceAccountMetafields($this);
        $this->accountPermissions        = new WebshopappApiResourceAccountPermissions($this);
        $this->accountRatelimit          = new WebshopappApiResourceAccountRatelimit($this);
        $this->additionalcosts           = new WebshopappApiResourceAdditionalcosts($this);
        $this->attributes                = new WebshopappApiResourceAttributes($this);
        $this->blogs                     = new WebshopappApiResourceBlogs($this);
        $this->blogsArticles             = new WebshopappApiResourceBlogsArticles($this);
        $this->blogsArticlesImage        = new WebshopappApiResourceBlogsArticlesImage($this);
        $this->blogsArticlesTags         = new WebshopappApiResourceBlogsArticlesTags($this);
        $this->blogsComments             = new WebshopappApiResourceBlogsComments($this);
        $this->blogsTags                 = new WebshopappApiResourceBlogsTags($this);
        $this->brands                    = new WebshopappApiResourceBrands($this);
        $this->brandsImage               = new WebshopappApiResourceBrandsImage($this);
        $this->catalog                   = new WebshopappApiResourceCatalog($this);
        $this->categories                = new WebshopappApiResourceCategories($this);
        $this->categoriesImage           = new WebshopappApiResourceCategoriesImage($this);
        $this->categoriesProducts        = new WebshopappApiResourceCategoriesProducts($this);
        $this->checkouts                 = new WebshopappApiResourceCheckouts($this);
        $this->checkoutsOrder            = new WebshopappApiResourceCheckoutsOrder($this);
        $this->checkoutsPayment_methods  = new WebshopappApiResourceCheckoutsPayment_methods($this);
        $this->checkoutsProducts         = new WebshopappApiResourceCheckoutsProducts($this);
        $this->checkoutsShipment_methods = new WebshopappApiResourceCheckoutsShipment_methods($this);
        $this->checkoutsValidate         = new WebshopappApiResourceCheckoutsValidate($this);
        $this->contacts                  = new WebshopappApiResourceContacts($this);
        $this->countries                 = new WebshopappApiResourceCountries($this);
        $this->customers                 = new WebshopappApiResourceCustomers($this);
        $this->customersLogin            = new WebshopappApiResourceCustomersLogin($this);
        $this->customersMetafields       = new WebshopappApiResourceCustomersMetafields($this);
        $this->customersTokens           = new WebshopappApiResourceCustomersTokens($this);
        $this->dashboard                 = new WebshopappApiResourceDashboard($this);
        $this->deliverydates             = new WebshopappApiResourceDeliverydates($this);
        $this->discountrules             = new WebshopappApiResourceDiscountrules($this);
        $this->discounts                 = new WebshopappApiResourceDiscounts($this);
        $this->events                    = new WebshopappApiResourceEvents($this);
        $this->external_services         = new WebshopappApiResourceExternal_services($this);
        $this->files                     = new WebshopappApiResourceFiles($this);
        $this->filters                   = new WebshopappApiResourceFilters($this);
        $this->filtersValues             = new WebshopappApiResourceFiltersValues($this);
        $this->groups                    = new WebshopappApiResourceGroups($this);
        $this->groupsCustomers           = new WebshopappApiResourceGroupsCustomers($this);
        $this->invoices                  = new WebshopappApiResourceInvoices($this);
        $this->invoicesItems             = new WebshopappApiResourceInvoicesItems($this);
        $this->invoicesMetafields        = new WebshopappApiResourceInvoicesMetafields($this);
        $this->languages                 = new WebshopappApiResourceLanguages($this);
        $this->metafields                = new WebshopappApiResourceMetafields($this);
        $this->orders                    = new WebshopappApiResourceOrders($this);
        $this->ordersCredit              = new WebshopappApiResourceOrdersCredit($this);
        $this->ordersMetafields          = new WebshopappApiResourceOrdersMetafields($this);
        $this->ordersProducts            = new WebshopappApiResourceOrdersProducts($this);
        $this->ordersCustomstatuses      = new WebshopappApiResourceOrdersCustomstatuses($this);
        $this->ordersEvents              = new WebshopappApiResourceOrdersEvents($this);
        $this->paymentmethods            = new WebshopappApiResourcePaymentmethods($this);
        $this->products                  = new WebshopappApiResourceProducts($this);
        $this->productsAttributes        = new WebshopappApiResourceProductsAttributes($this);
        $this->productsFiltervalues      = new WebshopappApiResourceProductsFiltervalues($this);
        $this->productsImages            = new WebshopappApiResourceProductsImages($this);
        $this->productsMetafields        = new WebshopappApiResourceProductsMetafields($this);
        $this->productsRelations         = new WebshopappApiResourceProductsRelations($this);
        $this->quotes                    = new WebshopappApiResourceQuotes($this);
        $this->quotesConvert             = new WebshopappApiResourceQuotesConvert($this);
        $this->quotesPaymentmethods      = new WebshopappApiResourceQuotesPaymentmethods($this);
        $this->quotesProducts            = new WebshopappApiResourceQuotesProducts($this);
        $this->quotesShippingmethods     = new WebshopappApiResourceQuotesShippingmethods($this);
        $this->redirects                 = new WebshopappApiResourceRedirects($this);
        $this->returns                   = new WebshopappApiResourceReturns($this);
        $this->reviews                   = new WebshopappApiResourceReviews($this);
        $this->sets                      = new WebshopappApiResourceSets($this);
        $this->shipments                 = new WebshopappApiResourceShipments($this);
        $this->shipmentsMetafields       = new WebshopappApiResourceShipmentsMetafields($this);
        $this->shipmentsProducts         = new WebshopappApiResourceShipmentsProducts($this);
        $this->shippingmethods           = new WebshopappApiResourceShippingmethods($this);
        $this->shippingmethodsCountries  = new WebshopappApiResourceShippingmethodsCountries($this);
        $this->shippingmethodsValues     = new WebshopappApiResourceShippingmethodsValues($this);
        $this->shop                      = new WebshopappApiResourceShop($this);
        $this->shopCompany               = new WebshopappApiResourceShopCompany($this);
        $this->shopJavascript            = new WebshopappApiResourceShopJavascript($this);
        $this->shopLimits                = new WebshopappApiResourceShopLimits($this);
        $this->shopMetafields            = new WebshopappApiResourceShopMetafields($this);
        $this->shopScripts               = new WebshopappApiResourceShopScripts($this);
        $this->shopTracking              = new WebshopappApiResourceShopTracking($this);
        $this->shopWebsite               = new WebshopappApiResourceShopWebsite($this);
        $this->subscriptions             = new WebshopappApiResourceSubscriptions($this);
        $this->suppliers                 = new WebshopappApiResourceSuppliers($this);
        $this->tags                      = new WebshopappApiResourceTags($this);
        $this->tagsProducts              = new WebshopappApiResourceTagsProducts($this);
        $this->taxes                     = new WebshopappApiResourceTaxes($this);
        $this->taxesOverrides            = new WebshopappApiResourceTaxesOverrides($this);
        $this->textpages                 = new WebshopappApiResourceTextpages($this);
        $this->themeCategories           = new WebshopappApiResourceThemeCategories($this);
        $this->themeProducts             = new WebshopappApiResourceThemeProducts($this);
        $this->tickets                   = new WebshopappApiResourceTickets($this);
        $this->ticketsMessages           = new WebshopappApiResourceTicketsMessages($this);
        $this->time                      = new WebshopappApiResourceTime($this);
        $this->types                     = new WebshopappApiResourceTypes($this);
        $this->typesAttributes           = new WebshopappApiResourceTypesAttributes($this);
        $this->variants                  = new WebshopappApiResourceVariants($this);
        $this->variantsMetafields        = new WebshopappApiResourceVariantsMetafields($this);
        $this->variantsBulk              = new WebshopappApiResourceVariantsBulk($this);
        $this->variantsMovements         = new WebshopappApiResourceVariantsMovements($this);
        $this->webhooks                  = new WebshopappApiResourceWebhooks($this);
    }

    /**
     * @param string $resourceUrl
     * @param array  $params
     *
     * @return string
     */
    private function getUrl($resourceUrl, $params = null)
    {
        if ($this->apiServer == 'live')
        {
            $apiHost = self::SERVER_HOST_LIVE;
        }
        elseif ($this->apiServer == 'local')
        {
            $apiHost = self::SERVER_HOST_LOCAL;
        }
        elseif ($this->apiServer == 'eu1')
        {
            $apiHost = self::SERVER_EU1_LIVE;
        }
        elseif ($this->apiServer == 'us1')
        {
            $apiHost = self::SERVER_US1_LIVE;
        }
        else
        {
            $apiHost = self::SERVER_HOST_TEST;
        }

        $apiHostParts     = parse_url($apiHost);
        $resourceUrlParts = parse_url($resourceUrl);

        $apiUrl = $apiHostParts['scheme'] . '://' . $this->getApiKey() . ':' . $this->getApiSecret() . '@' . $apiHostParts['host'] . '/';
        if (isset($apiHostParts['path']) && strlen(trim($apiHostParts['path'], '/')))
        {
            $apiUrl .= trim($apiHostParts['path'], '/') . '/';
        }
        $apiUrl .= $this->getApiLanguage() . '/' . $resourceUrlParts['path'] . '.json';

        if (isset($resourceUrlParts['query']))
        {
            $apiUrl .= '?' . $resourceUrlParts['query'];
        }
        elseif ($params && is_array($params))
        {
            $queryParameters = array();

            foreach ($params as $key => $value)
            {
                if (!is_array($value))
                {
                    $queryParameters[] = $key . '=' . urlencode($value);
                }
            }

            $queryParameters = implode('&', $queryParameters);

            if (!empty($queryParameters))
            {
                $apiUrl .= '?' . $queryParameters;
            }
        }

        return $apiUrl;
    }

    /**
     * Invoke the Webshopapp API.
     *
     * @param string $url     The resource url (required)
     * @param string $method  The http method (default 'get')
     * @param array  $payload The query/post data
     *
     * @return mixed The decoded response object
     * @throws WebshopappApiException
     */
    private function sendRequest($url, $method, $payload = null)
    {
        $this->checkLoginCredentials();

        if ($method == 'post' || $method == 'put')
        {
            if (!$payload || !is_array($payload))
            {
                throw new WebshopAppApiException('Invalid payload', 100);
            }

            $curlOptions = array(
                CURLOPT_URL           => $this->getUrl($url),
                CURLOPT_CUSTOMREQUEST => strtoupper($method),
                CURLOPT_HTTPHEADER    => array('Content-Type: application/json'),
                CURLOPT_POSTFIELDS    => json_encode($payload),
            );
        }
        elseif ($method == 'delete')
        {
            $curlOptions = array(
                CURLOPT_URL           => $this->getUrl($url),
                CURLOPT_CUSTOMREQUEST => 'DELETE',
            );
        }
        else
        {
            $curlOptions = array(
                CURLOPT_URL => $this->getUrl($url, $payload),
            );
        }

        $curlOptions += array(
            CURLOPT_HEADER         => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT      => 'WebshopappApiClient/' . self::CLIENT_VERSION . ' (PHP/' . phpversion() . ')',
            CURLOPT_SSLVERSION     => 6,
        );

        $curlHandle = curl_init();

        curl_setopt_array($curlHandle, $curlOptions);

        $responseBody = curl_exec($curlHandle);

        if (curl_errno($curlHandle))
        {
            $this->handleCurlError($curlHandle);
        }

        $responseBody = json_decode($responseBody, true);
        $responseCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

        curl_close($curlHandle);

        $this->apiCallsMade ++;

        if ($responseCode < 200 || $responseCode > 299 || ($responseBody && array_key_exists('error', $responseBody)))
        {
            $this->handleResponseError($responseCode, $responseBody);
        }

        if ($responseBody && preg_match('/^checkout/i', $url) !== 1)
        {
            $responseBody = array_shift($responseBody);
        }

        return $responseBody;
    }

    /**
     * @param int   $responseCode
     * @param array $responseBody
     *
     * @throws WebshopappApiException
     */
    private function handleResponseError($responseCode, $responseBody)
    {
        $errorMessage = 'Unknown error: ' . $responseCode;

        if ($responseBody && array_key_exists('error', $responseBody))
        {
            $errorMessage = $responseBody['error']['message'];
        }

        throw new WebshopappApiException($errorMessage, $responseCode);
    }

    /**
     * @param resource $curlHandle
     *
     * @throws WebshopappApiException
     */
    private function handleCurlError($curlHandle)
    {
        $errorMessage = 'Curl error: ' . curl_error($curlHandle);

        throw new WebshopappApiException($errorMessage, curl_errno($curlHandle));
    }

    /**
     * @param string $url
     * @param array  $payload
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($url, $payload)
    {
        return $this->sendRequest($url, 'post', $payload);
    }

    /**
     * @param string $url
     * @param array  $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function read($url, $params = array())
    {
        return $this->sendRequest($url, 'get', $params);
    }

    /**
     * @param string $url
     * @param array  $payload
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($url, $payload)
    {
        return $this->sendRequest($url, 'put', $payload);
    }

    /**
     * @param string $url
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($url)
    {
        return $this->sendRequest($url, 'delete');
    }
}
