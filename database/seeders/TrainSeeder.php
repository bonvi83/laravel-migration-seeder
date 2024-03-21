<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // vado a creare un nuovo treno, quindi una nuova riga del database
    public function run()
    {
        $train = new Train;

        $train->azienda = "ferrovie Bonvi";
        $train->stazione_di_partenza = "Terra";
        $train->stazione_di_arrivo = "Paradiso";
        $train->orario_di_partenza = "07:00";
        $train->orario_di_arrivo = "07:01";
        $train->numero_di_fermate = "0";
        $train->codice_treno = "è il tuo turno";
        $train->numero_di_carrozze = "1";
        $train->prezzo_del_biglietto = "la vita";
        $train->posto_a_sedere = "alla destra del padre";
        $train->fumatori = 0;
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
    // ovviamente posso agguingere tutti i treni che voglio, tramite un ciclo di un arrey
}
