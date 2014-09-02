<?php

 # Central class for events that need to be sent to the Analytics Platform. Event values 
 # are set here, and then {@link #send()} adds them to a queue (if throttling is enabled) for eventual sending.
 #  
 # @author vineet_sinha
 # adapted for PHP by Alex Bromley

 class BaseSensor {

    # Set event agent for sending.
    # @param uri 

    public function setAgent($uri) {
    }

    # Add properties to the event for sending.
    # @param name event property name
    # @param val event property value
    public function addEventProp($name, $val) {
    }
    
    # Add properties to the primary object of the event for sending.
    # @param name object property name
    # @param val object property value

    public function addObjProp($name, $val) {

    }
    
    # Send the event
    public function send() {
    }

}

?>