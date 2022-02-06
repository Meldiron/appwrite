<?php

/**
 * List of server wide error codes and their respective messages. 
 */

use Appwrite\Extend\Exception;

return [
    /** General Errors */
    Exception::UNKNOWN_ORIGIN => [
        'name' => Exception::UNKNOWN_ORIGIN,
        'description' => 'The request originated from a non-whitelisted origin. If you trust this origin, please add it as a platform in the Appwrite console.',
        'statusCode' => 403,
    ],
    Exception::SERVICE_DISABLED => [
        'name' => Exception::SERVICE_DISABLED,
        'description' => 'The requested service is disabled. You can enable/disable a service from the Appwrite console or by contacting the project owner.',
        'statusCode' => 503,
    ],
    Exception::UNAUTHORIZED_SCOPE => [
        'name' => Exception::UNAUTHORIZED_SCOPE,
        'description' => 'The current user or API key does not have the required scopes to access the requested resource.',
        'statusCode' => 401,
    ],
    Exception::STORAGE_ERROR => [
        'name' => Exception::STORAGE_ERROR,
        'description' => 'Storage error',
        'statusCode' => 500,
    ],
    Exception::RATE_LIMIT_EXCEEDED => [
        'name' => Exception::RATE_LIMIT_EXCEEDED,
        'description' => 'Rate limit for the current endpoint has been exceeded. Please try again after some time.',
        'statusCode' => 429,
    ],
    Exception::SMTP_DISABLED => [
        'name' => Exception::SMTP_DISABLED,
        'description' => 'SMTP is disabled on your Appwrite instance. Please contact your project ',
        'statusCode' => 503,
    ],

    /** Project Errors */
    Exception::PROJECT_NOT_FOUND => [
        'name' => Exception::PROJECT_NOT_FOUND,
        'description' => 'The requested project could not be found. Please check the value of the X-Appwrite-Project header to ensure the correct project ID is being used.',
        'statusCode' => 404,
    ],
    Exception::PROJECT_UNKNOWN => [
        'name' => Exception::PROJECT_UNKNOWN,
        'description' => 'The project ID is either missing or not valid. Please check the value of the X-Appwrite-Project header to ensure the correct project ID is being used.',
        'statusCode' => 400,
    ],

    /** User Errors */
    Exception::USER_COUNT_EXCEEDED => [
        'name' => Exception::USER_COUNT_EXCEEDED,
        'description' => 'The current project has exceeded the maximum number of users. Please check your user limit in the Appwrite console.',
        'statusCode' => 501,
    ],
    Exception::USER_EMAIL_NOT_WHITELISTED => [
        'name' => Exception::USER_EMAIL_NOT_WHITELISTED,
        'description' => 'The user\'s email is not part of the whitelist. Please check the _APP_CONSOLE_WHITELIST_EMAILS environment variable of your Appwrite server.',
        'statusCode' => 401,
    ],
    Exception::USER_PASSWORD_RESET_REQUIRED => [
        'name' => Exception::USER_PASSWORD_RESET_REQUIRED,
        'description' => 'The current user requires a password reset.',
        'statusCode' => 412,
    ],
    Exception::USER_IP_NOT_WHITELISTED => [
        'name' => Exception::USER_IP_NOT_WHITELISTED,
        'description' => 'The user\'s IP address is not part of the whitelist. Please check the _APP_CONSOLE_WHITELIST_IPS environment variable of your Appwrite server.',
        'statusCode' => 401,
    ],
    Exception::USER_INVALID_CREDENTIALS => [
        'name' => Exception::USER_INVALID_CREDENTIALS,
        'description' => 'Invalid credentials. Please check the email and password.',
        'statusCode' => 401,
    ],
    Exception::USER_ALREADY_EXISTS => [
        'name' => Exception::USER_ALREADY_EXISTS,
        'description' => 'A user with the same email ID already exists in your project.',
        'statusCode' => 409,
    ],
    Exception::USER_BLOCKED => [
        'name' => Exception::USER_BLOCKED,
        'description' => 'The current user has been blocked. Please contact the project administrator for more information.',
        'statusCode' => 401,
    ],
    Exception::USER_CREATION_FAILED => [
        'name' => Exception::USER_CREATION_FAILED,
        'description' => 'There was an internal server error while creating the user.',
        'statusCode' => 500,
    ],
    Exception::USER_NOT_FOUND => [
        'name' => Exception::USER_NOT_FOUND,
        'description' => 'User with the requested ID could not be found.',
        'statusCode' => 404,
    ],
    Exception::USER_EMAIL_ALREADY_EXISTS => [
        'name' => Exception::USER_EMAIL_ALREADY_EXISTS,
        'description' => 'Another user with the same email already exists in the current project.',
        'statusCode' => 409,
    ],
    Exception::USER_PASSWORD_MISMATCH => [
        'name' => Exception::USER_PASSWORD_MISMATCH,
        'description' => 'Passwords do not match. Please recheck.',
        'statusCode' => 400,
    ],
    Exception::USER_AUTH_METHOD_UNSUPPORTED => [
        'name' => Exception::USER_AUTH_METHOD_UNSUPPORTED,
        'description' => 'The requested authentication method is either disabled or unsupported.',
        'statusCode' => 501,
    ],

    /** OAuth Errors */
    Exception::OAUTH_PROVIDER_DISABLED => [
        'name' => Exception::OAUTH_PROVIDER_DISABLED,
        'description' => 'The chosen OAuth provider is disabled. Please contact your project administrator for more information.',
        'statusCode' => 412,
    ],
    Exception::OAUTH_PROVIDER_UNSUPPORTED => [
        'name' => Exception::OAUTH_PROVIDER_UNSUPPORTED,
        'description' => 'The chosen OAuth provider is unsupported.',
        'statusCode' => 501,
    ],
    Exception::OAUTH_INVALID_LOGIN_STATE_PARAMS => [
        'name' => Exception::OAUTH_INVALID_LOGIN_STATE_PARAMS,
        'description' => 'Failed to parse the login state params from the OAuth provider.',
        'statusCode' => 500,
    ],
    Exception::OAUTH_INVALID_SUCCESS_URL => [
        'name' => Exception::OAUTH_INVALID_SUCCESS_URL,
        'description' => 'Invalid URL received for OAuth success redirect.',
        'statusCode' => 400,
    ],
    Exception::OAUTH_INVALID_FAILURE_URL => [
        'name' => Exception::OAUTH_INVALID_FAILURE_URL,
        'description' => 'Invalid URL received for OAuth failure redirect.',
        'statusCode' => 400,
    ],
    Exception::OAUTH_ACCESS_TOKEN_FAILED => [
        'name' => Exception::OAUTH_ACCESS_TOKEN_FAILED,
        'description' => 'Failed to obtain access token from the OAuth provider.',
        'statusCode' => 500,
    ],
    Exception::OAUTH_MISSING_USER_ID => [
        'name' => Exception::OAUTH_MISSING_USER_ID,
        'description' => 'Failed to obtain user id from the OAuth provider.',
        'statusCode' => 400,
    ]
];