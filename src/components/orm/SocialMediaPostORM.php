<?php 
namespace VendorName\Components\ORM;

/**
 * Social Media ORM 
 * 
 * @version 2.7.0-rc
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class SocialMediaPostORM extends ObjectORM {

    /**
     * Gets all Social Media Posts by given Timeslot
     * 
     * @see https://example.com/editorial
     */
    public static function getPostsByTimeslot(string $timeslotStart, string $timeslotEnd): ?array {
        
        $posts = [];

        // Code...

        return $posts;
    }
}