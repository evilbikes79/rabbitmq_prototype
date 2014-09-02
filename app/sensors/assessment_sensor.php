<?php

# Events representing the Assessment Metric Profile. Events here 
# represent assessments (assignments) being created, started, and submitted. 
# For assessments being graded see {@link PerformanceSensor}. 
# @author vineet_sinha
# adapted for PHP by Alex Bromley
class AssessmentSensor extends Sensor {

    # When an instructor creates an assessment.
    # @param instructor the instructor creating the assessment
    # @param assessment the assessment that has just been created
    # @return the sensor for chaining other sensor methods
    public function created($instructor, $assessment) {
        return this;
    }

    # When a student starts an assessment. I.e. an assessment attempt.
    # @param student the student doing the assessment
    # @param assessmentAttempt the assessment attempt that has just been started
    # @return the sensor for chaining other sensor methods
    public function started($student, $assessmentAttempt) {
        return this;
    }

    # When a student starts an assessment. I.e. an assessment attempt, at a specific time.
    # @param student the student doing the assessment
    # @param assessmentAttempt the assessment attempt that has just been started
    # @param startDate the date that the assessment is started
    # @return the sensor for chaining other sensor methods
    public function started($student, $assessmentAttempt, $startDate) {
        return this;
    }

    # When a student submits an assessment. I.e. an assessment attempt.
    # @param student the student doing the assessment
    # @param assessmentAttempt the assessment attempt that has been submitted
    # @param dueDate the date that the assessment was due
    # @return the sensor for chaining other sensor methods
    public function submitted($student, $assessmentAttempt, $dueDate, $timeTaken) {
        return this;
    }

    # When a student submits an assessment. I.e. an assessment attempt, at a specific time.
    # @param student the student doing the assessment
    # @param assessmentAttempt the assessment attempt that has been submitted
    # @param submitDate the submit that the assessment was submitted
    # @param dueDate the date that the assessment was due
    # @return the sensor for chaining other sensor methods
    public function submitted($student, $assessmentAttempt, $dueDate, $submitDate, $timeTaken) {
        return this;
    }

}

?>