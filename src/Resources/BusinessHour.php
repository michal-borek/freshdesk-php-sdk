<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 20/04/2016
 * Time: 2:32 PM
 */

namespace Freshdesk\Resources;
use Freshdesk\Resources\Traits\AllTrait;
use Freshdesk\Resources\Traits\ViewTrait;

/**
 * Business Hour resource
 * 
 * This provides access to the business hour resources
 *
 * @package Api\Resources
 */
class BusinessHour extends AbstractResource
{

    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/business_hours';

        /**
     * Creates the businesshours endpoint
     *
     * @param string $id
     * @return string
     * @internal
     */
    protected function endpoint($id = null)
    {
        return $id === null ? $this->endpoint : $this->endpoint . '/' . $id;
    }

      /**
     *
     * List all Business Hours
     *
     * @api
     * @param array|null $query
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
    public function all(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint, null, $query);
    }

         /**
     *
     * View a business hour
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
    public function view($id)
    {
        return $this->api()->request('GET', $this->endpoint($id));
    }


}
