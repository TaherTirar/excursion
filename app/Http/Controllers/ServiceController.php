<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Contact;


class ServiceController extends Controller
{
    public function index(){
        $services= Service::where('type','excursion')->get();
        $kechActivities=Service::where('type','activite')->where('destination','Marrakech')->get();
        $AgafayActivities=Service::where('type','activite')->where('destination','Agafay')->get();
        $EssaouiraActivities=Service::where('type','activite')->where('destination','Essaouira')->get();

        return view('layouts.index', compact('services','kechActivities','AgafayActivities','EssaouiraActivities'));
    }

    public function excursion(Request $request){
        $services= Service::where('type','excursion')->get();
        $query = $request->input('query');

        $results = Service::where('titre', 'like', '%'.$query.'%')->get();

        // dd($services);
        return view('layouts.excursion', compact('services','results'));
    }
    public function activity(Request $request){
        $services= Service::where('type','activite')->get();
        // $query = $request->input('query');

        // $results = Service::where('titre', 'like', '%'.$query.'%')->get();

        // dd($services);
        return view('layouts.activité', compact('services'));
    }
    public function show($id)
    {
        $activity = Service::findOrFail($id);
        $activities= Service::orderBy('price')->take(5)->get();
        return view('layouts.detail', compact('activity','activities'));

    }

    public function contact(){
        return view('layouts.contact');
    }

    public function store(Request $request){
        Contact::create(['nom'=>$request->input('nom'),'tel'=>$request->tel,'email'=>$request->email,
        'sujet'=>$request->sujet,'message'=>$request->message]);
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ]);

        // Vérifier s'il y a des erreurs de validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Créer un nouvel enregistrement dans la base de données
        Contact::create($request->all());

        // Ajouter un message de succès à la session
        return redirect()->back()->with('success', 'Nous avons bien reçu vos coordonnées. Nous vous contacterons dès que possible.');

    }




}
