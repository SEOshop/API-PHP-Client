<?php

namespace Lightspeed;

/**
 * The Lightspeed Api Client Class
 */
class ApiClient
{
    /**
     * The Api Client version (do not change!)
     */
    const CLIENT_VERSION = '1.9.1';
    /**
     * The Api Hosts (do not change!)
     */
    const SERVER_HOST_LOCAL = 'https://api.webshopapp.dev/';
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
     * @var array
     */
    private $responseHeaders = [];

    /**
     * @var ApiResourceAccount
     */
    public $account;
    /**
     * @var ApiResourceAccountMetafields
     */
    public $accountMetafields;
    /**
     * @var ApiResourceAccountPermissions
     */
    public $accountPermissions;
    /**
     * @var ApiResourceAccountRatelimit
     */
    public $accountRatelimit;
    /**
     * @var ApiResourceAdditionalcosts
     */
    public $additionalcosts;
    /**
     * @var ApiResourceAttributes
     */
    public $attributes;
    /**
     * @var ApiResourceBlogs
     */
    public $blogs;
    /**
     * @var ApiResourceBlogsArticles
     */
    public $blogsArticles;
    /**
     * @var ApiResourceBlogsArticlesImage
     */
    public $blogsArticlesImage;
    /**
     * @var ApiResourceBlogsArticlesTags
     */
    public $blogsArticlesTags;
    /**
     * @var ApiResourceBlogsComments
     */
    public $blogsComments;
    /**
     * @var ApiResourceBlogsTags
     */
    public $blogsTags;
    /**
     * @var ApiResourceBrands
     */
    public $brands;
    /**
     * @var ApiResourceBrandsImage
     */
    public $brandsImage;
    /**
     * @var ApiResourceCatalog
     */
    public $catalog;
    /**
     * @var ApiResourceCategories
     */
    public $categories;
    /**
     * @var ApiResourceCategoriesImage
     */
    public $categoriesImage;
    /**
     * @var ApiResourceCategoriesProducts
     */
    public $categoriesProducts;
    /**
     * @var ApiResourceCategoriesProductsBulk
     */
    public $categoriesProductsBulk;
    /**
     * @var ApiResourceCheckouts
     */
    public $checkouts;
    /**
     * @var ApiResourceCheckoutsOrder
     */
    public $checkoutsOrder;
    /**
     * @var ApiResourceCheckoutsPayment_methods
     */
    public $checkoutsPayment_methods;
    /**
     * @var ApiResourceCheckoutsProducts
     */
    public $checkoutsProducts;
    /**
     * @var ApiResourceCheckoutsShipment_methods
     */
    public $checkoutsShipment_methods;
    /**
     * @var ApiResourceCheckoutsValidate
     */
    public $checkoutsValidate;
    /**
     * @var ApiResourceContacts
     */
    public $contacts;
    /**
     * @var ApiResourceCountries
     */
    public $countries;
    /**
     * @var ApiResourceCustomers
     */
    public $customers;
    /**
     * @var ApiResourceCustomersLogin
     */
    public $customersLogin;
    /**
     * @var ApiResourceCustomersMetafields
     */
    public $customersMetafields;
    /**
     * @var ApiResourceCustomersTokens
     */
    public $customersTokens;
    /**
     * @var ApiResourceDashboard
     */
    public $dashboard;
    /**
     * @var ApiResourceDeliverydates
     */
    public $deliverydates;
    /**
     * @var ApiResourceDiscountrules
     */
    public $discountrules;
    /**
     * @var ApiResourceDiscounts
     */
    public $discounts;
    /**
     * @var ApiResourceEvents
     */
    public $events;
    /**
     * @var ApiResourceExternal_services
     */
    public $external_services;
    /**
     * @var ApiResourceFiles
     */
    public $files;
    /**
     * @var ApiResourceFilters
     */
    public $filters;
    /**
     * @var ApiResourceFiltersValues
     */
    public $filtersValues;
    /**
     * @var ApiResourceGroups
     */
    public $groups;
    /**
     * @var ApiResourceGroupsCustomers
     */
    public $groupsCustomers;
    /**
     * @var ApiResourceInvoices
     */
    public $invoices;
    /**
     * @var ApiResourceInvoicesItems
     */
    public $invoicesItems;
    /**
     * @var ApiResourceInvoicesMetafields
     */
    public $invoicesMetafields;
    /**
     * @var ApiResourceLanguages
     */
    public $languages;
    /**
     * @var ApiResourceLocations
     */
    public $locations;
    /**
     * @var ApiResourceMetafields
     */
    public $metafields;
    /**
     * @var ApiResourceOrders
     */
    public $orders;
    /**
     * @var ApiResourceOrdersCredit
     */
    public $ordersCredit;
    /**
     * @var ApiResourceOrdersMetafields
     */
    public $ordersMetafields;
    /**
     * @var ApiResourceOrdersProducts
     */
    public $ordersProducts;
    /**
     * @var ApiResourceOrdersCustomstatuses
     */
    public $ordersCustomstatuses;
    /**
     * @var ApiResourceOrdersEvents
     */
    public $ordersEvents;
    /**
     * @var ApiResourcePaymentmethods
     */
    public $paymentmethods;
    /**
     * @var ApiResourceProducts
     */
    public $products;
    /**
     * @var ApiResourceProductsAttributes
     */
    public $productsAttributes;
    /**
     * @var ApiResourceProductsFiltervalues
     */
    public $productsFiltervalues;
    /**
     * @var ApiResourceProductsImages
     */
    public $productsImages;
    /**
     * @var ApiResourceProductsMetafields
     */
    public $productsMetafields;
    /**
     * @var ApiResourceProductsRelations
     */
    public $productsRelations;
    /**
     * @var ApiResourceQuotes
     */
    public $quotes;
    /**
     * @var ApiResourceQuotesConvert
     */
    public $quotesConvert;
    /**
     * @var ApiResourceQuotesPaymentmethods
     */
    public $quotesPaymentmethods;
    /**
     * @var ApiResourceQuotesProducts
     */
    public $quotesProducts;
    /**
     * @var ApiResourceQuotesShippingmethods
     */
    public $quotesShippingmethods;
    /**
     * @var ApiResourceRedirects
     */
    public $redirects;
    /**
     * @var ApiResourceReturns
     */
    public $returns;
    /**
     * @var ApiResourceReviews
     */
    public $reviews;
    /**
     * @var ApiResourceSets
     */
    public $sets;
    /**
     * @var ApiResourceShipments
     */
    public $shipments;
    /**
     * @var ApiResourceShipmentsMetafields
     */
    public $shipmentsMetafields;
    /**
     * @var ApiResourceShipmentsProducts
     */
    public $shipmentsProducts;
    /**
     * @var ApiResourceShippingmethods
     */
    public $shippingmethods;
    /**
     * @var ApiResourceShippingmethodsCountries
     */
    public $shippingmethodsCountries;
    /**
     * @var ApiResourceShippingmethodsValues
     */
    public $shippingmethodsValues;
    /**
     * @var ApiResourceShop
     */
    public $shop;
    /**
     * @var ApiResourceShopCompany
     */
    public $shopCompany;
    /**
     * @var ApiResourceShopJavascript
     */
    public $shopJavascript;
    /**
     * @var ApiResourceShopLimits
     */
    public $shopLimits;
    /**
     * @var ApiResourceShopMetafields
     */
    public $shopMetafields;
    /**
     * @var ApiResourceShopScripts
     */
    public $shopScripts;
    /**
     * @var ApiResourceShopSettings
     */
    public $shopSettings;
    /**
     * @var ApiResourceShopTracking
     */
    public $shopTracking;
    /**
     * @var ApiResourceShopWebsite
     */
    public $shopWebsite;
    /**
     * @var ApiResourceSubscriptions
     */
    public $subscriptions;
    /**
     * @var ApiResourceSuppliers
     */
    public $suppliers;
    /**
     * @var ApiResourceTags
     */
    public $tags;
    /**
     * @var ApiResourceTagsProducts
     */
    public $tagsProducts;
    /**
     * @var ApiResourceTaxes
     */
    public $taxes;
    /**
     * @var ApiResourceTaxesOverrides
     */
    public $taxesOverrides;
    /**
     * @var ApiResourceTextpages
     */
    public $textpages;
    /**
     * @var ApiResourceThemeCategories
     */
    public $themeCategories;
    /**
     * @var ApiResourceThemeProducts
     */
    public $themeProducts;
    /**
     * @var ApiResourceTickets
     */
    public $tickets;
    /**
     * @var ApiResourceTicketsMessages
     */
    public $ticketsMessages;
    /**
     * @var ApiResourceTime
     */
    public $time;
    /**
     * @var ApiResourceTypes
     */
    public $types;
    /**
     * @var ApiResourceTypesAttributes
     */
    public $typesAttributes;
    /**
     * @var ApiResourceVariants
     */
    public $variants;
    /**
     * @var ApiResourceVariantsImage
     */
    public $variantsImage;
    /**
     * @var ApiResourceVariantsMetafields
     */
    public $variantsMetafields;
    /**
     * @var ApiResourceVariantsBulk
     */
    public $variantsBulk;
    /**
     * @var ApiResourceVariantsMovements
     */
    public $variantsMovements;
    /**
     * @var ApiResourceWebhooks
     */
    public $webhooks;

    /**
     * @param string $apiKey      The api key
     * @param string $apiSecret   The api secret
     * @param string $apiLanguage The language to use the api in
     * @param string $apiServer   The api server to use test / live
     *
     * @throws ApiException
     */
    public function __construct($apiServer, $apiKey, $apiSecret, $apiLanguage)
    {
        if (!function_exists('curl_init'))
        {
            throw new ApiException('ApiClient needs the CURL PHP extension.');
        }
        if (!function_exists('json_decode'))
        {
            throw new ApiException('ApiClient needs the JSON PHP extension.');
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
     * @param array $responseHeaders
     *
     * @return void
     */
    public function setResponseHeaders($responseHeaders)
    {
        $this->responseHeaders = $responseHeaders;
    }

    /**
     * @return array
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * @throws ApiException
     */
    private function checkLoginCredentials()
    {
        if (strlen($this->getApiKey()) !== 32 || strlen($this->getApiSecret()) !== 32)
        {
            throw new ApiException('Invalid login credentials.');
        }
        if (strlen($this->getApiLanguage()) !== 2)
        {
            throw new ApiException('Invalid API language.');
        }
    }

    private function registerResources()
    {
        $this->account                   = new ApiResourceAccount($this);
        $this->accountMetafields         = new ApiResourceAccountMetafields($this);
        $this->accountPermissions        = new ApiResourceAccountPermissions($this);
        $this->accountRatelimit          = new ApiResourceAccountRatelimit($this);
        $this->additionalcosts           = new ApiResourceAdditionalcosts($this);
        $this->attributes                = new ApiResourceAttributes($this);
        $this->blogs                     = new ApiResourceBlogs($this);
        $this->blogsArticles             = new ApiResourceBlogsArticles($this);
        $this->blogsArticlesImage        = new ApiResourceBlogsArticlesImage($this);
        $this->blogsArticlesTags         = new ApiResourceBlogsArticlesTags($this);
        $this->blogsComments             = new ApiResourceBlogsComments($this);
        $this->blogsTags                 = new ApiResourceBlogsTags($this);
        $this->brands                    = new ApiResourceBrands($this);
        $this->brandsImage               = new ApiResourceBrandsImage($this);
        $this->catalog                   = new ApiResourceCatalog($this);
        $this->categories                = new ApiResourceCategories($this);
        $this->categoriesImage           = new ApiResourceCategoriesImage($this);
        $this->categoriesProducts        = new ApiResourceCategoriesProducts($this);
        $this->categoriesProductsBulk    = new ApiResourceCategoriesProductsBulk($this);
        $this->checkouts                 = new ApiResourceCheckouts($this);
        $this->checkoutsOrder            = new ApiResourceCheckoutsOrder($this);
        $this->checkoutsPayment_methods  = new ApiResourceCheckoutsPayment_methods($this);
        $this->checkoutsProducts         = new ApiResourceCheckoutsProducts($this);
        $this->checkoutsShipment_methods = new ApiResourceCheckoutsShipment_methods($this);
        $this->checkoutsValidate         = new ApiResourceCheckoutsValidate($this);
        $this->contacts                  = new ApiResourceContacts($this);
        $this->countries                 = new ApiResourceCountries($this);
        $this->customers                 = new ApiResourceCustomers($this);
        $this->customersLogin            = new ApiResourceCustomersLogin($this);
        $this->customersMetafields       = new ApiResourceCustomersMetafields($this);
        $this->customersTokens           = new ApiResourceCustomersTokens($this);
        $this->dashboard                 = new ApiResourceDashboard($this);
        $this->deliverydates             = new ApiResourceDeliverydates($this);
        $this->discountrules             = new ApiResourceDiscountrules($this);
        $this->discounts                 = new ApiResourceDiscounts($this);
        $this->events                    = new ApiResourceEvents($this);
        $this->external_services         = new ApiResourceExternal_services($this);
        $this->files                     = new ApiResourceFiles($this);
        $this->filters                   = new ApiResourceFilters($this);
        $this->filtersValues             = new ApiResourceFiltersValues($this);
        $this->groups                    = new ApiResourceGroups($this);
        $this->groupsCustomers           = new ApiResourceGroupsCustomers($this);
        $this->invoices                  = new ApiResourceInvoices($this);
        $this->invoicesItems             = new ApiResourceInvoicesItems($this);
        $this->invoicesMetafields        = new ApiResourceInvoicesMetafields($this);
        $this->languages                 = new ApiResourceLanguages($this);
        $this->locations                 = new ApiResourceLocations($this);
        $this->metafields                = new ApiResourceMetafields($this);
        $this->orders                    = new ApiResourceOrders($this);
        $this->ordersCredit              = new ApiResourceOrdersCredit($this);
        $this->ordersMetafields          = new ApiResourceOrdersMetafields($this);
        $this->ordersProducts            = new ApiResourceOrdersProducts($this);
        $this->ordersCustomstatuses      = new ApiResourceOrdersCustomstatuses($this);
        $this->ordersEvents              = new ApiResourceOrdersEvents($this);
        $this->paymentmethods            = new ApiResourcePaymentmethods($this);
        $this->products                  = new ApiResourceProducts($this);
        $this->productsAttributes        = new ApiResourceProductsAttributes($this);
        $this->productsFiltervalues      = new ApiResourceProductsFiltervalues($this);
        $this->productsImages            = new ApiResourceProductsImages($this);
        $this->productsMetafields        = new ApiResourceProductsMetafields($this);
        $this->productsRelations         = new ApiResourceProductsRelations($this);
        $this->quotes                    = new ApiResourceQuotes($this);
        $this->quotesConvert             = new ApiResourceQuotesConvert($this);
        $this->quotesPaymentmethods      = new ApiResourceQuotesPaymentmethods($this);
        $this->quotesProducts            = new ApiResourceQuotesProducts($this);
        $this->quotesShippingmethods     = new ApiResourceQuotesShippingmethods($this);
        $this->redirects                 = new ApiResourceRedirects($this);
        $this->returns                   = new ApiResourceReturns($this);
        $this->reviews                   = new ApiResourceReviews($this);
        $this->sets                      = new ApiResourceSets($this);
        $this->shipments                 = new ApiResourceShipments($this);
        $this->shipmentsMetafields       = new ApiResourceShipmentsMetafields($this);
        $this->shipmentsProducts         = new ApiResourceShipmentsProducts($this);
        $this->shippingmethods           = new ApiResourceShippingmethods($this);
        $this->shippingmethodsCountries  = new ApiResourceShippingmethodsCountries($this);
        $this->shippingmethodsValues     = new ApiResourceShippingmethodsValues($this);
        $this->shop                      = new ApiResourceShop($this);
        $this->shopCompany               = new ApiResourceShopCompany($this);
        $this->shopJavascript            = new ApiResourceShopJavascript($this);
        $this->shopLimits                = new ApiResourceShopLimits($this);
        $this->shopMetafields            = new ApiResourceShopMetafields($this);
        $this->shopScripts               = new ApiResourceShopScripts($this);
        $this->shopSettings              = new ApiResourceShopSettings($this);
        $this->shopTracking              = new ApiResourceShopTracking($this);
        $this->shopWebsite               = new ApiResourceShopWebsite($this);
        $this->subscriptions             = new ApiResourceSubscriptions($this);
        $this->suppliers                 = new ApiResourceSuppliers($this);
        $this->tags                      = new ApiResourceTags($this);
        $this->tagsProducts              = new ApiResourceTagsProducts($this);
        $this->taxes                     = new ApiResourceTaxes($this);
        $this->taxesOverrides            = new ApiResourceTaxesOverrides($this);
        $this->textpages                 = new ApiResourceTextpages($this);
        $this->themeCategories           = new ApiResourceThemeCategories($this);
        $this->themeProducts             = new ApiResourceThemeProducts($this);
        $this->tickets                   = new ApiResourceTickets($this);
        $this->ticketsMessages           = new ApiResourceTicketsMessages($this);
        $this->time                      = new ApiResourceTime($this);
        $this->types                     = new ApiResourceTypes($this);
        $this->typesAttributes           = new ApiResourceTypesAttributes($this);
        $this->variants                  = new ApiResourceVariants($this);
        $this->variantsImage             = new ApiResourceVariantsImage($this);
        $this->variantsMetafields        = new ApiResourceVariantsMetafields($this);
        $this->variantsBulk              = new ApiResourceVariantsBulk($this);
        $this->variantsMovements         = new ApiResourceVariantsMovements($this);
        $this->webhooks                  = new ApiResourceWebhooks($this);
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
     * @throws ApiException
     */
    private function sendRequest($url, $method, $payload = null, $options = [])
    {
        $this->checkLoginCredentials();

        if ($method == 'post' || $method == 'put')
        {
            if (!$payload || !is_array($payload))
            {
                throw new ApiException(100, 'Invalid payload');
            }

            $multipart = array_key_exists('header', $options);

            $header = $multipart ? $options['header'] : 'application/json';

            $curlOptions = array(
                CURLOPT_URL           => $this->getUrl($url),
                CURLOPT_CUSTOMREQUEST => strtoupper($method),
                CURLOPT_HTTPHEADER    => array('Content-Type: ' . $header),
                CURLOPT_POST          => true,
                CURLOPT_POSTFIELDS    => $multipart ? $payload : json_encode($payload),
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
            CURLOPT_USERAGENT      => 'ApiClient/' . self::CLIENT_VERSION . ' (PHP/' . phpversion() . ')',
            CURLOPT_SSLVERSION     => 6,
        );

        $curlHandle = curl_init();

        curl_setopt_array($curlHandle, $curlOptions);

        $headers = [];

        curl_setopt($curlHandle, CURLOPT_HEADERFUNCTION, function($curl, $header) use (&$headers) {
            $length = strlen($header);
            $header = explode(':', $header, 2);

            if (count($header) <= 1) {
                return $length;
            }

            $header              = array_map('trim', $header);
            $headers[$header[0]] = $header[1];

            return $length;
        });

        $responseBody = curl_exec($curlHandle);

        if ($headers) {
            $this->setResponseHeaders($headers);
        }

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
     * @throws ApiException
     */
    private function handleResponseError($responseCode, $responseBody)
    {
        $errorMessage = 'Unknown error: ' . $responseCode;

        if ($responseBody && array_key_exists('error', $responseBody))
        {
            $errorMessage = $responseBody['error']['message'];
        }

        throw new ApiException($errorMessage, $responseCode);
    }

    /**
     * @param resource $curlHandle
     *
     * @throws ApiException
     */
    private function handleCurlError($curlHandle)
    {
        $errorMessage = 'Curl error: ' . curl_error($curlHandle);

        throw new ApiException($errorMessage, curl_errno($curlHandle));
    }

    /**
     * @param string $url
     * @param array  $payload
     * @param array  $options
     *
     * @return array
     * @throws ApiException
     */
    public function create($url, $payload, $options = [])
    {
        return $this->sendRequest($url, 'post', $payload, $options);
    }

    /**
     * @param string $url
     * @param array  $params
     *
     * @return array|int
     * @throws ApiException
     */
    public function read($url, $params = array())
    {
        return $this->sendRequest($url, 'get', $params);
    }

    /**
     * @param string $url
     * @param array  $payload
     * @param array  $options
     *
     * @return array
     * @throws ApiException
     */
    public function update($url, $payload, $options = [])
    {
        return $this->sendRequest($url, 'put', $payload, $options);
    }

    /**
     * @param string $url
     *
     * @return array
     * @throws ApiException
     */
    public function delete($url)
    {
        return $this->sendRequest($url, 'delete');
    }
}
