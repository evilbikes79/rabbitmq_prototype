<?php

			# application modes
			# development: Events are not sent to our server
			# staging: Events are sent to our staging server.
			# production: Events are send to out production server.
	    abstract class Modes{
			    const development = "development";
			    const staging = "staging";
			    const production = "production";
			}

			# Different Compression Options - for event sending (including batch sending when throttling send rate).
	    # None
	    # GZIP
	    abstract class CompressionOptions{
			    const None = "none";
			    const GZip = "gzip";
			}

			# Different options for dealing with errors.
	    # Ignore: ignore failed sends
	    # Retry: retry failed sends
	    abstract class ErrorOptions{
		    const Ignore = "ignore";
		    const Retry = "retry";
			}

			# The Throttle Options
	    # events_per_second
	    # max_queue_size in events/messages
	    abstract class EventsPerSecond{
			    const one = "one";
			    const ten = "ten";
			}


	    abstract class MaxQueueSize{
			    const five_hundred = "five_hundred";
			    const four_thousand = "four_thousand";
			}

	# Used to configure the Sensor for sending data to the Learning Analytics Platform. 
	# @author vineet_sinha
	class Configurator {
	    
	   	# Setting the different modes for the app.
	   	# return the configurator for chaining other configuration methods
	    public function runMode($mode) {
	        return this;
	    }

	    # The Api key provided by the Analytics team.
	    # return the configurator for chaining other configuration methods
	    public function apiKey($api_key) {
	        return this;
	    }

	    # Define the origin system, used for creating unique uri's to refer to objects.
	    # return the configurator for chaining other configuration methods
	    public function originSystem($system) {
	        return this;
	    }

	    # Use ssl to ensure that sent events by the sensor are encrypted
	    # return the configurator for chaining other configuration methods
	    public function useSSL($use_ssl) {
	        return this;
	    }

	    # Logging stream to use.
	    # @return the configurator for chaining other configuration methods
	    public function useLogging($out) {
	        return this;
	    }

	    # Support for dealing with errors on sending events.
	    # return the configurator for chaining other configuration methods
	    public function onSendError($errorResponse) {
	        return this;
	    }

	    # Compression mechanism for sending events.
	    # @return the configurator for chaining other configuration methods
	    public function set_compression_mode($compression_mode) {
	        return this;
	    }

	    public function set_events_per_second($events_per_second)
	    {
	    	return this;
	    }

	    public function set_max_queue_size($max_queue_size)
	    {
	    	return this;
	    }

	    #Pause sending events for a short duration.
	    #param sec seconds to pause sending
	    public function pauseSending($sec) {
	        return this;
	    }

	    # Start sending events.
	    # @return the configurator for chaining other configuration methods
	    public function startSending() {
	        return this;
	    }

	}

?>