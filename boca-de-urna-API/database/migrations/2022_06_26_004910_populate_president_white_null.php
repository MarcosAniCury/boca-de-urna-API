<?php

use App\Models\President;

use Illuminate\Database\Migrations\Migration;

class PopulatePresidentWhiteNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $nulo = new President();
        $nulo->name = "Nulo";
        $nulo->code = -1;
        $nulo->created_at = now();
        $nulo->updated_at = now();
        $nulo->save();

        $branco = new President();
        $branco->name = "Branco";
        $branco->code = -2;
        $branco->created_at = now();
        $branco->updated_at = now();
        $branco->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $nulo = President::where('code', -1)->first();
        if ($nulo) {
            $nulo->delete();
        }

        $branco = President::where('code', -2)->first();
        if ($branco) {
            $branco->delete();
        }
    }
}
