<?php

	# Events representing the Attendance Metric Profile. Events here 
	# represent assessments (assignments) being graded, and eventually 
	# other gradebook events.
	# author: Alex Bromley

	class PerformanceSensor extends Sensor {

	    # When an assessment attempt receives a grade (usually by automated grading).
	    # @param student the student that did the assessment
	    # @param assessmentAttempt the assessment attempt
	    # @param score the score
	    # @return the sensor for chaining other sensor methods
	    public function recordedAs($student, $status) {
	        return this;
	    }

	}

?>