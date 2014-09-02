<?php

		abstract class Status{
    		const PRESENT = "present";
    		const ABSENT = "absent";
    		const TARDY = "tardy";
    		const EXCEPTION = "exception";
		}

	class CaliperAttendanceEvent extends BaseModel {

		private $id;
		private $status;
		
	}

?>