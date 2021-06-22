<?php

namespace App\Http\Controllers\Customer;

use App\DataTables\ValletDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Vallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class ValletTransactionController extends Controller
{
    //

    public function index()
    {
        $vallets=auth()->user()->vallets;

        return view("customer.vallet-list", compact('vallets'));
    }


    public function create(Request $request)
    {
        $vallet=Vallet::find($request->vallet);

        return view("customer.crypto-transfer", compact('vallet'));
    }

    public function getUser(Request $request)
    {
        if(auth()->id()!=$request->id) {
            return User::whereHas("vallets", function ($query) {
                $query->where("token_id", 1);
            })->where("id", $request->id)->first();
            }
        }

    public function store(Request  $request)
    {
        $vallet=Vallet::find($request->vallet_id);

        if($vallet->balance>0 && intval($vallet->balance)>=intval($request->quentity)) {
            $customerVallet = User::find($request->id)->vallets()->where("token_id", $request->token_id)->first();
            DB::transaction(function () use ($request, $customerVallet) {
                Transaction::create([
                    "type" => 0,
                    "definition" => "Para Çıkışı",
                    "quentity" => $request->quentity,
                    "vallet_id" => $request->vallet_id,
                    "address" => $request->address,
                    "date" => Carbon::now()
                ]);
                Transaction::create([
                    "type" => 1,
                    "definition" => "Para Girişi",
                    "quentity" => $request->quentity,
                    "vallet_id" => $customerVallet->id,
                    "address" => $request->address,
                    "date" => Carbon::now()

                ]);
                Vallet::where("id", $customerVallet->id)->increment("balance", $request->quentity);
                Vallet::where("id", $request->vallet_id)->decrement("balance", $request->quentity);
            });
            Flash::success(__('transactions.saved', ['model' => __('models/transactions.singular')]));
            return redirect("/");
        }
        else
        {
            Flash::error(__('models/transactions.singular').' '.__('transactions.not_found'));
            return redirect("/transactions");
        }

    }
}
