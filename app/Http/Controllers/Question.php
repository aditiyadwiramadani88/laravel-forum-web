<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Question extends Controller
{

    /**
     * @return view 
     * @params Request 
     * 
     */
    public function AskQuestion(Request $request){
        if($request->isMethod("POST")){ 

            // validate 
            $request->validate([ 
                "question_name" =>  ["required"],
                'tag'           => ['required'],
                "content"       =>  ["required"]
            ]);

            // insert data 
            $data = $request->only("question_name", 'tag', 'content');
            $data['user'] = auth()->user()->email;
            Db::table('question')->insert($data);

            // sucess redirect 
            $request->session()->flash("msg", "sucess create question");
            return redirect(url('your_question'));
        }

        return view("question.ask_question");
        
    }
    /**
     * @return view 
     * 
     */

    public function ALlQuestion() {
            //  all question 
          $data =   DB::table('question')->paginate(20);
          return view('question.all_question', ["row" => $data]);
        

    }


    /**
     * @return view 
     * @params $id 
     * 
     */

    public function DetailQuestion($id) {
        
        //  get answere 
        $answere = DB::table('answere')->where('question', $id)->get();
        // get frist data 
        $data = DB::table('question')->where('id', $id)->first(); 
        if(!$data) { 
            return redirect('/');
        }
        
        return view('question.detail_question', ['row' =>  $data, 'ans' => $answere]);


    }


    /**
     * @return redirect 
     * @params Request , $id
     * 
     */

    public function EditQuestion(Request $request, $id)  { 

        // get data 
        $row =  Db::table('question');
        $db = $row->where('id', $id);


        // check user and question 
        if(!$row->where('user',auth()->user()->email)->first()){ 

            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('your_question'));
        }

        if(!$db) { 
            $request->session()->flash('msg-err', 'id not fout');
            return redirect(url('your_question'));
        }

        if($request->isMethod('POST')){ 
             // validate 
             $request->validate([ 
                "question_name" =>  ["required"],
                'tag'           => ['required'],
                "content"       =>  ["required"]
            ]);

            // get form data
            $data = $request->only("question_name", 'tag', 'content');
            // update data
           $db->update($data);

           $request->session()->flash('msg', 'sucess edit data '); 
           return redirect('your_question');


             }
             return view('question.edit_question', ['row' => $db->first()]);
    }


     /**
     * @return redirect 
     * @params Request , $id
     * 
     */

    public function DeleteQuestion(Request $request, $id) { 
                
            // get data 
            $row =  Db::table('question');
            $db = $row->where('id', $id);
    
            // check user and question 
            if(!$row->where('user',auth()->user()->email)->first()){ 

                $request->session()->flash('msg-err', 'id not fout');
                return redirect(url('your_question'));
            }    
            if(!$db) { 
                $request->session()->flash('msg-err', 'id not fout');
                return redirect(url('your_question'));
            }

            $db->delete();
           $request->session()->flash('msg', 'sucess delete data '); 
            return redirect(url('your_question'));

    }
    
       /**
     * @return view
     * 
     */

    public function YourQuestion() { 
        // get all data 
        $data=  Db::table('question')->where('user', auth()->user()->email)->paginate(20);

    
        return view('question.your_question', ['row' => $data]);

    }


       /**
     * @return view 
     * @params Request 
     * 
     */
    public function SearchQuestion(Request $request) { 
        
        $search = DB::table('question')
        ->where('question_name', 'like', "% ".$request->search."%")->paginate(20);
    return view('question.all_question', ["row" => $search]);

        

    }
  
}
