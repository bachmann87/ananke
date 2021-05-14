<?php 
namespace VendorName\Components\UserInterfaces;

use VendorName\Components\Interfaces\CalendarInterface;
use VendorName\Components\ORM\SocialMediaPostORM;
use VendorName\Components\ORM\PlattformORM;
use VendorName\Components\ORM\ThreadORM;

use DateTimeImmutable;

/**
 * Calendar UI 
 * 
 * @version 2.7.0-rc
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class Calendar implements CalendarInterface
{
    public $timeslotInterval = "01:00";

    /**
     * Maps given Events to Calendar Timeslot
     * based on the timeslot interval given
     * 
     * @param string $date
     * @param string $slot
     * 
     * @return array|null
     */
    private function mapEventToTimeSlot(string $slot, string $date): ?array {
        
        $timeslots = [];

        // Timeslots
        $start = DateTimeImmutable::createFromFormat("Y-m-d H:i:s", "$date $slot");
        $end = $start->modify("+ $this->timeslotInterval");

        // SocialMedia Posts
        $socialMediaPosts = SocialMediaPostORM::getPostsByTimeslot(
            $start->format("Y-m-d H:i:s"),
            $end->format("Y-m-d H:i:s")
        );

        if($socialMediaPosts) {

            foreach ($socialMediaPosts as $socialMediaPost) {

                $plattform = PlattformORM::getPlattformByPostId($socialMediaPost->getId());
                $target = ThreadORM::getThreadById($socialMediaPost->getThreadId());

                $data = array(
                    // Populate data ...
                );

                // Map
                array_push($timeslots, $data);
            }
        }

        return $timeslots;
    }
}
