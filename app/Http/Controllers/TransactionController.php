<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $transaction = Transaction::where('kode_transaksi', 'LIKE', '%'.$search.'%')
                                ->orWhere('deskripsi', 'LIKE', '%'.$search.'%')
                                ->orderBy('id','desc')
                                ->paginate(6);

        // $transaction = Transaction::all();
        return view('transaction', ['transactionList' => $transaction]);
    }


    public function create(){
        return view('transaction-add');
    }

    public function store(Request $request){
        $transaction = Transaction::create($request->all());

        if($transaction){
            Session::flash('successtambah', 'success');
        }
        return redirect('/transaction');
    }

    public function edit(Request $request, $id){
        $transaction = Transaction::findOrFail($id);
        return view('transaction-edit', ['transaction' => $transaction]);
    }

    public function update(Request $request, $id){
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        if($transaction){
            Session::flash('successupdate', 'success');
        }
        return redirect('/transaction');
    }

    public function delete($id){
        $transaction = Transaction::findOrFail($id);
        return view('transaction-delete', ['transaction' => $transaction]);
    }

    public function destroy($id){
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        if($transaction){
            Session::flash('success', 'success');
            Session::flash('message', 'delete transaction Success!');
        }
        else{
            Session::flash('error','error');
            Session::flash('message', 'delete transaction Failed!');
        }
        return redirect('/transaction');
    }
    public function detail(){
        return view('transaction-detail');
    }

}
