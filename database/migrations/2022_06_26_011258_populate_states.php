<?php

use Illuminate\Database\Migrations\Migration;
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

        $piaui = new State();
        $piaui->name = "Piauí";
        $piaui->initials = "PI";
        $piaui->created_at = now();
        $piaui->updated_at = now();
        $piaui->save();

        $riograndedonorte = new State();
        $riograndedonorte->name = "Rio Grande do Norte";
        $riograndedonorte->initials = "RN";
        $riograndedonorte->created_at = now();
        $riograndedonorte->updated_at = now();
        $riograndedonorte->save();

        $sergipe = new State();
        $sergipe->name = "Sergipe";
        $sergipe->initials = "SE";
        $sergipe->created_at = now();
        $sergipe->updated_at = now();
        $sergipe->save();

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $minasgerais = State::where('initials', "MG")->first();
        if ($minasgerais) {
            $minasgerais->delete();
        }

        $espiritosanto = State::where('initials', "ES")->first();
        if ($espiritosanto) {
            $espiritosanto->delete();
        }

        $saopaulo = State::where('initials', "SP")->first();
        if ($saopaulo) {
            $saopaulo->delete();
        }

        $riodejaneiro = State::where('initials', "RJ")->first();
        if ($riodejaneiro) {
            $riodejaneiro->delete();
        }

        $parana = State::where('initials', "PA")->first();
        if ($parana) {
            $parana->delete();
        }

        $riograndedosul = State::where('initials', "RS")->first();
        if ($riograndedosul) {
            $riograndedosul->delete();
        }

        $santacatarina = State::where('initials', "SC")->first();
        if ($santacatarina) {
            $santacatarina->delete();
        }

        $matogrosso = State::where('initials', "MT")->first();
        if ($matogrosso) {
            $matogrosso->delete();
        }

        $matogrossodosul = State::where('initials', "MS")->first();
        if ($matogrossodosul) {
            $matogrossodosul
            ->delete();
        }

        $goias = State::where('initials', "GO")->first();
        if ($goias) {
            $goias
            ->delete();
        }

        $distritofederal = State::where('initials', "DF")->first();
        if ($distritofederal) {
            $distritofederal
            ->delete();
        }

        $acre = State::where('initials', "AC")->first();
        if ($acre) {
            $acre
            ->delete();
        }

        $amazonas = State::where('initials', "AM")->first();
        if ($amazonas) {
            $amazonas
            ->delete();
        }

        $amapa = State::where('initials', "AM")->first();
        if ($amapa) {
            $amapa
            ->delete();
        }

        $tocantins = State::where('initials', "TO")->first();
        if ($tocantins) {
            $tocantins
            ->delete();
        }

        $roraima = State::where('initials', "RR")->first();
        if ($roraima) {
            $roraima
            ->delete();
        }

        $para = State::where('initials', "PA")->first();
        if ($para) {
            $para
            ->delete();
        }

        $rondonia = State::where('initials', "RO")->first();
        if ($rondonia) {
            $rondonia
            ->delete();
        }

        $alagoas = State::where('initials', "AL")->first();
        if ($alagoas) {
            $alagoas
            ->delete();
        }

        $bahia = State::where('initials', "BA")->first();
        if ($bahia) {
            $bahia
            ->delete();
        }

        $ceara = State::where('initials', "CE")->first();
        if ($ceara) {
            $ceara
            ->delete();
        }

        $maranhao = State::where('initials', "MA")->first();
        if ($maranhao) {
            $maranhao
            ->delete();
        }

        $paraiba = State::where('initials', "PB")->first();
        if ($paraiba) {
            $paraiba
            ->delete();
        }

        $pernambuco = State::where('initials', "PE")->first();
        if ($pernambuco) {
            $pernambuco
            ->delete();
        }

        $piaui = State::where('initials', "PI")->first();
        if ($piaui) {
            $piaui
            ->delete();
        }

        $riograndedonorte = State::where('initials', "RN")->first();
        if ($riograndedonorte) {
            $riograndedonorte
            ->delete();
        }

        $sergipe = State::where('initials', "SE")->first();
        if ($sergipe) {
            $sergipe
            ->delete();
        }
    }
}
