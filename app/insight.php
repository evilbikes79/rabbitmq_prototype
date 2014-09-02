<?php

 # Main class to access capabilities of the Sensor. Configure via {@link Insight#configure(String)} 
 # to load settings and {@link #configure()} to change specific settings. The {@code measure*} methods 
 # provide access to the various Sensors. 
 # @author vineet_sinha
 # adapted for PHP by Alex Bromley

class Insight {

    # Configure the Sensor
    # return the configurator
    public static function configure() {
        config = new Configurator();
        return config;
    }

    # Configure the Sensor via File
    # @param configFileName the config file name
    # @return the configurator
    public static function configure($configFileName) {
        config = new Configurator();
        return config;
    }


    # Measure assessment metrics.
    # @return the Assessment sensor
    public static function measureAssessment() {
        sensor = new AssessmentSensor();
        return sensor;
    }

    # Measure assessment metrics.
    # @return the Assessment sensor
    public static function measureAttendance() {
        sensor = new AttendanceSensor();
        return sensor;
    }

    # Measure performance metrics.
    # @return the performance sensor
    public static function measurePerformance() {
        sensor = new PerformanceSensor();
        return sensor;
    }

    # Measure roster metrics.
    # @return the roster sensor
    public static function measureRoster() {
        sensor = new RosterSensor();
        return sensor;
    }


}

?>