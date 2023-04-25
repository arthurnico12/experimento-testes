<?php
class TesteImovelDeleteCest
{
    // Delete
    public function testeImovelDelete(FunctionalTester $I)
    {
        $I->wantTo(' Verificar se a deleção de informações de uma pessoa está correta.
');
        $model = $I->grabRecord('app\models\Imovel', array('nome' => 'Casa Grande'));
        $id = $model->id;
        $I->amOnRoute('imovel/delete', ['id' => $id]);
        $I->dontSeeRecord('app\models\Imovel', [
            'id' => $id,
            'nome' => $model->nome,
        ]);
    }
}
