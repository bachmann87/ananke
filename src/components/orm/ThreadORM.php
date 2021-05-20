<?php 
namespace VendorName\Components\ORM;

/**
 * Social Media Plattform ORM 
 * 
 * @version 2.7.0-rc
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class ThreadORM extends ObjectORM {

    /**
     * Gets Thread by Id
     * 
     * @see https://developers.facebook.com/docs/graph-api/reference/v10.0/thread
     */
    public static function getThreadById (int $threadId): Thread {

        // Code ...

        return $thread;
    }
}