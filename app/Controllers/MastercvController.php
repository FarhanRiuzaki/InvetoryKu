<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mastercv;
use App\Models\Mastercveducation;
use App\Models\Mastercvexperience;
use App\Models\Mastercvskill;
use Dompdf\Dompdf;

class MastercvController extends BaseController
{
	protected $model;

	function __construct()
	{
		$this->MasterCv 			= new Mastercv();
		$this->MasterCvEducations 	= new Mastercveducation();
		$this->MasterCvExperiences 	= new Mastercvexperience();
		$this->MasterCvSkills 		= new Mastercvskill();
	}

	public function index()
	{

		$result = new Mastercv();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'CV']),
			'page_title' => view('partials/page-title', ['title' => 'Curriculum Vitae', 'li_1' => 'Curriculum Vitae', 'li_2' => 'List Curriculum Vitae']),
			'records' => $result->findAll()
		];

		return view('cv/index', $data);
	}


	public function add()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'CV']),
			'page_title' => view('partials/page-title', ['title' => 'Curriculum Vitae', 'li_1' => 'Curriculum Vitae', 'li_2' => 'Add Curriculum Vitae']),
		];

		return view('cv/add', $data);
	}

	public function edit($id)
	{
		$record 		= $this->MasterCv->find($id);
		$education		= $this->MasterCvEducations->where('master_cv_id', $id)->findAll();
		$experience		= $this->MasterCvExperiences->where('master_cv_id', $id)->findAll();
		$skill			= $this->MasterCvSkills->where('master_cv_id', $id)->findAll();

		$data = [
			'title_meta' 	=> view('partials/title-meta', ['title' => 'Stocks']),
			'page_title' 	=> view('partials/page-title', ['title' => 'Management Stocks', 'li_1' => 'Stocks', 'li_2' => 'View Record']),
			'record' 		=> $record,
			'education'		=> $education,
			'experience'	=> $experience,
			'skill'			=> $skill,
		];
		// dd($data);
		return view('cv/edit', $data);
	}

	public function update()
	{
		// delete record 
		$id = $this->request->getVar('id');

		$this->MasterCv->delete($id);
		$this->MasterCvEducations->where('master_cv_id', $id)->delete();
		$this->MasterCvExperiences->where('master_cv_id', $id)->delete();
		$this->MasterCvSkills->where('master_cv_id', $id)->delete();

		$this->MasterCv 				= new Mastercv();
		$this->MasterCvEducations 	= new Mastercveducation();
		$this->MasterCvExperiences 	= new Mastercvexperience();
		$this->MasterCvSkills 		= new Mastercvskill();

		// SAVE PARENT 
		$parent = [
			"name" 		=> $this->request->getVar('name'),
			"title"		=> $this->request->getVar('title'),
			"phone"		=> $this->request->getVar('phone'),
			"email"		=> $this->request->getVar('email'),
			"address"	=> $this->request->getVar('address'),
			"description"	=> $this->request->getVar('description'),
		];
		$this->MasterCv->save($parent);
		$parent_id = $this->MasterCv->getInsertID();

		// SAVE CHILD EDUCATION
		foreach ($this->request->getVar('master_cv_educations') as $key => $value) {
			$child = [
				"master_cv_id"	=> $parent_id,
				"name"			=> $value['name'],
				"title"			=> $value['title'],
				"start_date"	=> $value['start_date'],
				"end_date"	=> $value['end_date'],
			];
			$this->MasterCvEducations->save($child);
		}

		// SAVE CHILD EXPERIENCE
		foreach ($this->request->getVar('master_cv_experiences') as $key => $value) {
			if (@$value['title']) {
				$child = [
					"master_cv_id"	=> $parent_id,
					"title"			=> $value['title'],
					"company_name"	=> $value['company_name'],
					"description"	=> $value['description'],
					"start_date"	=> $value['start_date'],
					"end_date"		=> $value['end_date'],
				];
				$this->MasterCvExperiences->save($child);
			}
		}
		// SAVE CHILD EXPERIENCE
		foreach ($this->request->getVar('master_cv_skills') as $key => $value) {
			$child = [
				"master_cv_id"	=> $parent_id,
				"name"			=> $value['name'],
			];
			$this->MasterCvSkills->save($child);
		}

		return redirect()->route('cv-list');
	}

	public function store()
	{
		// dd($this->request->getVar());
		$this->MasterCv 				= new Mastercv();
		$this->MasterCvEducations 	= new Mastercveducation();
		$this->MasterCvExperiences 	= new Mastercvexperience();
		$this->MasterCvSkills 		= new Mastercvskill();

		// SAVE PARENT 
		$parent = [
			"name" 		=> $this->request->getVar('name'),
			"title"		=> $this->request->getVar('title'),
			"phone"		=> $this->request->getVar('phone'),
			"email"		=> $this->request->getVar('email'),
			"address"	=> $this->request->getVar('address'),
			"description"	=> $this->request->getVar('description'),
		];
		$this->MasterCv->save($parent);
		$parent_id = $this->MasterCv->getInsertID();

		// SAVE CHILD EDUCATION
		foreach ($this->request->getVar('master_cv_educations') as $key => $value) {
			$child = [
				"master_cv_id"	=> $parent_id,
				"name"			=> $value['name'],
				"title"			=> $value['title'],
				"start_date"	=> $value['start_date'],
				"end_date"	=> $value['end_date'],
			];
			$this->MasterCvEducations->save($child);
		}

		// SAVE CHILD EXPERIENCE
		foreach ($this->request->getVar('master_cv_experiences') as $key => $value) {
			if (@$value['title']) {
				$child = [
					"master_cv_id"	=> $parent_id,
					"title"			=> $value['title'],
					"company_name"	=> $value['company_name'],
					"description"	=> $value['description'],
					"start_date"	=> $value['start_date'],
					"end_date"		=> $value['end_date'],
				];
				$this->MasterCvExperiences->save($child);
			}
		}
		// SAVE CHILD EXPERIENCE
		foreach ($this->request->getVar('master_cv_skills') as $key => $value) {
			$child = [
				"master_cv_id"	=> $parent_id,
				"name"			=> $value['name'],
			];
			$this->MasterCvSkills->save($child);
		}

		return redirect()->route('cv-list');
	}

	public function delete()
	{
		$id = $this->request->getVar('id');

		$this->MasterCv->delete($id);
		$this->MasterCvEducations->where('master_cv_id', $id)->delete();
		$this->MasterCvExperiences->where('master_cv_id', $id)->delete();
		$this->MasterCvSkills->where('master_cv_id', $id)->delete();

		return redirect()->route('cv-list');
	}

	public function domPdf($id)
	{

		$cv 		= $this->MasterCv->find($id);
		$education	= $this->MasterCvEducations->where('master_cv_id', $id)->findAll();
		$experience	= $this->MasterCvExperiences->where('master_cv_id', $id)->findAll();
		$skill		= $this->MasterCvSkills->where('master_cv_id', $id)->findAll();

		$filename = date('y-m-d-H-i-s') . '-qadr-labs-report';

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();

		// load HTML content
		$dompdf->loadHtml(view('cv/dom-pdf', [
			'cv'			=> $cv,
			'education'		=> $education,
			'experience'	=> $experience,
			'skill'			=> $skill,
		]));

		// (optional) setup the paper size and orientation
		$dompdf->setPaper('A4', 'potrait');

		// render html as PDF
		$dompdf->render();

		// output the generated pdf
		$dompdf->stream($filename, array("Attachment" => false));
	}

	public function pdf($id)
	{
		$cv 		= $this->MasterCv->find($id);
		$education	= $this->MasterCvEducations->where('master_cv_id', $id)->findAll();
		$experience	= $this->MasterCvExperiences->where('master_cv_id', $id)->findAll();
		$skill		= $this->MasterCvSkills->where('master_cv_id', $id)->findAll();

		// dd($cv, $education, $experience, $skill);
		return view('cv/pdf', [
			'cv'			=> $cv,
			'education'		=> $education,
			'experience'	=> $experience,
			'skill'			=> $skill,
		]);
	}
}
