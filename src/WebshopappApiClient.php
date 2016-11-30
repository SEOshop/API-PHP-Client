<?php

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

class WebshopappApiException extends Exception
{
}

class WebshopappApiResourceAccount
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('account');
    }
}

class WebshopappApiResourceAccountMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('account/metafields', $params);
        }
        else
        {
            return $this->client->read('account/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('account/metafields/count', $params);
    }
}

class WebshopappApiResourceAccountPermissions
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('account/permissions');
    }
}

class WebshopappApiResourceAccountRatelimit
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('account/ratelimit');
    }
}

class WebshopappApiResourceAdditionalcosts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $additionalcostId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($additionalcostId = null, $params = array())
    {
        if (!$additionalcostId)
        {
            return $this->client->read('additionalcosts', $params);
        }
        else
        {
            return $this->client->read('additionalcosts/' . $additionalcostId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('additionalcosts/count', $params);
    }

    /**
     * @param int $additionalcostId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($additionalcostId, $fields)
    {
        $fields = array('additionalCost' => $fields);

        return $this->client->update('additionalcosts/' . $additionalcostId, $fields);
    }

    /**
     * @param int $additionalcostId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($additionalcostId)
    {
        return $this->client->delete('additionalcosts/' . $additionalcostId);
    }
}

class WebshopappApiResourceAttributes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('attribute' => $fields);

        return $this->client->create('attributes', $fields);
    }

    /**
     * @param int $attributeId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($attributeId = null, $params = array())
    {
        if (!$attributeId)
        {
            return $this->client->read('attributes', $params);
        }
        else
        {
            return $this->client->read('attributes/' . $attributeId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('attributes/count', $params);
    }

    /**
     * @param int $attributeId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($attributeId, $fields)
    {
        $fields = array('attribute' => $fields);

        return $this->client->update('attributes/' . $attributeId, $fields);
    }

    /**
     * @param int $attributeId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($attributeId)
    {
        return $this->client->delete('attributes/' . $attributeId);
    }
}

class WebshopappApiResourceBlogs
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('blog' => $fields);

        return $this->client->create('blogs', $fields);
    }

    /**
     * @param int $blogId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($blogId = null, $params = array())
    {
        if (!$blogId)
        {
            return $this->client->read('blogs', $params);
        }
        else
        {
            return $this->client->read('blogs/' . $blogId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('blogs/count', $params);
    }

    /**
     * @param int $blogId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($blogId, $fields)
    {
        $fields = array('blog' => $fields);

        return $this->client->update('blogs/' . $blogId, $fields);
    }

    /**
     * @param int $blogId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($blogId)
    {
        return $this->client->delete('blogs/' . $blogId);
    }
}

class WebshopappApiResourceBlogsArticles
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('blogArticle' => $fields);

        return $this->client->create('blogs/articles', $fields);
    }

    /**
     * @param int $articleId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($articleId = null, $params = array())
    {
        if (!$articleId)
        {
            return $this->client->read('blogs/articles', $params);
        }
        else
        {
            return $this->client->read('blogs/articles/' . $articleId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('blogs/articles/count', $params);
    }

    /**
     * @param int $articleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($articleId, $fields)
    {
        $fields = array('blogArticle' => $fields);

        return $this->client->update('blogs/articles/' . $articleId, $fields);
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId);
    }
}

class WebshopappApiResourceBlogsArticlesImage
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $articleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($articleId, $fields)
    {
        $fields = array('blogArticleImage' => $fields);

        return $this->client->create('blogs/articles/' . $articleId . '/image', $fields);
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($articleId)
    {
        return $this->client->read('blogs/articles/' . $articleId . '/image');
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId . '/image');
    }
}

class WebshopappApiResourceBlogsArticlesTags
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('blogArticleTag' => $fields);

        return $this->client->create('blogs/articles/tags', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('blogs/articles/tags', $params);
        }
        else
        {
            return $this->client->read('blogs/articles/tags/' . $relationId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('blogs/articles/tags/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('blogs/articles/tags/' . $relationId);
    }
}

class WebshopappApiResourceBlogsComments
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('blogComment' => $fields);

        return $this->client->create('blogs/comments', $fields);
    }

    /**
     * @param int $commentId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($commentId = null, $params = array())
    {
        if (!$commentId)
        {
            return $this->client->read('blogs/comments', $params);
        }
        else
        {
            return $this->client->read('blogs/comments/' . $commentId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('blogs/comments/count', $params);
    }

    /**
     * @param int $commentId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($commentId, $fields)
    {
        $fields = array('blogComment' => $fields);

        return $this->client->update('blogs/comments/' . $commentId, $fields);
    }

    /**
     * @param int $commentId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($commentId)
    {
        return $this->client->delete('blogs/comments/' . $commentId);
    }
}

class WebshopappApiResourceBlogsTags
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('blogTag' => $fields);

        return $this->client->create('blogs/tags', $fields);
    }

    /**
     * @param int $tagId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($tagId = null, $params = array())
    {
        if (!$tagId)
        {
            return $this->client->read('blogs/tags', $params);
        }
        else
        {
            return $this->client->read('blogs/tags/' . $tagId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('blogs/tags/count', $params);
    }

    /**
     * @param int $tagId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($tagId, $fields)
    {
        $fields = array('blogTag' => $fields);

        return $this->client->update('blogs/tags/' . $tagId, $fields);
    }

    /**
     * @param int $tagId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($tagId)
    {
        return $this->client->delete('blogs/tags/' . $tagId);
    }
}

class WebshopappApiResourceBrands
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('brand' => $fields);

        return $this->client->create('brands', $fields);
    }

    /**
     * @param int $brandId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($brandId = null, $params = array())
    {
        if (!$brandId)
        {
            return $this->client->read('brands', $params);
        }
        else
        {
            return $this->client->read('brands/' . $brandId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('brands/count', $params);
    }

    /**
     * @param int $brandId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($brandId, $fields)
    {
        $fields = array('brand' => $fields);

        return $this->client->update('brands/' . $brandId, $fields);
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($brandId)
    {
        return $this->client->delete('brands/' . $brandId);
    }
}

class WebshopappApiResourceBrandsImage
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $brandId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($brandId, $fields)
    {
        $fields = array('brandImage' => $fields);

        return $this->client->create('brands/' . $brandId . '/image', $fields);
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($brandId)
    {
        return $this->client->read('brands/' . $brandId . '/image');
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($brandId)
    {
        return $this->client->delete('brands/' . $brandId . '/image');
    }
}

class WebshopappApiResourceCatalog
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('catalog', $params);
        }
        else
        {
            return $this->client->read('catalog/' . $productId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('catalog/count', $params);
    }
}

class WebshopappApiResourceCategories
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('category' => $fields);

        return $this->client->create('categories', $fields);
    }

    /**
     * @param int $categoryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($categoryId = null, $params = array())
    {
        if (!$categoryId)
        {
            return $this->client->read('categories', $params);
        }
        else
        {
            return $this->client->read('categories/' . $categoryId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('categories/count', $params);
    }

    /**
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($categoryId, $fields)
    {
        $fields = array('category' => $fields);

        return $this->client->update('categories/' . $categoryId, $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('categories/' . $categoryId);
    }
}

class WebshopappApiResourceCategoriesImage
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($categoryId, $fields)
    {
        $fields = array('categoryImage' => $fields);

        return $this->client->create('categories/' . $categoryId . '/image', $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($categoryId)
    {
        return $this->client->read('categories/' . $categoryId . '/image');
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('categories/' . $categoryId . '/image');
    }
}

class WebshopappApiResourceCategoriesProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('categoriesProduct' => $fields);

        return $this->client->create('categories/products', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('categories/products', $params);
        }
        else
        {
            return $this->client->read('categories/products/' . $relationId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('categories/products/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('categories/products/' . $relationId);
    }
}

class WebshopappApiResourceCheckouts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        return $this->client->create('checkouts', $fields);
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId = null, $params = array())
    {
        if (!$checkoutId)
        {
            return $this->client->read('checkouts', $params);
        }
        else
        {
            return $this->client->read('checkouts/' . $checkoutId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('checkouts/count', $params);
    }

    /**
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($checkoutId, $fields)
    {
        return $this->client->update('checkouts/' . $checkoutId, $fields);
    }

    /**
     * @param int $checkoutId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($checkoutId)
    {
        return $this->client->delete('checkouts/' . $checkoutId);
    }
}

class WebshopappApiResourceCheckoutsOrder
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($checkoutId, $fields)
    {
        return $this->client->create('checkouts/' . $checkoutId . '/order', $fields);
    }
}

class WebshopappApiResourceCheckoutsPayment_methods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId)
    {
        return $this->client->read('checkouts/' . $checkoutId . '/payment_methods');
    }
}

class WebshopappApiResourceCheckoutsProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($checkoutId, $fields)
    {
        return $this->client->create('checkouts/' . $checkoutId . '/products', $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('checkouts/' . $checkoutId . '/products', $params);
        }
        else
        {
            return $this->client->read('checkouts/' . $checkoutId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($checkoutId, $params = array())
    {
        return $this->client->read('checkouts/' . $checkoutId . '/products/count', $params);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($checkoutId, $productId, $fields)
    {
        return $this->client->update('checkouts/' . $checkoutId . '/products/' . $productId, $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($checkoutId, $productId)
    {
        return $this->client->delete('checkouts/' . $checkoutId . '/products/' . $productId);
    }
}

class WebshopappApiResourceCheckoutsShipment_methods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId, $params = array())
    {
        return $this->client->read('checkouts/' . $checkoutId . '/shipment_methods', $params);
    }
}

class WebshopappApiResourceCheckoutsValidate
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId)
    {
        return $this->client->read('checkouts/' . $checkoutId . '/validate');
    }
}

class WebshopappApiResourceContacts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $contactId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($contactId = null, $params = array())
    {
        if (!$contactId)
        {
            return $this->client->read('contacts', $params);
        }
        else
        {
            return $this->client->read('contacts/' . $contactId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('contacts/count', $params);
    }
}

class WebshopappApiResourceCountries
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($countryId = null, $params = array())
    {
        if (!$countryId)
        {
            return $this->client->read('countries', $params);
        }
        else
        {
            return $this->client->read('countries/' . $countryId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('countries/count', $params);
    }
}

class WebshopappApiResourceCustomers
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('customer' => $fields);

        return $this->client->create('customers', $fields);
    }

    /**
     * @param int $customerId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($customerId = null, $params = array())
    {
        if (!$customerId)
        {
            return $this->client->read('customers', $params);
        }
        else
        {
            return $this->client->read('customers/' . $customerId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('customers/count', $params);
    }

    /**
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($customerId, $fields)
    {
        $fields = array('customer' => $fields);

        return $this->client->update('customers/' . $customerId, $fields);
    }

    /**
     * @param int $customerId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($customerId)
    {
        return $this->client->delete('customers/' . $customerId);
    }
}

class WebshopappApiResourceCustomersLogin
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerLogin' => $fields);

        return $this->client->create('customers/' . $customerId . '/login', $fields);
    }
}

class WebshopappApiResourceCustomersMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerMetafield' => $fields);

        return $this->client->create('customers/' . $customerId . '/metafields', $fields);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($customerId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('customers/' . $customerId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('customers/' . $customerId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $customerId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($customerId, $params = array())
    {
        return $this->client->read('customers/' . $customerId . '/metafields/count', $params);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($customerId, $metafieldId, $fields)
    {
        $fields = array('customerMetafield' => $fields);

        return $this->client->update('customers/' . $customerId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($customerId, $metafieldId)
    {
        return $this->client->delete('customers/' . $customerId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceCustomersTokens
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerToken' => $fields);

        return $this->client->create('customers/' . $customerId . '/tokens', $fields);
    }
}

class WebshopappApiResourceDashboard
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($params = array())
    {
        return $this->client->read('dashboard', $params);
    }
}

class WebshopappApiResourceDeliverydates
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('deliverydate' => $fields);

        return $this->client->create('deliverydates', $fields);
    }

    /**
     * @param int $deliverydateId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($deliverydateId = null, $params = array())
    {
        if (!$deliverydateId)
        {
            return $this->client->read('deliverydates', $params);
        }
        else
        {
            return $this->client->read('deliverydates/' . $deliverydateId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('deliverydates/count', $params);
    }

    /**
     * @param int $deliverydateId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($deliverydateId, $fields)
    {
        $fields = array('deliverydate' => $fields);

        return $this->client->update('deliverydates/' . $deliverydateId, $fields);
    }

    /**
     * @param int $deliverydateId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($deliverydateId)
    {
        return $this->client->delete('deliverydates/' . $deliverydateId);
    }
}

class WebshopappApiResourceDiscountrules
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('discountRule' => $fields);

        return $this->client->create('discountrules', $fields);
    }

    /**
     * @param int $discountruleId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($discountruleId = null, $params = array())
    {
        if (!$discountruleId)
        {
            return $this->client->read('discountrules', $params);
        }
        else
        {
            return $this->client->read('discountrules/' . $discountruleId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('discountrules/count', $params);
    }

    /**
     * @param int $discountruleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($discountruleId, $fields)
    {
        $fields = array('discountRule' => $fields);

        return $this->client->update('discountrules/' . $discountruleId, $fields);
    }

    /**
     * @param int $discountruleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($discountruleId)
    {
        return $this->client->delete('discountrules/' . $discountruleId);
    }
}

class WebshopappApiResourceDiscounts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('discount' => $fields);

        return $this->client->create('discounts', $fields);
    }

    /**
     * @param int $discountId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($discountId = null, $params = array())
    {
        if (!$discountId)
        {
            return $this->client->read('discounts', $params);
        }
        else
        {
            return $this->client->read('discounts/' . $discountId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('discounts/count', $params);
    }

    /**
     * @param int $discountId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($discountId, $fields)
    {
        $fields = array('discount' => $fields);

        return $this->client->update('discounts/' . $discountId, $fields);
    }

    /**
     * @param int $discountId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($discountId)
    {
        return $this->client->delete('discounts/' . $discountId);
    }
}

class WebshopappApiResourceEvents
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $eventId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($eventId = null, $params = array())
    {
        if (!$eventId)
        {
            return $this->client->read('events', $params);
        }
        else
        {
            return $this->client->read('events/' . $eventId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('events/count', $params);
    }

    /**
     * @param int $eventId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($eventId)
    {
        return $this->client->delete('events/' . $eventId);
    }
}

class WebshopappApiResourceExternal_services
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('externalService' => $fields);

        return $this->client->create('external_services', $fields);
    }

    /**
     * @param int $externalserviceId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($externalserviceId = null, $params = array())
    {
        if (!$externalserviceId)
        {
            return $this->client->read('external_services', $params);
        }
        else
        {
            return $this->client->read('external_services/' . $externalserviceId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('external_services/count', $params);
    }

    /**
     * @param int $externalserviceId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($externalserviceId)
    {
        return $this->client->delete('external_services/' . $externalserviceId);
    }
}

class WebshopappApiResourceFiles
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('file' => $fields);

        return $this->client->create('files', $fields);
    }

    /**
     * @param int $fileId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($fileId = null, $params = array())
    {
        if (!$fileId)
        {
            return $this->client->read('files', $params);
        }
        else
        {
            return $this->client->read('files/' . $fileId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('files/count', $params);
    }

    /**
     * @param int $fileId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($fileId, $fields)
    {
        $fields = array('file' => $fields);

        return $this->client->update('files/' . $fileId, $fields);
    }

    /**
     * @param int $fileId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($fileId)
    {
        return $this->client->delete('files/' . $fileId);
    }
}

class WebshopappApiResourceFilters
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('filter' => $fields);

        return $this->client->create('filters', $fields);
    }

    /**
     * @param int $filterId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($filterId = null, $params = array())
    {
        if (!$filterId)
        {
            return $this->client->read('filters', $params);
        }
        else
        {
            return $this->client->read('filters/' . $filterId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('filters/count', $params);
    }

    /**
     * @param int $filterId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($filterId, $fields)
    {
        $fields = array('filter' => $fields);

        return $this->client->update('filters/' . $filterId, $fields);
    }

    /**
     * @param int $filterId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($filterId)
    {
        return $this->client->delete('filters/' . $filterId);
    }
}

class WebshopappApiResourceFiltersValues
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $filterId
     * @param int $filterValueId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($filterId, $filterValueId = null, $params = array())
    {
        if (!$filterValueId)
        {
            return $this->client->read('filters/' . $filterId . '/values', $params);
        }
        else
        {
            return $this->client->read('filters/' . $filterId . '/values/' . $filterValueId, $params);
        }
    }

    /**
     * @param int $filterId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($filterId, $params = array())
    {
        return $this->client->read('filters/' . $filterId . '/values/count', $params);
    }

    /**
     * @param int $filterId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($filterId, $fields)
    {
        $fields = array('filterValue' => $fields);

        return $this->client->create('filters/' . $filterId . '/values', $fields);
    }

    /**
     * @param int $filterId
     * @param int $filterValueId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($filterId, $filterValueId, $fields)
    {
        $fields = array('filterValue' => $fields);

        return $this->client->update('filters/' . $filterId . '/values/' . $filterValueId, $fields);
    }

    /**
     * @param int $filterId
     * @param int $filterValueId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($filterId, $filterValueId)
    {
        return $this->client->delete('filters/' . $filterId . '/values/' . $filterValueId);
    }
}

class WebshopappApiResourceGroups
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('group' => $fields);

        return $this->client->create('groups', $fields);
    }

    /**
     * @param int $groupId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($groupId = null, $params = array())
    {
        if (!$groupId)
        {
            return $this->client->read('groups', $params);
        }
        else
        {
            return $this->client->read('groups/' . $groupId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('groups/count', $params);
    }

    /**
     * @param int $groupId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($groupId, $fields)
    {
        $fields = array('group' => $fields);

        return $this->client->update('groups/' . $groupId, $fields);
    }

    /**
     * @param int $groupId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($groupId)
    {
        return $this->client->delete('groups/' . $groupId);
    }
}

class WebshopappApiResourceGroupsCustomers
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('groupsCustomer' => $fields);

        return $this->client->create('groups/customers', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('groups/customers', $params);
        }
        else
        {
            return $this->client->read('groups/customers/' . $relationId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('groups/customers/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('groups/customers/' . $relationId);
    }
}

class WebshopappApiResourceInvoices
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $invoiceId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($invoiceId = null, $params = array())
    {
        if (!$invoiceId)
        {
            return $this->client->read('invoices', $params);
        }
        else
        {
            return $this->client->read('invoices/' . $invoiceId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('invoices/count', $params);
    }

    /**
     * @param int $invoiceId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($invoiceId, $fields)
    {
        $fields = array('invoice' => $fields);

        return $this->client->update('invoices/' . $invoiceId, $fields);
    }
}

class WebshopappApiResourceInvoicesItems
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $invoiceId
     * @param int $itemId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($invoiceId, $itemId = null, $params = array())
    {
        if (!$itemId)
        {
            return $this->client->read('invoices/' . $invoiceId . '/items', $params);
        }
        else
        {
            return $this->client->read('invoices/' . $invoiceId . '/items/' . $itemId, $params);
        }
    }

    /**
     * @param int $invoiceId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($invoiceId, $params = array())
    {
        return $this->client->read('invoices/' . $invoiceId . '/items/count', $params);
    }
}

class WebshopappApiResourceInvoicesMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $invoiceId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($invoiceId, $fields)
    {
        $fields = array('invoiceMetafield' => $fields);

        return $this->client->create('invoices/' . $invoiceId . '/metafields', $fields);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($invoiceId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('invoices/' . $invoiceId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('invoices/' . $invoiceId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $invoiceId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($invoiceId, $params = array())
    {
        return $this->client->read('invoices/' . $invoiceId . '/metafields/count', $params);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($invoiceId, $metafieldId, $fields)
    {
        $fields = array('invoiceMetafield' => $fields);

        return $this->client->update('invoices/' . $invoiceId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($invoiceId, $metafieldId)
    {
        return $this->client->delete('invoices/' . $invoiceId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceLanguages
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $languageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($languageId = null, $params = array())
    {
        if (!$languageId)
        {
            return $this->client->read('languages', $params);
        }
        else
        {
            return $this->client->read('languages/' . $languageId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('languages/count', $params);
    }
}

class WebshopappApiResourceMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('metafield' => $fields);

        return $this->client->create('metafields', $fields);
    }

    /**
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('metafields', $params);
        }
        else
        {
            return $this->client->read('metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('metafields/count', $params);
    }

    /**
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($metafieldId, $fields)
    {
        $fields = array('metafield' => $fields);

        return $this->client->update('metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($metafieldId)
    {
        return $this->client->delete('metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceOrders
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId = null, $params = array())
    {
        if (!$orderId)
        {
            return $this->client->read('orders', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('orders/count', $params);
    }

    /**
     * @param int $orderId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($orderId, $fields)
    {
        $fields = array('order' => $fields);

        return $this->client->update('orders/' . $orderId, $fields);
    }
}

class WebshopappApiResourceOrdersCredit
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $orderId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($orderId, $fields)
    {
        $fields = array('credit' => $fields);

        return $this->client->create('orders/' . $orderId . '/credit', $fields);
    }
}

class WebshopappApiResourceOrdersMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $orderId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($orderId, $fields)
    {
        $fields = array('orderMetafield' => $fields);

        return $this->client->create('orders/' . $orderId . '/metafields', $fields);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('orders/' . $orderId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($orderId, $params = array())
    {
        return $this->client->read('orders/' . $orderId . '/metafields/count', $params);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($orderId, $metafieldId, $fields)
    {
        $fields = array('orderMetafield' => $fields);

        return $this->client->update('orders/' . $orderId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($orderId, $metafieldId)
    {
        return $this->client->delete('orders/' . $orderId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceOrdersProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $orderId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('orders/' . $orderId . '/products', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($orderId, $params = array())
    {
        return $this->client->read('orders/' . $orderId . '/products/count', $params);
    }
}

class WebshopappApiResourceOrdersCustomstatuses
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('customStatus' => $fields);

        return $this->client->create('orders/customstatuses', $fields);
    }

    /**
     * @param int $customstatusId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($customstatusId = null, $params = array())
    {
        if (!$customstatusId)
        {
            return $this->client->read('orders/customstatuses', $params);
        }
        else
        {
            return $this->client->read('orders/customstatuses/' . $customstatusId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('orders/customstatuses/count', $params);
    }

    /**
     * @param int $customstatusId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($customstatusId, $fields)
    {
        $fields = array('customStatus' => $fields);

        return $this->client->update('orders/customstatuses/' . $customstatusId, $fields);
    }

    /**
     * @param int $customstatusId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($customstatusId)
    {
        return $this->client->delete('orders/customstatuses/' . $customstatusId);
    }
}

class WebshopappApiResourceOrdersEvents
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $eventId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($eventId = null, $params = array())
    {
        if (!$eventId)
        {
            return $this->client->read('orders/events', $params);
        }
        else
        {
            return $this->client->read('orders/events/' . $eventId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('orders/events/count', $params);
    }
}

class WebshopappApiResourcePaymentmethods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $paymentmethodId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($paymentmethodId = null, $params = array())
    {
        if (!$paymentmethodId)
        {
            return $this->client->read('paymentmethods', $params);
        }
        else
        {
            return $this->client->read('paymentmethods/' . $paymentmethodId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('paymentmethods/count', $params);
    }
}

class WebshopappApiResourceProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('product' => $fields);

        return $this->client->create('products', $fields);
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('products', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('products/count', $params);
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $fields)
    {
        $fields = array('product' => $fields);

        return $this->client->update('products/' . $productId, $fields);
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId)
    {
        return $this->client->delete('products/' . $productId);
    }
}

class WebshopappApiResourceProductsAttributes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     * @param int $attributeId Set to null for bulk update.
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $attributeId, $fields)
    {
        if (!$attributeId)
        {
            $fields = array('productAttributes' => $fields);

            return $this->client->update('products/' . $productId . '/attributes', $fields);
        }
        else
        {
            $fields = array('productAttribute' => $fields);

            return $this->client->update('products/' . $productId . '/attributes/' . $attributeId, $fields);
        }
    }

    /**
     * @param int $productId
     * @param int $attributeId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId, $attributeId = null, $params = array())
    {
        if (!$attributeId)
        {
            return $this->client->read('products/' . $productId . '/attributes', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId . '/attributes/' . $attributeId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/attributes/count', $params);
    }

    /**
     * @param int $productId
     * @param int $attributeId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $attributeId)
    {
        return $this->client->delete('products/' . $productId . '/attributes/' . $attributeId);
    }
}

class WebshopappApiResourceProductsFiltervalues
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId)
    {
        return $this->client->read('products/' . $productId . '/filtervalues');
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/filtervalues/count', $params);
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productFiltervalue' => $fields);

        return $this->client->create('products/' . $productId . '/filtervalues', $fields);
    }

    /**
     * @param int $productId
     * @param int $filterValueId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $filterValueId)
    {
        return $this->client->delete('products/' . $productId . '/filtervalues/' . $filterValueId);
    }
}

class WebshopappApiResourceProductsImages
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productImage' => $fields);

        return $this->client->create('products/' . $productId . '/images', $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId, $imageId = null, $params = array())
    {
        if (!$imageId)
        {
            return $this->client->read('products/' . $productId . '/images', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId . '/images/' . $imageId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/images/count', $params);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $imageId, $fields)
    {
        $fields = array('productImage' => $fields);

        return $this->client->update('products/' . $productId . '/images/' . $imageId, $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $imageId)
    {
        return $this->client->delete('products/' . $productId . '/images/' . $imageId);
    }
}

class WebshopappApiResourceProductsMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productMetafield' => $fields);

        return $this->client->create('products/' . $productId . '/metafields', $fields);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('products/' . $productId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/metafields/count', $params);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $metafieldId, $fields)
    {
        $fields = array('productMetafield' => $fields);

        return $this->client->update('products/' . $productId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $metafieldId)
    {
        return $this->client->delete('products/' . $productId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceProductsRelations
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productRelation' => $fields);

        return $this->client->create('products/' . $productId . '/relations', $fields);
    }

    /**
     * @param int $productId
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId, $relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('products/' . $productId . '/relations', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId . '/relations/' . $relationId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/relations/count', $params);
    }

    /**
     * @param int $productId
     * @param int $relationId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $relationId, $fields)
    {
        $fields = array('productRelation' => $fields);

        return $this->client->update('products/' . $productId . '/relations/' . $relationId, $fields);
    }

    /**
     * @param int $productId
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $relationId)
    {
        return $this->client->delete('products/' . $productId . '/relations/' . $relationId);
    }
}

class WebshopappApiResourceQuotes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('quote' => $fields);

        return $this->client->create('quotes', $fields);
    }

    /**
     * @param int $quoteId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId = null, $params = array())
    {
        if (!$quoteId)
        {
            return $this->client->read('quotes', $params);
        }
        else
        {
            return $this->client->read('quotes/' . $quoteId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('quotes/count', $params);
    }

    /**
     * @param int $quoteId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($quoteId, $fields)
    {
        $fields = array('quote' => $fields);

        return $this->client->update('quotes/' . $quoteId, $fields);
    }
}

class WebshopappApiResourceQuotesConvert
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $quoteId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($quoteId, $fields)
    {
        $fields = array('order' => $fields);

        return $this->client->create('quotes/' . $quoteId . '/convert', $fields);
    }
}

class WebshopappApiResourceQuotesPaymentmethods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $quoteId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId)
    {
        return $this->client->read('quotes/' . $quoteId . '/paymentmethods');
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('quotes/' . $quoteId . '/paymentmethods/count', $params);
    }
}

class WebshopappApiResourceQuotesProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $quoteId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($quoteId, $fields)
    {
        $fields = array('quoteProduct' => $fields);

        return $this->client->create('quotes/' . $quoteId . '/products', $fields);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('quotes/' . $quoteId . '/products', $params);
        }
        else
        {
            return $this->client->read('quotes/' . $quoteId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $quoteId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($quoteId, $params = array())
    {
        return $this->client->read('quotes/' . $quoteId . '/products/count', $params);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($quoteId, $productId, $fields)
    {
        $fields = array('quoteProduct' => $fields);

        return $this->client->update('quotes/' . $quoteId . '/products/' . $productId, $fields);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($quoteId, $productId)
    {
        return $this->client->delete('quotes/' . $quoteId . '/products/' . $productId);
    }
}

class WebshopappApiResourceQuotesShippingmethods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $quoteId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId)
    {
        return $this->client->read('quotes/' . $quoteId . '/shippingmethods');
    }

    /**
     * @param int $quoteId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($quoteId, $params = array())
    {
        return $this->client->read('quotes/' . $quoteId . '/shippingmethods/count', $params);
    }
}

class WebshopappApiResourceRedirects
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('redirect' => $fields);

        return $this->client->create('redirects', $fields);
    }

    /**
     * @param int $redirectId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($redirectId = null, $params = array())
    {
        if (!$redirectId)
        {
            return $this->client->read('redirects', $params);
        }
        else
        {
            return $this->client->read('redirects/' . $redirectId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('redirects/count', $params);
    }

    /**
     * @param int $redirectId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($redirectId, $fields)
    {
        $fields = array('redirect' => $fields);

        return $this->client->update('redirects/' . $redirectId, $fields);
    }

    /**
     * @param int $redirectId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($redirectId)
    {
        return $this->client->delete('redirects/' . $redirectId);
    }
}

class WebshopappApiResourceReturns
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('returns' => $fields);

        return $this->client->create('returns', $fields);
    }

    /**
     * @param int $returnId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($returnId = null, $params = array())
    {
        if (!$returnId)
        {
            return $this->client->read('returns', $params);
        }
        else
        {
            return $this->client->read('returns/' . $returnId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('returns/count', $params);
    }

    /**
     * @param int $returnId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($returnId, $fields)
    {
        $fields = array('return' => $fields);

        return $this->client->update('returns/' . $returnId, $fields);
    }

    /**
     * @param int $returnId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($returnId)
    {
        return $this->client->delete('returns/' . $returnId);
    }
}

class WebshopappApiResourceReviews
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('review' => $fields);

        return $this->client->create('reviews', $fields);
    }

    /**
     * @param int $reviewId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($reviewId = null, $params = array())
    {
        if (!$reviewId)
        {
            return $this->client->read('reviews', $params);
        }
        else
        {
            return $this->client->read('reviews/' . $reviewId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('reviews/count', $params);
    }

    /**
     * @param int $reviewId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($reviewId, $fields)
    {
        $fields = array('review' => $fields);

        return $this->client->update('reviews/' . $reviewId, $fields);
    }

    /**
     * @param int $reviewId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($reviewId)
    {
        return $this->client->delete('reviews/' . $reviewId);
    }
}

class WebshopappApiResourceSets
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('set' => $fields);

        return $this->client->create('sets', $fields);
    }

    /**
     * @param int $setId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($setId = null, $params = array())
    {
        if (!$setId)
        {
            return $this->client->read('sets', $params);
        }
        else
        {
            return $this->client->read('sets/' . $setId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('sets/count', $params);
    }

    /**
     * @param int $setId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($setId, $fields)
    {
        $fields = array('set' => $fields);

        return $this->client->update('sets/' . $setId, $fields);
    }

    /**
     * @param int $setId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($setId)
    {
        return $this->client->delete('sets/' . $setId);
    }
}

class WebshopappApiResourceShipments
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shipmentId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId = null, $params = array())
    {
        if (!$shipmentId)
        {
            return $this->client->read('shipments', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shipments/count', $params);
    }

    /**
     * @param int $shipmentId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($shipmentId, $fields)
    {
        $fields = array('shipment' => $fields);

        return $this->client->update('shipments/' . $shipmentId, $fields);
    }
}

class WebshopappApiResourceShipmentsMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shipmentId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($shipmentId, $fields)
    {
        $fields = array('shipmentMetafield' => $fields);

        return $this->client->create('shipments/' . $shipmentId . '/metafields', $fields);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('shipments/' . $shipmentId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $shipmentId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shipmentId, $params = array())
    {
        return $this->client->read('shipments/' . $shipmentId . '/metafields/count', $params);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($shipmentId, $metafieldId, $fields)
    {
        $fields = array('shipmentMetafield' => $fields);

        return $this->client->update('shipments/' . $shipmentId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($shipmentId, $metafieldId)
    {
        return $this->client->delete('shipments/' . $shipmentId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceShipmentsProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shipmentId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('shipments/' . $shipmentId . '/products', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $shipmentId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shipmentId, $params = array())
    {
        return $this->client->read('shipments/' . $shipmentId . '/products/count', $params);
    }
}

class WebshopappApiResourceShippingmethods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shippingmethodId = null, $params = array())
    {
        if (!$shippingmethodId)
        {
            return $this->client->read('shippingmethods', $params);
        }
        else
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shippingmethods/count', $params);
    }
}

class WebshopappApiResourceShippingmethodsCountries
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shippingmethodId
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shippingmethodId, $countryId = null, $params = array())
    {
        if (!$countryId)
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries', $params);
        }
        else
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/' . $countryId, $params);
        }
    }

    /**
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shippingmethodId, $params = array())
    {
        return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/count', $params);
    }
}

class WebshopappApiResourceShippingmethodsValues
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $shippingmethodId
     * @param int $valueId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shippingmethodId, $valueId = null, $params = array())
    {
        if (!$valueId)
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/values', $params);
        }
        else
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/values/' . $valueId, $params);
        }
    }

    /**
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shippingmethodId, $params = array())
    {
        return $this->client->read('shippingmethods/' . $shippingmethodId . '/values/count', $params);
    }
}

class WebshopappApiResourceShop
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop');
    }
}

class WebshopappApiResourceShopCompany
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop/company');
    }
}

class WebshopappApiResourceShopJavascript
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop/javascript');
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($fields)
    {
        $fields = array('shopJavascript' => $fields);

        return $this->client->update('shop/javascript', $fields);
    }
}

class WebshopappApiResourceShopLimits
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop/limits');
    }
}

class WebshopappApiResourceShopMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('shopMetafield' => $fields);

        return $this->client->create('shop/metafields', $fields);
    }

    /**
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('shop/metafields', $params);
        }
        else
        {
            return $this->client->read('shop/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shop/metafields/count', $params);
    }

    /**
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($metafieldId, $fields)
    {
        $fields = array('shopMetafield' => $fields);

        return $this->client->update('shop/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($metafieldId)
    {
        return $this->client->delete('shop/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceShopScripts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('shopScript' => $fields);

        return $this->client->create('shop/scripts', $fields);
    }

    /**
     * @param int $scriptId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($scriptId = null, $params = array())
    {
        if (!$scriptId)
        {
            return $this->client->read('shop/scripts', $params);
        }
        else
        {
            return $this->client->read('shop/scripts/' . $scriptId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shop/scripts/count', $params);
    }

    /**
     * @param int $scriptId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($scriptId, $fields)
    {
        $fields = array('shopScript' => $fields);

        return $this->client->update('shop/scripts/' . $scriptId, $fields);
    }

    /**
     * @param int $scriptId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($scriptId)
    {
        return $this->client->delete('shop/scripts/' . $scriptId);
    }
}

class WebshopappApiResourceShopTracking
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('shopTracking' => $fields);

        return $this->client->create('shop/tracking', $fields);
    }

    /**
     * @param int $trackingId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($trackingId = null, $params = array())
    {
        if (!$trackingId)
        {
            return $this->client->read('shop/tracking', $params);
        }
        else
        {
            return $this->client->read('shop/tracking/' . $trackingId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shop/tracking/count', $params);
    }

    /**
     * @param int $trackingId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($trackingId, $fields)
    {
        $fields = array('shopTracking' => $fields);

        return $this->client->update('shop/tracking/' . $trackingId, $fields);
    }

    /**
     * @param int $trackingId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($trackingId)
    {
        return $this->client->delete('shop/tracking/' . $trackingId);
    }
}

class WebshopappApiResourceShopWebsite
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop/website');
    }
}

class WebshopappApiResourceSubscriptions
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('subscription' => $fields);

        return $this->client->create('subscriptions', $fields);
    }

    /**
     * @param int $subscriptionId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($subscriptionId = null, $params = array())
    {
        if (!$subscriptionId)
        {
            return $this->client->read('subscriptions', $params);
        }
        else
        {
            return $this->client->read('subscriptions/' . $subscriptionId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('subscriptions/count', $params);
    }

    /**
     * @param int $subscriptionId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($subscriptionId, $fields)
    {
        $fields = array('subscription' => $fields);

        return $this->client->update('subscriptions/' . $subscriptionId, $fields);
    }

    /**
     * @param int $subscriptionId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($subscriptionId)
    {
        return $this->client->delete('subscriptions/' . $subscriptionId);
    }
}

class WebshopappApiResourceSuppliers
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('supplier' => $fields);

        return $this->client->create('suppliers', $fields);
    }

    /**
     * @param int $supplierId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($supplierId = null, $params = array())
    {
        if (!$supplierId)
        {
            return $this->client->read('suppliers', $params);
        }
        else
        {
            return $this->client->read('suppliers/' . $supplierId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('suppliers/count', $params);
    }

    /**
     * @param int $supplierId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($supplierId, $fields)
    {
        $fields = array('supplier' => $fields);

        return $this->client->update('suppliers/' . $supplierId, $fields);
    }

    /**
     * @param int $supplierId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($supplierId)
    {
        return $this->client->delete('suppliers/' . $supplierId);
    }
}

class WebshopappApiResourceTags
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('tag' => $fields);

        return $this->client->create('tags', $fields);
    }

    /**
     * @param int $tagId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($tagId = null, $params = array())
    {
        if (!$tagId)
        {
            return $this->client->read('tags', $params);
        }
        else
        {
            return $this->client->read('tags/' . $tagId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('tags/count', $params);
    }

    /**
     * @param int $tagId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($tagId, $fields)
    {
        $fields = array('tag' => $fields);

        return $this->client->update('tags/' . $tagId, $fields);
    }

    /**
     * @param int $tagId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($tagId)
    {
        return $this->client->delete('tags/' . $tagId);
    }
}

class WebshopappApiResourceTagsProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('tagsProduct' => $fields);

        return $this->client->create('tags/products', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('tags/products', $params);
        }
        else
        {
            return $this->client->read('tags/products/' . $relationId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('tags/products/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('tags/products/' . $relationId);
    }
}

class WebshopappApiResourceTaxes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('tax' => $fields);

        return $this->client->create('taxes', $fields);
    }

    /**
     * @param int $taxId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($taxId = null, $params = array())
    {
        if (!$taxId)
        {
            return $this->client->read('taxes', $params);
        }
        else
        {
            return $this->client->read('taxes/' . $taxId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('taxes/count', $params);
    }

    /**
     * @param int $taxId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($taxId, $fields)
    {
        $fields = array('tax' => $fields);

        return $this->client->update('taxes/' . $taxId, $fields);
    }

    /**
     * @param int $taxId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($taxId)
    {
        return $this->client->delete('taxes/' . $taxId);
    }
}

class WebshopappApiResourceTaxesOverrides
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $taxId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($taxId, $fields)
    {
        $fields = array('taxOverride' => $fields);

        return $this->client->create('taxes/' . $taxId . '/overrides', $fields);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($taxId, $taxOverrideId = null, $params = array())
    {
        if (!$taxOverrideId)
        {
            return $this->client->read('taxes/' . $taxId . '/overrides', $params);
        }
        else
        {
            return $this->client->read('taxes/' . $taxId . '/overrides/' . $taxOverrideId, $params);
        }
    }

    /**
     * @param int $taxId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($taxId, $params = array())
    {
        return $this->client->read('taxes/' . $taxId . '/overrides/count', $params);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($taxId, $taxOverrideId, $fields)
    {
        $fields = array('taxOverride' => $fields);

        return $this->client->update('taxes/' . $taxId . '/overrides/' . $taxOverrideId, $fields);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($taxId, $taxOverrideId)
    {
        return $this->client->delete('taxes/' . $taxId . '/overrides/' . $taxOverrideId);
    }
}

class WebshopappApiResourceTextpages
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('textpage' => $fields);

        return $this->client->create('textpages', $fields);
    }

    /**
     * @param int $textpageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($textpageId = null, $params = array())
    {
        if (!$textpageId)
        {
            return $this->client->read('textpages', $params);
        }
        else
        {
            return $this->client->read('textpages/' . $textpageId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('textpages/count', $params);
    }

    /**
     * @param int $textpageId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($textpageId, $fields)
    {
        $fields = array('textpage' => $fields);

        return $this->client->update('textpages/' . $textpageId, $fields);
    }

    /**
     * @param int $textpageId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($textpageId)
    {
        return $this->client->delete('textpages/' . $textpageId);
    }
}

class WebshopappApiResourceThemeCategories
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('themeCategory' => $fields);

        return $this->client->create('theme/categories', $fields);
    }

    /**
     * @param int $categoryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($categoryId = null, $params = array())
    {
        if (!$categoryId)
        {
            return $this->client->read('theme/categories', $params);
        }
        else
        {
            return $this->client->read('theme/categories/' . $categoryId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('theme/categories/count', $params);
    }

    /**
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($categoryId, $fields)
    {
        $fields = array('themeCategory' => $fields);

        return $this->client->update('theme/categories/' . $categoryId, $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('theme/categories/' . $categoryId);
    }
}

class WebshopappApiResourceThemeProducts
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('themeProduct' => $fields);

        return $this->client->create('theme/products', $fields);
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('theme/products', $params);
        }
        else
        {
            return $this->client->read('theme/products/' . $productId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('theme/products/count', $params);
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $fields)
    {
        $fields = array('themeProduct' => $fields);

        return $this->client->update('theme/products/' . $productId, $fields);
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId)
    {
        return $this->client->delete('theme/products/' . $productId);
    }
}

class WebshopappApiResourceTickets
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('ticket' => $fields);

        return $this->client->create('tickets', $fields);
    }

    /**
     * @param int $ticketId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($ticketId = null, $params = array())
    {
        if (!$ticketId)
        {
            return $this->client->read('tickets', $params);
        }
        else
        {
            return $this->client->read('tickets/' . $ticketId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('tickets/count', $params);
    }

    /**
     * @param int $ticketId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($ticketId, $fields)
    {
        $fields = array('ticket' => $fields);

        return $this->client->update('tickets/' . $ticketId, $fields);
    }

    /**
     * @param int $ticketId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($ticketId)
    {
        return $this->client->delete('tickets/' . $ticketId);
    }
}

class WebshopappApiResourceTicketsMessages
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $ticketId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($ticketId, $fields)
    {
        $fields = array('ticketMessage' => $fields);

        return $this->client->create('tickets/' . $ticketId . '/messages', $fields);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($ticketId, $messageId = null, $params = array())
    {
        if (!$messageId)
        {
            return $this->client->read('tickets/' . $ticketId . '/messages', $params);
        }
        else
        {
            return $this->client->read('tickets/' . $ticketId . '/messages/' . $messageId, $params);
        }
    }

    /**
     * @param int $ticketId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($ticketId, $params = array())
    {
        return $this->client->read('tickets/' . $ticketId . '/messages/count', $params);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($ticketId, $messageId, $fields)
    {
        $fields = array('ticketMessage' => $fields);

        return $this->client->update('tickets/' . $ticketId . '/messages/' . $messageId, $fields);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($ticketId, $messageId)
    {
        return $this->client->delete('tickets/' . $ticketId . '/messages/' . $messageId);
    }
}

class WebshopappApiResourceTime
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('time');
    }
}

class WebshopappApiResourceTypes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('type' => $fields);

        return $this->client->create('types', $fields);
    }

    /**
     * @param int $typeId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($typeId = null, $params = array())
    {
        if (!$typeId)
        {
            return $this->client->read('types', $params);
        }
        else
        {
            return $this->client->read('types/' . $typeId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('types/count', $params);
    }

    /**
     * @param int $typeId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($typeId, $fields)
    {
        $fields = array('type' => $fields);

        return $this->client->update('types/' . $typeId, $fields);
    }

    /**
     * @param int $typeId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($typeId)
    {
        return $this->client->delete('types/' . $typeId);
    }
}

class WebshopappApiResourceTypesAttributes
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('typesAttribute' => $fields);

        return $this->client->create('types/attributes', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('types/attributes', $params);
        }
        else
        {
            return $this->client->read('types/attributes/' . $relationId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('types/attributes/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('types/attributes/' . $relationId);
    }
}

class WebshopappApiResourceVariants
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->create('variants', $fields);
    }

    /**
     * @param int $variantId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($variantId = null, $params = array())
    {
        if (!$variantId)
        {
            return $this->client->read('variants', $params);
        }
        else
        {
            return $this->client->read('variants/' . $variantId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('variants/count', $params);
    }

    /**
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($variantId, $fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/' . $variantId, $fields);
    }

    /**
     * @param int $variantId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($variantId)
    {
        return $this->client->delete('variants/' . $variantId);
    }
}

class WebshopappApiResourceVariantsMetafields
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($variantId, $fields)
    {
        $fields = array('variantMetafield' => $fields);

        return $this->client->create('variants/' . $variantId . '/metafields', $fields);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($variantId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('variants/' . $variantId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('variants/' . $variantId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $variantId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($variantId, $params = array())
    {
        return $this->client->read('variants/' . $variantId . '/metafields/count', $params);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($variantId, $metafieldId, $fields)
    {
        $fields = array('variantMetafield' => $fields);

        return $this->client->update('variants/' . $variantId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($variantId, $metafieldId)
    {
        return $this->client->delete('variants/' . $variantId . '/metafields/' . $metafieldId);
    }
}

class WebshopappApiResourceVariantsBulk
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/bulk', $fields);
    }
}

class WebshopappApiResourceVariantsMovements
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $movementId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($movementId = null, $params = array())
    {
        if (!$movementId)
        {
            return $this->client->read('variants/movements', $params);
        }
        else
        {
            return $this->client->read('variants/movements/' . $movementId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('variants/movements/count', $params);
    }
}

class WebshopappApiResourceWebhooks
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('webhook' => $fields);

        return $this->client->create('webhooks', $fields);
    }

    /**
     * @param int $webhookId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($webhookId = null, $params = array())
    {
        if (!$webhookId)
        {
            return $this->client->read('webhooks', $params);
        }
        else
        {
            return $this->client->read('webhooks/' . $webhookId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('webhooks/count', $params);
    }

    /**
     * @param int $webhookId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($webhookId, $fields)
    {
        $fields = array('webhook' => $fields);

        return $this->client->update('webhooks/' . $webhookId, $fields);
    }

    /**
     * @param int $webhookId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($webhookId)
    {
        return $this->client->delete('webhooks/' . $webhookId);
    }
}
