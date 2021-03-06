<?php


namespace BugSheng\Functional\Respond;


/**
 * 业务返回格式统一
 *
 * Trait FunctionalRespondTrait
 *
 * @package BugSheng\Functional\Respond
 */
trait FunctionalRespondTrait
{

    /**
     * @param array  $data
     * @param string $message
     * @param bool   $status
     *
     * @return array
     */
    public function success($data = [], $message = 'handle succeed!', $status = true)
    {
        return $this->respond($status, $data, $message);
    }

    /**
     * @param string $message
     * @param array  $data
     * @param bool   $status
     *
     * @return array
     */
    public function fail($message = 'handle failed!', $data = [], $status = false)
    {
        return $this->respond($status, $data, $message);
    }

    /**
     * @param bool   $status
     * @param array  $data
     * @param string $message
     *
     * @return array
     */
    protected function respond($status = true, $data = [], $message = '')
    {
        return compact('status', 'data', 'message');
    }

}
