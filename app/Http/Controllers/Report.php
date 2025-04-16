<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
use App\Models\BankLog;
use App\Models\Earning;
use App\Models\Expense;
use App\Models\Funds;
use App\Models\Investment;
use App\Models\Loan;
use App\Models\Project;
use App\Models\ReturnOfInvestment;
use App\Models\Total_profit;
use App\Models\User;
use App\Models\Usershare;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class Report extends Controller
{

    public function accounts_report()
    {
        return view('reports.accounts');
    }

    public function get_accounts_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';
                $get_accounts_data = Account::whereRaw($query)->orderBy('id', 'DESC')->get();
            } else {
                $get_accounts_data = Account::orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_accounts_data)->make(true);
        }
    }


    public function funds_report()
    {
        $usershares = Usershare::pluck('name', 'id');
        return view('reports.funds_report', compact('usershares'));
    }


    public function get_funds_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->usershare_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $usershare_id = $request->usershare_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($usershare_id == '') {
                    $get_funds = Funds::whereRaw($query)->with('usershare', 'user')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = Funds::whereRaw($query)->where('usershare_id', $usershare_id)->with('usershare', 'user')->get();
                }
            } else {
                $get_funds = Funds::with('usershare', 'user')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }

    public function projects_report()
    {
        $users = User::whereNotIn('id', [1])->pluck('name', 'id');
        return view('reports.projects_report', compact('users'));
    }


    public function get_projects_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->user_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $user_id = $request->user_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($user_id == '') {
                    $get_funds = Project::whereRaw($query)->with('user', 'editorName')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = Project::whereRaw($query)->where('user_id', $user_id)->with('user', 'editorName')->get();
                }
            } else {
                $get_funds = Project::with('user', 'editorName')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }

    public function investments_report()
    {
        $users = User::pluck('name', 'id');
        $projects = Project::pluck('name', 'id');
        return view('reports.investments_report', compact('users', 'projects'));
    }


    public function get_investments_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->project_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $project_id = $request->project_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($project_id == '') {
                    $get_funds = Investment::whereRaw($query)->with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = Investment::whereRaw($query)->where('project_id', $project_id)->with('user', 'editorName', 'project')->get();
                }
            } else {
                $get_funds = Investment::with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }


    public function roi_report()
    {
        $users = User::pluck('name', 'id');
        $projects = Project::pluck('name', 'id');
        return view('reports.roi_report', compact('users', 'projects'));
    }


    public function get_roi_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->project_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $project_id = $request->project_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($project_id == '') {
                    $get_funds = ReturnOfInvestment::whereRaw($query)->with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = ReturnOfInvestment::whereRaw($query)->where('project_id', $project_id)->with('user', 'editorName', 'project')->get();
                }
            } else {
                $get_funds = ReturnOfInvestment::with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }

    public function earnings_report()
    {
        $users = User::pluck('name', 'id');
        $projects = Project::pluck('name', 'id');
        return view('reports.earning_report', compact('users', 'projects'));
    }


    public function get_earnings_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->project_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $project_id = $request->project_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($project_id == '') {
                    $get_funds = Earning::whereRaw($query)->with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = Earning::whereRaw($query)->where('project_id', $project_id)->with('user', 'editorName', 'project')->get();
                }
            } else {
                $get_funds = Earning::with('user', 'editorName', 'project')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }

    public function expenses_report()
    {
        $users = User::pluck('name', 'id');
        return view('reports.expenses_report', compact('users'));
    }


    public function get_expenses_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->user_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $user_id = $request->user_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($user_id == '') {
                    $get_funds = Expense::whereRaw($query)->with('user', 'editorName')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = Expense::whereRaw($query)->where('user_id', $user_id)->with('user', 'editorName')->get();
                }
            } else {
                $get_funds = Expense::with('user', 'editorName')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }

    public function bank_report()
    {
        $banks = Bank::pluck('display_name', 'id');
        return view('reports.bank_report', compact('banks'));
    }

    public function get_banks_data(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->bank_id) || !empty($request->from_date)) {
                $startdate = $request->from_date;
                $enddate = $request->to_date;
                $bank_id = $request->bank_id;

                $query = 'date(date) between "' . $startdate . '" AND "' . $enddate . '"';

                if ($bank_id == '') {
                    $get_funds = BankLog::whereRaw($query)->with('bank', 'user')->orderBy('id', 'DESC')->get();
                } else {
                    $get_funds = BankLog::whereRaw($query)->where('bank_id', $bank_id)->with('bank', 'user')->get();
                }
            } else {
                $get_funds = BankLog::with('bank', 'user')->orderBy('id', 'DESC')->get();
            }
            return DataTables::of($get_funds)->make(true);
        }
    }


    public function assets_report()
    {
        $banks = Bank::get();
        $projects = Project::get();
        $loans = Loan::where('due', '!=', '0')->get();
        $fund_data = Total_profit::latest()->first();
        $total_expenses = Expense::get();
        $total_exp = 0;
        foreach ($total_expenses as $total_expense) {
            $total_exp += $total_expense->amount;
        }

        return view('reports.assets_report', compact('banks', 'projects', 'loans', 'fund_data', 'total_exp'));
    }
}
