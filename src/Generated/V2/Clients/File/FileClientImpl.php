<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileNotAcceptableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileUnprocessableEntityResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTokenRules\DeprecatedFileGetFileTokenRulesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules\DeprecatedFileGetFileTypeRulesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileUnprocessableEntityResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaUnprocessableEntityResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules\GetFileUploadTokenRulesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules\GetFileUploadTypeRulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName\GetFileWithNameUnprocessableEntityResponse;

/**
 * Client for File API
 *
 * The file API allows you to manage your files, for example for conversations
 * attachments and avatar uploads.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class FileClientImpl implements FileClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get a Token's upload rules.
     *
     * Deprecated by `GET /v2/file-upload-tokens/{fileUploadToken}/rules`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/deprecated-file-get-file-token-rules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedFileGetFileTokenRulesRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedFileGetFileTokenRulesOKResponse OK
     */
    public function deprecatedFileGetFileTokenRules(DeprecatedFileGetFileTokenRulesRequest $request): DeprecatedFileGetFileTokenRulesOKResponse
    {
        $httpRequest = new Request(DeprecatedFileGetFileTokenRulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedFileGetFileTokenRulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedFileGetFileTokenRulesNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedFileGetFileTokenRulesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedFileGetFileTokenRulesInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeprecatedFileGetFileTokenRulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Type's upload rules.
     *
     * Deprecated by `GET /v2/file-upload-types/{fileUploadType}/rules`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/deprecated-file-get-file-type-rules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedFileGetFileTypeRulesRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedFileGetFileTypeRulesOKResponse OK
     */
    public function deprecatedFileGetFileTypeRules(DeprecatedFileGetFileTypeRulesRequest $request): DeprecatedFileGetFileTypeRulesOKResponse
    {
        $httpRequest = new Request(DeprecatedFileGetFileTypeRulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedFileGetFileTypeRulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedFileGetFileTypeRulesNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedFileGetFileTypeRulesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedFileGetFileTypeRulesInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeprecatedFileGetFileTypeRulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a File.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-create-file
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateFileRequest $request An object representing the request for this operation
     * @return CreateFileCreatedResponse Created
     */
    public function createFile(CreateFileRequest $request): CreateFileCreatedResponse
    {
        $httpRequest = new Request(CreateFileRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateFileCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateFileBadRequestResponse::fromResponse($httpResponse),
            401 => CreateFileUnauthorizedResponse::fromResponse($httpResponse),
            406 => CreateFileNotAcceptableResponse::fromResponse($httpResponse),
            422 => CreateFileUnprocessableEntityResponse::fromResponse($httpResponse),
            429 => CreateFileTooManyRequestsResponse::fromResponse($httpResponse),
            500 => CreateFileInternalServerErrorResponse::fromResponse($httpResponse),
            default => CreateFileDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a File.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-get-file
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function getFile(GetFileRequest $request): StringResponse
    {
        $httpRequest = new Request(GetFileRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileBadRequestResponse::fromResponse($httpResponse),
            401 => GetFileUnauthorizedResponse::fromResponse($httpResponse),
            403 => GetFileForbiddenResponse::fromResponse($httpResponse),
            404 => GetFileNotFoundResponse::fromResponse($httpResponse),
            422 => GetFileUnprocessableEntityResponse::fromResponse($httpResponse),
            429 => GetFileTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetFileInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetFileDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a File's meta.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-get-file-meta
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileMetaRequest $request An object representing the request for this operation
     * @return GetFileMetaOKResponse OK
     */
    public function getFileMeta(GetFileMetaRequest $request): GetFileMetaOKResponse
    {
        $httpRequest = new Request(GetFileMetaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetFileMetaOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileMetaBadRequestResponse::fromResponse($httpResponse),
            401 => GetFileMetaUnauthorizedResponse::fromResponse($httpResponse),
            403 => GetFileMetaForbiddenResponse::fromResponse($httpResponse),
            404 => GetFileMetaNotFoundResponse::fromResponse($httpResponse),
            422 => GetFileMetaUnprocessableEntityResponse::fromResponse($httpResponse),
            429 => GetFileMetaTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetFileMetaInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetFileMetaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a FileUploadToken's rules.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-get-file-upload-token-rules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileUploadTokenRulesRequest $request An object representing the request for this operation
     * @return GetFileUploadTokenRulesOKResponse OK
     */
    public function getFileUploadTokenRules(GetFileUploadTokenRulesRequest $request): GetFileUploadTokenRulesOKResponse
    {
        $httpRequest = new Request(GetFileUploadTokenRulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetFileUploadTokenRulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileUploadTokenRulesBadRequestResponse::fromResponse($httpResponse),
            404 => GetFileUploadTokenRulesNotFoundResponse::fromResponse($httpResponse),
            429 => GetFileUploadTokenRulesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetFileUploadTokenRulesInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetFileUploadTokenRulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a FileUploadType's rules.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-get-file-upload-type-rules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileUploadTypeRulesRequest $request An object representing the request for this operation
     * @return GetFileUploadTypeRulesOKResponse OK
     */
    public function getFileUploadTypeRules(GetFileUploadTypeRulesRequest $request): GetFileUploadTypeRulesOKResponse
    {
        $httpRequest = new Request(GetFileUploadTypeRulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetFileUploadTypeRulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileUploadTypeRulesBadRequestResponse::fromResponse($httpResponse),
            404 => GetFileUploadTypeRulesNotFoundResponse::fromResponse($httpResponse),
            500 => GetFileUploadTypeRulesInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetFileUploadTypeRulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a File with user-friendly url.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/File/operation/file-get-file-with-name
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileWithNameRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function getFileWithName(GetFileWithNameRequest $request): StringResponse
    {
        $httpRequest = new Request(GetFileWithNameRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileWithNameBadRequestResponse::fromResponse($httpResponse),
            401 => GetFileWithNameUnauthorizedResponse::fromResponse($httpResponse),
            403 => GetFileWithNameForbiddenResponse::fromResponse($httpResponse),
            404 => GetFileWithNameNotFoundResponse::fromResponse($httpResponse),
            422 => GetFileWithNameUnprocessableEntityResponse::fromResponse($httpResponse),
            429 => GetFileWithNameTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetFileWithNameInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetFileWithNameDefaultResponse::fromResponse($httpResponse),
        });
    }
}
