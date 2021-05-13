<?php 

use DateTimeImmutable;

/**
 * Calendar UI 
 * 
 * @version 1.0.0
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class Calendar implements CalendarInterface
{
    public $timeslotInterval = "1h";

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
        
        $result = [];

        $start = DateTimeImmutable::createFromFormat("Y-m-d H:i:s", "$date $slot");
        $end = $start->modify();

        return $result;
    }
}
