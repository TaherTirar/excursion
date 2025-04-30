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

        return view('index', compact('services','kechActivities','AgafayActivities','EssaouiraActivities'));
    }

    public function excursion(Request $request){
        $query = $request->input('query');

        if ($query) {
            $services = Service::where('type', 'excursion')
                ->where(function($q) use ($query) {
                    $q->where('titre', 'like', '%'.$query.'%')
                    ->orWhere('description', 'like', '%'.$query.'%');
                })
                ->paginate(6);
        } else {
            $services = Service::where('type','excursion')->paginate(6);
        }

        return view('excursion', compact('services'));
    }

    public function activity(Request $request){
        $services = Service::where('type','activite')->paginate(5);

        return view('activité', compact('services'));
    }

    public function show($id)
    {
        $activity = Service::findOrFail($id);
        $activities = Service::latest()->take(5)->get();
        return view('detail', compact('activity','activities'));
    }

    public function contact(){
        return view('contact');
    }

    public function store(Request $request){
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

    // Add the myReservations method with pagination
    public function myReservations(Request $request) {
        // Get the authenticated user
        $user = auth()->user();

        // Use the App\Reservation model
        $reservations = \App\Reservation::where('user_id', $user->id)
            ->paginate(10);

        return view('reservations.index', compact('reservations'));
    }
}
