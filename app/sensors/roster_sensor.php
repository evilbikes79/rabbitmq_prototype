<?php

    # Events representing the Roster Metric Profile. Events here represent students adding/dropping a course. 
    # @author vineet_sinha
    # adapted for PHP by Alex Bromley

    class RosterSensor extends Sensor {

        # When a student adds a course.
        # @param student the student adding the course
        # @param learningContext the course, section, etc
        # @return the sensor for chaining other sensor methods
        public function added($status, $student_id, $class_id, $date) {
            return this;
        }

        # When a student drops a course.
        # @param student the student dropping the course
        # @param learningContext the course, section, etc
        # @return the sensor for chaining other sensor methods
        public function dropped($status, $student_id, $class_id, $date) {
            return this;
        }

    }

?>