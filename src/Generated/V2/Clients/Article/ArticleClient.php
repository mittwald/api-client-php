<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Article;

use GuzzleHttp\Psr7\Request;

class ArticleClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function getArticle(GetArticle\GetArticleRequest $request): GetArticle\GetArticle200Response|GetArticle\GetArticle404Response|GetArticle\GetArticleDefaultResponse
    {
        $httpRequest = new Request(GetArticle\GetArticleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetArticle\GetArticle200Response::fromResponse($httpResponse),
            404 => GetArticle\GetArticle404Response::fromResponse($httpResponse),
            default => GetArticle\GetArticleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listArticles(ListArticles\ListArticlesRequest $request): ListArticles\ListArticles200Response|ListArticles\ListArticlesDefaultResponse
    {
        $httpRequest = new Request(ListArticles\ListArticlesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListArticles\ListArticles200Response::fromResponse($httpResponse),
            default => ListArticles\ListArticlesDefaultResponse::fromResponse($httpResponse),
        };
    }
}
