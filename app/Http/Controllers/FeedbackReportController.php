<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackReportRequest;
use App\Http\Requests\UpdateFeedbackReportRequest;
use App\Models\FeedbackReport;

class FeedbackReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeedbackReport::latest()->paginate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedbackReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackReportRequest $request)
    {
        $report = FeedbackReport::create($request->all());
        return response()->json($report, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackReport $feedbackReport)
    {
        return $feedbackReport;
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
     * @param  \App\Http\Requests\UpdateFeedbackReportRequest  $request
     * @param  \App\Models\FeedbackReport  $feedbackReport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackReportRequest $request, FeedbackReport $feedbackReport)
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
        //
    }
}
