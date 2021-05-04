<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Answere extends Controller
{
       /**
     * @return redirect 
     * @params Request 
     * 
     */
    
    public function CreateAnswere(Request $request) { 

        // get form data 
        $form = $request->only('question', 'contet');

        // check id question 
        $data = DB::table('question')->where('id', $form['question'])->first(); 
        if(!$data) { 
            return redirect('/');
        }

        // add user in array 
       $form['user'] = auth()->user()->name;

    //    add answere 
       Db::table('answere')->insert([$form]);
       
       $request->session()->flash('msg', 'sucess answere');
       return redirect(url('detail_question/'. $form['question']));

    }

       /**
     * @return redirect 
     * @params Request , $id
     * 
     */
    public function EditAnswere(Request $request, $id) { 

        $row = Db::table('answere')->where('id', $id); 
        $form = $request->only('question', 'contet');

        // check id and user 
        if(!$row->first()){ 

            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('detail_question'.$form['question']));

        }else if(!$row->first()->user == auth()->user()->name){ 

            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('detail_question/'.$form['question']));
        }

        // update data 

        $row->update($form);
        $request->session()->flash('msg', 'sucess edit data');
        return redirect(url('detail_question/'.$form['question']));

    }

       /**
     * @return redirect 
     * @params Request , $id,$id_question
     * 
     */
    public function DeleteAnswere(Request $request, $id, $id_question) { 

        $row = Db::table('answere')->where('id', $id); 

        // check id and user 
        if(!$row->first()){ 

            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('detail_question/'.$id_question));

        }else if(!$row->first()->user == auth()->user()->name){ 

            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('detail_question/'.$id_question));
        }

        $row->delete();


        $request->session()->flash('msg', 'sucess delete data');
        return redirect(url('detail_question/'.+$id_question));



    }
}
