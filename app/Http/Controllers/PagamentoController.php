<?php

namespace App\Http\Controllers;

use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index(){
        // prende dalla tabella pagamenti tutti gli elementi. è come fare una SELECT * FROM pagamenti e li salva in una collection nella variabile $pagamenti
        $pagamenti = Pagamento::all();

        // chiama la view pagamenti-index passandogli i dati di tutta la tabella pagamenti. nella view verranno stampati alcuni di questi dati utilizzati un foreach
        return view('pagamenti.pagamenti-index', compact('pagamenti'));
    }

    public function destroy($id){ // questo metodo fa una delete dell'elemento $id

        // NOTE: adesso stiamo facendo le funzioni di CRUD a manina ma laravel sa creare una default delle operazioni di CRUD in automatico. I nomi di alcuni metodi e route sono li stessi che usa laravel (ad esempio destroy, update, show, store)

        $pagamento = Pagamento::findOrFail($id); // trovo lo specifico elemento da eliminare con il metodo findOrFail che va a cercare l'elemento con quell'id.

        //NOTE: quelli richiamati con '::' invece di '->' si chiamano metodi statici. Concettualmente la differenza è che agiscono partendo dalla classe dell'oggetto e non da una specifica istanza. '->' invece viene chiamato da un istanza dell'oggetto cioè uno specifico oggetto crea su "uno stampo" di quella classe. 

        $pagamento -> delete(); // funzione delete per eliminare l'elemento

        return redirect() -> route('pagamenti-index'); // redirect alla pagina con la lista dei pagamenti (che mostrerà un elemento in meno: quello appena eliminato)
    }

    public function edit($id){
        // questa funzione semplicemnte manda a una pagina (view) in cui si può con un form aggiornare i dati di uno specifica riga del database partendo dall'id
        
        $pagamento = Pagamento::findOrFail($id); // cerco lo specifico elemento (tuple) con quell'id nella tabella pagamenti (attraverso il model Pagamento). Poi con la funzione compact mando tutti i dati di quell'elemento alla view.

        return view('pagamenti.pagamenti-edit', compact('pagamento'));
    }

    public function update(Request $request, $id){ // l'id arriva come attributo quando chiamo la action del form. Request $request è dove vengono mandati i dati del form

        $pagamento = Pagamento::findOrFail($id); // trovo l'elemento da aggiornare con findOrFail()

        $data = $request -> all(); // prendo da $request una prima scrematura dei dati in una forma che verrà accettata da update. Verranno aggiornati nel database solo i dati corrispondenti alle chiavi nella variabile $fillable del model Pagamento

        $pagamento -> update($data); // funzione update che prende in argomento i dati del form presenti in $data

        return redirect() -> route('pagamenti-index');
    }
   
}
