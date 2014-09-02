<?php

		abstract class EventsPerSecond{
			    const HOMEWORK = "homework";
			    const QUIZ = "quiz";
			    const EXAM = "exam";
			    const PRACTICE = "practice";
			    const CLASSWORK = "classwork";
			    const PROJECT = "project";
		}

	class CaliperAssessment extends BaseModel {

		private $id;
		private $learning_context;
		private $category;
		private $due_date;
		private $max_score_possible;
		private $topics;

		public function CaliperAssessment($assessmentId, $courseId, $sectionId,
			 $category, $dueDate, $maxScorePossible, $topics) {
		}

	}

?>