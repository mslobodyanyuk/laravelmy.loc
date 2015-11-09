<?php
namespace App\Http\Controllers;

use App\Project;
//use App\Slider;
use App\Myslider;
use App\Resume;
use App\Test;

class IndexController extends MainController{

    public function index(Myslider $slider)
    {
        //$this->data['slides'] = $slider->getActive();
        $this->data['myslides'] = $slider->getActive();//myslides

        return view('pages.index', $this->data);
    }

    public function projectList(Project $project)
    {
        $this->data['projects'] = $project->getActive();

        return view('pages.project_list', $this->data);
    }

    public function projectCart($slug, Project $project)
    {
        $this->data['project'] = $project->getBySlug($slug);

        return view('pages.project_cart', $this->data);
    }
/**********************************************************************/
    public function resumeList(Resume $resume)
    {
        $this->data['resumes'] = $resume->getActive();

        return view('pages.resume_list', $this->data);
    }

    public function resumeCart($slug, Resume $resume)
    {
        $this->data['resume'] = $resume->getBySlug($slug);

        return view('pages.resume_cart', $this->data);
    }
/**********************************************************************/

/**********************************************************************/
    public function testList(Test $test)
    {
        $this->data['tests'] = $test->getActive();

        return view('pages.test_list', $this->data);
    }

    public function testCart($slug, Test $test)
    {
        $this->data['test'] = $test->getBySlug($slug);

        return view('pages.test_cart', $this->data);
    }
/**********************************************************************/



    public function about()
    {
        $this->data['about'] = json_decode(file_get_contents(storage_path().'/administrator_settings/about.json'));

        return view('pages.about', $this->data);
    }



/**********************************************************************/
    public function aboutme()
    {
        $this->data['aboutme'] = json_decode(file_get_contents(storage_path().'/administrator_settings/aboutme.json'));

        return view('pages.aboutme', $this->data);
    }
/**********************************************************************/
/**********************************************************************/
    public function contactme()
    {
        $this->data['contactme'] = json_decode(file_get_contents(storage_path().'/administrator_settings/contactme.json'));

        return view('pages.contactme', $this->data);
    }
/**********************************************************************/
}