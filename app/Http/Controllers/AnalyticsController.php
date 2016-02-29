<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use LaravelAnalytics;
use DB;

class AnalyticsController extends Controller
{
	public $site_id;

	public function __construct( $site_id = false )
	{
		if ( $site_id === false )
		{
			$site_id = env('ANALYTICS_SITE_ID');
		}
	}

	public function index( $numberOfDays = 7 )
	{
		$data = LaravelAnalytics::getVisitorsAndPageViews($numberOfDays);
		return view('analytics.index', compact('data'));
	}

	public function live()
	{
		$analyticsData = LaravelAnalytics::getActiveUsers();
		dd($analyticsData);
	}

	public function getVisitorsAndPageViews($numberOfDays = 365, $groupBy = 'date')
	{

	}

	// public function getVisitorsAndPageViewsForPeriod($startDate, $endDate, $groupBy = 'date')

    public function getTopKeywords($numberOfDays = 365, $maxResults = 30)
    {

    }

    // public function getTopKeyWordsForPeriod($startDate, $endDate, $maxResults = 30)

    public function getTopReferrers($numberOfDays = 365, $maxResults = 20)
    {

    }

    // public function getTopReferrersForPeriod($startDate, $endDate, $maxResults)

    public function getTopBrowsers($numberOfDays = 365, $maxResults = 6)
    {

    }

    // public function getTopBrowsersForPeriod($startDate, $endDate, $maxResults) 

    public function getMostVisitedPages($numberOfDays = 365, $maxResults = 20)
    {

    }

    // public function getMostVisitedPagesForPeriod($startDate, $endDate, $maxResults = 20)

}
