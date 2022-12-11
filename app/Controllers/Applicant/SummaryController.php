<?php

declare(strict_types=1);

namespace App\Controllers\Applicant;

use App\Controllers\AbstractController;
use App\Helpers\AuthHelper;
use App\Models\Summary;

class SummaryController extends AbstractController
{
    public function index()
    {
        $summaries = $this->container->getSummaryRepository()->findAll();
        return $this->view('/layouts/applicant/summary/index', compact('summaries'));
    }

    public function create()
    {
        return $this->view('/layouts/applicant/summary/create');
    }

    public function store($request)
    {
        $request['user_id'] = AuthHelper::getAuthed()->getId();
        $summary = new Summary($request);
        $this->container->getSummaryRepository()
            ->create($summary);
        $this->redirect('/applicant/dashboard');
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}