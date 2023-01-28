<?php

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\CreateTrait;
use Freshdesk\Resources\Traits\DeleteTrait;
use Freshdesk\Resources\Traits\UpdateTrait;
use Freshdesk\Resources\Traits\ViewTrait;

class SolutionArticle extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @internal
     * @var string
     *
     */

     private $articlesEndpoint = '/solutions/article';

    /**
     * The resource endpoint
     *
     * @internal
     * @var string
     *
     */

    private $articlesFolderEndpoint = '/solutions/folders';

     /**
     * Creates the article endpoint
     *
     * @param string $id
     * @return string
     * @internal
     */
    protected function articlesEndpoint($id = null)
    {
        return $id === null ? $this->articlesEndpoint : $this->articlesEndpoint . '/' . $id;
    }

    /**
     * Creates the articles folder endpoint
     *
     * @param string $id
     * @return string
     * @internal
     */
    protected function articlesFoldersEndpoint($id = null)
    {
        return $id === null ? $this->articlesFolderEndpoint : $this->articlesFolderEndpoint . '/' . $id;
    }

     /**
     *
     * Create an article
     *
     * @api
     * @param int $id
     * @param array $data
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function create($id, array $data)
    {
        return $this->api()->request('POST', $this->articlesFoldersEndpoint($id . '/articles'), $data);
    }

    /**
     *
     * List articles in folders
     *
     * @api
     * @param int $id
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function all($id)
    {
        return $this->api()->request('GET', $this->articlesFoldersEndpoint($id . '/articles'));
    }
}
