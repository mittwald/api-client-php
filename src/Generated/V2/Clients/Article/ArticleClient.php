<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Article;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Generated\V2\Clients\Article\GetArticle\GetArticle200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Article\GetArticle\GetArticle404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Article\GetArticle\GetArticleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Article\GetArticle\GetArticleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ListArticles\ListArticles200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ListArticles\ListArticlesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ListArticles\ListArticlesRequest;

class ArticleClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getArticle(GetArticleRequest $request): GetArticle200Response|GetArticle404Response|GetArticleDefaultResponse
    {
        $httpRequest = new Request(GetArticleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetArticle200Response::fromResponse($httpResponse),
            404 => GetArticle404Response::fromResponse($httpResponse),
            default => GetArticleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listArticles(ListArticlesRequest $request): ListArticles200Response|ListArticlesDefaultResponse
    {
        $httpRequest = new Request(ListArticlesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListArticles200Response::fromResponse($httpResponse),
            default => ListArticlesDefaultResponse::fromResponse($httpResponse),
        };
    }
}
