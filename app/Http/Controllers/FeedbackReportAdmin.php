<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackReportRequest;
use App\Models\FeedbackReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackReportAdmin extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = FeedbackReport::latest()->paginate();
        return view('reports.index', [
            'reports' => $reports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    public function postcreate(){
        return view('reports.postcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackReportRequest $request)
    {
        $report = FeedbackReport::create($request->all());
        if(Auth::check()){
            return redirect('/reports')->with('status', 'Created successfully');
        } else {
            return redirect('reports-postcreate');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackReport $feedbackReport)
    {

        return view('reports.show', [
            'report' => $feedbackReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackReport $feedbackReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackReport $feedbackReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackReport $feedbackReport)
    {
        $feedbackReport->delete();
        return redirect('/reports')->with('status', 'Deleted successfully');
    }
}
