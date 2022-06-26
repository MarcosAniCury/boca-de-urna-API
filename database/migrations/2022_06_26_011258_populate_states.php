<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\State;

class PopulateStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $minasgerais = new State();
        $minasgerais->name = "Minas Gerais";
        $minasgerais->initials = "MG";
        $minasgerais->created_at = now();
        $minasgerais->updated_at = now();
        $minasgerais->save();

        $espiritosanto = new State();
        $espiritosanto->name = "Espirito Santo";
        $espiritosanto->initials = "ES";
        $espiritosanto->created_at = now();
        $espiritosanto->updated_at = now();
        $espiritosanto->save();

        $saopaulo = new State();
        $saopaulo->name = "São Paulo";
        $saopaulo->initials = "SP";
        $saopaulo->created_at = now();
        $saopaulo->updated_at = now();
        $saopaulo->save();

        $riodejaneiro = new State();
        $riodejaneiro->name = "Rio de Janeiro";
        $riodejaneiro->initials = "RJ";
        $riodejaneiro->created_at = now();
        $riodejaneiro->updated_at = now();
        $riodejaneiro->save();

        $parana = new State();
        $parana->name = "Paraná";
        $parana->initials = "PR";
        $parana->created_at = now();
        $parana->updated_at = now();
        $parana->save();

        $riograndedosul = new State();
        $riograndedosul->name = "Rio Grande do Sul";
        $riograndedosul->initials = "RS";
        $riograndedosul->created_at = now();
        $riograndedosul->updated_at = now();
        $riograndedosul->save();

        $santacatarina = new State();
        $santacatarina->name = "Santa Catarina";
        $santacatarina->initials = "SC";
        $santacatarina->created_at = now();
        $santacatarina->updated_at = now();
        $santacatarina->save();

        $matogrossodosul = new State();
        $matogrossodosul->name = "Mato Grosso do Sul";
        $matogrossodosul->initials = "MS";
        $matogrossodosul->created_at = now();
        $matogrossodosul->updated_at = now();
        $matogrossodosul->save();

        $matogrosso = new State();
        $matogrosso->name = "Mato Grosso";
        $matogrosso->initials = "MT";
        $matogrosso->created_at = now();
        $matogrosso->updated_at = now();
        $matogrosso->save();

        $goias = new State();
        $goias->name = "Goías";
        $goias->initials = "GO";
        $goias->created_at = now();
        $goias->updated_at = now();
        $goias->save();

        $distritofederal = new State();
        $distritofederal->name = "Distrito Federal";
        $distritofederal->initials = "DF";
        $distritofederal->created_at = now();
        $distritofederal->updated_at = now();
        $distritofederal->save();

        $acre = new State();
        $acre->name = "Acre";
        $acre->initials = "AC";
        $acre->created_at = now();
        $acre->updated_at = now();
        $acre->save();

        $amazonas = new State();
        $amazonas->name = "Amazonas";
        $amazonas->initials = "AM";
        $amazonas->created_at = now();
        $amazonas->updated_at = now();
        $amazonas->save();

        $amapa = new State();
        $amapa->name = "Amapá";
        $amapa->initials = "AP";
        $amapa->created_at = now();
        $amapa->updated_at = now();
        $amapa->save();

        $tocantins = new State();
        $tocantins->name = "Tocantins";
        $tocantins->initials = "TO";
        $tocantins->created_at = now();
        $tocantins->updated_at = now();
        $tocantins->save();

        $para = new State();
        $para->name = "Pará";
        $para->initials = "PA";
        $para->created_at = now();
        $para->updated_at = now();
        $para->save();

        $roraima = new State();
        $roraima->name = "Roraima";
        $roraima->initials = "RR";
        $roraima->created_at = now();
        $roraima->updated_at = now();
        $roraima->save();

        $rondonia = new State();
        $rondonia->name = "Rondonia";
        $rondonia->initials = "RO";
        $rondonia->created_at = now();
        $rondonia->updated_at = now();
        $rondonia->save();

        $alagoas = new State();
        $alagoas->name = "Alagoas";
        $alagoas->initials = "AL";
        $alagoas->created_at = now();
        $alagoas->updated_at = now();
        $alagoas->save();

        $bahia = new State();
        $bahia->name = "Bahia";
        $bahia->initials = "BA";
        $bahia->created_at = now();
        $bahia->updated_at = now();
        $bahia->save();

        $ceara = new State();
        $ceara->name = "Ceará";
        $ceara->initials = "CE";
        $ceara->created_at = now();
        $ceara->updated_at = now();
        $ceara->save();

        $maranhao = new State();
        $maranhao->name = "Maranhão";
        $maranhao->initials = "MA";
        $maranhao->created_at = now();
        $maranhao->updated_at = now();
        $maranhao->save();

        $paraiba = new State();
        $paraiba->name = "Paraíba";
        $paraiba->initials = "PB";
        $paraiba->created_at = now();
        $paraiba->updated_at = now();
        $paraiba->save();

        $pernambuco = new State();
        $pernambuco->name = "Pernambuco";
        $pernambuco->initials = "PE";
        $pernambuco->created_at = now();
        $pernambuco->updated_at = now();
        $pernambuco->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
