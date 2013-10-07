<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Governor extends Admin_student {
	
	private $student;
	
	//constructor
	public function __construct($params) {
		parent::__construct($params);	//calls constructor of the Admin_student
		$CI = & get_instance();
		$CI->load->model('student_model');
		$this->student = $CI->student_model;
	}
	
	//adds administrative rights to a given student
	//straightforward implementation
	//returns void
	public function addAdmin($stud_id) {
		$this->student->editStudent($stude_id, 'isadmin', true);
	}
	
	//deletes administrative rights to a given student
	//straightforward implementation
	//returns void
	public function deleteAdmin($stud_id) {
		$this->student->editStudent($stud_id, 'isadmin', false);
	}
	
	//clears the list of students with administrative rights
	//first, retrieves all students with administrative rights under the control of this governor
	//and iteratively deletes the administrative rights of the students
	public function clearAdmin() {
		//TODO
	}
	
	//turn over the governor rights to a new student
	//first edits the new student's isgovernor column to true
	//then edits this student's governor column to false
	public function turnOverRights($newGov) {
		//wala diay isgovernor na column, reconstruct the querries --> connect to college_model for this particular function
		//$this->student->editStudent($stud_id, 'isgovernor', true);	//edits the new student governorship rights
		//$this->student->editStudent(parent::getIdNum(), 'isgovernor', false); //edits the current governor's governorship rights
	}
	
}

/* End of file */
