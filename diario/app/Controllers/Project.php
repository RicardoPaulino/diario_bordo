<?php
namespace App\Controllers;
use App\Models\ProjectModel;

class Project extends BaseController
{
    public function index(): string
    {
        $projectModel = new ProjectModel();
        $projects = $projectModel->getProjectsByStatus();

        return view('project/index', ['projects' => $projects]);
    }
    public function create(): string
    {
        return view('project/create');
    }
    public function edit(int $id): string
    {
        return view('project/create',['id' => $id]);
    }
    public function delete(int $id): string
    {
        $data = $id;
        return view('project/index',['data' => $data]);
    }
}