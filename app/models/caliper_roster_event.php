<?php

		abstract class Status{
    		const PRESENT = "added";
    		const ABSENT = "dropped";
    		const AUDITED = "audited";
		}

	class CaliperRosterEvent extends BaseModel {

		private $id;
		private $student_id;
		private $class_id;
		private $status;
		private $date;
		
	}

?>