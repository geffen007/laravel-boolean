<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;  //model creato in precedenza in app/student.php, App con A maiuscolo


class StudentController extends Controller
{
    protected $data;


    public function studenti(){
        $data = Student::all();
        return view('studenti', compact('data'));
    }

    public function show($id){
        $student = Student::find($id);
        if (empty($student)) {
            abort(404);
        }
        return view('carriere.show', compact('student'));
    }







    // protected $students;
    //
    //
    // public function __construct(){
    //     $this->students = config('students');
    // }
    //
    // public function studenti(){
    //     $data = $this->students;
    //     return view('studenti', compact('data'));
    // }
    //
    // public function show($id){
    //     if(!array_key_exists($id, $this->students)){
    //         abort(404);
    //     }else{
    //         $student = $this->students[$id];
    //         return view('carriere.show', compact('student'));
    //     }
    // }
    // //slug
// public function slug ($slug){
//     //ciclo foreach per trovare elementi con quello slug
//     foreach($this->students as $studente){
//         if ($studente['slug'] == $slug) {
//         //inserisco i corrispondenti all'interno di una variabile
//             $student = $studente;
//         //se trova corrispondenti, allora trovato=true
//             $trovato = true;
//         }
//     }
//     //quando la variabile $trovato=true mi mostra la pagina
//     if($trovato){
//         return view('slug', compact('student'));
//     }else {//quando invece $trovato=false mi darà errore 404
//         abort(404);
//     }
// }
}
