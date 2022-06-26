<?php

use App\Models\President;

use Illuminate\Database\Migrations\Migration;

class PopulatePresident extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $lula = new President();
        $lula->name = "Luiz inácio lula da silva";
        $lula->code = 13;
        $lula->created_at = now();
        $lula->updated_at = now();
        $lula->save();

        $bolsonaro = new President();
        $bolsonaro->name = "Jair Bolsonaro";
        $bolsonaro->code = 22;
        $bolsonaro->created_at = now();
        $bolsonaro->updated_at = now();
        $bolsonaro->save();

        $ciro = new President();
        $ciro->name = "Ciro Gomes";
        $ciro->code = 12;
        $ciro->created_at = now();
        $ciro->updated_at = now();
        $ciro->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $lula = President::where('code', 13)->first();
        if ($lula) {
            $lula->delete();
        }

        $bolsonaro = President::where('code', 22)->fisrt();
        if ($bolsonaro) {
            $bolsonaro->delete();
        }

        $ciro = President::where('code', 12)->first();
        if ($ciro) {
            $ciro->delete();
        }
    }
}
