<?php

	abstract class Types{
		    const INSTRUCTOR = "instructor";
		    const STUDENT = "student";
	}

	class CaliperAgent extends BaseModel {

		private $id;
		private $type;

	}

?>