<?php

	# Events representing the Performance Metric Profile. Events here 
	# represent assessments (assignments) being graded, and eventually 
	# other gradebook events.
	# @author vineet_sinha
	class PerformanceSensor extends Sensor {

	    #When an assessment attempt receives a grade (usually by automated grading).
	    # @param student the student that did the assessment
	    # @param assessmentAttemptId the assessment attempt id
	    # @param attemptNo the attempt number
	    # @param score the score
	    # @return the sensor for chaining other sensor methods
	    public function receivedGradeFor($student, $assessmentAttemptId, $attemptNo, $score) {
	        return this;
	    }

	    # When an assessment receives a grade.
	    # @param student the student
	    # @param assessmentId the assessment id
	    # @param score the score
	    # @return the sensor for chaining other sensor methods
	    public function receivedGradeFor($student, $assessmentId, $score) {
	        return this;
	    }

	}

?>