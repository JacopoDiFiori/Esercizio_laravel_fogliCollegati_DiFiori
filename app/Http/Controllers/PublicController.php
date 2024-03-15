<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{
    public function aboutUs(){
        
        $students = [
            ["name"=>"Tatiana", "surname"=>"Deiana"],
            ["name"=>"Antonio", "surname"=>"Gallo"],
            ["name"=>"Ertygen", "surname"=>"Sula"],
        ];
        
        return view('chiSiamo', ['students'=>$students]);
    }
    // fine students


    // inizio contacts
    public $contacts = [
        ['id'=>'1', 'name'=>'Francesco', 'phone'=>'3428026759','address'=>'Viale mazzini 3'],
        ['id'=>'2', 'name'=>'Asia', 'phone'=>'1235647890','address'=>'Via giuseppe garibaldi 4'],
        ['id'=>'3', 'name'=>'Giovanni', 'phone'=>'3422806579','address'=>'Viale mazzini 3'],
        ['id'=>'4', 'name'=>'Alberto', 'phone'=>'1287465390','address'=>'Via giuseppe garibaldi 4'],
        ['id'=>'5', 'name'=>'Giovanni', 'phone'=>'34333333333','address'=>'Viale garibaldi 4'],
        ['id'=>'6', 'name'=>'Angelo', 'phone'=>'1235647890','address'=>'Via giuseppe garibaldi 4'],
    ];
    
    public function contacts(){
        

        return view('contactUs', ['contacts'=>$this->contacts]);
        
    }
    
    
    
    public function homepage(){
        return view('welcome');
    }
    





    public function contactDetail($id){
        
        //? Voglio che al click sul bottone venga effettuato un controllo per ognuno dei contatti in $this->contacts

        //* Devo fare un foreach($this->contacts as $contact)
        //* Devo controllare se c'è il valore che sto passando ($name) alla chiave $contact['name'] 
        //* Devo ritornare una vista con le informazioni del contatto cliccato

        //? Eseguito con un ciclo For

        foreach($this->contacts as $contact){
            if($contact['id'] == $id){
                return view('contactDetail', ['contact'=>$contact]);
            }
        }

    }
}
